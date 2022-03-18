// sticky menu
$(window).scroll(function(event) {
	if($(document).scrollTop() < 150){
		$('.header').removeClass('fixed');
		$('.header').removeClass('active');
	} else if($(document).scrollTop() > 280){
		$('.header').removeClass('fixed');
		$('.header').addClass('active');
	} else{
		$('.header').addClass('active');
	}
});
// sticky menu