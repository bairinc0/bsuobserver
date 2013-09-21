$(document).ready(function(){
	$("#lightBox a[rel^='prettyPhoto']").prettyPhoto({
  	theme: 'dark_rounded'
  });
images = ['tolay/1.jpg','tolay/2.jpg','tolay/3.jpg'];
	titles = ['','',''];
	descriptions = ['','',''];
	$.prettyPhoto.open(images,titles,descriptions);	
});