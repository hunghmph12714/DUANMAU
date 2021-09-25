  <?php
    session_start();
    ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>AdminLTE 3 | Dashboard</title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bootstrap 4 -->
      <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- JQVMap -->
      <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
      <!-- summernote -->
      <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <script src="https://kit.fontawesome.com/f76b556493.js" crossorigin="anonymous"></script>
  </head>


  <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">

          <!-- Navbar -->
          <nav class="main-header navbar navbar-expand navbar-white navbar-light">
              <!-- Left navbar links -->
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                      <a href="index3.html" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                      <a href="#" class="nav-link">Contact</a>
                  </li>
              </ul>

              <!-- SEARCH FORM -->
              <form class="form-inline ml-3">
                  <div class="input-group input-group-sm">
                      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                      <div class="input-group-append">
                          <button class="btn btn-navbar" type="submit">
                              <i class="fas fa-search"></i>
                          </button>
                      </div>
                  </div>
              </form>

              <!-- Right navbar links -->

          </nav>
          <!-- /.navbar -->

          <!-- Main Sidebar Container -->
          <aside class="main-sidebar  elevation-4" style="  background: radial-gradient(#fff, #ffd6d6);">
              <!-- Brand Logo -->
              <a href=" index3.html" class="brand-link">
                  <img src="https://www.elleman.vn/wp-content/themes/elleman/images/logo-elle-man.png" alt=" Logo" class="w-8/12 mx-auto border-b" style="opacity: .8">

              </a>

              <!-- Sidebar -->
              <div class="sidebar ">
                  <!-- Sidebar user panel (optional) -->
                  <?php if (isset($_SESSION['user'])) {
                        include 'db.php';
                        $user_name = $_SESSION['user'];

                        $sql = "select*from login where user_name='$user_name'";
                        $kq = $conn->query($sql)->fetch();
                    }
                    ?>

                  <div class="user-panel mt-3 pb-3 mb-3 d-flex items-center border-gray-900  border-b border-t pt-3 ">
                      <div class="image">
                          <img src="./img/<?php echo $kq['avata'] ?>" class="img-circle elevation-2" alt="User Image">
                      </div>

                      <div class="info">
                          <a href="thongtincanhan.php?userid=<?php echo $kq['user_id']; ?>" class="d-block">
                              <?php

                                echo $kq['name'];

                                ?>

                          </a>
                      </div>
                  </div>

                  <!-- SidebarSearch Form -->
                  <div class="form-inline">
                      <div class="input-group" data-widget="sidebar-search">
                          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                          <div class="input-group-append">
                              <button class="btn btn-sidebar">
                                  <i class="fas fa-search fa-fw"></i>
                              </button>
                          </div>
                      </div>
                  </div>

                  <!-- Sidebar Menu -->
                  <nav class="mt-2">
                      <ul class="nav nav-pills nav-sidebar flex-column font-bold" data-widget="treeview" role="menu" data-accordion="false">
                          <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->



                          <li class="nav-header">EXAMPLES</li>
                          <li class="nav-item">
                              <a href="qtdanhmuc.php" class="nav-link">
                                  <i class="far fa-calendar-alt text-lg"></i>
                                  <p class="ml-2">
                                      QUẢN TRỊ DANH MỤC

                                  </p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="fas fa-baby-carriage text-lg"></i>
                                  <p class="ml-2">
                                      QUẢN TRỊ SẢN PHẨM
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview ml-3">
                                  <?php
                                    include 'db.php';

                                    $sql = "select*from category";
                                    $kq = $conn->query($sql);
                                    foreach ($kq as $key => $value) {

                                    ?>
                                      <li class="nav-item">
                                          <a href="qtsanpham.php?madmshow=<?php echo $value['category_id'] ?>" class="nav-link">

                                              <p><?php echo $value['category_name'] ?></p>
                                          </a>
                                      </li> <?php } ?>


                              </ul>
                          </li>



                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="fas fa-comments text-lg"></i>
                                  <p class="ml-2">
                                      QUẢN TRỊ COMMENT
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview ml-3">
                                  <?php
                                    include 'db.php';

                                    $sql = "select*from category";
                                    $kq = $conn->query($sql);
                                    foreach ($kq as $key => $value) {

                                    ?>
                                      <li class="nav-item">
                                          <a href="qtcomment.php?madmcmt=<?php echo $value['category_id'] ?>" class="nav-link">

                                              <p><?php echo $value['category_name'] ?></p>
                                          </a>
                                      </li> <?php } ?>


                              </ul>
                          </li>


                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="fas fa-users"></i>
                                  <p class="ml-2">
                                      QUẢN TRỊ USER
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview ml-3">
                                  <li class="nav-item">
                                      <a href="qtnguoidung.php?loaiuser=admin" class="nav-link">
                                          <i class="fas fa-user-cog"></i>
                                          <p>Admin</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="qtnguoidung.php?loaiuser=khach" class="nav-link">
                                          <i class="fas fa-users"></i>
                                          <p>Người dùng</p>
                                      </a>
                                  </li>

                              </ul>
                          </li>

                      </ul>
                      <ul class="nav nav-treeview">

                          <li class="nav-item">
                              <a href="logout.php" class="nav-link">

                                  <p class=" hover:underline ">Đăng xuất</p>
                              </a>
                          </li>

                      </ul>
                  </nav>
                  <!-- /.sidebar-menu -->
              </div>
              <!-- /.sidebar -->
          </aside>







          <div class="content-wrapper bg-red-50 ">




              <div class="card-body pb-16">

                  <h1 class="my-8 text-center font-bold text-2xl uppercase">

                      <?php
                        include 'db.php';
                        if (isset($_GET['madmshow'])) {
                            $madmshow = $_GET['madmshow'];
                        }
                        $sqltdm = "select*from category where category_id=$madmshow";
                        $kqtdm = $conn->query($sqltdm)->fetch();
                        ?>
                      DANH SÁCH SẢN PHẨM THUỘC DANH MỤC: <span class="text-red"> <?php echo $kqtdm['category_name'] ?></span>


                  </h1>
                  <table class="table table-bordered border border-black mx-auto text-lg text-center items-center bg-white" style=" width: 90%;">
                      <thead>
                          <tr>
                              <td colspan="9">
                                  <a href="themsp.php"><button class="bg-yellow-300 px-3 py-2 hover:bg-yellow-500 rounded-lg font-bold">Thêm sản phẩm</button></a>
                              </td>
                          </tr>
                          <tr>
                              <th style="width: 1%;">STT</th>
                              <th style="width: 5%;">ID</th>
                              <th style="width: 20%;">Tên sp</th>
                              <th style="width: 10%;">Giá Gốc</th>
                              <th style="width: 10%;"> Giá Sale</th>
                              <th style="width: 15%;">Ảnh sp</th>
                              <th style=" width: 100%;">Chi tiết </th>

                              <th style="width: 5%;">View</th>
                              <th style="width: 20%">Sửa Xóa</th>

                          </tr>
                      </thead>
                      <tbody>
                          <?php

                            $sql = "select products.product_id,product_name,product_price, product_sale,product_image ,product_detail, product_view ,category   .category_id,
                            category_name from products join category on products.category_id=category.category_id where products.category_id=$madmshow";
                            $kq = $conn->query($sql);
                            $_SESSION['madmshow']=$madmshow;
                            foreach ($kq as $key => $value) {
                                $dmsp =  $value['category_id']

                            ?>
                              <tr>
                                  <td><?php echo $key + 1 ?></td>
                                  <td><?php echo $value['product_id'] ?></td>
                                  <td><?php echo $value['product_name'] ?></td>
                                  <td><?php echo $value['product_price'] ?></td>
                                  <td><?php echo $value['product_sale'] ?></td>
                                  <td><img src="img/<?php echo $value['product_image'] ?>" width="100px" alt=""></td>
                                  <td><?php echo $value['product_detail'] ?></td>

                                  <td><?php echo $value['product_view'] ?></td>


                                  <td>
                                      <div class="flex gap-1">
                                          <div>
                                              <a href="suasp.php?masuasp=<?php echo $value['product_id'] ?>">
                                                  <input class="p-1 rounded-lg bg-yellow-300 font-bold " type="submit" name="suadm" value="Sửa"></a>
                                          </div>
                                          <div><a href="xoasp.php?maxoasp=<?php echo $value['product_id'] ?>?madmspxoa=<?php echo $dmsp ?>">
                                                  <input class="p-1 rounded-lg bg-red-100 font-bold " type="submit" name="xoadm" value="Xóa">
                                              </a>
                                          </div>
                                      </div>
                                  </td>

                              </tr>
                          <?php } ?>
                      </tbody>

                  </table>
              </div>





          </div>






          <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
      <!-- /.content -->

      <!-- /.content-wrapper -->


      <footer class="main-footer">
          <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">HUNGHMPH12714</a>.</strong>
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
              <b>Version</b> 3.1.0-rc
          </div>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->

      <!-- jQuery -->
      <script src="plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
          $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <script src="plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="plugins/sparklines/sparkline.js"></script>
      <!-- JQVMap -->
      <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="plugins/moment/moment.min.js"></script>
      <script src="plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="plugins/summernote/summernote-bs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/adminlte.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="dist/js/demo.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="dist/js/pages/dashboard.js"></script>
  </body>

  </html>