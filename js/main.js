$(document).ready(function(){
  	$('header .middle-menu .owl-carousel').owlCarousel({
	    loop: true,
	    items: 1,
	    nav: true,
	    dots: false
	});

	$('.our-products .owl-carousel').owlCarousel({
	    loop: true,
	    items: 4,
	    nav: true,
	    dots: false
	});

	$('.big-slider .owl-carousel').owlCarousel({
	    loop: true,
	    items: 1,
	    nav: true,
	    dots: false
	});

	$('.about-us .last-review .owl-carousel').owlCarousel({
	    loop: true,
	    items: 1,
	    nav: true,
	    dots: false
	});

	$('.about-us .about-block .owl-carousel').owlCarousel({
	    loop: true,
	    items: 1,
	    dots: true
	});

});