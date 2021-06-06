<?php include_once "session.php" ?>
<?php include_once "database.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List sản phẩm</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<body>
    <h1>Danh sách sản phẩm</h1>
    <?php
    $sql_pro = "select * from products";
    $sql_cate = "select * from procategory";

    $product = queryDB($sql_pro);

    $category=queryDB($sql_cate);


    ?>
<!--    add product-->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary float-end me-5"  data-bs-toggle="modal" data-bs-target="#exampleModal">
        Thêm sản phẩm
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="thempro.php" method="post">
                <div class="modal-body">

                        <input type="hidden" name="id" value=""/>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Tên</span>
                            <input type="text" name="name" class="form-control" placeholder="Tên" aria-label="Tên" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" >Giá</span>
                            <input type="text" name="gia" class="form-control" placeholder="Giá" aria-label="Giá" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Mô tả</span>
                            <input type="text" name="mota" class="form-control" placeholder="Mô tả" aria-label="Mô tả" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nhà cung cấp</span>
                            <input type="text" name="ncc" class="form-control" placeholder="Nhà cung cấp" aria-label="Nhà cung cấp" aria-describedby="basic-addon1">
                        </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary float-end me-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Giỏ hàng
    </button>

    <!-- Modal -->


    <div class="modal fade" id="staticBackdrop"  aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Giỏ hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    $cart=$_SESSION["Cart"];
                    ?>
                    <table class="table" style="width: 80%">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá</th>
                            <th scope="col" colspan="2">Mô tả</th>
                            <th scope="col">Nhà cung cấp</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($cart as $sp){
                            ?>
                            <tr>
                                <td ><?php
                                    echo $sp["name"] ;
                                    ?></td>
                                <td><?php
                                    echo $sp["name"]
                                    ?></td>
                                <td><?php
                                    echo $sp["gia"]." VND"
                                    ?></td>
                                <td colspan="2"><?php
                                    echo $sp["mota"]
                                    ?></td>
                                <td><?php
                                    echo $sp["ncc"]
                                    ?></td>

                            </tr>
                            <?php
                        }
                        ?>

                        </tbody>

                    </table>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <table class="table" style="width: 80%">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Tên</th>
            <th scope="col">Giá</th>
            <th scope="col" colspan="2">Mô tả</th>
            <th scope="col">Nhà cung cấp</th>
            <th scope="col" colspan="3">Tool</th>

        </tr>
        </thead>



        <tbody>
            <?php
                foreach ($product as $pro){
                    ?>
            <tr>
                    <td ><?php
                        echo $pro["name"] ;
                    ?></td>
                    <td><?php
                        echo $pro["name"]
                    ?></td>
                    <td><?php
                        echo $pro["gia"]." VND"
                    ?></td>
                    <td colspan="2"><?php
                        echo $pro["mota"]
                    ?></td>
                    <td><?php
                        echo $pro["ncc"]
                    ?></td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary"   data-bs-toggle="modal" data-bs-target="#edit<?php echo $pro["id"]?>">
                           Edit
                        </button>
                        <!-- Modal -->

                        <div class="modal fade" id="edit<?php echo $pro["id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="editpro.php" method="post">
                                        <div class="modal-body" id="pasetin">
                                            <input type="hidden" name="id" value="<?php echo $pro["id"] ?>"/>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" >Tên</span>
                                                <input type="text" name="name" class="form-control" value="<?php echo $pro["name"] ?>" aria-label="Tên" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" >Giá</span>
                                                <input type="text" name="gia" class="form-control" value="<?php echo $pro["gia"] ?>" aria-label="Giá" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Mô tả</span>
                                                <input type="text" name="mota" class="form-control" value="<?php echo $pro["mota"] ?>" aria-label="Mô tả" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Nhà cung cấp</span>
                                                <input type="text" name="ncc" class="form-control" value="<?php echo $pro["ncc"] ?>" aria-label="Nhà cung cấp" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $pro["id"] ?>">
                        <button type="submit" class="btn btn-warning">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="mycart.php?id=<?php echo $pro["id"] ?>">
                        <button class="btn btn-danger">Cart+</button>
                    </a>

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
<!--    category-->
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
                <form action="themcate.php" method="post">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tên category</span>
                        <input type="text" name="name" class="form-control" placeholder="Tên" aria-label="Tên" aria-describedby="basic-addon1">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>