<?php
require_once "./model/Product.php";
require_once "./model/Category.php";
require_once "./model/ProductCategory.php";

class ProductController {
    function create(){

        $categoryModel = new Category();
        $categories = $categoryModel->getAll();

        include "views/dashboard/products/create.php";
    }

    function store(){

//        echo "<pre>";
//        var_dump($_POST);
//        echo "<pre>";
//        die();

        if(isset($_POST["submit"])){

//            echo "<pre>";
//            var_dump($_FILES);
//            echo "<pre>";
//            die();

            $errorCount = 0;

            $req = $_POST;

            if(!isset($_FILES["image"]["size"]) || $_FILES["image"]["size"] == 0){
                $errorCount++;
                $_SESSION["error"]["image"] = "فایل الزامی است";
            }

            $fileName = $_FILES["image"]["name"];

            $number = 1;
            while(file_exists("media/".$fileName)){
                $fileNameArray = explode(".",$fileName);
                $fileNameArray[0] = $fileNameArray[0]."(".$number.")";
                $fileName = implode(".",$fileNameArray);
                $number++;
            }


            if(isset($_FILES["image"]["size"])){
                $size = $_FILES["image"]["size"];

                if($size > 100000){
                    $errorCount++;
                    $_SESSION["error"]["image"] = "سایز تصویر باید کمتر از 100 کیلوبایت باشد";
                }
            }


            if($errorCount !== 0){
                redirect("/dashboard/products/create");
            }


            $requiredInputs = [
                "name"=>"نام",
                "enname"=>"نام انگلیسی",
                "price"=>"قیمت",
            ];

            foreach ($requiredInputs as $inputName=>$inputErrorName){
                if(!checkInputValue($inputName,$req)){
                    $errorCount++;
                    $_SESSION["error"][$inputName] = "$inputErrorName الزامی است";
                }
            }

            if(isset($req["price"]) && (!is_numeric($req["price"]) || $req["price"] <= 0)){
                $errorCount++;
                $_SESSION["error"]["price"] = "قیمت باید عدد بزرگتر از صفر باشد";
            }

            if($errorCount == 0){
                if(!move_uploaded_file($_FILES["image"]["tmp_name"],"media/".$fileName)){
                    $errorCount++;
                    $_SESSION["error"]["image"] = "مشکل در آپلود تصویر";
                }
            }

            if($errorCount == 0){
                $productModel = new Product();
                $preparedSql = $productModel->create();

                $preparedSql->bind_param("ssiss",$req["name"],$req["enname"],$req["price"],$req["description"],$fileName);

                $result = $preparedSql->execute();

                if($result && isset($_POST["category_id"]) && count($_POST["category_id"]) > 0){
                    $product_id = $GLOBALS["connection"]->insert_id;
                    $productCategoryModel = new ProductCategory();
                    $preparedSql = $productCategoryModel->create();

                    foreach ($_POST["category_id"] as $catId){
                        $preparedSql->bind_param("ii",$product_id,$catId);
                        $preparedSql->execute();
                    }

                }


//                ProductCategory

//                echo $result

                $_SESSION["success"] = "محصول اضافه شد";
                redirect("/dashboard/products");
            }

            redirect("/dashboard/products/create");
        }
    }

    function index(){
        $productModel = new Product();
        $products = $productModel->getAll();
        include "views/dashboard/products/index.php";
    }

    function delete(){
        if(!checkInputValue("id",$_GET)){
            redirect("/dashboard/products");
        }else{

            $id = $_GET["id"];

            $productModel = new Product();

            $product = $productModel->findById($id); // ردیافت اطلاعات محصول + اسم عکس

            if(file_exists("media/".$product["image"])){
                unlink("media/".$product["image"]); // حذف عکس محصول
            }

            $productModel->delete($id); // حذف محصول از دیتابیس

            $_SESSION["success"] = "محصول با موفقیت حذف شد";

            redirect("/dashboard/products");

        }
    }

    function edit(){
        if(!isset($_GET["id"]) || empty($_GET["id"]) || $_GET["id"] <= 0){
            die("404 , ID not found");
        }

        $productModel = new Product();
        $product = $productModel->findById($_GET["id"]);

        $categoryModel = new Category();
        $categories = $categoryModel->getAll();

        $productCategoryModel = new ProductCategory();
        $preparedSql = $productCategoryModel->where("`product_id` = ?","`category_id`");
        $preparedSql->bind_param("i",$_GET["id"]);
        $preparedSql->execute();

        $selectedCategories = $preparedSql->get_result();

        if($selectedCategories){
            $selectedCategories = $selectedCategories->fetch_all(MYSQLI_ASSOC);
        }
////


        $selectedCategoriesArray = [];

        foreach ($selectedCategories as $selectedCategory){
            array_push($selectedCategoriesArray,$selectedCategory["category_id"]);
        }

//        echo "<pre>";
//        var_dump($categories);
//        echo "<pre>";
//        die();

        include "views/dashboard/products/edit.php";
    }

    function update(){
        if(!isset($_GET["id"]) || empty($_GET["id"]) || $_GET["id"] <= 0){
            die("404 , ID not found");
        }

        if(isset($_POST["submit"])){

//            echo "<pre>";
//            var_dump($_FILES);
//            echo "<pre>";
//            die();

            $errorCount = 0;

            $req = $_POST;

            if(isset($_FILES["image"]) && $_FILES["image"]["size"] > 0){
                $fileName = $_FILES["image"]["name"];
                $number = 1;
                while(file_exists("media/".$fileName)){ // true
//                    if(file_exists("media/".$fileName)){
                        // اسم باید عوض شود
                        $fileNameArray = explode(".",$fileName); // test.png ["test","png"] , test.hi.new.png
                        $fileNameArray[0] = $fileNameArray[0]."(".$number.")";
                        $fileName = implode(".",$fileNameArray);
                        $number++;
//                    }
                }

                if(isset($_FILES["image"]["size"])){
                    $size = $_FILES["image"]["size"];

                    if($size > 200000){
                        $errorCount++;
                        $_SESSION["error"]["image"] = "سایز تصویر باید کمتر از 200 کیلوبایت باشد";
                    }
                }

                if($errorCount !== 0){
                    redirect("/dashboard/products/edit?id=".$_GET["id"]);
                }
            }else{
                $fileName = $_POST["old_image"];
            }


            $requiredInputs = [
                "name"=>"نام",
                "enname"=>"نام انگلیسی",
                "price"=>"قیمت",
            ];

            foreach ($requiredInputs as $inputName=>$inputErrorName){
                if(!checkInputValue($inputName,$req)){
                    $errorCount++;
                    $_SESSION["error"][$inputName] = "$inputErrorName الزامی است";
                }
            }

            if(isset($req["price"]) && (!is_numeric($req["price"]) || $req["price"] <= 0)){
                $errorCount++;
                $_SESSION["error"]["price"] = "قیمت باید عدد بزرگتر از صفر باشد";
            }

            if(isset($_FILES["image"]) && $_FILES["image"]["size"] > 0){
                if($errorCount == 0){
                    if(!move_uploaded_file($_FILES["image"]["tmp_name"],"media/".$fileName)){
                        $errorCount++;
                        $_SESSION["error"]["image"] = "مشکل در آپلود تصویر";
                    }else{
                        if(file_exists("media/".$_POST["old_image"])){
                            unlink("media/".$_POST["old_image"]);
                        }
                    }
                }
            }

            if($errorCount == 0){
                $productModel = new Product();
                $preparedSql = $productModel->update();

                $preparedSql->bind_param("ssissi",$req["name"],$req["enname"],$req["price"],$req["description"],$fileName,$_GET["id"]);

                $result = $preparedSql->execute();

                if($result && isset($_POST["category_id"]) && count($_POST["category_id"]) > 0){
                    $product_id = $_GET["id"];
                    $productCategoryModel = new ProductCategory();

                    // حذف اطلاعات ارتباط بین دسته بندی و محصول
                    $preparedSql = $productCategoryModel->whereDelete("`product_id` = ?");
                    $preparedSql->bind_param("i",$product_id);
                    $preparedSql->execute();

                    // افزودن اطلاعات ارتباط بین دسته بندی و محصول بر اساس فرم جدید
                    $preparedSql = $productCategoryModel->create();
                    foreach ($_POST["category_id"] as $catId){
                        $preparedSql->bind_param("ii",$product_id,$catId);
                        $result = $preparedSql->execute();
                    }

                }

                $_SESSION["success"] = "محصول ویرایش شد";
                redirect("/dashboard/products");
            }

            redirect("/dashboard/products/edit?id=".$_GET["id"]);
        }

    }
}