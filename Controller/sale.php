<?php
    //PHPの処理
    require_once '../Model/model.php';
    /*
    //入金サイトの自動入力
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // 売上日または納品日の取得
        $salesDate = $_POST['sales_date']; // 売上日
        $deliveryDate = $_POST['delivery_date']; // 納品日
        // 入金サイトへのアクセス
        $url = 'https://example.com/payment'; // 入金サイトのURL
        // リクエストデータの作成（例: 売上日と納品日を送信）
        $postData = [
            'sales_date' => $salesDate,
            'delivery_date' => $deliveryDate,
        ];
        // cURLセッションの初期化
        $ch = curl_init($url);
        // cURLオプションの設定
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        // リクエストの実行
        $response = curl_exec($ch);
        // エラーハンドリング
        if ($response === false) {
            echo 'cURL error: ' . curl_error($ch);
        } else {
            // レスポンスの表示
            echo '入金サイトのレスポンス: ' . $response;
        }
        // cURLセッションの終了
        curl_close($ch);
    }
    // POSTリクエストから商品名を取得
    $productName = $_POST['product_name'];
    */
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>売上登録</title>
    <link rel="stylesheet" href="../View/style.css">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type = "text/javascript" src="./js/script.js"></script>
    <main>
        <p>単票</p><br>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div>
                <label>売上日</label><input name="sales_date" type="date" class="text"></input>
                <label>伝票番号</label><input type="text" class="text" placeholder="登録時は未入力"></input>
                <button>詳細</button><br>
                <label>取引先名</label>
                <select class="select" name="client_code">
                    <?php foreach(listMstClient() as $cd => $name) { ?>
                        <option <?php if ($cd === $frm['client_code']) { ?> selected
                        <?php } ?> value="<?= $cd ?>"> <?= $name ?> </option>
                    <?php } ?>
                </select><br>
                <label>納品日</label><input name="delivery_date" type="date" class="text"></input>
                <label>入金サイト</label>
                <input type="text" class="text" readonly>
                    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($response)) {echo $response;};?>
                </input><br>
                <label>取引区分</label>
                <select class="select" name="transaction_class">
                    <?php foreach(listMstClient() as $cd => $name) { ?>
                        <option <?php if ($cd === $frm['transaction_class']) { ?> selected
                        <?php } ?> value="<?= $cd ?>"> <?= $name ?> </option>
                    <?php } ?>
                </select>
                <label>消費税率</label>
                <select class="select" name="consumption_tax_rate">
                    <?php foreach(listMstClient() as $cd => $name) { ?>
                        <option <?php if ($cd === $frm['consumption_tax_rate']) { ?> selected
                        <?php } ?> value="<?= $cd ?>"> <?= $name ?> </option>
                    <?php } ?>
                </select><br>
                <label>商品名</label>
                <select class="select" name="product_name">
                    <?php foreach(listMstProduct() as $cd => $name) { ?>
                        <option <?php if ($cd === $frm['product_name']) { ?> selected
                        <?php } ?> value="<?= $cd ?>"> <?= $name ?> </option>
                    <?php } ?>
                </select><br>
                <label>数量</label><input type="text" class="text"></input>
                <label>単価</label><input type="text" class="text" name="unit_price" readonly></input>
                <label>金額</label><input type="text" class="text" readonly></input><br>
                <label>消費税</label><input type="text" class="text" readonly></input>
                <label>税込金額</label><input type="text" class="text" readonly></input><br>
                <button>登録</button>
                <button>キャンセル</button>
            </div>
        </form>
    </main>
</body>
</html>