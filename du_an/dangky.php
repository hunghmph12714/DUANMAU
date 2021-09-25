<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div style="  background: radial-gradient(#fff, #ffd6d6);">
        <div class=" container mx-auto ">
            <div class=" flex items-center justify-center px-6 py-4">
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
                        <td> <input class=" border p-1 rounded-lg text-xl" type="text" required name="user"></td>
                    </tr>
                    <tr>
                        <td class="py-5 px-4 font-bold"> <span>Password</span></td>
                        <td> <input class=" border p-1 rounded-lg text-xl" type="password" required name="pass"></td>
                    </tr>
                    <tr>
                        <td class="py-5 px-4 font-bold"> <span>Họ tên</span></td>
                        <td> <input class=" border p-1 rounded-lg text-xl" type="text" required name="hoten"></td>
                    </tr>
                    <tr>
                        <td class="py-5 px-4 font-bold"> <span>Số Điện thoại</span></td>
                        <td> <input class=" border p-1 rounded-lg text-xl" type="number" required name="phone"></td>
                    </tr>
                    <tr>
                        <td class="py-5 px-4 font-bold"> <span>Email</span></td>
                        <td> <input class=" border p-1 rounded-lg text-xl" type="email" required name="mail"></td>

                    </tr>
                    <tr>
                        <td class="py-5 px-4 font-bold"> <span>Avata</span></td>
                        <td> <input class=" border p-1 rounded-lg text-xs" type="file" name="avata"></td>

                    </tr>
                    <tr class="text-center">
                        <td colspan="2"> <input class="px-4 py-2 bg-yellow-500 rounded-lg" value="Đăng ký" type="submit" name="dangky"></td>
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
    if (isset($_POST['dangky'])) {
        $loaitk = $_GET['loaitk'];
        $user = $_POST['user'];
        $hoten = $_POST['hoten'];
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];
        $mail = $_POST['mail'];
        $avata = $_FILES['avata']['name'];
        move_uploaded_file($_FILES['avata']['tmp_name'], "img/" . $avata);
        function checkuser($user)
        {
            include 'db.php';
            $sql = "select count(*) from login where user_name like '$user'";
            $data = $conn->prepare($sql);
            $data->execute();
            return $data->fetchColumn();
        }
        $test_user = checkuser($user);

        if ($test_user == 0) {
            $sqltk = "insert into login values(null,'$user','$pass','$hoten','$phone','$mail','$avata','$loaitk')";
            $kqtk = $conn->exec($sqltk);
            if ($kqtk == 1) {
                echo "<script>confirm('Đăng ký thành công') 
               </script>";
            } else {
                echo "lỗi";
            }
        } else {
            echo "<script>
alert('Tài khoản đã tồn tại')
</script>";
        }
    }


    ?>

</body>


</html>