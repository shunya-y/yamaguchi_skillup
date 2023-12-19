<?php
    // 接続情報
    $host = "192.168.11.203";//DBホスト
    $username = "root";//DB接続ユーザー
    $passwd = "";//DB接続パスワード
    $dbname = "kenshu_sql";//DB名
    $port = "3306";//ポート名
    $socket = "";//ソケット名
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