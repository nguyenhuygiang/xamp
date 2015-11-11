<?php

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
    $uri = "save_log_api/addlogs";
    $param = array(
        'id_camp_landingpage' => isset($_GET["id"]) ? $_GET["id"] : "-100",
        'domain' => "http://$_SERVER[HTTP_HOST]" . $_SERVER["REQUEST_URI"],
        'http_referer' => $_SERVER["HTTP_REFERER"],
        'preview' => isset($_GET["preview"]) ? $_GET["preview"] : "-100",
        'code_chanel' => isset($_GET["code_chanel"]) ? $_GET["code_chanel"] : "-100",
		'ip' => $_SERVER['REMOTE_ADDR'],
        'level' => 'A2'
    );
    session_start();
    if(isset($_SESSION["http_referer"]) && $_SESSION["http_referer"]['status']){
        $param['http_referer'] = $_SESSION["http_referer"]['ref'];
    }

    $result = $restClient->post($uri, $param);