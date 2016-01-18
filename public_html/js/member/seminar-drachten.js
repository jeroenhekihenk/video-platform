//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches


// Laat volgende fieldset zien
$(function (){
	$.fn.nextFieldset = function(){

		if(animating) return false;
		animating = true;
		
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		vorige_li = $(this).parent();
		li_width = $('#progressbar li').width();
		
		//activate next step on progressbar using the index of next_fs
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		$("#progressbar li").eq($("fieldset").index(vorige_li)).addClass("last");
		// $("#progressbar li").eq($("fieldset").index(previous_fs)).addClass("last"))

		//show the next fieldset
		
		// vorige_li.addClass('last');
		//hide the current fieldset with style
		current_fs.animate({opacity: 1}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'margin-left': '-12%'});
				next_fs.css({'margin-left': '0'});
			}, 
			duration: 800, 
			complete: function(){
				animating = false;
			}, 
			//this comes from the custom easing plugin
		});
		$('div.progress-pointer').animate({'left':'+=' + li_width});
	}
});

// Trigger knoppen voor volgende fieldset
// $(".volgende-afrekenen-stap-2, .volgende-afrekenen-stap-4").click(function(){
// 	$(this).nextFieldset();
// });

// Laat vorige fieldset zien
$(function (){
	$.fn.previousFieldset = function(){

		if(animating) return false;
		animating = true;
		
		current_fs = $(this).parent( 'fieldset');
		previous_fs = $(this).parent('fieldset').prev();
		li_width = $('#progressbar li').width();
		
		//de-activate current step on progressbar
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
		$("#progressbar li").eq($("fieldset").index(previous_fs)).removeClass("last");
		
		//show the previous fieldset
		$('div.progress-pointer').animate({'left':'-=' + li_width});

		//hide the current fieldset with style
		previous_fs.animate({opacity: "1"}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale previous_fs from 80% to 100%
				scale = 0.8 + (1 - now) * 0.2;
				//2. take current_fs to the right(50%) - from 0%
				left = ((1-now) * 50)+"%";
				//3. increase opacity of previous_fs to 1 as it moves in
				opacity = 1 - now;

				current_fs.css({'margin-left': '0'});
				previous_fs.css({'margin-left': '0'});
			}, 
			duration: 800, 
			complete: function(){
				animating = false;
			}, 
			//this comes from the custom easing plugin
			
		});

	};
});

// Trigger knoppen voor vorige fieldset
$("a#vrgebutton").click(function(){
	$(this).previousFieldset();
});

$('a#vlgndebutton').click(function(){
	$(this).nextFieldset();
});

volgende = 'Volgende ';
volgende += '<span class="fa fa-caret-right"></span>';
vorige = '<span class="fa fa-caret-left"></span>';
vorige += ' Vorige';
$(document).ready(function(){
	$('.vlgndebutton').html(volgende);
	$('.vrgebutton').html(vorige);
});