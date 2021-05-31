
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
</head>
<body>
<h1>Danh Sách sinh viên</h1>
<?php
    $dshs = [];
    $dshs[]= [
        "Name"=> "Nguyễn Văn An",
        "Age"=>"18"
    ];
    $dshs[]= [
        "Name"=> "Nguyễn Văn Bê",
        "Age"=>"19"
    ];
    $dshs[]=  [
        "Name"=> "Nguyễn Văn Cê",
        "Age"=>"21"
    ];
    $dshs[]= [
        "Name"=> "Nguyễn Văn Dê",
        "Age"=>"20"
    ];

?>
<ul>
    <?php
    foreach ($dshs as $hs){?>
        <li>
            <?php
            echo $hs["Name"]." -- ".$hs["Age"];
            ?>
        </li>
    <?php }
    ?>
</ul>
<a href="index.php">Quay về tranh chủ</a>
</body>
</html>

