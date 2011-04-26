$(document).ready(function(){
		
		$("#slider-nav a").click(function () {
			
			$("#slider-nav a.active").removeClass("active");
			
			$(this).addClass("active");
			
			$("#slider li").hide();
			
			var content_show = $(this).attr("rel");
			$("#"+content_show).fadeIn();
		  
		});
	
	  });