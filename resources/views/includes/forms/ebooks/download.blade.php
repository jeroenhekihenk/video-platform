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
    <div id="mc-message">
      <b class="message">Bevestig je aanmelding per mail, anders is je aanmelding niet geldig.</b>
      <p class="message-2">Heb je geen mail ontvangen? Kijk voor de zekerheid in je SPAM of RECLAME box.</p>
      <p class="message-3">Terwijl de mail onderweg is, kun je hieronder dit ebook alvast delen met je vrienden.</p>
      <hr>
      <div class="fb-share"><div class="fb-share-button" data-href="{!! action('TabApp\TabAppController@index') !!}" data-layout="button"></div></div>
      <a href="whatsapp://send" data-text="Ik heb zojuist de {!! $ebook->naam !!} gedownload. Misschien is dit wat voor jou?" data-href="{!! action('TabApp\TabAppController@index') !!}" class="wa_btn wa_btn_m mobiel" style="display:none">Delen</a>
      <div class="clearfix"></div>
    </div>

    {!! Form::open(array('class'=>'animated fadeIn', 'id'=>'webinar-aanmelden')) !!}
    {!! Form::hidden('u', $ebook->form_u) !!}
    {!! Form::hidden('id', $ebook->form_id) !!}
    {!! Form::hidden('formaction', $ebook->form_link) !!}
    
    <div class="col-md-6 col-sm-6 form-group">
      <div id="voornaam-error" style="display:none;">
        <p class="alert alert-danger"></p>
      </div>
      {!! Form::text($ebook->form_field2, '', array('class'=>'form-control', 'placeholder'=>$ebook->field2_placeholder, 'id'=>$ebook->form_field2)) !!}
      {!! Form::hidden('voornaam', '', array('id'=>'voornaam')) !!}
    </div>
    <div class="col-md-6 col-sm-6 form-group">
      <div id="achternaam-error" style="display:none;">
        <p class="alert alert-danger"></p>
      </div>
      {!! Form::text($ebook->form_field3, '', array('class'=>'form-control', 'placeholder'=>$ebook->field3_placeholder,'id'=>$ebook->form_field3)) !!}
      {!! Form::hidden('achternaam', '', array('id'=>'achternaam')) !!}
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
    <div class="clearfix"></div>
    <hr>
    <div class="form-group">
      <p class="pull-left"><span class="fa fa-lock"></span> Je gegevens zijn veilig</p>
      <div style="position: absolute; left: -5000px;">
        <input class="form-token" type="text" value="" tabindex="-1" name="{!! $ebook->form_token !!}">
      </div>
      {!! Form::submit('Aanmelden', array('class'=>'btn demo-button pull-right')) !!}
    </div>
  {!! Form::close() !!}
</div>
</div>