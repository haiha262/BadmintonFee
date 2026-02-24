
<?php
// 1. Khai báo biến
$name = "Anh Em";
$hour = date("H"); // Lấy giờ hiện tại (định dạng 24h)

// 2. Logic kiểm tra điều kiện
if ($hour < 12) {
    $greeting = "Chào buổi sáng";
} elseif ($hour < 18) {
    $greeting = "Chào buổi chiều";
} else {
    $greeting = "Chào buổi tối";
}

// 3. Hiển thị kết quả ra trình duyệt
echo "<h1>$greeting, $name!</h1>";
echo "<p>Bây giờ là: " . date("H:i:s") . "</p>";
?>
