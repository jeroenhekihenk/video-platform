@extends('layouts.fullwidth')

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
				<h1 class="titel">Facebook Advertentie Geheimen</h1>
				<h4 class="sub-titel">Ontdek hoe je snel en eenvoudig Facebook advertenties opzet waarmee jij potentiële klanten omzet in betalende klanten, keer op keer!</h4>
				{{-- <h1 class="salespage-titel">Ontdek hoe jij <span class="blauw">eenvoudig elk product, dienst of evenement</span>, wanneer het jou uitkomt, onder de <span class="blauw">aandacht</span> brengt <span class="blauw">op Facebook</span>!</h1>
				<h5>Wij bieden jou <b>de makkelijkste en goedkoopste methode om je bereik te vergroten op Facebook</b></h5> --}}
			</div>
		</div>
		<div class="clearfix"></div>
		<hr>
		<div class="introductie col-md-12">
			<img src="http://www.digitusmarketing.nl/images/site/webinar/Digitus_Marketing_Videocursus.png" alt="Ebook Succesvolle Facebook Tijdlijn Acties" class="ebook-tijdlijnacties">
		</div>
		<div class="clearfix"></div>
		<div class="col-md-12">
			<button class="white-transparent btn pakketten-button">IK WIL DIRECT AAN DE SLAG!</button>
		</div>
		<div class="clearfix"></div>
		<hr>
		<div class="content">
			<h3>Heb je nog niet geadverteerd op Facebook, of ben je het zat om telkens te gokken of jouw advertenties aanslaan? En ben jij klaar om te ontdekken hoe je de <b>meest effectieve advertenties opzet tegen de laagste kosten</b>?</h3>
			<p>Facebook advertenties zijn <b>super effectief</b>. Wat wij merken bij veel klanten, is dat ze wel eens hadden geadverteerd, en vervolgens zeiden "<b>Facebook advertenties werken niet</b>". Dit komt omdat ze hun advertenties verkeerd hadden ingericht. Dan is het natuurlijk logisch dat ze niet werken. Alles wat je nodig hebt is de <b>juiste strategie</b> met een duidelijke doelstelling, weten welke doelgroep je wil aanspreken en hoe je <b>pakkende advertenties</b> maakt.</p>

			{{-- <h2>Herken jij jezelf hier ook in?</h2>
			<ul class="wink">
				<li class="vink">Je bent het zat dat je steeds maar weer een klein deel van je fans bereikt.</li>
				<li class="vink">Je investeert veel tijd in Facebook en krijgt er te weinig voor terug.</li>
				<li class="vink">Je hebt vaak het gevoel dat je verkoperig overkomt.</li>
				<li class="vink">Je hebt je voorgenomen om beter gebruik te gaan maken van Facebook voor je bedrijf, maar je weet nog niet hoe.</li>
				<li class="vink">Je bent er eigenlijk ook een beetje klaar mee, maar je weet dat jouw doelgroep op Facebook zit.</li>
				<li class="vink">Je bent op zoek naar een manier om jouw product, dienst of evenement onder de aandacht te brengen, zonder dat dit te veel tijd en geld kost.</li>
			</ul> --}}
			{{-- <hr>
			<h2>In deze video cursus ontdek jij hoe je:</h2>
			<ul class="wink">
				<li class="vink">Via Facebook in contact komt met jouw doelgroep.</li>
				<li class="vink">Potentiële klanten omzet in betalende klanten.</li>
				<li class="vink">Jezelf snel positioneert als de go-to expert in jouw niche.</li>
				<li class="vink">Razendsnel jouw mailinglijst uitbreidt.</li>
			</ul> --}}
			{{-- <h2>Als jij je hierin herkent, bevind je je op de juiste pagina!</h2>
			<p>Je staat op het punt om kennis te maken met een bewezen strategie waarmee jij <strong>zonder technische kennis</strong> en <strong>zonder veel geld uit te geven</strong>:</p>
			<ul class="wink">
				<li class="vink">Jouw bereik enorm kunt laten toenemen (ver-10 tot ver-100-voudigen).</li>
				<li class="vink">Zorgt voor meer likes, reacties en shares op jouw berichten.</li>
				<li class="vink">In contact komt met meer potentiële klanten (en meer fans krijgt).</li>
				<li class="vink">Elk product, dienst of evenement eenvoudig onder de aandacht brengt bij jouw specifieke doelgroep.</li>
				<li class="vink">Bevordert dat jouw doelgroep aan jouw bedrijf denkt wanneer zij een aankoop willen doen, en niet aan jouw concurrent.</li>
			</ul>
			<p>Facebook is op dit moment zonder twijfel “<strong><u>The place to be</u></strong>” om jouw doelgroep te bereiken, jouw bedrijf onder de aandacht te brengen en meer omzet te realiseren. Maar slechts weinigen passen de juiste strategieën toe.</p> --}}
		</div>
	</div> <!-- / col-md-12 col-lg-12 col-xs-12 col-sm-12 -->
</div> <!-- / container -->
</div> <!-- / #page -->
<div id="waargeleerd" class="parallax" data-parallax="scroll" data-image-src="http://www.digitusmarketing.nl/images/site/bg/laptop-on-desk-waar-geleerd.jpg">
	<div class="container">
		<div class="introductie col-md-12 ">
			<div class="col-md-4" style="text-align:center;">
				<span class="fa fa-trophy" style="color:white;font-size: 250px;"></span>
				{{-- <img src="http://www.digitusmarketing.nl/images/site/salespage-tijdlijnactie/waar-geleerd.png" class="waar-geleerd" alt="Waar hebben wij facebook marketing geleerd?"> --}}
			</div>
			<div class="col-md-8 waar-geleerd">
				<h2>In deze video cursus ontdek jij hoe je:</h2>
				<ul class="wink" style="color:white;">
					<li class="vink">Via Facebook in contact komt met jouw doelgroep.</li>
					<li class="vink">Potentiële klanten omzet in betalende klanten.</li>
					<li class="vink">Jezelf snel positioneert als de go-to expert in jouw niche.</li>
					<li class="vink">Razendsnel jouw mailinglijst uitbreidt.</li>
				</ul>
				<button class="white-transparent btn pakketten-button">IK WIL DIRECT AAN DE SLAG!</button>
				{{-- <h2>Waar hebben wij Facebookmarketing geleerd?</h2>
				<p>Wij danken het internet! Zonder het internet en Facebook was dit niet mogelijk geweest. Het internet en met name Facebook maakte het mogelijk voor ons om in contact te komen met Facebook specialisten over de hele wereld. Om ons te mengen in discussies, op de hoogte te blijven van updates en om strategieën en ervaringen te delen.</p> --}}
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="col-md-12">
				<p>In deze cursus ontdek je eenvoudig en stap voor stap hoe je advertentie campagnes opzet, zodat je nooit meer hoeft te gokken of je advertenties wel aanslaan. Wij hebben de afgelopen jaren honderden succesvolle advertentie campagnes gedraaid voor ons zelf en voor klanten. We onthullen alle geheimen, oplossingen en slimme trucs die wij hebben opgedaan in 5 jaar lang Facebook marketing specialisatie.</p>
			</div>
		</div>
	</div>
</div>
<div id="page">
	<div class="container">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			<div class="col-md-12 introductie">
				<h2>Recensie Jan hobo</h2><br>
				<img src="http://www.digitusmarketing.nl/images/digitus/recensies/Jan-hobo.png" alt="Facebook recensie Jan Hobo over Digitus Marketing"><br>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12 introductie">
				<h2>Recensie Erna Basten</h2><br>
				<img src="http://www.digitusmarketing.nl/images/digitus/recensies/recensie-erna.jpg" alt="Recensie Erna Basten over Digitus Marketing"><br>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12 introductie">
				<h2>Recensie Bert de Groot</h2><br>
				<img src="http://www.digitusmarketing.nl/images/digitus/recensies/recensie-bert.jpg" alt="Recensie Bert de Groot over Digitus Marketing"><br>
			</div>
			{{-- <h2>Waarom er weinig Facebookmarketing experts zijn?</h2>
			<ol>
				<li>Binnen Internetmarketing is Facebookmarketing één van de lastigste diensten. Facebook verandert zo snel. Als je goed wilt zijn in Facebook, moet je je 100% focussen op Facebookmarketing.</li>
				<li>Het bedrijf Facebook is moeilijk bereikbaar. Als een van de weinigen hebben wij al jaren intern contact bij Facebook. Dit maakte het voor ons mogelijk om problemen op te lossen waar anderen niet uitkwamen, waardoor ze besloten om geen Facebookdiensten meer aan te bieden.</li>
				<li>Het is een gok geweest om ons alleen te focussen op Facebookmarketing. Er werd vaak tegen ons gezegd: “Wat als Facebook er straks niet meer is, net als Hyves?”</li>
			</ol>
			<p>Het is een enorme opgave geweest om te komen waar we nu staan. We hebben van geen seconde spijt.</p> --}}
		</div>
	</div> <!-- / container -->
</div> <!-- / #page -->
<div id="modules">
	<div class="container">
		<div class="col-md-8" style="margin:0 auto;float:none;display:block;">
			<h2>In deze 5 modules ontdek jij stap voor stap hoe je jouw omzet een enorme boost geeft:</h2>
			<div class="clearfix"></div>
			<div class="module">
				<div class="module-icon-holder">
					<img src="http://www.digitusmarketing.nl/images/site/webinar/Digitus_Marketing_DVD1.png" alt="Module 1 - Facebook cursus">
					{{-- <div class="module-icon">
						<span class="fa fa-wrench"></span>
						<h3>Module 1</h3>
					</div> --}}
				</div>
				<div class="module-titel">
					<h3>Module 1 - Strategie - Van Facebook gebruiker naar klant.</h3>
				</div>
				<div class="module-body">
					<ul>
						<li>Hoe jij Facebook inzet om meer klanten aan te trekken en niet langer jouw tijd verdoet.</li>
						<li>Hoe je de juiste doelgroep aanspreekt en het maximale uit Facebook haalt.</li>
						<li>Waar jouw landingspagina aan MOET voldoen om meer aanmeldingen/inschrijvingen te realiseren!</li>
						<li>Waarom de meeste mensen verkeerd gebruik maken van Facebook.</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="module">
				<div class="module-icon-holder">
					<img src="http://www.digitusmarketing.nl/images/site/webinar/Digitus_Marketing_DVD2.png" alt="Module 2 - Facebook cursus">
					{{-- <div class="module-icon">
						<span class="fa fa-question-circle"></span>
						<h3>Module 2</h3>
					</div> --}}
				</div>
				<div class="module-titel">
					<h3>Module 2 - Hoe werkt adverteren op Facebook?</h3>
				</div>
				<div class="module-body">
					<ul>
						<li>Maak kennis met het geheime wapen voor Facebook advertenties.</li>
						<li>Uit welke 3 onderdelen een Facebook campage bestaat en hoe je deze slim gebruikt.</li>
						<li>Wat precies het verschil is tussen een Facebook advertentie en een bericht.</li>
						<li>Hoe je jouw Facebook advertentie binnen 2 seconden OOK toont op Instagram (NIEUW).</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="module">
				<div class="module-icon-holder">
					<img src="http://www.digitusmarketing.nl/images/site/webinar/Digitus_Marketing_DVD3.png" alt="Module 3 - Facebook cursus">
					{{-- <div class="module-icon">
						<span class="fa fa-thumbs-o-up"></span>
						<h3>Module 3</h3>
					</div> --}}
				</div>
				<div class="module-titel">
					<h3>Module 3 - Juiste doelstelling en doelgroepen voor maximaal rendement.</h3>
				</div>
				<div class="module-body">
					<ul>
						<li>Hoe je Facebook Pagina statistieken gebruikt om meer inzicht te krijgen in jouw doelgroep.</li>
						<li>Hoe je met de Facebook Power editor UREN tijd bespaart (je zal versteld staan).</li>
						<li>Hoe je een campagne samenstelt waarmee je je focust op omzet.</li>
						<li>Hoe je er voor zorgt dat jouw campagnes overzichtelijk zijn en je altijd alles kunt terugvinden.</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="module">
				<div class="module-icon-holder">
					<img src="http://www.digitusmarketing.nl/images/site/webinar/Digitus_Marketing_DVD3.png" alt="Module 3.1 - Facebook cursus">
					{{-- <div class="module-icon">
						<span class="fa fa-users"></span>
						<h3>Module 3.1</h3>
					</div> --}}
				</div>
				<div class="module-titel">
					<h3>Module 3.1 - Geavanceerde doelgroepen</h3>
				</div>
				<div class="module-body">
					<ul>
						<li>Hoe je jouw advertenties richt op Fans van andere Facebook pagina’s (profiteer van het budget dat zij al hebben besteed).</li>
						<li>Hoe je advertenties richt op Facebook gebruikers die jouw website hebben bezocht.</li>
						<li>Hoe je jouw advertenties richt op gebruikers aan de hand van telefoonnummers en/of e-mailadressen.</li>
						<li>Hoe je eenvoudig een doelgroep maakt van Facebook gebruikers met een soortgelijkprofiel als jouw klanten.</li>
						<li>Hoe je schrikbarend veel te weten kunt komen over jouw doelgroep op Facebook.</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="module">
				<div class="module-icon-holder">
					<img src="http://www.digitusmarketing.nl/images/site/webinar/Digitus_Marketing_DVD4.png" alt="Module 4 - Facebook cursus">
					{{-- <div class="module-icon">
						<span class="fa fa-pencil"></span>
						<h3>Module 4</h3>
					</div> --}}
				</div>
				<div class="module-titel">
					<h3>Module 4 - Effectieve Facebook advertenties samenstellen</h3>
				</div>
				<div class="module-body">
					<ul>
						<li>Hoe jij meer leestekens in jouw advertentie teksten kunt verwerken dan andere adverteerders.</li>
						<li>Wat een ‘Dark Post’ is en hoe je hiermee een advertentie samenstelt en koppelt aan verschillende doelgroepen (binnen 5 minuten).</li>
						<li>Hoe je onweerstaanbare advertenties samenstelt (tekst en afbeelding tips).</li>
						<li>Wat de nummer één reden is dat advertenties worden afgekeurd en jij er voor zorgt dat het jou nooit (meer)zal overkomen.</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="module">
				<div class="module-icon-holder">
					<img src="http://www.digitusmarketing.nl/images/site/webinar/Digitus_Marketing_DVD5.png" alt="Module 5 - Facebook cursus">
					{{-- <div class="module-icon">
						<span class="fa fa-cogs"></span>
						<h3>Module 5</h3>
					</div> --}}
				</div>
				<div class="module-titel">
					<h3>Module 5 - Resultaten optimaliseren voor meer resultaat en lagere kosten.</h3>
				</div>
				<div class="module-body">
					<ul>
						<li>Hoe je snel inzicht krijgt in de resultaten van jouw Facebook campagnes.</li>
						<li>Welke statistieken belangrijk zijn om jouw campanges te optimaliseren.</li>
						<li>Hoe je aan de hand van jouw campange nog meer te weten kunt komen over jouw doelgroep! </li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<div id="pakketten-balk">
	<div class="container">
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
			<div class="introductie" style="float:left;">
				<h2>Welk pakket past het best bij jou?</h2>
				<!--Table 1 Skin1!-->
				<div class="planbg button float"><!--planbg div begins here!-->
					<div class="topbar skinonebg"></div>
					<div class="plantype">
						<h2>Basis</h2>
						<p>Bevat de modules:</p>
						{{-- <hr>
						<span class="skinonecolor">3 / 6 maand</span>
						<p>Contractsduur</p> --}}
					</div>
					<!--Features List Begins here!-->
					<div class="features">
						<li class="plancolor"><span class="fa fa-check green"></span> Module 1</li>
						<li><span class="fa fa-check green"></span> Module 2</li>
						<li class="plancolor"><span class="fa fa-check green"></span> Module 3</li>
						<li><span class="fa fa-times red"></span> Module 3.1</li>
						<li class="plancolor"><span class="fa fa-check green"></span> Module 4</li>
						<li><span class="fa fa-check green"></span> Module 5</li>
					</div>
					<!--Features List Ends here!-->
					<div class="pricing">
						<table>
							<tr>
								<td align="right"><p>Voor maar</p></td>
								<td align="left"><span class="skinonecolor">&euro;497,-</span></td>
							</tr>
						</table>
					</div>
					<div class="requestbg skinonerequest">
						<li><button class="btn demo-button koop-button aanmeld-button" data-pakket-id="1" data-pakket-omschrijving="Basis cursus" data-pakket-bedrag="497.00" data-titel="Basis pakket">Ik wil aan de slag!</button></li>
					</div>
				</div><!--planbg div ends here!-->
				<!--Table 3 Skin1!-->
				<div class="planbg planborder skinonebg float aanbevolen"><!--planbg div begins here!-->
					<div class="topbar skinonebg"></div>
					<!-- <div class="aanbevolen-bar">Aanbevolen</div> -->
					<div class="plantype">
						<h2 class="featuredcolor">Geavanceerd</h2>
						<p>Bevat de modules:</p>
						{{-- <hr>
						<span class="featuredcolor">12 maand</span>
						<p class="featuredcolor">Contractsduur</p> --}}
					</div>
					<!--Features List Begins here!-->
					<div class="features skinonefeatures">
						<li class="skinoneplancolor"><span class="fa fa-check skinonecheck"></span> Module 1</li>
						<li><span class="fa fa-check skinonecheck"></span> Module 2</li>
						<li class="skinoneplancolor"><span class="fa fa-check skinonecheck"></span> Module 3</li>
						<li><span class="fa fa-check skinonecheck"></span> Module 3.1</li>
						<li class="skinoneplancolor"><span class="fa fa-check skinonecheck"></span> Module 4</li>
						<li><span class="fa fa-check skinonecheck"></span> Module 5</li>
					</div>
					<!--Features List Ends here!-->
					<div class="pricing">
						<table>
							<tr>
								<td align="right"><p>Voor maar</p></td>
								<td align="left"><span class="">&euro;597,-</span></td>
							</tr>
						</table>
					</div>
					<div class="requestbg skinonerequest skinonefeaturedreq">
						<li><button class="btn demo-button koop-button aanmeld-button" data-pakket-id="2" data-pakket-omschrijving="Geavanceerde cursus" data-pakket-bedrag="597.00" data-titel="Geavanceerde pakket">Ik wil aan de slag!</button></li>
					</div>
				</div><!--planbg div ends here!-->
				<!-- <div class="planbg button float">
					<div class="topbar skinonebg"></div>
					<div class="plantype">
						<h2>VIP - Coaching</h2>
						<p>Slechts 5 plekken beschikbaar!</p>
					</div>
					<div class="features">
						<li class="plancolor"><span class="fa fa-check green"></span> Module 1</li>
						<li><span class="fa fa-check green"></span> Module 2</li>
						<li class="plancolor"><span class="fa fa-check green"></span> Module 3</li>
						<li ><span class="fa fa-check green"></span> Module 3.1</li>
						<li class="plancolor"><span class="fa fa-check green"></span> Module 4</li>
						<li><span class="fa fa-check green"></span> Module 5</li>
						<li class="plancolor"><span class="fa fa-check green"></span> Facebook tab (T.w.v. &euro;350,-)</li>
						<li><span class="fa fa-check green"></span> VIP Coaching (8x strategie sessie á 1 uur)</li>
					</div>
					<div class="pricing">
						<table>
							<tr>
								<td align="right"><p>Éénmalig</p></td>
								<td align="left"><span class="skinonecolor">&euro;1997,-</span></td>
							</tr>
							<tr>
								<td align="right"><p>2 Termijnen</p></td>
								<td align="left"><span class="skinonecolor">&euro;998,50</span></td>
							</tr>
						</table>
					</div>
					<div class="requestbg skinonerequest">
						<li><button class="btn demo-button koop-button aanmeld-button" data-pakket-id="3" data-pakket-omschrijving="VIP - Coaching pakket in 2 termijnen" data-pakket-bedrag="998.50" data-titel="VIP - Coaching pakket">Ik wil aan de slag!</button></li>
					</div>
				</div> -->
			</div>
		</div> <!-- / col-md-12 col-lg-12 col-xs-12 col-sm-12 -->
	</div> <!-- / container -->
</div> <!-- / #page -->
<div id="aan-de-slag">
	<div class="container">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			<h2>Ga direct aan de slag en geef jouw Facebookpagina keer op keer een boost!</h2>
			<hr>
			<div class="col-md-12">
				<h2>Ik wil aan de slag met het:</h2>
			</div>
			<div class="col-md-6"><button class="btn demo-button koop-button aanmeld-button" data-pakket-id="1" data-pakket-omschrijving="Basis cursus" data-titel="Basis pakket" data-pakket-bedrag="497.00" style="float:none;">Basis pakket</button></div>
			<div class="col-md-6"><button class="btn demo-button koop-button aanmeld-button" data-pakket-id="2" data-pakket-omschrijving="Geavanceerde cursus" data-titel="Geavanceerde pakket" data-pakket-bedrag="597.00" style="float:none;">Geavanceerde pakket</button></div>
			<div class="clearfix"></div>
			<hr>
			<h2>Eenvoudig betalen via</h2>
			@foreach($methods as $method)
				<img id="paymentmethod-vb" class="{{$method->getId()}}" src="{{URL::to($method->getImage()) }}" data-id="{{$method->getId()}}" data-title="{{$method->getName()}}" title="{{$method->getName()}}">
			@endforeach
		</div>
	</div>
</div>
<div id="aanmeld-formulier" class="aanmeld-formulier">
	<div class="container">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		<h2>Aanmelden Cursus Succesvolle Facebook Tijdlijnacties</h2>
			{!! Form::open(array('action'=>'Videocursus\VideoCursusController@store')) !!}
			<div class="col-md-12">
				<h2>Persoonsgegevens</h2>
			</div>
			<div class="col-md-2 form-group">
				{!! Form::label('aanhef', 'Aanhef:') !!}
				{!! Form::select('aanhef', array('M'=>'Dhr.', 'F'=>'Mevr.'), '', array('class'=>'form-control')) !!}
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
			<div class="col-md-12">
				<h2>Je hebt het <span class="gekozen-pakket"></span> gekozen voor &euro;<span class="pakket-bedrag"></span>. </h2>
				<div class="termijn-opties" style="display:none;">
					<div class="form-group">
						<p>Ik wens graag te betalen in:</p>
					</div>
					<div class="form-group">
						{!! Form::radio('termijn-optie', '998.50', '', array('id'=>'2x', 'data-bedrag'=>'998.50', 'data-pakket-omschrijving'=>'VIP - Coaching pakket 2 termijnen', 'data-pakket-id'=>'4')) !!}
						<label for="2x">2 termijnen van &euro;998,50</label>
					</div>
					<div class="form-group">
						{!! Form::radio('termijn-optie', '1997', '', array('id'=>'1x', 'data-bedrag'=>'1997.00', 'data-pakket-omschrijving'=>'VIP - Coaching pakket 1 termijn', 'data-pakket-id'=>'5')) !!}
						<label for="1x">1 termijn van &euro;1997,-</label>
					</div>
				</div>
			</div>
			<hr>
			<div class="clearfix"></div>
			<div class="form-group col-md-6 paymentmethod">
				{!! Form::hidden('pakket_id') !!}
				{!! Form::hidden('pakket_omschrijving') !!}
				{!! Form::hidden('bedrag') !!}
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
				{!! Form::hidden('paymentmethod') !!}
				{!! Form::hidden('issuer') !!}
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