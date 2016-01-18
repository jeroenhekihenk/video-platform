@extends('layouts.overview')

@section('titel')
	Cases | Digitus Marketing
@stop

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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
	</ul>
</div>
@stop

@section('content')
		<div class="box introductie">
			<div class="titel">
				<h3 style="margin-bottom: 0 !important"><span class="glyphicon glyphicon-briefcase"></span> Cases</h3>
				<!-- <p>- Wij zijn momenteel nog bezig om de cases van de oude, naar de nieuwe website over te zetten.</p> -->
			</div>
		</div>
@stop

@section('diensten')
	@foreach($caseklanten as $caseklant)
	<div class="col-md-2 col-lg-2">
		<div class="case" style="width:100%;padding:0;">
			<div class="image">
				<img src="{!! url($caseklant->image) !!}" alt="{!! $caseklant->klantnaam !!}" style="width:100%;">
			</div>
			<div class="content" style="background-image:url('http://www.digitusmarketing.nl/images/digitus/overlay.png'); padding:15px; width: 100%; height:100%;position:absolute;top:0;left:0;">
				<div class="titel">
					<a href="{!! action('TestOmgeving\TestOmgevingController@getKlant',[$caseklant->slug]) !!}" style="color:white !important;"><h5 style="color:white !important">{!! $caseklant->klantnaam !!}</h5></a>
				</div>
			</div>
		</div>
	</div>
	@endforeach
@stop

@section('sidebar')
	@include('includes.sidebar.belmijterug')
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