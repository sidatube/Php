<?php
include_once "session.php";
include_once "../Lap1/database.php";

$name= $_POST["name"];
$tel = $_POST["tel"];
$address = $_POST["address"];


$cart = isset($_SESSION["Cart"])?$_SESSION["Cart"]:[];
if (count($cart)>0){
    $total =0;
    foreach ($cart as $item) {
        $total += $item["gia"] * $item["qty"];
    }
    try {
        $sql_order= " insert into orders (customers,tel,address,grandtotal) values ('$name','$tel','$address',$total)";
        $conn = connectDB();
        $order_id=0;
        if ($conn->query($sql_order)===true){
            $order_id = $conn->insert_id;
        }
        if ($order_id>0){
            $sql_item= "insert into order_product (order_id,pro_id,qty,price) values ";
            $values= [];
            foreach ($cart as $item){
                $p_id=$item["id"];
                $p_price = $item["gia"];
                $p_qty = $item["qty"];
                $values[]="($order_id,$p_id,$p_qty,$p_price)";
            }
            $v = implode(",",$values);
            $sql_item.= $v;
            addOredit($sql_item);
            echo "tạo đơn thành công";
        }
    }catch (Exception $e){
        var_dump($e);
    }
}else{
    echo "Không có sản phẩm trong giỏ hàng";
}
?>
<a href="test.php">
    Quay trở lại trang chủ
</a>

