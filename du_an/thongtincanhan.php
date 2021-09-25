  <?php
    session_start();
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


      <style>
          td {

              padding: 5px 0;

          }
      </style>



      <?php
        include 'db.php';
        if (isset($_GET['userid'])) {
            $userid = $_GET['userid'];
        }
        $sql = "select*from login where user_id=$userid";
        $kq = $conn->query($sql)->fetch();

        ?>



      <div class="mx-auto border-4 w-4/12 my-20 p-10">

          <div class="border-b-2 pb-5">
              <div class="border w-40 h-40 mx-auto"><img src="./img/<?php echo $kq['avata'] ?>" class="w-40 mx-auto" alt="Không có avata"></div>
          </div>
          <div class="mx-auto w-9/12 my-10 ">

              <table class="">
                  <tr>
                      <td class="font-bold">User ID : </td>
                      <td class=""><?php echo $kq['user_id'] ?></td>
                  </tr>
                  <tr>
                      <td class="font-bold">Tài khoản :</td>
                      <td><?php echo $kq['user_name'] ?></td>
                  </tr>
                  <tr>
                      <td class="font-bold">Họ tên : </td>
                      <td><?php echo $kq['name'] ?></td>
                  </tr>

                  <tr>
                      <td class="font-bold">Email :</td>
                      <td><?php echo $kq['email'] ?></td>
                  </tr>

                  <tr>
                      <td class="font-bold ">Số điện thoại : </td>
                      <td><?php echo $kq['phone'] ?></td>
                  </tr>




              </table>
              <div> <a href=""><button class="mr-5 my-3">Sửa thông tin</button> </a>
                  <a href="doimk.php?madmk=<?php echo $kq['user_id'] ?>"> <button class="hover:bg-yellow-600 p-1 bg-yellow-200 rounded-lg" ><i>Đổi mật khẩu</i></button></a>
              </div>
          </div>







      </div>






  </body>

  </html>