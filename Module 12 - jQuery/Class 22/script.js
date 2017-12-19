$(function(){

	$('#btn1').click(function(){
		/*
		if ($(this).hasClass('redbackground')) {
			$(this).removeClass('redbackground');
		} else {
			$(this).addClass('redbackground');			
		}
		*/
		// THIS CODE CAN BE SUBSTITUTED FOR:
		$(this).toggleClass('redbackground');
	});

	$('#btn2').mouseover(function(){
		$(this).addClass('redbackground');
	});

	$('#btn2').mouseout(function(){
		$(this).removeClass('redbackground');
	});

});