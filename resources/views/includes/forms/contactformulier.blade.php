<h3>Contact formulier</h3>
@if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
      </div>
      @endif
@if(Session::has('contactmessage'))
    <div class="alert alert-info">
      	{{ session('contactmessage') }}
  	</div>
@else
{!! Form::open(array('url'=>'contact', 'id'=>'contactformulier')) !!}

<div class="form-group">
	{!! Form::text('naam', null, ['class'=>'form-control', 'placeholder'=>'Naam']) !!}
</div>
<div class="form-group">
	{!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Emailadres']) !!}
</div>
<div class="form-group">
	{!! Form::textarea('bericht', null, ['class'=>'form-control', 'placeholder'=>'Uw bericht']) !!}
  {!! Form::hidden('anti-spam') !!}
</div>
{!! Form::submit('Verzenden', ['class'=>'btn nrml-inverse-button']) !!}
{!! Form::close() !!}
@endif