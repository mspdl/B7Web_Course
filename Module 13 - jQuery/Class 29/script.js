$(function(){

	$('#form').on('submit', function(e) { 
		e.preventDefault();
	});

	$('#name').on('keydown', function(e) {
		console.log('The keyboard key '+e.keyCode+' was pressed on '+$(this).attr('id'));
		if (e.keyCode == 13) {
			var txt = $(this).val();
			console.log('You: '+txt);
			$(this).val('');
		}
	});

	$('#name').on('keyup', function(e) {
		console.log('The keyboard key '+e.keyCode+' was dropped on '+$(this).attr('id'));
		if (e.keyCode == 13) {
			console.log('Dropped ENTER');
		}
	});

});