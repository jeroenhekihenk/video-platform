@extends('layouts.overview')

@section('titel')
	Privacy Policy | Digitus Marketing
@stop

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
@stop

@section('meta')
	@include('includes.meta.indexfollow')

	<meta name="description" content="">
	
	<meta property="fb:admins" content="100000866281800" />
	<meta property="fb:admins" content="100000646526460" />
	<meta property="og:url" content="{!! action('HomeController@privacyPolicy') !!}">
	<meta property="og:title" content="Privacy Policy | Digitus Marketing">
	<meta property="og:description" content="">
	<meta property="og:site_name" content="digitusmarketing.nl">
	<meta property="og:locale" content="nl_NL">

	<meta name="twitter:url" content="{!! action('HomeController@privacyPolicy') !!}">
	<meta name="twitter:title" content="Privacy Policy | Digitus Marketing">
	<meta name="twitter:description" content="">

	<link rel="canonical" href="{!! action('HomeController@privacyPolicy') !!}">
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
			<a href="{!! action('HomeController@privacyPolicy') !!}" title="Contact" itemprop="item">
				<span itemprop="name">Privacy Policy</span>
				<meta itemprop="position" content="2" />
			</a>
		</li>
	</ul>
</div>
@stop

@section('content')
{{-- 		<div class="box introductie">
			<div class="titel">
				<h3>Contact</h3>
			</div>
			<div class="content">
				<p>Benieuwd wat wij voor jou kunnen betekenen?<br/>
Neem telefonisch contact met ons op via 085 003 02 56 of stuur ons een mailtje.</p>
				<b class="bold" style="margin-top: 24px;">Algemene vragen kun je ook altijd stellen op onze <a href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook pagina</a></b>
			</div>
		</div> --}}

@stop

@section('diensten')
	<div class="col-md-12 col-lg-12">
		<div class="box introductie">
			<h3>Privacy Policy - Digitus Marketing</h3>
			<small>Laatste update: 01-12-2015</small>
			<div class="clearfix"></div>
			<hr>
			<p>Wij zijn er van bewust dat u vertrouwen stelt in ons. Wij zien het dan ook als onze verantwoordelijkheid om uw privacy te beschermen. Op deze pagina laten we u weten welke gegevens we verzamelen als u onze website gebruikt, waarom we deze gegevens verzamelen en hoe we hiermee uw gebruikservaring verbeteren. Zo snapt u precies hoe wij werken.</p>
			<p>Dit privacybeleid is van toepassing op de diensten van Digitus Marketing. U dient zich ervan bewust te zijn dat Digitus Marketing niet verantwoordelijk is voor het privacybeleid van andere sites en bronnen. Door gebruik te maken van deze website geeft u aan het privacy beleid te accepteren. Digitus Marketing respecteert de privacy van alle gebruikers van haar site en draagt er zorg voor dat de persoonlijke informatie die u ons verschaft vertrouwelijk wordt behandeld.</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<h3>Ons gebruik van verzamelde gegevens</h3>
			<div class="clearfix"></div>
			<hr>
			<h4>Gebruik van onze diensten</h4>
			<p>Wanneer u zich aanmeldt voor een van onze diensten vragen we u om persoonsgegevens te verstrekken. Deze gegevens worden gebruikt om de dienst uit te kunnen voeren. De gegevens worden opgeslagen op eigen beveiligde servers van Digitus Marketing of die van een derde partij. Wij zullen deze gegevens niet combineren met andere persoonlijke gegevens waarover wij beschikken.</p>

			<p>&nbsp;</p>
			<h4>Communicatie</h4>
			<p>Wanneer u e-mail of andere berichten naar ons verzendt, is het mogelijk dat we die berichten bewaren. Soms vragen wij u naar uw persoonlijke gegevens die voor de desbetreffende situatie relevant zijn. Dit maakt het mogelijk uw vragen te verwerken en uw verzoeken te beantwoorden. De gegevens worden opgeslagen op eigen beveiligde servers van Digitus Marketing of die van een derde partij. Wij zullen deze gegevens niet combineren met andere persoonlijke gegevens waarover wij beschikken.</p>

			<p>&nbsp;</p>
			<h4>Cookies</h4>
			<p>Wij verzamelen gegevens voor onderzoek om zo een beter inzicht te krijgen in onze klanten, zodat wij onze diensten hierop kunnen afstemmen.</p>
			<p>Deze website maakt gebruik van “cookies” (tekstbestandtjes die op uw computer worden geplaatst) om de website te helpen analyseren hoe gebruikers de site gebruiken. De door het cookie gegenereerde informatie over uw gebruik van de website kan worden overgebracht naar eigen beveiligde servers van Digitus Marketing of die van een derde partij. Wij gebruiken deze informatie om bij te houden hoe u de website gebruikt, om rapporten over de website-activiteit op te stellen en andere diensten aan te bieden met betrekking tot website-activiteit en internetgebruik.</p>

			<p>&nbsp;</p>
			<h4>Doeleinden</h4>
			<p>We verzamelen of gebruiken geen informatie voor andere doeleinden dan de doeleinden die worden beschreven in dit privacybeleid tenzij we van tevoren uw toestemming hiervoor hebben verkregen.</p>

			<p>&nbsp;</p>
			<h4>Derden</h4>
			<p>De informatie wordt niet met derden gedeeld. In enkele gevallen kan de informatie intern gedeeld worden. Onze werknemers zijn verplicht om de vertrouwelijkheid van uw gegevens te respecteren.</p>

			<p>&nbsp;</p>
			<h4>Veranderingen</h4>
			<p>Deze privacyverklaring is afgestemd op het gebruik van en de mogelijkheden op deze site. Eventuele aanpassingen en/of veranderingen van deze site, kunnen leiden tot wijzigingen in deze privacyverklaring. Het is daarom raadzaam om regelmatig deze privacyverklaring te raadplegen.</p>

			<p>&nbsp;</p>
			<h4>Keuzes voor persoonsgegevens</h4>
			<p>Wij bieden alle bezoekers de mogelijkheid tot het inzien, veranderen, of verwijderen van alle persoonlijke informatie die op moment aan ons is verstrekt.</p>

			<p>&nbsp;</p>
			<h4>Aanpassen/uitschrijven dienst nieuwsbrief</h4>
			<p>Onderaan iedere mailing vindt u de mogelijkheid om uw gegevens aan te passen of om u af te melden.</p>

			<p>&nbsp;</p>
			<h4>Aanpassen/uitschrijven communicatie</h4>
			<p>Als u uw gegevens aan wilt passen of uzelf uit onze bestanden wilt laten halen, kunt u contact met ons op nemen. Zie onderstaande contactgegevens.</p>

			<p>&nbsp;</p>
			<h4>Cookies uitzetten</h4>
			<p>De meeste browsers zijn standaard ingesteld om cookies te accepteren, maar u kunt uw browser opnieuw instellen om alle cookies te weigeren of om aan te geven wanneer een cookie wordt verzonden. Het is echter mogelijk dat sommige functies en –services, op onze en andere websites, niet correct functioneren als cookies zijn uitgeschakeld in uw browser.</p>

			<p>&nbsp;</p>
			<h4>Vragen en feedback</h4>
			<p>We controleren regelmatig of we aan dit privacybeleid voldoen. Als u vragen heeft over dit privacybeleid, kunt u contact met ons opnemen.</p>
		</div>
	</div>
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