<?php
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
$sql_txt = "delete from products where id = $id";
$rs = $conn->query($sql_txt);
header("location: ListProduct.php");
