<div class="col-md-12">
	<div class="grid simple horizontal green">
		<div class="grid-title">
			<h3>Informatie</h3>
		</div>
		<div class="grid-body">
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12 ">
					@if(Request::is('jandje/cursus/*/edit'))
					<div class="preview-afbeelding" {{ Request::is('jandje/users/create') ? 'style=display:none' : '' }}>
						<h4>Preview afbeelding</h4>
						<img src="{!! url($cursus->afbeelding) !!}" class="post-preview" alt="">
						<div class="bewerk-afbeelding">
							<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk afbeelding</a>
						</div>
					</div>
					@endif
					<div class="nieuw-afbeelding" {{ Request::is('jandje/cursus/*/edit') ? 'style=display:none' : '' }}>
						<h4>Voeg een afbeelding toe:</h4>
						{!! Form::file('afbeelding', array('style'=>'border:0 none;')) !!}
						<small>Max: 249(b) x 249(h)</small>
					</div>
				</div>
			</div>
			<hr>
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12">
					{!! Form::label('naam', 'Titel:') !!}
					{!! Form::text('naam', Input::old('naam'), array('class'=>'form-control')) !!}
				</div>
			</div>
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12">
					{!! Form::label('content', 'Content') !!}
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