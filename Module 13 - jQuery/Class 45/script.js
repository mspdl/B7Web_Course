$(function(){
	$('#form').on('submit',function(e){
		e.preventDefault();

		var txt = $(this).serialize();

		$.ajax({
			type:'POST',
			url:'ajax.php',
			data:txt,
			dataType:'json',
			success:function(j){
				if (j.status == 'ok') {
					console.log("It's ok");
				} else {
					console.log("It's wrong");
				}
			}
		});
	});
});