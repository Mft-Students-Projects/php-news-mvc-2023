<?php
require_once "BaseModel.php";

class Product extends BaseModel{
    public $table = "products";

    public $columns = [
        "name",
        "enname",
        "price",
        "description",
        "image",
    ];
}