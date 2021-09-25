    <?php
    include 'db.php';
if (isset($_GET['maxoadm'])) {
    $maxoadm = $_GET['maxoadm'];
}
$sql = "delete from category where category_id=$maxoadm";
$kq = $conn->prepare($sql);
if ($kq->execute()) {
    header("Location:showdm.php");
} else {
    echo "không xóa đc ";
}
header('location:qtdanhmuc.php');
