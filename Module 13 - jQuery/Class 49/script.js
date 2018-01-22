$(function() {
	$('button').on('click', function(){

		var height = $('#height').val();
		var weight = $('#weight').val();

		height = height.replace(',','.');
		weight = weight.replace(',','.');

		var bmi = weight / (height*height);
		bmi = bmi.toFixed(1);

		var meaning = '';

		if (bmi < 16) {
			meaning = 'Very serious low weight';
		}else if(bmi >= 16 && bmi < 16.99) {
			meaning = 'Severe low weight';
		}else if(bmi >= 17 && bmi < 18.49) {
			meaning = 'Low weight';
		}else if(bmi >= 18.5 && bmi < 24.99) {
			meaning = 'Normal weight';
		}else if (bmi >= 25 && bmi < 29.99) {
			meaning = 'Overweight';
		}else if(bmi >= 30 && bmi < 34.99) {
			meaning = 'Obesity degree I';
		}else if(bmi >= 35 && bmi < 39.99) {
			meaning = 'Obesity degree II';	
		}else {
			meaning = 'Obesity degree III';	
		}		

		$('#result').html('BMI: '+bmi);
		$('#result').append('<br>'+meaning);
	});
});