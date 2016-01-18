@extends('layouts.detail')

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
@stop

@section('meta')
@include('includes.meta.noindexnofollow')
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
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="{!! action('TrainingenController@index') !!}" title="Trainingen" itemprop="item">
				<span itemprop="name">Trainingen</span>
				<meta itemprop="position" content="2" />
			</a>
		</li>
	</ul>
</div>
@stop

@section('content')
@foreach($producten as $product)
@if($product->id == '2')
@else
	<?php $cursus = $cursus->where('id',$product->cursus_id)->first(); ?>
	<div class="box introductie">
		<div class="col-md-12">
			<img src="{!! url($cursus->afbeelding) !!}" alt="{!! $cursus->naam !!}">
		</div>
		<div class="clearfix"></div>
		<hr>
		<div class="col-md-12">
			<h4>Cursus: {!! $cursus->naam !!}</h4>
			<div class="col-md-6">
				<a href="{!! action('TestOmgeving\TestOmgevingController@postBestellen',[$product->slug]) !!}" class="btn btn-primary pull-left" style="color:white;" target="_blank">Meer informatie</a>
			</div>
			<div class="col-md-6">
				<a href="{!! action('TestOmgeving\TestOmgevingController@postBestellen',[$product->slug]) !!}#bestellen" class="btn demo-button pull-right" style="color:white;" target="_blank">Bestellen</a>
			</div>
			<!-- <div class="col-md-4">
				<button id="show-video" class="btn demo-button">Bekijk video</button>
			</div> -->
		</div>
		<div class="clearfix"></div>
		<div class="hidden-video" style="display:none;">
			<hr>
			<style>
			.col-md-12 > iframe {
			width: 100%;
			}
			</style>
			<div class="col-md-12">
				<?php $titel = substr($cursus->getUitgelichteVideo()->titel, 3); ?>
				<h4>{!! $titel !!}</h4>
				{!! $cursus->getUitgelichteVideo()->link !!}
				<div class="clearfix"></div>
				<hr>
			</div>
		</div>
	</div>
@endif
@endforeach
@stop

@section('sidebar')
@include('includes.sidebar.belmijterug')
@include('includes.sidebar.groot')
@stop

@section('footerscript')
{!! Html::script('js/jquery-1.11.2.js') !!}
<script>
	$(document).ready(function(){
		$('button#show-video').click(function(){
			$(this).parent().next().next($('.hidden-video')).slideToggle();
			// $(this).next($('a#koop-video')).slideToggle();
			$(this).html($(this).text() == "Verberg Video" ? "Bekijk Video" : "Verberg Video");
		});
	});
</script>
@stop