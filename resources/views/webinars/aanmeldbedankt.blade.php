@extends('layouts.backend')

@section('titel')
{!! $hetwebinar->titel !!}
@stop

@section('css')
<meta property="og:image" content="http://www.digitusmarketing.nl/images/site/salespage-tijdlijnactie/webinar.jpg">
<meta property="og:url" content="http://www.digitusmarketing.nl/VPNO">
<meta property="og:title" content="Exclusief Facebook Marketing webinar!">
<meta property="og:description" content="Ontdek de meest succesvolle Facebook strategieën om jouw mailinglijst en business razendsnel te laten groeien!">

<meta property="og:site_name" content="digitusmarketing.nl">
{!! Html::style('/css/font-awesome.css') !!}
<link href="http://www.digitusmarketing.nl/whatsapp/button.css" rel="stylesheet" />
{!! Html::style('/css/webinar.css') !!}

<?php 
$extra = "fbq('track', 'Lead');";
?>
@include('includes.pixels.fb_audience', array($extra))
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

  @include('includes.webinar.header')
</div>
<div id="page">

  <div class="container">
    <div class="row login-container animated fadeInUp"> 
      <div class="col-md-10 col-md-offset-1 tiles white" style="padding:25px"> 
        @include('includes.webinar.top_content')
        @include('includes.webinar.bedanktcontent')
      </div>
      <div class="col-md-10 col-md-offset-1 tiles white" style="margin-top: 25px; padding: 25px;">
        @include('includes.webinar.kalenders')
      </div>
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
    <script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="http://www.digitusmarketing.nl/whatsapp/whatsapp-button.js";h.appendChild(s);}
  </script>
@stop