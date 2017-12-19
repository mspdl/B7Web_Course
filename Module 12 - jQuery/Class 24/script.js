$(function(){

	$('#btn1').on('click',function(){
		alert('Clicked!')
	});

	$('#btn1').on('mouseover',function(){
		$(this).toggleClass('redbackground');
	});

	$('#btn1').on('mouseout',function(){
		$(this).toggleClass('redbackground');
	});

});