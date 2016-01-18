<div id="belmijterugformulier">
	<div class="belmijterugformulier">
		<div class="titel">
			<h2 class="pull-left">Bel mij terug</h2>
			<div id="close-form">
				<button type="button" class="close" style="font-size:22pt !important;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </button>
			</div>
		</div>
		<div class="clearfix"></div>
		<hr>
		{!! Form::open(array('id'=>'belmijterugformulier')) !!}
		<div class="form-group">
			{!! Form::text('naam', null, array('class'=>'form-control', 'placeholder'=>'Naam..')) !!}
			<div id="naam-errors" class="alert alert-danger" style="display:none;"></div>
		</div>
		<div class="form-group">
			{!! Form::input('tel', 'telefoonnummer', null, array('class'=>'form-control', 'placeholder'=>'Telefoonnummer..')) !!}
			<div id="telefoonnummer-errors" class="alert alert-danger" style="display:none;"></div>
		</div>
		<div class="clearfix"></div>
		<hr>
		<div class="form-group">
			<p class="pull-left"><span class="glyphicon glyphicon-lock"></span> Je gegevens zijn veilig</p>
			{{-- <button class="btn demo-button pull-right" id="belmijterugbutton">Bel mij terug!</button> --}}
			{!! Form::submit('Bel mij terug!', array('class'=>'btn demo-button pull-right', 'id'=>'belmijterugbutton')) !!}
		</div>
		{!! Form::close() !!}
	</div>
	<div class="belmijterugformulier success" style="display:none;">
		<div class="titel">
			<h2 class="pull-left">Gelukt!</h2>
			<div id="close-form">
				<button class="close" type="button" style="font-size:22pt !important;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			</div>
		</div>
		<div class="clearfix"></div>
		<hr>
		<p>We hebben je bericht ontvangen en zullen z.s.m. contact met je opnemen!</p>
	</div>
</div>