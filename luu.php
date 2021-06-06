<?php
include_once "database.php";
$name = $_POST["name"];
$age = $_POST["age"];
$address = $_POST["address"];

$sql_txt = "insert into sinhviens (name,age,address) values('$name',$age,'$address')";
if (insertorupdateDB($sql_txt)){
    header("Location:List.php");
}else{
    echo "error";
}
