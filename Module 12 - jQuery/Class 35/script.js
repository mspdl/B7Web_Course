$(function() {
	$('.button').on('click', function() {
		$('.div').animate({
			'margin-left': '100px',
			'margin-top': '20px',
			'width': '500px',
			'border-radius':75
		}, 500);
	});
});