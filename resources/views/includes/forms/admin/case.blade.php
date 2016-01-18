
<div class="col-md-3">
	<div class="grid simple horizontal grey">
		<div class="grid-title">
			<h3>Extra opties:</h3>
		</div>
		<div class="grid-body">
			@if(Request::is('jandje/cases/*/edit'))
			<div class="preview-afbeelding" {{ Request::is('jandje/cases/create') ? 'style=display:none' : '' }}>
				<h4>Preview afbeelding</h4>
				<img src="{!! url($case->uitgelichte_afbeelding) !!}" class="post-preview" alt="">
				{!! Form::hidden('uitgelichte_afbeelding', $case->uitgelichte_afbeelding) !!}
				<div class="bewerk-afbeelding">
					<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk afbeelding</a>
				</div>
			</div>
			@endif
			<div class="nieuw-afbeelding" {{ Request::is('jandje/cases/*/edit') ? 'style=display:none' : '' }}>
				<h4>Voeg een afbeelding toe:</h4>
				{!! Form::file('uitgelichte_afbeelding', array('style'=>'border:0 none;')) !!}
				<small>Max: 249(b) x 249(h)</small>
			</div>
			<hr>
			@if(Request::is('jandje/cases/*/edit'))
			<div class="preview-logo-afbeelding" {{ Request::is('jandje/cases/create') ? 'style=display:none' : '' }}>
				<h4>Preview logo</h4>
				<img src="{!! url($case->logo) !!}" class="profile-pic" alt="">
				{!! Form::hidden('logo', $case->logo) !!}
				<div class="bewerk-afbeelding">
					<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk logo</a>
				</div>		
				<div class="clearfix"></div>		
			</div>
			@endif
			<div class="nieuw-logo" {{ Request::is('jandje/cases/*/edit') ? 'style=display:none' : '' }}>
				<h4>Voeg een logo toe:</h4>
				{!! Form::file('logo', array('style'=>'border:0 none;')) !!}
				<small>Min: 200(h) x 200(b)</small>
			</div>
			<hr>
			{!! Form::label('dienst_id', 'Selecteer dienst:') !!}
			{!! Form::select('dienst_id', $diensten, Input::old('dienst_id'), array('class'=>'form-control')) !!}
		</div>
	</div>
	<div class="grid simple horizontal red">
		@if(isset($categorieen))
		<div class="grid-title">
			<h4>Bestaande categorieen</h4>
		</div>
		<div class="grid-body">
			<div class="categorieen">
			@foreach($categorieen as $categorie)
				<span class="tag label label-success" data-id="{!! $categorie->id !!}">{!! $categorie->naam !!}</span>
			@endforeach
			</div>
			<hr>
			@endif
			<div class="clearfix"></div>
			<div>
				{!! Form::label('categorie_id', 'Gebruik categorie') !!}
				{!! Form::text('categorie_id', Input::old('categorie_id'), array('class'=>'form-control')) !!}
			</div>
		</div>
	</div>
</div>
<div class="col-md-7">
	<div class="grid simple horizontal grey">
		<div class="grid-title">
			<h3>Informatie</h3>
		</div>
		<div class="grid-body">
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12 ">
					{!! Form::label('klant', 'Klantnaam:') !!}
					{!! Form::text('klant', Input::old('klant'), array('class'=>'form-control')) !!}
				</div>
			</div>
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-6 col-sm-6 ">
					{!! Form::label('link_klant', 'URL naar klant:') !!}
					{!! Form::url('link_klant', Input::old('link_klant'), array('class'=>'form-control')) !!}
				</div>
				<div class="col-md-6 col-sm-6 ">
					{!! Form::label('link_project', 'URL naar project:') !!}
					{!! Form::url('link_project', Input::old('link_project'), array('class'=>'form-control')) !!}
				</div>
			</div>
			<hr>
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
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12">
					{!! Form::label('excerpt', 'Excerpt:', array('class'=>'pull-left')) !!} <small class="pull-right">Max: 255 characters</small>
					{!! Form::textarea('excerpt', Input::old('excerpt'), array('class'=>'form-control', 'rows'=>'3')) !!}
				</div>
			</div>
			

			<hr>
			<div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="control-group  col-md-12">
					<div class="checkbox checkbox check-success">
						{!! Form::hidden('user_id', \Auth::user()->id) !!}
						{!! Form::submit($submitButtonText, array('class'=>'btn btn-primary btn-cons pull-right')) !!}
					</div>
				</div>
			</div>

		</div>
	</div>
</div>