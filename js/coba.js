$(document).ready(function(){
	//$(this).scrollTop(0);
	$('#main-container').hide().fadeIn(2000);
	//$('#home').hide().fadeIn(2000);

    $('.home-nav').click(function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $("#home").offset().top
				}, 2000);
	});

	$('.logo-link').click(function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $("#home").offset().top
				}, 2000);
	});

	$('.projects-nav').click(function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $("#projects").offset().top
				}, 2000);
	});

	$('.about-nav').click(function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $("#about").offset().top
				}, 2000);
	});

	$('.contact-nav').click(function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $("#contact").offset().top
				}, 2000);
	});

});