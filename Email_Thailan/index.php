<?php
//get data
$ref = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';
$domain = isset($_SERVER[HTTP_HOST]) ? "http://$_SERVER[HTTP_HOST]" . $_SERVER["REQUEST_URI"] : '';
$id = isset($_GET["id"]) ? $_GET["id"] : "-100";
$preview = isset($_GET["preview"]) ? $_GET["preview"] : "-100";
$code_chanel = isset($_GET["code_chanel"]) ? $_GET["code_chanel"] : "-100";

require_once './mol_topmito/save_c2.php';
?>



<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Đặt hàng tạo Landing Page CNTT cho team SA100 - TBR</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="./mol_topmito/js/jquery.min.js" type="text/javascript"></script>
        <script src="./mol_topmito/js/jquery.form.js" type="text/javascript"></script>
        <script src="./mol_topmito/js/jquery.bpopup.min.js" type="text/javascript"></script>
        <script src="./mol_topmito/js/save_contact.js" type="text/javascript"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <section id="ung-tuyen" class="one">
            <nav style="width:100%" class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1 class="navbar-brand"><a href=""><img src="images/logo.png" alt=""></a></h1>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a class="c_two" href="#cac-vi-tri-dang-can-tuyen">Các vị trí đang tuyển</a></li>
                            <li><a class="c_three" href="#che-do-dai-ngo">Chế độ đãi ngộ - Quyền lợi</a></li>
                            <li><a class="c_four" href="#bao-chi-noi-ve-topica">Báo chí nói về TOPICA</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
            <form class="col-md-3 col-md-push-8 col-sm-8 col-sm-push-2 col-xs-10 col-xs-push-1" id='dang-ky' class="e_submit e_form_submit" method="post" action="./mol_topmito/save_c3.php">
                <h3>Thông tin ứng tuyển</h3>
                <input style="background:transparent;color:#fff;" class="form-control" id="lastname" type="text"  name="name" value="" placeholder="Họ & tên">
                <input style="background:transparent;color:#fff;" class="form-control" id="email"  type="email" name="email" value="" placeholder="Email">
                <input style="background:transparent;color:#fff;" class="form-control" type="text"  name="phone" value=""id="phone" onkeyup="return check_sdt(this)" placeholder="Số điện thoại">
                <select style="background:transparent;color:#000;" class="form-control" name="position" id="position">
                    <option value="0">Vị trí ứng tuyển</option>
                    <option value="1">Lập trình viên PHP</option>
                    <option value="2">Kĩ sư hệ thống</option>
                    <option value="3">Lập trình viên Java</option>
                </select>
                <input type="file" class="hidden" name="cv" accept=".doc,.docx,.pdf" id="attach_cv" autocomplete="off" style="border-radius: 5px; border: none; padding-left: 15px;">
                <input style="background:transparent;color:#fff;" type="button" value="Đính kèm hồ sơ" class="btn btn-default e_attach_cv" style="color: #810c15;padding: 6px 10px;">
                <a style=" padding: 6px 0px 6px 10px; font-style: italic;color: #fff;" href="http://cntt.topica.edu.vn/data_cv/Mau ho so ung tuyen.doc">Hồ sơ tham khảo</a>
                <!-- <div style="margin-top:10px;" class="col-md-12">
                        Giới tính: 
                            <label class="radio-inline">
                                <input type="radio" name="sex" id="inlineRadio1" value="nam"> Nam
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="sex" id="inlineRadio2" value="nữ"> Nữ
                            </label>
                </div> -->
                <br><br>
                <div class="col-md-12 text-center">
                    <button style="background:transparent;color:#fff;padding:8px 50px;font-weight: bold;" class="btn btn-default">ỨNG TUYỂN</button>
                </div>
                <?php
                echo "<INPUT TYPE='hidden' class='e_domain_ref' NAME='http_referer' VALUE=" . $ref . ">";
                echo "<INPUT TYPE='hidden' NAME='domain' VALUE=" . $domain . ">";
                echo "<INPUT TYPE='hidden' NAME='id_camp_landingpage' VALUE=" . $id . ">";
                echo "<INPUT TYPE='hidden' NAME='preview' VALUE=" . $preview . ">";
                echo "<INPUT TYPE='hidden' NAME='code_chanel' VALUE=" . $code_chanel . ">";
                ?>
                <div style="margin-top:10px;" class="col-md-12">
                    <i class="fa fa-phone"></i> 
                    <b>Hotline:(04) 62 532 081</b>
                </div>
                <div class="col-md-12">
                    <i class="fa fa-envelope"></i> 
                    <b>Email: tuyendung@topica.asia</b>
                </div>
            </form>
        </section>
        <section id="cac-vi-tri-dang-can-tuyen" class="two">
            <div class="container">
                <span class="col-md-4 col-sm-3"></span>
                <h3 class="title col-md-4 col-sm-6 text-center">Các vị trí đang tuyển</h3>
                <span class="col-md-4 col-sm-3"></span>
            </div>
            <main class="container text-center">
                <div class="col-md-6 hidden-sm hidden-xs"></div>
                <input checked id="s_tab-1" type="radio" name="radio-set" class="s_tab-selector-1" />
                <label for="s_tab-1" class="s_tab-label-1">Lập trình viên PHP</label>
                <input id="s_tab-2" type="radio" name="radio-set" class="s_tab-selector-2" />
                <label for="s_tab-2" class="s_tab-label-2">Kĩ sư hệ thống</label>
                <input id="s_tab-3" type="radio" name="radio-set" class="s_tab-selector-3" />
                <label for="s_tab-3" class="s_tab-label-3">Lập trình viên Java</label>
                <div class="content">
                    <style>
                        .content b{font-size: 17px;}
                    </style>
                    <div class="content-1">
                        <!-- <div class="col-md-6 hidden text-center hidden-xs">
                                <img src="images/php.jpg" alt="">
                        </div> -->
                        <div class="col-md-6 col-md-push-6 text-left">
                            <b>Mô tả công việc: </b><br/>
                            - Lập trình phát triển module/sản phẩm mới cho hệ thống đào tạo trực tuyến<br/>
                            - Triển khai module/sản phẩm mới ngay khi phát triển xong cho học viên<br/>
                            - Chủ động trong việc thiết kế thuật toán lập trình<br/>
                            - Tiếp nhận, phân tích yêu cầu, phân tích usercase, tư vấn và thiết kế giải pháp<br/>
                            - Xây dựng kế hoạch phát triển sản phẩm thay đổi hành vi học tập của học viên<br/>
                            - Xây dựng hệ thống đào tạo cho các học viên ở Thailand, Indonesia<br/>
                            - Ứng dụng các công nghệ mới vào đào tạo trực tuyến<br/>
                            - Xây dựng các công cụ tự động hóa cho enduser<br/><br/>
                            <b>Yêu cầu: </b><br/>
                            - Tuổi dưới 30<br/>
                            - Ít nhất 01 năm kinh nghiệm làm việc<br/>
                            - Sử dụng thành thạo PHP, Mysql<br/><br/>
                            <b>Ưu tiên: </b><br/>
                            - Có chứng chỉ Aptech/ NIIT<br/>
                            - Sử dụng quy trình phát triển phần mềm RUP, Agile<br/>
                            - Sử dụng các mô hình lập trình (MVC, Singleton, Builder, AbstractFactory...<br/>
                            - Thiết kết CSDL và áp dụng theo các mô hình chuẩn BCNF, NF3, NF2,<br/>
                            - Sử dụng các phần mềm dùng để control source code (svn, git,…)<br/>
                            <button style="margin-right:30px;" class="btn btn-danger btn-md navbar-right">ỨNG TUYỂN</button>
                        </div>
                    </div>
                    <div class="content-2">
                        <!-- <div class="col-md-6 text-center hidden-xs">
                                <img src="images/kslt.jpg" alt="">
                        </div> -->
                        <div class="col-md-6 col-md-push-6 text-left">
                            <b>Mô tả công việc: </b><br/>
                            - Thiết kế, vận hành và bảo trì hạ tầng vật lý (máy chủ, máy trạm, router) để đảm bảo vận hành hệ thống Chương trình Tiếng Anh TOPICA NATIVE phục vụ học viên, giảng viên ở đa Quốc Gia (Việt Nam, Thailand, Singapore, Âu, Úc, Mỹ...)<br/>
                            - Vận hành và bảo trì hệ thống máy chủ DEV, mạng nội bộ Trung Tâm kỹ thuật.<br/>
                            - Phát triển các dự án liên quan đến đào tạo trực tuyến.<br/>
                            - Phát triển các dự án nhằm tối ưu, nâng cao hiệu suất của TOPICA.<br/>
                            - Cùng làm việc trực tiếp với Khách hàng để nắm yêu cầu.<br/>
                            - Phối hợp với khách hàng để triển khai các hệ thống phần mềm.<br/>
                            - Đảm bảo KPIs theo kế hoạch.<br/><br/>
                            <b>Yêu cầu: </b><br/>
                            - Tuổi dưới 30<br/>
                            - Ít nhất 01 năm kinh nghiệm làm việc<br/>
                            - Chuyên về Network<br/><br/>
                            <b>Ưu tiên: </b><br/>
                            - Có chứng chỉ Aptech/ NIIT<br/>
                            - Có kinh nghiệm làm và sử dụng Linux (Cài đặt, cấu hình, phân tích log)<br/>
                            - Có kiến thức MCSA, CCNA (Không bắt buộc)<br/>
                            - Có kiến thức mạng layerbar, IP/TCP, mô hình OSI, <br/>
                            - Đã làm việc việc với router, switch của CISCO, firewall<br/>
                            <button style="margin-right:30px;" class="btn btn-danger btn-md navbar-right">ỨNG TUYỂN</button>
                        </div>
                    </div>
                    <div class="content-3">
                        <!-- <div class="col-md-6 text-center hidden-xs">
                                <img src="images/java8.jpg" alt="">
                        </div> -->
                        <div class="col-md-6 col-md-push-6 text-left">
                            <b>Mô tả công việc: </b><br/>
                            - Tham gia xây dựng các hệ thống học tập trực tuyến.<br/>
                            - Cùng quản lý làm việc trực tiếp với khách hàng để nắm bắt yêu cầu.<br/>
                            - Phối hợp với khách hàng để triển khai và kiểm thử hệ thống phần mềm<br/>
                            - Phát triển các dự án liên quan đến đào tạo trực tuyến.<br/>
                            - Phát triển các dự án nhằm tối ưu, nâng cao hiệu suất của TOPICA.<br/>
                            - Cùng làm việc trực tiếp với Khách hàng để nắm yêu cầu.<br/>
                            - Phối hợp với khách hàng để triển khai các hệ thống phần mềm.<br/>
                            - Nghiên cứu áp dụng các công nghệ mới vào đào tạo trực tuyến như là nghiên cứu về Big<br/>
                            - Data và Dataminning vào Adaptive Learning.<br/><br/>
                            <b>Yêu cầu: </b><br/>
                            - Tuổi dưới 30<br/>
                            - Ít nhất 01 năm kinh nghiệm làm việc<br/>
                            - Chuyên về Java (Java Core, J2ME, Java Base ,...)<br/><br/>
                            <b>Ưu tiên: </b><br/>
                            - Có chứng chỉ Aptech/ NIIT<br/>
                            - Red5, Freeswitch, Javascript framework như Jquery, Mootools<br/>
                            - Sử dụng quy trình phát triển phần mềm RUP, Agile<br/>
                            - Sử dụng các mô hình lập trình (MVC, Singleton, Builder, AbstractFactory,…)<br/>
                            - Thiết kết CSDL và áp dụng theo các mô hình chuẩn BCNF, NF3, NF2<br/>
                            <button style="margin-right:30px;" class="btn btn-danger btn-md navbar-right">ỨNG TUYỂN</button>
                        </div>
                    </div>
                </div>
            </main>
        </section>
        <style>
            .three img{max-height: 130px;width: 80%;height: 80%;}
            .three main div{padding-top: 0px;}
        </style>
        <section id="che-do-dai-ngo" class="three">
            <div class="container-fluid">
                <span class="col-md-4 col-sm-3"></span>
                <h3 class="title col-md-4 col-sm-6 text-center">Chế độ đãi ngộ - Quyền lợi</h3>
                <span class="col-md-4 col-sm-3"></span>
            </div>
            <main class="container-fluid">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="images/che-do-1.png" alt="">
                    <p><b>Lương theo năng lực, thưởng nóng liên tục</b></p>
                    <p>Thưởng năng suất, thưởng sáng kiến, thưởng khi nghĩ ra cách thưởng mới</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="images/cdđn2.jpg" alt="">
                    <p><b>Đi làm vui như đi chơi, đi chơi lại muốn đi làm</b></p>
                    <p>Xả stress với Topica Crazy Time, chia sẻ  tâm sự qua bài hát với Topica Show, phục vụ từ A-Z với dịch vụ 1 cửa thần tốc</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="images/cdđn3.jpg" alt="">
                    <p><b>Tham gia hoạt động nội bộ gắn kết các TOPICAN </b></p>
                    <p>Giải bóng đá TOPICA, Trung thu với TOPICA, phi tiêu lãnh đạo với Thank God It's Friday</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="images/ql1.jpg" alt="">
                    <p><b>Developer - Ngôi sao của TOPICA</b></p>
                    <p>Là ngôi sao của mỗi dự án. Rứt ruột đẻ ra sản phẩm, được nhận là của mình chứ không bị khách hàng outsourcing cấm đoán.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="images/ql2.jpg" alt="">
                    <p><b>Thỏa sức sáng tạo với Seminars, Hackathons, Showcases</b></p>
                    <p>Tech Seminar hàng tháng, Hackathon hàng quý, Startup Founder Showcase hàng năm với hàng chục nhà đầu tư trong ngoài nước và các Startup hàng đầu. </p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="images/ql3.jpg" alt="">
                    <p><b>Thể thao, thư giãn, Flashmob với 600 chị em</b></p>
                    <p>E-Sports, Fussball, Bóng bàn, Phi tiêu, Gym. Flashmob với 600 chị em hàng ngày. Quần sóc dép lê, miễn là không lượn qua khu tiếp khách.</p>
                </div>
            </main>
        </section>
        <section id="bao-chi-noi-ve-topica" class="four">
            <div class="container-fluid">
                <span class="col-md-4 col-sm-3"></span>
                <h3 class="title col-md-4 col-sm-6 text-center">Báo chí nói về TOPICA</h3>
                <span class="col-md-4 col-sm-3"></span>
            </div>
            <ul class="container-fluid">
                <li class="col-md-2 col-xs-4"><a href="http://www.forbes.com/sites/michaelhorn/2014/03/03/entrepreneurs-seek-to-transform-education-in-vietnam/"><img src="images/forbes.png" alt=""></a></li>
                <li class="col-md-2 col-xs-4"><a href="https://www.techinasia.com/founders-institute-vietnam-batch-three/"><img src="images/techinasia.png" alt=""></a></li>
                <li class="col-md-2 col-xs-4"><a href="http://kinhdoanh.vnexpress.net/tin-tuc/doanh-nghiep/doanh-nghiep-viet/topica-xuat-khau-cong-nghe-dao-tao-ra-the-gioi-3015964.html"><img src="images/vnexpress.png" alt=""></a></li>
                <li class="col-md-2 col-xs-4"><a href="http://dantri.com.vn/tin-tuyen-sinh/giang-vien-doanh-nhan-e-learning-thay-nghiem-moi-co-tro-gioi-20151019095623176.htm"><img src="images/dantri.png" alt=""></a></li>
                <li class="col-md-2 col-xs-4"><a href="http://vietnamnet.vn/vn/giao-duc/193058/tien-phong-day-manh-xu-huong-e-learning-o-viet-nam.html"><img src="images/vietnamnet.png" alt=""></a></li>
                <li class="col-md-2 col-xs-4"><a href="http://e27.co/meet-the-graduating-startups-of-topica-founder-institutes-3rd-cohort-20141117/"><img src="images/tienphong.png" alt=""></a></li>
            </ul>
            <main class="container-fluid">
                <div style="padding-top:40px;" class="col-md-6 col-xs-12">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/Y7opdOAaNjw" frameborder="0" allowfullscreen></iframe>
                </div>
                <div style="padding-top:20px;" class="col-md-6 col-xs-12">
                    <h3>Truyền thông nói về chúng tôi</h3>
                    <p><a target="_blank" href="https://www.youtube.com/watch?v=r9-ZqxH0DQo"><strong>VTV1 Thời sự: </strong>E-learning TOPICA tỏa sáng tại Hội nghị Kinh tế toàn cầu GES 2014</a></p>
                    <p><a target="_blank" href="https://www.youtube.com/watch?v=eHEuOSZMLk4"><strong>Thông tấn xã VN: </strong>Giảng viên TOPICA - Người thầy không đứng trên bục giảng</a></p>
                    <p><a target="_blank" href="https://www.youtube.com/watch?v=BHohwCopf8I"><strong>Đài truyền hình Hà Nội: </strong>Phương pháp đào tạo Cử nhân trực tuyến TOPICA</a></p>
                    <p><a target="_blank" href="http://vietnamnet.vn/vn/giao-duc/193058/tien-phong-day-manh-xu-huong-e-learning-o-viet-nam.html"><strong>Vietnamnet: </strong>TOPICA tiên phong đẩy mạnh xu hướng E-learning ở Việt Nam</a></p>
                    <p><a target="_blank" href="http://vietnamnet.vn/vn/giao-duc/182010/lan-dau-viet-nam--xuat-khau--cong-nghe-dao-tao.html"><strong>Vietnamnet: </strong>Lần đầu Việt Nam `xuất khẩu` công nghệ đào tạo</a></p>
                    <p><a target="_blank" href="http://vnexpress.net/tin-tuc/giao-duc/pho-thu-tuong-giang-bai-truc-tuyen-2178654.html"><strong>VNExpress: </strong>Phó thủ tướng Nguyễn Thiện Nhân tham gia giảng bài trực tuyến</a></p>
                </div>
            </main>
            <footer style="margin-top:60px;font-size:18px;padding:5px;border:1px solid #810c15;background:#810c15;" class="container-fluid text-center">
                <p>Trụ sở chính: Tầng 3, Số 75 Phương Mai, Phường Phương Mai, Quận Đống Đa, Hà Nội</p>
                <p>Hotline:(04) 62 532 081 - Email: tuyendung@topica.asia</p>
            </footer>
        </section>
        <ul class="control">
            <li><a class="c_one active" title="Ứng tuyển" href="#ung-tuyen"></a></li>
            <li><a class="c_two" href="#cac-vi-tri-dang-can-tuyen"></a></li>
            <li><a class="c_three" href="#che-do-dai-ngo"></a></li>
            <li><a class="c_four" href="#bao-chi-noi-ve-topica"></a></li>
        </ul>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
                    $(document).ready(function () {

                        var h = $(window).height();
                        var h_c = $('.control').height();
                        $('section').css('height', h);
                        $('.control').css('top', (h - h_c) / 2);
                        $('.content button').click(function (event) {
                            $('.active').removeClass('active');
                            $('.control li a').eq(0).addClass('active');
                            $('body').stop().animate({scrollTop: 0}, '3500');
                            $(jQuery.browser.mozilla ? "html" : "body").stop().animate({scrollTop: 0}, '3500');
                            return false;
                        });
                        document.onmousewheel = function (e) {
                            var index = $(window).scrollTop() / h;
                            if (e.deltaY < 0) {
                                if (true) {
                                    $('.active').removeClass('active');
                                    $('.control li a').eq(index - 1).addClass('active');
                                    $('body').stop().animate({scrollTop: (index - 1) * h}, '3500');
                                    $(jQuery.browser.mozilla ? "html" : "body").stop().animate({scrollTop: (index - 1) * h}, '3500');
                                }
                            } else {
                                if (true) {
                                    $('.active').removeClass('active');
                                    $('.control li a').eq(index + 1).addClass('active');
                                    $('body').stop().animate({scrollTop: (index + 1) * h}, '3500');
                                    $(jQuery.browser.mozilla ? "html" : "body").stop().animate({scrollTop: (index + 1) * h}, '3500');
                                }
                            }
                            return false;
                        }
                        $('.c_one').click(function (event) {
                            $('.active').removeClass('active');
                            $('.control li a').eq(0).addClass('active');
                            $('body').stop().animate({scrollTop: 0}, '3500');
                            $(jQuery.browser.mozilla ? "html" : "body").stop().animate({scrollTop: 0}, '3500');
                            return false;
                        });
                        $('.c_two').click(function (event) {
                            $('.active').removeClass('active');
                            $('.control li a').eq(1).addClass('active');
                            $('body').stop().animate({scrollTop: h}, '3500');
                            $(jQuery.browser.mozilla ? "html" : "body").stop().animate({scrollTop: 0}, '3500');
                            return false;
                        });
                        $('.c_four').click(function (event) {
                            $('.active').removeClass('active');
                            $('.control li a').eq(3).addClass('active');
                            $('body').stop().animate({scrollTop: 3 * h}, '3500');
                            $(jQuery.browser.mozilla ? "html" : "body").stop().animate({scrollTop: 3 * h}, '3500');
                            return false;
                        });
                        $('.c_three').click(function (event) {
                            $('.active').removeClass('active');
                            $('.control li a').eq(2).addClass('active');
                            $('body').stop().animate({scrollTop: 2 * h}, '3500');
                            $(jQuery.browser.mozilla ? "html" : "body").stop().animate({scrollTop: 2 * h}, '3500');
                            return false;
                        });
                    });
        </script>
        <!-- Bootstrap JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>