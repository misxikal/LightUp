<?php
    $db_host='localhost'; // ваш хост
    $db_name='lightUp'; // ваша бд
    $db_user='root'; // пользователь бд
    $db_pass=''; // пароль к бд
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); // коннект с сервером бд
    $mysqli->set_charset("utf8mb4"); // задаем кодировку
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lightUp</title>
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/content.css">
</head>
<body>
    <div id="contein">
        <?php include("page/headers.php");?>
        <?php include("page/content.php");?>
        <?php include("page/footer.php");?>
    </div>
</body>
</html>