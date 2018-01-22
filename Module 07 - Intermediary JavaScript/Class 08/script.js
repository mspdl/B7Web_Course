function validate() {
	var value = document.getElementById("number").value;

	if(value.length == 2){
		return true;
	} else {
		alert("The number must to have 2 digits");
		return false;
	}
}