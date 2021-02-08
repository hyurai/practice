<?php

$word = $_GET['word'];
echo $word;

?>
<!DOCTYPE html>
<html lang = 'ja'>
<head>
<meta charset = “UFT-8”>
<title>
    フォームからデータを受け取る
</title>
</head>
<body>
    <h1>フォームからのデータ送信</h1>
    <form action="getpost.php" method = "get">
    <input type="text" name = "word">
    <input type="submit" value = "SEND">
    </form>
</body>
<html>