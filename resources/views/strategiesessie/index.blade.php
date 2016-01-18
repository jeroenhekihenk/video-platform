@extends('layouts.fullwidth')

@section('titel')
	Strategiesessie Inplannen | Digitus Marketing
@stop

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
@stop

@section('meta')
	@include('includes.meta.indexfollow')
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
			<a href="{!! action('Strategiesessie\StrategieSessieController@index') !!}" title="Strategiesessie inplannen" itemprop="item">
				<span itemprop="name">Strategiesessie inplannen</span>
				<meta itemprop="position" content="2" />
			</a>
		</li>
	</ul>
</div>
@stop

@section('content')

<style>
h5 {
    margin-bottom: 10px !important;
}
div.titel > h1,
div.titel > h2 {
	font-size: 19pt !important;
}

/*
|-----------------------------------------------------------------------
| MOBILE PORTRAIT
|-----------------------------------------------------------------------
*/

@media only screen and (min-width:220px) and (max-width:680px) and (orientation:portrait) {
	div.col-md-8 {
		padding:0;
	}
	.col-md-12 > .col-md-6 {
		padding:0;
	}
	div.container .col-md-12,
	div.container .col-xs-12,
	div.container .col-sm-12,
	div.container .col-lg-12 {
		padding:0;
	}
}

/*
|-----------------------------------------------------------------------
| MOBILE LANDSCAPE
|-----------------------------------------------------------------------
*/

@media screen and (min-width:321px) and (max-width:768px) and (orientation:landscape) {
	div.col-md-8 {
		padding:0;
	}
	.col-md-12 > .col-md-6 {
		padding:0;
	}
}
</style>
	<div class="col-md-8" style="display:block;float:none;margin:10px auto">
		<div class="box introductie" style="padding:0;">
			<!-- <img src="http://www.digitusmarketing.nl/images/media/fb-mobile-ad.png" alt="Hoe ziet een mobiele advertentie er uit?"> -->
			<div class="titel" style="padding: 10px 35px;">
				<h1 style="margin:20px 0 0 !important;">Strategiesessie Inplannen</h1>
			</div>
			@if($errors->any())
		      <div class="alert alert-danger">
		        <ul>
		          @foreach($errors->all() as $error)
		          <li>{!! $error !!}</li>
		          @endforeach
		        </ul>
		      </div>
			@endif
			<div class="clearfix"></div>
			<hr>
			<div class="content" style="padding: 10px 35px;">
				<p>Tijdens een strategiesessie werken we aan de hand van jouw doelen een Facebook marketing strategie uit. Er gaat een wereld voor je open, jouw kijk op het zakelijk inzetten van Facebook wordt compleet op z’n kop gezet! Of je nu in contact wil komen met nieuwe klanten of meer omzet uit bestaande klanten wil halen, we werken samen met jou de strategie uit!</p>
				<p>Uiteraard kun je tijdens een strategiesessie ook met al jouw vragen terecht.</p>
				<i>Strategiesessies worden gedaan door Parsifal of Rogier, en worden gehouden per telefoon of skype.</i>
				<h5>Investering per strategiesessie: &euro;180,-</h5>
			</div>
		

		<!-- <div class="box introductie">
			<p>Tijdens het adviesgesprek krijg je antwoord op al jouw vragen zoals:</p>
			<ul>
				<li>Hoeveel gebruikers er binnen jouw doelgroep actief zijn op Facebook.</li>
				<li>Wat kost het? Hoe berekent Facebook de kosten voor advertenties?</li>
				<li>Waarom adverteren op Facebook zo goedkoop is ten opzichte van andere media.</li>
				<li>Aan de hand van welke criteria je jouw doelgroep kunt bereiken op Facebook. </li>
				<li>Hoe je mensen die jouw website hebben bezocht bereikt via Facebook.</li>
				<li>Hoe je gebruikers bereikt met een soortgelijk ‘profiel’ als jouw huidige klanten.</li>
				<li>Hoe je jouw producten of diensten verkoopt via Facebook.</li>
				<li>Hoe je eenvoudig de resultaten van jouw Facebook marketing achterhaalt.</li>
			</ul>
		</div> -->

		
			<div class="titel" style="padding: 10px 35px 0;">
				<h2>Plan direct een strategiesessie in!</h2>
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="content" style="padding: 10px 35px 35px;">
				{!! Form::open(array('action'=>'Strategiesessie\StrategieSessieController@store')) !!}
				<div class="col-md-12" style="padding:0;">
					<div class="form-group col-md-6">
						{!! Form::label('voornaam', 'Voornaam:') !!} <span class="asterisk">*</span>
						{!! Form::text('voornaam', Input::old('voornaam'), array('class'=> 'form-control', 'placeholder'=>'Voornaam..')) !!}
					</div>
					<div class="form-group col-md-6">
						{!! Form::label('achternaam', 'Achternaam:') !!} <span class="asterisk">*</span>
						{!! Form::text('achternaam', Input::old('achternaam'), array('class'=>'form-control', 'placeholder'=>'Achternaam..')) !!}
					</div>
				</div>
				<div class="col-md-12" style="padding:0;">
					<div class="col-md-6 form-group">
						{!! Form::label('email', 'Emailadres:') !!} <span class="asterisk">*</span>
						{!! Form::email('email', Input::old('email'), array('class'=>'form-control', 'placeholder'=>'Emailadres..')) !!}
					</div>
					<div class="col-md-6 form-group">
						{!! Form::label('bedrijfsnaam', 'Bedrijfsnaam:') !!} <span class="asterisk">*</span>
						{!! Form::text('bedrijfsnaam', Input::old('bedrijfsnaam'), array('class'=>'form-control', 'placeholder'=>'Bedrijfsnaam..')) !!}
					</div>
				</div>
				<div class="col-md-12" style="padding:0;">
					<div class="col-md-6 form-group">
						{!! Form::label('website_url', 'Website URL:') !!} <span class="asterisk">*</span>
						{!! Form::text('website_url', Input::old('website_url'), array('class'=>'form-control', 'placeholder'=>'Website URL..')) !!}
					</div>
					<div class="col-md-6 form-group">
						{!! Form::label('facebook_url', 'Facebook URL:') !!} <span class="asterisk">*</span>
						{!! Form::text('facebook_url', Input::old('facebook_url'), array('class'=>'form-control', 'placeholder'=>'Facebook URL..')) !!}
					</div>
				</div>
				<div class="clearfix"></div>
				<hr>
				<div class="form-group">
					{!! Form::hidden('anti-spam') !!}
					{!! Form::submit('Strategiesessie aanvragen!', array('class'=>'btn demo-button pull-right', 'id'=>'afspraakplannen')) !!}
				</div>
				<div class="clearfix"></div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop
@section('diensten')

@stop

@section('sidebar')
	@include('includes.sidebar.groot')
@stop

@section('footer')
	@include('includes.footer.mainfooter')
@stop

@section('footerscript')
	{!! Html::script('js/jquery-1.11.2.js') !!}
	{!! Html::script('js/belmijterugprovider.js') !!}
	@include('includes.forms.belmijterugformulier')
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@stop
