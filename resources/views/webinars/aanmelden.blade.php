@extends('layouts.backend')

@section('titel')
{!! $hetwebinar->titel !!}
@stop

@section('css')
<meta property="og:image" content="{!! url($hetwebinar->ogimage) !!}">
<meta property="og:url" content="{!! url($hetwebinar->slug) !!}">
<meta property="og:title" content="{!! $hetwebinar->titel !!}">
<meta property="og:description" content="{!! $hetwebinar->slogan !!}">

<meta property="og:site_name" content="digitusmarketing.nl">
{!! Html::style('/css/font-awesome.css') !!}
<link href="http://www.digitusmarketing.nl/whatsapp/button.css" rel="stylesheet" />
{!! Html::style('/css/webinar.css') !!}

@include('includes.pixels.fb_audience')
@stop

@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.4&appId=387796737964493";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  @include('includes.webinar.hosts')
</div>
<div id="page">

  <div class="container">
    <div class="row login-container animated fadeInUp"> 
      <div class="col-md-10 col-md-offset-1 tiles white" style="padding:25px"> 
        @include('includes.webinar.top_content')
        @include('includes.webinar.aanmeldpunten')
        @include('includes.webinar.recensies')
      </div>
      @include('includes.webinar.footer') 
    </div>
  </div>
@stop

@section('footerscript')
<script src="http://www.digitusweb.nl/jquerycountdown/js/jquery.countdown.js"></script>
<script>
<?php 
  date_default_timezone_set('Europe/Amsterdam');
  $webinarcountdowntijd = $hetwebinar->countdownTijd();
  echo "var webinarcountdowntijd = '{$webinarcountdowntijd}';";
?>
</script>
{!! Html::script('/js/webinars/countdown.js') !!}
@include('includes.forms.webinars.aanmelden')
<script>
<?php
$webinarslug = $hetwebinar->slug;
echo "var webinarslug = '{$webinarslug}';";
?>
</script>
{!! Html::script('/js/webinars/webinarbot.js') !!}
    <script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="http://www.digitusmarketing.nl/whatsapp/whatsapp-button.js";h.appendChild(s);}
  </script>
@stop