jQuery(function($) {

	$(document).ready(function(){

		var allGood = true;

		function buitenKlik(e){

			$(document).on('click', function(e) {
				var $el = $('.belmijterugformulier');

				if(allGood == true) {

					if($(e.target).is('div.belmijterugformulier') || $(e.target).is('div.belmijterugformulier > div') || $(e.target).is('div.belmijterugformulier > div > *') || $(e.target).is('div.belmijterugformulier > form') || $(e.target).is('div.belmijterugformulier > form > *') || $(e.target).is('input.btn.btn-success') || $(e.target).is('div.belmijterugformulier > hr') || $(e.target).is('div.belmijterugformulier > form > div > input') || $(e.target).is('div.belmijterugformulier > form > div > p')){
						console.log(e.target);
					} else {
						console.log('Hm he'+e.target);
						$('#belmijterugformulier').fadeOut();
						$('#belmijterugformulier').removeClass("-on");
						allGood = false;
					}
				}
			});
		}

		$("form#belmijterugformulier").submit(function(e){
			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'belmijterug',
				dataType: 'json',
				data: $('form#belmijterugformulier').serialize(),
				beforeSend: function() {
		            $('body').emptyErrors();
		        },
				success: function(data)
				{
					console.log(data);
					$('div.belmijterugformulier').hide();
					$('div.belmijterugformulier.success').show();
					setTimeout(function(){
						$('#belmijterugformulier').fadeOut();
						$('div.belmijterugformulier.success').hide();
						$('div.belmijterugformulier').show();
						$('#belmijterugformulier').removeClass("-on");
					}, 1000);
					// alert('We hebben je bericht ontvangen en zullen z.s.m. contact met je opnemen');
				},
				error: function(data)
				{
					var errors = data.responseJSON;
					// console.log(errors);
					$.each(errors, function(index, value)
					{
						if(index == 'naam')
						{
							$('form#belmijterugformulier div.form-group div#naam-errors').show();
							$('form#belmijterugformulier div.form-group div#naam-errors').append('<p>' + value + '</p>');
							// console.log(value);
						}
						if(index == 'telefoonnummer')
						{
							$('form#belmijterugformulier div.form-group div#telefoonnummer-errors').show();
							$('form#belmijterugformulier div.form-group div#telefoonnummer-errors').append('<p>' + value + '</p>');
							console.log(index, value);
						}
					});
					// render the errors with js
				}
		    });
		});

		$('#belmijterugbutton, #bel-direct').on('click', function(){
			$('#belmijterugformulier').fadeIn();
			$('#belmijterugformulier').addClass("-on");
		    $(window).resize(function(){
		        $('.belmijterugformulier').css({'margin-top':-Number($('.belmijterugformulier').height() /2 )});
		    });

		    setTimeout(function(){
		    	allGood = true;
		    	buitenKlik();
		    },1000);
		});

		$('div#close-form').on('click', function(){
			$('#belmijterugformulier').fadeOut("-on");
			$('#belmijterugformulier').removeClass("-on");
			allGood = false;

		});

	});

});