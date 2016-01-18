
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>De Basis van een Succesvolle Facebook Pagina in 10 Stappen.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@woobox">
  <meta property="og:title" content="De Basis Van Een Succesvolle Facebook Pagina In 16 Stappen."/>
  <meta property="og:type" content="article"/>
  <meta property="og:url" content="http://woobox.com/ukvcap"/>
  <meta property="og:site_name" content="Woobox"/>
  <meta property="og:description" content="Download gratis ons e-book &quot;De Basis Van Een Succesvolle Facebook Pagina In 16 Stappen&quot;!"/>
  <meta property="og:image" content="http://woobox.com/offers/ogshareimage/ukvcap?7a87386a6a5a4fc7f373d75348f40b55"/>
  <meta property="fb:app_id" content="143103275748075"/>
  <style type='text/css'>
    #offerwebapp.embed { margin: 0; padding: 0; }
    #offerwebapp.embed #profile { display: none; }
  </style>
  <style type='text/css'>body.offerukvcap {background-color: #ffffff;}</style>
  {!! Html::style('css/tabapp.css') !!}




</head>
<body class='default offerpage offerukvcap'>
  <div class="header">
    <div class="container">
      <img src="http://www.digitusmarketing.nl/images/digitus/Digitus-logo-wit.png" class="logo">
    </div>
  </div>
  <div class="content">
    <div class="container">
      <h2>Bedankt voor je aanvraag van het e-book "De Basis Van Een Succesvolle Facebook Pagina In 10 Stappen".</h2>
      <p>Klik op de knop hieronder om direct met het e-book aan de slag te gaan!</p>
      <a href="#" class="btn demo-button">Download Ebook</a>
      
    </div>
    <!-- <div class="bedankt" style="display: none;">
      <div class="container">
        <h2>Bedankt voor je aanvraag van het e-book "De Basis Van Een Succesvolle Facebook Pagina in 10 Stappen"!</h2>
        <p>Er is een bevestigingsmail naar je onderweg. Mocht je de e-mail niet kunnen vinden, kijk voor de zekerheid even in je <b>spambox</b> en/of <b>reclame box</b>.</p>
        <p>Deel hieronder eenvoudig het e-book met je vrienden tijdens het wachten!</p>
        <div class="clearfix"></div>
        <hr>
        <a href="#">Facebook share</a>
        <a href="#">Whatsapp share</a>
      </div>
    </div> -->
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
</body>
</html>
