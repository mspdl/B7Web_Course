$(function(){

	$('#form').on('submit', function(e){
		e.preventDefault();
		console.log("Form submited");
	});

	$('#name').on('select', function(){
		console.log('Some text was selected in the '+$(this).attr('id')+' tag.');
	});

	$('#name, #email').on('focus', function(){
		$(this).addClass('focused');
		console.log($(this).attr('id') + ' focused');
	});

	$('#name, #email').on('blur', function(){
		$(this).removeClass('focused');
		console.log($(this).attr('id') + ' unfocused');
	});

	$('#age').on('change', function(){
		console.log($(this).val());
	});

});