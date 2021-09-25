<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printd T-Shirt - Style Store</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/236237b42b.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../slick/slick.css">
    <script src="https://kit.fontawesome.com/236237b42b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../slick/slick-theme.css">
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
</head>

<body>
    <div class="header">
        <div class="container">
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
            </div>
        </div>
    </div>

    <!-- ---------- single Products detail ----------- -->


    <!--  -->

    <?php
    include 'db.php';
    if (isset($_GET['masp'])) {

        $masp = $_GET['masp'];
        $sqlview = "update products set product_view=product_view+1 where product_id=$masp";
        $kqview = $conn->exec($sqlview);


        $sql = "select*from products where product_id='$masp'";
        $kq = $conn->query($sql)->fetch();
        $splq = $kq['category_id'];
    }
    // $sqlview = "update products set product_view='2' where product_id=$masp";
    // $kqview = $conn->prepare($sqlview);

    ?>

    <div class="   container single-product">
        <div class="row">
            <div class="col-2">
                <div style="overflow: hidden; height: 600px;">
                    <img style="height: 600px;	object-fit: cover; " src="img/<?php echo $kq['product_image'] ?>">

                </div>
            </div>
            <div class="col-2">
                <p>Home / T-Shirt</p>
                <h1>
                    <?php echo $kq['product_name'] ?>
                </h1>
                <h4> <s><?php echo $kq['product_price'] ?>. VND</s>
                    <h4>
                        <h1>
                            <?php echo $kq['product_sale'] ?>. VND
                        </h1>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <select>
                                <option>Select Size</option>
                                <option>XXL</option>
                                <option>XL</option>
                                <option>L</option>
                                <option>M</option>
                                <option>S</option>
                            </select>
                            <input w type="number" value="1" name="cart_quantity">
                            <input type="submit" class="btn" name="them_cart" value="ADD TO CART">
                        </form>
                        <h3>Chi tiết sản phẩm
                            <i class="fa fa-indent"></i>
                        </h3>
                        <br>
                        <p><?php echo $kq['product_detail'] ?></p>
            </div>
        </div>
    </div>

    <div class="small-container">
        <div>

            <div class="binhluan" style="padding: 30px;">
                <h2 style="padding: 20px;">Bình luận </h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <textarea name="content" id="" style="width:100%; height: 100px; padding: 10px;" cols="30" placeholder="Bình luận tại đây..." rows="10"></textarea>
                    <br>
                    <button name="btn_cmt" style="padding: 10px; background-color:green;">Bình luận</button>
                    <!-- <input type="submit" name="btn_cmt"> -->
                </form>

                <?php

                include 'db.php';
                if (isset($_POST['btn_cmt'])) {

                    $content = $_POST['content'];
                    $sqlbl = "insert into comment values(null,'$content',null,'$masp',12)";
                    $kqbl = $conn->exec($sqlbl);
                    if ($kqbl == 1) {
                        echo "Thanh cong";
                    } else {
                        echo "loi";
                    };
                }
                ?>



                <h2 style="border-top: 1px solid ; margin: 30px 0; padding: 30px 0 0 0;">Tất cả bình luận </h2>

                <?php
                $sql = "select name, cmt_time,content from comment join login on comment.user_id=login.user_id where product_id='$masp' order by cmt_time desc ";
                $kq = $conn->query($sql);
                foreach ($kq as $value) {
                ?>
                    <div style="display: flex; grid-gap: 30px; align-items:center; margin: 30px; border:1px solid green;    padding: 20px;">
                        <div>
                            <a href="#"><img style="border-radius: 100%; width: 50px;" src="images/user-1.png" alt=""></a>
                        </div>
                        <div>
                            <div style="display: flex; 	justify-content: space-between; align-items:center ;grid-gap: 490px;">
                                <h3><?php echo $value['name'] ?></h3>
                                <p style="padding: 0,100px;"><?php echo $value['cmt_time'] ?></p>
                            </div>
                            <p><?php echo $value['content'] ?> </p>
                        </div>
                    </div> <?php } ?>

            </div>


        </div>




    </div>
    <!-- ----- title------------- -->
    <div class="small-container">
        <div class="row row2">
            <h2>Sản phẩm liên quan</h2>
            <!-- <p>View More</p> -->
        </div>
    </div>

    <!-- ---------------Products----------------- -->
    <div class="small-container">

        <div class="row">

        </div>
        <div class="row slideshow">

            <?php

            $sqllq = "select*from products where category_id =$splq";
            $kqlq = $conn->query($sqllq);
            foreach ($kqlq as $value) {
            ?>
                <div style="border: 1px solid green; margin: 10px;" class="col-4 product">
                    <div style="height: 288px; overflow: hidden;"><a href="products_detal.html"><img style=" object-fit: cover; " height="280px" src="img/<?php echo $value['product_image'] ?>"></a></div>
                    <h4><?php echo $value['product_name'] ?></h4>

                    <s><?php echo $value['product_price'] ?></s>
                    <p style="font-weight: bold; font-size: x-large;"><?php echo $value['product_sale'] ?></p>
                </div><?php } ?>
            <div style="border: 1px solid green; margin: 10px;" class="col-4 product">
                <a href="products_detal.html"><img src="images/product-1.jpg"></a>
                <h4>Áo phông in màu đỏ</h4>

                <s>$ 70.00</s>
                <p style="font-weight: bold; font-size: x-large;">$50.00</p>
            </div>
            <div style="border: 1px solid green; margin: 10px;" class="col-4 product">
                <a href="products_detal.html"><img src="images/product-1.jpg"></a>
                <h4>Áo phông in màu đỏ</h4>

                <s>$ 70.00</s>
                <p style="font-weight: bold; font-size: x-large;">$50.00</p>
            </div>
            <div style="border: 1px solid green; margin: 10px;" class="col-4 product">
                <a href="products_detal.html"><img src="images/product-1.jpg"></a>
                <h4>Áo phông in màu đỏ</h4>

                <s>$ 70.00</s>
                <p style="font-weight: bold; font-size: x-large;">$50.00</p>
            </div>
            <div style="border: 1px solid green; margin: 10px;" class="col-4 product">
                <a href="products_detal.html"><img src="images/product-1.jpg"></a>
                <h4>Áo phông in màu đỏ</h4>

                <s>$ 70.00</s>
                <p style="font-weight: bold; font-size: x-large;">$50.00</p>
            </div>
            <div style="border: 1px solid green; margin: 10px;" class="col-4 product">
                <a href="products_detal.html"><img src="images/product-1.jpg"></a>
                <h4>Áo phông in màu đỏ</h4>

                <s>$ 70.00</s>
                <p style="font-weight: bold; font-size: x-large;">$50.00</p>
            </div>
        </div>
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and
                        Benefits of Sports Accessible to the Many</p>
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
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube </li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="Copyright">Copyright 2020 - By Style Shop</p>
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

        <!-- ------------------- JS for  product gallery------------------------         -->
        <script>
            var ProductImg = document.getElementById("productImg");
            var SmallImg = document.getElementsByClassName("small-img");

            SmallImg[0].onclick = function() {
                ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function() {
                ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function() {
                ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function() {
                ProductImg.src = SmallImg[3].src;
            }
        </script>

        <!-- ----slide show------ -->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="../slick/slick.min.js"></script>
        <script type="text/javascript">
            $(document).ready(
                function() {
                    $('.slideshow').slick({
                        slidesToShow: 4,
                        slidesToScroll: 1,
                    });
                });
        </script>



</body>

</html>