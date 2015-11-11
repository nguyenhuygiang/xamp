$(document).ready(function(){

	$(document).on("submit", ".e_form_submit", function(e){

		e.preventDefault();

		var obj = $(this);

		check_lienhe(obj);

		cancelConfirm = true;

	});

	$('.popup_wrap').click(function(){

		if($('.popup_view').attr('active') == 1){
			$('.popup_view').attr('style','');
			$('.popup_view').hide();
			$('.popup_view').attr('active','0');
		}else{
			$('.popup_view').attr('style','');
			$('.popup_view').show();
			$('.popup_view').attr('active','1');
		}

	});

	$('.btn_apply').click(function(){
		$('.popup_view').hide();
		$('.popup_view').attr('active','0');
	});
	$('.close_lightbox').click(function(){
		$('.popup_view').hide();
		$('.popup_view').attr('active','0');
	});

});
//Check file CV 
    //Thông báo khi có đính kèm CV 
    $(document).on('change', '#attach_cv', function(){
        // $('.confirm_cv').removeClass("hidden");
        // $('.extention').addClass("hidden");
        //change name file
        var name_cv = $(this).val().split('\\').pop();
        var extention_cv = name_cv.split('.').pop();
       if(extention_cv == 'doc' || extention_cv == 'pdf' || extention_cv == 'docx'){
            $('.confirm_cv').removeClass('hidden');
            // $('.cv_preview').html('Xem trước CV');
            // var preview = $('.cv_preview');
            // readURL(this, preview);
            $('#nut-dang-ky').removeAttr('disabled');
        }
        else if(extention_cv == 'rar' || extention_cv == 'zip'){
            $('.confirm_cv').removeClass('hidden');
            // $('.cv_preview').html('');
            $('#nut-dang-ky').removeAttr('disabled');
        } 
        else{
        	$('.confirm_cv').addClass('hidden');
            $('#nut-dang-ky').attr('disabled','');
            alert('Wrong type of attachment. \nPlease attach again! Thank you!...');
        }


		

		

function check_sdt(sdt) {

	if (isNaN(sdt.value)){

		sdt.style.border = '3px solid Yellow';

		sdt.value='';

		alert("Phone number format 09XXXXXXXX or 012XXXXXXXX");

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

				

	if ((name.trim() == "") || (name == "Type your name here")){ 

		alert("Please enter your first and last name"); 

		obj.find('input[name="name"]').focus(); 

		return (false); 

	}

	if ((email.trim() == "") || (email == "Type your email here")){ 

		alert("Please enter your email"); 

		obj.find('input[name="email"]').focus(); 

		return (false); 

	}

	button.attr('disabled','disabled');		

	var url = 	obj.attr("action");



	obj.ajaxSubmit({

		type: "POST",

		url: url,

		dataType : 'json',

		async:false, 

		success: function(data) {

			if(data.status){

				alert('Thank you for registering. We will contact you soon as possible to your advice!');

				window.location = data.redirect;

			}else{

				alert(data.msg);

				location.reload();

			}

		},

		error: function() {

			alert('Registration error. Please register again!');

		},

		complete: function() {

            button.removeAttr('disabled');

        }

	});

}