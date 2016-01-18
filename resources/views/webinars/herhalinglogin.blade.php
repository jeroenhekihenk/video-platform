@extends('layouts.backend')

@section('titel')
Herhaling Online Event | De Theorie Achter Het Bereik Op Facebook
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

  <div class="container">
    <div class="row login-container animated fadeInUp"> 
      <div class="col-md-8 col-md-offset-2 tiles white" style="padding:25px"> 
        <div class="col-md-6 hoelaat-wanneer">
          <p>
            <span class="fa fa-calendar"></span> {!! $hetwebinar->deDatum() !!}
          </p>
          <p>
            <span class="fa fa-clock-o"></span> Vanaf {!! $hetwebinar->deTijd() !!} uur
          </p>
        </div>
        <div class="col-md-6 counter">
          <div class="timer">
            <div class="dagen">
              <p class="cijfer"></p>
              <p class="letter"></p>
            </div>
            <div class="uren">
              <p class="cijfer"></p>
              <p class="letter"></p>
            </div>
            <div class="minuten">
              <p class="cijfer"></p>
              <p class="letter"></p>
            </div>
            <div class="seconden">
              <p class="cijfer"></p>
              <p class="letter"></p>
            </div>
          </div>   
        </div>

        <div class="clearfix"></div>
        <hr>
        @if(Session::has('message'))
      		<div class="col-md-12">
      		  <div class="alert alert-danger">{!! Session::get('message') !!}</div>
      		</div>
      		<div class="clearfix"></div>
      		<hr>
    		@endif
        <div class="col-md-12">
          <h3>Leuk dat je er bent!</h3>
          <p>Klik op onderstaande knop om de herhaling van het online event te bekijken.</p>
          <center><button class="btn demo-button aanmelden-seminar">Bekijk Online Event!</button></center>
        </div>
      </div>
    </div>
  </div>
@stop

@section('footerscript')
<script src="http://www.digitusweb.nl/jquerycountdown/js/jquery.countdown.js"></script>
<script>
<?php 
  $webinarcountdowntijd = $hetwebinar->webinars->first()->countdownTijd();
  echo "var webinarcountdowntijd = '{$webinarcountdowntijd}';";
?>
$(".timer")
    .countdown(webinarcountdowntijd, function(event) {
      $(this).html(
        event.strftime('<div class="dagen"><p class="cijfer">%-D</p><p class="letter">dagen</p></div><div class="uren"><p class="cijfer">%-H</p><p class="letter">uur</p></div><div class="minuten"><p class="cijfer">%-M</p><p class="letter">minuten</p></div><div class="seconden"><p class="cijfer">%-S</p><p class="letter">seconden</p></div>'));
    });
  </script>
@include('includes.forms.webinars.herhalinglogin')
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
</script> 


    <script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="http://www.digitusmarketing.nl/whatsapp/whatsapp-button.js";h.appendChild(s);}
  </script>
@stop