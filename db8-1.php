<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="db8.php" method="post">
            username:<input type="text" name="username"><br><br>
            password:<input type="password" name="password"><br><br>
            ชื่อสมาชิก:<input type="text" name="name"><br><br>
            ที่อยู่: <input type="text" name="address"><br><br>
            เบอร์โทร: <input type="tel" name="mobile"><br><br>
            email: <input type="text" name="email" ><br><br>
            <input type="submit" value="เพิ่มชื่อ"><br>
        </form>
    </body>
</html>