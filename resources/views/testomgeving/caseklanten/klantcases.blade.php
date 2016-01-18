@extends('layouts.detail')

@section('titel')
	@if($case)
		{!! $case->titel !!}
	@endif
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
@if($case)
<div id="crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
<p>Je bevindt je hier:</p>
	<ul>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="{!! action('HomeController@index') !!}" title="Home" itemprop="item">
				<span itemprop="name">Home</span>
				<meta itemprop="position" content="1" />
			</a>
		</li>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="{!! action('CasesController@index') !!}" title="Cases" itemprop="item">
				<span itemprop="name">Cases</span>
				<meta itemprop="position" content="2" />
			</a>
		</li>
		@if($case)
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active">
			<a href="{!! action('CasesController@show',[$case->slug]) !!}" title="{!! $case->titel !!}" itemprop="item">
				<span itemprop="name">{!! $case->titel !!}</span>
				<meta itemprop="position" content="3" />
			</a>
		</li>
		@endif
	</ul>
</div>
@endif
@stop

@section('content')
@if($case)
<div class="blog blog-post box">
	<div class="in-blog-post-image">
		<img src="{!! url($case->uitgelichte_afbeelding) !!}" alt="">
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
			<h3>{!! $case->titel !!}</h3>
		</div>
		<div class="case-logo">
			<a href="{!! url($case->link_klant) !!}" class="case-klant" rel="nofollow"><img src="{!! url($case->logo) !!}" class="case-thumbnail" alt=""></a>
		</div>
		<div class="case-bottom">
			<a href="{!! url($case->link_klant) !!}" class="case-klant" rel="nofollow">{{ $case->klant }}</a>
			<span class="glyphicon glyphicon-link"></span> {!! $case->categorie->naam !!}
		</div>
		<div class="clearfix"></div>
		<hr>
		<div class="blog-content">
			{!! $case->content !!}
		</div>
	</div>
</div>
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