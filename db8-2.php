<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<html>

<head>
    <meta charset="UTF-8">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
    ?>
</head>

<body>
    <h2><?= $row["name"] ?></h2>
    ที่อยู่ : <?= $row["address"] ?><br>
    เบอร์โทร: <?= $row["mobile"] ?><br>
    email: <?= $row["email"] ?><br>
</body>

</html>