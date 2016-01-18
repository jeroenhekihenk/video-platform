@foreach($diensten as $dienst)
@if($dienst->label == 'dienst')
	<div class="col-md-3 s-p">
		<div class="s-p-i box">
			<span class="#"></span>
			<h2 class="#">#</h2>
			<a class="btn nrml-button" href="#" title="#">Lees meer</a>
		</div>
	</div>
@elseif($dienst->label == 'training')
	<div class="col-md-3 s-p">
		<div class="s-p-i box">
			<span class="#"></span>
			<h2 class="#">#</h2>
			<a class="btn nrml-button" href="#" title="#">Lees meer</a>
		</div>
	</div>
@endif
@endforeach