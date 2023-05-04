<?php
require_once "./model/Category.php";

class CategoryController {

    function create(){
        $categoryModel = new Category();
        $categories = $categoryModel->getAll();
        include "views/dashboard/categories/create.php";
    }

    function store(){
        $data = $_POST;

        if(isset($data["submit"])){

            if(!isset($data["parent_id"]) || !is_numeric($data["parent_id"])){
                $data["parent_id"] = null;
            }

            $errorCount = 0;

            if(!isset($data["name"]) || empty($data["name"])){
                $errorCount++;
                $_SESSION["error"]["name"] = "نام الزامی است";
            }

            if(!isset($data["enname"]) || empty($data["enname"])){
                $errorCount++;
                $_SESSION["error"]["enname"] = "نام انگلیسی الزامی است";
            }else{
                if (!preg_match('/[A-Za-z0-9]/', $data["enname"])) // '/[^a-z\d]/i' should also work.
                {
                    $errorCount++;
                    $_SESSION["error"]["enname"] = "نام انگلیسی باید با حروف انگلیسی تکمیل گردد";
                }
            }


//            echo "<pre>";
//            var_dump($_SESSION);
//            echo "<pre>";
//            die();

            if($errorCount == 0){
                $categoryModel = new Category();

                $preparedSql = $categoryModel->create();

                $preparedSql->bind_param("ssi",$data["name"],$data["enname"],$data["parent_id"]); // مشخص سازی مقادیر جدا از دستور sql

                $preparedSql->execute();


                $_SESSION["success"] = "دسته بندی اضافه شد";
            }

            redirect("/dashboard/categories/create");

        }

    }

    function edit(){

        $id = $_GET["id"];

        $categoryModel = new Category();

        $categories = $categoryModel->getAll();

        $category = $categoryModel->findById($id);

        include "views/dashboard/categories/edit.php";
    }

    function update(){

        if(isset($_POST["submit"]) && isset($_GET["id"])) {

            $id = $_GET["id"];
            $data = $_POST;

            if (!isset($data["parent_id"]) || !is_numeric($data["parent_id"])) {
                $data["parent_id"] = null;
            }

            $errorCount = 0;

            if(!isset($data["name"]) || empty($data["name"])){
                $errorCount++;
                $_SESSION["error"]["name"] = "نام الزامی است";
            }

            if(!isset($data["enname"]) || empty($data["enname"])){
                $errorCount++;
                $_SESSION["error"]["enname"] = "نام انگلیسی الزامی است";
            }else{
                if (!preg_match('/[A-Za-z0-9]/', $data["enname"])) // '/[^a-z\d]/i' should also work.
                {
                    $errorCount++;
                    $_SESSION["error"]["enname"] = "نام انگلیسی باید با حروف انگلیسی تکمیل گردد";
                }
            }

            if($errorCount == 0){
                $categoryModel = new Category();

                $preparedSql = $categoryModel->update();

                $preparedSql->bind_param("ssii",$data["name"],$data["enname"],$data["parent_id"],$id);//column

                $result = $preparedSql->execute();

                if(!$result){
                    $_SESSION["error"]["update"] = "مشکلی در ویرایش پیش امده است";
                }
            }else{
                redirect("/dashboard/categories/edit?id=".$id);
            }

        }

        redirect("/dashboard/categories");

    }

    function index(){
        // php code
//        echo "Category index";
        $categoryModel = new Category();
        $categories = $categoryModel->getAll();
        include "views/dashboard/categories/index.php";
    }

    function delete(){
        if(isset($_GET["id"]) && !empty($_GET["id"]) && is_numeric($_GET["id"]) && $_GET["id"] > 0){

            $id = $_GET["id"];

            $categoryModel = new Category();

            $result = $categoryModel->delete($id);

            if(!$result){
                $_SESSION["error"]["delete"] = "امکان حذف دسته بندی به دلیل وجود زیر دسته وجود ندارد";
            }

        }

        redirect("/dashboard/categories");
    }

}