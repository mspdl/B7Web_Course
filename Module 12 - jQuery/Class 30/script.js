$(function(){

	$('.button').on('mousedown', function() {
		console.log('Pressed the mouse on '+$(this).attr('class'));
	});

	$('.button').on('mouseup', function() {
		console.log('Dropped the mouse on '+$(this).attr('class'));
	});

	$('.button').on('mousemove', function() {
		console.log('Moved the mouse on '+$(this).attr('class'));
	});

	$('.button').on('mouseover', function() {
		console.log('The mouse is over '+$(this).attr('class'));
		$(this).addClass('overbutton');
	});

	$('.button').on('mouseout', function() {
		console.log('The mouse is leaving '+$(this).attr('class'));
		$(this).removeClass('overbutton');
	});

	$('.button').on('click', function() {
		console.log('Clicked on '+$(this).attr('class'));
	});

	$('.button').on('dblclick', function() {
		console.log('Double clicked on '+$(this).attr('class'));
	});

});