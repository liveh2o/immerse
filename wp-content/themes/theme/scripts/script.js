$(document).ready(function(){
	$("#slider-nav a").click(function () {
		$("#slider-nav a.active").removeClass("active");
		$(this).addClass("active");
		$("#slider li").hide();
		var content_show = $(this).attr("rel");
		$("#"+content_show).fadeIn();
	});	
	
	$( "#past-articles-popup" ).dialog({ width: 620, closeText: 'X', autoOpen: 'false' });
	$( "#past-articles" ).click(function(e) {
	  $( "#past-articles-popup" ).dialog("open");
    e.preventDefault();
	});
});