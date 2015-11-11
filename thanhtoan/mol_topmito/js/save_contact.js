$(document).ready(function () {
    $(document).on("click", ".next", function (e) {
        e.preventDefault();
        var obj = $(this);
        var parent = obj.parents('form');
        var check = check_contact(parent);
        if(!check){
            return false;
        }
        var confirm = false;

        var current_section = obj.parents('section');
        var current_role = current_section.attr('role');

        var nex_role = parseInt(current_role) + 1;
        $('section').addClass('hidden');
        $("section[role=" + nex_role + "]").removeClass('hidden');
        $('#step-nav step').addClass('hidden');
        $("#step-nav step[role=" + nex_role + "]").removeClass('hidden');
        $('#step-nav span').removeClass('active-span');

    });
    $(document).on('keyup', '.e_form_submit input[name=phone]', function (e) {
        if (e.which != 8 && e.which != 46 && e.which != 37 && e.which != 39 && e.which != 38 && e.which != 40) {
            //Keyboard ấn xuống ko phải là 1 trong các phím: backspace, del, tiến, lùi, lên, xuống thì thực hiện function check_phone_number()
            check_phone_number($(this));
        }
    });
});

/* 
 * function: Kiểm tra cookie khi submit
 * @param obj: Đối tượng chứa dữ liệu <=> form
 * @param time: thời gian sống của cookie (phút) 
 */
function check_cookie(obj, time) {
    var url = "./mol_topmito/check_cookie.php";
    var email = obj.find('input[name=email]').val();//val(): gia tri the trong form
    var data_result = '';
    $.ajax({
        type: "POST",
        url: url,
        data: {
            'data': email,
            'time': time
        },
        dataType: 'json',
        async: false, //phai co du lieu thi tiep tuc
        success: function (result) {
            if (result.status) {
                data_result = true;
            } else {
                alert(result.msg);
                data_result = false;
            }
        },
        error: function () {
            alert('Đăng ký thất bại. Mời thử lại sau!');
            data_result = false;
        }
    });
    return data_result;
}

/*
 *  function: Tự động thêm dấu cách (backspace) khi nhập số điện thoại
 *  08x xxx xxxx
 *  09x xxx xxxx
 *  01xx xxx xxx
 *  @param obj: đối tượng (input[name=phone])
 */
function check_phone_number(obj) {
    var val = obj.val();
    var lenght = val.length;
    if (val.match(/^09/i)) {
        if (lenght == 3) {
            val = val + ' ';
            obj.val(val);
        } else if (lenght == 7) {
            val = val + ' ';
            obj.val(val);
        } else if (lenght > 12) {
            alert('Vui lòng nhập đúng số điện thoại');
            obj.css('border', '1px solid red');
            //obj.val('');
        }
    } else if (val.match(/^01/i)) {
        if (lenght == 4) {
            val = val + ' ';
            obj.val(val);
        } else if (lenght == 8) {
            val = val + ' ';
            obj.val(val);
        } else if (lenght > 13) {
            alert('Vui lòng nhập đúng số điện thoại');
            obj.css('border', '1px solid red');
            //obj.val('');
        }
    }
}

/*
 *  function: Check dữ liệu contact; return nếu false; gửi dữ liệu lên sever nếu true
 *  @param obj: đối tượng check (các input, select trong form)
 */
function check_contact(obj) {
    var button = obj.find('.e_btn_submit');
    var email = obj.find('input[name="email"]').val();
    var name = obj.find('input[name="name"]').val();
    var aCong = email.indexOf("@");
    var dauCham = email.lastIndexOf(".");
    var phone_number = obj.find('input[name="phone"]').val();
    phone_number = phone_number.replace(/ /g, '');
    var phone_lenght = phone_number.length;
    var url = obj.attr("data-action");
    var age = obj.find("select[name=age]").val();
    var date = obj.find('input[name="date"]').val();
    var time = obj.find('input[name="time"]').val();
    var level = obj.find("select[name=level]").val();
    var purpose = obj.find("select[name=purpose]").val();

    if ((name.trim() == "") || (name == "Họ tên *")) {
        alert("Vui lòng nhập họ và tên của bạn");
        obj.find('input[name="name"]').focus();
        return (false);
    }

    if ((email == "") || (email == "email_address@gmail.com")) {
        alert("Vui lòng nhập email của bạn");
        obj.find('input[name="email"]').focus();
        return (false);
    }

    if ((aCong < 1) || (dauCham < aCong + 2) || (dauCham + 2 > email.length)) {
        alert("Email có dạng:email@example.com");
        obj.find('input[name="email"]').focus();
        return false;
    }

    if ((phone_number == "") || (phone_number == "Điện thoại *")) {
        alert("Vui lòng nhập số Điện thoại");
        obj.find('input[name="phone"]').focus();
        return (false);
    }

    if (phone_number.match(/^09/i)) {
        if (phone_lenght != 10) {
            alert("Vui lòng kiểm tra lại số điện thoại");
            obj.find('input[name="phone"]').focus();
            return (false);
        }
    } else if (phone_number.match(/^01/i)) {
        if (phone_lenght != 11) {
            alert("Vui lòng kiểm tra lại số điện thoại");
            obj.find('input[name="phone"]').focus();
            return (false);
        }
    }
    else {
        alert("Vui lòng kiểm tra lại số điện thoại");
        obj.find('input[name="phone"]').focus();
        return false;
    }

    if(date.trim() == ''){
        alert("Vui lòng chọn ngày đăng ký học thử");
        obj.find('input[name="date"]').focus();
        return false;
    }
    
    if(time.trim() == ''){
        alert("Vui lòng chọn giờ đăng ký học thử");
        obj.find('input[name="time"]').focus();
        return false;
    }

    if(age == ''){
        alert("Vui lòng chọn độ tuổi của bạn");
        obj.find("select[name=age]").focus();
        return (false);
    }

    if(level == ''){
        alert("Vui lòng chọn trình độ của bạn");
        obj.find("select[name=level]").focus();
        return (false);
    }

    if(purpose == ''){
        alert("Vui lòng chọn mục đích học tập của bạn");
        obj.find("select[name=purpose]").focus();
        return (false);
    }
    /* 
     * Check cookie nếu cần
     * @params: time - thời gian sống cookies
     */
    // var check_cookies = check_cookie(obj, 5);
    // if (!check_cookies) {
    //     return false;
    // }

    button.attr('disabled', 'disabled');
    var data_return
    obj.ajaxSubmit({
        type: "POST",
        url: url,
        dataType: 'json',
        data: {
            'phone': phone_number
        },
        async: false,
        success: function (data) {
            button.removeAttr('disabled');
            $('input[name=id]').attr('value', data.id);
            $('input[name=contact_id]').attr('value', data.contact_id);
            if (data.status) {
                data_return = true;
            } else {
                alert(data.msg);
                data_return = false;
            }
        }, error: function () {
            alert('Đăng ký thất bại, vui lòng thử lại');
            button.removeAttr('disabled');
            data_return = false;
        }, complete: function () {
        }
    });

    return data_return;
}