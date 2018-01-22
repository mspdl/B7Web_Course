function addBall() {

	var x = Math.floor(Math.random()*800);
	var y = Math.floor(Math.random()*500);

	var r = Math.floor(Math.random()*255);
	var g = Math.floor(Math.random()*255);
	var b = Math.floor(Math.random()*255);

	var f = Math.floor(Math.random()*10);

	var ball = $('<div class="ball"></div>');
	ball.css('left', x+'px');
	ball.css('top', y+'px');
	ball.css('background-color', 'rgb('+r+','+g+','+b+')');

	r = Math.floor(Math.random()*255);
	g = Math.floor(Math.random()*255);
	b = Math.floor(Math.random()*255);

	ball.css('border','1px solid rgb('+r+','+g+','+b+')');

	if (f == 5) {
		ball.css('background-color', 'black');
		ball.css('border','1px solid black');

	}

	ball.on('click', function(){
		$(this).fadeOut('fast');
		score++;
		updateScore();
		if (f == 5) {
			addBall();
			addBall();
			addBall();
		}
	});

	$(document.body).append(ball); // $('<div class="ball"></div>').appendTo(document.body);
}

function updateScore() {
	$('#score').html(score);
}

var score = 0;

$(function(){
	
	$('button').on('click',function(){

		setInterval(addBall, 1000);

	});

});