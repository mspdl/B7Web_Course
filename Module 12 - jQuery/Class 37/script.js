$(function() {
	$('.button').on('click', function() {
		$('.div').animate({
			'height': 50,
			'width': 50,
			'font-size': 10
		}, 1500);
	});

	$('#btn2').on('click', function() {
		$('.div').stop();
	});
});