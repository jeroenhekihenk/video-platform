<style>
	span.u-color{
		background:#f35958;
		color:white;
	}
	span.id-color{
		background:#0090d9;
		color:white;
	}
</style>


<div class="col-md-3">
	<div class="grid simple horizontal green">
		<div class="grid-title">
			<h3>Extra opties:</h3>
		</div>
		<div class="grid-body">
			@if(Request::is('jandje/ebooks/*/edit'))
			<div class="preview-afbeelding" {{ Request::is('jandje/ebooks/create') ? 'style=display:none' : '' }}>
				<h4>Preview ebook afbeelding</h4>
				<img src="{!! url($ebook->image) !!}" class="post-preview" alt="">
				<div class="bewerk-afbeelding">
					<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk afbeelding</a>
				</div>
			</div>
			@endif
			<div class="nieuw-afbeelding" {{ Request::is('jandje/ebooks/*/edit') ? 'style=display:none' : '' }}>
				<h4>Afbeelding van Ebook:</h4>
				{!! Form::file('image', array('style'=>'border:0 none;')) !!}
				<small>Min: 380(h) x 728(b)</small>
			</div>
			<hr>
			@if(Request::is('jandje/ebooks/*/edit'))
			<div class="preview-afbeelding" {{ Request::is('jandje/ebooks/create') ? 'style=display:none' : '' }}>
				<h4>Link naar PDF</h4>
				<p class="well">{!! url($ebook->pdf) !!}</p>
				<div class="bewerk-pdf">
					<a class="bewerk-pdf"><span class="fa fa-file-text"></span> Bewerk pdf</a>
				</div>
			</div>
			@endif
			<div class="nieuw-pdf" {{ Request::is('jandje/ebooks/*/edit') ? 'style=display:none' : '' }}>
				<h4>PDF van Ebook:</h4>
				{!! Form::file('pdf', array('style'=>'border:0 none;')) !!}
			</div>
			<hr>
			<div class="well">
				<small>//facebook.us7.list-manage.com/subscribe/post?u=<span class="u-color">4385a7e4ded2873d14cf34514</span>&amp;id=<span class="id-color">421d31f82f</span></small>
			</div>
			<div class="form_link">
				<h4>URL naar actie formulier:</h4>
				{!! Form::text('form_link', Input::old('form_link'), array('class'=>'form-control', 'placeholder'=>'//digitusmarketing.us7.list-manage.com/subscribe/post-json?id=05d5ebe554&c=?')) !!}
				<small style="margin-top:15px;float:left;">
					<ol>
						<li>Verander 'post' in de URL naar: 'post-json'.</li>
						<li>u=4385a7e4ded2873d14cf34514&amp; weghalen.</li>
						<li>Aan het eind van de URL &c=? toevoegen.</li>
					</ol>
				</small>
				<div class="clearfix"></div>
				<div class="well">
					<small>
						BEFORE:<br/>
						//digitusmarketing.us7.list-manage.com/subscribe/post?u=4385a7e4ded2873d14cf34514&amp;id=05d5ebe554<br/>
						<hr>
						AFTER:<br/>
						//digitusmarketing.us7.list-manage.com/subscribe/post-json?id=05d5ebe554&c=?
					</small>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="grid simple horizontal red">
		<div class="grid-title">
			<h3>U van het formulier:</h3>
		</div>
		<div class="grid-body">
			<div class="form_u">
				{!! Form::text('form_u', Input::old('form_u'), array('class'=> 'form-control')) !!}
			</div>
		</div>
	</div>
	<div class="grid simple horizontal blue">
		<div class="grid-title">
			<h3>ID van het formulier</h3>
		</div>
		<div class="grid-body">
			<div class="form_id">
				{!! Form::text('form_id', Input::old('form_id'), array('class'=>'form-control')) !!}
			</div>
			<hr>
			<div class="form_token">
				<h4>Token van het formulier</h4>
				{!! Form::text('form_token', Input::old('form_token'), array('class'=>'form-control', 'placeholder'=>'b_4385a7e4ded2873d14cf34514_421d31f82f')) !!}
			</div>
		</div>
	</div>
</div>
<div class="col-md-7">
	<div class="grid simple horizontal green">
		<div class="grid-title">
			<h3>Ebook informatie:</h3>
		</div>
		<div class="grid-body">
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12 ">
					{!! Form::label('naam', 'Titel:') !!}
					{!! Form::text('naam', Input::old('naam'), array('class'=>'form-control', 'placeholder'=>'Bijvoorbeeld "Slimme Facebook Marketing voor Sportscholen"')) !!}
				</div>
			</div>
			<hr>
			<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				<div class="col-md-12 col-sm-12">
					{!! Form::label('slogan_titel', 'Slogan Titel:') !!}
					{!! Form::text('slogan_titel', Input::old('slogan_titel'), array('class'=> 'form-control', 'placeholder'=>'Bijvoorbeeld "Hoe krijg je meer leden in jouw sportschool via Facebook?"')) !!}
					{!! Form::label('slogan_tekst', 'Slogan Tekst:') !!}
					{!! Form::text('slogan_tekst', Input::old('slogan_tekst'), array('class'=>'form-control', 'placeholder'=>'Bijvoorbeeld "Ontdek het nu, en download direct het e-book gratis!"')) !!}
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