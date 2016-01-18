@extends('layouts.home')

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
@stop

@section('meta')
	@include('includes.meta.indexfollow')
	<meta name="description" content="Een bedrijf is als een goed verhaal: inspirerend, pakkend en meeslepend. Digitus Marketing zorgt ervoor dat jouw verhaal wordt verteld. Dit met de juiste contentstrategie, ondersteund door gerichte social media marketing en slimme apps.">
	<link rel="canonical" href="{!! action('HomeController@index' ) !!}">
	<link rel="publisher" href="https://plus.google.com/+DigitusmarketingNl">
@stop

@section('pixels')
	@include('includes.pixels.fb_audience')
@stop

@section('menu')
<div id="menubars">
	@include('includes.menus.hetmenu')
</div>
@stop

@section('uitgelicht')
	@include('includes.uitgelicht.ebook')
@stop

@section('snellepage')
	@include('includes.snellepage')
@stop

@section('content')
		<div class="box introductie">
			<div class="titel">
				<h3>Digitus Marketing is een online marketing bureau gespecialiseerd in Facebook Marketing.</h3>
			</div>
			<div class="content">
				<p>Een bedrijf is als een goed verhaal: inspirerend, pakkend en meeslepend. Digitus Marketing zorgt ervoor dat jouw verhaal wordt verteld. Dit met de juiste contentstrategie, ondersteunt door gerichte social media marketing en slimme apps.</p>
			</div>
		</div>

		@include('includes.personen')
		
		<div class="box recensies-slider">
			@include('includes.recensies.klanten')
		</div>

@stop

@section('sidebar')

	@include('includes.sidebar.groot')

@stop

@section('footer')
	@include('includes.footer.mainfooter')
@stop

@section('footerscript')
	{!! Html::script('js/jquery-1.11.2.js') !!}
	@include('includes.forms.belmijterugformulier')
	@include('includes.forms.downloadebookformulier')
	{!! Html::script('js/belmijterugprovider.js') !!}
	{!! Html::script('js/ebookprovider.js') !!}
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	{!! Html::script('js/bjqs.js') !!}
	{!! Html::script('js/home.js') !!}
@stop