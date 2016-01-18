@extends('layouts.backend')

@section('titel')
{!! $hetwebinar->titel !!}
@stop

@section('css')
<meta property="og:image" content="http://www.digitusmarketing.nl/images/site/webinar/fb-share-de-theorie-achter-het-bereik-op-facebook.png">
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

  <div class="container" id="intro">
    <div class="col-md-10 col-md-offset-1">
      <h4>Herhaling {!! $hetwebinar->webinars->first()->titel !!}</h4>
      <div class="col-md-12">
        <h1>{!! $hetwebinar->webinars->first()->slogan !!}</h1>
      </div>
    </div>
  </div>
</div>
<div id="page">
<style>
#iframe, .tiles{width:100%;}
</style>
  <div class="container">
    <div class="row login-container animated"> 
      <div class="col-md-12 tiles white" style="padding:15px;"> 
        <div class="col-md-12 livestream" style="padding-left:0;">
          {!! $hetwebinar->vimeo_link !!}
        </div>
      </div>      
    </div>
  </div>
@stop

@section('footerscript')
<script>
$(document).ready(function(){
  var iframe = $("#iframe");
  var width = iframe.width();
  var tiles = $('.tiles');
  var tileswidth = tiles.width();
  iframe.css("height",width * 0.55);
  // tiles.css("height",tileswidth * 0.5);
});
</script>
    <script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="http://www.digitusmarketing.nl/whatsapp/whatsapp-button.js";h.appendChild(s);}
  </script>
@stop