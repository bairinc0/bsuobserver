//Отображение "динамического" списка в ленте новостей 
$(document).ready(function(){
	$('#newsmenu > li > ul')
	.hide()
	.click(function(e){
		e.stopPropagation();
	});
	$('#newsmenu > li').toggle(
			function(){
				$(this).find('ul').slideDown();
			},
			function(){
				$(this).find('ul').slideUp();
			}
	);
});