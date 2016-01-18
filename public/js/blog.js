// Maak betaling aan Mollie
$('#loadmore-posts').on('click', function(){

	
	
	$.ajax({
		type: 'POST',
		url: '/moreposts',
		dataType: 'json',
    }).done(function(data){
    	if(data.success == false){
    		var arr = data.errors;
            $.each(arr, function(index, value)
            {
            	alert('Neem aub contact met ons op, er is iets misgegaan!');
            });
           
    	} else if(data.success == true) {
    		
    		
    	}
	});
	return false;
});