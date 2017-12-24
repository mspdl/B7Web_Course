$(function() {
	$('#btn-right').on('click',function() {
		$('.div').animate({
			'margin-left':'+=50'
		}, 500);
	});

	$('#btn-left').on('click',function() {
		$('.div').animate({
			'margin-left':'-=50'
		}, 500);
	});
});