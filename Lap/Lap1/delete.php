<?php
include_once "database.php";

$id = $_POST["id"];

$sql_txt = "delete from products where id = $id";
if (addOredit($sql_txt)){
    header("location: ListProduct.php");
}else{
    echo "Error";
}