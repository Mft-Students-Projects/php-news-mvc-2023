<?php
require_once "model/Product.php";

class SearchController {
    public function index(){
        $dataJson = json_decode(file_get_contents("php://input"),true);
//        echo $dataJson["keyword"];
        $productModel = new Product();
        $preparedSql = $productModel->where("`name` LIKE ?");
        $keyword = "%".$dataJson["keyword"]."%";
        $preparedSql->bind_param("s",$keyword);
        $preparedSql->execute();

        header("Content-Type:application/json; charset=UTF-8");
        echo json_encode($preparedSql->get_result()->fetch_all(MYSQLI_ASSOC));
    }
}