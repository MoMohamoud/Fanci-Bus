$(document).ready(function () {

    $('.images').fadeIn();
    console.log('its working');

	$('.autoplay').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 3000,
	  asNavFor: '.slider-for',
	  fade: false,

	});	 


	$('.slider-for').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    arrows: true,
	    fade: false,
	    asNavFor: '.autoplay'
	});

	$('#hidden').fadeIn('slow').removeClass('hidden');

	$(".left").addClass('show');
		
	setTimeout(function(){
    	$(".middle").addClass('show');
		}, 1000);

	setTimeout(function(){
    	$(".right").addClass('show');
		}, 2000);
	$('.text-info').fadeIn();

	$( '.swipebox' ).swipebox();


});


