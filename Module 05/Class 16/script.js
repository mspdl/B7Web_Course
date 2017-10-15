function test() {
	var x = parseInt(prompt("Inform a number"));

	switch(x) {
		case 0:
			alert("x = 0");
			break;
		case 1:
			alert("x = 1");
			break;
		case 2:
			alert("x = 2");
			break;
		case 3:
			alert("x = 3");
			break;
		default:
			alert("x isn't 0, 1, 2 or 3");
			break;
	}
}