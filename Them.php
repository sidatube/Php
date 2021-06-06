
<?php include_once "sesion.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "html/head.php"?>

<body>
<h1>tk là :<?php echo $_SESSION["user"]["username"] ?></h1>
    <form action="luu.php" method="post">
        <input type="text" name="Name" placeholder="name..">
        <input type="number" name="Age" placeholder="age..">
        <textarea name="address" placeholder="Địa chỉ"></textarea>
        <button type="submit">Save</button>
    </form>
</body>
</html>