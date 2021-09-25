<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../tailwind/tailwind.css">

</head>

<body class="bg-yellow-50">
    <div class="bg-yellow-300">
        <div class="container mx-auto ">
            <div class="flex items-center justify-center px-6 py-4">
                <div class="">
                    <img src="https://2.bp.blogspot.com/-jDMP7EoBN1s/WN58Ma80rrI/AAAAAAAAC0g/9SU4jeIEMJ8UJsbVzGo7xKH-7aHi_9JUwCK4B/s1600/new-landing-logo.png" alt="">
                    <h1 class="text-xl font-extrabold text-red-900 uppercase">KÊNH 15</h1>
                </div>
                <!-- <div>
                    <form action="#" class="flex duration-700 border rounded-lg">
                        <input type="text" class="w-64 px-3 py-3 duration-500 rounded-lg rounded-r-none animation">
                        <button class="px-5 text-white bg-red-900 rounded-lg rounded-l-none">Search</button>
                    </form>
                </div> -->
            </div>
        </div>
        <div class="bg-red-900 ">
            <div class="container mx-auto font-bold">
                <ul class="flex">
                    <li class="p-3 px-6 text-white hover:bg-yellow-600 "><a href="tt (1).PHP">TRANG CHỦ</a></li>
                    <li class="p-3 px-6 text-white bg-yellow-600 "><a href="showtt.php">ADMIN</a></li>


                </ul>
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
                        <td colspan="2"> <input class="px-4 py-2 bg-yellow-500 rounded-lg" value="Đăng nhập" type="submit" name="dangnhap"></td>
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

        $sql = "select *from taikhoan where user='$user'and pass='$pass'";
        $kq = $conn->query($sql);
        if ($kq->rowCount() == 1) {
            $_SESSION['user'] = $user;
            header('location:showtt.php');
        } else {
            echo "<h1> Đang nhập k thành công</h1>";
        }
    }




    ?>
</body>

</html>