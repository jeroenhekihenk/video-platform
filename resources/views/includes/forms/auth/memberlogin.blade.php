{!! Form::open(array('class'=>'animated fadeIn', 'id'=>'frm_login', 'action'=>'Member\MemberAuthController@postLogin')) !!}
@if(Session::has('message'))
<div class="col-md-12">
  <div class="alert alert-danger">{!! Session::get('message') !!}</div>
</div>
@endif
@if($errors->any())
<div class="col-md-12">
  <div class="alert alert-danger">
    <p>Er zijn fouten in het formulier opgetreden:</p>
    <ul>
      @foreach($errors->all() as $error)
      <li>{!! $error !!}</li>
      @endforeach
    </ul>
  </div>
</div>
@endif
<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
  <div class="col-md-6 col-sm-6 ">
    {!! Form::email('email', '', array('class'=>'form-control', 'placeholder'=>'Emailadres..')) !!}
  </div>
  <div class="col-md-6 col-sm-6">
    {!! Form::password('password', array('class'=>'form-control', 'placeholder'=>'Wachtwoord..')) !!}
  </div>
</div>
<div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
  <div class="control-group  col-md-12">
    <div class="checkbox checkbox check-success"> <a href="{!! url('/password/email') !!}">Wachtwoord vergeten?</a>&nbsp;&nbsp;
      {!! Form::checkbox('remember', '1', false, array('id'=>'checkbox1')) !!}
      {!! Form::label('checkbox1', 'Onthoud mij') !!}
      {!! Form::submit('Inloggen', array('class'=>'btn btn-primary btn-cons pull-right')) !!}
    </div>
  </div>
</div>
{!! Form::close() !!}