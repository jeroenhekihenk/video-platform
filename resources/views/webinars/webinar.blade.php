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

  @include('includes.webinar.header')
</div>
<div id="page">
<style>
#webinar{width:100%;}
</style>
  <div class="container">
    <div class="row login-container animated fadeInUp"> 
      <div class="col-md-12 tiles white" style="padding:15px;"> 
        <div class="col-md-9 livestream" style="padding-left:0;">
        <h2>{!! $hetwebinar->welkom_titel !!}
          <iframe id="webinar" height="600" src="{!! $hetwebinar->youtube_live_url !!}" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-md-3 chat" style="padding-right:0;">
        <h2>{!! $hetwebinar->chat_titel !!}</h2>
          <iframe src="{!! $hetwebinar->chat_url !!}" frameborder="0" height="600" id="webinar"></iframe>
        </div>
        <div class="clearfix"></div>
      </div>      
    </div>
  </div>
@stop

@section('footerscript')
    <script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="http://www.digitusmarketing.nl/whatsapp/whatsapp-button.js";h.appendChild(s);}
  </script>
@stop