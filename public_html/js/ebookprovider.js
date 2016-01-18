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

	$(document).ready(function(){

		// Get ebook download count
		$.ajax({
			type: 'GET',
			url: '/ebook/get',
			dataType: 'json',
	    }).done(function(data){
	    	if(data.success == true){
	    		// Variablen setten
	    		var downloads = data.ebook.downloads;
	    		var demdownloads = downloads.split("");
	    		var aantaltellers = '6';
	    
	    		// Form fields implementeren
	    		// Heeft het formulier 4 invul velden?
	    		if(data.ebook.form_field1 && data.ebook.form_field2 && data.ebook.form_field3 && data.ebook.form_field4){
	    			$('div#form-fields-uitgelicht').append('<div class="col-md-4"></div>'.times(2));
	    			$('div#form-fields-uitgelicht div.col-md-4').first().append('<input class="form-control" id="'+data.ebook.form_field2+'" type="text" value="">' + '<br/>' + '<input class="form-control" id="'+data.ebook.form_field1+'" type="email" value="">');
	    			$('div#form-fields-uitgelicht div.col-md-4:eq(1)').append('<input class="form-control" id="'+data.ebook.form_field3+'" type="text" value="">' + '<br/>' + '<input class="form-control" id="'+data.ebook.form_field4+'" type="text" value="">');

	    			$('div#form-field-sidebar').append(
	    				'<input class="form-control" id="'+data.ebook.form_field2+'" type="text" value="">' 
	    				+ '<br/>' + 
	    				'<input class="form-control" id="'+data.ebook.form_field1+'" type="email" value="">' 
	    				+ '<br/>' + 
	    				'<input class="form-control" id="'+data.ebook.form_field3+'" type="text" value="">' 
	    				+ '<br/>' + 
	    				'<input class="form-control" id="'+data.ebook.form_field4+'" type="text" value="">' 
	    				+ '<br/>' +
	    				'<div style="position: absolute; left: -5000px;"><input type="text" class="form-token" name="" tabindex="-1" value=""></div>'
						+ '<br/>' +
						'<input id="download-ebook-popup" class="btn demo-button pull-right" type="submit" value="Download e-book" name="submit">'
	    			);

	    		} else if (data.ebook.form_field1 && data.ebook.form_field2 && data.ebook.form_field3 && !data.ebook.form_field4) {
		    		// Heeft het formulier 3 invulvelden?
		    		$('div#form-fields-uitgelicht').append('<div class="col-md-4"></div>'.times(2));
		    		$('div#form-fields-uitgelicht').append('<div class="col-md-8"></div>');
	    			$('div#form-fields-uitgelicht div.col-md-4').first().append('<input class="form-control" id="'+data.ebook.form_field2+'" type="text" value="">');
	    			$('div#form-fields-uitgelicht div.col-md-4:eq(1)').append('<input class="form-control" id="'+data.ebook.form_field3+'" type="text" value="">');
	    			$('div#form-fields-uitgelicht div.col-md-8').attr('style','margin-top:15px;');
	    			$('div#form-fields-uitgelicht div.col-md-8').first().append('<input class="form-control" id="'+data.ebook.form_field1+'" type="email" value="">');

	    			$('div#form-field-sidebar').append(
	    				'<input class="form-control" id="'+data.ebook.form_field2+'" type="text" value="">' 
	    				+ '<br/>' + 
	    				'<input class="form-control" id="'+data.ebook.form_field3+'" type="text" value="">' 
	    				+ '<br/>' + 
	    				'<input class="form-control" id="'+data.ebook.form_field1+'" type="email" value="">' 
	    				+ '<br/>' + 
	    				'<div style="position: absolute; left: -5000px;"><input type="text" class="form-token" name="" tabindex="-1" value=""></div>'
						+ '<br/>' +
						'<input id="download-ebook-popup" class="btn demo-button pull-right" type="submit" value="Download e-book" name="submit">'
	    			);

	    		} else if (data.ebook.form_field1 && data.ebook.form_field2 && !data.ebook.form_field3 && !data.ebook.form_field4){
		    		// Heeft het formulier 2 invulvelden?

	    			$('div#form-fields-uitgelicht').append('<div class="col-md-4"></div>'.times(2));
	    			$('div#form-fields-uitgelicht div.col-md-4').first().append('<input class="form-control" id="'+data.ebook.form_field2+'" type="text" value="">');
	    			$('div#form-fields-uitgelicht div.col-md-4:eq(1)').append('<input class="form-control" id="'+data.ebook.form_field1+'" type="email" value="">');

	    			$('div#form-field-sidebar').append(
	    				'<input class="form-control" id="'+data.ebook.form_field2+'" type="text" value="">' 
	    				+ '<br/>' + 
	    				'<input class="form-control" id="'+data.ebook.form_field1+'" type="email" value="">' 
	    				+ '<br/>' +
	    				'<div style="position: absolute; left: -5000px;"><input type="text" class="form-token" name="" tabindex="-1" value=""></div>'
						+ '<br/>' +
						'<input id="download-ebook-popup" class="btn demo-button pull-right" type="submit" value="Download e-book" name="submit">'
	    			);
	    		}

	    		// Form fields eigenschappen geven
	    		if(data.ebook.form_field1){
		    		$('input#'+data.ebook.form_field1)
		    		.attr('name', data.ebook.form_field1)
		    		.attr('placeholder', data.ebook.field1_placeholder);
		    	} else {

		    	}
		    	if(data.ebook.form_field2){
		    		$('input#'+data.ebook.form_field2)
		    		.attr('name', data.ebook.form_field2)
		    		.attr('placeholder', data.ebook.field2_placeholder);
		    	} else {

		    	}
		    	if(data.ebook.form_field3){
		    		$('input#'+data.ebook.form_field3)
		    		.attr('name', data.ebook.form_field3)
		    		.attr('placeholder', data.ebook.field3_placeholder);
		    	} else {

		    	}
		    	if(data.ebook.form_field4){
		    		$('input#'+data.ebook.form_field4)
		    		.attr('name', data.ebook.form_field4)
		    		.attr('placeholder', data.ebook.field4_placeholder);
	    		} else {

	    		}

	    		// Variablen implementeren in Ebook formulier / uitgelicht sectie op homepage
	    		$('input[type=hidden][name=formaction]').val(data.ebook.form_link);
	    		$('input[type=hidden][name=u]').val(data.ebook.form_u);
	    		$('input[type=hidden][name=id]').val(data.ebook.form_id);
	    		$('input.form-token').attr('name', data.ebook.form_token);
	    		$('h2#ebook-slogan-titel, h4#ebook-slogan-titel').html(data.ebook.slogan_titel);
	    		$('p#ebook-slogan-tekst').html(data.ebook.slogan_tekst);

	    		// Afbeelding ebook implementeren
	    		$('img.ebook-uitgelicht').attr('src', window.location.protocol + '//' + window.location.host + '/' + data.ebook.image).attr('alt', data.ebook.naam);

	    		// Aantal benodigde lege en gevulde tellers vaststellen
	    		var nodigtellers = aantaltellers - downloads.length;
	    		var leeg = '<div class="col-md-2"><span class="teller"></span></div>'.times(nodigtellers);

	    		// Lege en gevulde tellers appenden
				$('div.ebook-counter > div.col-md-4').append(leeg);
	    		$.each(demdownloads, function(key,value) {
	    			$('div.ebook-counter > div.col-md-4').append('<div class="col-md-2"><span class="teller">' + value + '</span></div>');
	    		});
	    	}
	    	
	    });
		

		if( !isMobile.any() ) {

			$('#download-ebook').on('click', function(){
				$(this).css({'left':'80%'});
				setTimeout(function(){
					$('#download-ebook').hide();
					$('.ebook-download-formulier').fadeIn();
				},1000);
				
			});
		} else {
			$('#download-ebook').on('click', function(){
				$(this).css({'left':'25%'});
				setTimeout(function(){
					$('#download-ebook').hide();
					$('.ebook-download-formulier').slideDown();
				},1000);
				
			});
		}

		$('form#mailchimp-ebook').submit(function (e) {
			e.preventDefault();

			var $_token = $('#token-download').val();
			var formaction = $('input[type=hidden][name=formaction]').val();

			$.ajax({
				url: formaction,
				type: 'POST',
				data: $('form#mailchimp-ebook').serialize(),
				dataType: 'jsonp',
				contentType: "application/json; charset=utf-8",
				beforeSend: function() {
		            $('div.ebook-errors').hide();
		        },
				success: function(data){
					if(data['result'] != "success") {
						// ERROR
						console.log(data);
						$('div.ebook-errors').show();
					} else {
						// SUCCESS - Do what you like here
						// console.log(data['msg']);
						// alert('HEY');
						$('div.ebook-download-formulier').hide();
						$('div.ebook-download-success').show();
						setTimeout(function(){
							$('div.ebook-download-success').hide();
							$('button#download-ebook').css({'left':'0'}).show();
							
						}, 5000);

						$.ajax({
							type: 'POST',
							url: 'ebook/post',
							data: $('form#mailchimp-ebook').serialize(),
							dataType: 'json',
							headers: { 'X-XSRF-TOKEN':$_token},
						});
					}
				}
			});
		});

		$('form#mailchimp-ebook-popup').submit(function (e) {
			e.preventDefault();

			var $_token = $('#token-sidebar').val();
			var formaction = $('input[type=hidden][name=formaction]').val();

			$.ajax({
				url: formaction,
				type: 'POST',
				data: $('form#mailchimp-ebook-popup').serialize(),
				dataType: 'jsonp',
				contentType: "application/json; charset=utf-8",
				success: function(data){
					if(data['result'] != "success") {
						// ERROR
						console.log(data);
					} else {
						// SUCCESS - Do what you like here
						// console.log(data['msg']);
						// alert('HEY');
						$('div.downloadebookformulier').hide();
						$('div.downloadebookformulier.success').show();
						setTimeout(function(){
							$('div#downloadebookformulier').fadeOut();
						}, 5000);

						$.ajax({
							type: 'POST',
							url: 'ebook/post',
							data: $('form#mailchimp-ebook-popup').serialize(),
							dataType: 'json',
							headers: { 'X-XSRF-TOKEN':$_token},
						});
					}
				}
			});
		});

		$('#download-ebook-sidebar').on('click', function(){
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

});