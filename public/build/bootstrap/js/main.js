(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};

	var height75 = function() {
		var height = $(window).height();
		var height75 = $(window).height() - ($(window).height() / 4);
		$('.js-height75').css('height', height75);
		$(window).resize(function(){
			var height = $(window).height();
			var height75 = $(window).height() - ($(window).height() / 4);
			$('.js-height75').css('height',height75);
		});

	};

	var height80 = function() {
		var height = $(window).height();
		var height80 = $(window).height() - ($(window).height() / 5);
		$('.js-height80').css('height', height80);
		$(window).resize(function(){
			var height = $(window).height();
			var height80 = $(window).height() - ($(window).height() / 5);
			$('.js-height80').css('height',height80);
		});

	};
	height75();
	height80();
	fullHeight();

	var carousel = function() {
		$('.home-slider').owlCarousel({
	    loop:true,
	    autoplay: true,
	    margin:0,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:false,
		fluidSpeed : 1,
	    dots: true,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["",""],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items:1
	      }
	    }
		});

	};
	carousel();
	$(".carousel_se_02_carousel").owlCarousel({
		items: 3,
		nav: true,
		loop: true,
		
		mouseDrag: true,
		responsiveClass: true,
		navText: ["<i class='icofont-bubble-left'></i>", "<i class='icofont-bubble-right'></i>"],
		responsive: {
		0: {
		items: 1,
		},
		480: {
		items: 2,
		},
		767: {
		items: 3,
		},
		992: {
		items: 3,
		},
		1200: {
		items: 3,
		},
		},
		});
})(jQuery);