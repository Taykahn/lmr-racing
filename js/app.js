$(document).ready(function () {
	$(".navbar-nav li a").click(function(event) {
	$(".navbar-collapse").collapse('hide');
	});
});

$(document).ready(function () {
	var trigger = $('.hamburger'),
		overlay = $('.overlay'),
		isClosed = false;

	trigger.click(function () {
		hamburger_cross();
	});

	function hamburger_cross() {

		if (isClosed == true) {
			overlay.hide();
			trigger.removeClass('is-open');
			trigger.addClass('is-closed');
			isClosed = false;
		} else {
			overlay.show();
			trigger.removeClass('is-closed');
			trigger.addClass('is-open');
			isClosed = true;
		}
	}

	$('[data-toggle="offcanvas"]').click(function () {
		$('#wrapper').toggleClass('toggled');
	});
});

$(document).ready(function(){
	var scroll_start = 0;
	var startchange  = $('#nav-change');
	var offset       = startchange.offset();
		if ( startchange.length ){
			$(document).scroll(function() {
			scroll_start = $(this).scrollTop();
		if ( scroll_start > offset.top ) {
			$('.site-logo img').css('transition', '1s');
			$('.site-logo img').css('width', '60%');
			$(".navbar-default .navbar-nav > li > a").css('transition', '1s');
			$('.navbar-default .navbar-nav > li > a').css('font-size', '13px');
			$('.social-icons').css('transition', '1s');
			$('.social-icons').css('opacity', '0');
			$('#navbar').css('transition', '1s');
			$('#navbar').css('margin-top', '-40px');
		} else {
			$('.site-logo img').css('width', '95%');
			$('.navbar-default').css('background-color', 'transparent');
			$(".navbar-default").css('border-color', 'transparent');
			$('.social-icons').css('height', '45px');
			$('.navbar-default .navbar-nav > li > a').css('font-size', '17px');
			$('.social-icons').css('opacity', '1');
			$('#navbar').css('margin-top', '6px');
			}
		});
	}
});
