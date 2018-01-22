/*function keyboardPressed() {
	console.log("A key was pressed in the input text.")
}*/

function keyboardPressed(event) {
	console.log("The key "+event.keyCode+" was pressed in the input text.Shift: "+event.shiftKey);
	if (event.shiftKey) {
		console.log("Shift was pressed.");
	}
	if (event.shiftKey == true && event.keyCode == 69) {
		console.log("Shift + E was pressed.");
	}
	// onkeydown and onkeyup are oposite
	// onkeypress is active when the use keep the key pressed
}