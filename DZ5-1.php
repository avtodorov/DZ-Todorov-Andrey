<?php

#1.Дан массив случайных целых чисел.
#Найдите количество максимумов и минимумов этого массива.

$array = [0, 12, 12, 90, 70, 90, 12, 0, 0, 6];

$max = $array[array_key_first($array)];
$min = $array[array_key_first($array)];

$list_length = count($array);
$qtt_max = 0;
$qtt_min = 0;

//ищем максимумы :
foreach ($array as $value) {

    if ($value >= $max) {
        $max = $value;
    }

}

//ищем минимумы :
foreach ($array as $value) {

    if ($value < $min) {
        $min = $value;
    }
}

foreach ($array as $value) {
    if ($value == $min){
        $qtt_min += 1;
    }elseif ($value == $max){
        $qtt_max += 1;
    }
}

var_dump($array);
echo "</br>";
echo "в этом списке: $qtt_max максимумов. значение: $max";
echo "</br>";
echo "в этом списке: $qtt_min минимумов. значение: $min";