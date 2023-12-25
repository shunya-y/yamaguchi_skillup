$(document).ready(function () {
    // プルダウンが変更されたときの処理
    $("#productSelect").change(function () {
        var selectedProduct = $(this).val();
        // 選択された商品名をPHPに送信して単価を取得
        $.post("sale.php", { product: selectedProduct }, function (data) {
            $("#unitPrice").val(data);
        });
    });
});