$(function(){

	$('#btn1').click(function(){
		$(this).toggleClass('redbackground');
	});

	$('#btn2').hover(function(){
		$(this).toggleClass('redbackground');
	});
});