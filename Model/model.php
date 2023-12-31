<?php
    //DB接続情報
    function connectDB() {
        $servername = "192.168.11.203";//DBホスト
        $username = "root";//DB接続ユーザー
        $password = "OsqeW15P";//DB接続パスワード
        $dbname = "kenshu_yamaguchi";//DB名
        try {
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                throw new Exception("Connection failed: " . $conn->connect_error);
            }
            return $conn;
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }
    //mst_client
    function listMstClient(){
        $conn = connectDB();
        $sql = "SELECT * FROM mst_client;";
        $result = $conn->query($sql);
        $options = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $options[] = $row;
        }
            }
        $conn->close();
        return $options;
    }
    //mst_product
    function listMstProduct(){
        $conn = connectDB();
        $sql = "SELECT * FROM mst_product;";
        $result = $conn->query($sql);
        $options = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $options[] = $row;
            }
        }
        $conn->close();
        return $options;
    }
    //入金サイト
    function unitPrice(){
        $conn = connectDB();
        $sql = "SELECT * FROM mst_product WHERE product_name = ?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $productName);
        $stmt->execute();
        $stmt->bind_result($unitPrice);
        // 結果を取得してJSON形式で返す
        if ($stmt->fetch()) {
            echo json_encode($unitPrice);
        } else {
            echo json_encode(null);
        }
        $conn->close();
        return $unitPrice;
    }
?>