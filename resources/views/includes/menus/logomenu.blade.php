<div id="mainmenubar">
	<div class="container">
		<div class="col-md-5">
			<button id="zelf-leren" class="white-transparent btn zelf-leren-menu" >Ik wil het zelf leren</button>
		</div>
		<div class="col-md-2 col-sm-2 logo">
			<a href="{{ action('HomeController@index') }}" title="Digitus Marketing">
				<img src="{{ URL::to('/') }}/images/digitus/Digitus-logo-wit.svg" onerror="this.src='{{ URL::to('/') }}/images/digitus/Digitus-logo-wit.png'" alt="" class="logo" style="min-height:50px;">
			</a>
		</div>
		<div class="col-md-5">
			<button id="uitbesteden" class="white-transparent btn uitbesteden uitbesteden-menu" >Ik wil het uitbesteden</button>
		</div>
	</div>
</div>