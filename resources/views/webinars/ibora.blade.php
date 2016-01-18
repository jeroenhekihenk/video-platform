@extends('layouts.backend')

@section('css')
<meta property="og:image" content="http://www.digitusmarketing.nl/images/site/salespage-tijdlijnactie/webinar.jpg">
<meta property="og:url" content="http://www.digitusmarketing.nl/VPNO">
<meta property="og:title" content="Exclusief Facebook Marketing webinar!">
<meta property="og:description" content="Ontdek de meest succesvolle Facebook strategieën om jouw mailinglijst en business razendsnel te laten groeien!">

<meta property="og:site_name" content="digitusmarketing.nl">
{!! Html::style('/css/font-awesome.css') !!}
<link href="http://www.digitusmarketing.nl/whatsapp/button.css" rel="stylesheet" />
<style>
body{
  background-image: url("http://www.digitusmarketing.nl/images/site/bg/ibora-webinar.jpg");
  background-position: center center;
}
.login-container{
  margin-bottom:5%;
  margin-top:9%;
}
#mc-message{display:none;}
.demo-button {
    background: #ff6f21 none repeat scroll 0 0 !important;
    border-color: #b74d13 !important;
    color: white !important;
    font-size: 12pt !important;
    font-weight: bold !important;
    padding: 9px 30px !important;
    text-transform: uppercase;
}
.demo-button:hover {
    background: #fc762d none repeat scroll 0 0 !important;
    color: white !important;
}
.demo-button:active, .demo-button:focus {
    border-top: 2px solid #b74d13 !important;
    color: white !important;
    padding: 8px 30px 9px !important;
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
#belmijterugformulier h2 {
    font-size: 21pt !important;
    color: #2b2e83 !important;
    margin-bottom: 20px !important;
    margin-top: 0 !important;
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
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '712938138769005');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=712938138769005&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
  <div class="container">
    <div class="row login-container animated fadeInUp">  
      <div class="col-md-7 col-md-offset-2 tiles white no-padding">
        <div class="p-t-30">
          <img src="{!! url('/images/digitus/DIGITUS_logo_def.png') !!}" alt="Logo Digitus Marketing" class="center">
        </div>
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40 xs-p-r-10"> 
          <h2 class="normal">Exclusief Facebook Marketing Webinar</h2>
          <p>Voor coaches, Therapeuten en Trainers!</p>
        </div>
      </div>
      <div class="tiles grey no-padding col-md-7 col-md-offset-2">
         @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @if(Session::has('message'))
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40 xs-p-r-10">
          <div class="alert alert-success">{!! Session::get('message') !!}</div>
        </div>
        @endif
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40 xs-p-r-10 text-black">
          <div class="form-group">
            <p>Meld je direct aan voor het webinar en ontdek de meest succesvolle Facebook strategieën! </p>
          </div>
          <div class="form-group">
            <p>We onthullen tijdens het webinar hoe jij;<br/>
              <ul>
                <li>In contact komt met jouw doelgroep op Facebook.</li>
                <li>Jezelf snel positioneert als de 'go to' expert in jouw niche.</li>
                <li>Super snel jouw mailinglijst vergroot.</li>
                <li>Meer klanten en omzet genereert met jouw passie.</li>
                <li>Meer mensen aantrekt naar je workshops, seminars en webinars.</li>
              </ul>
            </p>
            <p>Het webinar zal op woensdag 21 oktober om 19:00 uur starten</p>
          </div>
          <div class="clearfix"></div>
          <div class="form-group">
            <button id="aanmelden-seminar" class="btn demo-button">
              JA, IK BEN ER BIJ!
            </button>
          </div>
        </div>
      </div>   
    </div>
  </div>
@stop

@section('footerscript')
@include('includes.forms.webinars.iboralogin')
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
    $('#aanmelden-seminar').on('click', function(){
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

  $('form#ibora-login').submit(function (e) {
      e.preventDefault();

      var $_token = $('#token-download').val();
      var formaction = $('input[type=hidden][name=formaction]').val();

      // Verstuur gegevens naar mailchimp
      $.ajax({
        type: 'POST',
        url: 'VPNO/post',
        data: $('form#ibora-login').serialize(),
        dataType: 'json',
        headers: { 'X-XSRF-TOKEN':$_token},
     
        beforeSend: function() {
          $('#voornaam-error').hide();
          $('#email-error').hide();
          $('#achternaam-error').hide();
        },
        error: function(data){
          var responsetext = jQuery.parseJSON(data.responseText);
          // console.log(responsetext);
          $.each(responsetext, function(index, value) {
            if(index == 'voornaam'){
              $('#voornaam-error p').text(value);
              $('#voornaam-error').show();

              // console.log(terug.voornaam);
            } if(index == 'achternaam'){
              $('#achternaam-error p').text(value);
              $('#achternaam-error').show();
              // console.log(terug.achternaam);
            } if(index == 'email'){
              $('#email-error p').text(value);
              $('#email-error').show();
              // console.log(terug.email);
            }
          });
          // var terug = jQuery.parseJSON(data['responseText']);
          // console.log(terug);
            // console.log(data['responseText']);
            // console.log(data['responseText']['voornaam']);
        },
        success: function(data){
            // Toch nog maar even sturen naar de back-end
        $.ajax({
          url: formaction,
          type: 'POST',
          data: $('form#ibora-login').serialize(),
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
              $('form#ibora-login').slideUp();
              $('div.titel h2').empty();
              $('div#mc-message').slideDown();
              $('div.fb-share').append('<div class="fb-share-button" data-href="http://www.digitusmarketing.nl/VPNO" data-layout="button"></div>');
              // $('div#mc-message .message').text(data['msg']);
              
            }
          }
        });
      }
    });

    $('div#close-form').on('click', function(){
      $('#belmijterugformulier').fadeOut("-on");
      $('#belmijterugformulier').removeClass("-on");
      allGood = false;
    });
});

  </script>

    <script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="http://www.digitusmarketing.nl/whatsapp/whatsapp-button.js";h.appendChild(s);}
  </script>
@stop