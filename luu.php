<?php
$name = $_POST["name"];
$age = $_POST["age"];
$address = $_POST["address"];

$servername = "localhost";
$username = "root";
$password = ""; // neu dung mamp password: root
$db = "t2008m_php";
// create connection
$conn = new mysqli($servername,$username,$password,$db);
// kiem tra ket noi
if($conn->connect_error){
    die("Connect error...");// die lam dung luong chuong trinh tai day
}

$sql_txt = "insert into sinhviens (name,age,address) values('$name',$age,'$address')";
if($conn->query($sql_txt) === true){
    header("location: list.php"); // readirect ve trang danh sach
}else{
    echo "ERRORS:".$conn->error;
}