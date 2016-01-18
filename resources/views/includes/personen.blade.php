@foreach($users as $user)
<div class="box persoon-intro">
	<div class="col-md-3">
		<img src="{{ url($user->afbeelding) }}" alt="{!! $user->voornaam. ' ' .$user->achternaam !!}">
	</div>
	<div class="col-md-9 over-persoon">
		<h3 class="pull-left {!! $user->voornaam. '-' .$user->achternaam !!}">{!! $user->voornaam. ' ' .$user->achternaam !!}</h3>
		<div class="contact pull-right dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" id="dropdownMenu1">
				Contact <span class="caret"></span>
			</a>
			<ul class="dropdown-menu meeropties box" role="menu" aria-labelledby="dropdownMenu1">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url($user->facebook) }}" target="_blank"><span class="fa fa-facebook"></span> Facebook</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url($user->twitter) }}" target="_blank"><span class="fa fa-twitter"></span> Twitter</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="mailto:{{ $user->email }}" target="_blank"><span class="glyphicon glyphicon-envelope"></span> Stuur een mail</a></li>
				{{-- <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="fa fa-info"></span> Meer over {{$user->voornaam}}</a></li> --}}
			</ul>
		</div>
		<p class="over-tekst over-{!! $user->voornaam !!}">
			{{$user->over}}
		</p>
	</div>
</div>
@endforeach