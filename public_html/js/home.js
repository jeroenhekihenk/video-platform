jQuery(function($) {

	$(document).ready(function(){

		$('#recensies-slider').bjqs();

		$('ol.bjqs-markers.h-centered').css('left','0 !important');
		$("#banner-fade").css({"display":"block","margin":"0 auto"});
		$("#slider-banner").css({"display":"block","margin":"0 auto"});
		$('#banner-fade li.bjqs-slide').css('width',$('#banner-fade .bjqs-wrapper').width());

	});
});
