<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa thông tin</title>
</head>
<body>
<?php
$id = $_GET['id'];
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

$sql_txt = "select * from sinhviens where id = $id";
$rs = $conn->query($sql_txt);
$sv = null;
if($rs->num_rows>0){
    while($row = $rs->fetch_assoc()){
        $sv = $row;
        break;
    }
}
if($sv == null) header("location: list.php");
?>
<form action="update.php"  method="POST">
    <input type="hidden" name="id" value="<?php echo $sv["id"];?>"/>
    <input type="text" name="name" value="<?php echo $sv["name"];?>" placeholder="Name.."/>
    <input type="number" name="age" value="<?php echo $sv["age"];?>" placeholder="Age.."/>
    <textarea name="address" placeholder="Address"><?php echo $sv["address"];?></textarea>
    <button type="submit">Submit</button>
</form>
</body>
</html>