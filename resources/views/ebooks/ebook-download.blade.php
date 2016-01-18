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
      
      <div class="col-md-12">
        <h1 style="border-bottom:1px dashed white; padding-bottom:25px;">{!! $ebook->naam !!}</h1>
        {{-- <div class="col-md-5" style="padding:45px 15px;">
          <h5>{!! $ebook->slogan_tekst !!}</h5>
        </div> --}}
        {{-- <div class="hr-pijl-wit"></div> --}}
        {{-- <hr style="border-style:dashed;"> --}}
        <div class="col-md-12">
          {{-- <h2 style="color:white;font-weight:600;">Jouw hosts:</h2> --}}
          <div class="col-md-5 col-sm-12 col-xs-12">
            <img src="{!! url($ebook->image) !!}" alt="{!! $ebook->naam !!}">
            {{-- <h3 style="color:white;">Parsifal Tritsch</h3> --}}
          </div>
          <div class="col-md-7 col-sm-12 col-xs-12">
            <h5 style="margin-bottom:15px;">{!! $ebook->slogan_tekst !!}</h5>
            <div class="form-show">
              <button class="btn demo-button show-form">Direct toegang</button>
            </div>
            <div class="form-hidden" style="display:none;">
              {!! Form::open(array('class'=>'animated fadeIn', 'id'=>'webinar-aanmelden')) !!}
                {!! Form::hidden('u', $ebook->form_u) !!}
                {!! Form::hidden('id', $ebook->form_id) !!}
                {!! Form::hidden('formaction', $ebook->form_link) !!}
                
                <div class="col-md-12 col-sm-12 form-group">
                  <div id="voornaam-error" style="display:none;">
                    <p class="alert alert-danger"></p>
                  </div>
                  {!! Form::text($ebook->form_field2, '', array('class'=>'form-control', 'placeholder'=>$ebook->field2_placeholder, 'id'=>$ebook->form_field2)) !!}
                  {!! Form::hidden('voornaam', '', array('id'=>'voornaam')) !!}
                </div>
                <div class="col-md-12 col-sm-12 form-group">
                  <div id="email-error" style="display:none;">
                    <p class="alert alert-danger"></p>
                  </div>
                  {!! Form::email($ebook->form_field1, '', array('class'=>'form-control', 'placeholder'=>$ebook->field1_placeholder,'id'=>$ebook->form_field1)) !!}
                  {!! Form::hidden('email', '', array('id'=>'email')) !!}
                </div>
                <?php 
                  if(isset($_GET['r']))
                  {
                    $ref = $_GET['r'];
                  }
                  else {
                    $ref = null;
                  }
                ?>

                {!! Form::hidden('ref', $ref) !!}
                
                <?php
                $encrypter = app('Illuminate\Encryption\Encrypter');
                $encrypted_token = $encrypter->encrypt(csrf_token());
                ?>
                <input type="hidden" id="token-download" value="{!! $encrypted_token !!}">
                {{-- <div class="clearfix"></div>
                <hr style="border-style: dashed; width:95%;display:block;margin:20px auto;"> --}}
                <div class="form-group">
                  <p class="pull-left" style="margin-left:15px;margin-top:15px;color:white;"><span class="fa fa-lock" style="margin-right:5px;"></span> Je gegevens zijn veilig</p>
                  {!! Form::submit('Download', array('class'=>'btn demo-button pull-right', 'style'=>'margin:0 0 0 15px;')) !!}
                  <div style="position: absolute; left: -5000px;">
                    <input class="form-token" type="text" value="" tabindex="-1" name="{!! $ebook->form_token !!}">
                  </div>
                </div>
              {!! Form::close() !!}
            </div>
          </div>
          {{-- <div class="col-md-6 col-md-6 col-xs-6">
            <img src="http://www.digitusmarketing.nl/images/users/rogier.png" alt="Rogier van Voorst" style="border-radius: 100%; margin: 0px 25px; border: 2px solid white; width: 130px; height: 130px;">
            <h3 style="color:white;">Rogier van Voorst</h3>
          </div> --}}
        </div>
        {{-- <div class="col-md-12">
          <center><button class="btn demo-button aanmelden-seminar">Download de marketing machine</button></center>
        </div> --}}
      </div>
    </div>
  </div>
</div>
<div id="page">

  <div class="container">
    <div class="row login-container animated fadeInUp"> 
      {{-- <div class="col-md-10 col-md-offset-1" style="padding:45px 15px;">
      </div> --}}
      <div class="col-md-10 col-md-offset-1 tiles white" style="padding:25px">
        {{-- <h3>{!! $ebook->slogan_tekst !!}</h3>
        <div class="clearfix"></div>
        <hr> --}}
        <p>Je hebt het vast wel eens meegemaakt, je steekt tijd en moeite in het bouwen van een Facebook campagne, maar het leverde niet de maximale resultaten op die je eruit had kunnen halen. Maak je niet druk, zelfs online marketers zien deze punten nog wel eens over het hoofd. Gelukkig weten wij hoe krachtig en waardevol Facebook kan zijn voor je business, en welke “geheime” technieken je daarvoor moet inzetten, die we natuurlijk met jou delen!</p>
        <p>Welke resultaten je direct kunt verwachten als je deze 7 geheimen toepast:<br/>
          <ul class="wink">
            <li class="vink">Bereik 10- tot 100-duizenden mensen binnen jouw doelgroep.</li>
            <li class="vink">Verlaag jouw advertentiekosten met 50%.</li>
            <li class="vink">Kom in contact met 400% meer potentiële klanten.</li>
            <li class="vink">Zet Facebook fans om in betalende klanten</li>
          </ul>
        </p>
        <div class="clearfix"></div>
        <hr>
      {{-- </div>
      <div class="col-md-10 col-md-offset-1 bonus-bar">
        <h3>Maak nu tijdelijk kans op:</h3>
        <h1><a href="{!! action('ProductController@getBestellen', array('facebook-advertentie-geheimen')) !!}">Cursus Facebook Advertentie geheimen</a></h1>
        <small>Het enige dat je hoeft te doen is het ebook te downloaden ;)</small>
      </div>
      <div class="col-md-10 col-md-offset-1 tiles white"> --}}
        <h3>In de trand van, "stilstand is achteruitgang" vinden wij dat het tijd is voor verandering!</h3>
        <p>Speciaal voor jou hebben we de 7 "geheimen" gebundeld, die door elke top-expert op het gebied van Facebook marketing ALTIJD worden toegepast, om om keer op keer meer omzet te genereren. Word onverslaanbaar in jouw markt en geef 99% van jouw concurrenten het nakijken!</p>
      </div>
      <div class="col-md-10 col-md-offset-1">
        <div class="form-show">
          <button class="btn demo-button show-form bottom">Direct toegang</button>
        </div>
        <div class="form-hidden" style="display:none;">
          <h4>Download "{!! $ebook->slogan_titel !!}"</h4>
          {!! Form::open(array('class'=>'animated fadeIn', 'id'=>'webinar-aanmelden-bottom')) !!}
            {!! Form::hidden('u', $ebook->form_u) !!}
            {!! Form::hidden('id', $ebook->form_id) !!}
            {!! Form::hidden('formaction', $ebook->form_link) !!}
            
            <div class="col-md-4 col-sm-6 form-group">
              <div id="voornaam-error" style="display:none;">
                <p class="alert alert-danger"></p>
              </div>
              {!! Form::text($ebook->form_field2, '', array('class'=>'form-control', 'placeholder'=>$ebook->field2_placeholder, 'id'=>$ebook->form_field2)) !!}
              {!! Form::hidden('voornaam', '', array('id'=>'voornaam')) !!}
            </div>
            <div class="col-md-4 col-sm-12 form-group">
              <div id="email-error" style="display:none;">
                <p class="alert alert-danger"></p>
              </div>
              {!! Form::email($ebook->form_field1, '', array('class'=>'form-control', 'placeholder'=>$ebook->field1_placeholder,'id'=>$ebook->form_field1)) !!}
              {!! Form::hidden('email', '', array('id'=>'email')) !!}
            </div>
            <div class="col-md-4 col-sm12 form-group">
              {!! Form::submit('Download', array('class'=>'btn demo-button pull-right', 'style'=>'margin:0;width:100%;padding:9px !important; font-size:14pt !important;')) !!}
            </div>
            <?php 
              if(isset($_GET['r']))
              {
                $ref = $_GET['r'];
              }
              else {
                $ref = null;
              }
            ?>

            {!! Form::hidden('ref', $ref) !!}
            
            <?php
            $encrypter = app('Illuminate\Encryption\Encrypter');
            $encrypted_token = $encrypter->encrypt(csrf_token());
            ?>
            <input type="hidden" id="token-download" value="{!! $encrypted_token !!}">
            <div class="form-group">
              <p class="pull-left"><span class="fa fa-lock" style="margin-right:5px;"></span> Je gegevens zijn veilig</p>
              <div style="position: absolute; left: -5000px;">
                <input class="form-token" type="text" value="" tabindex="-1" name="{!! $ebook->form_token !!}">
              </div>
              
            </div>
            
          {!! Form::close() !!}
        </div>
        {{-- <center><button class="btn demo-button aanmelden-seminar">Download de marketing machine</button></center> --}}
      </div>  
    </div>
  </div>
@stop

@section('footerscript')
<script src="http://www.digitusweb.nl/jquerycountdown/js/jquery.countdown.js"></script>
{{-- @include('includes.forms.ebooks.download') --}}

  <script>
  $(document).ready(function(){
    $('button.show-form').on('click', function(){
      $(this).parent('div.form-show').hide();
      if($(this).hasClass('bottom')) {
        $(this).parent().parent('div.col-md-10.col-md-offset-1').addClass('download-bar');
      }
      $(this).parent().next('.form-hidden').slideDown('2500');
    });
  });

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
              console.log(data);
              $('div.errors').show();
            } else {
              $('#belmijterugformulier').removeClass("-on");
              $('#belmijterugformulier').fadeOut();
              window.location.href = "http://www.digitusmarketing.nl/7-fb-geheimen/bedankt";              
            }
          }
        });
    });
  $('form#webinar-aanmelden-bottom').submit(function (e) {
      e.preventDefault();
      var $_token = $('#token-download').val();
      var formaction = $('input[type=hidden][name=formaction]').val();
        $.ajax({
          url: formaction,
          type: 'POST',
          data: $('form#webinar-aanmelden-bottom').serialize(),
          dataType: 'jsonp',
          contentType: "application/json; charset=utf-8",
          beforeSend: function() {
            $('div.errors').hide();
          },
          success: function(data){
            if(data['result'] != "success") {
              // ERROR
              console.log(data);
              $('div.errors').show();
            } else {
              $('#belmijterugformulier').removeClass("-on");
              $('#belmijterugformulier').fadeOut();
              window.location.href = "http://www.digitusmarketing.nl/7-fb-geheimen/bedankt";              
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