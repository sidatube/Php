
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
</head>
<body>
<h1>Danh Sách sinh viên</h1>
<?php
   //lây đs từ database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "t2008m_php";
    // creat connect ;
    $conn = new mysqli($servername,$username,$password,$db);
// kiem tra ket noio
    if ($conn->connect_error){
        die("Connect error");
    }
    $sql_txt = "select * from sinhviens";
    $rs = $conn->query($sql_txt);
    $dssv = [];
    if($rs->num_rows>0){
        while ($row =$rs->fetch_assoc()){
            $dssv[] = $row;
        }
    }

?>
<ul>
    <?php
    foreach ($dssv as $ds){
        ?>
    <li><a href="Chitiet.php?id=<?php echo $ds["id"] ?>"><?php echo $ds["name"]."--".$ds["age"] ?></a></li>
        <a href="edit.php?id=<?php echo $ds["id"];?>">Sửa</a><a href="delete.php?id=<?php echo $ds["id"];?>">Xóa</a></li>
    <?php
    }
    ?>
</ul>

<a href="index.php">Quay về tranh chủ</a>
</body>
</html>

