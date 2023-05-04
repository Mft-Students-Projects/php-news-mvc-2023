<?php
require_once "BaseModel.php";

class ProductCategory extends BaseModel{
    public $table = "product_category";

    public $columns = [
        "product_id",
        "category_id",
    ];
}