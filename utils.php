<?php
function showInputError($inputName){
    if(isset($_SESSION["error"][$inputName])){
        ?>
        <p style="color:red;"><?php echo $_SESSION["error"][$inputName]; ?></p>
        <?php
        unset($_SESSION["error"][$inputName]);
    }
}

function showActionMessage(){
    if(isset($_SESSION["success"])){
        ?>
        <p style="color:green"><?php echo $_SESSION["success"]; ?></p>
        <?php
        unset($_SESSION["success"]);
    }
}


function convertToJalali($timestamp){

    if($timestamp){
        //$timestamp = 2023-02-10 17:09:03

        $explodeBySpace = explode(" ",$timestamp); // ["2023-02-10","17:09:03"]

        $date = $explodeBySpace[0];// "2023-02-10"
        $time = $explodeBySpace[1];// "17:09:03"

        $explodeDateByDash = explode("-",$date); // ["2023","02","10"]

        $jalaliArray = gregorian_to_jalali($explodeDateByDash[0],$explodeDateByDash[1],$explodeDateByDash[2]); // ["1402","02","10"]

        return implode("/",$jalaliArray)." ".$time; // "1402/02/10 17:09:03"
    }

    return "-";


}

function checkInputValue($inputName,$req){
    return isset($req[$inputName]) && !empty($req[$inputName]);
}


function redirect($url){
    header("Location:".$url);
    die();
}

function price($price){
    return number_format($price)." تومان";
}


function debug($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    die();
}