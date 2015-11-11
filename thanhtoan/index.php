<!DOCTYPE html>
<html>
    <head>
        <title>Luyện nói thỏa thích - TOPICA NATIVE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/baokim.css" rel="stylesheet" type="text/css"/>
        <link href="css/thanh-toan.css" rel="stylesheet" type="text/css"/>
        <link type="img/x-icon" href="./img/favicon.png" rel="shortcut icon">
        <script src="mol_topmito/js/jquery.min.js" type="text/javascript"></script>
        <script src="mol_topmito/js/jquery.form.js" type="text/javascript"></script>
        <script src="mol_topmito/js/save_contact.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <script src="js/baokim.js" type="text/javascript"></script>
        <!--datepicker-->
        <link href="css/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.datetimepicker.js" type="text/javascript"></script>
        <!--end datepicker-->
    </head>
    <body>
        <!--Header-->
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row mr-top-20">
                        <div class="col-md-3 col-sm-4 col-xs-7">
                            <a href="./index.php"><img src="./img/TOPICA NATIVE.png" alt="" class="full-width"/></a>
                        </div>
                        <div class="col-md-7 col-md-offset-2 col-sm-8 hidden-xs">
                            <ul class="row">
                                <li class="col-sm-4">
                                    <span class="fa fa-phone"></span> Hotline: 0981 228 979
                                </li>
                                <li class="col-sm-5">
                                    <span class="fa fa-envelope"></span> Email: topica.native@topica.edu.vn
                                </li>
                                <li class="col-sm-3">
                                    <span class="fa fa-envelope"></span> TOPICA NATIVE
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mr-top-30">
                <div id="step-nav" class="container size-normal">
                    <div class="text-center color-red hidden-xs">
                        <span class="bg-red bold size-supper-normal active-span" role="1">1</span> &nbsp;&nbsp;<span role="1" class="active-span">Đăng ký</span>
                        <span class="border-span"></span>
                        <span class="bg-red bold size-supper-normal" role="2">2</span> &nbsp;&nbsp;<span role="2" class="">Xác nhận</span>
                        <span class="border-span"></span>
                        <span class="bg-red bold size-supper-normal" role="3">3</span> &nbsp;&nbsp;<span role="3" class="">Thanh toán</span>
                    </div>
                    <div class="hidden-sm hidden-md hidden-lg">
                        <div class="row" style="border-top: 1px solid #800c15;border-bottom: 1px solid #810c15;">
                            <div class="col-xs-4">1.Đăng kí</div>
                            <div class="col-xs-4">2.Xác nhận</div>
                            <div class="col-xs-4" style="white-space: nowrap;">3.Thanh toán</div>
                        </div>
                    </div>
                    <step role="1">
                        <h1 class="text-center color-red size-lg mr-top-30">
                            Luyện nói trực tuyến<br>
                            cùng giáo viên bản ngữ Âu - Úc - Mỹ chỉ với 100.000đ
                        </h1>
                    </step>
                    <step role="2" class="hidden">
                        <h1 class="text-center color-red size-lg mr-top-30">
                            Xác nhận thông tin đăng ký học thử của bạn
                        </h1>
                    </step>
                    <step role="3" class="hidden">
                        <h1 class="text-center color-red size-lg mr-top-30">
                            Bước cuối cùng để hoàn thành đăng ký
                        </h1>
                    </step>
                </div>
            </div>
        </div>

        <!--form-->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <form id='i_form' role="form" role="1" class="" method="POST" data-action="./mol_topmito/save_a3.php" data_url="http://autosale.local.topicanative.edu.vn/contact_collection/add_save.html" action="#">
                        <!--Step 1-->
                        <?php
//                        echo "<input type='hidden' class='e_domain_ref' name='http_referer' value=" . $ref . ">";
//                        echo "<input type='hidden' name='domain' value=" . $domain . ">";
//                        echo "<input type='hidden' name='id_camp_landingpage' value=" . $id . ">";
//                        echo "<input type='hidden' name='preview' value=" . $preview . ">";
//                        echo "<input type='hidden' name='code_chanel' value=" . $code_chanel . ">";
                        ?>
                        <input type="hidden" class="" name="id">
                        <input type="hidden" class="" name="contact_id">
                        <section role="1" class="">
                            <p class="title bg-red bold row">Đăng ký học thử</p>
                            <div class="row detail">
                                <div class="form-group col-xs-12 col-sm-6">
                                    <label>Họ và tên:</label>

                                    <input type="text" class="form-control step1" name="name"  placeholder="Nguyen Van A">
                                </div>
                                <div class="form-group col-xs-12 col-sm-6">
                                    <label>Số điện thoại:</label>
                                    <input type="text" class="form-control step1" name="phone" placeholder="090 xxx xxxx">
                                </div>
                                <div class="form-group col-xs-12 col-sm-6">
                                    <label>Email:</label>
                                    <input type="email" class="form-control step1" name="email"  placeholder="example@gmail.com">
                                </div>
                                <div class="form-group col-xs-12 col-sm-3" style="position: relative;">
                                    <label>Thời gian học thử:</label>
                                    <input type="text"  class="form-control step1" id="datepicker" name="date" style="padding-left: 35px;">
                                    <img src="./img/Layer 51.png" alt="" style="position: absolute; bottom: 5px; left: 20px; width: 25px;"/>
                                </div>
                                <div class="form-group col-xs-12 col-sm-3" style="position: relative;">
                                    <label>&nbsp;&nbsp;</label>
                                    <input type="text"  class="form-control step1" id="timepicker" name="time"  style="padding-left: 35px;">
                                    <img src="./img/Layer 52.png" alt="" style="position: absolute; bottom: 5px; left: 20px; width: 25px;"/>
                                </div>

                                <div class="form-group col-xs-12 col-sm-2">
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
                                <div class="form-group col-xs-12 col-sm-4">
                                    <label>Tự đánh giá trình độ:</label>
                                    <select class="form-control step1" name="level">
                                        <option value="">---</option>
                                        <option value="Chưa nghe nói được">Chưa nghe nói được</option>
                                        <option value="Nghe nói được chút ít">Nghe nói được chút ít</option>
                                        <option value="Nghe nói được ở mức khá">Nghe nói được ở mức khá</option>
                                        <option value="Nghe nói tốt">Nghe nói tốt</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-6">
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
                                <div class="form-group col-xs-12 col-sm-6">
                                    <i>Thông tin của bạn được bảo mật và chỉ được sử dụng hỗ trợ bạn trong quá trình học cùng TOPICA Native. Đọc thêm về <a href="#">điều khoản bảo mật</a></i>
                                </div>
                                <div class="form-group col-xs-12 col-sm-6">
                                    <button class="btn bg-red btn-lg radius-35 full-width next e_submit">Tiếp tục</button>
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
                                            <div class="icon"><img src="./images/creditcard.png" border="0"/></div>
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
                                            <div class="icon"><img src="./images/atm.png" border="0"/></div>
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
                <div class="col-md-4 col-xs-12 hidden-sm">
                    <div class=" border radius-5" style="padding-left: 15px; padding-right: 15px;">
                        <p class="tich">Học trực tuyến 1 THẦY 1 TRÒ trong 45 phút</p>
                        <p class="tich">HOÀN PHÍ HỌC THỬ khi đăng ký học chính thức</p>
                        <p class="tich">Học liệu được cung cấp sẵn</p>
                        <p class="tich">Thiết bị cần có: máy tính kết nối internet, tai nghe, microphone</p>
                        <p class="tich">Học viên nên ngồi học tại địa điểm đủ yên tĩnh để đảm bảo chất lượng buổi học</p>
                        <div class="row" style="padding: 15px; border-top: 1px solid #ccc; line-height: 2em;">
                            <b>Phương thức thanh toán:</b><br/>
                            VISA, MASTER, chuyển khoản<br/>
                            <img src="./img/Visa-Curved.png" alt="" style="width: 60px;"/>
                            <img src="./img/mastercard-128.png" alt="" style="width: 60px; margin-left: 30px;"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Ho tro truc tuyen-->
        <div class="container mr-top-30">
            <div class="row">
                <p class="bold col-md-12 hidden-sm hidden-xs">Hỗ trợ trực tuyến</p>
                <div class="col-md-1 hidden-sm hidden-xs">
                    <img src="./img/girl2.png" alt="" class="full-width" style="border-radius: 50%;"/>
                </div>
                <div class="col-md-5 hidden-sm hidden-xs">
                    <i>
                        Bộ phận hỗ trợ chúng tôi rất vui lòng được hỗ trợ bạn.<br/>
                        Số điện thoại hotline: <b style="color: #4b95d3">0981 228 979</b> hoặc Email: <b style="color: #4b95d3">topica.native@topica.edu.vn</b>
                    </i>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <i style="color: #800c15;">										
                        - Chương trình học chỉ hỗ trợ học trên máy tính để bàn hoặc laptop.<br />			
                        - Học viên vui lòng không sử dụng điện thoại hoặc máy tính bảng để học
                    </i>
                </div>
            </div>
        </div>

        <!--FAQS-->
        <div class="container">
            <div class="row hidden-sm hidden-xs">
                <div class="row mr-top-45">
                    <div class="col-xs-6">
                        <p class="title-faq">Lớp học thử 1:1 là dành cho những ai?</p>
                        <p class="detail-faq">Lớp học thử 1:1 dành cho bất cứ ai muốn trải nghiệm chương trình học tiếng Anh trực tuyến cùng giáo viên bản ngữ của TOPICA Native trước khi đăng ký học chính thức.</p>
                    </div>
                    <div class="col-xs-6">
                        <p class="title-faq">Nếu tôi muốn đăng ký học chính thức luôn thì sao?</p>
                        <p class="detail-faq">Nếu muốn đăng ký học chính thức ngay mà không qua học thử, bạn có thể liên hệ TOPICA Native qua Hotline: 0981 228 979 hoặc Email topica.native@topica.edu.vn.</p>
                    </div>
                </div>
                <div class="row mr-top-30">
                    <div class="col-xs-6">
                        <p class="title-faq">Học phí khoá học chính thức là bao nhiêu?</p>
                        <p class="detail-faq">Học phí chương trình chính thức tại TOPICA Native là linh hoạt và sẽ phụ thuộc vào lộ trình học tập của riêng bạn. Phí học thử sẽ được hoàn lại khi bạn đăng ký học chính thức.</p>
                    </div>
                    <div class="col-xs-6">
                        <p class="title-faq">Chương trình bao lâu thì khai giảng khoá mới một lần?</p>
                        <p class="detail-faq">Chương trình TOPICA Native cho phép học viên tham gia học chính thức bất cứ lúc nào, không phải chờ mở lớp.</p>
                    </div>
                </div>
                <div class="row mr-top-30">
                    <div class="col-xs-6">
                        <p class="title-faq">Để học tiếng Anh online được thì cần chuẩn bị gì?</p>
                        <p class="detail-faq">Bạn cần chuẩn bị máy tính có kết nối internet, tai nghe cá nhân và mic. Chương trình của Topica Native chỉ tương thích khi học trên máy tính. Bạn vui lòng không sử dụng điện thoại hoặc máy tính bảng để học.</p>
                    </div>
                    <div class="col-xs-6">
                        <p class="title-faq">Cách thức đóng học phí là gì?</p>
                        <p class="detail-faq">TOPICA Native hiện chấp nhận các hình thức thanh toán qua thẻ tín dụng VISA, Master và chuyển khoản ngân hàng.</p>
                    </div>
                </div>
            </div>
        </div>

        <!--info + tu van-->
        <div class="hidden-lg hidden-md mr-top-30">
            <div class="container">
                <div class="row hidden-sm hidden-md">
                    <div class="col-xs-12">
                        <div class="border radius-5" style="padding-left: 15px; padding-right: 15px;">
                            Nếu gặp khó khăn khi đăng ký hoặc thanh toán trực tuyến, bạn vui lòng thực hiện chuyển khoản tới thông tin như sau:<br/><br/>
                            <div style="padding-left:15px;">
                                <span style="font-weight:bold; font-family: Tahoma">CÔNG TY CỔ PHẦN GIÁO DỤC TOPICA ENGLISH</span><br/>
                                Số tài khoản: 0011 0041 64283<br/>
                                Ngân hàng: Ngoại thương Việt Nam (Vietcombank) - Chi nhánh Sở Giao Dịch Vietcombank<br/>
                                Cú pháp nội dung chuyển tiền: [AT100][Họ tên][Số điện thoại]<br/>
                                Số tiền: 100.000đ<br/><br/>
                            </div>
                            <span style="font-style: italic;">Sau khi nhận được thanh toán, chương trình sẽ liên hệ lại với bạn qua số điện thoại để xác nhận và sắp xếp thời gian buổi học thử.</span>
                            Lưu ý: cách làm này mất thời gian hơn thanh toán trực tiếp qua Bảo Kim. Nếu có bất cứ thắc mắc nào, hãy liên hệ hotline <span style="color:#810c15">0981 228 979</span> để được hỗ trợ.<br/>
                        </div>
                    </div>
                </div>
                <div class="row hidden-xs">
                    <div class="col-sm-7">
                        <div class="row hidden-md">
                            <div class="col-xs-12">
                                <div class="border radius-5" style="padding-left: 15px; padding-right: 15px;">
                                    Nếu gặp khó khăn khi đăng ký hoặc thanh toán trực tuyến, bạn vui lòng thực hiện chuyển khoản tới thông tin như sau:<br/><br/>
                                    <div style="padding-left:15px;">
                                        <span style="font-weight:bold; font-family: Tahoma">CÔNG TY CỔ PHẦN GIÁO DỤC TOPICA ENGLISH</span><br/>
                                        Số tài khoản: 0011 0041 64283<br/>
                                        Ngân hàng: Ngoại thương Việt Nam (Vietcombank) - Chi nhánh Sở Giao Dịch Vietcombank<br/>
                                        Cú pháp nội dung chuyển tiền: [AT100][Họ tên][Số điện thoại]<br/>
                                        Số tiền: 100.000đ<br/><br/>
                                    </div>
                                    <span style="font-style: italic;">Sau khi nhận được thanh toán, chương trình sẽ liên hệ lại với bạn qua số điện thoại để xác nhận và sắp xếp thời gian buổi học thử.</span>
                                    Lưu ý: cách làm này mất thời gian hơn thanh toán trực tiếp qua Bảo Kim. Nếu có bất cứ thắc mắc nào, hãy liên hệ hotline <span style="color:#810c15">0981 228 979</span> để được hỗ trợ.<br/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class=" border radius-5" style="padding-left: 15px; padding-right: 15px;">
                            <p class="tich">Học trực tuyến 1 THẦY 1 TRÒ trong 45 phút</p>
                            <p class="tich">HOÀN PHÍ HỌC THỬ khi đăng ký học chính thức</p>
                            <p class="tich">Học liệu được cung cấp sẵn</p>
                            <p class="tich">Thiết bị cần có: máy tính kết nối internet, tai nghe, microphone</p>
                            <p class="tich">Học viên nên ngồi học tại địa điểm đủ yên tĩnh để đảm bảo chất lượng buổi học</p>
                            <div class="row" style="padding: 15px; border-top: 1px solid #ccc; line-height: 2em;">
                                <b>Phương thức thanh toán:</b><br/>
                                VISA, MASTER, chuyển khoản<br/>
                                <img src="./img/Visa-Curved.png" alt="" style="width: 60px;"/>
                                <img src="./img/mastercard-128.png" alt="" style="width: 60px; margin-left: 30px;"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Ho tro truc tuyen (phone + tablet)-->
        <div class="container hidden-md hidden-lg mr-top-30">
            <div class="row">
                <p class="bold col-xs-12">Hỗ trợ trực tuyến</p>
                <div class="col-xs-3 col-sm-2">
                    <img src="./img/girl2.png" alt="" class="full-width" style="border-radius: 50%;"/>
                </div>
                <div class="col-xs-9 col-sm-10">
                    <i>
                        Bộ phận hỗ trợ chúng tôi rất vui lòng được hỗ trợ bạn.<br/>
                        Số điện thoại hotline: <b style="color: #4b95d3">0981 228 979</b> hoặc Email: <b style="color: #4b95d3">topica.native@topica.edu.vn</b>
                    </i>
                </div>
            </div>
        </div>


        <footer class="container-fluid mr-top-30">
            <div class="row">
                <div class="container">
                    <div class="row mr-top-20">
                        <div class="hidden-sm hidden-xs col-md-4">
                            <img src="img/logo.png" alt="" style="width: 100%;"/>
                        </div>
                        <div class="col-md-8">
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
                <div class="col-xs-12 col-sm-6 text-right color-white size-normal">Hotline: 0981 228 979</div>
                <div class="col-xs-12 col-sm-6 color-white size-normal">Email: topica.native@topica.edu.vn</div>
            </div>
        </footer>

        <script type="text/javascript">
            jQuery('#datepicker').datetimepicker({
                timepicker: false,
                format: 'Y-m-d',
                minDate: '+1970/01/02',
                maxDate: '+1970/01/07'
            });
            jQuery('#timepicker').datetimepicker({
                datepicker: false,
                format: 'H:i',
                allowTimes: ['19:00', '20:00', '21:00', '22:00', '23:00']
            });
        </script>
    </body>
</html>