<?php
require_once "model/Product.php";

class HomeController {

    function index(){
//        var_dump($GLOBALS["categories"]);
//        die();
        $productModel = new Product();
        $products = $productModel->getAll("ORDER BY `id` DESC LIMIT 20");
        include "views/index.php";
    }

}