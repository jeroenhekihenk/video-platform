@extends('layouts.overview')

@section('titel')
Trainingen | Digitus Marketing
@stop

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<style>
		div.col-md-6.s-p:nth-child(2) {
			padding-left:0;
		}
		.col-md-6.s-p:nth-child(3) {
			padding-right:0;
		}
	</style>
@stop

@section('meta')
	@include('includes.meta.indexfollow')

	<meta name="keywords" content="facebook marketing, facebook, adverteren, facebook app, campagne, training, seminar, webinar, workshop, video training, live training">
	<meta name="description" content="Wil jij zelf leren adverteren op Facebook? Volg dan een live training in de vorm van een seminar of workshop. Of wil je liever vanuit je bureaustoel leren? Dat kan ook! Volg dan een video training via een live webinar of videocursus. Via deze Facebook trainingen leer je hoe je zelf succesvolle Facebook advertentie campagnes opzet.">
	
	<meta property="fb:admins" content="100000866281800" />
	<meta property="fb:admins" content="100000646526460" />
	<meta property="og:url" content="{!! action('TrainingenController@index') !!}">
	<meta property="og:title" content="Trainingen | Digitus Marketing">
	<meta property="og:description" content="Wil jij zelf leren adverteren op Facebook? Volg dan een live training in de vorm van een seminar of workshop. Of wil je liever vanuit je bureaustoel leren? Dat kan ook! Volg dan een video training via een live webinar of videocursus. Via deze Facebook trainingen leer je hoe je zelf succesvolle Facebook advertentie campagnes opzet.">
	<meta property="og:site_name" content="digitusmarketing.nl">
	<meta property="og:locale" content="nl_NL">

	<meta name="twitter:url" content="{!! action('TrainingenController@index') !!}">
	<meta name="twitter:title" content="Trainingen | Digitus Marketing">
	<meta name="twitter:description" content="Wil jij zelf leren adverteren op Facebook? Volg dan een live training in de vorm van een seminar of workshop. Of wil je liever vanuit je bureaustoel leren? Dat kan ook! Volg dan een video training via een live webinar of videocursus. Via deze Facebook trainingen leer je hoe je zelf succesvolle Facebook advertentie campagnes opzet.">

	<link rel="canonical" href="{!! action('TrainingenController@index') !!}">
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

@section('breadcrumb')
<div id="crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
<p>Je bevindt je hier:</p>
	<ul>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="{!! action('HomeController@index') !!}" title="Home" itemprop="item">
				<span itemprop="name">Home</span>
				<meta itemprop="position" content="1" />
			</a>
		</li>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active">
			<a href="{!! action('TrainingenController@index') !!}" title="Trainingen" itemprop="item">
				<span itemprop="name">Trainingen</span>
				<meta itemprop="position" content="2" />
			</a>
		</li>
	</ul>
</div>
@stop

@section('content')
		<div class="box introductie">
			<div class="titel">
				<h3 class="titel"><span class="glyphicon glyphicon-blackboard"></span> Trainingen</h3>
			</div>
		</div>
		@foreach($trainingen as $dienst)
		<div class="col-md-6 s-p">
			<div class="s-p-i box">
				<span class="{!! $dienst->icon !!}"></span>
				<h2 class="titel {!! $dienst->slug !!}">{!! $dienst->titel !!}</h2>
				<a class="btn nrml-button" href="{!! action('TrainingenController@show', [$dienst->slug] ) !!}" title="{!! $dienst->titel !!}">Lees meer</a>
			</div>
		</div>
		@endforeach
		<!-- <div class="box content">
			<p>Wil jij een workshop of seminar van ons bijwonen? Houd deze pagina dan in de gaten, hier vind je spoedig een overzicht van onze trainingen.</p>
		</div> -->
@stop

@section('sidebar')
	@include('includes.sidebar.belmijterug')

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
@stop