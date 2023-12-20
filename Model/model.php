<?php
    $sql = "SELECT * FROM mst_code";
    try{
        // 接続情報
        $host = "192.168.11.203";//DBホスト
        $username = "root";//DB接続ユーザー
        $passwd = "OsqeW15P";//DB接続パスワード
        $dbname = "kenshu_sql";//DB名
        $port = "3306";//ポート名
        $option = "charset=utf8";
        $dsn = "mysql:host=localhost;dbname=" . $host . ";" . $option; #DSN データソースネームmysqlの場合
        $db = new PDO($dsn, $username, $passwd,//接続するにはまずインスタンスを作成
            [   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        echo "データベースの接続に成功しました。 \n";
        $stmt = $dbh->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "データベースの接続に失敗しました。 \n";
    }
?>