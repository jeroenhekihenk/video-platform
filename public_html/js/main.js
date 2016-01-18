jQuery(function($) {

	var isMobile = {
	    Android: function() {
	        return navigator.userAgent.match(/Android/i);
	    },
	    BlackBerry: function() {
	        return navigator.userAgent.match(/BlackBerry/i);
	    },
	    iOS: function() {
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	    },
	    Opera: function() {
	        return navigator.userAgent.match(/Opera Mini/i);
	    },
	    Windows: function() {
	        return navigator.userAgent.match(/IEMobile/i);
	    },
	    any: function() {
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	    }
	};

	String.prototype.times = function(n) {
	    return Array.prototype.join.call({length:n+1}, this);
	};
	
	$(document).ready(function(){



		if( !isMobile.any() ) {

			var floaterScrollTop = 0;
			var floatMenuOriginalTopPos = $('.spacial').offset().top + 50;
			var floatMenuScrolledPos = $('.spacial').offset().top + 200;
			
			var blogEbookOriginalTopPos = $('.download-ebook').offset().top + 100;
			var blogEbookScrolledPos = $('.download-ebook').offset().top + 200;

			$(window).scroll(function() {
				floaterScrollTop = $(window).scrollTop();
				// Menubalk in/uitklappen
				if(floaterScrollTop >= floatMenuOriginalTopPos && $('html').hasClass('scroll') == false) {
					$('html').addClass('scroll');
					$('#loginmenubar').slideUp();
				}
				else if(floaterScrollTop < floatMenuOriginalTopPos && $('html').hasClass('scroll') ){
					$('html').removeClass('scroll');
					$('#loginmenubar').slideDown();
				}
				// Bel image in menubalk vergroten/verkleinen
				if(floaterScrollTop >= floatMenuScrolledPos && $('html').hasClass('scroll')) {
					$('.rechter-menu').addClass('scrolled');
				}
				else if(floaterScrollTop < floatMenuScrolledPos && $('html').hasClass('scroll') == false) {
					$('.rechter-menu').removeClass('scrolled');
				}

				// Ebook bij blog
				if(floaterScrollTop >= blogEbookOriginalTopPos) {
					// console.log('floaterscrolltop is gelijk aan, of groter dan blogebookoriginaltoppos');
					$('.download-ebook').addClass('fixElementToTop');
				} else if(floaterScrollTop < blogEbookOriginalTopPos) {
					// console.log('floaterscrolltop is minder dan blogebookoriginaltoppos');
					$('.download-ebook').removeClass('fixElementToTop');
				}
			});

		}

		var menuheight = $('div#menubars').height();

		$('div.spacial').css('height',menuheight);

		$(window).resize(function(){
			var menuheight = $('div#menubars').height();
			$('div.spacial').css('height',menuheight);
		});

		$('.dropdown-toggle').dropdown();

		$('a.sidemenu-toggle').on('click', function()
		{
			$('html').toggleClass('sidemenu-open');
		});
		$('div#close-sidemenu').on('click', function()
		{
			$('html').removeClass('sidemenu-open');
		});


		

		var allGood = true;

		function buitenKlik(e){

			$(document).on('click', function(e) {
				var $el = $('.belmijterugformulier');

				if(allGood == true) {
				
					if($(e.target).is('#belmijterugformulier') || $(e.target).is('#belmijterugformulier .form-group div') || $(e.target).is('#belmijterugformulier .form-group div > p') || $(e.target).is('#belmijterugformulier .form-group > *') || $(e.target).is('#belmijterugformulier > * > * > *') || $(e.target).is('input.btn.btn-success') || $(e.target).is('input[type="checkbox"]')){
						
					} else {
						$('#belmijterugformulier').fadeOut();
						$('#belmijterugformulier').removeClass("-on");
						allGood = false;
					}
				}
			});
		}

		
		

		$(function (){
			$.fn.emptyErrors = function(){
				$("#naam-errors").empty();
				$("#naam-errors").hide();
				$("#telefoonnummer-errors").empty();
				$("#telefoonnummer-errors").hide();
			}
		});

		$("form#dienstcontactformulier").submit(function(e){
			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: '/dienstcontact',
				dataType: 'json',
				data: $('form#dienstcontactformulier').serialize(),
				success: function(data)
				{
					$('form#dienstcontactformulier').hide();
					$('div.dienstcontactformulier.success').show();
					setTimeout(function(){
						$('div.dienstcontactformulier.success').hide();
						$('form#dienstcontactformulier').show();
					}, 6000);
					// console.log(data);
					// alert('We hebben je bericht ontvangen en zullen z.s.m. contact met je opnemen');
				},
				error: function(data)
				{
					var errors = data.responseJSON;
					console.log(errors);
          
					// render the errors with js
				}
		    });
		});

		$('button#download-ebook-sidebar').on('click', function(){
			$('#downloadebookformulier').fadeIn();
			$('#downloadebookformulier').addClass("-on");
		    $(window).resize(function(){
		        $('.downloadebookformulier').css({'margin-top':-Number($('.downloadebookformulier').height() /2 )});
		    });
		    setTimeout(function(){
		    	allGood = true;
		    	buitenebookKlik();
		    },1000);
		});

		$('div#close-ebook-form').on('click', function(){
			$('#downloadebookformulier').fadeOut("-on");
			$('#downloadebookformulier').removeClass("-on");
			allGood = false;

		});

		var allGood = true;

		function buitenebookKlik(e){

			$(document).on('click', function(e) {
				var $el = $('.downloadebookformulier');

				if(allGood == true) {
				
					if($(e.target).is('#downloadebookformulier') || $(e.target).is('#downloadebookformulier .form-group div') || $(e.target).is('#downloadebookformulier .form-group div > p') || $(e.target).is('#downloadebookformulier .form-group > *') || $(e.target).is('#downloadebookformulier > * > * > *') || $(e.target).is('input.form-control') || $(e.target).is('input[type="checkbox"]') || $(e.target).is('input#download-ebook-popup')){
						
					} else {
						$('#downloadebookformulier').fadeOut();
						$('#downloadebookformulier').removeClass("-on");
						allGood = false;
					}
				}
			});
		}

	});
	$(document).ready(function(){
		$('input[name=anti-spam]').val('digi2015marketing');
	});
});

jQuery(function() {
	jQuery.support.placeholder = false;
	test = document.createElement('input');
	if('placeholder' in test) jQuery.support.placeholder = true;
});
$(document).ready(function(){
	setTimeout(function(){

		$(function() {
			if(!$.support.placeholder) { 
				var active = document.activeElement;
				$('input').focus(function () {
					if ($(this).attr('placeholder') != '' && $(this).val() == $(this).attr('placeholder')) {
						$(this).val('').removeClass('hasPlaceholder');
					}
				}).blur(function () {
					if ($(this).attr('placeholder') != '' && ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))) {
						$(this).val($(this).attr('placeholder')).addClass('hasPlaceholder');
					}
				});
				$('textarea').focus(function () {
					if ($(this).attr('placeholder') != '' && $(this).val() == $(this).attr('placeholder')) {
						$(this).val('').removeClass('hasPlaceholder');
					}
				}).blur(function () {
					if ($(this).attr('placeholder') != '' && ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))) {
						$(this).val($(this).attr('placeholder')).addClass('hasPlaceholder');
					}
				});
				$('input').blur();
				$('textarea').blur();
				$(active).focus();
				$('form').submit(function () {
					$(this).find('.hasPlaceholder').each(function() { $(this).val(''); });
				});
			}
		});
	}, 500);
});