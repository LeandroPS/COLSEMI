$(function(){
	var elementPosition = $('div.menu').offset();
	
	$(window).resize(function(){
		elementPosition = $('div.menu').offset();
	});

	$(window).scroll(function(){
		if($(window).scrollTop() > elementPosition.top){
				$('div.menu, div.header').addClass("fixed-menu");
		} else {
				$('div.menu, div.header').removeClass("fixed-menu");
		}    
	});
	
	$("div.menu span.button-menu").click(function(){
		if($(window).width() < 800 && $(window).scrollTop() < 530){
			/*$('html, body').animate({
					scrollTop: 530
			 }, 2000, function(){*/
				$("div.menu > ul").toggleClass("show");
			//});
			
		}else if($(window).width() < 800){
			$("div.menu > ul").toggleClass("show");
		}
		
	});
	
	$("div.menu ul li.com-submenu").click(function(){
		$(this).toggleClass("expandido");
		$(this).children("ul").toggleClass("expandido");
	});
});