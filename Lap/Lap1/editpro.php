<?php
include_once "database.php";

$id=$_POST["id"];
$name=$_POST["name"];
$gia=$_POST["gia"];
$mota=$_POST["mota"];
$ncc=$_POST["ncc"];


$sql_txt= "update products set name ='$name', gia=$gia, mota='$mota', ncc='$ncc' where id=$id";
if (addOredit($sql_txt)){
    header("location: ListProduct.php");
}else{
    echo "Error";
}

