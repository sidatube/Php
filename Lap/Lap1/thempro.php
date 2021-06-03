<?php
$name=$_POST["name"];
$gia=$_POST["gia"];
$mota=$_POST["mota"];
$ncc=$_POST["ncc"];

$servername="localhost";
$username="root";
$password="";
$db="t2008m_php";
$conn= new mysqli($servername,$username,$password,$db);
if ($conn->connect_error){
    die("Connect error");
}
$sql_txt= "insert into products (name,gia,mota,ncc) value ('$name',$gia,'$mota','$ncc')";
if ($conn->query($sql_txt)===true){
    header("location: ListProduct.php");
}else{
    echo "Error".$conn->error;
}