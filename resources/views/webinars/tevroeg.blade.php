@extends('layouts.backend')

@section('titel')
Te vroeg voor {!! $hetwebinar->titel !!}
@stop

@section('css')
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
  <div class="container">
    <div class="row login-container animated fadeInUp">  
      <div class="col-md-8 col-md-offset-2 tiles white no-padding">
        <div class="p-t-30">
          <img src="{!! url('/images/digitus/DIGITUS_logo_def.png') !!}" alt="Logo Digitus Marketing" class="center">
        </div>
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40 xs-p-r-10"> 
          <h2 class="normal">Oeps! Je bent te vroeg.</h2>
            <p>Het {!! $hetwebinar->titel !!} zal online staan op {!! $hetwebinar->datumDagMaand() !!} om {!! $hetwebinar->deTijd() !!}.</p>
            <p>Tot dan!</p>
        </div>
      </div>
    </div>
    @if(isset($hetwebinar->aanmeld_footer))
      <div class="col-md-10 col-md-offset-1" style="margin-top: 25px; padding: 25px;">
        <p style="margin:0;">{!! $hetwebinar->aanmeld_footer !!}</p>
      </div>
      @endif
  </div>
@stop

@section('footerscript')
@stop