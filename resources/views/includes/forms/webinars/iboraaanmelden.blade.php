{!! Form::open(array('class'=>'animated fadeIn', 'id'=>'ibora-login', 'action'=>'Webinar\WebinarController@postWebinar')) !!}
  <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
    <div class="col-md-12 col-sm-12 ">
      {!! Form::email('email', '', array('class'=>'form-control', 'placeholder'=>'Emailadres..','id'=>'email')) !!}
    </div>
  </div>
  <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
    <div class="control-group  col-md-12">
      <div class="checkbox checkbox check-success">
        {!! Form::submit('Aanmelden', array('class'=>'btn btn-primary btn-cons pull-right')) !!}
      </div>
    </div>
  </div>
{!! Form::close() !!}