<div class="col-md-12">
	<div class="grid simple horizontal green">
		<div class="grid-title">
			<h3>Informatie</h3>
		</div>
		<div class="grid-body">
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12 ">
				
				</div>
			</div>
			<hr>
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-6 col-sm-6">
					{!! Form::label('klantnaam', 'Klantnaam:') !!}
					{!! Form::text('klantnaam', Input::old('klantnaam'), array('class'=>'form-control')) !!}
				</div>
				<div class="col-md-6 col-sm-6">
					{!! Form::label('bedrijf', 'Bedrijfsnaam:') !!}
					{!! Form::text('bedrijf', Input::old('bedrijf'), array('class'=>'form-control')) !!}
				</div>
			</div>
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12">
					{!! Form::label('link', 'Link naar klant:') !!}
					{!! Form::url('link', Input::old('link'), array('class'=>'form-control')) !!}
				</div>
			</div>
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12">
					{!! Form::label('content', 'Bericht') !!}
					{!! Form::textarea('content', Input::old('content'), array('class'=>'form-control')) !!}
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