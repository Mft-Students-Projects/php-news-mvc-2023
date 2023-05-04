<?php
require_once "BaseModel.php";

class Cart extends BaseModel{
    public $table = "cart";

    public $columns = [
        "total_price",
        "total_count",
        "user_id",
        "is_order",
    ];
}