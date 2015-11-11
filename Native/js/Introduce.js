//$(document).ready(function () {
//    $("#imgnext-main_1").click(function () {
//        $("#main_1").addClass("hidden");
//        $("#main_2").removeClass("hidden");
//        $("#imgnext-main_1").addClass("hidden");
//        $("#imgreview-main_1").removeClass("hidden");
//    });
//    $("#imgreview-main_1").click(function () {
//        $("#main_1").removeClass("hidden");
//        $("#main_2").addClass("hidden");
//        $("#imgnext-main_1").removeClass("hidden");
//        $("#imgreview-main_1").addClass("hidden");
//    });
//});


$(document).ready(function () {
//    $("#imgreview-main_1").addClass("hidden");
    $("#main .slide:gt(0)").addClass("hidden");
    $("#imgnext-main_1").click(function () {
        $("#main .slide:first-child").addClass("hidden")
                .next(".slide").removeClass("hidden")
                .end().appendTo("#main");
    });
//    $("#imgreview-main_1").click(function () {
//        $("#main .slide:first-child").addClass("hidden")
//                .end().appendTo("#main")
//                .next(".slide").removeClass("hidden");
//
//    });
});
//        $("#main .slide:first-child").addClass("hidden")
//                .next(".slide").removeClass("hidden")
//                .end().appendTo("#main");      
//    });
//});

