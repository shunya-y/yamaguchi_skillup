<?php
//PHPの処理
//require_once __DIR__.'../Model/model.php';

?>
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>売上登録</title>
    <link rel="stylesheet" href="../View/style.css">
</head>
<body>
    <script type = "text/javascript" src="./js/script.js"></script>
    <main>
        <p>単票</p><br>
        <form>
            <div>
                <label>売上日</label><input name="date" type="date" class="text"></input>
                <label>伝票番号</label><input type="text" class="text" placeholder="登録時は未入力"></input>
                <button>詳細</button><br>
                <label>取引先名</label>
                <select class="select" name="client_code">
                    <?php foreach()?>
                </select><br>
                <label>納品日</label><input name="date" type="date" class="text"></input>
                <label>入金サイト</label><input type="text" class="text"></input><br>
                <label>取引区分</label>
                <select class="select" name="transaction_class">

                </select>
                <label>消費税率</label>
                <select class="select" name="consumption_tax_rate">

                </select><br>
                <label>商品名</label>
                <select class="select" name="product_name">

                </select><br>
                <label>数量</label><input type="text" class="text"></input>
                <label>単価</label><input type="text" class="text"></input>
                <label>金額</label><input type="text" class="text"></input><br>
                <label>消費税</label><input type="text" class="text"></input>
                <label>税込金額</label><input type="text" class="text"></input><br>
                <button>登録</button>
                <button>キャンセル</button>
            </div>
        </form>
    </main>
</body>
</html>