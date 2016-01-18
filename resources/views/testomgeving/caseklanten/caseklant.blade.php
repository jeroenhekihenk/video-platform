@extends('layouts.detail')



@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
@stop


@section('menu')
<div id="menubars">
	@include('includes.menus.hetmenu')
</div>
@stop

@section('content')
@if($caseklant)
@foreach($caseklant->cases as $case)
<div class="blog blog-post box">
	<div class="in-blog-post-image">
		<a href="{!! action('TestOmgeving\TestOmgevingController@getKlantCases',[$caseklant->slug, $case->slug]) !!}">
			<img src="{!! url($case->uitgelichte_afbeelding) !!}" alt="">
		</a>
	</div>
	<div class="blog-post-content">
		{{-- <div class="pull-right dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" id="dropdownMenu1">
				meer <span class="caret"></span>
			</a>
			<ul class="dropdown-menu meeropties box" role="menu" aria-labelledby="dropdownMenu1">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="http://www.facebook.com/sharer/sharer.php?u={!! action('CasesController@show',[$case->slug]) !!}&title={!! $case->titel !!}" target="_blank"><span class="fa fa-facebook"></span> Deel op Facebook</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/intent/tweet?text={!! $case->titel !!}&amp;url={!! action('CasesController@show',[$case->slug]) !!}" target="_blank"><span class="fa fa-twitter"></span> Deel op Twitter</a></li>
			</ul>
		</div> --}}
		<div class="blog-titel in-post">
			<a href="{!! action('TestOmgeving\TestOmgevingController@getKlantCases',[$caseklant->slug, $case->slug]) !!}">
				<h3>{!! $case->titel !!}</h3>
			</a>
		</div>
		<div class="case-logo">
			<a href="{!! url($case->link_klant) !!}" class="case-klant" rel="nofollow"><img src="{!! url($case->logo) !!}" class="case-thumbnail" alt=""></a>
		</div>
		<div class="case-bottom">
			<a href="{!! url($case->link_klant) !!}" class="case-klant" rel="nofollow">{{ $case->klant }}</a>
			<span class="glyphicon glyphicon-link"></span> {!! $case->categorie->naam !!}
		</div>
		<div class="clearfix"></div>
	</div>
</div>
@endforeach
@endif

@stop
@section('sidebar')
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