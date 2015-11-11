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
// // Any mobile device (phones or tablets) or Any tablet device.
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

$rand_img = './img/Untitled-4.jpg';

$rand_site = 'http://hou.tuyensinh.topica.edu.vn/?code=CRS.Native.HOU.CaNuoc.190315';

$rand_string = 'Đừng bỏ lỡ - Ứng dụng học Tiếng Anh MIỄN PHÍ cho người đi làm? Hãy click "Ở lại trang này" để khám phá!';
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

        <meta property="fb:app_id" content="597777923667388" />
        <meta property="og:title" content="วิธีใหม่สำหรับการเรียนภาษาอังกฤษ"/>
        <meta property="og:site_name" content="TOPICA NATIVE"/>
        <meta property="og:description" content="ห้องเรียนออนไลน์สำหรับคนทำงาน  เรียนภาษาอังกฤษออนไลน์ด้วยตัวคุณเองกับครูเจ้าของภาษา"/>
        <meta property="og:image" content="http://talkenglish.topicanative.asia/img/Slide3.png" />

        <link type="image/x-icon" href="./img/favicon.png" rel="shortcut icon">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="./css/style.css">

        <script src="./mol_topmito/js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./mol_topmito/js/jquery.form.js" type="text/javascript"></script>
        <script src="./mol_topmito/js/jquery.bpopup.min.js" type="text/javascript"></script>
        <script src="./js/main.js" type="text/javascript"></script>
        <script src="./mol_topmito/js/save_contact.js" type="text/javascript"></script>

        <script>
            // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            // ga('create', 'UA-66184446-2', 'auto');
            // ga('send', 'pageview');

        </script>

        <script>
            // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            // ga('create', 'UA-66184446-2', 'auto');
            // ga('send', 'pageview');

        </script>

    </head>
    <body>
        <div class="container-fluid">
            <nav class="row fixed">
                <img src="./img/LOGO.png" alt=""/>
                <div class="dang-ky">
                    <a href="#form-dang-ky"><i class="fa fa-user"></i>&nbsp;&nbsp;ลงทะเบียน</a>
                </div>
            </nav>
            <div style="height: 90px;"></div>
            <div class="header row">
                <h2 class="col-xs-offset-1" style="font-size: 24px">วิธีใหม่</h2>
                <h3 class="col-xs-offset-2" style="font-size: 18px">ที่ช่วยให้คนไทยพูดภาษาอังกฤษง่ายขึ้น</h3>
                <h2 class="col-xs-offset-1" style="font-size: 24px">เรียนได้ทันที โดยไม่ต้องรอเรียน</h2>
            </div>
            <div class="slide row" style="border-top: 1px solid #810c15; border-bottom: 2px solid #810c15;">
                <img src="img/banner2.png" alt=""/>
            </div>
            <div class="form-dang-ky" id="form-dang-ky">
                <h4  class="info-form">โปรดใช้ข้อมูลที่ถูกต้อง. เราจะทำการติดต่อกลับไปเพื่อให้คำปรึกษาแก่ท่าน.</h4>
                <form  id='dang-ky' style="background: #810c15;padding-top:15px;"class="e_submit e_form_submit "method="post" name="fr_register" action="./mol_topmito/save_c3.php" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="ชื่อ" name="name" style="color:#810c15;margin-left: 15px; margin-right: 15px; width: 90%;">
                    </div>
                    <div class="form-group"> 
                        <input type="email" class="form-control"  placeholder="อีเมลล์" name="email" style="color:#810c15;margin-left: 15px; margin-right: 15px; width: 90%;">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="โทรศัพท์" onkeyup="return check_sdt(this)" name="phone" style="color:#810c15;margin-left: 15px; margin-right: 15px; width: 90%;">
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12"style="margin-bottom: 15px;">
                            <div class="dropdown drop-btn" style="margin-right: 30px;
                                 border-radius: 10px;
                                 outline: none;" name="age">
                                <button class="btn  dropdown-toggle" id="chosen-text"type="button" data-toggle="dropdown" style="width: 100%;
                                        padding: 7px 12px;
                                        text-align: left;
                                        //  font-style: italic;
                                        color: #810c15;
                                        border-radius: 6px;
                                        height: 35px; outline: none;
                                        background-color: #fff;">
                                    <p style="color: #810c15;
                                       font-weight: bold;
                                       font-size: 14px;
                                       font-style: normal;"><span style=" color: #999;font-weight: 400;">กรุณาเลือกอายุของคุณ</span></p>
                                    <span >
                                        <i class="fa fa-angle-down" style="position: absolute;
                                          
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
                                    padding: 0;">
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
                        <button type="submit" class="btn btn-submit e_btn_submit">ลงทะเบียน</button>
                    </div>
                    <div class="form-group">
                        <label class="info-form" style="color:#fff">ติดต่อสายด่วนของเรา: 0999 100 245</label><br/>
                        <label class="info-form" style="color:#fff">*TOPICA จะเก็บข้อมูลของคุณให้เป็นความลับ*</label>
                    </div>
                </form>
            </div>

            <div id="why-topica" class="row">
                <span class="span_title"></span>
                <h4 style="padding:10px;color:#fff; background: #810c15;float: left;  text-align: center; margin: 0;">ทำไมต้อง Topica Native</h4>
                <div class="col-xs-10 col-xs-offset-1 why-art">
                    * ประเมินคุณภาพการเรียนในทุกๆเดือนและทุกๆสัปดาห์ตามมาตรฐาน Casec<br/>
                    * ฝึกทักษะภาษาอังกฤษกับอาจารย์เจ้าของภาษาจาก สหรัฐฯ อังกฤษ และ ออสเตรเลีย<br/>
                    * ฝึกพูดภาษาอังกฤษมากกว่า 16 ชั่วโมงต่อวัน<br/>
                    * นักเรียนแต่ละคนจะมีที่ปรึกษาและตารางเรียนส่วนตัว<br/>
                    * คุณสามารถกำหนดตารางเรียนของคุณเองได้ <br/>
                </div>
            </div>

            <div id="co-van" class="row">
                <span class="span_title"></span>
                <h4 style="padding:10px;color:#fff; background: #810c15;float: left;  text-align: center; margin: 0;">เกี่ยวกับอาจารย์</h4>
                <img class="col-xs-12" src="img/Teacher.png" alt=""/>
                <div class="text-right col-xs-12 btn-dang-ky">
                    <button class="btn"><a href="#">ลงทะเบียน</a></button>
                </div>
            </div>

            <div id="truyen-thong" class="row">
                <span class="span_title"></span>
                <h4 style="padding:10px;color:#fff; background: #810c15;float: left;  text-align: center; margin: 0;">สื่อมวลชนต่างให้ความสนใจ Topica</h4>
                <div class="clear"></div>               
                <img class="col-xs-3 img-title" src="img/thai 1.png" alt="" style="padding: 0 5px; margin-top: 13px;"/>
                <img class="col-xs-3 img-title" src="img/Layer 106.png" alt="" style="padding: 0 5px;" />
                <img class="col-xs-4 img-title" src="img/Techinasia.png" alt="" style="padding: 0 5px;"/>
                <img class="col-xs-2 img-title" src="img/Forbes.png" alt="" style="padding: 0 5px;"/>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <img src="img/thai 1.png" alt="" style="margin-left: 140px;"/>
                            <div class="row" style="margin: 0;">
                                <div class="col-xs-10 col-xs-offset-2 truyen-thong-info">
                                    <img class="img-info" src="img/Layer-104.png" alt="" style="top: -35px; left: -55px;"/>
                                    <h5>ภาษาอังกฤษคือกุญแจสู่ความสำเร็จ
                                        วิกรม กรมดิษฐ์</h5>
                                    <p>
                                        “จากการวิจัยของ International Herald Tribune ปี 2007 พบว่ามีผู้ใช้ภาษาอังกฤษเป็นภาษาแม่มากกว่า 400 ล้านคน ในขณะที่อีก300 ถึง 500  ล้านคนใช้ภาษาอังกฤษเป็นภาษาที่สอง  นั่นเท่ากับว่ามีผู้ใช้ภาษาอังกฤษในปัจจุบันรวมทั้งสิ้น 1.5 พันล้านคนบนโลก..”
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12"style="margin-top: 30px;">
                            <img src="img/Layer 106.png" alt="" style="margin-right: 140px; float: right;"/>
                            <div class="row" style="margin: 0;">
                                <div class="col-xs-10 truyen-thong-info">
                                    <img class="img-info" src="img/Layer-107.png" alt="" style="top: -35px; right: -55px;"/>
                                    <h5>บุฟเฟ่ต์ภาษาอังกฤษ เรียน 16 ชั่วโมงต่อวัน 
                                        กับครูเจ้าของภาษา</h5>
                                    <p>
                                        “ในปีที่ผ่านมาการพัฒนาและความสำเร็จของ E-learning 
                                        กลายเป็นปฏิวัติใหม่ในการศึกษา มหาวิทยาลัยสองแห่งที่มีชื่อเสียงใน
                                        โลก MIT และ Harvard เป็นแบบอย่างสำหรับการประยุกต์ใช้และ
                                        ประสบความสำเร็จกับ E-learning...”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="youtube" class="row">
                <span class="span_title"></span>
                <h4 style="padding:10px;color:#fff; background: #810c15;float: left;  text-align: center; margin: 0;">แนะนำเกี่ยวกับ Topica Native</h4>
                <div class="col-xs-12" style="text-align: center; margin-top: 20px;">
                    <iframe max-width="420" height="240" src="http://www.youtube.com/embed/dgQnNF8giWY"></iframe>
                </div>
            </div>
            <div id="three-steps" class="row">
                <span class="span_title"></span>
                <h4 style="padding:10px;color:#fff; background: #810c15;float: left;  text-align: center; margin: 0;">3 ขั้นตอนเพื่อประสบความสำเร็จ</h4>
                <div class="col-xs-12" style="text-align: center; margin-top: 20px;">
                    <img src="img/3steps.png" alt="" style="width: 100%;"/>
                </div>
                <div class="text-right col-xs-12 btn-dang-ky">
                    <button class="btn"><a href="#">ลงทะเบียน</a></button>
                </div>
            </div>
            <div id="footer" class="row">
                <h4 style="background-color: #810c15; width: 70%; color: #fff; padding: 7.5px 15px; margin: 0 auto; margin-bottom: 20px">การรวมตัวกันขององค์กรเทคโนโลยีการศึกษาTOPICA</h4>
                <p class="col-xs-12 text-justify">
                    องค์กรเทคโนโลยีการศึกษา TOPICA เป็นผู้บุกเบิกด้านการศึกษาออนไลน์ในเอเชียตะวันออกเฉียงใต้ 
                    โดยโปรแกรมการศึกษาระดับมหาวิทยาลัย TOPICA UNI ได้ร่วมมือกับมหาวิทยาลัยชั้นนำ 8 แห่งของฟิลิปปินส์
                    และเวียดนามให้บริการด้านการศึกษาที่มีคุณภาพในเอเชียตะวันออกเฉียงใต้ และโปรแกรมสอนภาษาอังกฤษ
                    ออนไลน์ TOPICA Native และ TOPICA Memo ได้เปิดให้บริการในไทย อินโดนีเซีย และเวียดนาม อีกทั้งยังเป็น
                    รายแรกที่ประยุกต์การใช้ Google Glass ในการสอนออนไลน์ ตั้งแต่มีการก่อตั้งตลอดระยะเวลา 3 ปีที่ผ่านมา 
                    TOPICA ได้รับทุนสนับสนุนในโปรเจกต์ต่างๆ มากถึง 10 ล้านเหรียญสหรัฐฯ โดยมี Bill Gates ประธานบริษัท 
                    Microsoft Corp. เป็นผู้ให้ทุนสนับสนุนในการก่อตั้ง ปัจจุบัน TOPICA มีบุคลากรมากกว่า 500 คน 
                    พนักงานชั่วคราวมากกว่า 1,400 คน และมีสำนักงานที่กรุงมะนิลา กรุงเทพฯ ฮานอย โฮจิมินห์ และดานัง.
                </p>
                <div class="col-xs-4">
                    <img src="img/Maps.png" alt="" style="width: 100%;" />
                    <div class="row">
                        <div class="text-center col-xs-12 btn-dang-ky">
                            <button class="btn"><a href="#">ลงทะเบียน</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-7 col-xs-offset-1">
                    <p class="address">
                        <img src="img/Adress.png" alt=""/>
                        Office 21, Elite Office Co., Ltd.<br/>
                        2 Ploenchit Center, G Floor,Sukhumvit Road, Klongtoey, Bangkok</p>
                    <p class="address">
                        <img src="img/Phone.png" alt=""/>
                        Hotline: 0999 100 245 - Tel: +66 02 305 6673
                    </p>
                    <p class="address">
                        <img src="img/Web.png" alt=""/>
                        Website: Talkenglish.topicanative.vn
                    </p>
                    <p class="address">
                        <img src="img/Mail.png" alt=""/>
                        Email: Native@topica.asia
                    </p>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $('nav a').click(function (e) {
                e.preventDefault();
                var offset = $($(this).attr("href")).offset();
                $("html body").animate({scrollTop: offset.top - 91 + "px"}, 500);
            });
        </script>
    </body>
</html>