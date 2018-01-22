function loaded() {
	alert("Page loaded");
}

// the difference between load the function in body and the begin of the javascript is:
// on body, the function will wait for the site load, and the begin of the javascript will be premature

function unloaded() {
	// unnusual because the page will be close anyway
	alert("Page unloaded");
}