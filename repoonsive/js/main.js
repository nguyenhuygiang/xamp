$(document).ready(function () {

    $(document).on('change', '.step1', function () {
        var obj = $(this);
        var name = obj.attr('name');
        $('p[role=' + name + ']').html(obj.val());
    });

    $(document).on('click', 'a.back', function (e) {
        e.preventDefault();
        var obj = $(this);
        var current_section = obj.parents('section');
        var current_role = current_section.attr('role');
        var back_role = parseInt(current_role) - 1;
        $('section').addClass('hidden');
        $("section[role=" + back_role + "]").removeClass('hidden');
        current_role = back_role;
    });
    $(document).on('click', '.fb-link', function () {
        $(this).css({"color": "#810c15", "text-decoration": "none"});
    });


});