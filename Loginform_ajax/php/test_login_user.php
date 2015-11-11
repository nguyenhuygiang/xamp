<?php

require_once 'dbcon.php';
session_start();
$uname = $_POST['username'];
$pword = $_POST['password'];

$sql = "select * from user where user ='" . $uname . "' and password='" . $pword . "'";

$query = $conn->query($sql);


if ($query->num_rows == 0) { // dang nhap that bai
    echo '<p class="result">Username hoặc password không đúng !</p>';
} else {
    $_SESSION['myname'] = $uname; // Lưu name vào session
    echo '<p class="result">Chúc mừng bạn <span style="color:blue">' . $_SESSION['myname'] . '</span> đã đăng nhập thành công <br><a href="./php/logout.php">Đăng xuất</a> !</p>';
}

