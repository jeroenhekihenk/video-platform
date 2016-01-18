$(document).ready(function(){

	$('.aanmeld-button').on('click', function(){
		$('#aanmeld-formulier').slideDown();
		$('html, body').animate({
			scrollTop: $('#aanmeld-formulier').offset().top
		}, 2000);
	});
	$('.pakketten-button').on('click', function(){
		$('html, body').animate({
			scrollTop: $('#pakketten-balk').offset().top
		}, 2000);
	});

	$('img#paymentmethod').on('click', function(){
	  var data_id = $(this).data('id');
	  var data_title = $(this).data('title');
	  
	  if($('input').hasClass(data_id)) {
	  	
	  	$(this).next().prop('checked', true);
	  }
	  $('input[name=paymentmethod]').val(data_id);
	   
	  if($('input[name=paymentmethod]').val() == 'ideal') {
	  	$('.if-ideal').css({'height': $('div.paymentmethod').height()});
	    $('.if-ideal').fadeIn();
	  } else {
	    $('.if-ideal').fadeOut();
	  }
	});

});

// $('#waargeleerd').parallax({imageSrc: 'http://www.digitusmarketing.nl/images/site/bg/laptop-on-desk-waar-geleerd.jpg'});
// $('#facebookworkshop').parallax({imageSrc: 'http://www.digitusmarketing.nl/images/site/bg/parsifal-presentatie-facebook-nvd.jpg'});