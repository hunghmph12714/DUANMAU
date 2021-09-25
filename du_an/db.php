    <?php
    try {
        $conn = new  PDO("mysql:host=localhost;dbname=duanmau_ph12714;charset=utf8", "root", "");
    } catch (PDOException $e) {
        echo "lỗi";
    }
