<?php
session_start();
if (!$_SESSION["Cart"]){
    $_SESSION["Cart"]=[];
}
