jQuery(document).ready(function ($) {
    $(document).on("click", "li", function (e) {
        e.preventDefault();
        $('button.dropdown-toggle p').text($(this).text() + " ");
        $('input[name=age]').attr('value', $(this).attr('data-value'));
        
    });


    $(document).on("click", ".nav-child", function (e) {
        e.preventDefault();
        obj = $(this);
        var parent = obj.parent();
        var nav = parent.attr('nav-parent');
        parent.find('a').removeClass('active-title-content');
        obj.find('a').addClass('active-title-content');
        var child = obj.attr("nav-child");
        $('div.parent[nav-parent = ' + nav + ']').find('div.child').addClass("no-active");
        $("div.child[id='" + child + "']").removeClass("no-active");
    });

    $(document).on("click", 'li.nav-parent', function (e) {
        e.preventDefault();
        var obj = $(this);
        var nav = obj.attr('nav-parent');
        $('img.parent').addClass('no-active');
        $('img.parent[nav-parent = ' + nav + ']').removeClass("no-active");
        $('div.parent').addClass('no-active');
        $('div.parent[nav-parent = ' + nav + ']').removeClass("no-active");
    });

    $(document).on("click", ".title-toggle, .number-title", function () {
        obj = $(this);
        obj.parents('.border-top').find(".toggle").toggle();
    });

    $(document).on('click', '.video-mau', function (e) {
        e.preventDefault();
        $('.nav-child[nav-child="video-hoc-mau"]').click();
    });

    $(document).on('click', '.giai-dap', function (e) {
        e.preventDefault();
        $('li.nav-parent[nav-parent="FAQs"]').click();
    });

    $(document).on("change", "#form-dang-ky select[name='goal']", function () {
        obj = $(this);
        var parent = obj.parent();
        obj.addClass('hidden');
        obj.removeAttr('name');
        parent.find('input').attr('name', 'goal');
        parent.find('input').removeClass('hidden');
    });
});