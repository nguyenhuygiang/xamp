<?php
//get data
$ref = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';
$domain = isset($_SERVER[HTTP_HOST]) ? "http://$_SERVER[HTTP_HOST]" . $_SERVER["REQUEST_URI"] : '';
$id = isset($_GET["id"]) ? $_GET["id"] : "2890";
$preview = isset($_GET["preview"]) ? $_GET["preview"] : "-100";
$code_chanel = isset($_GET["code_chanel"]) ? $_GET["code_chanel"] : "english.topicanative.asia.2015.10.8";

require_once './mol_topmito/save_c2.php';

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

<html>
    <head>
        <meta charset="utf-8"/>
        <title>วิธีใหม่สำหรับการเรียนภาษาอังกฤษ</title>
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
        <script src="./js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./mol_topmito/js/jquery.form.js" type="text/javascript"></script>
        <script src="./mol_topmito/js/jquery.bpopup.min.js" type="text/javascript"></script>
        <script src="./mol_topmito/js/save_contact.js" type="text/javascript"></script>
        <script src="./js/main.js" type="text/javascript"></script>

        <!-- Google Code for Conversion &#39;http://english.topicanative.asia/&#39; Conversion Page -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 959053642;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "dkfWCMqL-14Qyv6nyQM";
		var google_conversion_value = 0.05;
		var google_conversion_currency = "USD";
		var google_remarketing_only = false;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/959053642/?value=0.05&amp;currency_code=USD&amp;label=dkfWCMqL-14Qyv6nyQM&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-66184446-4', 'auto');
          ga('send', 'pageview');

        </script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-66184446-4', 'auto');
          ga('send', 'pageview');

        </script>
    </head>
    <body>

        <!--Header-->
        <button id="nav-top" class="btn btn-lg"><a href="#slide" class="nav"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;ลงทะเบียน</a></button>
        <nav class="container-fluid" id="header">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-3">
                            <img src="./img/TOPICA_NATIVE.png" alt="" style="width: 95%; margin-top: -9px; margin-left: -39px;"/>
                        </div>
                        <div class="col-xs-9">
                            <div class="row">
                                <ul>
                                    <li class="col-xs-4 col-xs-offset-4 text-right"><i class="fa fa-phone" style="vertical-align: middle;"></i>&nbsp;&nbsp;&nbsp;<strong style="font-size: 16px;">Hotline: 0999 100 245</strong></li>
                                    <li class="col-xs-4 text-center"><i class="fa fa-envelope"  style="vertical-align: -2px; font-size: 21px;"></i>&nbsp;&nbsp;&nbsp;<strong style="font-size: 16px;">Email: native@topica.asia</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="color-red text-center" style="margin-top: 0; font-size: 40px;">วิธีใหม่สำหรับการเรียนภาษาอังกฤษ</h2>
                    </div>
                </div>
            </div>
        </nav>


        <!--Slide-->
        <div class="container-fluid" id="slide">
            <div class="row" style="position: relative;">
                <img src="img/TOPICA NATIVE.png" alt="" style="width: 100%;"/>
               <p style="text-align: center;
    position: absolute;
    bottom: 140px;
    left: 490px;
    font-size: 16px;
    color: #fff; opacity: 0.9;">โปรแกรมภาษาอังกฤษสำหรับบุคคลตั้งแต่ 18 ปีขึ้นไป</p>
            </div>
            <form id="form-dang-ky" class="e_submit e_form_submit form-horizontal" method="POST" action="./mol_topmito/save_c3.php">
                <h3 style="    font-size: 35px; margin-bottom: 0;" class="color-red">ลงทะเบียน</h3>
                <p class="color-red" style="margin-top: 4px;">
                    *ลงทะเบียนเพื่อรับคำแนะนำ
                </p>
                <div class="form-group">

                    <div class="col-xs-11">
                        <div style="border: 2px solid #fff">
                            <input type="text" name="name" class="form-control"  placeholder="ชื่อ">
                        </div>
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-11">
                        <div style="border: 2px solid #fff">
                            <input type="email" name="email" class="form-control"  placeholder="อีเมลล์">
                        </div>
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-11">
                        <div style="border: 2px solid #fff">
                            <input type="text" name="phone" onkeyup="return check_sdt(this)" class="form-control"  placeholder="โทรศัพท์">
                        </div>
                    </div>
                </div>
                <?php
                echo "<INPUT TYPE='hidden' class='e_domain_ref' NAME='http_referer' VALUE=" . $ref . ">";
                echo "<INPUT TYPE='hidden' NAME='domain' VALUE=" . $domain . ">";
                echo "<INPUT TYPE='hidden' NAME='id_camp_landingpage' VALUE=" . $id . ">";
                echo "<INPUT TYPE='hidden' NAME='preview' VALUE=" . $preview . ">";
                echo "<INPUT TYPE='hidden' NAME='code_chanel' VALUE=" . $code_chanel . ">";
                ?>
                <div class="form-group"> 
                    <div class="col-xs-11 text-center">
                        <button type="submit" class="btn bg-red e_btn_submit">ลงทะเบียนตอนนี้</button>
                    </div>
                </div>
                 
            </form>
           
            <img src="./img/img-change.png" alt="" style="position: absolute; bottom:0; left: 0; width: 100%; "/>
        </div>


        <!--Content-->
        <div id="content" class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            <h4 class="color-red">
                                ฝึกพูดภาษาอังกฤษมากกว่า <strong>16</strong> ชั่วโมงต่อวัน
                            </h4>
                            <p>
                                สิ่งสำคัญในการพูดภาษาอังกฤษได้ดีคือ การมีสภาพแวดล้อมที่ดีในการฝึกฝนเช่นจะต้องฝึกฝนทุกวัน แต่ในปัจจุบันไม่มีใครมีเวลามากพอเช่นนั้น
                                <br/>
                                <br/>
								Topica จึงได้ประยุกต์ใช้เทคโนโลยีใหม่ล่าสุด ทุกวัน ตั้งแต่เวลา 8.00 - 24.00 นาฬิกา และสามารถฝึกพูดกับอาจารย์เจ้าของภาษาได้ไม่ว่าที่ไหน เวลาใด
                            </p>
                        </div>
                        <div class="col-xs-6">
                            <img src="img/chon1.png" alt="" style="width: 100%;"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">
                            <img src="img/1256903rbot.png" alt="" style="width: 100%;"/>
                        </div>
                        <div class="col-xs-6">
                            <h4 class="color-red">
                                <strong style="line-height: 1.2em; font-size: 45px;">CASEC</strong><br/>
                                <span>ระบบประเมินผลการสื่อสารภาษาอังกฤษ <br/>
								โดยคอมพิวเตอร์</span>
                            </h4>
                            <p>
                                CASEC - วิธีการทดสอบโดยยึดทฤษฎีการตอบสนองข้อสอบ <br/>
								(Item Response Theory: IRT) เป็นหลักซึ่งใช้วัดระดับในระดับสากล<br/>
								ที่มีความถูกต้องแม่นยำเครื่องมือที่ใช้ในการสอบและการจัดทำข้อสอบ
                                <br/><br/>
								จัดทำโดยผู้มีความเชี่ยวชาญด้านจิตวิทยาและสถิติของเจ้าของภาษา <br/>
								การสอบใช้เวลาโดยประมาณ 40-50 นาที และจะประกาศ<br/>
								ผลคะแนนการสอบทันทีเมื่อทำข้อสอบเสร็จ 

                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">
                            <h4 class="color-red">
                                นักเรียนแต่ละคนจะมี  <strong style="font-size: 44px; font-weight: 500;">ADVISOR</strong><br/>
                                และตารางเรียนส่วนตัว
                            </h4>
                            <p>
                                นักเรียนแต่ละคนจะมีที่ปรึกษาของตัวเอง ที่จะคอยติดตามและช่วยเหลือไม่ว่าเวลาใดก็ตามที่คุณต้องการ
 								<br/><br/>
								และนักเรียนแต่ละคนจะได้รับตารางการเรียนที่ถูกจัดมา<br/>
								ให้เหมาะสมกับตัวเองมากที่สุดซึ่งที่ปรึกษาส่วนตัวจะวิเคราะห์<br/>
								ทักษะของนักเรียนและคอยติดตามพัฒนาการเป็นรายวัน
								<br/><br/>
								โดยอิงจากข้อเสนอแนะของอาจารย์เจ้าของภาษา<br/>
								และเป้าหมายของนักเรียนเอง เพื่อพัฒนาทักษะภาษาอังกฤษให้ดียิ่งขึ้น
                            </p>
                        </div>
                        <div class="col-xs-6">
                            <img src="img/chon3.png" alt="" style="width: 100%;"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Chuyên gia-->
        <div id="chuyen-gia" class="container-fluid">
            <div class="row">
                <div class="container">
                    <h3 class="text-center color-red" style="font-size: 50px; margin-bottom: 35px; margin-top: 15px;">อาจารย์</h3>
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <img src="img/teacher1.png" alt=""/>
                            <h4 class="text-center color-red">Guy Dickson</h4>
                            <h5 class="text-center">British</h5>
                            <p class="text-center">
                                ผมสามารถสอนภาษาอังกฤษให้แก่ทุกเพศทุกวัยได้<br/>
                                ทั้งการสอนในแบบโรงเรียนทั่วไปหรือแม้กระทั่ง<br/>
                                การสอนภาษาอังกฤษในรูปแบบออนไลน์ <br/>
                            </p>
                        </div>
                        <div class="col-xs-4 text-center"></div>
                        <div class="col-xs-4 text-center"></div>

                        <div class="col-xs-4 text-center">
                            <img src="img/teacher2.png" alt=""/>
                            <h4 class="text-center color-red">David Devin</h4>
                            <h5 class="text-center">American</h5>
                            <p class="text-center">
                                ผมจะเน้นที่การออกเสียงมากที่สุด<br/>
                                และนักเรียนหลายคนออกเสียงภาษาอังกฤษได้ดีขึ้นอย่างรวดเร็ว<br/>
                                หลังจากการเรียนเพียง 1 เดือน <br/>
                            </p>
                        </div>
                        <div class="col-xs-4 text-center"></div>
                        <div class="col-xs-4 text-center"></div>

                        <div class="col-xs-4 text-center">
                            <img src="img/teacher3.png" alt=""/>
                            <h4 class="text-center color-red">Egbert Veltman</h4>
                            <h5 class="text-center">Holland</h5>
                            <p class="text-center">
                                ผมรักที่จะให้โอกาสแก่นักเรียน<br/>
                                เพื่อเปิดกว้างทางความรู้แก่พวกเขาโดย<br/>
                                สนทนาในหัวข้อต่างๆที่น่าสนใจในบทเรียน
                            </p>
                        </div>
                        <div class="col-xs-4 text-center"></div>
                        <div class="col-xs-4 text-center"></div>
                    </div>
                </div>
            </div>
        </div>


        <!--Video-->
        <div id="video" class="container text-center">
            <h3 class="text-center color-red" style="font-size: 38px; margin-bottom: 35px; margin-top: 35px;">
                สื่อมวลชนต่างให้ความสนใจ Topica
            </h3>
            <iframe width="910" height="510" src="http://www.youtube.com/embed/dgQnNF8giWY" style="border: none;"></iframe>
        </div>


        <!--Truyền thông-->
        <div id="truyen-thong">
            <img src="img/truyen-thong.png" style="width: 100%;">
        </div>

        <!-- --------- -->
        <div class="container" style="padding-top: 100px;">
            <div class="row" style="">
                <div class="col-xs-5 col-xs-offset-1" style="position: relative;">
                    <img style="  border-radius: 50%;  border: 5px solid #eeeeee;  height: 102px;  width: 102px; position: absolute;    top: -48px;
                         left: -33px;" src="img/per2.png">
                    <img src="img/thai 1.png" style="width: 132px; position: absolute; top: -50px; left: 85px;">
                    <div style="background: #ebebeb; padding: 15px;">
                        <p class="color-red" style="font-size: 20px; padding-left: 50px;">
                            บุฟเฟ่ต์ภาษาอังกฤษ เรียน 16 ชั่วโมงต่อวัน
                            กับครูเจ้าของภาษา
                        </p>
                        <p style="">
                            “ในปีที่ผ่านมาการพัฒนาและความสำเร็จของ E-learning<br/>
                            กลายเป็นปฏิวัติใหม่ในการศึกษา มหาวิทยาลัยสองแห่งที่มีชื่อเสียงใน<br/>
                            โลก MIT และ Harvard เป็นแบบอย่างสำหรับการประยุกต์ใช้และ<br/>
                            ประสบความสำเร็จกับ E-learning...”
                        </p>
                        <p class="text-right" id="popup_1"><a href="#" class="color-red" data-toggle="modal" data-target="#popup1">&gt;&gt; ดูเพิ่มเติม</a></p>
                    </div>
                </div>
                <div class="col-xs-5" style="position: relative;">
                    <img style="  border-radius: 50%;  border: 5px solid #eeeeee;  height: 102px;  width: 102px; position: absolute;    top: -48px;
                         right: -33px;" src="./img/image01.jpg">
                    <img src="img/Thai 2.png" style="width: 175px; position: absolute; top: -50px; right: 85px;">
                    <div style="background: #ebebeb; padding: 15px;">
                        <p class="color-red" style="font-size: 20px; padding-right: 50px;">
                            ภาษาอังกฤษคือกุญแจสู่ความสำเร็จ
                            วิกรม กรมดิษฐ์
                        </p>
                        <p style="line-height: ">
                            “จากการวิจัยของ International Herald Tribune ปี 2007 พบว่ามีผู้ใช้ภาษาอังกฤษเป็นภาษาแม่มากกว่า 400 ล้านคน ในขณะที่อีก300 ถึง 500  ล้านคนใช้ภาษาอังกฤษเป็นภาษาที่สอง  นั่นเท่ากับว่ามีผู้ใช้ภาษาอังกฤษในปัจจุบันรวมทั้งสิ้น 1.5 พันล้านคนบนโลก..”
                        </p>
                        <p class="text-right" id="popup_1"><a href="#" class="color-red" data-toggle="modal" data-target="#popup2">&gt;&gt; ดูเพิ่มเติม</a></p>
                    </div>
                </div>
            </div>
        </div>



        <!--3 steps-->
        <div class="container-fluid" id="three-steps">
            <div class="row">
                <div class="container text-center">
                    <h4 class="color-red text-center" style="font-size: 38px;">
                        3 ขั้นตอนเพื่อประสบความสำเร็จ
                    </h4>
                    <img src="img/3steps2.png" alt="" style="width: 100%;margin-top: 30px;"/>
                </div>
            </div>
        </div>

        <!--footer-->
        <footer class="container-fluid">
            <div class="row">
                <div class="bg-footer"></div>
                <div class="col-xs-4">
                    <img src="img/topica.png" alt="" style="width: 100%;"/>
                </div>
                <div class="col-xs-8">
                    <p style="font-size: 16px;">

                        องค์กรเทคโนโลยีการศึกษา TOPICA เป็นผู้บุกเบิกด้านการศึกษาออนไลน์ในเอเชียตะวันออกเฉียงใต้ 
                        โดยโปรแกรมการศึกษาระดับมหาวิทยาลัย TOPICA UNI ได้ร่วมมือกับมหาวิทยาลัยชั้นนำ 8 แห่งของฟิลิปปินส์
                        และเวียดนามให้บริการด้านการศึกษาที่มีคุณภาพในเอเชียตะวันออกเฉียงใต้ และโปรแกรมสอนภาษาอังกฤษ
                        ออนไลน์ TOPICA Native และ TOPICA Memo ได้เปิดให้บริการในไทย อินโดนีเซีย และเวียดนาม อีกทั้งยังเป็น
                        รายแรกที่ประยุกต์การใช้ Google Glass ในการสอนออนไลน์ ตั้งแต่มีการก่อตั้งตลอดระยะเวลา 3 ปีที่ผ่านมา 
                        TOPICA ได้รับทุนสนับสนุนในโปรเจกต์ต่างๆ มากถึง 10 ล้านเหรียญสหรัฐฯ  โดยมี Bill Gates ประธานบริษัท 
                        Microsoft Corp. เป็นผู้ให้ทุนสนับสนุนในการก่อตั้ง ปัจจุบัน TOPICA มีบุคลากรมากกว่า 500 คน 
                        พนักงานชั่วคราวมากกว่า 1,400 คน  และมีสำนักงานที่กรุงมะนิลา กรุงเทพฯ ฮานอย โฮจิมินห์ และดานัง.

                    </p>
                </div>
            </div>
            <div class="row text-center" id="footer">
                Address: Office 21 - Elite Office Co., Ltd.  /  2 Ploenchit Center, G Floor, Sukhumvit Road, Klongtoey, Bangkok
                <br/>Email: native@topica.asia
            </div>
        </footer>

        <div class="modal fade" id="popup1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content g_modal_content">
                    <div class="modal-body">
                        <img src="img/popup1.png" alt="" style="width: 100%;"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="popup2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content g_modal_content">
                    <div class="modal-body">
                        <img src="img/popup2.png" alt="" style="width: 100%;"/>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('#nav-top').click(function (e) {
                e.preventDefault();
                var a_link = $(this).find('a');
                var offset = $(a_link.attr("href")).offset();
                $("html body").animate({scrollTop: offset.top + 95 + "px"}, 500);
            });
        </script>

        <!-- Google Code for Conversion &#39;http://english.topicanative.asia/&#39; Conversion Page -->
  <script type="text/javascript">
  / <![CDATA[ /
  var google_conversion_id = 959053642;
  var google_conversion_language = "en";
  var google_conversion_format = "3";
  var google_conversion_color = "ffffff";
  var google_conversion_label = "dkfWCMqL-14Qyv6nyQM";
  var google_conversion_value = 0.05;
  var google_conversion_currency = "USD";
  var google_remarketing_only = false;
  / ]]> /
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
  </script>
  <noscript>
  <div style="display:inline;">
  <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/959053642/?value=0.05&amp;currency_code=USD&amp;label=dkfWCMqL-14Qyv6nyQM&amp;guid=ON&amp;script=0"/>
  </div>
  </noscript>
    </body>
</html>