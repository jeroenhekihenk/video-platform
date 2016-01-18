@extends('layouts.fullwidth')

@section('titel')
	{!! $hetproduct->naam !!}
@stop

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	{!! Html::style('/css/salespage.css') !!}
	{!! Html::style('/css/font-awesome.css') !!}
	{!! Html::style('css/tabel/style.css') !!}
	{!! Html::style('css/tabel/hover.css') !!}
@stop

@section('meta')
	@include('includes.meta.noindexnofollow')
@stop

@section('pixels')
<?php $extra = "fbq('track', 'ViewContent'); fbq('track', 'AddToCart');"; ?>
	@include('includes.pixels.fb_audience', array($extra))
@stop

@section('menu')
<div id="menubars">
	@include('includes.menus.logomenu')
</div>
@stop

@section('content')
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '712938138769005');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=712938138769005&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
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
				<h1 class="titel">{!! $hetproduct->salespage->first()->titel !!}</h1>
				<h4 class="sub-titel">{!! $hetproduct->salespage->first()->slogan !!}</h4>
				{{-- <h1 class="salespage-titel">Ontdek hoe jij <span class="blauw">eenvoudig elk product, dienst of evenement</span>, wanneer het jou uitkomt, onder de <span class="blauw">aandacht</span> brengt <span class="blauw">op Facebook</span>!</h1>
				<h5>Wij bieden jou <b>de makkelijkste en goedkoopste methode om je bereik te vergroten op Facebook</b></h5> --}}
			</div>
		</div>
		<div class="clearfix"></div>
		<hr>
		<div class="introductie col-md-12">
			<img src="{!! $hetproduct->image !!}" alt="{!! $hetproduct->salespage->first()->titel !!}" class="ebook-tijdlijnacties">
		</div>
		<div class="clearfix"></div>
		<hr>
		@if($cursus->where('id',$hetproduct->cursus_id)->first())
		<?php $cursus = $cursus->where('id',$hetproduct->cursus_id)->first(); ?>
		<div class="col-md-8 iframe" style="display:block;float:none;margin:0 auto;">
			<?php $titel = substr($cursus->getUitgelichteVideo()->titel, 3); ?>
			<h4>{!! $titel !!}</h4>
			{!! $cursus->getUitgelichteVideo()->link !!}
		</div>
		<div class="clearfix"></div>
		<hr>
		@endif
		<div class="col-md-12">
			<button class="white-transparent btn pakketten-button">IK WIL DIRECT AAN DE SLAG!</button>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div id="page">
	<div class="container">
		<div class="content">
			<h3>{!! $hetproduct->salespage->first()->intro_titel !!}</h3>
			<p>{!! $hetproduct->salespage->first()->intro_tekst !!}</p>
		</div>
	</div> <!-- / col-md-12 col-lg-12 col-xs-12 col-sm-12 -->
</div> <!-- / container -->
</div> <!-- / #page -->
<div id="modules">
	<div class="container">
		<div class="col-md-12">
			<h2>In deze {!! count($hetproduct->modules) !!} modules ontdek jij stap voor stap hoe je jouw omzet een enorme boost geeft:</h2>
			<hr>
			<div class="clearfix"></div>
			<?php
			$count = 0;
			?>
			@foreach($hetproduct->modules as $module)
			<div class="col-md-6 module">
				<h3>{!! $module->titel !!}</h3>
				<div class="col-md-4">
					<img src="{!! $module->image !!}" alt="{!! $module->titel !!}" style="max-height:250px;display:block;float:none;margin:0 auto;">
				</div>
				<div class="col-md-8">
					<ul class="wink">
						@if(isset($module->punt_1))
							<li class="vink">{!! $module->punt_1 !!}</li>
						@endif
						@if(isset($module->punt_2))
							<li class="vink">{!! $module->punt_2 !!}</li>
						@endif
						@if(isset($module->punt_3))
							<li class="vink">{!! $module->punt_3 !!}</li>
						@endif
						@if(isset($module->punt_4))
							<li class="vink">{!! $module->punt_4 !!}</li>
						@endif
						@if(isset($module->punt_5))
							<li class="vink">{!! $module->punt_5 !!}</li>
						@endif
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<?php $count++ ?>
			@if($count === 2)
				<div class="clearfix"></div>
				<div class="introductie"></div>
				<div class="clearfix"></div>
				<?php $count = 0; ?>
			@endif
			@endforeach
		</div>
	</div>
</div>
@if(count($hetproduct->salespage->first()->recensies))
<div id="page">
	<div class="container">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			@foreach($hetproduct->salespage->first()->recensies as $recensie)
			<div class="col-md-6 introductie">
				<div class="col-md-12">
					<h2 class="recensie-van">Recensie {!! $recensie->naam !!}</h2>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<img src="{!! url($recensie->image) !!}" alt="{!! $recensie->naam !!}" class="recensie-foto">
				</div>
				<div class="col-md-8 col-sm-8 col-xs-8 recensie-content">
					<p>{!! $recensie->content !!}</p>
				</div>
			</div>
			@endforeach
			<div class="clearfix"></div>
		</div>
	</div> <!-- / container -->
</div> <!-- / #page -->
@endif
<div id="bestellen">
	<div class="container">
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
	</div>
</div>

<div id="aanmeld-formulier" class="aanmeld-formulier">
	<div class="container">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		<h2>Aanmelden voor {!! $hetproduct->salespage->first()->titel !!}</h2>
			{!! Form::open(array('action'=>['TestOmgeving\TestOmgevingController@postBestellen',$hetproduct->slug])) !!}
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
	<script>
		$(document).ready(function(){
			$('button.koop-button').on('click', function(){
				var id = $(this).data('pakket-id');
				var omschrijving = $(this).data('pakket-omschrijving');
				var bedrag = $(this).data('pakket-bedrag');

				$('span.gekozen-pakket').text($(this).data('titel'));

				$('input[name=pakket_id').val(id);
				$('input[name=pakket_omschrijving').val(omschrijving);
				$('input[name=bedrag').val(bedrag);

				$('span.pakket-bedrag').text(bedrag);

				if($('input[name=pakket_id]').val() === '3'){
					$('div.termijn-opties').show();
					$('input[name=pakket_id]').val('4');
					$('input#2x').prop('checked', true);
				}
				$('input[name=termijn-optie]').on('click', function(){
					var termijn_id = $(this).data('pakket-id');
					var termijn_omschrijving = $(this).data('pakket-omschrijving');
					var termijn_bedrag = $(this).data('bedrag');

					$('span.pakket-bedrag').text(termijn_bedrag);

					$('input[name=pakket_id').val(termijn_id);
					$('input[name=pakket_omschrijving').val(termijn_omschrijving);
					$('input[name=bedrag').val(termijn_bedrag);
				});
			});
		});
	</script>
@stop