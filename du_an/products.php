<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Style Store</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/236237b42b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->

</head>

<body>
    <div class="header">
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
            </div>
        </div>
    </div>



    <div class="small-container">

        <div class="row row-2">
            <h2>All Products</h2>

            <select name="danhmuc" onchange="javascript:handleSelect(this)">
                <option value="index.html">Tất cả sản phẩm</option>
                <?php
                include 'db.php';

                $sql = "select*from category";
                $kq = $conn->query($sql);
                foreach ($kq as $key => $value) {

                ?>
                    <option value="products.php?danhmuc=<?php echo $value['category_id'] ?>"><?php echo $value['category_name'] ?></option>
                    < <?php } ?> <!-- <option>Giày</option>
                        <option>Đồng hồ</option>
                        <option>Mũ</option> -->
                        <!-- <option>Fashionable watches</option> -->
                        <option f value=""></option>
            </select>
        </div>

        <div class="row">

            <?php
            include 'db.php';
            if (isset($_GET['danhmuc'])) {

                $danhmuc = $_GET['danhmuc'];

                $sql = "select*from products where category_id='$danhmuc'";
                $kq = $conn->query($sql);
            }
            foreach ($kq as $key => $value) {
            ?>
                <div class="col-4">
                    <div style="overflow: hidden; height: 300px;">
                        <a href="products_detal.php?masp=<?php echo $value['product_id'] ?>"><img style="height: 400px;	object-fit: cover; " src="img/<?php echo $value['product_image'] ?>"></a>

                    </div>
                    <h4><?php echo $value['product_name'] ?></h4>

                    <s><?php echo $value['product_price'] ?> vnd</s>
                    <p style="font-weight: bold; font-size: x-large;"><?php echo $value['product_sale'] ?> VND</p>
                </div><?php } ?>
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


        <script type="text/javascript">
            function handleSelect(elm) {
                window.location = elm.value + ".php";
            }
        </script>
</body>

</html>