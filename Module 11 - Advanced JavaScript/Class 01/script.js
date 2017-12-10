function action () {
	document.write("Perfomed...<br>");
}

var timer = setInterval(action, 2000);

// setTimeout(action, 2000); // execute only one time, time in miliseconds
// setInterval(action, 2000); // execute time after atime, time in miliseconds