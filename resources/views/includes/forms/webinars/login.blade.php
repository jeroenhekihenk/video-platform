<div id="belmijterugformulier">
  <div class="belmijterugformulier">
    <div class="titel">
      <h2 class="pull-left">Nog even wachten!</h2>
      <div id="close-form">
        <button type="button" class="close" style="font-size:22pt !important;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </button>
      </div>
    </div>
    <div class="clearfix"></div>
    <hr>
  
    {!! Form::open(array('class'=>'animated fadeIn', 'id'=>'webinar-aanmeld')) !!} 
    <div class="col-md-12 col-sm-12 form-group">
    <p>Vul hier het emailadres in dat je hebt gebruikt om aan te melden.</p>
      <div id="email-error" style="display:none;">
        <p class="alert alert-danger"></p>
      </div>
      {!! Form::email('email', '', array('class'=>'form-control', 'placeholder'=>'Emailadres..')) !!}
      {!! Form::hidden('ref', 'telaataangemeld') !!}
    </div>
    <div class="form-group">
      <p class="pull-left"><span class="fa fa-lock"></span> Je gegevens zijn veilig</p>
      {!! Form::submit('Aanmelden', array('class'=>'btn demo-button pull-right')) !!}
    </div>
  {!! Form::close() !!}
</div>
</div>