jQuery(function($) {

	if($('#video-gallery').length > 0){
		$('#video-gallery').lightGallery({
			counter:false,
			videoMaxWidth:'1440px',
		});
	}

	$('.formstyler').styler({
		locale:'en'
	});

	if($('#listing_detail_slider_top').length > 0){
		$('#listing_detail_slider_top').owlCarousel({
			center: true,
			items:3,
			loop:true,
			margin:0,
			mouseDrag:false,
			dots:false,
			nav:true,
			navText: ['', ''],
			responsive:{
				0:{
					items:1
				},
				768:{
					items:2
				},
				1024:{
					items:3
				}
			}
		});
	}

	if($('.content_slider').length > 0){
		$('.content_slider').owlCarousel({
			items:1,
			loop:true,
			margin:0,
			mouseDrag:false,
			dots:false,
			nav:true,
			navText: ['', ''],
			responsive:{
				0:{
					items:1
				},
				768:{
					items:2
				},
				1024:{
					items:4
				}
			}
		});
	}

	if($('.content_slider_4').length > 0){
		$('.content_slider_4').owlCarousel({
			items:4,
			loop:true,
			margin:0,
			mouseDrag:false,
			dots:false,
			nav:true,
			navText: ['', ''],
			responsive:{
				0:{
					items:1
				},
				768:{
					items:2
				},
				1024:{
					items:4
				}
			}
		});
	}

	if($('.blog-detail-slider').length > 0){
		$('.blog-detail-slider').owlCarousel({
			items:1,
			loop:true,
			margin:0,
			mouseDrag:false,
			dots:true,
			nav:false,
			navText: ['', ''],
		});
	}

	$('a[href*="#"]:not([href="#"])').click(function() {
		if ($(window).width() < 1024) {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $("[data-anchor='"+this.hash.slice(1)+"']");
				// target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top-200
					}, 400);
					return false;
				}
			}
		}
	});

	$('#back-to-top').on('click', function (e) {
		e.preventDefault();
		$('html,body').animate({
			scrollTop: 0
		}, 700);
	});

	$('#arrow-down').on('click', function (e) {
		e.preventDefault();
		$('html,body').animate({
			scrollTop: 780
		}, 700);
	});

	$(document).ready(function(){
		// $('#bl-locations-map').hide();
	});

	$('#sec-featured-search-input').on('click', function(){
		$('#sec-featured-search-form-wrap').addClass('opened');
		$('#btn-close-search').addClass('opened');
	});
	$('#btn-close-search').on('click', function(){
		$('#sec-featured-search-form-wrap').removeClass('opened');
		$('#btn-close-search').removeClass('opened');
	});


	$('#mobile-menu').click(function(){
		$('#header nav.menu').addClass('active');
	});
	$('#mobile-menu-close').click(function(){
		$('#header nav.menu').removeClass('active');
	});

	$('.open-request-form').click(function(){
		$('.listing-agent-bl .request-form').addClass('active');
		$('.listing-agent-bl .request-form-hide').addClass('inactive');
		return false;
	});

	window.lastScrollTop = 0;
	$(window).scroll(function() {

		fix_header();

		window.lastScrollTop = $(window).scrollTop();

		return false;
	});
	function fix_header() {
		var windowpos = $(window).scrollTop();
		if (windowpos > 50) {
			$("#header").addClass("fixed");
		} else {
			$("#header").removeClass("fixed");
		}
	}

});