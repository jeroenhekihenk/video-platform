@extends('layouts.fullwidth')

@section('titel')
Tijdelijke Kennismakingsactie Sportbranche | Digitus Marketing
@stop

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	{!! Html::style('/css/salespage.css') !!}
@stop

@section('meta')
	@include('includes.meta.indexfollow')
@stop

@section('pixels')
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '712938138769005');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=712938138769005&ev=PageView&noscript=1" /></noscript>
@stop

@section('menu')
<div id="menubars">
	@include('includes.menus.logomenu')
</div>
@stop

@section('content')
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

		<div class="introductie col-md-12 geenpadding-mobiel">

				<img src="http://www.digitusmarketing.nl/images/site/sportbranche/Banner.jpg" style="width:100%;" class="computer">
				<img src="http://www.digitusmarketing.nl/images/site/sportbranche/Banner-mobiel.jpg" alt="" class="mobiel" style="width:100%;">

		</div>
		<div class="clearfix"></div>
	
		<div class="content">
		
		<div style="text-align: center;" class="col-xs-12">
		<h2>
		<br>

		<p>Je Staat Op Het Punt Om Te Ontdekken Hoe Facebook Advertenties Op De Automatische Piloot Zorgen Voor Meer Leden In Jouw Sportschool!</p>
		</h2>

		<br>
		
		<h5>Als Enige In Nederland Bieden Wij Jou “No Cure No Pay” Facebook Campagnes!</h5>
		</div>	

		<div class="clearfix"></div>

		<hr>
		<br>
		<div class="col-xs-12">
			<h2>Loop jij net als de meeste ondernemers in de sportbranche ook tegen deze uitdagingen aan:</h2>
			<ul class="wink">
				<li class="vink">Traditionele reclame methodes die je altijd hebt toegepast, leveren niet meer het resultaat op zoals vroeger.</li>
				<li class="vink">Je bent je ervan bewust dat je online reclame methodes moet toepassen, maar hebt nog geen idee hoe.</li>
				<li class="vink">Je weet dat Facebook meer dan 80% van alle leads genereert in de sportbranche, en wil graag weten hoe jij hier ook van kunt profiteren.</li>
				<li class="vink">Je wil niet in zee gaan met marketing bureau’s die te veel geld vragen of met te lange contracten werken.</li>	
				<li class="vink">Je hebt een goed lopende sportschool, maar wil blijven groeien.</li>
			</ul>
		</div>
			
		</div>
	</div> <!-- / col-md-12 col-lg-12 col-xs-12 col-sm-12 -->
</div> <!-- / container -->
</div> <!-- / #page -->
<div id="waargeleerd" class="parallax" data-parallax="scroll" data-image-src="http://www.digitusmarketing.nl/images/site/bg/parsifal-presentatie-facebook-nvd.jpg">
	<div class="container">
		<div class="introductie col-md-12 " style="text-align: center;margin:110px auto 0; text-shadow: 1px 1px 1px #000000;">
			<div>
				<h2 style="color:white;">Als jij je in 1 of meerdere van bovenstaande punten herkent, bevind je je hier op de juiste pagina!</h2>
				<h2 style="color:white;">Je staat op het punt om kennis te maken met dé bewezen nummer 1 Facebook strategie, om meer nieuwe leden in jouw sportschool te krijgen!</h2>
			</div>
		</div>
	</div>
</div>
<div id="page">
	<div class="container">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			<h2>Hoe?</h2>
			<p>In mei 2015 hebben wij de eerste versie van van onze video cursus (die we continu up-to-date houden) voor de sportbranche gelanceerd. In deze cursus leren ondernemers stap voor stap, hoe zij geweldige resultaten boeken met Facebook, en meer leden in hun sportschool krijgen.</p>
		</div>
		<div class="clearfix"></div>
		<hr>
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			<h2 style="margin: 20px 0;">Recensies</h2>
			<div class="col-md-12 recensie">
				<div class="col-md-3" class="recensie-afbeelding">
					<img src="http://www.digitusmarketing.nl/images/media/Jan.png" alt="Recensie Jan" class="recensie-afbeelding">
					<h4 class="recensie-naam">Jan:</h4>
				</div>
				<div class="col-md-9 recensie-tekst">
					<p>Deze jongens hebben iets heel goed begrepen: dat het goud waard is om op 1 specifiek gebied echt een specialist te zijn, in dit geval Facebook Marketing.</p>
					<p>Parsifal weet er echt heel veel vanaf, het is aan alles te merken dat hij hier redelijk wat ervaring mee heeft.</p>
					<p>Bovendien kan hij enthousiast en bedreven uitleg geven, en je motiveren zelf nog meer energie in Facebook te steken, maar dan op de juiste manier.</p>
					<p>Wil jij meer uit Facebook halen? Dan is Digitus een absolute aanrader!</p>
				</div>
			</div>
			<div class="col-md-12 recensie">
				<div class="col-md-3" class="recensie-afbeelding">
					<img src="http://www.digitusmarketing.nl/images/media/Erna.png" alt="Recensie Erna" class="recensie-afbeelding">
					<h4 class="recensie-naam">Erna:</h4>
				</div>
				<div class="col-md-9 recensie-tekst">
					<p>Dank je wel voor de fijne samenwerking!</p>
					<p>Alhoewel ik nog wel twijfelde  of ik deze investering nu wel moest gaan doen heb ik het toch gedaan. En ik ben blij! Ook heel blij dat het nu afgelopen is want het is druk! Maar dat is alleen maar goed. Ik kon niet verwachten dat er zoveel mensen contact op gingen nemen.
					Mijn investering is er al lang uit. SUPER!<br>
					</p>
				</div>
			</div>
			{{-- <div class="col-md-12 recensie">
				<div class="col-md-3" class="recensie-afbeelding">
					<img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xaf1/t31.0-8/472204_321381277924883_1099432353_o.jpg" alt="Recensie Gusta" class="recensie-afbeelding">
					<h4 class="recensie-naam">Gusta:</h4>
				</div>
				<div class="col-md-9 recensie-tekst">
					<p>Toen ik een tijdlijn-actie op wilde zetten om de workshops van Cookingathome te promoten, twijfelde ik erg over de "regeltjes" waaraan ik moest voldoen volgens Facebook. Ik vroeg Parsifal om hulp en hij stuurde mij toen een deel van deze cursus. Hij zei dat hij de verleiding niet kon weerstaan om dit op te sturen en zei dat ik het voor mijzelf moest houden.</p>
					<p>Ik heb het e-book van Digitus Marketing gelezen. Hierin wordt duidelijk én stap voor stap uitgelegd waar je aan moet denken bij het opzetten van een tijdlijn-actie. Ik pak het e-book er steeds weer even bij als er plannen zijn voor een nieuwe actie. Parsifal, bedankt voor je leerzame handleiding!</p>
				</div>
			</div> --}}
			<div class="col-md-12 recensie">
				<div class="col-md-3" class="recensie-afbeelding">
					<img src="http://www.digitusmarketing.nl/images/digitus/recensies/judith-strating.jpg" alt="Recensie Judith" class="recensie-afbeelding">
					<h4 class="recensie-naam">Judith:</h4>
				</div>
				<div class="col-md-9 recensie-tekst">
					<p>Ik had mij al een beetje vediept in Facebook advertenties. Toen ik hoorde over de videocursus “Slimme Facebook Marketing voor Sportscholen”, dacht ik dit is voor mij dé oplossing!</p>
					<p>Op het zelfde moment begon het nieuwe dansseizoen. Ik was me er van bewust dat ik meer budget vrij moest maken voor Facebook. Voor het eerst heb ik niet meer in de krant geadverteerd, en heb besloten om Digitus Marketing mijn eerste Facebook campagne te laten bouwen omdat het seizoen al begon. En met succes!</p>
					<p>Ik heb mijn volledige investering binnen de eerste 2 weken al terug verdiend! Los van het aantal inschrijvingen dat ik nu via Facebook binnenhaal, merk ik dat er veel meer over mijn dansschool gepraat wordt. Ook merk ik dat ik meer likes krijg en dat mijn berichten veel meer mensen bereiken.</p>
					<p>Kortom, het levert mij veel meer op dan alleen inschrijvingen! Bedankt Digitus!</p>
				</div>
			</div>
		</div>
	</div> <!-- / container -->
</div> <!-- / #page -->
<div id="bonus">
	<div class="container">
		<div class="col-md-12" style="text-align: center;">
			<div>
				<p>Natuurlijk komen wij ook ondernemers tegen die het liever willen uitbesteden, zonder hier de hoofdprijs voor te betalen of aan een lang contract vast te zitten. Ook hier hebben wij over nagedacht!</p>
				<p>Of je het zelf wil leren of uitbesteden, voor beiden hebben wij dé oplossing! Klik hieronder op "<b>Ik wil het zelf leren</b>" of "<b>Ik wil het uitbesteden</b>".</p>
				<hr>
				<h2>Hoe wil jij Facebook inzetten om meer leden in jouw sportschool te krijgen?</h2>
			</div>
			<div class="aanmeld-buttons">
				<div class="col-md-6">
					<!-- <h2>Ik wil zelf leren hoe ik Facebook inzet om meer leden in mijn sportschool te krijgen</h2> -->
					<button id="zelf-leren" class="white-transparent btn zelf-leren-in-page">Ik wil het zelf leren</button>
				</div>
				<div class="col-md-6">
					<!-- <h2>Ik wil meer leden in mijn sportschool en dit graag uitbesteden</h2> -->
					<button id="uitbesteden" class="white-transparent btn uitbesteden uitbesteden-in-page">Ik wil het uitbesteden</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="page" class="zelf-leren-page">
	<div class="container">
		<div class="col-md-12">
			<h1><u>Ja! Ik wil het graag zelf leren!</u></h1>
			<hr>
			<h3 style="margin: 20px 0;">Wij hebben voor jou een super praktische cursus samengesteld, waarin je stap voor stap leert hoe jij Facebook succesvol inzet en keer op keer nieuwe leden in jouw sportschool krijgt!</h3>
				<p>De cursus is gemaakt door Parsifal, de go-to expert op het gebied van Facebook Marketing. Je kijkt over zijn schouder mee. Hij geeft je waardevolle tips, trucs en advies terwijl hij je stap voor stap laat zien hoe je succesvolle campagnes opzet.</p>		
					<br>
					<h4><u>Tot en met 7 oktober</u> inclusief gratis Facebook Tab App t.w.v. €350,-</h4>
		</div>
		<div class="clearfix"></div>
		<div class="introductie">
			<div class="col-md-12">
				<h2 style="margin: 20px 0;">In de videocursus ontdek jij:</h2>
				<ul class="wink">
					<li class="vink">Hoe deze strategie werkt en hoe jij deze keer op keer kunt toepassen.</li>
					<li class="vink">Hoe jij via Facebook in contact komt met potentiële leden, je naamsbekendheid vergoot en jouw Facebook pagina een enorme boost geeft.</li>
					<li class="vink">Hoe je jouw doelgroep segmenteert in subdoelgroepen om hogere conversies te realiseren.</li>
					<li class="vink">Hoe je de <b>sleutel</b> van adverteren op Facebook <b>kraakt</b>, en ervoor zorgt dat jouw advertenties tegen belachelijk lage kosten worden <b>weergegeven</b>, in het <b>nieuwsoverzicht</b> van <b>gebruikers binnen jouw doelgroep</b>.</li>
					<li class="vink">Welke (gratis) tools je kunt gebruiken om eenvoudig <b>pakkende afbeeldingen</b> voor je <b>advertenties</b> te maken.</li>
					<li class="vink">Hoe je <b>voorkomt</b> dat jouw <b>advertenties</b> worden <b>afgekeurd door Facebook</b>.</li>
				</ul>
				<p>Stel je eens voor dat je al deze informatie tot je beschikking hebt! Je kunt deze strategie zo vaak en wanneer jij wil toepassen.</p>

				<br>
				<br>

				<h3>Inclusief telefonische ondersteuning!</h3>
				<p>Mocht jij ergens vragen over hebben of hulp bij nodig hebben, dan kun je altijd bellen (wel tijdens werktijden natuurlijk). Het belangrijkst voor ons is dat onze klanten resultaten behalen en tevreden zijn!</p>
				
			</div>
		</div>
	</div>
</div>
<div id="bonus">
	<div class="container">
		<div class="col-md-10" style="margin:0 auto;float:none;display:block;">
			<div>
			<h2>Wat je precies ontvangt:</h2>

			<div class="clearfix"></div>

			
				<p>Je ontvangt de video cursus '<u>Slimme Facebook Marketing Voor Sportscholen'</u>. Deze cursus kun je <u>altijd</u> en <u>overal</u> online bekijken met je eigen inloggegevens. </p>			
		

				<a href="http://www.digitusmarketing.nl/images/site/salespage-tijdlijnactie/video-cursus-sportscholen.jpg" target="_blank">
				<img src="http://www.digitusmarketing.nl/images/site/salespage-tijdlijnactie/video-cursus-sportscholen.jpg" alt="Voorbeeld cursus Sportscholen">
				</a>

				<br>
				<br>
				<br>

				<p>Wanneer je er voor kiest om zelf te leren hoe je effectieve Facebook campagnes opzet, zullen wij voor jou een Facebook Tab App t.w.v. €350,- tijdelijk <u>GRATIS</u> (t/m 7 oktober 2015) ontwikkelen met design in jouw huisstijl.
				Op deze Facebook Tab kunnen mensen zich aanmelden voor bijvoorbeeld een gratis proefweek of dag. Zodat jij er zeker van bent dat je een goede landingspagina hebt waar je mensen door middel van jouw advertenties naartoe leidt.
				<br>De Facebook Tabs die wij ontwikkelen zijn responsive en geoptimaliseerd voor elk apparaat en scherm grootte. </p>

				<a href="http://www.digitusmarketing.nl/images/media/Burning Heart Facebook Tab.png" target="_blank">
				<img src="http://www.digitusmarketing.nl/images/media/Burning Heart Facebook Tab.png" alt="Burning Heart Facebook Tab"></a>

				<br>
				<br>

				<a href="http://www.digitusmarketing.nl/images/media/Hart for Her Facebook Tab.png" target="_blank">
				<img src="http://www.digitusmarketing.nl/images/media/Hart for Her Facebook Tab.png" alt="Hart for Her Facebook Tab">
				</a>	
				
				<hr>
				<div class="clearfix"></div>
				<h2>Klik nu direct op "<b>Ja, ik wil het graag zelf leren</b>" om nog voor 7 oktober een <u>gratis</u> Facebook Tab te ontvangen t.w.v. €350,-</h2>
				<button id="zelf-leren-aanmelden" class="white-transparent btn">Ja, ik wil het graag zelf leren!</button>
			</div>
		</div>
	</div>
</div>

<div id="page" class="uitbestedenpage">
	<div class="container">
		<div class="col-md-12">
			<h1><u>Ja! Ik wil het graag uitbesteden!</u></h1>
			<hr>
			<h4>No Cure, No Pay! Wij zijn zo overtuigd van onze strategie, dat we jou beloven, dat je jouw geld terug krijgt wanneer we geen winstgevende resultaten behalen!</h4>
			
			<hr>

			<p>Of je nou niet genoeg tijd hebt, geen collega's hebt die het leuk vinden om met Facebook bezig te zijn, of simpelweg omdat online marketing niet jouw specialiteit is. Wat voor reden je ook hebt om het uit te besteden, je bent lang niet de enige!</p>
		
			<hr>

			<h2 style="margin: 20px 0;">Speciaal voor jou stellen wij ons kennismakingspakket beschikbaar tot en met 7 oktober.</h2>

			<p>Met dit kennismakingspakket zorgen wij ervoor dat jij een maand lang nieuwe leden aantrekt naar jouw sportschool. De gehele campagne wordt van A tot Z voor jou gedaan. Het enige wat je hoeft te doen is een recensie achterlaten nadat je enthousiast bent als je de resultaten hebt gezien! :)</p>
		</div>
		<div class="clearfix"></div>
		<div class="introductie">
			<div class="col-md-12">
				<h2 style="margin: 20px 0;">Wat kun je verwachten:</h2>
				<ul class="wink">
					<li class="vink">Resultaat garantie. Boeken wij geen winstgevende resultaten binnen de 30 dagen durende campagne, krijg jij gewoon je geld terug.</li>
					<li class="vink">Relevante leads, die bij jou willen komen sporten. (Dus geen mensen die aan tijdelijke winacties meedoen!)</li>
					<li class="vink">Meer naamsbekendheid en een enorme boost van je Facebook pagina.</li>
					<li class="vink">Relevante advertenties bij de juiste (sub)doelgroepen in het nieuwsoverzicht.</li>
					<li class="vink">Super lage advertentiekosten (hoe relevanter de advertentie hoe lager de kosten).</li>
				
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="modules" style="text-align:center;">
	<div class="container">
		<div class="col-md-8" style="margin:0 auto;float:none;display:block;">
			<h2>Hieronder zie je enkele cijfers van de campagnes die wij draaien:</h2>
			<img src="http://www.digitusmarketing.nl/images/media/Facebook Campagne Resultaten1.png" alt="Screenshot 1" title="Facebook Campagne Resultaten 1">
				<br>
				<br>
			<img src="http://www.digitusmarketing.nl/images/media/Facebook Campagne Resultaten2.png" alt="Screenshot 2" title="Facebook Campagne Resultaten 2">
				<br>
				<br>
			<img src="http://www.digitusmarketing.nl/images/media/Facebook Campagne Resultaten3.png" alt="Screenshot 3" title="Facebook Campagne Resultaten 3">
				<br>
				<br>
			<img src="http://www.digitusmarketing.nl/images/media/Facebook Campagne Resultaten4.png" alt="Screenshot 3" title="Facebook Campagne Resultaten 4">
				<br>
				<br>
			<img src="http://www.digitusmarketing.nl/images/media/Facebook Campagne Resultaten5.png" alt="Screenshot 3" title="Facebook Campagne Resultaten 5">
				<br>
				<br>
			<hr>
			<h2>Klik nu direct op "<b>Ja, ik wil het graag uitbesteden</b>" om nog voor 7 oktober van de kennismakingsactie te profiteren!</h2>
			<button id="uitbesteden-aanmelden" class="white-transparent btn">JA, IK WIL HET GRAAG UITBESTEDEN!</button>
		</div>
	</div>
</div>

<div id="aanmeld-formulier" class="aanmeld-formulier">
	<div class="container">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

			{!! Form::open(array('action'=>'SportBranche\SportBrancheController@send')) !!}
			<div class="col-md-12">
				<h2>Profiteer nu het nog kan van onze kennismakingsactie!</h2>
				<p>Vul onderstaand formulier in, en Rogier zal binnen 2 werkdagen contact met je opnemen.</p>
				<br>
				<p>Je hebt gekozen voor: <span id="optie" style="font-weight:bold;"></span></p>
			</div>
			<div class="form-group col-md-6">
				{!! Form::label('voornaam', 'Voornaam:') !!}
				{!! Form::text('voornaam', Input::old('voornaam'), array('class'=>'form-control')) !!}
			</div>
			<div class="form-group col-md-6">
				{!! Form::label('achternaam', 'Achternaam:') !!}
				{!! Form::text('achternaam', Input::old('achternaam'), array('class'=>'form-control')) !!} 
			</div>
			<div class="form-group col-md-12">
				{!! Form::label('email', 'Emailadres:') !!}
				{!! Form::email('email', Input::old('email'), array('class'=>'form-control')) !!}
			</div>
			<div class="form-group col-md-6">
				{!! Form::label('telefoonnummer', 'Telefoonnummer:') !!}
				{!! Form::text('telefoonnummer', Input::old('telefoonnummer'), array('class'=>'form-control')) !!}
			</div>
			<div class="form-group col-md-6">
				{!! Form::label('bedrijfsnaam', 'Bedrijfsnaam:') !!}
				{!! Form::text('bedrijfsnaam', Input::old('bedrijfsnaam'), array('class'=>'form-control')) !!}
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="form-group">
				{!! Form::hidden('optie') !!}
				{!! Form::submit('Ja, ik wil aan de slag!', array('class'=>'btn demo-button pull-right')) !!}
			</div>
			{!! Form::close() !!}
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
	{!! Html::script('js/sportbranche.js') !!}
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@stop