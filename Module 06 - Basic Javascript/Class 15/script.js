function loopSampleWithWhile() {
	var x = 0;

	document.write("Starting the loop with while...<br>");
	while (x < 10) {
		document.write("Number "+(x+1)+"<br>")
		x++;
	}
	document.write("Finishing the loop with while...");
}

function loopSampleWithFor() {
	document.write("Starting the loop with for...<br>");
	for(var x = 0; x < 10; x++) {
		document.write("Number "+(x+1)+"<br>")
	}
	document.write("Finishing the loop with for...");
}