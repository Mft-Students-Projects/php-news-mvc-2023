<?php
//phpinfo();
//die();
session_start();
require_once "config/db.php";
require_once "libs/jdf.php";
require_once "utils.php";
require_once "global.php";

$uri = $_SERVER["REQUEST_URI"]; // قسمت بعد از آدرس دامنه

// $uri -> /dashboard/categories/delete?id=22

$uriArray = explode("?",$uri); // ["/dashboard/categories/delete","id=22"]

if(count($uriArray) > 1){
    $uri = $uriArray[0]; // "/dashboard/categories/delete"
}

$routes = [ // آدررس های مورد پذیرش روتر ما
    "" => [
        "controller"=>"HomeController",
        "method"=>"index"
    ],
    "search" => [
        "controller"=>"SearchController",
        "method"=>"index"
    ],
    "cart/add" => [
        "controller"=>"CartController",
        "method"=>"store"
    ],
    "filter" => [
        "controller"=>"FilterClientController",
        "method"=>"index"
    ],
    "product" => [
        "controller"=>"ProductClientController",
        "method"=>"show"
    ],
    "dashboard/categories/create" => [
        "controller"=>"CategoryController",
        "method"=>"create",
        "authType"=>"admin"
    ], // نمایش html فرم
    "dashboard/categories/store" => [
        "controller"=>"CategoryController",
        "method"=>"store",
        "authType"=>"admin"
    ], // پراسس اطلاعات فرم
    "dashboard/categories/delete" => [
        "controller"=>"CategoryController",
        "method"=>"delete",
        "authType"=>"admin"
    ], // حذف دسته بندی
    "dashboard/categories/edit" => [
        "controller"=>"CategoryController",
        "method"=>"edit",
        "authType"=>"admin"
    ], // نمایش فرم ویرایش
    "dashboard/categories/update" => [
        "controller"=>"CategoryController",
        "method"=>"update",
        "authType"=>"admin"
    ], // پراسس فرم ویرایش
    "dashboard/categories" => [
        "controller"=>"CategoryController",
        "method"=>"index",
        "authType"=>"admin"
    ], // لیست دسته بندی ها
    "dashboard/products/create" => [
        "controller"=>"ProductController",
        "method"=>"create",
        "authType"=>"admin"
    ], // نمایش html فرم
    "dashboard/products/store" => [
        "controller"=>"ProductController",
        "method"=>"store",
        "authType"=>"admin"
    ], // پراسس اطلاعات فرم
    "dashboard/products/edit" => [
        "controller"=>"ProductController",
        "method"=>"edit",
        "authType"=>"admin"
    ], // نمایش html فرم
    "dashboard/products/update" => [
        "controller"=>"ProductController",
        "method"=>"update",
        "authType"=>"admin"
    ], // پراسس اطلاعات فرم
    "dashboard/products" => [
        "controller"=>"ProductController",
        "method"=>"index",
        "authType"=>"admin"
    ],
    "dashboard/products/delete" => [
        "controller"=>"ProductController",
        "method"=>"delete",
        "authType"=>"admin"
    ],
    "auth/login" => [
        "controller"=>"AuthController",
        "method"=>"login",
        "authType"=>"guest"
    ],
    "auth/login/store" => [
        "controller"=>"AuthController",
        "method"=>"loginStore",
        "authType"=>"guest"
    ]
];

//echo $uri;
$uri = trim($uri,"/");
//echo "<br>";
//echo $uri;
//die();

if(!isset($routes[$uri])){
    include_once "views/errors/404.php";
    die("404");
}

$routeData = $routes[$uri];

$controllerName = $routeData["controller"];
$methodName = $routeData["method"];

if(isset($routeData["authType"])){

    if($routeData["authType"] == "admin"){// آیا این روت برای ادمین است ؟
        if(!isset($_SESSION["user"])){ // ایا کاربر ادمین نیست ؟
            redirect("/auth/login");
        }
    }

    if($routeData["authType"] == "guest"){ // ایا روت برای مهمان ها است
        if(isset($_SESSION["user"])){ // ایا کاربر ادمین هست ؟
            redirect("/");
        }
    }

}

require_once "./controllers/".$controllerName.".php";
$controllerObj = new $controllerName();
$controllerObj->$methodName();

//echo "Hi ;) ".$uri;