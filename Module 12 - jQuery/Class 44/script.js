$(function(){

	$('form').on('submit', function(e){
		e.preventDefault();

		var txt = $(this).serialize();
		console.log(txt);

		$.ajax({
			type:'POST',
			url:'ajax.php',
			data:txt,
			success:function(result){
				$('.div').html('Result: '+result)
			},
			error:function(){
				alert('An error has occurred');
			}
		});
	});

});