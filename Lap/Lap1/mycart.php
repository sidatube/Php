<?php
include_once "session.php";
include_once "database.php";

    $id = $_GET["id"];
    $cart = $_SESSION["Cart"];
    $sql_txt=" select * from products where id =$id";
    $ds = queryDB($sql_txt);
echo $id;
if(count($ds)>0){
    $sp = $ds[0];
    $sp["qty"]=1;
    if (checkCart($sp,$cart)){
        foreach ($cart as $key=>$item){
            if ($item["id"]==$sp["id"])
                $cart[$key]["qty"]++;
        }
    }else{
        $cart[]=$sp;
    }
    $_SESSION["Cart"]=$cart;



    header("location: ListProduct.php");
}else{
    echo "Sản phẩm không tồn tại!";
}

    function checkCart($sp,$cart){
        foreach ($cart as $p){
            if ($p["id"]==$sp["id"]){
                return true;
            }
        }
        return false;
    }