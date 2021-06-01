<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List sản phẩm</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <?php
    $category=[];
    $category[]=[
            "id"=>1,
        "name"=>"Vật liệu"
    ];
    $category[]=[
      "id"=>2,
        "name"=>"Máy móc"
    ];
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
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary float-end me-5"  data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tên</span>
                        <input type="text" class="form-control" placeholder="Tên" aria-label="Tên" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" >Giá</span>
                        <input type="text" class="form-control" placeholder="Giá" aria-label="Giá" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Mô tả</span>
                        <input type="text" class="form-control" placeholder="Mô tả" aria-label="Mô tả" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nhà cung cấp</span>
                        <input type="text" class="form-control" placeholder="Nhà cung cấp" aria-label="Nhà cung cấp" aria-describedby="basic-addon1">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Thêm</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table" style="width: 80%">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên</th>
            <th scope="col">Giá</th>
            <th scope="col" colspan="2">Mô tả</th>
            <th scope="col">Nhà cung cấp</th>
            <th scope="col" colspan="2">Tool</th>

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
                    <td>
                        <button type="button" class="btn btn-info">Edit</button>
                    </td>
                <td>
                        <button type="button" class="btn btn-warning">Delete</button>
                    </td>
            </tr>
            <?php

                }
            ?>
        </tbody>
    </table>
    <h1>Category</h1>
    <?php
    foreach ($category as $item){
        ?>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="">
            <label class="form-check-label" >
                <?php
                echo $item["name"]
                ?>
            </label>
        </div>
    <?php
    }
    ?>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary float-end me-5"  data-bs-toggle="modal" data-bs-target="#exampleModal2">
        Add category
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tên category</span>
                        <input type="text" class="form-control" placeholder="Tên" aria-label="Tên" aria-describedby="basic-addon1">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Thêm</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>