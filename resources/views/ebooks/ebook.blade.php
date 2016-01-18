
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>De Basis van een Succesvolle Facebook Pagina in 10 Stappen.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@_Digimarketing">
  <meta property="og:title" content="De Basis Van Een Succesvolle Facebook Pagina In 10 Stappen."/>
  <meta property="og:type" content="article"/>
  <meta property="og:url" content="http://www.digitusmarketing.nl/ebooks/10-stappen"/>
  <meta property="og:site_name" content="Digitus Marketing"/>
  <meta property="og:description" content="Download gratis ons e-book &quot;De Basis Van Een Succesvolle Facebook Pagina In 10 Stappen&quot;!"/>
  <meta property="og:image" content="http://www.digitusmarketing.nl/images/digitus/ebooks/ebook-succesvolle-facebook-pagina-10-stappen.png"/>
  <meta property="fb:app_id" content="143103275748075"/>
  <style type='text/css'>
    #offerwebapp.embed { margin: 0; padding: 0; }
    #offerwebapp.embed #profile { display: none; }
  </style>
  <style type='text/css'>body.offerukvcap {background-color: #ffffff;}</style>
  {!! Html::style('css/tabapp.css') !!}
  {!! Html::style('css/main.css') !!}
  {!! Html::style('whatsapp/button.css') !!}
  <style>
  h3, .h3 {
    font-size: 14pt !important;
  }
  h2, .h2 {
    font-size: 19pt !important;
  }
  </style>




</head>
<body class='default offerpage offerukvcap'>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3&appId=387796737964493";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <div class="header">
    <div class="container">
      <img src="http://www.digitusmarketing.nl/images/digitus/Digitus-logo-wit.png" class="logo">
    </div>
  </div>
  <div class="content">
    <div class="het-ebook">
      <div class="container">

        <div class="col-7">
          <h2>"De Basis Van een Succesvolle Facebook Pagina In 10 Stappen."</h2>
          <p class="intro">Facebook verandert ontzettend snel daarom hebben we ons e-book weer geüpdate.</p>
          <p>In dit e-book behandelen we stap voor stap de basis principes van een <u>succesvolle</u> Facebook pagina. Zodat zelfs een leek zijn/haar Facebook pagina er strak en professioneel uit kan laten zien.</p>
        </div>
        <div class="col-5">
          <img src="{!! url($ebook->image) !!}" class="ebook">
        </div>

        <div class="col-5">
          <h2>Wat is nieuw?</h2>
          <ul>
            <li>Hoe je een uitgelichte video kan toevoegen aan je Facebook pagina.</li>
            <li>Hoe je de nieuwe 'aanzet tot actie' <u>slim</u> inzet.</li>
            <li>Verschillende aanpassingen i.v.m. Facebook updates.</li>
          </ul>
        </div>
        <div class="col-7">
          {!! Form::open(array('id'=>'ebook-download-form')) !!}
            {!! Form::hidden('action', $ebook->form_link) !!}
            {!! Form::hidden('u', $ebook->form_u) !!}
            {!! Form::hidden('id', $ebook->form_id) !!}
            <?php
              $encrypter = app('Illuminate\Encryption\Encrypter');
              $encrypted_token = $encrypter->encrypt(csrf_token());
            ?>
            <input type="hidden" id="token" value="{!! $encrypted_token !!}">
            <h3>Vul onderstaand formulier in om het e-book GRATIS te downloaden</h3>
            <div class="mc-field-group voornaam-group">
              <label for="mce-VNAAM">{!! $ebook->field1_placeholder !!}  <span class="asterisk">*</span></label>
              <input type="text" name="{!! $ebook->form_field1 !!}" id="{!! $ebook->form_field1 !!}" size="25" value="">
            </div>
            <div class="mc-field-group achternaam-group">
              <label for="mce-ANAAM">{!! $ebook->field3_placeholder !!}  <span class="asterisk">*</span></label>
              <input type="text" name="{!! $ebook->form_field3 !!}" id="{!! $ebook->form_field3 !!}" size="25" value="">
            </div>

            <div class="mc-field-group">
              <label for="mce-EMAIL">{!! $ebook->field2_placeholder !!}  <span class="asterisk">*</span></label>
              <input type="email" autocapitalize="off" autocorrect="off" name="{!! $ebook->form_field2 !!}" id="{!! $ebook->form_field2 !!}" size="25" value="">
            </div>

            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>
            <div class="indicates-required"><span class="asterisk">*</span> velden zijn verplicht</div>
            <div style="position: absolute; left: -5000px;">
              {!! Form::text($ebook->form_token, '', array('class'=>'form-token')) !!}
            </div>
            <div class="clear">
              {!! Form::submit('verzenden!', array('class'=>'btn demo-button')) !!}
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
    <div class="bedankt" style="display: none;">
      <div class="container">
        <h2>Belangrijk!!</h2>
        {{-- <h2>Bedankt voor je aanvraag van het e-book "De Basis Van Een Succesvolle Facebook Pagina in 10 Stappen"!</h2> --}}
        <p>Er is een bevestigingsmail naar je onderweg. Mocht je de e-mail niet kunnen vinden, kijk voor de zekerheid even in je <b>spambox</b> en/of <b>reclame box</b>.</p>
        <p>Deel hieronder eenvoudig het e-book met je vrienden tijdens het wachten!</p>
        <div class="col-12">
          <a role="menuitem" class="btn demo-button" id="facebook-share" tabindex="-1" href="http://www.facebook.com/sharer/sharer.php?u={!! action('Ebooks\EbookController@get10Stappen') !!}&title={!! $ebook->naam !!}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600'); return false;">Deel op Facebook</a>
          {{-- <a href="#">Facebook share</a> --}}
          <a href="whatsapp://send" data-text="Het E-book: 'De Basis Van Een Succesvolle Facebook Pagina In 10 Stappen', wellicht iets voor jou? " data-href="http://www.digitusmarketing.nl/ebooks/10-stappen" class="wa_btn wa_btn_m mobiel" style="display:none">Delen op WhatsApp</a>
        </div>
      </div>
    </div>
  </div>
<script src="http://www.digitusmarketing.nl/js/jquery-1.11.2.js"></script>
<script>
  $('form#ebook-download-form').submit(function (e) {
    e.preventDefault();

    var $_token = $('#token').val();
    var formaction = $('input[type=hidden][name=action]').val();

    $.ajax({
      url: formaction,
      type: 'POST',
      data: $('form#ebook-download-form').serialize(),
      dataType: 'jsonp',
      contentType: "application/json; charset=utf-8",
      beforeSend: function() {
        $('div.ebook-errors').hide();
      },
      success: function(data){
        if(data['result'] != "success") {
          // ERROR
          console.log(data);
          $('div.ebook-errors').show();
        } else {
          console.log(data['msg']);
          // window.location.href = 'http://www.digitusmarketing.nl/ebooks/10-stappen/bedankt';
          $('.het-ebook').hide();
          $('.bedankt').show();
        }
      }
    });
  });
</script>
<script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="http://www.digitusmarketing.nl/whatsapp/whatsapp-button.js";h.appendChild(s);}
  </script>
</body>
</html>
