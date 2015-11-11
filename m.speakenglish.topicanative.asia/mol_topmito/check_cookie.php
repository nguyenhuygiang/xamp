<?php
$data = $_POST['data'];
$time = $_POST['time'];

if (!isset($_COOKIE["submit"])) {
    setcookie("submit", $data, time() + ($time * 60), "/");
    $result['status'] = 1;
} else {
    $result['status'] = 0;
    $result['msg'] = 'คุณเพิ่งทำการละเทียนไปเมื่อสักครู่ โปรดลองใหม่อีกครั้งหลัง ' . $time . ' นาที ขอบคุณค่ะ!';
}
echo json_encode($result);