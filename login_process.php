<?php
session_start();
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

// Lấy thông tin đăng nhập từ biểu mẫu
$user = $_POST['username'];
$pass = $_POST['password'];

// Kiểm tra thông tin đăng nhập
$sql = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Đăng nhập thành công, chuyển hướng đến index.html
    header("Location: index.html");
} else {
    // Đăng nhập không thành công, hiển thị thông báo lỗi
    echo "Sai tên người dùng hoặc mật khẩu.";
}

// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>
