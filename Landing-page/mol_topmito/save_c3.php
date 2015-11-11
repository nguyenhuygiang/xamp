<?php

$data = $_POST;
$data['phone'] = $_POST['phone'];

if ($data && $data['phone'] > 0) {

    if (!$_FILES['cv']['name'] && !$data['link_cv']) { //Nếu bắt buộc upload file CV thì bỏ comment đi
        // $response = array(
        //     'status' => FALSE,
        //     'msg' => 'Bạn phải điền link cv hoặc Upload cv mới',
        // );
        // echo json_encode($response);
        // exit();
    }

    if ($_FILES['cv']['name'] != NULL) { // Đã chọn file
        $data['link_cv'] = '';
        $path = "../data_cv/"; // file sẽ lưu vào thư mục data_cv
        $tmp_name = $_FILES['cv']['tmp_name'];

        $accept_file = explode('.', $_FILES['cv']['name']);
        $name = time() . '_' . $data['phone'] . '.' . $accept_file[count($accept_file) - 1];
        // Upload file
        $a = move_uploaded_file($tmp_name, $path . $name);
        $data['link_cv'] = "http://$_SERVER[HTTP_HOST]" . '/data_cv/' . $name;
    }

    require_once("Rest_client/Topica_Rest_Client.php");

    $config = array(
        'server' => 'http://molthai.topicanative.asia/',
        'api_key' => 'SSeKfm7RXCJZxnFUleFsPf63o2ymZ93fWuCmvCjq',
        'api_name' => 'key',
        'http_user' => 'admin',
        'http_pass' => 'admin',
        'http_auth' => 'basic'
    );
    $restClient = new Topica_Rest_Client($config);
    $uri = "contact_collection_api/add_contact";
    $param = array(
        'name' => $data['name'],
        'phone' => $data['phone'],
        'email' => $data['email'],
        'country' => isset($data['country']) ? $data['country'] : '',
        'sector' => isset($data['sector']) ? $data['sector'] : '',
        'graduation' => isset($data['graduation']) ? $data['graduation'] : '',
        'id_camp_landingpage' => isset($data["id_camp_landingpage"]) ? $data["id_camp_landingpage"] : "-100",
        'domain' => isset($data["domain"]) ? $data["domain"] : "",
        'code_chanel' => isset($data["code_chanel"]) ? $data["code_chanel"] : "-100",
        'ip' => $_SERVER['REMOTE_ADDR'],
        'http_referer' => isset($data['http_referer']) ? $data['http_referer'] : '',
        'link_cv' => isset($data['link_cv']) ? $data['link_cv'] : '',
    );
    $result = $restClient->post($uri, $param);

    echo json_encode($result);
} else {
    $response = array(
        'status' => FALSE,
        'msg' => 'การลงทะเบียนของคุณมีบางอย่างผิดพลาด โปรดลงทะเบียนอีกครั้ง!',
    );
    echo json_encode($response);
}
?>