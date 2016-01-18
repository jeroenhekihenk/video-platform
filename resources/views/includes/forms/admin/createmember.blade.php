
<div class="col-md-3">
	<div class="grid simple horizontal red">
		<div class="grid-title">
			<h3>Extra opties:</h3>
		</div>
		<div class="grid-body">
			@if(Request::is('jandje/member/*/edit'))
			<div class="preview-afbeelding" {{ Request::is('jandje/users/create') ? 'style=display:none' : '' }}>
				<h4>Preview afbeelding</h4>
				<img src="{!! url($member->afbeelding) !!}" class="post-preview" alt="">
				<div class="bewerk-afbeelding">
					<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk afbeelding</a>
				</div>
			</div>
			<div class="nieuw-afbeelding" {{ Request::is('jandje/member/*/edit') ? 'style=display:none' : '' }}>
				<h4>Voeg een afbeelding toe:</h4>
				{!! Form::file('afbeelding', array('style'=>'border:0 none;')) !!}
				<small>Max: 249(b) x 249(h)</small>
			</div>
			<hr>
			@endif
			{!! Form::label('plan_id', 'Selecteer plan') !!}
			{!! Form::select('plan_id', $plannen, Input::old('plan_id'), array('class'=>'form-control')) !!}
			<hr>
			{!! Form::label('cursus', 'Koppel aan cursus:') !!}
			{!! Form::select('cursus[]', $cursussen, Input::old('cursus[]'), array('class'=> 'form-control', 'multiple')) !!}
			<hr>
			@if(Request::is('jandje/member/*/edit'))
			{!! Form::label('loskoppel', 'Cursus loskoppellen:') !!}
			{!! Form::select('loskoppel[]', $cursussen, Input::old('loskoppel[]'), array('class'=>'form-control', 'multiple')) !!}
			<hr>
			@endif
			{!! Form::label('tab_app', 'Tab App status:') !!}
			{!! Form::select('tab_app', ['Bezig'=>'Bezig', 'Offline'=>'Offline', 'Geen'=>'Geen', 'Online'=>'Online'], '', array('class'=>'form-control')) !!}
			<hr>
			{!! Form::label('tab_app_link', 'Tab App Link:') !!}
			{!! Form::text('tab_app_link', Input::old('tab_app_link'), array('class'=>'form-control')) !!}

		</div>
	</div>
</div>
<div class="col-md-7">
	<div class="grid simple horizontal red">
		<div class="grid-title">
			<h3>Informatie</h3>
		</div>
		<div class="grid-body">
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-6 col-sm-6">
					{!! Form::label('voornaam', 'Voornaam:') !!}
					{!! Form::text('voornaam', Input::old('voornaam'), array('class'=>'form-control')) !!}
				</div>
				<div class="col-md-6 col-sm-6">
					{!! Form::label('achternaam', 'Achternaam:') !!}
					{!! Form::text('achternaam', Input::old('achternaam'), array('class'=>'form-control')) !!}
				</div>
			</div>
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12">
					{!! Form::label('email', 'Emailadres:') !!}
					{!! Form::email('email', Input::old('email'), array('class'=>'form-control')) !!}
				</div>
			</div>
			<hr>
			<div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="control-group  col-md-12">
					<div class="checkbox checkbox check-success">
						{!! Form::submit('Maak Member', array('class'=>'btn btn-primary btn-cons pull-right')) !!}
					</div>
				</div>
			</div>

		</div>
	</div>
</div>