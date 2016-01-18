<!DOCTYPE html>

<html lang="nl-NL">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titel')</title>
	{!! Html::style('./css/reset.css') !!}
	{!! Html::style('./css/main.css') !!}
	{!! Html::style('./css/font-awesome.css') !!}
	<link rel="icon" href="{{ URL::to('/') }}/images/digitus/favicon.ico" type="image/ico" />
	<link rel="shortcut icon" href="{{ URL::to('/') }}/images/digitus/favicon.ico" type="image/ico" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      {!! Html::style('./css/ie.css') !!}
    <![endif]-->
@yield('css')
@yield('meta')
@yield('pixels')
</head>
<body itemscope itemtype="http://schema.org/WebPage">
@include('includes.google.analytics')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3&appId=387796737964493";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

@include('includes.menus.sidemenu')

<div id="page">
@yield('menu')
<div class="spacial"></div>



<div class="container">
	<div class="col-md-12 col-sm-12 col-xs-12 desktop">
		@yield('breadcrumb')
	</div>
	<div class="col-md-12 col-lg-8 col-xs-12 col-sm-12">
		@yield('content')
	</div>
	<div class="col-md-4 col-lg-4 hidden-xs hidden-sm hidden-md">
		@yield('sidebar')
	</div>
	@yield('diensten')
</div>
@yield('footer')
</div>

@yield('footerscript')
{!! Html::script('js/main.js') !!}

</body>
</html>