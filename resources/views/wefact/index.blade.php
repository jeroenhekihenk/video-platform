@extends('layouts.overview')

@section('titel')
Wefact | Digitus Marketing
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

@section('breadcrumb')
<div id="crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
<p>Je bevindt je hier:</p>
	<ul>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="#" title="Home" itemprop="item">
				<span itemprop="name">Home</span>
				<meta itemprop="position" content="1" />
			</a>
		</li>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active">
			<a href="#" title="Wefact" itemprop="item">
				<span itemprop="name">Wefact</span>
				<meta itemprop="position" content="2" />
			</a>
		</li>
	</ul>
</div>
@stop

@section('content')
		<div class="box introductie">
			<div class="titel">
				<h3 class="titel"><span class="glyphicon glyphicon-blackboard"></span> Wefact</h3>
			</div>
		</div>
		<div class="box introductie">
			{!! Form::open(array('action'=>'WefactController@send')) !!}
			<div class="col-md-12">
				<h2>Persoonsgegevens</h2>
			</div>
			<div class="col-md-2 form-group">
				{!! Form::label('aanhef', 'Aanhef:') !!}
				{!! Form::select('aanhef', array('M'=>'Dhr.', 'F'=>'Mvr.'), '', array('class'=>'form-control')) !!}
			</div>
			<div class="form-group col-md-5">
				{!! Form::label('voornaam', 'Voornaam:') !!}
				{!! Form::text('voornaam', Input::old('voornaam'), array('class'=>'form-control')) !!}
			</div>
			<div class="form-group col-md-5">
				{!! Form::label('achternaam', 'Achternaam:') !!}
				{!! Form::text('achternaam', Input::old('achternaam'), array('class'=>'form-control')) !!}
			</div>
			<div class="form-group col-md-12">
				{!! Form::label('email', 'Emailadres:') !!}
				{!! Form::email('email', Input::old('email'), array('class'=>'form-control')) !!}
			</div>
			<div class="form-group col-md-6">
				{!! Form::label('telefoonnummer', 'Telefoonnummer:') !!}
				{!! Form::input('tel', 'telefoonnummer', Input::old('telefoonnummer'), array('class'=>'form-control')) !!}
			</div>
			<div class="form-group col-md-6">
				{!! Form::label('mobielnummer', 'Mobiel:') !!}
				{!! Form::input('tel', 'mobielnummer', Input::old('mobielnummer'), array('class'=>'form-control')) !!}
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="col-md-12">
				<h2>Bedrijfsgegevens</h2>
			</div>
			<div class="form-group col-md-12">
				{!! Form::label('bedrijfsnaam', 'Bedrijfsnaam:') !!}
				{!! Form::text('bedrijfsnaam', Input::old('bedrijfsnaam'), array('class'=>'form-control')) !!}
			</div>
			<div class="form-group col-md-6">
				{!! Form::label('adres', 'Adres:') !!}
				{!! Form::text('adres', Input::old('adres'), array('class'=>'form-control')) !!}
			</div>
			<div class="form-group col-md-6">
				{!! Form::label('postcode', 'Postcode:') !!}
				{!! Form::text('postcode', Input::old('postcode'), array('class'=>'form-control')) !!}
			</div>
			<div class="form-group col-md-8">
				{!! Form::label('woonplaats', 'Woonplaats:') !!}
				{!! Form::text('woonplaats', Input::old('woonplaats'), array('class'=>'form-control')) !!}
			</div>
			<div class="form-group col-md-4">
				{!! Form::label('land', 'Land:') !!}
				{!! Form::select('land', array('NL'=>'Nederland', 'BE'=>'België'), '', array('class'=>'form-control')) !!}
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="form-group">
				{!! Form::submit('Bestellen!', array('class'=>'btn demo-button pull-right')) !!}
			</div>
			{!! Form::close() !!}
		</div>
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