$(document).ready(function() {

	// ========================================
	// flexslider
	// ========================================

	$(window).load(function(){

		$('.flexslider-three').flexslider({
			animation: "slide",
			animationLoop: true,
			useCSS : false,
			slideshow: false
		});

		$('.flexslider-four').flexslider({
			animation: "slide",
			animationLoop: true,
			useCSS : false,
			slideshow: false
		});

		$('.flexslider-five').flexslider({
			animation: "slide",
			animationLoop: true,
			useCSS : false,
			slideshow: false,
			start: function(slider){
				$('#floatingCirclesG').hide();
				$('.flexslider-wrapper-three').hide();
				$('.flexslider-wrapper-four').hide();
			}
		});

	});

	// ========================================
	// gender pages
	// ========================================

	$('.btn-male').on('click', function() {

		$('main').addClass('gender-male');
		$('main').removeClass('gender-female');

	});

	$('.btn-female').on('click', function() {

		$('main').addClass('gender-female');
		$('main').removeClass('gender-male');

	});

	// ========================================
	// flexslider - show / hide
	// ========================================

	$('.slider-ctrl-unit').on('click', function() {

		$('.slider-ctrl-unit').removeClass('inactive');
		$(this).addClass('inactive');
		var flexslider = $(this).data().flexslider;
		// console.log(flexslider);

		$('.flexslider-wrapper').hide();
		$('.flexslider-wrapper-' + flexslider).show();

	});

	// ========================================
	// intro text - show / hide
	// ========================================

	$('.slider-ctrl-unit').on('click', function() {

		var flexslider = $(this).data().flexslider;
		$('.intro-free').addClass('hidden');
		$('.intro-free--' + flexslider).removeClass('hidden');

	});

	// ========================================
	// froogaloop
	// ========================================

	var iframe = document.getElementById('video');

	// $f == Froogaloop
	var player = $f(iframe);

	$('#play-button').on('click', function() {
		player.api("play");
		$(this).hide();
	});

	// ========================================
	// hotspots
	// ========================================

	// $('.hotspot').on('click', function() {
	// 	$(this).parent().find('.hotspot-content').toggleClass('hidden');
	// });

	$( '.hotspot' ).hover(
		function() {
			$(this).parent().find('.hotspot-content').show();
		}, function() {
			$(this).parent().find('.hotspot-content').hide();
		}
	);

});