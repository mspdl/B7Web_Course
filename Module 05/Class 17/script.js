function check() {
	var n1 = parseInt(document.getElementById("number-1").innerHTML);
	var n2 = parseInt(document.getElementById("number-2").value);

	if (n1 == n2) {
		alert("You're right!");
	} else {
		alert("You missed the number.");
	}

	reset();
}

function reset() {
	document.getElementById("number-2").value = "";
	var r = Math.floor(Math.random() * 20);
	document.getElementById("number-1").innerHTML = r;
}