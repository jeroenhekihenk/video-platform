<div class="col-md-6 col-md-offset-3">
	<div class="grid simple horizontal green">
		<div class="grid-title">
			<h3>Informatie</h3>
		</div>
		<div class="grid-body">
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12">
					{!! Form::label('naam', 'Naam hoofdstuk:') !!}
					{!! Form::text('naam', Input::old('naam'), array('class'=>'form-control')) !!}
				</div>
			</div>
			<div class="row form-row m-l-20 m-r-20 xs-m-r-10">
				<div class="col-md-12 col-sm-12">
					{!! Form::label('cursus_id', 'Koppel aan cursus:') !!}
					{!! Form::select('cursus_id', $cursussen, Input::old('cursus_id'), array('class'=>'form-control')) !!}
				</div>
			</div>
			<hr>
			<div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="control-group  col-md-12">
					<div class="checkbox checkbox check-success">
						{!! Form::submit($submitButtonText, array('class'=>'btn btn-primary btn-cons pull-right')) !!}
					</div>
				</div>
			</div>

		</div>
	</div>
</div>