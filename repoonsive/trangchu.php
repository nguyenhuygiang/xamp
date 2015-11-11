<?php
//get data
// $ref = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';
// $domain = isset($_SERVER[HTTP_HOST]) ? "http://$_SERVER[HTTP_HOST]" . $_SERVER["REQUEST_URI"] : '';
// $id = isset($_GET["id"]) ? $_GET["id"] : "";
// $preview = isset($_GET["preview"]) ? $_GET["preview"] : "-100";
// $code_chanel = isset($_GET["code_chanel"]) ? $_GET["code_chanel"] : "";
// $link = (!empty($id) && !empty($code_chanel)) ? '?id=' . $id . '&code_chanel=' . $code_chanel : '';
// require_once './mol_topmito/save_a1.php';
// $rand_site_number = rand(1, 2);
// if ($rand_site_number === 1) {
//     $rand_img = './images/crossUNI.jpg';
//     $rand_site = 'http://hou.tuyensinh.topica.edu.vn/?code=CRS.Native.HOU.CaNuoc.190315';
//     $rand_string = 'Đừng bỏ lỡ Chương trình Cử nhân trực tuyến chất lượng cao HOU-TOPICA. Click trang này để khám phá và nhận tư vấn miễn phí!';
// } else {
//     $rand_img = './images/MM0033.png';
//     $rand_site = 'http://memo.edu.vn/?code_chanel=CS0004&id_landingpage=2&id_campaign=1&id=25';
//     $rand_string = 'Đừng bỏ lỡ cơ hội để trở thành CHUYÊN GIA NGOẠI NGỮ một cách HOÀN TOÀN MIỄN PHÍ, click ở lại trang này để KHÁM PHÁ NGAY!';
// }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Topica Native</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="img/x-icon" href="./img/favicon.png" rel="shortcut icon">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/thanh-toan.css" rel="stylesheet" type="text/css"/>
        <script src="mol_topmito/js/jquery.min.js" type="text/javascript"></script>
        <script src="mol_topmito/js/jquery.form.js" type="text/javascript"></script>
        <!--<script src="mol_topmito/js/save_contact.js" type="text/javascript"></script>-->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-67536187-2', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <script src="js/main.js" type="text/javascript"></script>
    <body style="min-width: 1200px">
<!--        <button id="nav-top" class="btn btn-lg"><a style="padding-top: 30px;color: #810c15" href="./thanh-toan.php" class="nav color-white"><span class="fa fa-user" style="color:#810c15"></span>&nbsp;&nbsp;&nbsp;Đăng ký</a></button>-->
        <a style="padding-top: 30px;color: #810c15" href="./thanh-toan.php<?php echo $link; ?>" class="nav color-white">
<!--            <button id="nav-top" class="btn btn-lg" style=" border: 1px solid #810c15;"><span class="fa fa-user" style="color:#810c15"></span>&nbsp;&nbsp;&nbsp;Đăng ký</button>-->
        </a>
        <nav class="container">
            <div class="row">
                <div class="col-md-3 col-xs-4" style="margin-bottom: 10px;">
                    <a href="#"><img src="img/TOPICA NATIVE.png" alt="" class="full-width"/></a>
                </div>
                <div class="col-md-9 col-xs-8 col-xs-offset-0 text-right">
                    <ul class="row mr-0">
                        <li class="col-xs-4 bold size-normal text-center">
                            <span class="fa fa-phone"></span>&nbsp;&nbsp;Hotline: 0981.228.979
                        </li>
                        <li class="col-xs-5 bold size-normal text-center">
                            <span class="fa fa-envelope"></span>&nbsp;&nbsp;Email: topica.native@topica.edu.vn
                        </li>
                        <li class="col-xs-3 bold size-normal text-center text-right" style="padding-left: 26px;">
                            <!--                            <a target="_blank" href="https://www.facebook.com/TOPMITO.edu.vn?fref=ts">
                                                            <img src="img/fb.png" alt="" class="full-width"/>
                                                        </a>-->
                            <a target="_blank" href="https://www.facebook.com/TOPMITO.edu.vn" class="fb-link">
                                <!-- <span class="fa fa-facebook" style="padding:6px 6px 0 5px;
                                      background-color: #000;
                                      color: #fff;
                                      text-align: center;"></span>&nbsp Topica Native  -->
                                <span >
                                    <img src="img/facebook_fix.png" alt="" style="    vertical-align: top;"></span>&nbsp Topica Native 
                            </a>
                        </li>
                    </ul>
                    <!--                    <h4 class="size-normal bold color-red text-right">Chương trình tiếng Anh dành cho người từ 18 tuổi trở lên</h4>
                                        <div class="row">
                                            <a class="col-xs-1 col-md-1 col-xs-offset-11 col-md-offset-11 text-right" href="#"><img src="img/facebook29.png" alt="" class="full-width"/></a>
                                        </div>-->
                </div>
            </div>
            <!--            <div class="row" id="menu">
                            <div class="col-xs-offset-6 col-xs-offset-6 text-right">
                                <ul >
                                    <li class="col-xs-6"><a href="#" class="menu-a">ƯU ĐIỂM CỦA CHƯƠNG TRÌNH</a></li>
                                    <li class="col-xs-3 "><a href="#"class="menu-a active-menu">KHÓA HỌC</a></li>
                                    <li class="col-xs-3"><a href="#"class="menu-a">HỌC THỬ</a></li>
                                </ul>
                            </div>
                        </div>-->
        </nav>
        <div class="container-fluid" id="slide"style="position: relative; min-width:1200px">
            <div class="row">
                <img src="img/Shape 21 copy 2.png" alt="" class="full-width"/>
            </div>
        </div>
        <div class="container-fluid" >
            <div class="row"  style="background-color: #cacaca">
                <div class="container margin-30">
                    <div class="row">
                        <div class="col-md-9 col-md-offset-1">
                            <form id='i_form' role="form" role="1" class="" method="POST" data-action="./mol_topmito/save_a3.php" data_url="http://autosale.local.topicanative.edu.vn/contact_collection/add_save.html" action="#">
                                <!--Step 1-->
                                <?php
//                            echo "<input type='hidden' class='e_domain_ref' name='http_referer' value=" . $ref . ">";
//                            echo "<input type='hidden' name='domain' value=" . $domain . ">";
//                            echo "<input type='hidden' name='id_camp_landingpage' value=" . $id . ">";
//                            echo "<input type='hidden' name='preview' value=" . $preview . ">";
//                            echo "<input type='hidden' name='code_chanel' value=" . $code_chanel . ">";
                                ?>
                                <input type="hidden" class="" name="id">
                                <input type="hidden" class="" name="contact_id">
                                <section role="1" class="">
                                    <p class="title bg-red bold row " style="text-align: center;">ĐIỀN THÔNG TIN ĐĂNG KÍ NGAY</p>
                                    <div class="row detail" style="background-color: white">
                                        <div class="form-group col-xs-6">
                                            <label>Họ và tên:</label>

                                            <input type="text" class="form-control step1" name="name"  placeholder="Nguyen Van A">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label>Số điện thoại:</label>
                                            <input type="text" class="form-control step1" name="phone" placeholder="090 xxx xxxx">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label>Email:</label>
                                            <input type="email" class="form-control step1" name="email"  placeholder="example@gmail.com">
                                        </div>
                                        <div class="form-group col-xs-4" style="position: relative;">
                                            <label>Thời gian học thử:</label>
                                            <input type="text"  class="form-control step1" id="datepicker" name="date" style="padding-left: 35px;">
                                            <img src="./img/Layer 51.png" alt="" style="position: absolute; bottom: 5px; left: 20px; width: 25px;"/>
                                        </div>
                                        <div class="form-group col-xs-2" style="position: relative;">
                                            <label>&nbsp;&nbsp;</label>
                                            <input type="text"  class="form-control step1" id="timepicker" name="time"  style="padding-left: 35px;">
                                            <img src="./img/Layer 52.png" alt="" style="position: absolute; bottom: 5px; left: 20px; width: 25px;"/>
                                        </div>

                                        <div class="form-group col-xs-2">
                                            <label>Độ tuổi:</label>
                                            <select class="form-control step1" name="age">
                                                <option value="">---</option>
                                                <option value="18 - 24">18 - 24</option>
                                                <option value="25 - 34">25 - 34</option>
                                                <option value="35 - 44">35 - 44</option>
                                                <option value="45 - 54">45 - 54</option>
                                                <option value="55+">55+</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-xs-4">
                                            <label>Tự đánh giá trình độ:</label>
                                            <select class="form-control step1" name="level">
                                                <option value="">---</option>
                                                <option value="Chưa nghe nói được">Chưa nghe nói được</option>
                                                <option value="Nghe nói được chút ít">Nghe nói được chút ít</option>
                                                <option value="Nghe nói được ở mức khá">Nghe nói được ở mức khá</option>
                                                <option value="Nghe nói tốt">Nghe nói tốt</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label>Mục đích học tập:</label>
                                            <select class="form-control step1" name="purpose">
                                                <option value="">---</option>
                                                <option value="Đi du học">Đi du học</option>
                                                <option value="Phục vụ công việc">Phục vụ công việc</option>
                                                <option value="Du lịch nước ngoài">Du lịch nước ngoài</option>
                                                <option value="Dạy con">Dạy con</option>
                                                <option value="Học để không quên tiếng Anh">Học để không quên tiếng Anh</option>
                                                <option value="Học cho vui">Học cho vui</option>
                                                <option value="Chưa biết để làm gì">Chưa biết để làm gì</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-xs-4 col-xs-offset-4">
                                            <button class="btn bg-red btn-lg radius-35 full-width next e_submit">ĐĂNG KÍ HỌC THỬ</button>
                                        </div>
                                    </div>
                                </section>

                                <!--Step 2-->
                                <section role="2" class="hidden">
                                    <p class="title bg-red bold row">Đăng ký học thử</p>
                                    <div class="row detail">
                                        <div class="col-xs-6">
                                            <label>Họ và tên:</label>
                                            <p role="name" class="pd-left-30"></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Số điện thoại:</label>
                                            <p role="phone" class="pd-left-30"></p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-xs-6">
                                            <label>Email:</label>
                                            <p role="email" class="pd-left-30"></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Thời gian học thử:</label>
                                            <div class="row">
                                                <p role="date" class="pd-left-30 col-xs-4 text-left"></p>
                                                <p class="col-xs-1"> - </p>
                                                <p role="time" class="col-xs-4 text-left"></p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-xs-2">
                                            <label>Độ tuổi:</label>
                                            <p role="age" class="pd-left-30"></p>
                                        </div>
                                        <div class="col-xs-4">
                                            <label>Tự đánh giá trình độ:</label>
                                            <p role="level" class="pd-left-30"></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Mục đích học tập:</label>
                                            <div class="row">
                                                <p role="purpose" class="pd-left-30 text-left"></p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-xs-6">
                                            <label>Số tiền thanh toán:</label>
                                            <p role="money" class="pd-left-30">100.000 VNĐ</p>
                                        </div>
                                        <div class="col-xs-6">
                                            <label>&nbsp;</label>
                                            <a href="#" role="edit" class="back" style="padding: 10px 0px; color: #000;"><button class="btn radius-35"><i>Thay đổi thông tin</i></button></a>
                                        </div>
                                    </div>
                                    <p class="title bg-red bold row mr-top-30">Đăng ký học thử</p>
                                    <div class="detail row">
                                        <div class='payment_list'>
                                            <div id='select_payment'>
                                                <div class="method row-fluid" id="2">
                                                    <div class="icon"><img src="/images/creditcard.png" border="0"/></div>
                                                    <div class="info">
                                                        <span class="title">Thanh toán trực tuyến bằng thẻ quốc tế <!--<img src="http://autosale1.local.topicanative.edu.vn/images/safe.png" border="0" style="vertical-align: bottom; margin-left: 5px;" />--></span>

                                                        <div class="bank_list">
                                                            <ul id="b_l">
                                                                <?php echo $getMethodPayment->credit_card; ?>
                                                            </ul>
                                                            <div class="clr"></div>
                                                        </div>

                                                    </div>
                                                    <div class="check_box"></div>
                                                </div>
                                                <div class="row-fluid method" id="1">
                                                    <div class="icon"><img src="/images/atm.png" border="0"/></div>
                                                    <div class="info">
                                                        <span class="title">Thanh toán trực tuyến bằng thẻ ATM nội địa</span>
                                                        <span class="desc">Chọn ngân hàng thanh toán</span>
                                                        <div class="bank_list">
                                                            <ul id="b_l">
                                                                <?php echo $getMethodPayment->local_card; ?>
                                                            </ul>
                                                            <div class="clr"></div>
                                                        </div>
                                                    </div>
                                                    <div class="check_box"></div>
                                                </div>
                                                <input type="hidden" name="active_submit" value="submit"/>
                                                <input type="hidden" name="bank_payment_method_id" id="bank_payment_method_id" value=""/>
                                                <input type="hidden" name="shipping_address" size="30" value="Hà nội"/>
                                                <input type="hidden" name="payer_message" size="30" value="Ok"/>
                                                <input type="hidden" name="extra_fields_value" size="30" value=""/>
                                                <input type="hidden" name="extra_payment" id="extra_payment" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <i>Thông tin của bạn được bảo mật và chỉ được sử dụng hỗ trợ bạn trong quá trình học cùng TOPICA Native. Đọc thêm về <a href="#">điều khoản bảo mật</a></i>
                                        </div>
                                        <div class="col-xs-6">
                                            <button type="submit" id='i_btn_submit' class="btn bg-red btn-lg radius-35 full-width">Tiếp tục</button>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="color-red text-center size-lg bold mr-45">Giới thiệu chương trình TOPICA Native</h1>
        <div class="">
            <img src="img/banner_hook.jpg" alt="" class="full-width"/>
        </div>

        <div id="article" class="mr-top-45 border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <p class="size-supper-normal color-red bold text-justify">
                            LUYỆN NÓI TỐI ĐA 16 GIỜ MỖI NGÀY
                        </p>
                        <p class="text-justify">
                            Yếu tố quan trọng nhất giúp sử dụng tiếng Anh thuần thục là có
                            một môi trường luyện tập với người bản ngữ đều đặn, thường xuyên, 
                            điều mà hầu hết người Việt Nam đang thiếu hụt.
                            <br/><br/>
                            Áp dụng những công nghệ mới nhất, mỗi ngày, từ 8 giờ đến 24 giờ
                            các lớp học của TOPICA NATIVE được mở ra đều đặn, giúp học viên 
                            được luyện tập phản xạ giao tiếp với các giáo viên bản ngữ dù học 
                            ở bất cứ đâu.
                        </p>
                    </div>
                    <div class="col-xs-6">
                        <img src="img/chon1.png" alt="" class="full-width"/>
                    </div>
                </div>
                <div class="row mr-top-45">
                    <div class="col-xs-6">
                        <img src="img/chon3.png" alt="" class="full-width"/>
                    </div>
                    <div class="col-xs-6">
                        <p class="size-supper-normal color-red bold text-justify">
                            MỖI HỌC VIÊN CÓ MỘT GIÁO VIÊN 
                            HƯỚNG DẪN VÀ LỘ TRÌNH HỌC 
                            RIÊNG BIỆT
                        </p>
                        <p class="text-justify">
                            Bên cạnh các giáo viên bản ngữ trên lớp, mỗi học viên tại
                            TOPICA NATIVE luôn có một Giáo viên hướng dẫn đồng hành trong
                            suốt quá trình học tập và giúp xây dựng lộ trình học tập riêng biệt.
                            <br/><br/>
                            Giáo viên hướng dẫn sẽ phân tích lịch sử học tập, theo dõi quá trình 
                            học tập hàng ngày, dựa vào nhận xét của giáo viên bản ngữ và mục tiêu 
                            học tập của từng học viên để đưa ra lời khuyên chính xác cho việc học: 
                            Học viên cần học chính xác những bài học nào, luyện nói về chủ đề gì, 
                            học với thời lượng bao nhiêu mỗi ngày/tuần... để tiến bộ nhanh nhất 
                            và phù hợp với mục đích học.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="teacher" class="border-bottom">
            <div class="container">
                <h1 class="text-center color-red size-lg mr-top-30">100% GIÁO VIÊN BẢN NGỮ ĐẾN TỪ ÂU - MỸ - ÚC</h1>
                <div class="row mr-top-30">
                    <div class="col-xs-4 text-center">
                        <img src="img/teacher1.png" alt=""/>
                        <h4 class="text-center color-red">Guy Dickson</h4>
                        <h5 class="text-center">British</h5>
                        <p class="text-center">
                            Tôi có thể dạy học viên thuộc mọi cấp độ <br/>
                            và độ tuổi khác nhau
                        </p>
                    </div>
                    <div class="col-xs-4 text-center">
                        <img src="img/teacher2.png" alt=""/>
                        <h4 class="text-center color-red">David Devin</h4>
                        <h5 class="text-center">American</h5>
                        <p class="text-center">
                            Tôi tập trung nhiều nhất vào phần phát âm,<br/>
                            nhiều học viên đã tiến bộ rất nhanh <br/>
                            chỉ sau 1 tháng theo học
                        </p>
                    </div>
                    <div class="col-xs-4 text-center">
                        <img src="img/teacher3.png" alt=""/>
                        <h4 class="text-center color-red">Egbert Veltman</h4>
                        <h5 class="text-center">Holland</h5>
                        <p class="text-center">
                            Tôi yêu thích việc tạo cơ hội cho học viên<br/>
                            mở rộng kiến thức và bàn luận <br/>
                            về các chủ đề khác nhau
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="about" class="border-bottom text-center">
            <h1 class="text-center color-red size-lg mr-top-30">GIỚI THIỆU VỀ TOPICA</h1>
            <div class="container">
                <div class="row">
                    <iframe class="mr-top-20 col-xs-7"  height="400" src="http://www.youtube.com/embed/MGvtMjFHuF8" style="border: none;"></iframe>
                    <div class="col-xs-5 detail-video mr-45">
                        <p>Tổ hợp Công nghệ Giáo dục dẫn đầu Đông Nam Á</p>
                        <p>
                            Công nghệ tiên tiến, hiện đại
                        </p>
                        <p>
                            Hàng chục nghìn học viên khắp Đông Nam Á
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid mr-top-45 img-baochi" style="background: #ebebeb;">
                <div class="row">
                    <div class="container">
                        <a href="http://dantri.com.vn/giao-duc-khuyen-hoc/phuong-phap-moi-giup-nguoi-viet-noi-gioi-tieng-anh-983255.htm"><img src="img/dan-tri.png" alt=""/></a>
                        <a href="http://www.tienphong.vn/giao-duc/dai-dien-viet-nam-gioi-thieu-giao-duc-so-tai-hoi-nghi-kinh-te-toan-cau-2014-758748.tpo"><img src="img/tienphong.png" alt=""/></a>
                        <a href="http://vietnamnet.vn/vn/giao-duc/193058/tien-phong-day-manh-xu-huong-e-learning-o-viet-nam.html"><img src="img/vietnamnet.png" alt="" style="vertical-align: -17px;"/></a>
                        <a href="https://www.techinasia.com/founders-institute-vietnam-batch-three/"><img src="img/Techinasia.png" alt=""/></a>
                        <a href="http://www.forbes.com/sites/michaelhorn/2014/03/03/entrepreneurs-seek-to-transform-education-in-vietnam/"><img src="img/Forbes.png" alt=""/></a>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 80px;">
                <div class="col-xs-6">
                    <img style="  border-radius: 50%; height: 102px;  width: 102px; position: absolute;    top: -48px;
                         left: -33px;" src="img/baochi1.png">
                    <img src="img/dantri.png" style="width: 132px; position: absolute; top: -50px; left: 85px;">
                    <div style="background: #ebebeb; padding: 15px;">
                        <p class="color-red" style="font-size: 20px; padding-left: 50px;">
                            Bí quyết nói tiếng Anh như tiếng mẹ đẻ
                            của CEO Việt
                        </p>
                        <p class="text-justify">
                            Phải làm việc với các đối tác nước ngoài, dù nói tiếng Anh
                            tốt nhưng chị Phương Anh vẫn chưa hài lòng do chưa đạt
                            tới sự nhuần nhuyễn như người bản xứ. Chương trình 
                            “Buffet tiếng Anh" ở Tổ hợp công nghệ giáo dục TOPICA
                            là phương pháp mới giúp chị hạ quyết tâm học tập.
                        </p>
                        <p class="text-right" id="popup_1"><a href="http://dantri.com.vn/giao-duc-khuyen-hoc/bi-quyet-noi-tieng-anh-nhu-tieng-me-de-cua-ceo-viet-1423245139.htm" class="color-red" target="_blank">&gt;&gt; Đọc thêm</a></p>
                    </div>
                </div>
                <div class="col-xs-6">
                    <img style="  border-radius: 50%; height: 102px;  width: 102px; position: absolute;    top: -48px;
                         right: -33px;" src="img/baochi2.png">
                    <img src="img/Capture.png" style="width: 132px; position: absolute; top: -50px; right: 85px;">
                    <div style="background: #ebebeb; padding: 15px;">
                        <p class="color-red text-justify" style="font-size: 20px; padding-right: 50px;">
                            Dùng công nghệ kính Google Glass 
                            để luyện nói tiếng Anh
                        </p>
                        <p class="text-justify">
                            Lần đầu tiên siêu phẩm Google Glass được sử dụng để 
                            luyện nói tiếng Anh cho người Việt và được nhà phát triển
                            kỳ vọng sẽ tạo nên bước tiến mới trong ứng dụng 
                            công nghệ vào giáo dục.
                        </p>
                        <p class="text-right" id="popup_1"><a href="http://sohoa.vnexpress.net/tin-tuc/san-pham/khac/dung-cong-nghe-kinh-google-glass-de-luyen-noi-tieng-anh-2961997.html" class="color-red" target="_blank">&gt;&gt; Đọc thêm</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="3-steps" class="container text-center" style="position: relative;">
            <h1 class="text-center color-red size-lg mr-top-30">3 BƯỚC ĐỂ HỌC THỬ CÙNG TOPICA NATIVE</h1>
            <img src="img/Button.png" alt="" class="mr-top-30 full-width"/>

            <!--            <a class=" btn-dk btn-dk-a" style="position: absolute;
                           bottom: 0;
                           left: 431px;
                           padding: 4px 29px 0 29px;outline: none;" href="./thanh-toan.php">
            
                            ĐĂNG KÝ HỌC THỬ
                        </a>-->

            <!--            <button class="btn btn-lg bg-red size-lg mr-top-20" style="border-radius: 35px;"><a href="./thanh-toan.php" class="color-white" style="padding: 19px 0px;">Đăng ký học thử</a></button>-->
        </div>
        <div class="container margin-30">
            <div class="row">
                <div class="col-md-9 col-md-offset-1">
                    <form id='i_form' role="form" role="1" class="" method="POST" data-action="./mol_topmito/save_a3.php" data_url="http://autosale.local.topicanative.edu.vn/contact_collection/add_save.html" action="#">
                        <!--Step 1-->
                        <?php
//                            echo "<input type='hidden' class='e_domain_ref' name='http_referer' value=" . $ref . ">";
//                            echo "<input type='hidden' name='domain' value=" . $domain . ">";
//                            echo "<input type='hidden' name='id_camp_landingpage' value=" . $id . ">";
//                            echo "<input type='hidden' name='preview' value=" . $preview . ">";
//                            echo "<input type='hidden' name='code_chanel' value=" . $code_chanel . ">";
                        ?>
                        <input type="hidden" class="" name="id">
                        <input type="hidden" class="" name="contact_id">
                        <section role="1" class="">
                            <p class="title bg-red bold row " style="text-align: center">ĐIỀN THÔNG TIN ĐĂNG KÍ NGAY</p>
                            <div class="row detail" style="background-color: white">
                                <div class="form-group col-xs-6">
                                    <label>Họ và tên:</label>

                                    <input type="text" class="form-control step1" name="name"  placeholder="Nguyen Van A">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Số điện thoại:</label>
                                    <input type="text" class="form-control step1" name="phone" placeholder="090 xxx xxxx">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Email:</label>
                                    <input type="email" class="form-control step1" name="email"  placeholder="example@gmail.com">
                                </div>
                                <div class="form-group col-xs-4" style="position: relative;">
                                    <label>Thời gian học thử:</label>
                                    <input type="text"  class="form-control step1" id="datepicker" name="date" style="padding-left: 35px;">
                                    <img src="./img/Layer 51.png" alt="" style="position: absolute; bottom: 5px; left: 20px; width: 25px;"/>
                                </div>
                                <div class="form-group col-xs-2" style="position: relative;">
                                    <label>&nbsp;&nbsp;</label>
                                    <input type="text"  class="form-control step1" id="timepicker" name="time"  style="padding-left: 35px;">
                                    <img src="./img/Layer 52.png" alt="" style="position: absolute; bottom: 5px; left: 20px; width: 25px;"/>
                                </div>

                                <div class="form-group col-xs-2">
                                    <label>Độ tuổi:</label>
                                    <select class="form-control step1" name="age">
                                        <option value="">---</option>
                                        <option value="18 - 24">18 - 24</option>
                                        <option value="25 - 34">25 - 34</option>
                                        <option value="35 - 44">35 - 44</option>
                                        <option value="45 - 54">45 - 54</option>
                                        <option value="55+">55+</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-4">
                                    <label>Tự đánh giá trình độ:</label>
                                    <select class="form-control step1" name="level">
                                        <option value="">---</option>
                                        <option value="Chưa nghe nói được">Chưa nghe nói được</option>
                                        <option value="Nghe nói được chút ít">Nghe nói được chút ít</option>
                                        <option value="Nghe nói được ở mức khá">Nghe nói được ở mức khá</option>
                                        <option value="Nghe nói tốt">Nghe nói tốt</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Mục đích học tập:</label>
                                    <select class="form-control step1" name="purpose">
                                        <option value="">---</option>
                                        <option value="Đi du học">Đi du học</option>
                                        <option value="Phục vụ công việc">Phục vụ công việc</option>
                                        <option value="Du lịch nước ngoài">Du lịch nước ngoài</option>
                                        <option value="Dạy con">Dạy con</option>
                                        <option value="Học để không quên tiếng Anh">Học để không quên tiếng Anh</option>
                                        <option value="Học cho vui">Học cho vui</option>
                                        <option value="Chưa biết để làm gì">Chưa biết để làm gì</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-4 col-xs-offset-4">
                                    <button class="btn bg-red btn-lg radius-35 full-width next e_submit">ĐĂNG KÍ HỌC THỬ</button>
                                </div>
                            </div>
                        </section>

                        <!--Step 2-->
                        <section role="2" class="hidden">
                            <p class="title bg-red bold row center">ĐIỀN THÔNG TIN ĐĂNG KÍ NGAY</p>
                            <div class="row detail">
                                <div class="col-xs-6">
                                    <label>Họ và tên:</label>
                                    <p role="name" class="pd-left-30"></p>
                                </div>
                                <div class="col-xs-6">
                                    <label>Số điện thoại:</label>
                                    <p role="phone" class="pd-left-30"></p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-6">
                                    <label>Email:</label>
                                    <p role="email" class="pd-left-30"></p>
                                </div>
                                <div class="col-xs-6">
                                    <label>Thời gian học thử:</label>
                                    <div class="row">
                                        <p role="date" class="pd-left-30 col-xs-4 text-left"></p>
                                        <p class="col-xs-1"> - </p>
                                        <p role="time" class="col-xs-4 text-left"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-2">
                                    <label>Độ tuổi:</label>
                                    <p role="age" class="pd-left-30"></p>
                                </div>
                                <div class="col-xs-4">
                                    <label>Tự đánh giá trình độ:</label>
                                    <p role="level" class="pd-left-30"></p>
                                </div>
                                <div class="col-xs-6">
                                    <label>Mục đích học tập:</label>
                                    <div class="row">
                                        <p role="purpose" class="pd-left-30 text-left"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-6">
                                    <label>Số tiền thanh toán:</label>
                                    <p role="money" class="pd-left-30">100.000 VNĐ</p>
                                </div>
                                <div class="col-xs-6">
                                    <label>&nbsp;</label>
                                    <a href="#" role="edit" class="back" style="padding: 10px 0px; color: #000;"><button class="btn radius-35"><i>Thay đổi thông tin</i></button></a>
                                </div>
                            </div>
                            <p class="title bg-red bold row mr-top-30">Đăng ký học thử</p>
                            <div class="detail row">
                                <div class='payment_list'>
                                    <div id='select_payment'>
                                        <div class="method row-fluid" id="2">
                                            <div class="icon"><img src="/images/creditcard.png" border="0"/></div>
                                            <div class="info">
                                                <span class="title">Thanh toán trực tuyến bằng thẻ quốc tế <!--<img src="http://autosale1.local.topicanative.edu.vn/images/safe.png" border="0" style="vertical-align: bottom; margin-left: 5px;" />--></span>

                                                <div class="bank_list">
                                                    <ul id="b_l">
                                                        <?php echo $getMethodPayment->credit_card; ?>
                                                    </ul>
                                                    <div class="clr"></div>
                                                </div>

                                            </div>
                                            <div class="check_box"></div>
                                        </div>
                                        <div class="row-fluid method" id="1">
                                            <div class="icon"><img src="/images/atm.png" border="0"/></div>
                                            <div class="info">
                                                <span class="title">Thanh toán trực tuyến bằng thẻ ATM nội địa</span>
                                                <span class="desc">Chọn ngân hàng thanh toán</span>
                                                <div class="bank_list">
                                                    <ul id="b_l">
                                                        <?php echo $getMethodPayment->local_card; ?>
                                                    </ul>
                                                    <div class="clr"></div>
                                                </div>
                                            </div>
                                            <div class="check_box"></div>
                                        </div>
                                        <input type="hidden" name="active_submit" value="submit"/>
                                        <input type="hidden" name="bank_payment_method_id" id="bank_payment_method_id" value=""/>
                                        <input type="hidden" name="shipping_address" size="30" value="Hà nội"/>
                                        <input type="hidden" name="payer_message" size="30" value="Ok"/>
                                        <input type="hidden" name="extra_fields_value" size="30" value=""/>
                                        <input type="hidden" name="extra_payment" id="extra_payment" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <i>Thông tin của bạn được bảo mật và chỉ được sử dụng hỗ trợ bạn trong quá trình học cùng TOPICA Native. Đọc thêm về <a href="#">điều khoản bảo mật</a></i>
                                </div>
                                <div class="col-xs-6">
                                    <button type="submit" id='i_btn_submit' class="btn bg-red btn-lg radius-35 full-width">Tiếp tục</button>
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
        <footer class="container-fluid mr-top-30">
            <div class="row">
                <div class="container">
                    <div class="row mr-top-20">
                        <div class="col-xs-4">
                            <img src="img/logo.png" alt="" style="width: 100%;"/>
                        </div>
                        <div class="col-xs-8">
                            <p class="line-2">
                                Topica Native thuộc Tổ hợp Công nghệ Giáo dục TOPICA, đơn vị đào tạo trực tuyến hàng đầu Đông Nam Á,
                                cung cấp các khoá luyện nói tiếng Anh với giáo viên bản ngữ từ Âu - Mỹ - Úc, đồng thời là nơi đầu tiên 
                                trên thế giới triển khai ứng dụng luyện nói qua Google Glass.<br/>
                                Đội ngũ TOPICA hiện có hơn 500 nhân viên, 1.400 giảng viên tại các văn phòng Manila, Singapore, 
                                Bangkok, Hà Nội, TP.HCM và Đà Nẵng.
                            </p>
                            <div class="row mr-top-30">
                                <p class="col-xs-6">
                                    TOPICA Thailand: 2 Ploenchit Center, Bangkok<br/>
                                    TOPICA Singapore: One Raffles Place Tower One 048616
                                </p>
                                <p class="col-xs-6">
                                    TOPICA Philippines: Quezon City, 1109 Philippines<br/>
                                    TOPICA Vietnam: 75 Phuong Mai, Dong Da, Hanoi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mr-top-20" style="background: #000; padding-top: 10px; padding-bottom: 10px;">
                <div class="col-xs-4 text-right color-white size-normal">Hotline: 0981 228 979</div>
                <div class="col-xs-4 text-center color-white size-normal">Email: topica.native@topica.edu.vn</div>
                <div class="col-xs-4 color-white size-normal">Skype: topicanative</div>
            </div>
        </footer>
    </body>
</html>
