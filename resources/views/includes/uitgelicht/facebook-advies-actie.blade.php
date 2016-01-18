<div id="uitgelicht">
	<div class="container">
		<div class="col-md-12 ebook-download-holder">
			{{-- <div class="col-md-3">
				<img src="../images/site/pars-wijst.png" alt="Parsifal actie hoofd" class="ebook-uitgelicht">
			</div>
			<div class="col-md-9 counter-blok">
				<div class="titel-blok">
					<h3>Een gratis Facebook advies gesprek aanvragen!</h3>
				</div>
				<div class="content">
					<p>Wil jij graag meer over Facebook te weten komen? Heb jij vragen over Facebook die je nergens kunt stellen? Facebook expert Parsifal komt bij je langs en gaat met je rond de tafel zitten. </p>
				</div>
			</div> --}}
			{{-- <style>
			.advies {
			    background: white none repeat scroll 0 0;
			    border: 1px solid #0e71b8;
			    border-radius: 150px / 75px 90px;
			    max-width: 300px;
			    padding: 40px 30px;
			    text-align: center;
			}
			.advies > h4 {
			    margin: 0 !important;
			}
			</style> --}}
			<div class="col-md-12">
				<div class="col-md-5">
					<div class="col-md-12">
						<img src="../images/site/vrijblijvend-advies.png" alt="">
					</div>
					<div class="clearfix"></div>
					<p>&nbsp;</p>
				</div>
				
				<div class="col-md-7" style="padding-top:50px">
					@if(Session::has('message'))
					    <div class="alert alert-info">
					      	{{ session('message') }}
					  	</div>
					@else
					{!! Form::open(array('id'=>'facebook-advies-uitgelicht', 'url'=>'facebook-advies')) !!}
					<?php
					    $encrypter = app('Illuminate\Encryption\Encrypter');
					    $encrypted_token = $encrypter->encrypt(csrf_token());
					?>
					<input type="hidden" id="token-advies-uitgelicht" value="{!! $encrypted_token !!}">
					{!! Form::hidden('anti-spam') !!}
					<div class="form-group col-md-6">
						{!! Form::label('naam','Naam:') !!}
						{!! Form::text('naam', Input::old('naam'), array('class'=>'form-control')) !!}
						<br>
						{!! Form::label('bedrijfsnaam', 'Bedrijfsnaam') !!}
						{!! Form::text('bedrijfsnaam', Input::old('bedrijfsnaam'), array('class'=>'form-control')) !!}
					</div>
					<div class="form-group col-md-6">
						{!! Form::label('email', 'Emailadres:') !!}
						{!! Form::email('email', Input::old('email'), array('class'=>'form-control')) !!}
						<br>
						{!! Form::label('telefoonnummer', 'Telefoonnummer:') !!}
						{!! Form::input('tel', 'telefoonnummer', Input::old('telefoonnummer'), array('class'=>'form-control')) !!}
					</div>
{{-- 					<div class="form-group col-md-12">
						{!! Form::label('opmerking', 'Opmerking:') !!}
						{!! Form::textarea('opmerking', Input::old('opmerking'), array('class'=>'form-control', 'style'=>'height:137px')) !!}
					</div> --}}
					<div class="form-group col-md-12">
						{!! Form::submit('Aanvragen!', array('class'=>'pull-right demo-button btn')) !!}
					</div>

					{!! Form::close() !!}
					@endif
				</div>
			</div>
		</div>
	</div>
</div>