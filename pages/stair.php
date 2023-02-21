<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Лесенка</title>
</head>
<body>
<a href="../index.html">На главную</a> <br>
<?php
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
?>
</body>
</html>
