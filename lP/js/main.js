$(document).ready(function () {
    $(document).on("click", ".title-content a", function (e) {
        e.preventDefault();
        var obj = $(this);
        var parent = obj.parents(".title-content");
        parent.parent().find('a').removeClass('active-title');
        obj.addClass('active-title');
        var nav = parent.attr('nav-content');
        $('.nav-content').addClass('hidden');
        $('.nav-content[nav-content=' + nav + ']').removeClass('hidden');
    });
});