<?php
include_once "sesion.php";
include_once "database.php";
    $svuutu=$_SESSION["sv_uu_tu"];
$id = $_GET['id'];
$sql_txt = "select * from sinhviens where id = $id";
$ds = queryDB($sql_txt);
if(count($ds)==0) header("location: list.php");
$sv = $ds[0];
if (!in_array($sv,$svuutu)){
    $svuutu[]=$sv;
    $_SESSION["sv_uu_tu"]=$svuutu;
}

header("location:List.php");
