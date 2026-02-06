<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 1 - Nhập và tính trên dãy số</title>
    <link rel="stylesheet" href="../css/bai1_dayso.css">
</head>
<body>

<?php
// Nhận dữ liệu trả về từ trang xử lý (GET)
$dayso = $_GET['dayso'] ?? '';
$tong  = $_GET['tong'] ?? '';
$thongbao = $_GET['msg'] ?? '';
?>

<div class="box">
    <div class="header">NHẬP VÀ TÍNH TRÊN DÃY SỐ</div>

    <div class="content">
        <form action="../php/bai1_dayso_xuly.php" method="post">
            <div class="row">
                <label>Nhập dãy số:</label>
                <input type="text" name="txt_dayso"
                       placeholder="Ví dụ: 1,2,3,4,5"
                       value="<?php echo htmlspecialchars($dayso); ?>">
            </div>

            <div class="row">
                <label>Tổng dãy số:</label>
                <input type="text" name="txt_tong"
                       value="<?php echo htmlspecialchars($tong); ?>">
            </div>

            <div class="actions">
                <button type="submit" name="btn_tinh">Tổng dãy số</button>
            </div>

            <div class="note">
                <?php echo htmlspecialchars($thongbao); ?>
            </div>

            <div class="note" style="color:#333;">
                (*) Các số được nhập cách nhau bằng dấu ","
            </div>
        </form>
    </div>
</div>

</body>
</html>
