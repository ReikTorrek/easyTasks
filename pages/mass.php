<?php
require_once 'layout/header.html';
$colSumm = [];
//Заполняем массив
$array = [];
$array = setArray();
$array = setResultArray($array);

for ($i = 0; $i < count($array); $i ++) {
    for ($j = 0; $j < count($array[$i]); $j ++) {
        echo $array[$i][$j] . PHP_EOL;
        if (count($colSumm) < count($array[$i])) {
            $colSumm[] += array_sum(array_column($array, $j));
        }
    }
    echo ' || ' . array_sum($array[$i]);
    echo '<br>';
}
echo '//////////////////////////////////////////////////////////////<br>';
//Чтобы не делать множество проверок - вторым циклом выводим сумму по столбцам
foreach ($colSumm as $value) {
    echo $value . PHP_EOL;
}

function setArray() {
    $max_num = 1000;
    $num_count = 35;

    $array = [];

    while (count($array) < $num_count) {
        $r = rand(1, $max_num);
        $array[$r] = 1;
    }

    return array_keys($array);
}

function setResultArray($array) {
    $result = array();
    $counter = 0;
    foreach ($array as $value) {
        $result[$counter][] = $value;
        if (count($result[$counter]) == 7) {
            $counter ++;
        }
    }
    return $result;
}

require_once 'layout/footer.html';