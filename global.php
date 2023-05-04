<?php
require_once "model/Category.php";
$categoryModel = new Category();
$GLOBALS["root_categories"] = $categoryModel->where("`parent_id` IS NULL");

function getSubCategories($parentId){
    $categoryModel = new Category();
    return $categoryModel->where("`parent_id` = ".$parentId);
}