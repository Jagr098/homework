<?php
$name = "Name: Egor<hr>";
$surname = "Surname: Kapturenko<hr>";
$age = "Age: 39<hr>";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Домашняя работа 18.12.20</title>
</head>
<body>
<div class="container">
    <div class="item">
        <?php
        echo $name;
        ?>
    </div>
    <div class="item">
        <?php
        echo $surname;
        ?>
    </div>
    <div class="item">
        <?php
        echo $age;
        ?>
    </div>
</div>
</body>
</html>
