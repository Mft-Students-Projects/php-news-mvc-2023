<?php
require_once "BaseModel.php";

class User extends BaseModel{
    public $table = "users";

    public $columns = [
        "mobile",
        "password",
    ];
}