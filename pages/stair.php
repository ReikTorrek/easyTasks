<?php
require_once 'layout/header.html';
$resultArray = [];
$result = '';
$counter = 0;
//Создаём массив от 1 до 100
for ($i = 1; $i <= 100; $i ++) {
    array_push($resultArray, $i);
}
//Начинаем пробегаться по массиву
for ($i = 0; $i < count($resultArray); $i ++) {
    //Тут нам надо, чтобы в строке было только нужное кол - вот значений.
    for($j = $i; $j >= 0; $j --) {
        $result .= $resultArray[$counter++] . PHP_EOL;
        if ($counter == 100) {
            break 2;
        }
    }
    $result .= '<br>';
}
echo $result;
require_once 'layout/footer.html';
?>