<?php
require_once "model/Product.php";
require_once "model/ProductCategory.php";

class FilterClientController {
    public function index()
    {

        $page = 1;
        $productsInPage = 2;

        if(isset($_GET["page"])){
            $page = $_GET["page"]; // 3
        }

        $productModel = new Product();

        if(isset($_GET["filter_btn"])){

            $conditions = "";

            if(isset($_GET["keyword"]) && !empty($_GET["keyword"])){
                $conditions .= " `name` LIKE '%".$_GET["keyword"]."%'";
            }

            if(isset($_GET["minPrice"]) && isset($_GET["maxPrice"]) && !empty($_GET["minPrice"]) && !empty($_GET["maxPrice"])){

                if(!empty($conditions)){
                    $conditions .= " AND ";
                }
                $conditions .= "`price` >= ".str_replace(",","",$_GET["minPrice"])." AND `price` <= ".str_replace(",","",$_GET["maxPrice"]);

            }

            if(isset($_GET["categories"]) && is_array($_GET["categories"])){

                $productCategoryModel = new ProductCategory();
                $productCategory = $productCategoryModel->whereIn("category_id",$_GET["categories"]);

                $productIds = [];

                foreach ($productCategory as $item){
                    array_push($productIds,$item["product_id"]);
                }

                if(!empty($conditions)){
                    $conditions .= " AND ";
                }
                $conditions .= "`id` IN (".implode(",",$productIds).")";

            }



//            1,2
//            3,4
//            5,6
//            7,8

            $totalCount = $productModel->where($conditions,"COUNT(*) as count")[0]["count"];
            $products = $productModel->where($conditions,"*",($page*$productsInPage - $productsInPage).",".$productsInPage);

//            debug($productsCount);

        }else{
            $totalCount = $productModel->getAll("","COUNT(*) as count")[0]["count"];
            $products = $productModel->getAll("ORDER BY `id` DESC LIMIT ".($page*$productsInPage - $productsInPage).",".$productsInPage);

        }

        $minPrice = $productModel->min("price")["minPrice"];
        $maxPrice = $productModel->max("price")["maxPrice"];

        include "views/filter.php";
    }
}