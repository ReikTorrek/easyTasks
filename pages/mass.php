<?php
require_once 'layout/header.html';
/*
 * После замера времени выполнения и 10 прогонов:
 * 1. На маленьких размерах массивов скорость выполнения одинаковая.
 * 2. На массивах размером в 1000000 элементов и без обрезки скорость этого варианта выше ~в 3 раза.
 * 3. Если обрезать массивы, то первый вариант всё равно оптимальнее, так как проходит всего 35 итераций,
 * в то время как этот проходит в любом случае END итераций.
 */
const START = 1;
const END = 1000;
const ROW_LENGTH = 7;
const ARRAY_LENGTH = 5;
$colSum = [];
$array = range(START, END); //Заполняем массив
shuffle($array); //Перемешиваем
$array = array_chunk($array, ROW_LENGTH); //Делаем многомерным
$array = array_slice($array, 0, ARRAY_LENGTH); // Обрезаем лишнее
//В теории, у меня была мысль, что можно сделать это через
// foreach($array as $arrayKey => $arrayValue) {foreach($value as $key => $value){...}}
//Но думаю, что раз массив не ассоциативный, это излишне.
for ($i = 0; $i < ARRAY_LENGTH; $i ++) {
    for ($j = 0; $j < ROW_LENGTH; $j ++) {
        echo $array[$i][$j] . PHP_EOL;
        if (count($colSum) < ROW_LENGTH) {
            $colSum[] += array_sum(array_column($array, $j));
        }
    }
    echo ' || ' . array_sum($array[$i]);
    echo '<br>';
}
echo '//////////////////////////////////////////////////////////////<br>';
//Чтобы не делать множество проверок - вторым циклом выводим сумму по столбцам
foreach ($colSum as $value) {
    echo $value . PHP_EOL;
}

require_once 'layout/footer.html';