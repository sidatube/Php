<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<?php
// thay tham so tren URL
$id = $_GET["id"];// $_GET la 1 array voi cac key la key cua param tren url
//  $name = $_GET["name"];// ko co se la null

//lây đs từ database
$servername = "localhost";
$username = "root";
$password = "";
$db = "t2008m_php";
// creat connect ;
$conn = new mysqli($servername,$username,$password,$db);
if ($conn->connect_error){
    die("Connect error");
}
$sql_txt = "select * from sinhviens where id = $id";
$rs = $conn->query($sql_txt);
$row =$rs->fetch_assoc();
$dssv = $row;
//?>
<h1>id sinh viên: <?php echo $id;?></h1>
<h1>Tên sinh viên: <?php
    echo $dssv["name"]
    ?>  </h1>
<h1>Tuổi sinh viên: <?php
    echo $dssv["age"]
    ?>   </h1>
<h1>Địa chỉ:  <?php
    echo $dssv["address"]
    ?>   </h1>

</body>
</html>