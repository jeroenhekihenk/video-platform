<div id="uitgelicht">
	<div class="container">
		<div class="col-md-12 ebook-download-holder">
			<div class="col-md-3">
				<img src="" alt="" class="ebook-uitgelicht">
			</div>
			<div class="col-md-9 counter-blok">
				<div class="titel-blok">
					{{-- <h2>Vul onderstaand formulier in om het e-book GRATIS te downloaden.</h2> --}}
					<h2 id="ebook-slogan-titel"></h2>
					<p id="ebook-slogan-tekst"></p>
				</div>
				<div class="ebook-counter">
					<div class="col-md-4">
					<?php
					    $encrypter = app('Illuminate\Encryption\Encrypter');
					    $encrypted_token = $encrypter->encrypt(csrf_token());
					?>
					{!! Form::open(array('method'=>'GET')) !!}
					{!! Form::hidden('download-count') !!}
					{!! Form::close() !!}
					<input type="hidden" id="token-download" value="{!! $encrypted_token !!}">

						{{-- <div class="col-md-2">
							<span class="teller"></span>
						</div>
						<div class="col-md-2">
							<span class="teller"></span>
						</div>
						<div class="col-md-2">
							<span class="teller"></span>
						</div> --}}
						{{-- <div class="col-md-2">
							<span class="teller">2</span>
						</div>
						<div class="col-md-2">
							<span class="teller">4</span>
						</div>
						<div class="col-md-2">
							<span class="teller">8</span>
						</div> --}}
					</div>
					<p class="ebook-downloads pull-left">Aantal downloads</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="ebook-download">
	<div class="container">
		<div class="col-md-12">
			<div class="ebook-download">
				<button class="btn demo-button" id="download-ebook">Download e-book</button>
			</div>
			<div class="ebook-download-formulier" style="display: none;">
				<!-- Begin MailChimp Signup Form -->
				<div class="ebook-errors alert alert-danger " style="display:none;">
					Vul a.u.b. alle velden in.
				</div>
				<div id="mc_embed_signup">
					{!! Form::open(array('id'=>'mailchimp-ebook')) !!}
						{!! Form::hidden('u') !!}
						{!! Form::hidden('id') !!}
						{!! Form::hidden('formaction') !!}
						<div id="form-fields-uitgelicht">
							{{-- <div class="col-md-4">
								{!! Form::email('', '', array('class'=>'form-control field-1')) !!}
								<br />
								{!! Form::text('', '', array('class'=>'form-control field-2')) !!}
							</div>

							<div class="col-md-4">
								{!! Form::text('', '', array('class'=>'form-control field-3')) !!}
								<br />
								{!! Form::text('', '', array('class'=>'form-control field-4')) !!}

						    </div> --}}
					    </div>

						<div class="col-md-4">
						    <div style="position: absolute; left: -5000px;"><input type="text" class="form-token" name="" tabindex="-1" value=""></div>
							<input type="submit" class="btn demo-button pull-right" id="download-ebook"  name="submit" value="Download e-book" />
						</div>
					{!! Form::close() !!}
				</div>

				<!--End mc_embed_signup-->
			</div>
			<div class="ebook-download-success" style="display: none;">
				<h3>Succes!</h3>
				<p>Je aanvraag is in goede orde ontvangen. Bekijk je inbox, hier ontvang je een email met daarin een link om je emailadres te bevestigen!</p>
			</div>
		</div>
	</div>
</div>