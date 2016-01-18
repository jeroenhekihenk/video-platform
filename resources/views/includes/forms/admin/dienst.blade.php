
<div class="col-md-2">
	<div class="grid simple horizontal yellow">
		<div class="grid-title">
			<h3>Extra opties:</h3>
		</div>
		<div class="grid-body">
			<div class="row form-row">
				{!! Form::label('icon', 'Icon:') !!}
				{!! Form::text('icon', Input::old('icon'), array('class'=>'form-control')) !!}
				<small>Kijk op:<br/><a href="{!! action('Admin\AdminController@icons') !!}" target="_blank">de icons pagina</a></small>
			</div>
			<hr>
			<div class="row form-row">
				{!! Form::label('label', 'Label:') !!}
				{!! Form::select('label', ['training'=>'training', 'dienst'=>'dienst', 'overig'=>'overig'], Input::old('label'),array('class'=>'form-control')) !!}
			</div>
		</div>
	</div>
</div>
<div class="col-md-10">
	<div class="grid simple horizontal yellow">
		<div class="grid-title">
			<h3>Informatie</h3>
		</div>
		<div class="grid-body">
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12 ">
					{!! Form::label('titel', 'Titel:') !!}
					{!! Form::text('titel', Input::old('titel'), array('class'=>'form-control')) !!}
				</div>
			</div>
			<hr>
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12">
					{!! Form::label('content', 'Content:') !!}
					{!! Form::textarea('content', Input::old('content'), array('class'=>'form-control', 'id'=>'text-editor')) !!}
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