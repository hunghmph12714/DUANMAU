<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="mx-auto">
        <form action="" method="POST" enctype="multipart/form-data" class="items-center">
            <input type="text" name="tendm" placeholder="Thêm danh mục..." class=" border p-1 rounded-lg text-lg">
            <input type="submit" name="btn_themdm" value="Thêm" class=" bg-yellow-500 p-1 rounded-lg font-bold text-lg">
        </form>
    </div>
</body>

</html>
<?php

include 'db.php';
if (isset($_POST['btn_themdm'])) {
    $tendm = $_POST['tendm'];
    $sqldm = "insert into category values(null,'$tendm')";
    $kqdm = $conn->exec($sqldm);
    if ($kqdm == 1) {
        echo "thành công";
    } else {
        echo "Lỗi";
    }
}


?>