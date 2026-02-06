<?php
if (!isset($_POST['btn_tinh'])) {
    header("Location: ../html/bai1_dayso_form.php");
    exit;
}

$dayso_raw = $_POST['txt_dayso'] ?? '';
$dayso_raw = trim($dayso_raw);

$msg = "";
$tong = "";

if ($dayso_raw === "") {
    $msg = "Bạn chưa nhập dãy số!";
} else {
    // Tách theo dấu phẩy
    $parts = explode(",", $dayso_raw);

    // Làm sạch: trim từng phần, bỏ phần rỗng
    $nums = [];
    foreach ($parts as $p) {
        $p = trim($p);
        if ($p === "") continue;

        // kiểm tra có phải số không (chấp nhận số âm, số thập phân)
        if (!is_numeric($p)) {
            $msg = "Dãy có phần tử không phải số: \"$p\"";
            $nums = [];
            break;
        }
        $nums[] = (float)$p;
    }

    if ($msg === "" && count($nums) === 0) {
        $msg = "Dãy số không hợp lệ (toàn dấu phẩy hoặc rỗng).";
    }

    // Tính tổng bằng vòng lặp FOR (đúng mục tiêu bài)
    if ($msg === "") {
        $sum = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $sum += $nums[$i];
        }

        // Nếu tổng là số nguyên thì hiển thị đẹp
        $tong = (floor($sum) == $sum) ? (string)(int)$sum : (string)$sum;
    }
}

// Trả về form kèm dữ liệu
header("Location: ../html/bai1_dayso_form.php?dayso=" . urlencode($dayso_raw) .
       "&tong=" . urlencode($tong) .
       "&msg=" . urlencode($msg));
exit;
