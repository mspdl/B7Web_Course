function addIngredient(){
	var ing = document.getElementById("ingredient").value;
	var listHTML = document.getElementById("list").innerHTML;

	listHTML = listHTML + "<li>"+ing+"</li>";

	document.getElementById("list").innerHTML = listHTML;
}