@extends('layouts.overview')

@section('titel')
	404 | Digitus Marketing
@stop

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
@stop

@section('meta')
	@include('includes.meta.noindexnofollow')
@stop

@section('pixels')
@stop

@section('menu')
<div id="menubars">
	@include('includes.menus.hetmenu')
</div>
@stop

@section('content')
		<div class="box introductie">
			<div class="titel">
				<h3>Ohoh! Er is iets misgegaan..</h3>
			</div>
			<div class="content">
				<p>Het lijkt er op dat de pagina die je probeerde te bezoeken niet (meer) bestaat.</p>
				<p>Je kunt <a href="{!! action('HomeController@index') !!}">terugkeren naar de homepagina</a> of gebruik het menu hierboven om verder te navigeren.</p>
			</div>
		</div>

@stop


@section('sidebar')
	@include('includes.sidebar.klein')

@stop

@section('footer')
	@include('includes.footer.mainfooter')
@stop

@section('footerscript')
	@include('includes.forms.belmijterugformulier')
	{!! Html::script('js/jquery-1.11.2.js') !!}
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	{!! Html::script('js/blog.js') !!}
@stop