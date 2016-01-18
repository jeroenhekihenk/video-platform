@extends('layouts.backend')

@section('titel')
  @if(isset($sitetitel))
    {!! $sitetitel !!}
  @else
    Digitus Marketing
  @endif
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
<style>
.col-md-8.col-md-offset-2.tiles.white > div {
  padding:15px !important;
}
/*
|-----------------------------------------------------------------------
| MOBILE PORTRAIT
|-----------------------------------------------------------------------
*/

@media only screen and (min-width:220px) and (max-width:480px) and (orientation:portrait) {
  .col-md-8.col-md-offset-2.tiles.white div.col-md-4,
  .col-md-8.col-md-offset-2.tiles.white div > h2 {
    text-align:center;
  }
}
</style>
<?php 
if(isset($nu))
{
  if($product->prijs_aanbieding_tot > $nu) {
    $deprijs = $product->prijs_aanbieding;
  } elseif($product->prijs_herhaling_tot > $nu) {
    $deprijs = $product->prijs_herhaling;
  } else {
    $deprijs = $product->prijs_normaal;
  }
} else {
  $deprijs = '0.00';
}
$extra = "fbq('track', 'Purchase', {value: $deprijs, currency: 'EUR'});
fbq('track', 'Lead');
fbq('track', 'ViewContent');"; ?>
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


  <div class="container" id="intro">
    <div class="col-md-10 col-md-offset-1">
      <h4>{!! $product->naam !!}</h4>
      <div class="col-md-12">
        <h1>{!! $product->salespage->first()->slogan !!}</h1>
      </div>
    </div>
  </div>
</div>
<div id="page">

  <div class="container">
    <div class="row login-container animated fadeInUp"> 
      <div class="col-md-8 col-md-offset-2 tiles white" style="padding:25px">
        <div class="col-md-4">
          @if(isset($icon))
            {!! $icon !!}
          @endif
        </div> 
        <div class="col-md-8">
        @if($titel)
        <h2>{!! $titel !!}</h2>
        <hr>
        @endif
        @if($message)
          {!! $message !!}
        @endif
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