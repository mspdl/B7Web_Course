var turn = 'o';

function updateScore() {

	if(turn == 'o') {
		$('.score img').attr('src', 'img/o.png');
	} else {
		$('.score img').attr('src', 'img/x.png');
	}

}

function checkWinner() {
	var a1 = $('.a1').attr('data-marked');
	var a2 = $('.a2').attr('data-marked');
	var a3 = $('.a3').attr('data-marked');

	var b1 = $('.b1').attr('data-marked');
	var b2 = $('.b2').attr('data-marked');
	var b3 = $('.b3').attr('data-marked');

	var c1 = $('.c1').attr('data-marked');
	var c2 = $('.c2').attr('data-marked');
	var c3 = $('.c3').attr('data-marked');

	var winner = '';

	for(var i = 0; i<= 1; i++) {
		if(i == 0) {
			var op = 'o';
		} else {
			var op = 'x';
		}

		if(a1 == op && b1 == op && c1 == op) {
			winner = op;
		} else if(a2 == op && b2 == op && c2 == op) {
			winner = op;
		} else if(a3 == op && b3 == op && c3 == op) {
			winner = op;
		} else if(a1 == op && a2 == op && a3 == op) {
			winner = op;
		} else if(b1 == op && b2 == op && b3 == op) {
			winner = op;
		} else if(c1 == op && c2 == op && c3 == op) {
			winner = op;
		} else if(a1 == op && b2 == op && c3 == op) {
			winner = op;
		} else if(a3 == op && b2 == op && c1 == op) {
			winner = op;
		}
	}

	if(winner != '') {
		if(winner == 'o'){
			alert('WINNER: O');
		} else {
			alert('WINNER: X');
		}

		$('.area').html('');
		$('.area').attr('data-marked', '');
	} else if (a1 != '' && a2 != '' && a3 != '' && b1 != '' && b2 != '' && b3 != '' && c1 != '' && c2 != '' && c3 != '') {
		alert('A TIE');
		$('.area').html('');
		$('.area').attr('data-marked', '');
	}
}

$(function(){

	updateScore();

	$('.area').on('click', function(){
		if( $(this).find('img').length == 0 ){

			if(turn == 'o') {
				$(this).html('<img src="img/o.png" border="0" height="50" />');
				$(this).attr('data-marked', 'o');
				turn = 'x';
			} else {
				$(this).html('<img src="img/x.png" border="0" height="50" />');
				$(this).attr('data-marked', 'x');
				turn = 'o';
			}

			updateScore();

			checkWinner();

		}
	});

});