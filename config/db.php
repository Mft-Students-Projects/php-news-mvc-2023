<?php
$GLOBALS["key"] = "WDCFNMedfgbhn56tyVBuhjk";

$GLOBALS["connection"] = new mysqli("localhost","root","","didikala");

if($GLOBALS["connection"]->error) {
    echo $GLOBALS["connection"]->error;
    die();
}
