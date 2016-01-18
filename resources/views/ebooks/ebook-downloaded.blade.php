@extends('layouts.backend')

@section('titel')
{!! $ebook->naam !!}
@stop

@section('css')
{{-- <meta property="og:image" content="">
<meta property="og:url" content="">
<meta property="og:title" content="">
<meta property="og:description" content=""> --}}

<meta property="og:site_name" content="digitusmarketing.nl">
{!! Html::style('/css/font-awesome.css') !!}
<link href="http://www.digitusmarketing.nl/whatsapp/button.css" rel="stylesheet" />
{!! Html::style('/css/webinar.css') !!}

<?php $extra = "fbq('track', 'CompleteRegistration');"; ?>
@include('includes.pixels.fb_audience', array('extra'=>$extra))
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
      
      <div class="col-md-12">
        <h1>{!! $ebook->slogan_titel !!}</h1>
        {{-- <div class="col-md-12">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="{!! url($ebook->image) !!}" alt="{!! $ebook->naam !!}">
          </div>
        </div> --}}
      </div>
    </div>
  </div>
</div>
<div id="page">

  <div class="container">
    <div class="row login-container animated fadeInUp"> 
      <div class="col-md-10 col-md-offset-1 tiles white" style="padding:25px">
        <h2 style="text-align:center;">Download - {!! $ebook->slogan_titel !!}</h2>
        <hr>
        <div class="download-ebook box" style="background-color:#f4f4f4; border:1px solid #565656; padding:10px;">
          {{-- <div class="col-md-2"><span class="fa fa-download" style="font-size:85px;color:#0e71b8;"></span></div> --}}
          <div class="col-md-2"><img src="{!! url($ebook->image) !!}" alt="{!! $ebook->naam !!}"></div>
          <div class="col-md-10" style="padding-top:15px;">
            {{-- <h3>Facebook Advertentie Geheimen</h3> --}}
            {{-- <p>Maak je niet druk, zelfs online marketers zien deze punten nog wel eens over het hoofd. Gelukkig weten wij hoe krachtig en waardevol Facebook kan zijn voor je business, en welke “geheime” technieken je daarvoor moet inzetten, die we natuurlijk met jou delen!</p> --}}
            <h5>{!! $ebook->slogan_tekst !!}</h5>
            <div class="clearfix"></div>
            <hr>
            <p id="download"><b>De download is begonnen..</b><br/>Is de download niet begonnen? <a href="{!! url($ebook->pdf) !!}">&raquo; Download {!! $ebook->naam !!}</a>.</p>
            {{-- <hr>
            <p>Indien de download niet automatisch begint,<br/><a href="#">&raquo; Download de 7 Geheimen Voor Winstgevende Facebook Advertenties</a>.</p> --}}
          </div>
          <div class="clearfix"></div>
        </div>
        <p>&nbsp;</p>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
@stop

@section('footerscript')
<script src="http://www.digitusweb.nl/jquerycountdown/js/jquery.countdown.js"></script>

<script>
<?php 
  date_default_timezone_set('Europe/Amsterdam');
  $titel = $ebook->slogan_titel;
  echo "var etitel = '{$titel}';";
?>
var downloadButton = document.getElementById("download");
var counter = 7;
var newElement = document.createElement("p");
newElement.innerHTML = "Je kan '"+etitel+"' downloaden in <b>"+counter+"</b> seconden.";
var id;

var a = $('#download').children('a');
var href = a.attr('href');

downloadButton.parentNode.replaceChild(newElement, downloadButton);

id = setInterval(function() {
    counter--;
    if(counter < 0) {
        newElement.parentNode.replaceChild(downloadButton, newElement);
        clearInterval(id);
        window.location.href = href;
    } else {
        newElement.innerHTML = "Je kan '"+etitel+"' downloaden in <b>" + counter.toString() + "</b> seconden.";
    }
}, 1000);
</script>

    <script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="http://www.digitusmarketing.nl/whatsapp/whatsapp-button.js";h.appendChild(s);}
  </script>
@stop