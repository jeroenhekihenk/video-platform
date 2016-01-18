

			<fieldset class="fieldset" id="sportschool">
				<h4>Logo:</h4>
				{!! Form::file('logo', array('style'=>'border:0 none;')) !!}
				<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
					<div class="col-md-12 col-sm-12 ">
						{!! Form::label('sportschoolnaam', 'Naam sportschool:') !!}
						{!! Form::text('sportschoolnaam', Input::old('sportschoolnaam'), array('class'=>'form-control')) !!}
					</div>
				</div>
				<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
					<div class="col-md-12 col-sm-12">
						{!! Form::label('waaromsportschool', 'Waarom zouden mensen jouw sportschool moeten kiezen?', array('class'=>'pull-left')) !!} <small class="pull-right">Max. 7 punten. Gebruik een nieuwe regel om de punten te scheiden.</small>
						{!! Form::textarea('waaromsportschool', Input::old('waaromsportschool'), array('class'=>'form-control', 'placeholder'=>'Max. 7 punten. Gebruik een nieuwe regel om de punten te scheiden.', 'rows'=>'5')) !!}
					</div>
				</div>
				<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
					<div class="col-md-12 col-sm-12">
						{!! Form::label('aanmeldemail', 'Naar welk email adres mogen de aanmeldingen toe gestuurd worden?') !!}
						{!! Form::email('aanmeldemail', Input::old('aanmeldemail'), array('class'=>'form-control', 'placeholder'=>'voorbeeld@adres.nl')) !!}
					</div>
				</div>
				<a name="next" class="next-fieldset volgende-afrekenen-stap-2 btn btn-success pull-right vlgndebutton" id="vlgndebutton"></a> 
			</fieldset>
			<fieldset id="welkom">
				<h4>Welkomstpagina</h4>
				<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
					<div class="col-md-12 col-sm-12">
						{!! Form::label('welkomstpagina', 'Tekst voor op Welkomstpagina') !!}
						{!! Form::textarea('welkomstpagina', Input::old('welkomstpagina'), array('class'=>'form-control')) !!}
					</div>
				</div>
				<h4>Foto's slider</h4>
				<h2><span class="label label-danger">Zorg er voor dat de afmetingen van de afbeeldingen <u>niet</u> groter zijn dan 1036(b) x 560(h)!</span></h2>
				<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
					<div class="col-md-6 col-sm-6" {{ Request::is('member/benodigdheden/*/edit') ? 'class=afbeelding-bewerken' : '' }}>
						@if(Request::is('member/benodigdheden/*/edit'))
						<div class="preview-afbeelding" {{ Request::is('member/benodigdheden/create') ? 'style=display:none' : '' }}>
							<h4>Foto 1</h4>
							<img src="{!! url($benodigd->foto1) !!}" class="post-preview" alt="">
							<div class="bewerk-afbeelding">
								<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk afbeelding</a>
							</div>
						</div>
						@endif
						<div class="nieuw-afbeelding" {{ Request::is('member/benodigdheden/*/edit') ? 'style=display:none' : '' }}>
							{!! Form::label('foto1', 'Foto 1:') !!}
							{!! Form::file('foto1', array('style'=>'border:0 none;')) !!}
							<small>Min: 740(b) x 400(h)</small>
						</div>
						<hr>
					</div>
					<div class="col-md-6 col-sm-6" {{ Request::is('member/benodigdheden/*/edit') ? 'class=afbeelding-bewerken' : '' }}>
						@if(Request::is('member/benodigdheden/*/edit'))
						<div class="preview-afbeelding" {{ Request::is('member/benodigdheden/create') ? 'style=display:none' : '' }}>
							<h4>Foto 2</h4>
							<img src="{!! url($benodigd->foto2) !!}" class="post-preview" alt="">
							<div class="bewerk-afbeelding">
								<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk afbeelding</a>
							</div>
						</div>
						@endif
						<div class="nieuw-afbeelding" {{ Request::is('member/benodigdheden/*/edit') ? 'style=display:none' : '' }}>
							{!! Form::label('foto2', 'Foto 2:') !!}
							{!! Form::file('foto2', array('style'=>'border:0 none;')) !!}
							<small>Min: 740(b) x 400(h)</small>
						</div>
						<hr>
					</div>
					<div class="col-md-6 col-sm-6" {{ Request::is('member/benodigdheden/*/edit') ? 'class=afbeelding-bewerken' : '' }}>
						@if(Request::is('member/benodigdheden/*/edit'))
						<div class="preview-afbeelding" {{ Request::is('member/benodigdheden/create') ? 'style=display:none' : '' }}>
							<h4>Foto 3</h4>
							<img src="{!! url($benodigd->foto3) !!}" class="post-preview" alt="">
							<div class="bewerk-afbeelding">
								<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk afbeelding</a>
							</div>
						</div>
						@endif
						<div class="nieuw-afbeelding" {{ Request::is('member/benodigdheden/*/edit') ? 'style=display:none' : '' }}>
							{!! Form::label('foto3', 'Foto 3:') !!}
							{!! Form::file('foto3', array('style'=>'border:0 none;')) !!}
							<small>Min: 740(b) x 400(h)</small>
						</div>
						<hr>
					</div>
					<div class="col-md-6 col-sm-6" {{ Request::is('member/benodigdheden/*/edit') ? 'class=afbeelding-bewerken' : '' }}>
						@if(Request::is('member/benodigdheden/*/edit'))
						<div class="preview-afbeelding" {{ Request::is('member/benodigdheden/create') ? 'style=display:none' : '' }}>
							<h4>Foto 4</h4>
							<img src="{!! url($benodigd->foto4) !!}" class="post-preview" alt="">
							<div class="bewerk-afbeelding">
								<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk afbeelding</a>
							</div>
						</div>
						@endif
						<div class="nieuw-afbeelding" {{ Request::is('member/benodigdheden/*/edit') ? 'style=display:none' : '' }}>
							{!! Form::label('foto4', 'Foto 4:') !!}
							{!! Form::file('foto4', array('style'=>'border:0 none;')) !!}
							<small>Min: 740(b) x 400(h)</small>
						</div>
						<hr>
					</div>
					<div class="col-md-6 col-sm-6" {{ Request::is('member/benodigdheden/*/edit') ? 'class=afbeelding-bewerken' : '' }}>
						@if(Request::is('member/benodigdheden/*/edit'))
						<div class="preview-afbeelding" {{ Request::is('member/benodigdheden/create') ? 'style=display:none' : '' }}>
							<h4>Foto 5</h4>
							<img src="{!! url($benodigd->foto5) !!}" class="post-preview" alt="">
							<div class="bewerk-afbeelding">
								<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk afbeelding</a>
							</div>
						</div>
						@endif
						<div class="nieuw-afbeelding" {{ Request::is('member/benodigdheden/*/edit') ? 'style=display:none' : '' }}>
							{!! Form::label('foto5', 'Foto 5:') !!}
							{!! Form::file('foto5', array('style'=>'border:0 none;')) !!}
							<small>Min: 740(b) x 400(h)</small>
						</div>
						<hr>
					</div>
				</div>
				<a name="previous" class="previous-fieldset vorige-afrekenen-stap-1 btn btn-warning pull-left vrgebutton" id="vrgebutton"></a>
				<a name="next" class="next-fieldset volgende-afrekenen-stap-3 btn btn-success pull-right vlgndebutton" id="vlgndebutton"></a>
			</fieldset>
			<fieldset id="bedank">
				<h4>Bedankpagina</h4>
				<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
					<div class="col-md-12 col-sm-12">
						{!! Form::label('bedankpagina', 'Tekst voor op Bedankpagina') !!}
						{!! Form::textarea('bedankpagina', Input::old('bedankpagina'), array('class'=>'form-control')) !!}
					</div>
				</div>
				<h4>Personeels foto</h4>
				<div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
					<div class="col-md-12 col-sm-12">
						@if(Request::is('member/benodigdheden/*/edit'))
						<div class="preview-afbeelding" {{ Request::is('member/benodigdheden/create') ? 'style=display:none' : '' }}>
							<h4>Personeelsfoto:</h4>
							<img src="{!! url($benodigd->teamfoto) !!}" class="post-preview" alt="">
							<div class="bewerk-afbeelding">
								<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk afbeelding</a>
							</div>
						</div>
						@endif
						<div class="nieuw-afbeelding" {{ Request::is('member/benodigdheden/*/edit') ? 'style=display:none' : '' }}>
							{!! Form::label('teamfoto', 'Personeelsfoto:') !!}
							{!! Form::file('teamfoto', array('style'=>'border:0 none;')) !!}
							<small>Min: 810(b)</small>
						</div>
						<hr>
					</div>
				</div>
				<a name="previous" class="previous-fieldset vorige-afrekenen-stap-2 btn btn-warning pull-left vrgebutton" id="vrgebutton"></a>
				<a name="next" class="next-fieldset volgende-afrekenen-stap-2 btn btn-success pull-right vlgndebutton" id="vlgndebutton"></a> 
			</fieldset>
			<fieldset id="bevestigen">
				<h4>Recensies <small>(optioneel)</small></h4>
				<div class="col-md-6 col-sm-6">
					{!! Form::label('recensie1_foto', '1e recensie') !!}  
					{!! Form::file('recensie1_foto',  array('style'=>'border:0 none;')) !!}
					{!! Form::label('recensie1_tekst', 'Recensie tekst') !!}
					{!! Form::textarea('recensie1_tekst', Input::old('recensie1_tekst'), array('class'=>'form-control', 'rows'=>'3')) !!}
					{!! Form::label('recensie1_naam', 'Naam:') !!}
					{!! Form::text('recensie1_naam', Input::old('recensie1_naam'), array('class'=>'form-control')) !!}
				</div>
				<div class="col-md-6 col-sm-6">
					{!! Form::label('recensie2_foto', '2e recensie') !!}  
					{!! Form::file('recensie2_foto',  array('style'=>'border:0 none;')) !!}
					{!! Form::label('recensie2_tekst', 'Recensie tekst') !!}
					{!! Form::textarea('recensie2_tekst', Input::old('recensie2_tekst'), array('class'=>'form-control', 'rows'=>'3')) !!}
					{!! Form::label('recensie2_naam', 'Naam:') !!}
					{!! Form::text('recensie2_naam', Input::old('recensie2_naam'), array('class'=>'form-control')) !!}
				</div>
				<div class="col-md-6 col-sm-6">
					{!! Form::label('recensie3_foto', '3e recensie') !!}  
					{!! Form::file('recensie3_foto',  array('style'=>'border:0 none;')) !!}
					{!! Form::label('recensie3_tekst', 'Recensie tekst') !!}
					{!! Form::textarea('recensie3_tekst', Input::old('recensie3_tekst'), array('class'=>'form-control', 'rows'=>'3')) !!}
					{!! Form::label('recensie3_naam', 'Naam:') !!}
					{!! Form::text('recensie3_naam', Input::old('recensie3_naam'), array('class'=>'form-control')) !!}
				</div>
				<div class="col-md-6 col-sm-6">
					{!! Form::label('recensie4_foto', '4e recensie') !!}  
					{!! Form::file('recensie4_foto',  array('style'=>'border:0 none;')) !!}
					{!! Form::label('recensie4_tekst', 'Recensie tekst') !!}
					{!! Form::textarea('recensie4_tekst', Input::old('recensie4_tekst'), array('class'=>'form-control', 'rows'=>'3')) !!}
					{!! Form::label('recensie4_naam', 'Naam:') !!}
					{!! Form::text('recensie4_naam', Input::old('recensie4_naam'), array('class'=>'form-control')) !!}
				</div>
				<div class="col-md-6 col-sm-6">
					{!! Form::label('recensie5_foto', '5e recensie') !!}  
					{!! Form::file('recensie5_foto',  array('style'=>'border:0 none;')) !!}
					{!! Form::label('recensie5_tekst', 'Recensie tekst') !!}
					{!! Form::textarea('recensie5_tekst', Input::old('recensie5_tekst'), array('class'=>'form-control', 'rows'=>'3')) !!}
					{!! Form::label('recensie5_naam', 'Naam:') !!}
					{!! Form::text('recensie5_naam', Input::old('recensie5_naam'), array('class'=>'form-control')) !!}
				</div>
				<div class="col-md-6 col-sm-6">
					{!! Form::label('recensie6_foto', '6e recensie') !!}  
					{!! Form::file('recensie6_foto',  array('style'=>'border:0 none;')) !!}
					{!! Form::label('recensie6_tekst', 'Recensie tekst') !!}
					{!! Form::textarea('recensie6_tekst', Input::old('recensie6_tekst'), array('class'=>'form-control', 'rows'=>'3')) !!}
					{!! Form::label('recensie6_naam', 'Naam:') !!}
					{!! Form::text('recensie6_naam', Input::old('recensie6_naam'), array('class'=>'form-control')) !!}
				</div>


				<a name="previous" class="previous-fieldset vorige-afrekenen-stap-2 btn btn-warning pull-left vrgebutton" id="vrgebutton"></a>
				{!! Form::hidden('user_id', \Auth::user()->id) !!}
				{!! Form::submit('Verstuur', array('class'=>'pull-right btn btn-primary')) !!}
			</fieldset>