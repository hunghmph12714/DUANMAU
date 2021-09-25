<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Style Store</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../slick/slick-theme.css">
  <link rel="stylesheet" href="../slick/slick.css">
  <script src="https://kit.fontawesome.com/236237b42b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href=".">

</head>

<body>
  <div class="header">
    <div class="container">
      <div class="container ">
        <div class="navbar">
          <div class="logo" style="width: 125px;">
            <a href="index.php"> <img width="200px" src="https://www.elleman.vn/wp-content/themes/elleman/images/logo-elle-man.png" alt=""></a>
          </div>
          <div class="" style="margin: auto 150px;">
            <form action="" class="serach" style="display: flex;">
              <input type="text" width="100px" placeholder="Tìm kiếm">
              <button class="btn-serach"><i class="fas fa-search"></i></button>
            </form>
          </div>

          <nav>
            <ul id="MenuItems">
              <li><a href="index.php">Home</a></li>
              <li><a href="products.php">Products</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Contact</a></li>
              <li><a href="login.php">Account</a></li>
            </ul>
          </nav>

          <div style="align-items: center;">
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
          </div>
          <div>


          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-2">
          <h1>
            Tạo cho buổi tập của bạn<br />
            A New Style!
          </h1>
          <p>
            Thành công không phải lúc nào cũng là về sự vĩ đại. Đó là về tính nhất quán. Kiên trì <br />làm việc chăm
            chỉ sẽ gặt hái được thành công. Sự vĩ đại sẽ đến.

          </p>
          <a href="" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
          <img src="images/image1.png" />
        </div>
      </div>
    </div>
  </div>

  <!-- ------------- featured categorries ---------------- -->
  <!-- <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <img src="img/product-3.jpg" />
        </div>
        <div class="col-3">
          <img src="img/product-3.jpg" />
        </div>
        <div class="col-3">
          <img src="img/product-3.jpg" />
        </div>
      </div>
    </div>
  </div> -->
  <!-- ------------- featured products ---------------- -->

  <div class="small-container">
    <h2 class="title">Sản phẩm nổi bật</h2>
    <div class="row">

      <?php
      include 'db.php';


      $sql = "select*from products order by product_view desc limit  4";
      $kq = $conn->query($sql);

      foreach ($kq as $key => $value) {
      ?>

        <div class="col-4">
          <a href="products_detal.html"><img style="height: 300px; 	object-fit: cover;" src="img/<?php echo $value['product_image'] ?>"></a>
          <h4> <?php echo $value['product_name'] ?></h4>
          <s> <?php echo $value['product_sale'] ?></s>
          <p style="font-weight: bold; font-size: x-large;"> <?php echo $value['product_price'] ?></p>
        </div>
      <?php } ?>
      <!-- <div class="col-4">
        <a href="products_detal.html"><img src="images/product-1.jpg"></a>
        <h4>Áo phông in màu đỏ</h4>

        <s>$ 70.00</s>
        <p style="font-weight: bold; font-size: x-large;">$50.00</p>
      </div>

      <div class="col-4">
        <a href="products_detal.html"><img src="images/product-1.jpg"></a>
        <h4>Áo phông in màu đỏ</h4>

        <s>$ 70.00</s>
        <p style="font-weight: bold; font-size: x-large;">$50.00</p>
      </div>
      <div class="col-4">
        <a href="products_detal.html"><img src="images/product-1.jpg"></a>
        <h4>Áo phông in màu đỏ</h4>

        <s>$ 70.00</s>
        <p style="font-weight: bold; font-size: x-large;">$50.00</p>
      </div> -->



    </div>
  </div>
  <!-- ------------ offer -------------- -->
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="images/exclusive.png" class="offer-img" />
        </div>
        <div class="col-2">
          <p>Có sẵn độc quyền trên RedStore </p>
          <h1>Đồng hồ thông minh</h1>
          <small>
            Mi Smart Band 4 có màn hình cảm ứng màu AMOLED lớn hơn 39,9% (so với Mi Band 4) với độ sáng có thể điều
            chỉnh, vì vậy
            mọi thứ đều rõ ràng nhất có thể</small>
          <a href="" class="btn">Buy Now &#8594;</a>
        </div>
      </div>
    </div>
  </div>
  <!-- ------------ testimonial -------------- -->
  <div class="testimonial">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fa fa-qoute-lef"></i>
          <p>
            Khả năng hoặc anh ấy hoàn toàn giả vờ để người lạ trở nên tinh tế. Ồ đến một căn phòng khác, vui lòng tưởng
            tượng làm trong. Đã cho tôi xếp hạng cuối cùng bắn lớn một trận hòa. Xuất sắc để không có sự chân thành nhỏ
            bé. Yêu cầu xóa thỏa thích nếu trên anh ta chúng tôi
          </p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="images/user-1.png" />
          <h3>Quỳnh Trang</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-qoute-lef"></i>
          <p>
            Khả năng hoặc anh ấy hoàn toàn giả vờ để người lạ trở nên tinh tế. Ồ đến một căn phòng khác, vui lòng tưởng
            tượng làm trong. Đã cho tôi xếp hạng cuối cùng bắn lớn một trận hòa. Xuất sắc để không có sự chân thành nhỏ
            bé. Yêu cầu xóa thỏa thích nếu trên anh ta chúng tôi
          </p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="images/user-2.png" />
          <h3>Lê Nhất</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-qoute-lef"></i>
          <p>
            Khả năng hoặc anh ấy hoàn toàn giả vờ để người lạ trở nên tinh tế. Ồ đến một căn phòng khác, vui lòng tưởng
            tượng làm trong. Đã cho tôi xếp hạng cuối cùng bắn lớn một trận hòa. Xuất sắc để không có sự chân thành nhỏ
            bé. Yêu cầu xóa thỏa thích nếu trên anh ta chúng tôi
          </p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <img src="images/user-3.png" />
          <h3>Thu Hằng</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- ------------------- brands --------------------- -->
  <div class="brands">
    <div class="small-container">
      <div class="row">
        <div class="col-5">
          <img src="images/logo-godrej.png" />
        </div>
        <div class="col-5">
          <img src="images/logo-oppo.png" />
        </div>
        <div class="col-5">
          <img src="images/logo-coca-cola.png" />
        </div>
        <div class="col-5">
          <img src="images/logo-paypal.png" />
        </div>
        <div class="col-5">
          <img src="images/logo-philips.png" />
        </div>
      </div>
    </div>
  </div>
  <!-- ------------footer----------- -->

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App</h3>
          <p>Download App for Android and ios mobile phone</p>
          <div class="app-logo">
            <img src="images/play-store.png" />
            <img src="images/app-store.png" />
          </div>
        </div>
        <div class="footer-col-2">
          <img src="images/logo-white.png" />
          <p>
            Our Purpose Is To Sustainably Make the Pleasure and Benefits of
            Sports Accessible to the Many
          </p>
        </div>
        <div class="footer-col-3">
          <h3>Useful Links</h3>
          <ul>
            <li>Coupons</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
          </ul>
        </div>
        <div class="footer-col-4">
          <h3>Follow us</h3>
          <ul>
            <li>
              <a href="#" style="text-decoration: none" target="blank">Facebook</a>
            </li>
            <li>
              <a href="#" style="text-decoration: none" target="blank">Twitter</a>
            </li>
            <li>
              <a href="#" style="text-decoration: none" target="blank">Instagram</a>
            </li>
            <li>
              <a href="#" style="text-decoration: none" target="blank">Youtube</a>
            </li>
          </ul>
        </div>
      </div>
      <hr />
      <p class="Copyright">Copyright 2020 - By Style Shop</p>
    </div>
  </div>
  <!-- ------------------- js for toggle menu-------------- -->
  <script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
      if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px";
      } else {
        MenuItems.style.maxHeight = "0px";
      }
    }
  </script>
</body>

</html>