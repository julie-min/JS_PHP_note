<?php
$example_variable = "안녕하세요!";
var_dump($example_variable);

// string(16) "안녕하세요!"

echo "<br>";

$num = 1;
echo $num = 1 ? "맞습니다" : "아닙니다";

echo "<br>";

$str1 = "String1";
$str2 = "String2";
$str3 = null;

$result1 = $str1 ?? $str2;
echo $result1;

$result2 = $str3 ?? $str2;
echo $result2;

$result3 = $str2 ?? $str3;
echo $result3;