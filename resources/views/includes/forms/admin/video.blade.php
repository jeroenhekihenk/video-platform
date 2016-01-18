
<div class="col-md-3">
	<div class="grid simple horizontal red">
		<div class="grid-title">
			<h3>Extra opties:</h3>
		</div>
		<div class="grid-body">
			{!! Form::label('thumbnail', 'Thumbnail voor de niet-betaler') !!} <small>Min: 674px x 455px</small>
			{!! Form::file('thumbnail', array('style'=>'border:0 none;')) !!}
			{{-- <hr>
			{!! Form::label('cursus_id', 'Selecteer cursus') !!}
			{!! Form::select('cursus_id', $cursussen, Input::old('cursus_id'), array('class'=>'form-control')) !!} --}}
			<hr>
			{!! Form::label('plan_id', 'Selecteer plan') !!}
			{!! Form::select('plan_id', $plannen, Input::old('plan_id'), array('class'=>'form-control')) !!}
			<hr>
			{!! Form::label('hoofdstuk_id', 'Koppel aan hoofdstuk') !!}
			<!-- optgroup cursus met optie hoofdstuk -->
			<select name="hoofdstuk_id" id="hoofdstuk_id" class="form-control">
			@foreach($cursussen as $cursus)
				<optgroup label="{!! $cursus->naam !!}">
				@foreach($cursus->hoofdstukken as $hoofdstuk)
					<option value="{!! $hoofdstuk->id !!}">{!! $hoofdstuk->naam !!}</option>
				@endforeach
				</optgroup>
			@endforeach
			</select>
			{{-- {!! Form::select('hoofdstuk_id', $hoofdstukken, Input::old('hoofdstuk_id'), array('class'=> 'form-control')) !!} --}}
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
				<div class="col-md-12 col-sm-12">
					{!! Form::label('titel', 'Titel:') !!}
					{!! Form::text('titel', Input::old('titel'), array('class'=>'form-control')) !!}
				</div>
			</div>
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12">
					{!! Form::label('link', 'Iframe van video:') !!}
					{!! Form::text('link', Input::old('link'), array('class'=>'form-control')) !!}
				</div>
			</div>
		</div>
		<div class="grid-title">
			<h3>Tools</h3>
		</div>
		<div class="grid-body">
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-6 col-sm-6">
					{!! Form::label('tool1_tekst', 'Tool 1 Tekst') !!}
					{!! Form::text('tool1_tekst', Input::old('tool1_tekst'), array('class'=>'form-control')) !!}
					{!! Form::label('tool1_link', 'Link naar Tool 1') !!}
					{!! Form::text('tool1_link', Input::old('tool1_link'), array('class'=>'form-control')) !!}
				</div>
				<div class="col-md-6 col-sm-6">
					{!! Form::label('tool2_tekst', 'Tool 2 Tekst') !!}
					{!! Form::text('tool2_tekst', Input::old('tool2_tekst'), array('class'=>'form-control')) !!}
					{!! Form::label('tool2_link', 'Link naar Tool 2') !!}
					{!! Form::text('tool2_link', Input::old('tool2_link'), array('class'=>'form-control')) !!}
				</div>
				<hr>
				<div class="col-md-6 col-sm-6">
					{!! Form::label('tool3_tekst', 'Tool 3 Tekst') !!}
					{!! Form::text('tool3_tekst', Input::old('tool3_tekst'), array('class'=>'form-control')) !!}
					{!! Form::label('tool3_link', 'Link naar Tool 3') !!}
					{!! Form::text('tool3_link', Input::old('tool3_link'), array('class'=>'form-control')) !!}
				</div>
				<div class="col-md-6 col-sm-6">
					{!! Form::label('tool4_tekst', 'Tool 4 Tekst') !!}
					{!! Form::text('tool4_tekst', Input::old('tool4_tekst'), array('class'=>'form-control')) !!}
					{!! Form::label('tool4_link', 'Link naar Tool 4') !!}
					{!! Form::text('tool4_link', Input::old('tool4_link'), array('class'=>'form-control')) !!}
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