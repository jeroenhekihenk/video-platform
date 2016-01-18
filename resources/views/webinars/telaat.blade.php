@extends('layouts.backend')

@section('titel')
Te laat voor {!! $hetwebinar->titel !!}
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
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=580857711976908";
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
          <h2 class="normal">Oeps! Je bent te laat.</h2>
          <p>Helaas, het webinar is afgelopen..</p>
          <p>Wil je geen webinars meer van ons missen? Wees er dan zeker van dat je ons op <a href="http://www.facebook.com/DigitusMarketing" title="Digitus Marketing Facebook" target="_blank">Facebook</a> hebt geliked en blijf op de hoogte van toekomstige webinars!</p>
          <div class="clearfix"></div>
          <hr>
          <div class="fb-page" data-href="https://www.facebook.com/DigitusMarketing" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/DigitusMarketing"><a href="https://www.facebook.com/DigitusMarketing">Digitus Marketing</a></blockquote></div></div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('footerscript')
@stop