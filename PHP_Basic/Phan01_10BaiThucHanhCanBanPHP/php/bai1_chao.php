<?php
if (isset($_POST['btn_chao'])) {
    $ten = trim($_POST['txt_ten']);

    if ($ten == "") {
        $loi_chao = "Bạn chưa nhập tên!";
    } else {
        $loi_chao = "Xin chào $ten!";
    }

    // Quay lại form và truyền dữ liệu
    header("Location: ../html/bai1_form.php?ten=" . urlencode($ten) . "&chao=" . urlencode($loi_chao));
    exit;
}
