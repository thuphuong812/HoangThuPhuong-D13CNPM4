<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ Cookies</title>
</head>
<body>
    <?php
        setcookie("hoten" , "ThuPhuong", time() + (86400)); //time() + (86400): thời gian hiệu lực là 24 giờ
        if(!isset($_COOKIE["hoten"]))
        {
            echo "<p> Chưa có cookies hoten </p>";
        }
        else
        {
            echo "<p> Hello: " . $_COOKIE["hoten"] . "</p>";
        }
    ?>
</body>
</html>