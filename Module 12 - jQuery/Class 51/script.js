$(function(){

	var fildChooseHour;

	$('input').on('focus', function(){
		var pos = $(this).offset();
		var width = $(this).width();

		$('.chooseHour').css('left', pos.left + width + 5);
		$('.chooseHour').css('top', pos.top);
		$('.chooseHour').show();

		fildChooseHour = $(this);

	});

	$('input').on('blur', function(){
		setTimeout(function(){
			$('.chooseHour').hide();
		}, 200);
	});

	$('.chooseHour button').on('click', function(){
		var hour = $(this).html();
		fildChooseHour.val(hour);
	});

});