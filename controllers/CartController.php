<?php
require_once "model/Product.php";
require_once "model/Cart.php";
require_once "model/ProductCategory.php";

class CartController {
    public function store(){
        if(isset($_GET["product_id"])){

            $productId = $_GET["product_id"];

            $user = $_SESSION["customer"];

            $cartModel = new Cart();

            $resultCart = $cartModel->where("`user_id` = ".$user["id"],"*");

            $totalPrice = 0;
            $totalCount = 0;
            $isOrder = 0;

            if($resultCart){

                $cartId = $resultCart[0]["id"];

            }else{

                $preparedSql = $cartModel->create();
//                debug($GLOBALS["connection"]->error);

                $preparedSql->bind_param("siii",$totalPrice,$totalCount,$user["id"],$isOrder);
                $result = $preparedSql->execute();
                if($result){
                    $cartId = $GLOBALS["connection"]->insert_id;
                }

            }

            $productModel = new Product();
            $product = $productModel->findById($productId);

//            $product["price"]

            $preparedSql = $cartModel->update();
            if($resultCart){
                $totalPrice = $resultCart[0]["total_price"] + $product["price"];
                $totalCount =$resultCart[0]["total_count"]+1;
                $preparedSql->bind_param("siiii",$totalPrice,$totalCount,$user["id"],$isOrder,$cartId);
            }else{
                $count = 1;
                $preparedSql->bind_param("siiii",$product["price"],$count,$user["id"],$isOrder,$cartId);
            }

            $result = $preparedSql->execute();

        }
    }
}