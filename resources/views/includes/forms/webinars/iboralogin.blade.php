<div id="belmijterugformulier">
  <div class="belmijterugformulier">
    <div class="titel">
      <h2 class="pull-left">Meld je direct aan!</h2>
      <div id="close-form">
        <button type="button" class="close" style="font-size:22pt !important;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </button>
      </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div id="mc-message" class="p-l-40 p-r-40">
      <p class="message">Er is een mail onderweg om je aanmelding te bevestigen. Terwijl je wacht kun je hieronder dit webinar alvast delen met je vrienden.</p>
      <p class="message-2">Heb je geen mail ontvangen? Kijk voor de zekerheid in je SPAM of RECLAME box.</p>
      <hr>
      <div class="fb-share"><div class="fb-share-button" data-href="http://www.digitusmarketing.nl/VPNO" data-layout="button"></div></div>
      <a href="whatsapp://send" data-text="Exclusief Facebook webinar! Ontdek de meest succesvolle Facebook strategieën om jouw mailinglijst en business razendsnel te laten groeien! " data-href="http://www.digitusmarketing.nl/VPNO" class="wa_btn wa_btn_m mobiel" style="display:none">Delen</a>
    </div>

    {!! Form::open(array('class'=>'animated fadeIn', 'id'=>'ibora-login')) !!}
    {!! Form::hidden('u', '4385a7e4ded2873d14cf34514') !!}
    {!! Form::hidden('id', 'fb78e0fd91') !!}
    {!! Form::hidden('formaction', '//facebook.us7.list-manage.com/subscribe/post-json?id=fb78e0fd91&c=?') !!}
    
    <div class="col-md-6 col-sm-6 form-group">
      <div id="voornaam-error" style="display:none;">
        <p class="alert alert-danger"></p>
      </div>
      {!! Form::text('MERGE1', '', array('class'=>'form-control', 'placeholder'=>'Voornaam..', 'id'=>'MERGE1')) !!}
      {!! Form::hidden('voornaam', '', array('id'=>'voornaam')) !!}
    </div>
    <div class="col-md-6 col-sm-6 form-group">
      <div id="achternaam-error" style="display:none;">
        <p class="alert alert-danger"></p>
      </div>
      {!! Form::text('MERGE2', '', array('class'=>'form-control', 'placeholder'=>'Achternaam..','id'=>'MERGE2')) !!}
      {!! Form::hidden('achternaam', '', array('id'=>'achternaam')) !!}
    </div>
    <div class="col-md-12 col-sm-12 form-group">
      <div id="email-error" style="display:none;">
        <p class="alert alert-danger"></p>
      </div>
      {!! Form::email('MERGE0', '', array('class'=>'form-control', 'placeholder'=>'Emailadres..','id'=>'MERGE0')) !!}
      {!! Form::hidden('email', '', array('id'=>'email')) !!}
    </div>
    
    <?php
    $encrypter = app('Illuminate\Encryption\Encrypter');
    $encrypted_token = $encrypter->encrypt(csrf_token());
    ?>
    <input type="hidden" id="token-download" value="{!! $encrypted_token !!}">
    <div class="clearfix"></div>
    <hr>
    <div class="form-group">
      <p class="pull-left"><span class="fa fa-lock"></span> Je gegevens zijn veilig</p>
      <div style="position: absolute; left: -5000px;">
        <input class="form-token" type="text" value="" tabindex="-1" name="b_4385a7e4ded2873d14cf34514_fb78e0fd91">
      </div>
      {!! Form::submit('Aanmelden', array('class'=>'btn demo-button pull-right')) !!}
    </div>
  {!! Form::close() !!}
</div>
</div>