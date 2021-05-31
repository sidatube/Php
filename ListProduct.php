<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <?php
    $product = [];
    $product[]=[
        "id"=> 1,
        "name"=>"Bức tường siêu phẳng",
        "gia"=>"0.00",
        "mota"=>"Bức tường này có giá free nên chúng tôi sẽ tính phí ship do nó quá nặng so với sản phẩm thông thường",
        "ncc"=>"Nhà cung cấp Giấu Tên"
    ];
    $product[]=[
        "id"=> 2,
        "name"=>"Bức tường không cong",
        "gia"=>"0.00",
        "mota"=>"Bức tường này có giá free nên chúng tôi sẽ tính phí ship do nó quá nặng so với sản phẩm thông thường",
        "ncc"=>"Nhà cung cấp Giấu Tên"
    ];
    $product[]=[
        "id"=> 3,
        "name"=>"Bức tường phake",
        "gia"=>"0.00",
        "mota"=>"Bức tường này có giá free nên chúng tôi sẽ tính phí ship do nó quá nặng so với sản phẩm thông thường",
        "ncc"=>"Nhà cung cấp Giấu Tên"
    ];
    $product[]=[
        "id"=> 4,
        "name"=>"Bức tường siêu cong",
        "gia"=>"0.00",
        "mota"=>"Bức tường này có giá free nên chúng tôi sẽ tính phí ship do nó quá nặng so với sản phẩm thông thường",
        "ncc"=>"Nhà cung cấp Giấu Tên"
    ];
    $product[]=[
        "id"=> 5,
        "name"=>"Máy phá nhà",
        "gia"=>"300.000.000.00",
        "mota"=>"Đây là cỗ máy có thể di chuyển như xe tăng nên bạn cần đến nhận hàng hoặc chịu phí ship =100% giá sản phẩm",
        "ncc"=>"Nhà cung cấp Không để lại tên"
    ];

    ?>
    <table class="table" style="width: 80%">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên</th>
            <th scope="col">Giá</th>
            <th scope="col" colspan="2">Mô tả</th>
            <th scope="col">Nhà cung cấp</th>
        </tr>
        </thead>
        <tbody>

            <?php

                foreach ($product as $p){

                    ?>
            <tr>
                    <th scope="row"><?php

                        echo $p["id"] ;

                    ?></th>
                    <td><?php
                        echo $p["name"]
                    ?></td>
                    <td><?php
                        echo $p["gia"]." VND"
                    ?></td>
                    <td colspan="2"><?php
                        echo $p["mota"]
                    ?></td>
                    <td><?php
                        echo $p["ncc"]
                    ?></td>
            </tr>
            <?php

                }
            ?>



        </tbody>
    </table>
</body>
</html>