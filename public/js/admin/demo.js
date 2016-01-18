$(document).ready(function() {	

		//$('#left-panel').addClass('animated bounceInRight');
		$('#project-progress').css('width', '50%');
		$('#msgs-badge').addClass('animated bounceIn');	
		
		$('#my-task-list').popover({
			html:true			
		});

		$('div.bewerk-afbeelding').on('click', function(){
  		  $(this).parent().next('.nieuw-afbeelding').show(); 
		  $(this).parent().remove();
		});
}); 