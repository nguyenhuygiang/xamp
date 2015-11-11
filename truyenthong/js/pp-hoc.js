$(document).ready(function () {
    $(document).on("click", ".video-link a", function () {
        var video = $(this).attr("src");
        $("#content-frame").attr("src", video);
    });
    $('#ifram').on('hidden.bs.modal', function (e) {
        $('#content-frame').attr('src', '');
    });
});


