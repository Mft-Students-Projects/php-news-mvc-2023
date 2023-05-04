<?php
require_once "BaseModel.php";

class Category extends BaseModel{
    public $table = "categories";

    public $columns = [
        "name",
        "enname",
        "parent_id"
    ];
}