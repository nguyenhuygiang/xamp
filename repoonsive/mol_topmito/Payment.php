<?php

$data = $_POST;
$data['phone'] = $_POST['phone'];
if (count($data) && isset($data['phone']) && isset($data['name']) && isset($data['email'])) {
    require_once("Rest_client/Topica_Rest_Client.php");

    $config = array(
        'server' => 'http://autosale.topicanative.edu.vn/api/',
        'api_key' => 'SSeKfm7RXCJZxnFUleFsPf63o2ymZ93fWuCmvCjq',
        'api_name' => 'key',
        'http_user' => 'admin',
        'http_pass' => 'admin',
        'http_auth' => 'basic'
    );
    $restClient = new Topica_Rest_Client($config);
    $uri = "BaoKim/Payment";
    $data['payer_name'] = $data['name'];
    $data['payer_phone_no'] = $data['phone'];
    $data['payer_email'] = $data['email'];
    $data['payer_name'] = $data['name'];
    $data['address'] = 'Viet Nam';
    $data['total_amount'] = '50.000';
    $param = $data;
    $result = $restClient->post($uri, $param);
    echo isset($result->data) ? $result->data : '';
} else {
    $response = array(
        'status' => FALSE,
        'msg' => 'Dữ liệu gửi lên không hợp lệ. Xin vui lòng thao tác lại',
    );
    echo $result->data;
}
?>