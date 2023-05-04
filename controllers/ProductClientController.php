<?php
require_once "./model/Product.php";
require_once "./model/Category.php";
require_once "./model/ProductCategory.php";

class ProductClientController {
    public function show(){
        if(!isset($_GET["id"])){
            die("404");
        }

        $productModel = new Product();
        $product = $productModel->findById($_GET["id"]);

        if(!$product){
            die("404");
        }

        include "views/product.php";
    }
}