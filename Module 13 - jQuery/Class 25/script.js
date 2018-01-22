$(function(){

	$('#btn1').on('click',function(){
		$('#btn2').trigger('click');
	});

	$('#btn2').on('click',function(){
		alert('Clicked on button 2');
	});

}); 