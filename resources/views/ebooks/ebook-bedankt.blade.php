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

<?php $extra = "fbq('track', 'Lead');"; ?>
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
        <hr>
        <h2 style="text-align:center;">Stap 1: Download</h2>
        <hr>
        <div class="download-ebook box" style="background-color:#f4f4f4; border:1px solid #565656; padding:10px;">
          {{-- <div class="col-md-2"><span class="fa fa-download" style="font-size:85px;color:#0e71b8;"></span></div> --}}
          <div class="col-md-2"><img src="{!! url($ebook->image) !!}" alt="{!! $ebook->naam !!}"></div>
          <div class="col-md-10" style="padding-top:15px;">
            <h4>{!! $ebook->slogan_titel !!}</h4>
            {{-- <p>Maak je niet druk, zelfs online marketers zien deze punten nog wel eens over het hoofd. Gelukkig weten wij hoe krachtig en waardevol Facebook kan zijn voor je business, en welke “geheime” technieken je daarvoor moet inzetten, die we natuurlijk met jou delen!</p> --}}
            <p>{!! $ebook->slogan_tekst !!}</p>
            <p>Bekijk je inbox of spambox voor de download link!</p>
          </div>
          <div class="clearfix"></div>
        </div>
        <p>&nbsp;</p>
        <div class="clearfix"></div>
        <hr>
        <h2 style="text-align:center;">Stap 2: Bekijk video</h2>
        <hr>
        <style>
        div#iframe{

          width:80%;
          display:block;
          margin:0 auto;
          /*height:calc(width * 0.75);*/
        }
        div#iframe > iframe {
          width:100%;
          height:100%;
          top:0;
          bottom:0;
          left:0;
          right:0;
        }
        </style>

        <div id="iframe">
          <iframe src="https://www.youtube.com/embed/imYJpr09IgQ" frameborder="0" allowfullscreen></iframe>
        </div>
        <p>&nbsp;</p>
        <div class="clearfix"></div>
        <hr>
        <h2 style="text-align:center;">Stap 3: Reserveer jouw plek voor dit gratis webinar!</h2>
        <hr>
        <p>Wil jij hier nog uitbegreid advies bij? Of wil jij vragen stellen hoe jij dit specifiek voor jouw business kan aanpakken?</p>
        <p>Meld je dan aan voor de Live Masterclass “7 Geheimen Voor Winstgevende Facebook Advertenties” Waarin we alle 7 geheimen uitvoerig zullen behandelen zodat je ze kunt toepassen om met zoveel mogelijk potentiële klanten in contact te komen!</p>
        <a href="{!! route('webinar.aanmelden', array('fb-geheimen-live?r=7GVWFA')) !!}" class="btn demo-button" style="display: block; margin: 40px auto 0; float: none; max-width: 250px;">Meld je aan</a>
        <p>&nbsp;</p>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
@stop

@section('footerscript')
<script src="http://www.digitusweb.nl/jquerycountdown/js/jquery.countdown.js"></script>

<script>
        var iframe = $('div#iframe');
        var window_height = $(document).height();
        var window_width = $(document).width();
        var iframe_width = iframe.width();
        iframe.css({'height':iframe_width * 0.75});
        $(window).resize(function() {
          iframe.css({'height':iframe_width * 0.75});
        });
        </script>
  <script>

  var allGood = true;

    function buitenKlik(e){

      $(document).on('click', function(e) {
        var $el = $('.belmijterugformulier');

        if(allGood == true) {

          if($(e.target).is('div.belmijterugformulier') || $(e.target).is('div.belmijterugformulier > div') || $(e.target).is('div.belmijterugformulier > div > *') || $(e.target).is('div.belmijterugformulier > form') || $(e.target).is('div.belmijterugformulier > form > *') || $(e.target).is('input.btn.btn-success') || $(e.target).is('div.belmijterugformulier > hr') || $(e.target).is('div.belmijterugformulier > form > div > input') || $(e.target).is('div.belmijterugformulier > form > div > p') || $(e.target).is('#email-error') || $(e.target).is('#voornaam-error') || $(e.target).is('#achternaam-error') || $(e.target).is('#email-error > p') || $(e.target).is('#voornaam-error > p') || $(e.target).is('#achternaam-error > p')){
            
          } else {
            
            $('#belmijterugformulier').fadeOut();
            $('#belmijterugformulier').removeClass("-on");
            allGood = false;
          }
        }
      });
    }

  $(document).ready(function(){
    $('.aanmelden-seminar').on('click', function(){
      $('#belmijterugformulier').fadeIn();
      $('#belmijterugformulier').addClass("-on");
        $(window).resize(function(){
            $('.belmijterugformulier').css({'margin-top':-Number($('.belmijterugformulier').height() /2 )});
        });

        setTimeout(function(){
          allGood = true;
          buitenKlik();
        },1000);
    });
    $('#MERGE0').focusout(function () {
         $('#email').val($(this).val());
     });
    $('#MERGE1').focusout(function () {
         $('#voornaam').val($(this).val());
     });
    $('#MERGE2').focusout(function () {
         $('#achternaam').val($(this).val());
     });
  });



  $('form#webinar-aanmelden').submit(function (e) {
      e.preventDefault();

      var $_token = $('#token-download').val();
      var formaction = $('input[type=hidden][name=formaction]').val();

      // Verstuur gegevens naar mailchimp
      // $.ajax({
      //   type: 'POST',
      //   url: webinarslug,
      //   data: $('form#webinar-aanmelden').serialize(),
      //   dataType: 'json',
      //   headers: { 'X-XSRF-TOKEN':$_token},
     
      //   beforeSend: function() {
      //     $('#voornaam-error').hide();
      //     $('#email-error').hide();
      //     $('#achternaam-error').hide();
      //   },
      //   error: function(data){
      //     console.log(data);
      //     var responsetext = jQuery.parseJSON(data.responseText);
      //     // console.log(responsetext);
      //     $.each(responsetext, function(index, value) {
      //       if(index == 'voornaam'){
      //         $('#voornaam-error p').text(value);
      //         $('#voornaam-error').show();

      //         // console.log(terug.voornaam);
      //       } if(index == 'achternaam'){
      //         $('#achternaam-error p').text(value);
      //         $('#achternaam-error').show();
      //         // console.log(terug.achternaam);
      //       } if(index == 'email'){
      //         $('#email-error p').text(value);
      //         $('#email-error').show();
      //         // console.log(terug.email);
      //       }
      //     });
      //     // var terug = jQuery.parseJSON(data['responseText']);
      //     // console.log(terug);
      //       // console.log(data['responseText']);
      //       // console.log(data['responseText']['voornaam']);
      //   },
      //   success: function(data){
      //       // Toch nog maar even sturen naar de back-end
        $.ajax({
          url: formaction,
          type: 'POST',
          data: $('form#webinar-aanmelden').serialize(),
          dataType: 'jsonp',
          contentType: "application/json; charset=utf-8",
          beforeSend: function() {
            $('div.errors').hide();
          },
          success: function(data){
            if(data['result'] != "success") {
              // ERROR
              console.log(data['msg']);
              $('div.errors').show();
            } else {
              $('form#webinar-aanmelden').slideUp();
              $('div.titel h2').empty();
              $('div.titel h2').text('Belangrijk!');
              $('div#mc-message').slideDown();
              // $('div.fb-share').append('<div class="fb-share-button" data-href="http://www.digitusmarketing.nl/superboost" data-layout="button"></div>');
              // $('div#mc-message .message').text(data['msg']);
              
            }
          }
        });
      
    });

    $('div#close-form').on('click', function(){
      $('#belmijterugformulier').fadeOut("-on");
      $('#belmijterugformulier').removeClass("-on");
      allGood = false;
    });


  </script>

    <script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="http://www.digitusmarketing.nl/whatsapp/whatsapp-button.js";h.appendChild(s);}
  </script>
@stop