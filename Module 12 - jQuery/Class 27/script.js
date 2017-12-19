$(function(){
	$('#div').on('scroll',function(){
		$(this).css('background-color','green');
		console.log('Scrolled');
	});

	$(window).on('resize', function(){
		console.log('Window size changed');
	})
});