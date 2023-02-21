<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/mass.css">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Массивы</title>
</head>
<body>
<a href="../index.html">На главную</a>
<?php
$array = [];
$colSumm = [];
//Заполняем массив
for ($i = 0; $i < 5; $i ++) {
    for ($j = 0; $j < 7; $j ++) {
        $array[$i][$j] = rand(1, 1000);
    }
}
?>
<table class="matrix">
    <tbody>
<?php
//Начинаем вывод матрицы и суммы по строкам
for ($i = 0; $i < count($array); $i ++) {
?>
<tr>
<?php
    for ($j = 0; $j < count($array[$i]); $j ++) {
        echo '<td>' . $array[$i][$j] . '</td>';
        if (count($colSumm) < count($array[$i])) {
            $colSumm[] += array_sum(array_column($array, $j));
        }
    }
    echo '<td> Сумма строки: ' . array_sum($array[$i]) . '</td>';
?>
    </tr>
<?php
}
?>
    </tbody>
</table>
<?php
//Чтобы не делать множество проверок - вторым циклом выводим сумму по столбцам
foreach ($colSumm as $value) {
    echo '<span class="rotated"> Сумма столбца: ' . $value . '</span>';
}
?>
</body>
</html>
