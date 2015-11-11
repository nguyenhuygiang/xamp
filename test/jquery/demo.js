//$(document).ready(function () {
//    $("#submit").click(function () {
//        $("#box").css({
//            'background': 'red',
//            'width': '500px',
//            'height': '500px'
//        });
//    });
//});
//
//function myform() {
//    document.getElementById("form").reset();
//}
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() - $("#header").position() < 0) {
            $("#conten").css({'position': 'relative'});
            
        }else{
            $("#conten").css({'position':'fixed' });
        }
    });
});
