@extends('layouts.fullwidth')

@section('titel')
	{!! $hetproduct->naam !!}
@stop

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	{!! Html::style('/css/salespage.css') !!}
@stop

@section('meta')
	@include('includes.meta.noindexnofollow')
@stop

@section('pixels')
<?php $extra = "fbq('track', 'ViewContent'); fbq('track', 'AddToCart');"; ?>
	@include('includes.pixels.fb_audience', array($extra))
@stop

@section('menu')
@if(isset($hetproduct))
<div id="menubars">
	@include('includes.menus.logomenu')
</div>
@endif
@stop

@section('content')
@if(isset($hetproduct))
		@if(Session::has('message'))
        <div class="col-md-12">
          <div class="alert alert-danger">{!! Session::get('message') !!}</div>
        </div>
        @endif
        @if($errors->any())
        <div class="alert alert-danger">
        	<p>Er zijn fouten in het formulier opgetreden:</p>
        	<ul>
        		@foreach($errors->all() as $error)
        		<li>{!! $error !!}</li>
        		@endforeach
        	</ul>
        </div>
        @endif
		<div class="introductie col-md-12">
			<div class="titel">
				<h1 class="titel">{!! $hetproduct->bestelpagina->first()->titel !!}</h1>
				<h4 class="sub-titel">{!! $hetproduct->bestelpagina->first()->slogan !!}</h4>
				<!-- <h5>Wij bieden jou <b>de makkelijkste en goedkoopste methode om je bereik te vergroten op Facebook</b></h5> -->
			</div>
		</div>
		<div class="clearfix"></div>
		<hr>
		<div class="introductie col-md-12">
			<div class="col-md-12" style="text-align:center;">
				<img src="{!! $hetproduct->image !!}" alt="Ebook Succesvolle Facebook Tijdlijn Acties" style="max-width:50%;margin:0 auto 25px">
				<p>{!! $hetproduct->bestelpagina->first()->intro_tekst !!}</p>
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="col-md-12" style="text-align:center;">
				@if($hetproduct->prijs_aanbieding_tot > $nu)
					<h2>Normaal: <strike>&euro;{!! $hetproduct->prijs_normaal !!},-</strike></h2>
					<h2>Alleen vanavond: &euro;{!! $hetproduct->prijs_aanbieding !!},-</h2>
				@elseif($hetproduct->prijs_herhaling_tot > $nu)
					<h2>Normaal: <strike>&euro;{!! $hetproduct->prijs_normaal !!},-</strike></h2>
					<h2>Alleen vandaag: &euro;{!! $hetproduct->prijs_herhaling !!},-</h2>
				@else
					<h2>Bestel de cursus nu voor maar: &euro;{!! $hetproduct->prijs_normaal !!}</h2>
				@endif
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="col-md-12">
				<center><button class="white-transparent btn aanmeld-button">IK WIL DIRECT AAN DE SLAG!</button></center>
			</div>
			<!-- <img src="http://www.digitusmarketing.nl/images/site/salespage-tijdlijnactie/salespage-ebook-tijdlijn-acties.png" alt="Ebook Succesvolle Facebook Tijdlijn Acties" class="ebook-tijdlijnacties"> -->
		</div>
	</div> <!-- / col-md-12 col-lg-12 col-xs-12 col-sm-12 -->
</div> <!-- / container -->
</div> <!-- / #page -->
<div id="aanmeld-formulier" class="aanmeld-formulier" style="background:white;border-top:1px solid #eee">
	<div class="container">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		<!-- <h2>Aanmelden Cursus Succesvolle Facebook Tijdlijnacties</h2> -->
			{!! Form::open(array('action'=>['TestOmgeving\TestOmgevingController@postBestel',$hetproduct->slug])) !!}
			<div class="col-md-12">
				<h2>Persoonsgegevens</h2>
			</div>
			<div class="col-md-2 form-group">
				{!! Form::label('aanhef', 'Aanhef:') !!}
				{!! Form::select('aanhef', array('M'=>'Dhr.', 'F'=>'Mevr.', 'F'=>'Ms.'), '', array('class'=>'form-control')) !!}
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
			<div class="form-group col-md-6 paymentmethod">
				<h2>Selecteer betaalmethode:</h2>
				@foreach($methods as $method)
					<div class="paymentmethod">
						<img id="paymentmethod" class="{{$method->getId()}}" src="{{URL::to($method->getImage()) }}" data-id="{{$method->getId()}}" data-title="{{$method->getName()}}" title="{{$method->getName()}}">
						{!! Form::radio('betaalmethode', $method->getId(), '', array('class'=>$method->getId())) !!}
					</div>
				@endforeach
			</div>
			<div class="if-ideal form-group col-md-6" style="display:none;">
				<h2>Selecteer je bank:</h2>
				<select name="issuer" id="issuer">
					@foreach($issuers as $issuer)
						<option value="{!! $issuer->getId() !!}" name="issuer">{!! $issuer->getName() !!}</option>
					@endforeach
				</select>
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="form-group">
				@if($hetproduct->prijs_aanbieding_tot > $nu)
				{!! Form::hidden('bedrag', $hetproduct->prijs_aanbieding) !!}
				@elseif($hetproduct->prijs_herhaling_tot > $nu)
				{!! Form::hidden('bedrag', $hetproduct->prijs_herhaling) !!}
				@else
				{!! Form::hidden('bedrag', $hetproduct->prijs_normaal) !!}
				@endif
				{!! Form::hidden('paymentmethod', 'ideal') !!}
				{!! Form::hidden('issuer') !!}
				{!! Form::hidden('omschrijving', $hetproduct->omschrijving) !!}
				{!! Form::submit('Bestellen!', array('class'=>'btn demo-button pull-right')) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
<div id="garantie" class="parallax">
	<div class="container">
		<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
			<img src="http://www.digitusmarketing.nl/images/site/salespage-tijdlijnactie/30-dagen-niet-goed-geld-terug.png" alt="30 Dagen 100% Niet Goed Geld Terug Garantie" class="niet-goed-geld-terug">
		</div>
		<div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
			<h2>30 Dagen Niet-Goed-Geld-Terug-Garantie!</h2>
			<p>Als je net zo bent als ik, ben je nu super enthousiast. Dan wil je zo snel mogelijk aan de slag, maar er komen “Wat nou als”-vragen in je op. “Wat nou als ik er niets van begrijp?” “Wat nou als dit niet voor mij werkt?” Dat zulke vragen bij je opkomen is volkomen normaal. Dit gevoel had ik ook toen ik mijn eerste digitale informatie kocht. Om deze reden hebben wij besloten om het risico voor onze rekening te nemen.</p>
			<p><b>Je hebt 30 dagen om met deze cursus aan de slag te gaan</b>. Levert deze strategie jou niet wat je ervan verwacht had of is het simpelweg niets voor jou? Dan krijg jij jouw volledige aankoopbedrag gegarandeerd teruggestort op je rekening!</p>
		</div>
	</div>
</div>
@endif

@stop

@section('sidebar')

@stop

@section('footer')
	<!-- @include('includes.footer.footer-map') -->
@stop

@section('footerscript')
	@include('includes.forms.belmijterugformulier')
	{!! Html::script('js/jquery-1.11.2.js') !!}
	{!! Html::script('js/parallax.min.js') !!}
	{!! Html::script('js/salespage.js') !!}
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@stop