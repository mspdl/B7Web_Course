$(function(){

	$('button').bind('click', function(){
		var city = $('#city').val();
		
		var now = new Date();
		var tempURL = 'https://query.yahooapis.com/v1/public/yql?format=json&rnd=' + now.getFullYear() + now.getMonth() + now.getDay() + now.getHours() + ' &diagnostics=true&callback=?&q=select * from weather.forecast where woeid in (select woeid from geo.places(1) where text="'+city+'") and u="c"';
		
		$.ajax({
			url:encodeURI(tempURL),
			dataType:'json',
			type:'GET',
			beforeSend: function(){
				$('#result').html('Loading...');
			},
			success: function(data){
				if(data !== null && data.query !== null && data.query.results !== null && data.query.results.channel.description !== 'Yahoo! Weather Error'){
					var temp = data.query.results.channel.item.condition.temp;
					
					$('#result').html(temp+' ºC');
				}
			},
			error:function(){
				$('#result').html('Error');
			}
		});
		
	});

});