<?php
//get data
$ref = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';
$domain = isset($_SERVER[HTTP_HOST]) ? "http://$_SERVER[HTTP_HOST]" . $_SERVER["REQUEST_URI"] : '';
$id = isset($_GET["id"]) ? $_GET["id"] : "-100";
$preview = isset($_GET["preview"]) ? $_GET["preview"] : "-100";
$code_chanel = isset($_GET["code_chanel"]) ? $_GET["code_chanel"] : "-100";

$active_menu = str_replace('/', '', $_SERVER["REQUEST_URI"]);
$active_menu = str_replace('.php', '', $active_menu);
// require_once './mol_topmito/save_c2.php';

// $rand_site_number = rand(1, 2);
// if ($rand_site_number === 1) {
   $rand_img = './img/exit_page_v2.png';
   $rand_site = 'http://kyna.vn/nhom-khoa-hoc/bo-5-ky-nang-giao-tiep-cho-nguoi-di-lam/105008?utm_source=native_kyna&utm_medium=exit_page&utm_campaign=landing_page_1';
   $rand_string = 'Khám phá ngay BỘ 5 KỸ NĂNG GIAO TIẾP giúp bạn tự tin tỏa sáng của Kyna.vn. HÃY Ở LẠI để khám khá và nhận tư vấn miễn phí!';
// } else {
//     $rand_img = './img/MM0033.png';
//     $rand_site = 'http://memo.edu.vn/?code_chanel=CS0004&id_landingpage=2&id_campaign=1&id=25';
//     $rand_string = 'Đừng bỏ lỡ cơ hội để trở thành CHUYÊN GIA NGOẠI NGỮ một cách HOÀN TOÀN MIỄN PHÍ, click ở lại trang này để KHÁM PHÁ NGAY!';
// }
?>

<meta charset="utf-8"/>
<title>Hoc tieng anh, Học tiếng anh, Tiếng anh giao tiếp online - Topica Native</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Hoc tieng anh online - Lớp học tiếng anh online, tieng anh giao tiep, tu hoc tieng anh, học tiếng anh giao tiếp, học tiếng anh, tiếng anh cho người đi làm">
<meta name="keywords" content="hoc tieng anh, học tiếng anh, tu hoc tieng anh, hoc tieng anh online, tieng anh online, hoc tieng anh truc tuyen, tieng anh giao tiep, hoc tieng anh giao tiep, luyen nghe tieng anh, tieng anh nguoi di lam">

<meta name="author" content="TOPICA NATIVE">

<link type="image/x-icon" href="./img/favicon.png" rel="shortcut icon">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./css/style.css">

<script src="./mol_topmito/js/jquery.min.js" type="text/javascript"></script>
<script src="./mol_topmito/js/jquery.form.js" type="text/javascript"></script>
<script src="./js/bootstrap.min.js" type="text/javascript"></script>
<script src="./js/main.js" type="text/javascript"></script>

<!--Slide-->
<link href="slider/owl.carousel.css" rel="stylesheet" type="text/css"/>
<link href="slider/owl.theme.css" rel="stylesheet" type="text/css"/>
<script src="slider/owl.carousel.js" type="text/javascript"></script>
<style>
    .owl-controls{
        position: absolute;
        bottom: 20px;
        left: 47%;
        background-color: #fff;
        padding: 5px 10px;
        border-radius: 10px;
    }
    #bar{
        /*                width: 0%;
                        max-width: 100%;*/
        height: 4px;
        background: #7fc242;
    }
    #progressBar {
        /* width: 100%; */
        background: #EDEDED;
    }
</style>
<!--end slide-->