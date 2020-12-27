<?php

//Задача №4
$str = "html css php";
$a = mb_substr($str, 0, 4);
$b = mb_substr($str, 4, 5);
$c = mb_substr($str, 9, 11);

echo "$a <br> $b <br> $c <br>";
echo "<hr />";

//Задача №5
$str1 = "file.png";

function replace($str1){
    if (mb_substr($str1, -4) == ".png"){
        echo "Да <br>";
    } else {
        echo "Нет <br>";
    }
}
replace($str1);
echo "<hr />";


//Домашняя работа 25.12.2020
//Задача №1
function replace1(){
    $arr = array("ball", "player", "match", "hit", "window", "world", "game", "start", "kid", "age");
    foreach ($arr as $str) {
        if (mb_strlen($str) > 5) {
            $str = mb_substr($str, 5) . '...';
        }
        echo "$str <br>";
    }
}
replace1();
echo "<hr />";

//Задача №2
function replace2()
{
    $str2 = "Information on working with 1C-Bitrix: Site Management can be found in training courses and documentation";
    $result = str_replace(array('a', 'b', 'c'), array(1, 2, 3), $str2);
    echo "$result <br>";
}
replace2();
echo "<hr />";

//Задача №3
function replace3()
{
    $str = "abc abc abc";
    $last = mb_strlen($str) - strpos($str, 'b') - 1;
    echo $last;
}
replace3();
echo "<hr />";

//Задача №4
function replace4()
{
    $str = "html css php";
    $arr = explode(' ', $str);
    print_r($arr);
}
replace4();
echo "<hr />";

//Задача №5
function check()
{
    $str_start = "10-02-2015";
    $str_finish = "25-12-2020";
    $time = strtotime($str_finish) - strtotime($str_start);
    $days = floor($time/86400);
    echo "$days";
}
check();
echo "<hr />";
