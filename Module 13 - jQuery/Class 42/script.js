$(function() {
	$('button').on('click', function() {
		/* 
		$('.div').load('test.html'); 
		$.get('test.html', function(t){ // function when get ends
			$('.div').html(t);
		});
		*/
		$.post('test.html', function(t){ // function when get ends
			$('.div').html(t);
		});
	});
});