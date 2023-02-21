<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>front</title>
    <script
        src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
</head>
<body>
<h1>8-800-<?=@$_GET['num'] ?: 'DIGITS' ?></h1>
<a href="../index.html">На главную</a>
<?php
echo '<p> Тут какие - нить ещё штуки на странице. </p>';
?>
<h1>8-800-<?=@$_GET['num'] ?: 'DIGITS' ?></h1>
</body>
</html>