
<div class="col-md-3">
	<div class="grid simple horizontal green">
		<div class="grid-title">
			<h3>Extra opties:</h3>
		</div>
		<div class="grid-body">
			<div class="preview-afbeelding">
				<h4>Preview afbeelding</h4>
				<img src="{!! url($user->afbeelding) !!}" class="post-preview" alt="">
				<div class="bewerk-afbeelding">
					<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk afbeelding</a>
				</div>
			</div>
			<div class="nieuw-afbeelding" style="display:none">
				<h4>Voeg een afbeelding toe:</h4>
				{!! Form::file('afbeelding', array('style'=>'border:0 none;')) !!}
				<small>Max: 249(b) x 249(h)</small>
			</div>
			<hr>
			{!! Form::label('role_id', 'Selecteer rol') !!}
			{!! Form::select('role_id', $rollen, Input::old('role_id'), array('class'=>'form-control')) !!}
		</div>
	</div>
</div>
<div class="col-md-7">
	<div class="grid simple horizontal green">
		<div class="grid-title">
			<h3>{!! $user->voornaam !!} {!! $user->achternaam !!} bewerken</h3>
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
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12">
					{!! Form::label('over', 'Over') !!}
					{!! Form::textarea('over', Input::old('over'), array('class'=>'form-control')) !!}
				</div>
			</div>
			<hr>
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-3 col-sm-3">
					{!! Form::label('facebook', 'Facebook:') !!}
					{!! Form::text('facebook', Input::old('facebook'), array('class'=>'form-control')) !!}
				</div>
				<div class="col-md-3 col-sm-3">
					{!! Form::label('twitter', 'Twitter:') !!}
					{!! Form::text('twitter', Input::old('twitter'), array('class'=>'form-control')) !!}
				</div>
				<div class="col-md-3 col-sm-3">
					{!! Form::label('googleplus', 'GooglePlus:') !!}
					{!! Form::text('googleplus', Input::old('googleplus'), array('class'=>'form-control')) !!}
				</div>
				<div class="col-md-3 col-sm-3">
					{!! Form::label('linkedin', 'LinkedIn:') !!}
					{!! Form::text('linkedin', Input::old('linkedin'), array('class'=>'form-control')) !!}
				</div>
			</div>
			<hr>
			<div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="control-group  col-md-12">
					<div class="checkbox checkbox check-success">
						{!! Form::submit('Bewerken', array('class'=>'btn btn-primary btn-cons pull-right')) !!}
					</div>
				</div>
			</div>

		</div>
	</div>
</div>