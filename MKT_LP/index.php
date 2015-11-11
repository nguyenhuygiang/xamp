
<?php
////get data
$ref = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';
$domain = isset($_SERVER[HTTP_HOST]) ? "http://$_SERVER[HTTP_HOST]" . $_SERVER["REQUEST_URI"] : '';
$id = isset($_GET["id"]) ? $_GET["id"] : "-100";
$preview = isset($_GET["preview"]) ? $_GET["preview"] : "-100";
$code_chanel = isset($_GET["code_chanel"]) ? $_GET["code_chanel"] : "-100";

require_once './mol_topmito/save_c2.php';
// $rand_site_number = rand(1, 2);
// if ($rand_site_number === 1) {
//$rand_img = './img/exit_page_v2.png';
//$rand_site = 'http://kyna.vn/nhom-khoa-hoc/bo-5-ky-nang-giao-tiep-cho-nguoi-di-lam/105008?utm_source=native_kyna&utm_medium=exit_page&utm_campaign=landing_page_1';
//$rand_string = 'Khám phá ngay BỘ 5 KỸ NĂNG GIAO TIẾP giúp bạn tự tin tỏa sáng của Kyna.vn. HÃY Ở LẠI để khám khá và nhận tư vấn miễn phí!';
// } else {
//     $rand_img = './img/MM0033.png';
//     $rand_site = 'http://memo.edu.vn/?code_chanel=CS0004&id_landingpage=2&id_campaign=1&id=25';
//     $rand_string = 'Đừng bỏ lỡ cơ hội để trở thành CHUYÊN GIA NGOẠI NGỮ một cách HOÀN TOÀN MIỄN PHÍ, click ở lại trang này để KHÁM PHÁ NGAY!';
// }
?>

<html>
    <head>
        <meta charset="utf-8"/>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/slide.css" rel="stylesheet" type="text/css"/>
        <link type="image/x-icon" href="./img/favicon.png" rel="shortcut icon">
        <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/slide.js" type="text/javascript"></script>
        <script src="./mol_topmito/js/jquery.form.js" type="text/javascript"></script>
        <script src="./mol_topmito/js/save_contact.js" type="text/javascript"></script>
    </head>
    <body>
        <button id="nav-top" class="btn btn-lg"><a href="#g_header" class="nav">&nbsp;&nbsp;&nbsp;ลงทะเบียน</a></button>
        <!--header-->
        <div class="container margin-30" id="g_header">
            <div class="row">
                <link href="css/slide.css" rel="stylesheet" type="text/css"/>
                <div class="col-xs-3">
                    <img src="img/LOGO Red.png" alt="" style="margin-top: 3px;" />
                </div>
                <div class="col-xs-3 col-xs-offset-3 ">
                    <p class="p_head bold" style="margin: 0;"><img src="img/Layer 136.png" alt="" class="ver-algin-base width-20"><span class="color-red nomal">  Hotline: </span> 0999 100 245</p>
                    <p class="p_head bold"><img src="img/Mail.png" alt="" class="ver-algin-base width-20"><span class="color-red nomal">  Email:</span> native@topica.asia</p>
                </div>
                <div class="col-xs-3 " style="padding: 0;">
                    <p class="p_head" ><img src="img/Line_logo.png" alt="" class="width-20 ver-algin-base">  @topicanative</p>
                    <p class="p_head" ><img src="img/facebook29.png" alt="" class="width-20 ver-algin-base">  TOPICA Native Thailand</p>
                </div>
            </div>
        </div>

        <!--banner-->

        <div class="container-fluid" id="banner" >
            <div class="row">
                <!--form-->
                <div class="container"  style="position: relative; min-width: 1170px;">
                    <div class="row">
                        <div id="form" class="col-xs-6">

                            <div class="color-white">
                                <p>ติดต่อเราที่เบอร์ (0999.100.245)<br/>
                                    หรือให้เราติดต่อคุณหลังจากลงทะเบียน
                                </p>
                            </div>   
                            <form  class="e_submit e_form_submit form-inline" method="post"  action="./mol_topmito/save_c3.php">
                                <div class="form-group mr-top-15">
                                    <input type="text" class="form-control full-width" name="name" id="name" placeholder="ชื่อ">
                                </div>
                                <div class="form-group mr-top-15 mr-left-10">
                                    <input type="text" class="form-control" id="phone" onkeyup="return check_sdt(this)" name="phone" placeholder="โทรศัพท์">
                                </div>
                                <div class="form-group mr-top-15">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล">
                                </div>

                                  <?php
                                        echo "<input type='hidden' class='e_domain_ref' name='http_referer' value=" . $ref . ">";
                                        echo "<input type='hidden' name='domain' value=" . $domain . ">";
                                        echo "<input type='hidden' name='id_camp_landingpage' value=" . $id . ">";
                                        echo "<input type='hidden' name='preview' value=" . $preview . ">";
                                         echo "<input type='hidden' name='code_chanel' value=" . $code_chanel . ">";
                                    ?>
                                    
                                <div class="form-group mr-top-15 mr-left-10">
                                    <button type="submit" class="btn-form btn-default-form">ลงทะเบียนตอนนี้</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--content-->

        <div class="container mr-top-45">
            <div class="row ">
                <div class="col-xs-12 text-center ">
                    <p class="border-red-left color-red bold size-supper-normal " style="padding: 5px 0px;"><img src="img/icon copy.png" alt="" style="width: 30px;"/>&nbsp;&nbsp;&nbsp;ก่อนลงทะเบียน, กรุณาใช้เวลาในการศึกษาข้อมูลเกี่ยวกับโปรแกรมของเราก่อน</p>                
                </div>
            </div>

            <div class="row mr-30 border-bottom padding-bottom-10">
                <div class="col-xs-6 ">
                    <p class="color-red bold">หากคุณกำลังมองหาโปรแกรมที่สามารถช่วยคุณ</p>
                    <p class="tick">เก่งในเรื่องการสนทนาภาษาอังกฤษ</p>
                    <p class="tick">เก่งภาษาอังกฤษเพื่อความสำเร็จในหน้าที่การงาน</p>
                    <p class="tick">เรียนภาษาอังกฤษด้วยมาตราฐานสากล</p>
                    <p class="tick">ฝึกภาษาอังกฤษกับเจ้าของภาษาทุกวัน</p>
                    <p class="tick">ไม่ต้องเดินทางไปเรียน ช่วยหลีกเลี่ยงรถติดในชั่วโมงเร่งด่วน</p>
                </div>
                <div class="col-xs-5 col-xs-offset-1">
                    <img src="img/student.png" alt="" class="full-width"/>
                </div>
            </div>
            <div class="row mr-45 border-bottom padding-bottom-10">
                <div class="col-xs-6">
                    <img src="img/question 1 copy.png" alt="" class="full-width"/>
                </div>
                <div class="col-xs-6">
                    <p class="color-red bold">ถ้าคุณอยากจะ</p>
                    <p class="tick">ใช้เวลา 1 ชั่วโมงต่อวันในการเรียนภาษาอังกฤษ</p>
                    <p class="tick">เอาวิธีการเรียนภาษาอังกฤษแบบเก่าๆออกไป</p>
                    <p class="tick">ได้รับการช่วยเหลือด้านการเรียนจากที่ปรึกษาส่วนตัวต่ออย่างเนื่องเพื่อเข้าถึงจุดประสงค์ในการเรียน</p>
                    <p class="tick">ใช้เงินอย่างคุ้มค่าทุกบาทกับการเรียน</p>
                </div>
            </div>
            <div class="row mr-45 border-bottom padding-bottom-10">
                <div class="col-xs-6">
                    <p class="color-red bold">การเรียนภาษาอังกฤษกับโปรแกรมของ TOPICA Native คุณสามารถ</p>
                    <p class="tick">เรียนภาษาอังกฤษได้ทุกที่ <br/>
                        เพียงคุณมีคอมพิวเตอร์ที่สามารถเชื่อมต่ออินเตอร์เน็ตได้</p>
                    <p class="tick">ฝึกพูดภาษาอังกฤษกับอาจารย์เจ้าของภาษากว่า 200 คน <br/>
                        จาก อังกฤษ,สหรัฐอเมริกา, แคนนาดา, ออสเตรเลีย ฯลฯ</p>
                    <p class="tick">เลือกเวลาเรียนได้ดั่งใจตั้งแต่ 8 โมงเช้า ถึงเที่ยงคืนทุกวัน <br/>
                        โดยไม่ต้องจองคอร์สล่วงหน้า</p>
                    <p class="tick">มีที่ปรึกษาส่วนตัวที่จะคอยติดตามและช่วยเหลือคุณในเรื่องการเรียน</p>
                </div>
                <div class="col-xs-6">
                    <img src="img/TOPICA NATIVE 2 đục chữ.png" alt="" class="full-width"/>
                </div>
            </div>
            <div class="row mr-45 border-bottom padding-bottom-10">
                <div class="col-xs-6">
                    <img src="img/MKT_LP 1.png" alt="" class="full-width"/>
                </div>
                <div class="col-xs-6">
                    <p class="color-red bold">คุณจะเข้าโปรแกรมอย่างไร</p>
                    <p class="tick">ขั้นที่ 1 : โทรหา Hotline ของเราหรือรอให้เราโทรหาคุณ<br/>
                        หลังจากที่คุณกรอกข้อมูลแล้ว</p>
                    <p class="tick">ขั้นที่ 2 : รับฟังข้อมูลทางโทรศัพท์</p>
                    <p class="tick">ขั้นที่ 3 : สอบวัดระดับ</p>
                    <p class="tick">ขั้นที่ 4 : รับแผนการเรียนส่วนตัว</p>
                    <p class="tick">ขั้นที่ 5 : ชำระค่าเรียน และรับ Username และ Password เพื่อ Log in </p>
                </div>
            </div>
        </div>

        <!--2 o chu nhat-->
        <div class="container" style="min-width: 1170px;">
            <div class="row">
                <div class="text-center">
                    <p class="color-red" style="text-decoration: underline; font-size: 35px;">ข้อมูลเพิ่มเติมเกี่ยวกับโปรแกรมของเรา</p>
                </div>
            </div>
            <div class="row mr-top-30">
                <div class="col-xs-6 text-center">
                    <p class="border-red bg-red color-white" style="border-top-left-radius: 10px;border-top-right-radius: 10px;margin: 0 0;">
                        โปรแกรมมีหลายแพคเกจและราคาให้เลือก <br/>
                        ขึ้นอยู่กับระดับของนักเรียนหลังการทดสอบ
                    </p>
                    <p class="border-l-r-b " style="padding: 17px 0;">
                        หลังจากที่คุณได้รับคำปรึกษาและทำการสอบวัดระดับ<br/>
                        ทางเราจะให้คำแนะนำแผนการเรียน<br/>
                        และค่าเล่าเรียนที่เหมาะสมที่สุด
                    </p>
                </div>
                <div class="col-xs-6 text-center">
                    <p class="border-red bg-red color-white" style="border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 15 0;margin-bottom: 0px; padding-bottom: 19px;">
                        โปรแกรมการศึกษาภาษาสำหรับผู้เรียนที่อายุตั้งแต่ 18 ปีขึ้นไป
                    </p>
                    <p class="border-l-r-b ">
                        สื่อการศึกษาและวิธีการสอนของโปรแกรม<br/>
                        จะสอดคล้องกับเป้าหมายของผู้เรียน <br/>
                        ที่อยากติดต่อสื่อสารภาษาอังกฤษในชีวิตประจำวัน<br/>
                        และการทำงานอย่างมั่นใจมากขึ้น
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="row mr-45">
                    <div class="col-xs-12 text-center">
                        <p class="border-red-left color-red margin-20 bold size-supper-normal" style="padding: 5px 0px;"><img src="img/icon copy.png" style="width: 30px;" alt="" />&nbsp;&nbsp;&nbsp;คุณสามารถชำระค่าเรียนได้โดย</p>
                    </div>
                </div>
            </div>
        </div>

        <!--tiep theo-->

        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                    <img src="img/Layer 56.png" alt="" class="float-left mr-right-10">
                    <p>เงินสดหรือบัตรเครดิต<br/>
                        ที่ออฟฟิตของเรา</p>
                </div>
                <div class="col-xs-3">
                    <img src="img/Layer 57.png" alt="" class="float-left mr-right-10"/>
                    <p>การโอนเงิน</p>
                </div>
                <div class="col-xs-3">
                    <img src="img/Layer 58.png" alt="" class="float-left mr-right-10"/>
                    <p>บัตรเครดิตออนไลน์ (Paypal, Onepay)</p>
                </div>
                <div class="col-xs-3">
                    <img src="img/COD.png" alt="" class="float-left mr-right-10"/>
                    <p>บริการรับเงินสด<br/>
                        ที่บ้านของคุณ</p>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        <!--students-->

        <div class="container-fluid mr-45" id="students">
            <div class="row">
                <div class="container" style="position: relative;" >
                    <div class="row">
                        <div id="p-student">
                            <p class="size-supper-normal">นักเรียนพูดถึงเราว่าอย่างไรบ้าง</p>
                        </div>
                        <div class="col-xs-8"  id="p-student1">
                            <p class="size-normal" style="margin-left: 95px;margin-top: 10px;">
                                “ ในฐานะผู้บริหารระดับสูงของบริษัท MITR Technical Consultant <br/>
                                คุณทวีปมีบุคลลากรที่มีความรู้ด้านภาษาอังกฤษมากมายในบริษัท<br/>
                                ที่สามารถอำนวยความสะดวกในด้านภาษาได้ดี และยังคงพัฒนาความรู้ด้านภาษาอังกฤษ<br/>
                                ของตัวเองอยู่ตลอดเวลา โดยเลือกเรียนกับ TOPICA Native เพราะด้วยรูปแบบการเรียนออนไลน์<br/>
                                ที่ไม่จำเป็นต้องเดินทาง ประหยัดเวลา และสะดวกต่อรูปแบบการใช้ชีวิตที่ค่อนข้างมีเวลาที่จำกัด..”
                            </p>
                        </div>
                        <div class="text-right col-xs-8"  id="p-student2">
                            <p class="size-normal mr-20" style="margin-right: 55px;">
                                “ ก่อนเรียนกับ TOPICA ผมหวังให้ผ่านการสอบ IELTS เพื่อเข้าร่วมใน<br/>
                                โครงการ Working holiday Scheme ประเทศนิวซีแลนด์ และหลังจากเรียนกับทอปปิก้า<br/>
                                ก็ปรากฏว่าพูดได้มากขึ้น และตอนนี้คะแนนผ่านแล้ว ความรู้สึกในการเข้าห้องสอบก่อนเรียน<br/>
                                กับหลังเรียนกับ TOPICA นั้นเปลี่ยนไป เพราะเรารู้สึกกล้าพูดมากขึ้นและอธิบายเป็นภาษาอังกฤษได้ดีขึ้น..”
                            </p>
                        </div>
                        <div id="student1">
                            <img src="img/Layer 54.png" alt=""/>
                        </div>
                        <div id="student2">
                            <img src="img/Layer 551.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--tiep theo-->

        <div class="container-fluid" id="number">
            <div class="row" style="background: url('../img/brand.png');">
                <div class="container mr-top-20" >
                    <div class="row">
                        <div class="col-xs-3 mr-15">
                            <img src="img/improve.png" alt="" class="float-left mr-right-10"/>
                            <p class="size-normal">อาจารย์เจ้าของภาษากว่า 200 คน</p>
                        </div>
                        <div class="col-xs-3 mr-15">
                            <img src="img/Ellipse 2 copy.png" alt="" class="float-left mr-right-10"/>
                            <p class="size-normal">ผู้นำด้านเทคโนโลยีออนไลน์ ในเอเชียตะวันออกเฉียงใต้ คน</p>
                        </div>
                        <div class="col-xs-3 mr-15">
                            <img src="img/Ellipse 2 copy 31.png" alt="" class="float-left mr-right-10"/>
                            <p class="size-normal">คะแนนการพูดภาษาอังกฤษ
                                เพิ่มขึ้นถึง 300/1000 
                                หลังจากจบคอร์ส</p>
                        </div>
                        <div class="col-xs-3 mr-15">
                            <img src="img/Ellipse 2 copy 3.png" alt="" class="float-left mr-right-10"/>
                            <p class="size-normal"><span>38.9%</span> ของผู้เรียน
                                เรียนต่อกับเรา
                                หลังจากจบคอร์ส</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--video-->

        <div class="container mr-45">
            <div class="row">
                <p class="text-center size-supper-normal color-red">เกี่ยวกับ TOPICA</p>
                <div class="col-xs-8 col-xs-offset-2">
                    <iframe class="full-width"  src="http://www.youtube.com/embed/KiUedOCLrSo" style="border: none;height: 420px;"></iframe>
                </div>
            </div>
        </div>

        <!--slide-->

        <div class="container-fluid" id="slide" >
            <div class="row ">
                <div class="container height" style="position: relative">
                	<h4 style="color: #810c15; font-size: 40px; text-align: center;">Topica Native ในสื่อต่างๆ</h4>
                    <div class="row" style="margin-top: 70px;">
                        <div class="slide-image" style="padding: 0 15px;">
                        	<a href="http://www.matichon.co.th/news_detail.php?newsid=1443579264" target="blank" class="col-xs-6"><img src="./img/slide 3_trans.png" alt="" class="full-width" /></a>
                        	<a href="http://pantip.com/topic/34193173" target="blank" class="col-xs-6"><img src="./img/slide 1_trans.png" alt="" class="full-width" /></a>
                    	</div>
                        <div class="slide-image" style="padding: 0 15px;">
                        	<a href="http://www.prachachat.net/news_detail.php?newsid=1444116011" target="blank" class="col-xs-6"><img src="./img/slide 2_trans.png" alt="" class="full-width" /></a>
                        	<a href="http://www.khaosod.co.th/view_newsonline.php?newsid=1440406060" target="blank" class="col-xs-6"><img src="./img/slide 4_trans.png" alt="" class="full-width" /></a>
                    	</div>
                    	<div class="slide-image" style="padding: 0 15px;">
                        	<a href="http://www.khaosod.co.th/view_newsonline.php?newsid=1444896081" target="blank" class="col-xs-6"><img src="./img/slide 5_trans.png" alt="" class="full-width" /></a>
                        	<a href="http://www.khaosod.co.th/view_newsonline.php?newsid=1443681923" target="blank" class="col-xs-6"><img src="./img/slide 6_trans.png" alt="" class="full-width" /></a>
                    	</div>
                    </div>
                    <div class="slide-control-prev"><img src="img/Shape 3.png" alt=""/></div>
                    <div class="slide-control-next"><img src="img/Shape 3 copy.png" alt=""/></div>
                </div>
                <!--                <ul class="pager-container"></ul>-->

            </div>
        </div>

        <!--footer-->

        <footer class="container-fluid mr-top-30">
            <div class="row">
                <div class="mr-45">
                    <div class="">
                        <div class="col-xs-4">
                            <img src="img/Layer 50.png" class="full-width"/>
                        </div>
                        <div class="col-xs-8  text-justify" style="line-height: 2em;">
                            องค์กรเทคโนโลยีการศึกษา TOPICA เป็นผู้บุกเบิกด้านการศึกษาออนไลน์ในเอเชียตะวันออกเฉียงใต้ โดยโปรแกรมการศึกษาระดับ<br/>
                            มหาวิทยาลัย TOPICA UNI ได้ร่วมมือกับมหาวิทยาลัยชั้นนำ 8 แห่งของฟิลิปปินส์ และเวียดนามให้บริการด้านการศึกษาที่มีคุณภาพในเอเชีย<br/>
                            ตะวันออกเฉียงใต้ และโปรแกรมสอนภาษาอังกฤษ ออนไลน์ TOPICA Native และ TOPICA Memo ได้เปิดให้บริการในไทย อินโดนีเซีย และ<br/>
                            เวียดนาม อีกทั้งยังเป็น รายแรกที่ประยุกต์การใช้ Google Glass ในการสอนออนไลน์ ตั้งแต่มีการก่อตั้งตลอดระยะเวลา 3 ปีที่ผ่านมา TOPICA <br/>
                            ได้รับทุนสนับสนุนในโปรเจกต์ต่างๆ มากถึง 10 ล้านเหรียญสหรัฐฯ โดยมี Bill Gates ประธานบริษัท Microsoft Corp. เป็นผู้ให้ทุนสนับสนุนใน<br/>
                            การก่อตั้ง ปัจจุบัน TOPICA มีบุคลากรมากกว่า 500 คน พนักงานชั่วคราวมากกว่า 1,400 คน และมีสำนักงานที่กรุงมะนิลา กรุงเทพฯ ฮานอย <br/>
                            โฮจิมินห์ และดานัง
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mr-top-45 color-white">
                <div class="col-xs-8 col-xs-offset-2  text-center">
                    <p class="size-normal">
                        Address: Office 21 - Elite Office Co., Ltd.  /  2 Ploenchit Center, G Floor, Sukhumvit Road, Klongtoey, Bangkok<br/>
                        Email: native@topica.asia
                    </p>
                </div>
            </div>
        </footer>
        <script type="text/javascript">
            $('#nav-top').click(function (e) {
                e.preventDefault();
                var a_link = $(this).find('a');
                var offset = $(a_link.attr("href")).offset();
                $("html body").animate({scrollTop: offset.top + 95 + "px"}, 500);
            });
        </script>
    </body>
