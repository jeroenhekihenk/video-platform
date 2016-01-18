{!! Form::open(array('id'=>'frm_register','class'=>'animated fadeIn', 'action'=>'Admin\AdminController@postRegister')) !!}
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
      {!! Form::password('password', array('class'=>'form-control', 'placeholder'=>'Wachtwoord..')) !!}
    </div>
  </div>
  <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
    <div class="col-md-12 ">
      {!! Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Wachtwoord bevestiging..')) !!}
    </div>
  </div>  
  <hr>
  <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
    <div class="col-md-12">
      {!! Form::text('role_id', '') !!}
      {!! Form::submit('Registreren', array('class'=>'btn btn-primary btn-cons pull-right')) !!}
    </div>
  </div>          
{!! Form::close() !!}