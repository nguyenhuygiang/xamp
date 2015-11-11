<?php
	$data = $_POST;
	if ($data && is_numeric($data['phone'])) {
		require_once("Rest_client/Topica_Rest_Client.php");
		
		if ($_FILES['cv']['name'] != NULL) { // Đã chọn file
			$path = "../data_cv_teacher/"; // file sẽ lưu vào thư mục data
			$tmp_name = $_FILES['cv']['tmp_name'];
			$name = time().'_'.$_FILES['cv']['name'];
			// Upload file
			move_uploaded_file($tmp_name, $path  .$name);
			$data['link_cv'] = $_SERVER[HTTP_HOST].'/data_cv_teacher/'.$name;
	   } 
	   // else {
		  //  $response = array(
			 //  'status' => FALSE,
			 //   'msg' => 'File upload failed',
		  //  );
		  //  echo json_encode($response);
	   // }

		$config = array(
			'server' => 'http://mol.native.edu.vn/',
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
			'msg' => 'Dữ liệu gửi lên không hợp lệ. Xin vui lòng thao tác lại',
		);
		echo json_encode($response);
	}

	//$result = $restClient->debug($uri, $param);
	//echo '<meta content="text/html; charset=utf-8" http-equiv="Content-Type">';
	//echo "<pre>";
	// print_r($result);
    
?>