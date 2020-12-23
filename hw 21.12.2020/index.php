<?php
define('pi', "3.14");
$time = date('H');
if ($time >= 20 || $time < 8){
    $hi = "Доброй ночи!";
    $img_class = "night";
} else{
    $hi = "Добрый день!";
    $img_class = "day";
}
$num = 1000;
$c = 0;
while ($num>=50){
    $num /=2;
    $c++;
}
for($a = 1000; $a <= 50; $a++) {
    if ($a / 2) {
        echo $a . "<br>";
    }
}
$s = 50;
for ($num = 1000; $num >= $s; $j++) {
    $num = $num / 2;
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Домашнее задание 21.12.2020</title>
</head>
<body>
    <div class="container">
        <div class="pi">
            <a href="https://ru.wikipedia.org/wiki/%D0%9F%D0%B8_(%D1%87%D0%B8%D1%81%D0%BB%D0%BE)" target="blank"><? echo "Число ПИ = " . pi;?></a>
        </div>
        <div class="day__night">
            <div class="day__night__title">
                <a href="https://sochi.camera/#/227" target="blank"><? echo $hi;?></a>
            </div>
            <div class="day__night__img">
              <? echo "<img class='$img_class'/>";?>
            </div>
        </div>
        <div class="element">
            <div class="element__column">
                <? $i = 5;
                while ($i <= 13) {
                    echo $i . '<br>';
                    $i++;
                }?>
            </div>
            <div class="element__item">
                <? echo "Число:  $num <br>" ;
                echo "Количество итераций:  $c <br>";?>
                <?echo "Число:  $num <br>";
                echo "Количество итераций:  $j";?>
            </div>
            <div class="element__row">
                <ul>
                    <li>
                        <?
                        $i = 0;
                        function test () {
                            global $i;
                            $i++;
                            echo $i. " ";
                        }
                        for ($id = 0; $id < 10; $id++){
                            test();
                        }
                            echo "Не доделал последнее задание :(";
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>