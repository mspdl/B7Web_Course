$(function(){

	$('#password').on('keyup', function(){
		var txt = $(this).val();
		var strength = 0;

		if (txt.length > 6) {
			strength += 25;
		}

		var reg = new RegExp(/[a-z]/i);
		if (reg.test(txt)) {
			strength +=25;
		}

		var reg = new RegExp(/[0-9]/i);
		if (reg.test(txt)) {
			strength +=25;
		}

		var reg = new RegExp(/[^a-z0-9]/i);
		if (reg.test(txt)) {
			strength +=25;
		}

		if (txt.length > 6 && strength >= 75) {
			var allowed = 'Password allowed.';
		} else {
			var allowed = 'Password not allowed.';
		}

		$('#strength').html('Strength: '+strength+' %<br>'+
							allowed);
	});

});