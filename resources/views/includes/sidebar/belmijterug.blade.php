{{-- <div id="sidebar-klein">
	<div class="box bel-mij-terug">
		@if(Session::has('belmijterugmessage'))
			<div class="alert alert-info">
				{{ session('belmijterugmessage') }}
			</div>
		@else
		<h3>Bellen met een Facebook Expert?</h3>
		<p>Klik op onderstaande button en vul je naam en telefoonnummer in.</p>
		<button class="btn demo-button" id="belmijterugbutton">Bel mij terug</button>
		@endif
	</div>
</div> --}}
<div id="sidebar-klein">
	<div class="box bel-mij-terug" style="padding:25px 25px 23px">
		<h3>Vraag een strategiesessie aan</h3>
		<p>Ontdek wat de mogelijkheden van Facebook marketing voor jou kunnen betekenen!</p>
		<a href="{!! url('/strategiesessie') !!}" class="btn demo-button">Nu aanvragen</a>
	</div>
</div>