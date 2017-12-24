$(function() {
	$('.button').on('click', function() {
		$('.div').animate({
			'top': 300,
			'left': 300,
			'height': 50,
			'width': 50,
			'font-size': 10
		}, {
			duration:500,
			step:function() {
				console.log('New step');
			},
			complete:function() {
				console.log('Animation finished');
				$('.div').animate({
					'top': 43,
					'left': 8,
					'height': 150,
					'width': 150,
					'font-size': 36
				}, 500);
			},
			start:function() {
				console.log('Animation started');
			}
		});
	});
});