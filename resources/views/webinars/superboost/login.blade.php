@extends('layouts.backend')

@section('titel')
Online Event | De Theorie Achter Het Bereik Op Facebook
@stop

@section('css')
<meta property="og:image" content="http://www.digitusmarketing.nl/images/site/webinar/fb-share-de-theorie-achter-het-bereik-op-facebook.png">
<meta property="og:url" content="http://www.digitusmarketing.nl/superboost">
<meta property="og:title" content="De Theorie Achter Het Bereik Op Facebook">
<meta property="og:description" content="Ontdek hoe jij jouw naamsbekendheid uitbreidt, mond-tot-mond reclame stimuleert en ervoor zorgt dat mensen aan jouw bedrijf denken wanneer ze naar jouw product of dienst opzoek zijn.">

<meta property="og:site_name" content="digitusmarketing.nl">
{!! Html::style('/css/font-awesome.css') !!}
<link href="http://www.digitusmarketing.nl/whatsapp/button.css" rel="stylesheet" />
<style>
.page-container{
  background-image: url("http://www.digitusmarketing.nl/images/site/bg/blauw-bg-pattern.jpg");
  background-position: center center;
  height: auto !important;
  padding: 3% 0 8% !important;
  position:relative;
  z-index: 0;
}
body {
  background-image: url('http://www.digitusmarketing.nl/images/site/bg/grijs-bg-pattern.jpg');
  background-position: center center;
}
.login-container{
  margin-bottom:5%;
  margin-top:-6%;
  position:relative;
  z-index: 1;
}
#mc-message{display:none;}
.demo-button {
    background: #ff6f21 none repeat scroll 0 0 !important;
    border-color: #b74d13 !important;
    color: white !important;
    font-size: 15pt !important;
    font-weight: bold !important;
    padding: 15px 45px !important;
    text-transform: uppercase;
    margin: 25px 0 0 ;
}
.demo-button:hover {
    background: #fc762d none repeat scroll 0 0 !important;
    color: white !important;
    padding: 20px 50px !important;
}
.demo-button:active, .demo-button:focus {
    border-top: 2px solid #b74d13 !important;
    color: white !important;
}

div#belmijterugformulier, div#downloadebookformulier {
    background: rgba(0, 0, 0, 0) url("../images/digitus/overlay.png") repeat scroll 0 0;
    bottom: 0;
    display: none;
    height: 100%;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    width: 100%;
    z-index: 2147483647;
}
div#belmijterugformulier div.belmijterugformulier, div#downloadebookformulier div.downloadebookformulier {
    background: white none repeat scroll 0 0;
    border: 1px solid #dadada;
    border-radius: 6px;
    box-shadow: 0 0 20px 2px #231f20;
    left: 50%;
    margin-left: -200px;
    margin-top: -175px;
    min-height: 350px;
    padding: 25px;
    position: absolute;
    top: 50%;
    width: 400px;
}
div#belmijterugformulier.-on, div#downloadebookformulier.-on {
    display: block;
}
#superboost-aanmeld .form-group > .demo-button,
#superboost-aanmeld .form-group > .demo-button:hover {
    font-size: 12pt !important;
    padding: 9px 25px !important;
}
#belmijterugformulier h2 {
    font-size: 21pt !important;
    color: #2b2e83 !important;
    margin-bottom: 20px !important;
    margin-top: 0 !important;
}

#intro {
  text-align: center;
}
#intro div > h4,
#intro div > h1,
#intro div > h5 {
  color: white;
}
#intro div > h5 {
    font-size: 14pt;
    font-weight: 500;
    margin: 25px auto 10px;
}
#intro div > h4 {
  border-left: 13em solid white;
  border-right: 13em solid white;
  font-weight: 600;
  line-height: 4px;
  margin: 0 auto 25px;
}
#intro div > h1 {
  font-weight: 700;
}
.hoelaat-wanneer p > span {
  color:#0e71b8 ;
  font-size: 25px;
  margin-right:10px;
}
.hoelaat-wanneer p {
  font-size: 16px;
  color: #231f20;
  margin: 0 0 10px;
}
.timer-holder,
.timer-holder-mobiel{
    background-color: white;
    text-align: center;
    padding: 25px 0;
    box-shadow: 0 0 15px 0 rgba(0,0,0,0.3);
}
.timer-holder p {
    font-size: 16px;
}
.timer-holder p b {
    font-weight:bold;
}
.timer {
    display: block;
    float: left;
    width: 100%;
}
.timer > div {
    float: left;
    width: 25%;
    padding: 0 5px;
    text-align:center;
}
.timer div > p.letter {
    color: #231f20 !important;
    font-family: 'PT Sans', sans-serif;
    font-size: 15px;
    text-align:left;
}
.timer div > p.cijfer {
    font-size: 26px;
    text-align:center;
    width:100%;
    color: white !important;
    font-family: 'PT Sans', sans-serif;
    font-weight: bold;
    background-color:#0e71b8;
    padding: 10px;
    border-top:1px solid #328ac6;
    border-left:1px solid #0c64a0;
    border-right:1px solid #0c64a0;
    border-bottom:2px solid #0c64a0;
}
.tiles {
  -webkit-box-shadow:0 2px 3px 0 rgba(0,0,0,0.5);
  -moz-box-shadow:0 2px 3px 0 rgba(0,0,0,0.5);
  -ms-box-shadow:0 2px 3px 0 rgba(0,0,0,0.5);
  -o-box-shadow:0 2px 3px 0 rgba(0,0,0,0.5);
  box-shadow:0 2px 3px 0 rgba(0,0,0,0.5);
}
.tiles.white,
.tiles > h3 {
  color: black !important;
}
p, b, ul, li, ul > li {
  font-size: 15px ;
}

ul.wink > li.vink {
    background: rgba(0, 0, 0, 0) url("http://www.digitusmarketing.nl/images/digitus/vink.png") no-repeat scroll left center;
    display: block;
    line-height: 1.3;
    margin: 11px 0;
    min-height: 25px;
    padding: 5px 5px 5px 30px;
}

/*
|
| Desktop rare resolutie
|--
*/

@media only screen and (min-width:1px) and (max-width:480px) {
  #intro div > h4 {
      border-bottom: 1px dashed white;
      border-left: 0 solid white;
      border-right: 0 solid white;
      line-height: 22px;
      margin-top: 15px;
      padding-bottom:25px;
  }
}

/*
|-----------------------------------------------------------------------
| MOBILE PORTRAIT
|-----------------------------------------------------------------------
*/

@media only screen and (min-width:220px) and (max-width:480px) and (orientation:portrait) {
  .page-container {
    padding-bottom: 60px !important;
  }
  .col-md-1,
  .col-md-2,
  .col-md-3,
  .col-md-4,
  .col-md-5,
  .col-md-6,
  .col-md-7,
  .col-md-8,
  .col-md-9,
  .col-md-11,
  .col-md-12
   {
    padding: 15px;
  }
  .tiles.white {
    padding:0 !important;
  }
  /*.hoelaat-wanneer,
  .counter {
    padding:15px !important;
  }*/
  .timer div > p.letter {
    font-size: 13px;
  }
  #intro div > h4 {
      border-bottom: 1px dashed white;
      border-left: 0 solid white;
      border-right: 0 solid white;
      line-height: 22px;
      margin-top: 15px;
      padding-bottom:25px;
  }
  #intro div > h1 {
    font-size:26px;
    line-height:34px;
  }
  #intro div > h5 {
    font-size: 12pt;
  }
  .demo-button {
    padding :15px 30px !important;
  }
  .demo-button:hover {
    padding :15px 30px !important;
  }
}

/*
|
| Desktop resolutie
|--
*/
@media screen and (min-width:321px) and (max-width:768px) {
  #intro div > h4 {
      border-bottom: 1px dashed white;
      border-left: 0 solid white;
      border-right: 0 solid white;
      line-height: 22px;
      margin-top: 15px;
      padding-bottom:25px;
  }
}



/*
|-----------------------------------------------------------------------
| MOBILE LANDSCAPE
|-----------------------------------------------------------------------
*/

@media screen and (min-width:321px) and (max-width:768px) and (orientation:landscape) {
  .page-container {
    padding-bottom: 60px !important;
  }
  .col-md-1,
  .col-md-2,
  .col-md-3,
  .col-md-4,
  .col-md-5,
  .col-md-6,
  .col-md-7,
  .col-md-8,
  .col-md-9,
  .col-md-11,
  .col-md-12 {
    padding: 0 !important;
  }
  .timer div > p.letter {
    font-size: 13px;
  }
  #intro div > h4 {
      border-bottom: 1px dashed white;
      border-left: 0 solid white;
      border-right: 0 solid white;
      line-height: 22px;
      margin-top: 15px;
      padding-bottom:25px;
  }
  #intro div > h1 {
    font-size:26px;
    line-height:34px;
  }
  #intro div > h5 {
    font-size: 12pt;
  }
  .demo-button {
    padding :15px 30px !important;
  }
  .demo-button:hover {
    padding :15px 30px !important;
  }
}


/*
|-----------------------------------------------------------------------
| TABLET PORTRAIT
|-----------------------------------------------------------------------
*/

@media screen and (min-width:768px) and (max-width: 1024px) and (orientation:portrait) {
  #intro div > h4{
    border-left: 5em solid white;
    border-right: 5em solid white;
  }
}



/*
|-----------------------------------------------------------------------
| TABLET LANDSCAPE
|-----------------------------------------------------------------------
*/

@media only screen and (min-width:768px ) and (max-width: 1280px) and (orientation:landscape) {
  #intro div > h4{
    border-left: 8em solid white;
    border-right: 8em solid white;
  }
}
</style>

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
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/nl_NL/fbevents.js');

fbq('init', '712938138769005');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=712938138769005&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

  <div class="container" id="intro">
    <div class="col-md-10 col-md-offset-1">
      <h4>De Theorie Achter Het Bereik Op Facebook</h4>
      <div class="col-md-12">
        <h1>Hoe Je Vanaf Nú Keer Op Keer Meer Mensen Bereikt Dan Je Ooit Gedaan Hebt</h1>
        {{-- <div class="col-md-5" style="padding:45px 15px;">
          <h5>Ontdek hoe jij jouw naamsbekendheid uitbreidt, mond-tot-mond reclame stimuleert en ervoor zorgt dat mensen aan jouw bedrijf denken wanneer ze naar jouw product of dienst opzoek zijn.</h5>
        </div>
        <div class="col-md-7">
          <h2 style="color:white;font-weight:600;">Jouw hosts:</h2>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <img src="http://www.digitusmarketing.nl/images/users/parsifal.png" alt="Parsifal Tritsch" style="border-radius: 100%; margin: 0px 25px; border: 2px solid white; width: 130px; height: 130px;">
            <h3 style="color:white;">Parsifal Tritsch</h3>
          </div>
          <div class="col-md-6 col-md-6 col-xs-6">
            <img src="http://www.digitusmarketing.nl/images/users/rogier.png" alt="Rogier van Voorst" style="border-radius: 100%; margin: 0px 25px; border: 2px solid white; width: 130px; height: 130px;">
            <h3 style="color:white;">Rogier van Voorst</h3>
          </div>
        </div>
        <div class="col-md-12">
          <center><button class="btn demo-button aanmelden-seminar">Direct Aanmelden</button></center>
        </div> --}}
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
            <span class="fa fa-calendar"></span> Woensdag 18-11-2015
          </p>
          <p>
            <span class="fa fa-clock-o"></span> Vanaf 19:30 uur
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
<script>
$(".timer")
    .countdown("2015/11/18 19:30:00", function(event) {
      $(this).html(
        event.strftime('<div class="dagen"><p class="cijfer">%-D</p><p class="letter">dagen</p></div><div class="uren"><p class="cijfer">%-H</p><p class="letter">uur</p></div><div class="minuten"><p class="cijfer">%-M</p><p class="letter">minuten</p></div><div class="seconden"><p class="cijfer">%-S</p><p class="letter">seconden</p></div>'));
    });
  </script>
@include('includes.forms.webinars.superboost.login')
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