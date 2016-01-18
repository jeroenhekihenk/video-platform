<div id="sidemenu">
	<div id="close-sidemenu">
		<button type="button" class="close pull-left" style="font-size:22pt !important;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </button>
	</div>
	<ul class="list-buttons">
		@if(Request::is('/'))
			<li class="active" id="Home"><a href="#" title="Digitus Marketing Home"><span class="fa fa-chevron-right"></span> Home</a><div class="menu-marker"></div></li>
		@else
			<li id="Home"><a href="#" title="Digitus Marketing Home">Home</a><div class="menu-marker"></div></li>
		@endif
		@if(Request::is('diensten') || Request::is('diensten/*'))
			<li class="active" id="Diensten"><a href="#" title="Bekijk onze diensten"><span class="fa fa-chevron-right"></span> Diensten</a><div class="menu-marker"></div></li>
		@else
			<li id="Diensten"><a href="#" title="Bekijk onze diensten">Diensten</a><div class="menu-marker"></div></li>
		@endif
		@if(Request::is('cases') || Request::is('cases/*'))
			<li class="active" id="Cases"><a href="#" title="Bekijk enkele cases"><span class="fa fa-chevron-right"></span> Cases</a><div class="menu-marker"></div></li>
		@else
			<li id="Cases"><a href="#" title="Bekijk enkele cases">Cases</a><div class="menu-marker"></div></li>
		@endif
		@if(Request::is('trainingen') || Request::is('trainingen/*'))
			<li class="active" id="Trainingen"><a href="#" title="Bekijk onze live en video trainingen"><span class="fa fa-chevron-right"></span> Trainingen</a><div class="menu-marker"></div></li>
		@else
			<li id="Trainingen"><a href="#" title="Bekijk onze live en video trainingen">Trainingen</a><div class="menu-marker"></div></li>
		@endif
		@if(Request::is('blog') || Request::is('blog/*'))
			<li class="active" id="Blog"><a href="#" title="Houd ons blog in de gaten!"><span class="fa fa-chevron-right"></span> Blog</a><div class="menu-marker"></div></li>
		@else
			<li id="Blog"><a href="#" title="Houd ons blog in de gaten!">Blog</a><div class="menu-marker"></div></li>
		@endif
		@if(Request::is('contact'))
			<li class="active" id="Contact"><a href="#" title="Neem contact met ons op"><span class="fa fa-chevron-right"></span> Contact</a><div class="menu-marker"></div></li>
		@else
			<li id="Contact"><a href="#" title="Neem contact met ons op">Contact</a><div class="menu-marker"></div></li>
		@endif
	</ul>
</div>