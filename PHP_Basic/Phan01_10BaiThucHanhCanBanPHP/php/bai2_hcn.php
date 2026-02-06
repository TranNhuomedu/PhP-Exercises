<?php
$dai = $_POST['txt_dai'] ?? '';
$rong = $_POST['txt_rong'] ?? '';
$dien_tich = '';

if (is_numeric($dai) && is_numeric($rong)) {
    $dien_tich = $dai * $rong;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 2 - Tính diện tích hình chữ nhật</title>
    <link rel="stylesheet" href="../css/bai2_hcn.css">
</head>
<body>

<div class="container">
    <h2>DIỆN TÍCH HÌNH CHỮ NHẬT</h2>

    <form action="../php/bai2_hcn.php" method="post">
        <div class="row">
            <label>Chiều dài:</label>
            <input type="text" name="txt_dai" value="<?php echo $dai; ?>">
        </div>

        <div class="row">
            <label>Chiều rộng:</label>
            <input type="text" name="txt_rong" value="<?php echo $rong; ?>">
        </div>

        <div class="row">
            <label>Diện tích:</label>
            <input type="text" value="<?php echo $dien_tich; ?>" readonly>
        </div>

        <button type="submit" name="btn_tinh">Tính</button>
    </form>
</div>

</body>
</html>
