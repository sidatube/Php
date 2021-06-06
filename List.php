<?php include_once "sesion.php" ?>
<?php include_once "database.php" ?>
<?php
$cookie_name="title";
$cookie_value="Hệ thống sinh viên";
setcookie($cookie_name,$cookie_value,time()+(3600*24),"/");// nạp giá trị vào cookie

$_SESSION["user"]=[
        "username"=>"Nguyễn Văn An",
        "email"=>"abc@gmail.com"

]
?>
<!DOCTYPE html>
<html lang="en">
<?php include "html/head.php"?>
<body>
<h1>Danh Sách sinh viên</h1>
<?php
    $sql_txt = "select * from sinhviens";
    $dssv = queryDB($sql_txt);
?>
<li><a href="Them.php">themsv</a></li>
<li><a href="Danhsachuutu.php">dssv ưu tú</a></li>
<ul>
    <li><a href="Them.php">themsv</a></li>
    <?php
    foreach ($dssv as $ds){
        ?>
    <li><a href="Chitiet.php?id=<?php echo $ds["id"] ?>"><?php echo $ds["name"]."--".$ds["age"] ?></a></li>
        <a href="edit.php?id=<?php echo $ds["id"];?>">Sửa</a><a href="delete.php?id=<?php echo $ds["id"];?>">Xóa</a>
        <a href="svuutu.php?id=<?php echo $ds["id"]?>">Thêm vào ds sv ưu tứ</a>
        </li>
    <?php
    }
    ?>
</ul>

<a href="index.php">Quay về tranh chủ</a>
</body>
</html>

