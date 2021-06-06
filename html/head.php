
<?php

$title = "Danh sách sinh viên";
if(isset($_COOKIE["title"])){ // Kiểm tra xem $_COOKIE['title'] có tồn tại ko
    $title = $_COOKIE["title"];
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title;?></title>
</head>