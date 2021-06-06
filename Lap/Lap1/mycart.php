<?php
include_once "session.php";
include_once "database.php";

    $id = $_GET["id"];
    $cartx = $_SESSION["Cart"];
    $sql_txt=" select * from products where id =$id";
    $ds = queryDB($sql_txt);
echo $id;
if(count($ds)==0)
header("location: ListProduct.php");
    $sp = $ds[0];
if (!in_array($sp,$cartx)){
    $cartx[]=$sp;
    $_SESSION["Cart"]=$cartx;
}


header("location: ListProduct.php");