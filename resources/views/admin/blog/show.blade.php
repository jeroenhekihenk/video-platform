@extends('layouts.detail')

@section('titel')
	@if($post)
	{!! $post->titel !!}
	@endif
@stop

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
@stop

@section('meta')
	@include('includes.meta.noindexnofollow')
	<meta property="fb:admins" content="100000866281800" />
	<meta property="fb:admins" content="100000646526460" />
	<meta property="og:locale" content="nl_NL">
	<meta property="og:type" content="article">
	@if($post)
	<meta property="og:image" content="{!! url($post->uitgelichte_afbeelding) !!}">
	<meta property="og:url" content="{{ Request::url() }}">
	<meta property="og:title" content="{!! $post->titel !!}">
	<meta property="og:description" content="{!! $post->snippet !!}">
	@endif
@stop

@section('pixels')
@stop

@section('menu')
<div id="menubars">
	@include('includes.menus.hetmenu')
</div>
@stop

@section('breadcrumb')
<div id="crumbs">
<p>Je bevindt je hier:</p>
	<ul>
		<li><a href="{!! action('HomeController@index') !!}" title="Home"><span class="fa fa-home"></span></a></li>
		<li><a href="{!! action('BlogController@index') !!}" title="Blog">Blog</a></li>
		@if($post)
		<li class="active"><a href="{!! action('BlogController@show',[$post->slug]) !!}" title="{!! $post->titel !!}"><span class="fa fa-pencil"></span> {!! $post->titel !!}</a></li>
		@endif
	</ul>
</div>
@stop

@section('content')
@if($post)
<div class="blog blog-post box">
	<div class="in-blog-post-image">
		<img src="{!! url($post->uitgelichte_afbeelding) !!}" alt="{!! $post->slug !!}">
	</div>
	<div class="blog-post-content">
		<div class="pull-right dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" id="dropdownMenu1">
				meer <span class="caret"></span>
			</a>
			<ul class="dropdown-menu meeropties box" role="menu" aria-labelledby="dropdownMenu1">
				<li role="presentation">
					<a role="menuitem" id="facebook-share" tabindex="-1" href="http://www.facebook.com/sharer/sharer.php?u={!! action('BlogController@show',[$post->slug]) !!}&title={!! $post->titel !!}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600'); return false;"><span class="fa fa-facebook"></span> Deel op Facebook</a>
					{{-- <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="link" style="display:none;"></div> --}}
				</li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/intent/tweet?text={!! $post->titel !!}&amp;url={!! action('BlogController@show',[$post->slug]) !!}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600'); return false;"><span class="fa fa-twitter"></span> Deel op Twitter</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#disqus_thread"><span class="fa fa-pencil"></span> Reageer</a></li>
			</ul>
		</div>
		<div class="blog-titel in-post">
			<h3>ADMIN PREVIEW</h3>
		</div>
		<div class="blog-titel in-post">
			<h3 class="{!! $post->slug !!}">{!! $post->titel !!}</h3>
		</div>
		<div class="blog-auteur-categorie">
			<ul>
				<li class="created">{{ $post->publishedAt() }}</li>
				<li class="auteur"><span class="icomoon icomoon-quill"></span>	<a href="{!! action('BlogController@show',[$post->slug]) !!}" class="post-auteur" title="Geschreven door: {!! $post->getAuthor() !!}">{{ $post->getAuthor() }}</a></li>
				<li class="categorie"><span class="glyphicon glyphicon-link"></span> <a href="{!! action('BlogController@show',[$post->slug]) !!}" title="{!! $post->titel !!}">{!! $post->categorie->naam !!}</a></li>
			</ul>					
		</div>
		<div class="clearfix"></div>
		<hr>
		<div class="blog-content">
			{!! $post->content !!}
		</div>
	</div>

</div>
<!-- Auteur blok -->
<div class="box persoon-intro">
	<div class="col-md-3">
		<img src="{{ url($post->auteur->afbeelding) }}" alt="{!! $post->auteur->voornaam . ' ' . $post->auteur->achternaam !!}">
	</div>
	<div class="col-md-9 over-persoon">
		<h3 class="pull-left">Over {!! $post->auteur->voornaam. ' ' .$post->auteur->achternaam !!}</h3>
		<div class="contact pull-right dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" id="dropdownMenu1">
				Contact <span class="caret"></span>
			</a>
			<ul class="dropdown-menu meeropties box" role="menu" aria-labelledby="dropdownMenu1">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url($post->auteur->facebook) }}" target="_blank"><span class="fa fa-facebook"></span> Facebook</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url($post->auteur->twitter) }}" target="_blank"><span class="fa fa-twitter"></span> Twitter</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="mailto:{{ $post->auteur->email }}" target="_blank"><span class="glyphicon glyphicon-envelope"></span> Stuur een mail</a></li>
			</ul>
		</div>
		<p class="over-tekst">
			{{$post->auteur->over}}
		</p>
	</div>
</div>
<!-- /Auteur blok -->
<div class="box mobiel persoon-intro">
	<h4>Download ons e-book</h4>
	<img src="http://www.digitusmarketing.nl/images/digitus/ebooks/ebook-marketing-sportschool.png" alt="" class="ebook-uitgelicht" style="max-height:250px;display:block;margin:10px auto;">
	<button class="btn demo-button" id="download-ebook-sidebar" style="display:block;margin:10px auto 0; float:none;">Download</button>
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