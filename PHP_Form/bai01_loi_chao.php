/ sử dụng vòng lặp for - vẽ hình chữ nhật trong PHP, 
// mỗi dấu * là một đơn vị
<?php
for($i = 0; $i < 10; $i ++) {
    echo "<br>";
    for($j = 0; $j < 20; $j ++) {
        echo "*";
    }
}
?>