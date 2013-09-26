//меняем картинку кнопки "Купить" при наведении (index.tpl)
$(document).ready(function(){
	$('#cart_img input').live("mouseover",function() {            	
        $(this).attr('src','/img/button-pressed.gif');               
    });
	$('#cart_img input').live("mouseout",function() {            	
		$(this).attr('src','/img/button.gif');               
    });
          
	
	//код для нажатых Оо	
	$('#cart_img_bin img').live("mouseover",function() {            	
		$(this).attr('src','/img/carted-pressed.gif');              
	});
	$('#cart_img_bin img').live("mouseout",function() {            	
		$(this).attr('src','/img/carted.gif');             
	});
	 	
});