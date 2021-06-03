<?php
$id=$_POST["id"];
$name=$_POST["name"];
$gia=$_POST["gia"];
$mota=$_POST["mota"];
$ncc=$_POST["ncc"];
 echo $id;
$servername="localhost";
$username="root";
$password="";
$db="t2008m_php";

$conn = new mysqli($servername,$username,$password,$db);
if ($conn->connect_error){
    die("Error...");
}
$sql_txt= "update products set name ='$name', gia=$gia, mota='$mota', ncc='$ncc' where id=$id";
if ($conn->query($sql_txt)===true){
    header("location: ListProduct.php");
}else{
    echo "Error".$conn->error;
}

