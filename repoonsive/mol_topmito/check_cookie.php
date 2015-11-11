<?php
$data = $_POST['data'];
$time = $_POST['time'];

if (!isset($_COOKIE["submit"])) {
    setcookie("submit", $data, time() + ($time * 60), "/");
    $result['status'] = 1;
} else {
    $result['status'] = 0;
    $result['msg'] = 'Bạn vừa thực hiện đăng ký. Vui lòng đăng ký lại sau ' . $time . ' phút nữa. Xin cảm ơn!';
}
echo json_encode($result);