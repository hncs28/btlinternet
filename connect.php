<?php
$servername = "localhost"; // Tên máy chủ cơ sở dữ liệu
$username = "root@localhost"; // Tên người dùng MySQL
$password = ""; // Mật khẩu MySQL
$dbname = "loginweb"; // Tên cơ sở dữ liệu

// Tạo kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}
?>
