{!! Form::open(array('class'=>'animated fadeIn', 'action'=>'GratisDemoController@gratisDemo')) !!}
  <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
    <div class="col-md-6 col-sm-6">
      {!! Form::text('voornaam', '', array('class'=>'form-control', 'placeholder'=>'Voornaam..')) !!}
    </div>
    <div class="col-md-6 col-sm-6">
      {!! Form::text('achternaam', '', array('class'=>'form-control', 'placeholder'=>'Achternaam..')) !!}
    </div>
  </div>  
  <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
    <div class="col-md-12 ">
      {!! Form::email('email', '', array('class'=>'form-control', 'placeholder'=>'Emailadres..')) !!}
    </div>
  </div>
  <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
    <div class="col-md-12 ">
      {!! Form::password('wachtwoord', array('class'=>'form-control', 'placeholder'=>'Wachtwoord..')) !!}
    </div>
  </div>
  <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
    <div class="col-md-12 ">
      {!! Form::password('wachtwoord_confirmation', array('class'=>'form-control', 'placeholder'=>'Wachtwoord bevestiging..')) !!}
    </div>
  </div>  
  <hr>
  <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
    <div class="col-md-12">
      {!! Form::submit('Gratis demo aanvragen', array('class'=>'btn btn-primary btn-cons pull-right')) !!}
    </div>
  </div>          
{!! Form::close() !!}