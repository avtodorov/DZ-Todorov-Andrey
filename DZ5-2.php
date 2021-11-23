<?php
//Дан массив случайных целых чисел.
// Определите, есть ли в массиве повторяющиеся элементы.

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$next = 0;
$length = count($array);
$indicator = 0;

for ($i = 0; $i < $length; $i += 1){
    $element = $array[$i];
    foreach ($array as $item){
        if ($item == $element){
            $indicator += 1;
        }
    }
}
$indicator -= $length;

if ($indicator > 1){
    echo "В массиве есть повторяющиеся элементы";
}else{
    echo "В массиве повторяющиеся элементы не обнаружены";
}


