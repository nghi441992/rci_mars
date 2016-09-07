jQuery( document ).ready(function($){
	$('.caret').click(function() {
		$('.user-logout').toggle();
	});
	$('.alphabet-option').click(function(event) {
		console.log(1);
		event.preventDefault();
		var ok = $(this).data('value');
		//alert(ok);
		$('.box-alphabet').val($(this).data('value'));
		//return false;
	});
});

