  <?php
        session_start();
        ob_start();
     

  include 'db.php';
  if (isset($_GET['maxoasp']) ) {

  $madmspxoa=$_SESSION['madmshow'];
  }
  $sql = "delete from products where product_id=$maxoasp";
  $kq = $conn->prepare($sql)->execute();


  header("location:qtsanpham.php?madmshow=$madmspxoa");