(function($) {

	$.fn.changeColor = function(color){

		this.each(function(){
			$(this).css('color', color).css('text-decoration', 'none');
			$(this).hover(function(){
				$(this).css('background-color','#b3e5fc');
			}, function(){
				$(this).css('background-color','white');
			});
		});

		return this;

	}

}(jQuery));