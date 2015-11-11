//$(document).ready(function () {
//    $("#button").click(function () {
//        $("#box").toggle(3000);
//        $("#box").animate({
//            'margin-left': '250px'
//        });
//    });
//});
//$(document).ready(function () {
//    $("#box").animate({
//        'opacity': '0.5'
//    });
//    $("#box").hover(function () {
//        $(this).animate({'opacity': '1'});
//    }, function () {
//        $(this).stop().animate({'opacity': '0.5'});
//    });
//});
//$(document).ready(function () {
//    $("ul#tab li a").mousemove(function () {
//        $(this).animate({'padding-left': '30px'},300);
//    }) .mouseout(function () {
//                $(this).animate({'padding-left': '0px'},300);
//            });
//
//});
//
//$(document).ready(function(){
//    $("#demo .box:gt(0)").hide();
//    $("#demo h3").click(function(){
//        $box =$(this).next();
//        if($box.is(':hidden')===true){
//            $("#demo .box").slideUp(3000);
//            $box.slideDown();
//        }
//    });
//});
//$(document).ready(function(){
//    $("#slide-img .slideshow-img:gt(0)").hide();
//    setInterval(function(){
//        $("#slide-img .slideshow-img:first-child").fadeOut()
//                .next(".slideshow-img").fadeIn()
//                .end().appendTo("#slide-img");    
//    },2000);
//});
//$(document).ready(function () {
//    $("#main .slide:gt(0)").addClass("hidden");
//    $("#imgreview-main_1").addClass("hidden");
//    $("#imgnext-main_1").click(function(){
//        $("#main .slide").next().removeClass("hidden");
//        if ($("main .slide:last").removeClass("hidden")) {
//            $("#imgnext-main_1").addClass("hidden");
//        } else {
//            $("#imgnext-main_1").removeClass("hidden");
//        }
//        if ($("main .slide:first").removeClass("hidden")) {
//            $("#imgreview-main_1").addClass("hidden");
//        } else {
//            $("#imgreview-main_1").removeClass("hidden");
//        }
//    });
//});
//$(document).ready(function(){
//    $("#imgreview-main_1").addClass("hidden");
//    $("#main .slide:gt(0)").addClass("hidden");
//    $("#imgnext-main_1").click(function(){
//        $("#main .slide:first-child").addClass("hidden")
//                .next(".slide").removeClass("hidden")
//                .end().appendTo("#main");
//    });
//});
//$(function () {
//    var $galitem = $('.main').children();// Đếm các ảnh trong gallery
//    var $galsize = $('.main .slide').size();
//    $('#main .slide:gt(0)').addClass("hidden");// Ẩn tất cả các ảnh và hiện ảnh đầu tiên
//    $currentimg = 0;
//    $galitem.attr("id", function (arr) { // Thêm id để phân biệt riêng từng ảnh
//        return "galleryitem" + arr;
//    });
//    // Thêm sự kiện click vào nút Prev
//    $('#imgreview-main_1').click(function () {
//        if ($currentimg > 0) {
//            previmg($currentimg);
//            $currentimg = $currentimg - 1;
//        }
//    });
//    // Thêm sự kiện click vào nút Next
//    $('#imgnext-main_1').click(function () {
//        if ($currentimg < $galsize - 1) {
//            nextimg($currentimg, $galsize);
//            $currentimg = $currentimg + 1;
//        }
//    });
//});
//// Hàm xử lý khi nút Next được ấn
//function nextimg($img, $size) {
//    $n_img = $img + 1;
//    if ($n_img < $size) {
//        $('#galleryitem' + $img).removeClass("hidden");
//        $('#galleryitem' + $n_img).addClass("hidden");
//    }
//}
//// Hàm xử lý khi nút Previous được ấn
//function previmg($img) {
//    $p_img = $img - 1;
//    if ($p_img >= 0) {
//
//        $('#galleryitem' + $img).removeClass("hidden");
//        $('#galleryitem' + $p_img).addClass("hidden");
//    }
//}
$(document).ready(function(){
    
});