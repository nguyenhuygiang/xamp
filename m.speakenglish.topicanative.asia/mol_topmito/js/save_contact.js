$(document).ready(function () {
    $(document).on("submit", ".e_form_submit", function (e) {
        e.preventDefault();
        var obj = $(this);
        check_contact(obj);
        var confirm = false;
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
            alert('การลงทะเบียนของคุณมีบางอย่างผิดพลาด โปรดลงทะเบียนอีกครั้ง!');
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
            // alert('หมายเลขของคุณไม่ถูกต้อง หมายเลขของคุณต้องเริ่มต้นด้วยหมายเลย 0');
            //obj.val('');
        }
    } else if (val.match(/^08/i)) {
        if (lenght == 3) {
            val = val + ' ';
            obj.val(val);
        } else if (lenght == 7) {
            val = val + ' ';
            obj.val(val);
        } else if (lenght > 12) {
            // alert('หมายเลขของคุณไม่ถูกต้อง หมายเลขของคุณต้องเริ่มต้นด้วยหมายเลย 0');
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
            // alert('หมายเลขของคุณไม่ถูกต้อง หมายเลขของคุณต้องเริ่มต้นด้วยหมายเลย 0');
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
    var age = obj.find('input[name="age"]').val();
    var aCong = email.indexOf("@");
    var dauCham = email.lastIndexOf(".");
    var phone_number = obj.find('input[name="phone"]').val();
    phone_number = phone_number.replace(/ /g, '');
    var phone_lenght = phone_number.length;
    var url = obj.attr("action");
    

    // if (age < 18) {
    //     // alert('Chương trình chỉ dành riêng cho người trên 18 tuổi.');
    //     // obj.find("select[name=age]").focus();
    //     // return false;
    // }

    if ((name.trim() == "") || (name == "Họ tên *")) {
        alert("กรุณากรอกชื่อ และนามสกุลของคุณ");
        obj.find('input[name="name"]').focus();
        return (false);
    }

    if ((email == "") || (email == "email_address@gmail.com")) {
        alert("กรุณากรอกอีเมล์ของคุณ");
        obj.find('input[name="email"]').focus();
        return (false);
    }
    if ((age == "") || (age == "0") || (age == "กรุณาเลือกอายุของคุณ")) {
        alert("กรุณาเลือกอายุของคุณ");
        obj.find('input[name="age"]').focus();
        return (false);
    }
    if ((aCong < 1) || (dauCham < aCong + 2) || (dauCham + 2 > email.length)) {
        alert("อีเมล์ อย่างเช่น :email@example.com");
        obj.find('input[name="email"]').focus();
        return false;
    }

    if ((phone_number == "") || (phone_number == "Điện thoại *")) {
        alert("โปรดกรอกเบอร์โทรศัพท์เพื่อรับคำแนะนำ");
        obj.find('input[name="phone"]').focus();
        return (false);
    }

    if (phone_number.match(/^09/i)) {
        if (phone_lenght != 10) {
            alert("หมายเลขของคุณไม่ถูกต้อง หมายเลขของคุณต้องเริ่มต้นด้วยหมายเลย 0");
            obj.find('input[name="phone"]').focus();
            return (false);
        }
    } else if (phone_number.match(/^08/i)) {
        if (phone_lenght < 10) {
            alert("หมายเลขของคุณไม่ถูกต้อง หมายเลขของคุณต้องเริ่มต้นด้วยหมายเลย 0");
            obj.find('input[name="phone"]').focus();
            return (false);
        }
    } else if (phone_number.match(/^01/i)) {
        if (phone_lenght != 11) {
            alert("หมายเลขของคุณไม่ถูกต้อง หมายเลขของคุณต้องเริ่มต้นด้วยหมายเลย 0");
            obj.find('input[name="phone"]').focus();
            return (false);
        }
    } else {
        alert("หมายเลขของคุณไม่ถูกต้อง หมายเลขของคุณต้องเริ่มต้นด้วยหมายเลย 0");
        obj.find('input[name="phone"]').focus();
        return false;
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

    obj.ajaxSubmit({
        type: "POST",
        url: url,
        dataType: 'json',
        data: {
            'phone': phone_number
        },
        async: false,
        success: function (data) {
            if (data.status) {
                window.location = data.redirect;
            } else {
                alert(data.msg);
                button.removeAttr('disabled');
                // location.reload();
            }
        }, error: function () {
            alert('การลงทะเบียนของคุณมีบางอย่างผิดพลาด โปรดลงทะเบียนอีกครั้ง!');
            button.removeAttr('disabled');
        }, complete: function () {
        }
    });
}