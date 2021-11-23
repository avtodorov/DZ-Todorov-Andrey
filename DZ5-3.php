<?php
//Дано 6-значное число.
//Определите, является ли оно счастливым.
//Счастливо число -- это такое число,
// у которого сумма первых трех его цифр равна сумме последний трех цифр.

$number = 123421;

$left = intdiv($number, 1000);
$left_sum = array_sum(str_split($left));

$right = $number % 1000;
$right_sum = array_sum(str_split($right));

if ($left_sum == $right_sum){
    echo "число: $number - счастливое";
}else{
    echo "число: $number - обычное";
}