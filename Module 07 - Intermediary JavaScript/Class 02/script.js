function pressedMouse() {
	console.log("The mouse was pressed the button.")
}

function droppedMouse() {
	console.log("The mouse was dropped the button.")
}

function passedMouse() {
	console.log("The mouse was passed over the button.")
}

function leavedMouse() {
	console.log("The mouse was leaved over the button.")
}

function movedMouse() {
	console.log("The mouse was moved over the button.")
}

function clickedMouse() {
	console.log("The mouse was clicked the button."); // onclick as the same as onmouseup, but most used
}

function rightMouse() {
	console.log("The mouse was clicked the right button.");
	return false;
}

function doubleClickedMouse() {
	console.log("The mouse was clicked the button twice.");
}