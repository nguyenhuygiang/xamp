<?php

session_start();
$data = $_POST;
$data['phone'] = $_POST['phone'];

if ($data && $data['phone'] > 0) {

    require_once("Rest_client/Topica_Rest_Client.php");

    $config = array(
        'server' => 'http://manager.autosale.topicanative.edu.vn/api/',
        'api_key' => 'SSeKfm7RXCJZxnFUleFsPf63o2ymZ93fWuCmvCjq',
        'api_name' => 'key',
        'http_user' => 'admin',
        'http_pass' => 'admin',
        'http_auth' => 'basic'
    );
    $restClient = new Topica_Rest_Client($config);
    $uri = "contact_api/addcontact";
    $param = array(
        'id' => (isset($data['id']) && isset($_SESSION['id']) && $data['id'] == $_SESSION['id']) ? $data['id'] : '',
        'name' => $data['name'],
        'phone' => $data['phone'],
        'email' => $data['email'],
        'level' => isset($data['level']) ? $data['level'] : '',
        'age' => isset($data['age']) ? $data['age'] : '',
        'date' => isset($data['date']) ? $data['date'] : '',
        'time' => isset($data['time']) ? $data['time'] : '',
        'purpose' => isset($data['purpose']) ? $data['purpose'] : '',
        'id_camp_landingpage' => isset($data["id_camp_landingpage"]) ? $data["id_camp_landingpage"] : "-100",
        'domain' => isset($data["domain"]) ? $data["domain"] : "",
        'code_chanel' => isset($data["code_chanel"]) ? $data["code_chanel"] : "-100",
        'ip' => $_SERVER['REMOTE_ADDR'],
        'http_referer' => isset($data['http_referer']) ? $data['http_referer'] : '',
    );
    session_start();
    if(isset($_SESSION["http_referer"]) && $_SESSION["http_referer"]['status']){
        $param['http_referer'] = $_SESSION["http_referer"]['ref'];
    }
    
    $result = $restClient->post($uri, $param);
    // $result = $restClient->debug($uri, $param);
    $_SESSION['id'] = $result->id;
    // $result = $restClient->debug($uri, $param);
    // echo "<pre>";
    // var_dump($result);exit;
    echo json_encode($result);
} else {
    $response = array(
        'status' => FALSE,
        'msg' => 'Dữ liệu gửi lên không hợp lệ. Xin vui lòng thao tác lại',
    );
    echo json_encode($response);
}
?>