@extends('layouts.backend')

@section('titel')
{!! $hetwebinar->naam !!}
@stop

@section('css')
<meta property="og:image" content="http://www.digitusmarketing.nl/images/site/webinar/fb-share-de-theorie-achter-het-bereik-op-facebook.png">
<meta property="og:url" content="http://www.digitusmarketing.nl/superboost">
<meta property="og:title" content="De Theorie Achter Het Bereik Op Facebook">
<meta property="og:description" content="Ontdek hoe jij jouw naamsbekendheid uitbreidt, mond-tot-mond reclame stimuleert en ervoor zorgt dat mensen aan jouw bedrijf denken wanneer ze naar jouw product of dienst opzoek zijn.">

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

  <div class="container">
    <div class="row login-container animated fadeInUp"> 
      <div class="col-md-8 col-md-offset-2 tiles white" style="padding:25px"> 
        @include('includes.webinar.top_content')
        @if(Session::has('message'))
      		<div class="col-md-12">
      		  <div class="alert alert-danger">{!! Session::get('message') !!}</div>
      		</div>
      		<div class="clearfix"></div>
      		<hr>
    		@endif
        <div class="col-md-12">
          <h3>Leuk dat je er al bent!</h3>
          <p>Klik op onderstaande knop om het online event te bekijken.</p>
          <center><button class="btn demo-button aanmelden-seminar">Bekijk Online Event!</button></center>
        </div>
      </div>
    </div>
  </div>
@stop

@section('footerscript')
<script src="http://www.digitusweb.nl/jquerycountdown/js/jquery.countdown.js"></script>
{!! Html::script('/js/webinars/countdown.js') !!}
@include('includes.forms.webinars.login')
{!! Html::script('/js/webinars/buitenklik.js') !!}


    <script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="http://www.digitusmarketing.nl/whatsapp/whatsapp-button.js";h.appendChild(s);}
  </script>
@stop