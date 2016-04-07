$(document).ready(function(){
    
	$('.menu2_open').click(function() {
		$('.menu').addClass('menu_opened');
		setTimeout(function() {
			$('.menu a.mn1').addClass('mn');
		}, 200);
		setTimeout(function() {
			$('.menu a.mn2').addClass('mn');
		}, 250);
		setTimeout(function() {
			$('.menu a.mn3').addClass('mn');
		}, 300);
		setTimeout(function() {
			$('.menu a.mn4').addClass('mn');
		}, 350);
	});
    
	$('.menu2_close, .menu a').click(function() {
		$('.menu a').removeClass('mn');
		$('.menu').removeClass('menu_opened');
	});
    
});

