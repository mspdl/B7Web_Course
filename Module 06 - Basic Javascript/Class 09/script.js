function changeDivContent() { 
	var area = document.getElementById("area");
	var name = prompt("What's your name?");
	area.innerHTML = name;
}

function changeButtonName(){
	var text = prompt("What's the button name?");
	var button = document.getElementById("button");
	button.innerHTML = text;
}

function lastName(name, age){
	var area = document.getElementById("area");
	var lastName = prompt("Hi, "+name+"! What's your last name?");
	area.innerHTML = name+" "+lastName+", you are "+age+" years old.";
}