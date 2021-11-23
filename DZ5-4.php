<?php
//Напишите программу, которая преобразует формат номера телефона из
// 0661002030 в +38 (066) 100-20-30.

$phone_number = '0661002030';

$country_code = '+38';
$symbols = mb_str_split(trim($phone_number));

$correct_number[] = $country_code;

$correct_number[] = ' (';
for ($i=0; $i < 3; ++$i){
    $correct_number[] = $symbols[$i];
}
$correct_number[] = ') ';

for ($i=3; $i < 6; ++$i) {
    $correct_number[] = $symbols[$i];
}
$correct_number[] = '-';

for ($i=6; $i < 8; ++$i){
    $correct_number[] = $symbols[$i];
}
$correct_number[] = '-';


for ($i=8; $i < 10; ++$i){
    $correct_number[] = $symbols[$i];
}

//var_dump($correct_number);
echo implode($correct_number);
