function calcSum(){
	var x = parseInt(document.getElementById("sumX").value);
	var y = parseInt(document.getElementById("sumY").value);
	var sum = x + y;

	document.getElementById("sum").innerHTML = sum;
}