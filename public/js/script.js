jQuery( document ).ready(function($){
	$('.caret').click(function() {
		$('.user-logout').toggle();
	});
	$('.alphabet-option').click(function(event) {
		event.preventDefault();
		var ok = $(this).data('value');
		$('.box-alphabet').val($(this).data('value'));
		//return false;
	});
});

