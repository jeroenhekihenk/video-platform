$(document).ready(function(){

	$('#uitbesteden-aanmelden, #zelf-leren-aanmelden').on('click', function(){
		$('#aanmeld-formulier').slideDown();
		$('html, body').animate({
			scrollTop: $('#aanmeld-formulier').offset().top
		}, 2000);
	});

	$('button#zelf-leren').on('click', function(){
		console.log('zelf-leren');
		console.log($('#zelf-leren').offset().top);
		$('html, body').animate({
			scrollTop: $('div.zelf-leren-page').offset().top - 75
		}, 2000);
	});
	$('button.uitbesteden').on('click', function(){
		$('html, body').animate({
			scrollTop: $('div.uitbestedenpage').offset().top - 75
		}, 2000);
	});

	$('#uitbesteden-aanmelden, button.uitbesteden').on('click', function(){
		$('input[type=hidden][name=optie]').val('uitbesteden');
		$('span#optie').html('uitbesteden');
	});
	$('#zelf-leren-aanmelden, button#zelf-leren').on('click', function(){
		$('input[type=hidden][name=optie]').val('zelf leren');
		$('span#optie').html('zelf leren');
	});

	var floaterScrollTop = 0;
	var floatMenuOriginalTopPos = $('.aanmeld-buttons').offset().top + 50;
	var floatMenuScrolledPos = $('.aanmeld-buttons').offset().top + 200;
	$(window).scroll(function() {
		floaterScrollTop = $(window).scrollTop();
		// Menubalk in/uitklappen
		if(floaterScrollTop >= floatMenuOriginalTopPos && $('html').hasClass('scrolled') == false) {
			$('html').addClass('scrolled');
		}
		else if(floaterScrollTop < floatMenuOriginalTopPos && $('html').hasClass('scrolled') ){
			$('html').removeClass('scrolled');
		}
	});
		

});

// $('#waargeleerd').parallax({imageSrc: 'http://www.digitusmarketing.nl/images/site/bg/laptop-on-desk-waar-geleerd.jpg'});
// $('#facebookworkshop').parallax({imageSrc: 'http://www.digitusmarketing.nl/images/site/bg/parsifal-presentatie-facebook-nvd.jpg'});