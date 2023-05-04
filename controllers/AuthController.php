<?php
require_once "model/User.php";

class AuthController {

    function login(){
        include "views/auth/login.php";
    }

    function loginStore(){
//        var_dump($_POST);
        if(isset($_POST["submit"])){

            $errorCount = 0;

            if(!isset($_POST["mobile"]) || empty($_POST["mobile"]) || strlen($_POST["mobile"]) !== 11){
                $errorCount++;
                $_SESSION["error"]["mobile"] = "موبایل الزامی است و باید 11 رقم باشد";
            }

            if(!isset($_POST["password"]) || empty($_POST["password"])){
                $errorCount++;
                $_SESSION["error"]["password"] = "رمز عبور الزامی است";
            }

            if($errorCount == 0){

                $userModel = new User();
                $preparedSql = $userModel->where("`mobile` = ? AND `password` = ?","`id`,`mobile`,`isAdmin`");

                $preparedSql->bind_param("ss",$_POST["mobile"],md5($_POST["password"].$GLOBALS["key"]));

                $querySql = $preparedSql->execute(); // boolean

                if($querySql){

                    $result = $preparedSql->get_result();

                    if($result->num_rows == 1){

                        // یک row پیدا شد
                        $user = $result->fetch_assoc();

                        if($user["isAdmin"] == 1){
                            $_SESSION["user"] = $user;
                            redirect("/dashboard/products"); // صفجه اصلی داشبورد
                        }else{
                            $_SESSION["customer"] = $user;
                            redirect("/");
                        }

                    }

                }

                $_SESSION["error"]["action"] = "اطلاعات ورود صحیح نمی باشد";

            }



            redirect("/auth/login");


        }
    }

}