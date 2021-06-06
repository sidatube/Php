<?php include_once "database.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "html/head.php"?>

<body>
<?php
// thay tham so tren URL
$id = $_GET["id"];// $_GET la 1 array voi cac key la key cua param tren url
//  $name = $_GET["name"];// ko co se la null
$ds = queryDB("select * from sinhviens where id = $id");
if (count($ds)==0){
    header("Location:List.php");
}
$dssv=$ds[0];
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