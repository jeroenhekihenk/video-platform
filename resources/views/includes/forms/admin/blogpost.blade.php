
<div class="col-md-3">
	<div class="grid simple horizontal green">
		<div class="grid-title">
			<h3>Extra opties:</h3>
		</div>
		<div class="grid-body">
			@if(Request::is('jandje/blog/*/edit'))
			<div class="preview-afbeelding" {{ Request::is('jandje/blog/create') ? 'style=display:none' : '' }}>
				<h4>Preview afbeelding</h4>
				<img src="{!! url($post->uitgelichte_afbeelding) !!}" class="post-preview" alt="">
				<div class="bewerk-afbeelding">
					<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk afbeelding</a>
				</div>
			</div>
			@endif
			<div class="nieuw-afbeelding" {{ Request::is('jandje/blog/*/edit') ? 'style=display:none' : '' }}>
				<h4>Voeg een afbeelding toe:</h4>
				{!! Form::file('uitgelichte_afbeelding', array('style'=>'border:0 none;')) !!}
				<small>Min: 380(h) x 728(b)</small>
			</div>

			@if(Request::is('jandje/blog/create'))
			<div>
			<hr>
				{!! Form::label('published_at', 'Publiceren op:', array('class'=>'pull-left'))  !!} <small class="pull-right">(dd-mm-jjjj)</small>
				{!! Form::input('date', 'published_at', Carbon\Carbon::now('Europe/Amsterdam')->format('Y-m-d'), array('class'=>'form-control')) !!}
			</div>
			@endif
			@if(Request::is('jandje/blog/*/edit'))
			<div>
			<hr>
				{!! Form::label('published_at', 'Publiceren op:', array('class'=>'pull-left'))  !!} <small class="pull-right">(jjjj-mm-dd)</small>
				{!! Form::input('date', 'published_at', Input::old('published_at'), array('class'=>'form-control')) !!}
			</div>
			@endif
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
	<div class="grid simple horizontal green">
		<div class="grid-title">
			<h3>Schrijf blogpost</h3>
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
						{!! Form::hidden('user_id', \Auth::user()->id) !!}
						{!! Form::submit('Maak blogpost', array('class'=>'btn btn-primary btn-cons pull-right')) !!}
					</div>
				</div>
			</div>

		</div>
	</div>
</div>