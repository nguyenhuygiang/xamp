<?php

    require_once("Rest_client/Topica_Rest_Client.php");
    class BaoKim{
    	function getMethodPayment(){
    		$config = array(
		        'server' => 'http://autosale.topicanative.edu.vn/api/',
		        'api_key' => 'SSeKfm7RXCJZxnFUleFsPf63o2ymZ93fWuCmvCjq',
		        'api_name' => 'key',
		        'http_user' => 'admin',
		        'http_pass' => 'admin',
		        'http_auth' => 'basic'
		    );
		    $restClient = new Topica_Rest_Client($config);
		    $uri = "BaoKim/getMethodPayment";
		    $result = $restClient->post($uri, $param);
		    return isset($result->data) ? $result->data : '';
    	}
	}
?>