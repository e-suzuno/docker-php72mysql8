<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>動作確認画面</title>
</head>
<body>

<?php

$db_name = "database";
$db_user = "database";
$db_pass = "database";


try {
    $pdo = new PDO('mysql:host=192.168.99.100;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
    print('<br>');
    if ($pdo == null) {
        print('PDO接続に失敗しました。<br>');
    } else {
        print('PDO接続に成功しました。<br>');
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    print('Error:' . $e->getMessage());
    die();
}


?>
<body>
</html>