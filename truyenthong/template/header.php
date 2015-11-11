<?php// $active_menu = ''; ?>
<div class="row">
    <div class="col-xs-3">
        <img src="./img/TOPICA_NATIVE.png" alt="" style="width: 80%;"/>
    </div>
    <div class="col-xs-7 col-xs-offset-2" style=" padding-top: 5px;">
        <div class="row">
            <ul >
                <li class=" text-center border-right <?php
                // if ($active_menu == 'index' || $active_menu == '') {
                //     echo ' active-menu';
                // }

                if ($active_menu == 'index' || $active_menu == ''|| $active_menu == 'topica-native' || $active_menu == 'tin-tuc-hoat-dong'|| $active_menu == 'truyen-thong') {
                    echo ' active-menu';
                }
                
                ?>"><a href="./index.php">TRANG CHỦ</a></li>
                <li class=" text-center border-right<?php
                if ($active_menu == 'phuong-phap-hoc') {
                    echo ' active-menu';
                }
                ?>"><a href="./phuong-phap-hoc.php">PHƯƠNG PHÁP HỌC</a></li>
                <li class="text-center border-right <?php
                if ($active_menu == 'cac-khoa-hoc') {
                    echo ' active-menu';
                }
                ?>"><a href="./cac-khoa-hoc.php">CÁC KHÓA HỌC</a></li>
                <li class=" text-center <?php
                    if ($active_menu == 'dang-ky') {
                        echo ' active-menu';
                    }
                    ?>"><a href="./dang-ky.php">ĐĂNG KÝ</a></li>
            </ul>
        </div>
    </div>
</div>
