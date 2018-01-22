function buttonEvent(e){
	e.preventDefault();
	console.log(e.type);
	console.log(e.target);
}

$(function(){

	$('#button').on('click',buttonEvent);
	$('#button').on('mouseover',buttonEvent);
});