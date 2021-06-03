<?php
$name=$_POST["name"];
$servername="localhost";
$username= "root";
$password="";
$db="t2008m_php";
$conn= new mysqli($servername,$username,$password,$db);
if ($conn->connect_error){
    die("Error...");
}
$sql_txt= "insert into procategory (name) value ('$name') ";
if ($conn->query($sql_txt)===true ){
    header("location: ListProduct.php");
}else{
    echo "Error".$conn->error;
}