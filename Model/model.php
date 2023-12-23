<?php
    // 接続情報
    function dbConnection($sql,){
        $host = "192.168.11.203";//DBホスト
        $username = "root";//DB接続ユーザー
        $passwd = "OsqeW15P";//DB接続パスワード
        $port = "3306";//ポート名
        $option = "charset=utf8";
        $dsn = "mysql:dbname=".$host.";host=".$host.":port=".$port.";".$option; #DSN データソースネームmysqlの場合
        try{
            $dbh = new PDO($dsn, $username, $passwd,//接続するにはまずインスタンスを作成
                [   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
            echo "データベースの接続に成功しました。 \n";
            $stmt = $dbh->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo "データベースの接続に失敗しました。 \n";
        }
    }
    function listMstClient(){
        $sql = "SELECT * FROM mst_client;";
        $stmt = $db->query($sql);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
    }
    function listMstProduct(){
        $sql = "SELECT * FROM mst_product;";
    }
?>