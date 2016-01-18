<div id="mainmenubar">
	<div class="container">
		<div class="col-md-2 col-sm-2 logo">
			<a href="{{ action('HomeController@index') }}" title="Digitus Marketing Home">
				<img src="{{ URL::to('/') }}/images/digitus/Digitus-logo-wit.png" onerror="this.src='{{ URL::to('/') }}/images/digitus/Digitus-logo-wit.png'" alt="Logo Digitus Marketing" class="logo">
			</a>
		</div>
		<div class="menubar col-md-10 col-sm-10">
			<nav class="col-md-9 col-sm-9 desktop">
				<ul>
					@if(Request::is('/'))
						<li class="active" id="Home"><a href="#" title="Digitus Marketing Home">Home</a><div class="menu-marker"></div></li>
					@else
						<li id="Home"><a href="#" title="Digitus Marketing Home">Home</a><div class="menu-marker"></div></li>
					@endif
					@if(Request::is('diensten') || Request::is('diensten/*'))
						<li class="active" id="Diensten"><a href="#" title="Bekijk onze diensten">Diensten</a><div class="menu-marker"></div></li>
					@else
						<li id="Diensten"><a href="#" title="Bekijk onze diensten">Diensten</a><div class="menu-marker"></div></li>
					@endif
					@if(Request::is('cases') || Request::is('cases/*'))
						<li class="active" id="Cases"><a href="#" title="Bekijk enkele cases">Cases</a><div class="menu-marker"></div></li>
					@else
						<li id="Cases"><a href="#" title="Bekijk enkele cases">Cases</a><div class="menu-marker"></div></li>
					@endif
					@if(Request::is('trainingen') || Request::is('trainingen/*'))
						<li class="active" id="Trainingen"><a href="#" title="Bekijk onze live en video trainingen">Trainingen</a><div class="menu-marker"></div></li>
					@else
						<li id="Trainingen"><a href="#" title="Bekijk onze live en video trainingen">Trainingen</a><div class="menu-marker"></div></li>
					@endif
					@if(Request::is('blog') || Request::is('blog/*'))
						<li class="active" id="Blog"><a href="#" title="Houd ons blog in de gaten!">Blog</a><div class="menu-marker"></div></li>
					@else
						<li id="Blog"><a href="#" title="Houd ons blog in de gaten!">Blog</a><div class="menu-marker"></div></li>
					@endif
					@if(Request::is('contact'))
						<li class="active" id="Contact"><a href="#" title="Neem contact met ons op">Contact</a><div class="menu-marker"></div></li>
					@else
						<li id="Contact"><a href="#" title="Neem contact met ons op">Contact</a><div class="menu-marker"></div></li>
					@endif
				</ul>
			</nav>
			<div class="rechter-menu col-md-3">
				<div class="demo-holder">
					<img src="{{ URL::to('/') }}/images/site/bel-direct-digitus-marketing.png" alt="Bel direct met een Facebook Expert! 085 - 003 02 56" id="bel-direct">
					{{-- <a class="btn demo-button" id="demo-button" href="">Gratis Demo</a> --}}
				</div>
				<div class="sidemenu pull-right mobiel">
					<a class="sidemenu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
				</div>
			</div>
		</div>
	</div>
</div>