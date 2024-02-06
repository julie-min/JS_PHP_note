<?php
//$txt = "PHP";
////echo "Hello World {$txt}";
////echo 'Hello World'.$txt.'HaHa';
//
//$num = 5; // 전역변수
function myFunc() {
    $num = 5;
    echo "<p>지역변수입니다 {$num}</p>";
    $num++;
}

function myFunc2() {
    static $x = 0;
    echo "<p>x의 값은 {$x}</p>";
    $x++;
}

myFunc();
myFunc();
myFunc2();
myFunc2();


define('MYCONST','상수입니다');
echo MYCONST;