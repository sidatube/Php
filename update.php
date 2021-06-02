<?php
$name = $_POST["name"];
$age = $_POST["age"];
$address = $_POST["address"];
$id = $_POST["id"];
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
$sql_txt = "update sinhviens set name='$name',age = $age, address='$address' where id= $id";
if($conn->query($sql_txt) === true){
    header("location: list.php"); // readirect ve trang danh sach
}else{
    echo "ERRORS:".$conn->error;
}