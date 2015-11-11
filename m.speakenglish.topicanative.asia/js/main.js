$(document).ready(function () {

    var data_next;

    $(document).on("click", ".age-val", function (e) {
        e.preventDefault();
        $('button.dropdown-toggle p').text($(this).text() + " ");
        $('input[name=age]').attr('value', $(this).attr('data-value'));

    });

    $(document).on('click', 'a.video-youtube', function (e) {
        e.preventDefault();
        var data = $(this).attr('data-video');
        $('iframe').attr('src', 'http://www.youtube.com/embed/' + data);
    });

    $(document).on('click', 'button.tab', function (e) {
        e.preventDefault();
        var data = $(this).attr('tab');
        $('div.tab').addClass('hidden');
        $('div.tab[tab=' + data + ']').removeClass('hidden');
        $('button.tab').removeClass('bg-red').addClass('tab-no-active');
        $(this).removeClass('tab-no-active').addClass('bg-red');
    });

    $('.redirect').hover(function () {
        $(this).css('font-weight', 'bold');
        $('.opacity').css('opacity', '0.1');
    }, function () {
        $(this).css('font-weight', 'normal');
        $('.opacity').css('opacity', '1');
    });

    $(document).on('click', 'button.check', function (e) {
        e.preventDefault();
        $(this).attr('disabled', 'disabled');
        var url = $('form.form-answer').attr('action');
        $.ajax({
            url: url,
            data: {
                'number': $('input[name=number]').val(),
                'answer': $('input[name=answer]:checked').val()
            },
            method: 'POST',
            dataType: 'json',
            async: false,
            success: function (data) {
                $('p.result').removeClass('text-success color-red').addClass(data.class).html(data.msg);
                if (data.status == -1) {
                    $('button.check').removeAttr('disabled');
                    return false;
                }
                if (data.next) {
                    data_next = data.next;
                } else {
                    $('button.next').addClass('finish').removeClass('next');
                    $('button.finish').removeAttr('disabled').html("KẾT THÚC");
                }
                $('button.next').removeAttr('disabled');
            },
            complete: function () {
            }
        });
    });

    $(document).on('click', 'button.next', function (e) {
        e.preventDefault();
        if (data_next) {
            var string = '';
            string += '<input type="hidden" name="number" value="' + data_next.number + '" />';
            string += '<label><input type="radio" name="answer" value="A"/>' + data_next.answer.A + '</label><br/>';
            string += '<label><input type="radio" name="answer" value="B"/>' + data_next.answer.B + '</label><br/>';
            string += '<label><input type="radio" name="answer" value="C"/>' + data_next.answer.C + '</label><br/>';
            string += '<label><input type="radio" name="answer" value="D"/>' + data_next.answer.D + '</label><br/>';
            $('p.title-question').html(data_next.question);
            $('div.question').html(string);
            $('p.result').html('');
        }
        $(this).attr('disabled', 'disabled');
        $('button.check').removeAttr('disabled');
    });

    $(document).on('click', 'button.finish', function (e) {
        e.preventDefault();
        $('#form-submit, #owl-demo').addClass('hidden');
        $("#after-answer, #owl-img").removeClass('hidden');
    });
});