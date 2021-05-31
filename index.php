<?php
$x=10; // khai báo biến x ; bắt buộc phải có $ đầu tiên;
$y="hello"; // giống javascript
$x= "xin chào";
$z = $x.$y; //nối chuỗi
echo $z."<br/>";
echo "4+5"."<br/>";
echo "aa"."5"."<br/>";
$n = 10;
if($n >=10){
    echo "Gia trị lớn quá"."<br/>";
}else{
    echo "Gia tri qua nho"."<br/>";
}
for ($i=0;$i<=10;$i++){
    echo $i."<br/>";
}
$arr=[];
$arr[0]=12;
$arr[1]="Xin chao";
$arr[]=101; //tự động thêm vào cuối dah sách
for ($i=0;$i<=2;$i++){
    echo "arr[".$i."] = ".$arr[$i]."<br/>";
}
//array php thực chất chia phần tử thành key=> value
$arr["name"]="Nguyễn Văn A";
$arr["age"]="18";
$arr["tel"]="0987654321";
//$arr["ds_monhoc"]=["LBD","BDSM","ADF1"];
echo "Name: ".$arr["name"]."<br/>";

foreach ($arr as $item){// Sitem là biến đại diện của $arr -->$arr[i]
    echo $item."<br/>";
}
foreach ($arr as $key=>$value){
    echo $key."=".$value."<br/>";
}
