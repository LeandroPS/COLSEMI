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
	
	$("form.pagamento-ouvinte").submit(function(){
	 	
		console.log("foi");
		
		var option = $("select.com_minicurso").val();
	
		$("div.block div.pagamento.inicial").hide();
		$("div.block div.pagamento."+option).show();
		
		return false;
	});
	
	$("input.minicurso-sim").click(function(){
		$("div.form.minicurso").addClass("show");
		$("div.form.minicurso select").prop("required", true);
		
	});
	
	$("input.minicurso-nao").click(function(){
		$("div.form.minicurso").removeClass("show");
		$("div.form.minicurso select").prop("required", false);
	});
	
	$("input#comunicacao").click(function(){
		$("div.form.simposio").addClass("show");
		$("div.form.simposio select").prop("required", true);
	});
	
	$("input#poster").click(function(){
		$("div.form.simposio").removeClass("show");
		$("div.form.simposio select").prop("required", false);
	});
});