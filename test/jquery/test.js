//$(document).ready(function () {
//    $("#btbig").click(function () {
//        $("#box").addClass("big").removeClass("normal").removeClass("small");
//    });
//    $("#btsmall").click(function () {
//        $("#box").addClass("small").removeClass("normal").removeClass("gig");
//    });
//    $("#btnormal").click(function () {
//        $("#box").addClass("normal").removeClass("big").removeClass("small");
//    });
//});
//$(document).ready(function () {
//    $("#btbig").click(function () {
//        $("#box").removeClass().addClass("big");
//    });
//    $("#btsmall").click(function () {
//        $("#box").removeClass().addClass("small");
//    });
//    $("#btnormal").click(function () {
//        $("#box").removeClass().addClass("normal");
//    });
//});
$(document).ready(function () {
    $("#button .button").click(function () {
        $("#box").removeClass();
        if (this.id === "btbig") {
            $("#box").addClass("big");
        }
        else if (this.id === "btsmall") {
            $("#box").addClass("small");
        }else if(this.id==='btnormal'){
            $("#box").addClass("normal");
        }
    });
});




