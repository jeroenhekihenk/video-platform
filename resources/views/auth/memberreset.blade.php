@extends('layouts.backend')

@section('content')
  <div class="container">
    <div class="row login-container animated fadeInUp">  
      <div class="col-md-7 col-md-offset-2 tiles white no-padding">
        <div class="p-t-30">
          <img src="{!! url('/images/digitus/DIGITUS_logo_def.png') !!}" alt="" class="center">
        </div>
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10"> 
          <h2 class="normal">Nieuwe wachtwoord</h2>
        </div>
         @if($errors->any())
          @foreach($errors->all() as $error)
            {!! $error !!}
          @endforeach
        @endif
        <div class="tiles grey p-t-20 p-b-20 text-black">

			<form class="animated fadeIn" role="form" method="POST" action="{{ url('/password/reset') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="token" value="{{ $token }}">

				<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
					<div class="col-md-12 col-sm-12">
						<label>Emailadres</label>
						<input type="email" class="form-control" name="email" value="{{ old('email') }}">
					</div>
				</div>

				<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
					<div class="col-md-12 col-sm-12">
						<label>Nieuw wachtwoord</label>
						<input type="password" class="form-control" name="password">
					</div>
				</div>

				<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
					<div class="col-md-12 col-sm-12">
						<label>Bevestig nieuw wachtwoord</label>
						<input type="password" class="form-control" name="password_confirmation">
					</div>
				</div>
				<hr>
				<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
					<div class="col-md-12 col-sm-12">
						{!! Form::submit('Pas wachtwoord aan', array('class'=>'btn btn-primary btn-cons pull-right')) !!}
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
