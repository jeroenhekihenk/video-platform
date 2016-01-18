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

		// $('form#facebook-advies').submit(function (e) {
		// 	e.preventDefault();

		// 	var $_token = $('#token-advies').val();

		// 	$.ajax({
		// 		url: '/facebook-advies',
		// 		type: 'POST',
		// 		data: $('form#facebook-advies').serialize(),
		// 		dataType: 'json',
		// 		contentType: "application/json; charset=utf-8",
		// 		headers: { 'X-XSRF-TOKEN':$_token},
		// 		beforeSend: function() {
		//             $('div.ebook-errors').hide();
		//         },
		// 		success: function(data){
		// 			if(data['result'] != "success") {
		// 				// ERROR
		// 				console.log(data['msg']);
		// 				$('div.ebook-errors').show();
		// 			} else {
		// 				// SUCCESS - Do what you like here
		// 				// console.log(data['msg']);
		// 				// alert('HEY');
		// 				$('div.ebook-download-formulier').hide();
		// 				$('div.ebook-download-success').show();
		// 				setTimeout(function(){
		// 					$('div.ebook-download-success').hide();
		// 					$('button#download-ebook').css({'left':'0'}).show();
							
		// 				}, 5000);
		// 			}
		// 		}
		// 	});
		// });

		// $('form#facebook-advies-uitgelicht').submit(function (e) {
		// 	e.preventDefault();

		// 	var $_token = $('#token-advies-uitgelicht').val();

		// 	$.ajax({
		// 		url: 'facebook-advies',
		// 		type: 'POST',
		// 		data: $('form#facebook-advies-uitgelicht').serialize(),
		// 		dataType: 'json',
		// 		contentType: "application/json; charset=utf-8",
		// 		headers: { 'X-XSRF-TOKEN':$_token},
		// 		success: function(data){
		// 			if(data['result'] != "success") {
		// 				// ERROR
		// 				console.log(data['msg']);
		// 			} else {
		// 				// SUCCESS - Do what you like here
		// 				// console.log(data['msg']);
		// 				// alert('HEY');
		// 				$('div.downloadebookformulier').hide();
		// 				$('div.downloadebookformulier.success').show();
		// 				setTimeout(function(){
		// 					$('div#downloadebookformulier').fadeOut();
		// 				}, 5000);

		// 			}
		// 		}
		// 	});
		// });


	});
	$(document).ready(function(){
		$('form#facebook-advies-uitgelicht input[name=anti-spam]').val('digi2015marketing');
		$('form#facebook-advies input[name=anti-spam]').val('digi2015marketing');
	});
});
