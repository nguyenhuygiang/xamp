jQuery(document).ready(function($){
	$(document).on("click", ".age-val", function (e) {
        e.preventDefault();
        $('button.dropdown-toggle p').text($(this).text() + " ");
        $('input[name=age]').attr('value', $(this).attr('data-value'));

    });
	
});