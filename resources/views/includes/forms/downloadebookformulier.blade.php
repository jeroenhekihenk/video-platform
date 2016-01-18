<div id="downloadebookformulier">
	<div class="downloadebookformulier">
		<div class="titel">
			<h2 class="pull-left">Download E-book</h2>
			<div id="close-ebook-form">
				<button type="button" class="close" style="font-size:22pt !important;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </button>
			</div>
		</div>
		<div class="clearfix"></div>
		<hr>
		{!! Form::open(array('id'=>'mailchimp-ebook-popup')) !!}
			{!! Form::hidden('u') !!}
			{!! Form::hidden('id') !!}
			{!! Form::hidden('formaction') !!}
			<?php
			    $encrypter = app('Illuminate\Encryption\Encrypter');
			    $encrypted_token = $encrypter->encrypt(csrf_token());
			?>
			<input type="hidden" id="token-sidebar" value="{!! $encrypted_token !!}">
			
			<div class="col-md-12" id="form-field-sidebar">
				{{-- {!! Form::email('', '', array('class'=>'form-control field-1')) !!} --}}
				{{-- <br /> --}}
				{{-- {!! Form::text('', '', array('class'=>'form-control field-2')) !!} --}}
				{{-- <br /> --}}
				{{-- {!! Form::text('', '', array('class'=>'form-control field-3')) !!} --}}
				{{-- <br /> --}}
				{{-- {!! Form::text('', '', array('class'=>'form-control field-4')) !!} --}}
		    	{{-- <br /> --}}
			    {{-- <div style="position: absolute; left: -5000px;"><input type="text" class="form-token" name="" tabindex="-1" value=""></div>
				<input type="submit" class="btn demo-button pull-right" id="download-ebook-popup"  name="submit" value="Download e-book" /> --}}
			</div>
		{!! Form::close() !!}
	</div>
	<div class="downloadebookformulier success" style="display:none;">
		<div class="titel">
			<h3 class="pull-left">Succes!</h3>
			<div id="close-form">
				<button class="close" type="button" style="font-size:22pt !important;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			</div>
		</div>
		<div class="clearfix"></div>
		<hr>
		<p>Je aanvraag is in goede orde ontvangen. Bekijk je inbox, hier ontvang je een email met daarin een link om je emailadres te bevestigen!</p>
	</div>
</div>