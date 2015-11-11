<div class="row">
    <?php if (count($img) == 1) { ?>
        <img src="./img/<?php echo $img; ?>" alt="" style="width: 100%;"/>
    <?php } else { ?>
        <!--Slide-->
        <div id="owl-demo" class="owl-carousel page">
            <?php foreach ($img as $key => $value) { ?>
                <div class="item" ><img src="./img/<?php echo $value; ?>" alt=""  style="width: 100%;"></div>
            <?php } ?>
        </div>
        <!--End slide-->
    <?php } ?>

    <?php if (isset($form)) { ?>
        <form id = "form-dang-ky" class = "e_submit e_form_submit form-horizontal" method = "POST" action = "./mol_topmito/save_c3.php">
            <h4 class = "text-center bg-red">ĐĂNG KÝ NHẬN TƯ VẤN MIỄN PHÍ</h4>
            <p class = "text-center" style = "margin-top: 15px;">
                (Vui lòng để lại thông tin chính xác.
                Chúng tôi sẽ gọi điện để tư vấn cho bạn
                về chương trình tiếng Anh TOPICA NATIVE)
            </p>
            <p class = "text-center"><strong>*Chương trình dành riêng cho người đi làm</strong></p>
            <div class = "form-group">
                <label class = "control-label col-xs-1"><i class = "fa fa-user"></i></label>
                <div class = "col-xs-11">
                    <input type = "text" name = "name" class = "form-control" placeholder = "Họ và tên">
                </div>
            </div>
            <div class = "form-group">
                <label class = "control-label col-xs-1"><i class = "fa fa-envelope"></i></label>
                <div class = "col-xs-11">
                    <input type = "email" name = "email" class = "form-control" placeholder = "Email">
                </div>
            </div>
            <div class = "form-group">
                <label class = "control-label col-xs-1"><i class = "fa fa-phone"></i></label>
                <div class = "col-xs-11">
                    <input type = "number" name = "phone" onkeyup = "return check_sdt(this)" class = "form-control" placeholder = "Số điện thoại">
                </div>
            </div>
            <div class = "form-group">
                <label class = "control-label col-xs-1" style = "padding-top: 0;"><i class = "fa fa-question-circle" style = "font-size: 33px;"></i></label>
                <div class = "col-xs-11">
                    <select class = "form-control" name = "age">
                        <option> --- Chọn độ tuổi ---</option>
                        <option>Dưới 18 tuôi</option>
                        <option>18 - 22 tuổi</option>
                        <option>Trên 22 tuổi</option>
                    </select>
                </div>
            </div>
            <p class = "text-center">
                <i>
                    * Ưu đãi lên tới 20% học phí khi đăng ký qua
                    website
                </i>
            </p>
            <div class = "form-group">
                <div class = "col-xs-offset-1 col-xs-10 text-center">
                    <button type = "submit" class = "btn bg-red">NHẬN THÔNG TIN NGAY</button>
                </div>
            </div>
            <p class = "text-center color-red e_btn_submit">HOTLINE: 0917 721 626</p>
        </form>
    <?php } ?>
</div>
<!--js slide-->
        <script>
            $(document).ready(function () {

                var time = 3; // time in seconds

                var $progressBar,
                        $bar,
                        $elem,
                        isPause,
                        tick,
                        percentTime;

                //Init the carousel
                $("#owl-demo").owlCarousel({
                    slideSpeed: 2000,
                    paginationSpeed: 500,
                    singleItem: true,
                    afterInit: progressBar,
                    afterMove: moved,
                    startDragging: pauseOnDragging
                });

                //Init progressBar where elem is $("#owl-demo")
                function progressBar(elem) {
                    $elem = elem;
                    //build progress bar elements
                    buildProgressBar();
                    //start counting
                    start();
                }

                //create div#progressBar and div#bar then prepend to $("#owl-demo")
                function buildProgressBar() {
                    $progressBar = $("<div>", {
                        id: "progressBar"
                    });
                    $bar = $("<div>", {
                        id: "bar"
                    });
                    $progressBar.append($bar).prependTo($elem);
                }

                function start() {
                    //reset timer
                    percentTime = 0;
                    isPause = false;
                    //run interval every 0.01 second
                    tick = setInterval(interval, 10);
                }
                ;

                function interval() {
                    if (isPause === false) {
                        percentTime += 1 / time;
                        $bar.css({
                            width: percentTime + "%"
                        });
                        //if percentTime is equal or greater than 100
                        if (percentTime >= 100) {
                            //slide to next item 
                            $elem.trigger('owl.next')
                        }
                    }
                }

                //pause while dragging 
                function pauseOnDragging() {
                    isPause = false;
                }

                //moved callback
                function moved() {
                    //clear interval
                    clearTimeout(tick);
                    //start again
                    start();
                }
            });
        </script>
        <!--end js slide-->