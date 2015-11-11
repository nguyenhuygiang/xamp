<?php
//get data

$ref = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';
$domain = isset($_SERVER[HTTP_HOST]) ? "http://$_SERVER[HTTP_HOST]" . $_SERVER["REQUEST_URI"] : '';
$id = isset($_GET["id"]) ? $_GET["id"] : "-100";
$preview = isset($_GET["preview"]) ? $_GET["preview"] : "-100";
$code_chanel = isset($_GET["code_chanel"]) ? $_GET["code_chanel"] : "-100";

// Include and instantiate the class.
// require_once './mol_topmito/Mobile_Detect/Mobile_Detect.php';
// $detect = new Mobile_Detect;
// Any mobile device (phones or tablets) or Any tablet device.
// $url = 'http://m3.tienganhtructuyen.topmito.edu.vn/?code_chanel=' . $code_chanel . '&id=' . $id;
// if ($detect->isMobile() || $detect->isTablet()) {
//     header('Location: ' . $url . '');
//     exit;
// } else {

require_once './mol_topmito/save_c2.php';
// }
//$alphabet = "12";
//$rand_site_number = array(); 
//$alphaLength = strlen($alphabet) - 1; 
//for ($i = 0; $i < 1; $i++) {
//$n = rand(0, $alphaLength);
//$rand_site_number[] = $alphabet[$n];
//}
//$rand_site_number =  implode($rand_site_number); 
//if($rand_site_number == 1){
// $rand_img = './img/MM0011.png';
// $rand_site = 'http://memo.edu.vn/?code_chanel=CS0007&id_landingpage=2&id_campaign=1&id=33';
// $rand_string = 'Đừng bỏ lỡ - Ứng dụng học Tiếng Anh MIỄN PHÍ cho người đi làm? Hãy click "Ở lại trang này" để khám phá!';
// $rand_img = './img/Banner_uni.jpg'; 
// $rand_site = 'http://lphou.topica.edu.vn/tech-lightbox/?code=CS.NATIVE.LPHOU.221214';
// $rand_string = 'Chương trình Cử nhân trực tuyến Chất lượng cao TOPICA"? Hãy click "Ở lại trang này" để tìm hiểu thêm.';
//}else{
//$rand_img = './img/popup-casec.jpg';
//$rand_site = 'http://casec.edu.vn/ca-nhan-dang-ky/crosstopmito';
//$rand_string = 'Kiểm tra trình độ tiếng Anh, chấm điểm theo khung quốc tế CASEC, quy đổi được sang TOEIC. Click "Ở lại trang này" để đăng ký để kiểm tra MIỄN PHÍ!';
//}
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>วิธีใหม่สำหรับการเรียนภาษาอังกฤษ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Lớp học tiếng anh online, tiếng anh trực tuyến cho người đi làm. Tự học tiêng anh trực tuyến với giáo viên bản ngữ cho người đi làm." />
        <meta name="keywords" content="Học tiếng anh online, hoc tieng anh online, hoc tieng anh truc tuyen, học tiếng anh trực tuyến, tiếng anh cho người đi làm, tieng ah cho nguoi di lam, tieng anh truc tuyen, tiếng anh trực tuyến, lop hoc tieng anh online, lớp học tiêng anh online, lớp học tiếng anh trực tuyến, lop hoc tieng anh truc tuyen, tieng anh online, tiếng anh online, hoc giao tiep tieng anh hieu qua, tu hoc tieng anh, tự học tiếng anh hiệu quả ">

        <meta name="author" content="TOPICA NATIVE (TOPMITO)">

        <link type="image/x-icon" href="./img/favicon.png" rel="shortcut icon">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="./css/style.css">

        <script src="./mol_topmito/js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./mol_topmito/js/jquery.form.js" type="text/javascript"></script>
        <script src="./mol_topmito/js/save_contact.js" type="text/javascript"></script>
        <script src="./js/main.js" type="text/javascript"></script>
    </head>
    <body class="container-fluid">
        <button id="gnh_button">
            <a href="#form-dang-ky" style="text-decoration:none;color:#fff">
                <i class="fa fa-user"></i>
                &nbsp;&nbsp;&nbsp;ลงทะเบียน
            </a>
        </button>

        <nav class="row">

            <div class="col-xs-8 col-xs-offset-2 text-center">
                <img src="img/LOGO.png" alt="" class="full-width" />
            </div>
        </nav>

        <div class="mr-top-0" id="">
            <h1 class="color-red bold text-center size-super-lg" style="margin-bottom:0px">วิธีใหม่</h1>
            <h2 class="color-red text-center size-normal mr-top-0">สำหรับการเรียนภาษาอังกฤษ</h2>
        </div>

        <div class="row mr-top-0" id="sa">
            <div class="col-xs-9 " style="padding-left: 0; padding-top: 0;">
                <img src="img/anh.png" class="with-img"/>
            </div>
            <div class="col-xs-9 col-xs-offset-3" style="padding-right:0;">
                <img src="img/ADVISOR.png" class="with-img"/>
            </div>
            <div class="col-xs-9" style="padding-left: 0;">
                <img src="img/CASEC.png" class="with-img"/>
            </div>
            <div class="col-xs-9 col-xs-offset-3" style="padding-right:0;">
                <img src="img/16.png" class="with-img"/>
            </div>
        </div>

        <div id="form-dang-ky" class="mr-top-30 border-bottom-red row">
            <div class="col-xs-12">
                <p class="color-red bold text-center size-lg mr-0">ลงทะเบียน</p>
                <p class="color-red text-center">*ลงทะเบียนเพื่อรับคำแนะนำ</p>
                <form class="form-horizontal e_submit e_form_submit" method="post" action="./mol_topmito/save_c3.php">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input autocomplete="off" type="text" name="name" class="form-control radius-0 border-red color-red" placeholder="ชื่อ">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input autocomplete="off" type="email" name="email" class="form-control radius-0 border-red" placeholder="อีเมลล์">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">          
                            <input autocomplete="off" type="text" name="phone" class="form-control radius-0 border-red" placeholder="โทรศัพท์">
                        </div>
                    </div>
                    <div class="form-group" >

                        <div class="col-xs-12">
                            <div class="dropdown drop-btn" style="outline: none;" name="age">
                                <button class="btn  dropdown-toggle" id="chosen-text"type="button" data-toggle="dropdown" style="width: 100%;
                                        padding: 4px 12px;
                                        text-align: left;
                                        font-style: italic;
                                        color: #810c15;              
                                        outline: none;
                                        background-color: #fff;
                                        border: 1px solid #810c15;
                                        border-radius: 0;">
                                    <p style="font-weight: 400;
                                       color: #810c15;
                                       font-weight: 400;
                                       margin-bottom: 0;
                                       font-size: 14px;
                                       ">กรุณาเลือกอายุของคุณ</p>
                                    <span >
                                        <i class="fa fa-angle-down" style="position: absolute;
                                           //background-color: #810c15;
                                           padding: 3px 10px;
                                           right: 0px;
                                           top: -1px;
                                           color: #810c15;
                                           font-size: 30px;
                                           border-radius: 0 5px 5px 0;
                                           z-index: 99;">
                                        </i>
                                    </span>
                                </button>
                                <ul class="dropdown-menu"  style="
                                    width: 100%;
                                    color: #810c15;
                                    border-radius: 0;
                                    border: none;
                                    outline: none;
                                    -webkit-appearance: none;
                                    -moz-appearance: none;
                                    font-style: italic;
                                    padding: 0;
                                    text-align: left;">
                                    <li class="age-val" data-value="17">ต่ำกว่า 18 ปี</li>
                                    <li class="age-val" data-value="19">จาก 18 ถึง 24 ปี</li>
                                    <li class="age-val" data-value="25">มากกว่า 24 ปี</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                    <input type='hidden' class='age' name='age' data-value="0">
                    <?php
                    echo "<INPUT TYPE='hidden' class='e_domain_ref' NAME='http_referer' VALUE=" . $ref . ">";
                    echo "<INPUT TYPE='hidden' NAME='domain' VALUE=" . $domain . ">";
                    echo "<INPUT TYPE='hidden' NAME='id_camp_landingpage' VALUE=" . $id . ">";
                    echo "<INPUT TYPE='hidden' NAME='preview' VALUE=" . $preview . ">";
                    echo "<INPUT TYPE='hidden' NAME='code_chanel' VALUE=" . $code_chanel . ">";
                    ?>
                    <div class="form-group">        
                        <div class="text-center col-xs-12">
                            <button type="submit" class="btn btn-lg bg-red radius-0 e_btn_submit">ลงทะเบียนตอนนี้</button>
                        </div>
                    </div>
                </form>
                <p class="color-red text-center">
                    <span class="glyphicon glyphicon-earphone"></span>
                    ติดต่อสายด่วนของเรา: 0999 100 245
                </p>
            </div>
        </div>

        <div id="video" class="row text-center pd-20 border-bottom-red">
            <p class="text-center color-red size-normal">
                สื่อมวลชนต่างให้ความสนใจ Topica
            </p>
            <iframe width="80%" height="290" src="http://www.youtube.com/embed/dgQnNF8giWY" style="border: none;"></iframe>
        </div>

        <div id="" class="border-bottom-red row">
            <p class="col-xs-8 col-xs-offset-2 text-center bg-red size-small pd-10">ศูนย์รวมเทคโนโลยี การศึกษา TOPICA</p>
            <p class="color-red bold text-center col-xs-12">
                <br/>องค์กรเทคโนโลยีการศึกษา Topica เป็นผู้บุกเบิกในการศึกษาออนไลน์ในเอเชียตะวันออกเฉียงใต้
                <br/><br/>
                TOPICA มีพนักงานอยู่มากกว่า 500 คนและผู้ช่วยงานกว่า 1400 คน
                มีสำนักงานที่มะนิลา สิงคโปร์ กรุงเทพฯ ฮานอย โฮจิมินห์ และดานัง
            </p>
            <div class="col-xs-8 col-xs-offset-2 mr-top-20" style="margin-bottom: 20px;">
                <img src="img/address.png" alt="" class="full-width"/>
            </div>
        </div>

        <footer class="row border-bottom-red pd-20">
            <p class="text-center bold">
                Bangkok:<br/>
                Office 21<br/>
                Elite Office Co., Ltd.<br/>
                2 Ploenchit Center, G Floor, Sukhumvit Road, Klongtoey, Bangkok<br/>
                Hotline: 0999 100 245<br/>
                Tel: +66 02 305 6673<br/>
                Email: native@topica.asia<br/>
            </p>
        </footer>
    </body>
</html>