<?php
include_once "session.php";

$_SESSION["Cart"]=[];
header("location: ListProduct.php");
