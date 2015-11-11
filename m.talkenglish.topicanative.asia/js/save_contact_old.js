$(document).ready(function(){
	$(".e_submit").ajaxSubmit({
		type: 'GET',
		url: "http://mol.topmito.edu.vn/save_click",
		success: function(data) {
			var e_domain_ref = $('body').find('.e_domain_ref')
			e_domain_ref.each(function(){
				$(this).val('');
			});
		},
		error: function() {
		}
	});
	
	$(document).on("submit", ".e_form_submit", function(e){
		e.preventDefault();
		var obj = $(this);
		check_lienhe(obj);
	});
	
});
		
		
function check_sdt(sdt) {
	if (isNaN(sdt.value)){
		sdt.style.border = '3px solid Yellow';
		sdt.value='';
		alert("Số điện thoại có dạng 09XXXXXXXX hoac 012XXXXXXXX");
	}
}
		
function check_lienhe(obj) {
	var button = obj.find('.e_btn_submit');
	var email=obj.find('input[name="email"]').val();			
	var name=obj.find('input[name="name"]').val();
	var aCong=email.indexOf("@");
	var dauCham = email.lastIndexOf(".");
	var sdttext = obj.find('input[name="phone"]').val();
	var dodaisdt = sdttext.length;
				
	if ((name == "") || (name == "Họ tên *")){ 
		alert("Vui lòng nhập họ và tên của bạn"); 
		obj.find('input[name="name"]').focus(); 
		return (false); 
	}
	if ((email == "") || (email == "email_address@gmail.com")){ 
		alert("Vui lòng nhập email của bạn"); 
		obj.find('input[name="email"]').focus(); 
		return (false); 
	}
	if ((aCong<1) || (dauCham<aCong+2) || (dauCham+2>email.length)) {
		alert("Email có dạng: email@example.com");
		obj.find('input[name="email"]').focus();
		return false;
	}
	if ((sdttext == "") ||(sdttext == "Điện thoại *")){ 
		alert("Vui lòng nhập số Điện thoại"); 
		obj.find('input[name="phone"]').focus(); 
		return (false); 
	}
	if (d = sdttext.match(/^09/i)){
		if ((dodaisdt<10) ||(dodaisdt>10)){
			alert("Vui lòng kiểm tra lại số điện thoại");
			obj.find('input[name="phone"]').focus();
			return (false);
		}
	}else if (d = sdttext.match(/^01/i)){
		if ((dodaisdt<11) ||(dodaisdt>11)){
			alert("Vui lòng kiểm tra lại số điện thoại");
			obj.find('input[name="phone"]').focus();
			return (false);
		}
	}else {
		alert("Vui lòng kiểm tra lại số điện thoại");
		obj.find('input[name="phone"]').focus();
		return false;
	}
	button.attr('type','button');						
	obj.ajaxSubmit({
		type: "POST",
		url: obj.attr("action"),
		async:false, 
		success: function(data) {
			alert('Cám ơn bạn đã đăng ký. Chúng tôi sẽ liên hệ tư vấn sớm nhất tới bạn!');
			window.location = 'http://tienganhtructuyen.topmito.edu.vn/thank-you.php';
		},
		error: function() {
			alert('Lỗi');
		},
		complete: function() {
            button.attr('type','submit');
        }
	});
}