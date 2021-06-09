<?php
session_start();//cho phép khởi chạy sesion
if ($_SESSION["sv_uu_tu"]=null){
    $_SESSION["sv_uu_tu"]=[];
}