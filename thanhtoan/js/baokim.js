$(document).ready(function () {
	$(function () {
		$('.method').click(function () {
			$(this).siblings().children().find('img').removeClass('img-active');
			$('.method').removeClass('selected');
			$('.check_box').removeClass('checked_box');
			$(this).addClass('selected');
			$('.selected .check_box').addClass('checked_box');
			var method = $(this).attr('id');
			if (method != 0) {
				//$('.mode').css('display','block');
				$('.info1').slideDown();
				$('.selected img').click(function () {
					$('.method img').removeClass('img-active');
					$(this).addClass('img-active');
					var id = $(this).attr('id');
					$('#bank_payment_method_id').val(id);

				});
			}
			else {
				//$('.mode').css('display','none');
				$('.info1').slideUp('slow');
				$('.method img').removeClass('img-active');
			}
			$('#i_form').attr('action', './mol_topmito/Payment.php');
		});
		$(document).on('submit', '#i_form', function (e) {
			var img_active = $(this).find('.img-active');
			if(!img_active.length){
				e.preventDefault();
				alert('Hãy chọn thêm loại thẻ hoặc thẻ ngân hàng để thanh toán');
			}
		});
		$('.input-mode').click(function () {
			var a = $(this).val();
			if (a == 2) {
				$('#daykeep').css('display', 'block');
			}
			if (a == 1) {
				$('#daykeep').css('display', 'none');
			}

		});
	});

});