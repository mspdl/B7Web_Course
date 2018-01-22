// calcule the sum
function calcSum(){
	var x = parseInt(document.getElementById("sumX").value);
	var y = parseInt(document.getElementById("sumY").value);
	var sum = x + y;

	document.getElementById("sum").innerHTML = sum;
}

// calcule the substraction
function calcSub(){
	var x = parseInt(document.getElementById("subX").value);
	var y = parseInt(document.getElementById("subY").value);
	var sub = x - y;

	document.getElementById("sub").innerHTML = sub;
}

// calcule the multiplication
function calcMult(){
	var x = parseInt(document.getElementById("multX").value);
	var y = parseInt(document.getElementById("multY").value);
	var mult = x * y;

	document.getElementById("mult").innerHTML = mult;
}

// calcule the division
function calcDiv(){
	var x = parseInt(document.getElementById("divX").value);
	var y = parseInt(document.getElementById("divY").value);
	var div = x / y;

	document.getElementById("div").innerHTML = div;
}