  <?php
    session_start();
    ob_start();
    ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>

      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  </head>

  <body class="bg-pink-50">
      <div style="  background: radial-gradient(#fff, #ffd6d6);">
          <div class="container mx-auto ">
              <div class="flex items-center justify-center px-6 py-4">
                  <div class="">
                      <a href="index.php"> <img src="https://www.elleman.vn/wp-content/themes/elleman/images/logo-elle-man.png" alt=""></a>

                  </div>
                  <!-- <div>
                    <form action="#" class="flex duration-700 border rounded-lg">
                        <input type="text" class="w-64 px-3 py-3 duration-500 rounded-lg rounded-r-none animation">
                        <button class="px-5 text-white bg-red-900 rounded-lg rounded-l-none">Search</button>
                    </form>
                </div> -->
              </div>
          </div>

      </div>






      <div class=" container mx-auto ">

          <style>
              td {
                  padding: 10px;
                  font-weight: bold;
              }
          </style>


          <div class="my-32">
              <form action="" method="POST" enctype="multipart/form-data">

                  <table class="mx-auto px-10 border " style="text-align: center;">
                      <tr>
                          <td>Mật khẩu cũ:</td>
                          <td><input class=" border p-1 rounded-lg " type="text" required name="mkcu"></td>
                      </tr>
                      <tr>
                          <td>Mật khẩu mới:</td>
                          <td><input class=" border p-1 rounded-lg " type="text" required name="mkmoi"></td>
                      </tr>
                      <tr>
                          <td>Nhập lại mật khẩu:</td>
                          <td><input class=" border p-1 rounded-lg " type="text" required name="nhaplaimk"></td>
                      </tr>
                      <tr">
                          <td></td>
                          <td class="py-3"> <input class="px-3 py-2 bg-yellow-300 hover:bg-yellow-600 rounded-lg" type="submit" name="btn_dmk" value="Đổi mật khẩu"></td>
                          </tr>
                  </table>



              </form>
          </div>

      </div>
      <?php
        include 'db.php';
        if (isset($_GET['madmk'])) {
            $madmk = $_GET['madmk'];
        }
        $sql = "select*from login where user_id=$madmk";
        $kq = $conn->query($sql)->fetch();

        ?>



      <?php

        if (isset($_POST['btn_dmk'])) {
            $mkcu = $_POST['mkcu'];
            $mkmoi = $_POST['mkmoi'];
            $nhaplaimk = $_POST['nhaplaimk'];


            if ($mkcu == $kq['user_pass']) {
                if ($mkmoi == $nhaplaimk) {
                    $sqldmk = "update login set user_pass='$mkmoi' where user_id='$madmk'";
                    $kqdmk = $conn->prepare($sqldmk);
                    if ($kqdmk->execute()) {
                        echo '   <script>  confirm("Đổi mật khẩu thành công)  </script>';
                        header("location:thongtincanhan.php?userid=$madmk");
                    }
                } else {
                    echo '   <script>  confirm("Mật khẩu mới chưa trùng nhau")  </script>';
                }
            } else {
                echo '   <script>  confirm("Mật khẩu cũ không đúng")  </script>';
            }
        }

        ?>




  </body>

  </html>