<div class="col-md-12">
	<div class="grid simple horizontal green">
		<div class="grid-title">
			<h3>Schrijf blogpost</h3>
		</div>
		<div class="grid-body">
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12 ">
				@if(Request::is('jandje/media/create'))
					<h4>Voeg een afbeelding toe:</h4>
					{!! Form::file('url', array('style'=>'border:0 none;')) !!}
				@else
					<h4>Preview afbeelding</h4>
					<img src="{!! url($image->url) !!}" class="post-preview" alt="">
					{!! Form::hidden('url', $image->url) !!}
				@endif
				</div>
			</div>
			<hr>
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12">
					{!! Form::label('titel', 'Titel:') !!}
					{!! Form::text('titel', Input::old('titel'), array('class'=>'form-control')) !!}
				</div>
			</div>
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12">
					{!! Form::label('alt', 'Alternatieve titel:') !!}
					{!! Form::text('alt', Input::old('alt'), array('class'=>'form-control')) !!}
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