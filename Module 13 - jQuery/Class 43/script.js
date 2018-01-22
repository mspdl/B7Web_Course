$(function() {

	$('form').on('submit',function(e){
		e.preventDefault();

		var txt = $(this).serialize();
		console.log(txt);

	});

});