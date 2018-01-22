function start() {
	setInterval(addBalloon, 1000);
}

function addBalloon() {
	var balloon = document.createElement("div");
	balloon.setAttribute("class", "balloon");

// --- trocar de cor
	var red = Math.floor(Math.random() * 255);
	var green = Math.floor(Math.random() * 255);
	var blue = Math.floor(Math.random() * 255);

	var x = Math.floor(Math.random() * 500);
	var y = Math.floor(Math.random() * 400);

	balloon.setAttribute("style", "left:"+x+"px;"+
								  "top:"+y+"px;"+
								  "background-color:rgb("+red+","+green+","+blue+");"
								  );
	balloon.setAttribute("onclick", "blowUpBalloon(this)");

	document.body.appendChild(balloon);
}

function blowUpBalloon(element){
	document.body.removeChild(element);
}