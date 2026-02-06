<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 1: In Lời Chào</title>
    <link rel="stylesheet" href="../css/bai_1.css">
</head>
<body>

<?php
    // Nhận dữ liệu trả về từ PHP xử lý
    $ten_hien_thi = $_GET['ten'] ?? '';
    $loi_chao = $_GET['chao'] ?? '';
?>

<div class="form-container">
    <div class="form-header">IN LỜI CHÀO</div>

    <form action="../php/bai1_chao.php" method="post">
        <div class="form-body">

            <div class="input-group">
                <label>Họ tên của bạn</label>
                <input type="text" name="txt_ten" value="<?php echo htmlspecialchars($ten_hien_thi); ?>">
            </div>

            <div class="result-label">
                <?php echo htmlspecialchars($loi_chao); ?>
            </div>

            <button type="submit" name="btn_chao" class="btn-submit">Chào</button>
        </div>
    </form>
</div>

</body>
</html>
