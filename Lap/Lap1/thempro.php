<?php
include_once "database.php";
$name=$_POST["name"];
$gia=$_POST["gia"];
$mota=$_POST["mota"];
$ncc=$_POST["ncc"];


$sql_txt= "insert into products (name,gia,mota,ncc) value ('$name',$gia,'$mota','$ncc')";
if (addOredit($sql_txt)){
    header("location: ListProduct.php");
}else{
    echo "Error";
}