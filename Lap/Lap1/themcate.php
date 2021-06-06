<?php
include_once "database.php";
$name=$_POST["name"];


$sql_txt= "insert into procategory (name) value ('$name') ";
if (addOredit($sql_txt)){
    header("location: ListProduct.php");
}else{
    echo "Error";
}