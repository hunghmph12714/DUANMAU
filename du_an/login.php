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
     <div class="container mx-auto">
         <div class=" my-32">
             <form class="" action="" method="POST" enctype="multipart/form-data">
                 <table class="mx-auto border px-10">
                     <tr>
                         <td class="py-5 px-4 font-bold"> <span>Tên đăng nhập</span></td>
                         <td> <input class=" border p-1 rounded-lg text-xl" type="text" name="user"></td>
                     </tr>
                     <tr>
                         <td class="py-5 px-4 font-bold"> <span>Password</span></td>
                         <td> <input class=" border p-1 rounded-lg text-xl" type="password" name="pass"></td>
                     </tr>
                     <tr class="text-center">
                         <td><a href="dangky.php?loaitk=khach"><i><u>Đăng ký</u></i></a></td>
                         <td colspan=""> <input class="px-4 py-2 bg-yellow-500 rounded-lg" value="Đăng nhập" type="submit" name="dangnhap"></td>
                         d
                     </tr>
                 </table>
                 <!-- <div>
                 
                   
                </div>

                <div>
                  
                  

                </div>
               -->
             </form>
         </div>
     </div>


     <?php
        include 'db.php';
        if (isset($_POST['dangnhap'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $sql = "select *from login where user_name='$user'and user_pass='$pass'";
            $kqloai = $conn->query($sql)->fetch();
            $kq = $conn->query($sql);
            if ($kq->rowCount() == 1) {
                $_SESSION['user'] = $user;
                if ($kqloai['loai_user'] == 'admin') {
                    header('location:qtdanhmuc.php');
                } else {

                    header('location:index.php');
                }
            } else {
                echo "<h1> Đang nhập k thành công</h1>";
            }
        }




        ?>

 </body>

 </html>