<div class="col-md-3">
	<div class="grid simple horizontal green">
		<div class="grid-title">
			<h3>Extra opties:</h3>
		</div>
		<div class="grid-body">
			@if(Request::is('jandje/trainingen/*/edit'))
			<div class="preview-afbeelding" {{ Request::is('jandje/trainingen/create') ? 'style=display:none' : '' }}>
				<h4>Preview training afbeelding</h4>
				<img src="{!! url($training->image) !!}" class="post-preview" alt="">
				<div class="bewerk-afbeelding">
					<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk afbeelding</a>
				</div>
			</div>
			@endif
			<div class="nieuw-afbeelding" {{ Request::is('jandje/trainingen/*/edit') ? 'style=display:none' : '' }}>
				<h4>Afbeelding van Training:</h4>
				{!! Form::file('image', array('style'=>'border:0 none;')) !!}
				<!-- <small>Min: 380(h) x 728(b)</small> -->
			</div>

			<!-- Training label -->
			<div>
			<hr>
				{!! Form::label('label', 'Label:') !!}
				{!! Form::select('label', ['livetraining'=>'livetraining','onlinetraining'=>'onlinetraining'], Input::old('label'), array('class'=>'form-control')) !!}
			</div>
			<!-- /Training label -->

			<!-- Training datum -->
			@if(Request::is('jandje/trainingen/create'))
			<div>
			<hr>
				{!! Form::label('training_datum', 'Training op datum:', array('class'=>'pull-left'))  !!} <small class="pull-right">(dd-mm-jjjj)</small>
				{!! Form::input('date', 'training_datum', Carbon\Carbon::now('Europe/Amsterdam')->format('Y-m-d'), array('class'=>'form-control')) !!}
			</div>
			@endif
			@if(Request::is('jandje/trainingen/*/edit'))
			<div>
			<hr>
				{!! Form::label('training_datum', 'Training op datum:', array('class'=>'pull-left'))  !!} <small class="pull-right">(jjjj-mm-dd)</small>
				{!! Form::input('date', 'training_datum', Input::old('training_datum'), array('class'=>'form-control')) !!}
			</div>
			@endif
			<!-- /Training datum -->

			{{-- <!-- Training tijd van -->
			
			<div>
			<hr>
				{!! Form::label('training_tijd_van', 'Training tijd van:', array('class'=>'pull-left'))  !!} <small class="pull-right">(U:m)</small>
				{!! Form::input('time', 'training_tijd_van', Carbon\Carbon::now('Europe/Amsterdam')->format('H:i'), array('class'=>'form-control')) !!}
			</div>
			
			<div>
			<hr>
				{!! Form::label('training_tijd_van', 'Training tijd van:', array('class'=>'pull-left'))  !!} <small class="pull-right">(U:m)</small>
				{!! Form::input('time', 'training_tijd_van', Input::old('training_tijd_van'), array('class'=>'form-control')) !!}
			</div>

			<!-- /Training tijd van --> --}}

			<!-- Training tijd tot -->
			
			{{-- <div>
			<hr>
				{!! Form::label('training_tijd_tot', 'Training tijd tot:', array('class'=>'pull-left'))  !!} <small class="pull-right">(U:m)</small>
				{!! Form::input('time', 'training_tijd_tot', Carbon\Carbon::now('Europe/Amsterdam')->format('H:i'), array('class'=>'form-control')) !!}
			</div>
			
			
			<div>
			<hr>
				{!! Form::label('training_tijd_tot', 'Training tijd tot:', array('class'=>'pull-left'))  !!} <small class="pull-right">(U:m)</small>
				{!! Form::input('time', 'training_tijd_van', Input::old('training_tijd_tot'), array('class'=>'form-control')) !!}
			</div> --}}
			
			<!-- /Training tijd tot -->
		</div>
	</div>
</div>
<div class="col-md-7">
	<div class="grid simple horizontal green">
		<div class="grid-title">
			<h3>Training informatie:</h3>
		</div>
		<div class="grid-body">
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12 ">
					{!! Form::label('titel', 'Titel:') !!}
					{!! Form::text('titel', Input::old('naam'), array('class'=>'form-control', 'placeholder'=>'Bijvoorbeeld "Facebook Seminar"')) !!}
				</div>
			</div>
		</div>
		<div class="grid-title">
			<h3>Mailchimp formfields</h3>
		</div>
		<div class="grid-body">
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-6 col-sm-6">
					{!! Form::label('form_field1', 'Form Field 1:') !!}
					{!! Form::text('form_field1', Input::old('form_field1'), array('class'=>'form-control', 'placeholder'=>'Bijvoorbeeld "MERGE0"')) !!}

					{!! Form::label('field1_placeholder', 'Placeholder voor Field 1') !!}
					{!! Form::text('field1_placeholder', Input::old('field1_placeholder'), array('class'=>'form-control', 'placeholder'=>'Bijvoorbeeld "Naam.."')) !!}
				</div>
				<div class="col-md-6 col-sm-6">
					{!! Form::label('form_field2', 'Form Field 2:') !!} <small>(Email veld)</small>
					{!! Form::text('form_field2', Input::old('form_field2'), array('class'=>'form-control', 'placeholder'=>'Bijvoorbeeld "MERGE1"')) !!}

					{!! Form::label('field2_placeholder', 'Placeholder voor Field 2') !!}
					{!! Form::text('field2_placeholder', Input::old('field2_placeholder'), array('class'=>'form-control', 'placeholder'=>'Bijvoorbeeld "Email.."')) !!}
				</div>
				<div class="clearfix"></div>
				<hr>
				<div class="col-md-6 col-sm-6">
					{!! Form::label('form_field3', 'Form Field 3:') !!} <small>(Optioneel)</small>
					{!! Form::text('form_field3', Input::old('form_field3'), array('class'=>'form-control', 'placeholder'=>'Bijvoorbeeld "MERGE2"')) !!}

					{!! Form::label('field3_placeholder', 'Placeholder voor Field 3') !!} <small>(Optioneel)</small>
					{!! Form::text('field3_placeholder', Input::old('field3_placeholder'), array('class'=>'form-control', 'placeholder'=>'Bijvoorbeeld "Bedrijfsnaam.."')) !!}
				</div>
				<div class="col-md-6 col-sm-6">
					{!! Form::label('form_field4', 'Form Field 4:') !!} <small>(Optioneel)</small>
					{!! Form::text('form_field4', Input::old('form_field4'), array('class'=>'form-control', 'placeholder'=>'Bijvoorbeeld "MERGE3"')) !!}

					{!! Form::label('field4_placeholder', 'Placeholder voor Field 4') !!} <small>(Optioneel)</small>
					{!! Form::text('field4_placeholder', Input::old('field4_placeholder'), array('class'=>'form-control', 'placeholder'=>'Bijvoorbeeld "Telefoonnummer.."')) !!}
				</div>
			</div>
			

			<hr>
			<div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="control-group col-md-6">
					{!! Form::label('downloads', 'Aantal downloads op het moment:') !!} <small>(Max. 6 cijfers)</small>
					{!! Form::text('downloads', Input::old('downloads'), array('class'=>'form-control')) !!}
				</div>
				<div class="control-group  col-md-6">
					<div class="checkbox checkbox check-success">
						{!! Form::submit('Maak Ebook', array('class'=>'btn btn-primary btn-cons pull-right')) !!}
					</div>
				</div>
			</div>

		</div>
	</div>
</div>