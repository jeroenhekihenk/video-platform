@extends('layouts.fullwidth')

@section('titel')
	Strategiesessie Inplannen | Digitus Marketing
@stop

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
@stop

@section('meta')
	@include('includes.meta.noindexnofollow')
@stop

@section('pixels')
<?php $extra = "fbq('track', 'Lead');"; ?>
@include('includes.pixels.fb_audience', array('extra'=>$extra))

	<style>
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
@stop

@section('menu')
<div id="menubars">
	@include('includes.menus.hetmenu')
</div>
@stop

@section('content')

	<div class="col-md-8" style="display:block;float:none;margin:10px auto">
		<div class="box introductie">
			<div class="titel">
				<h1>Bedankt voor je aanvraag!</h1>
			</div>
			<div class="content">
				<p>Parsifal of Rogier zal binnen 2 werkdagen contact met je opnemen om de afspraak in te plannen.</p>
				<div class="col-md-4 col-sm-4">
					<img src="{!! url('images/site/advies-gesprek/Adviesgesprek-Facebook-Marketing.png') !!}" alt="Adviesgesprek Facebook Marketing" style="max-width: 275px;width:100%;float:none;display:block;margin:0 auto;">
				</div>
				<div class="col-md-8 col-sm-8" style='margin-top:10px;'>
					<p>Tijdens het telefoongesprek om de afspraak te plannen, zullen we jou een paar korte vragen stellen om een beeld te krijgen van doelen, producten/diensten/evenementen en doelgroep(en). Zodat we tijdens de strategiesessie direct aan de slag kunnen!</p>
				</div>
				<div class="clearfix"></div>
				<hr>
				<div class="col-md-12 col-sm-12">
					<h3>Like ons op Facebook</h3>
					<div style="display: block; margin: 0 auto;max-width:340px;width:100%;">
						<div class="fb-page" data-href="https://www.facebook.com/digitusmarketing" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/digitusmarketing"><a href="https://www.facebook.com/digitusmarketing">Digitus Marketing</a></blockquote></div></div>
					</div>
				</div>
			</div>
		</div>
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
	{!! Html::script('js/belmijterugprovider.js') !!}
	@include('includes.forms.belmijterugformulier')
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@stop