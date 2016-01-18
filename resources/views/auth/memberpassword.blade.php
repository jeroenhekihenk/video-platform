@extends('layouts.backend')

@section('content')
<div class="container">
	<div class="row login-container animated fadeInUp">  
		<div class="col-md-7 col-md-offset-2 tiles white no-padding">
			<div class="p-t-30">
				<img src="{!! url('/images/digitus/DIGITUS_logo_def.png') !!}" alt="" class="center">
			</div>
			<div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10"> 
				<h2 class="normal">Wachtwoord vergeten?</h2>
			</div>
			@if (session('status'))
			<div class="p-t-30 p-l-40 p-r-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10"> 
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
			</div>
			@endif
			@if($errors->any())
			<div class="p-t-30 p-l-40 p-r-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10"> 
				<ul>
					@foreach($errors->all() as $error)
						<li style="list-style-type: none;">{!! $error !!}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="tiles grey p-t-20 p-b-20 text-black">

				<form class="animated fadeIn" role="form" method="POST" action="{{ url('/password/email') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
						<div class="col-md-12 col-sm-12">
							<label>Vul hier je e-mailadres in:</label>
							<input type="email" class="form-control" name="email" value="{{ old('email') }}">
						</div>
					</div>
					<hr>
					<div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
						<div class="control-group  col-md-12">
							<div class="checkbox checkbox check-success">
								{!! Form::submit('Verstuur', array('class'=>'btn btn-primary btn-cons pull-right')) !!}
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
