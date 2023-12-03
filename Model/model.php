<?php
    $host = "192.168.11.203";
    $username = "root";
    $passwd = "";
    $dbname = "kenshu_sql";
    $port = "3306";
    $socket = "";
    // データベースへ接続
    $db = mysqli_connect($host, $username, $passwd, $dbname);
    // 接続チェック
    if (!$db) {
        die('データベースの接続に失敗しました。');
    }
    echo "データベースの接続に成功しました！ \n";
    // データベースの接続を閉じる
    mysqli_close($db);
?>