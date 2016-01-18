@extends('layouts.backend')

@section('meta')
@include('includes.meta.noindexnofollow')
@stop

@section('pixels')
@stop

@section('titel')
Cursus {!! $cursus->naam !!} Upgraden!
@stop

@section('headernav')
@include('includes.member.header.nav')
@stop

@section('menu')
@include('includes.member.menus.mainmenu')
@stop

@section('content')
<!-- BEGIN PAGE CONTAINER-->
<div class="page-content"> 
	<div class="content">  
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">  
			<h3>{!! $cursus->naam !!}</h3>    
		</div>
		<!-- END PAGE TITLE -->
		<!-- BEGIN PlACE PAGE CONTENT HERE -->
			@if($cursus->id == '3' && $member->plan_id == '2')
			{!! Form::open(array('action'=>'Member\MemberCursussenUpgradeController@store')) !!}
			<div class="grid simple horizontal green">
				<div class="grid-title">
					<h3>Winkelwagen</h3>
				</div>
				<div class="grid-body no-border">
					<table class="table">
						<tr>
							<th></th>
							<th>Productnaam</th>
							<th>Aantal</th>
							<th></th>
							<th>Totaalprijs</th>
						</tr>
						<tr>
							<td><img src="http://www.digitusmarketing.nl/images/site/webinar/Digitus_Marketing_DVD3.png" alt="" style="max-height:125px;"></td>
							<td>Facebook Advertentie Geheimen Upgrade Geavanceerd</td>
							<td>1</td>
							<td><strike>397,00</strike></td>
							<td>200,00</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td><b>Subtotaal</b></td>
							<td><b>200,00</b></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="grid simple horizontal">
				<div class="col-md-6">
					<div class="grid-title">
						<h4>Kies je betaalmethode</h4>
					</div>
					@if($errors->any())
				      <div class="alert alert-danger">
				        <ul>
				          @foreach($errors->all() as $error)
				          <li>{!! $error !!}</li>
				          @endforeach
				        </ul>
				      </div>
					@endif
					<div class="grid-body">
						@foreach($methods as $method)
						<div class="paymentmethod col-md-4">
							<img id="paymentmethod" class="{{$method->getId()}}" src="{{URL::to($method->getImage()) }}" data-id="{{$method->getId()}}" data-title="{{$method->getName()}}" title="{{$method->getName()}}" style="float:left;">
							{!! Form::radio('betaalmethode', $method->getId(), '', array('class'=>$method->getId())) !!}
						</div>
						@endforeach
					</div>
				</div>
				<div class="col-md-6">
					<div class="grid simple horizontal blue">
						<div class="grid-body">
							<table class="table">
								<tr>
									<td></td>
									<td>Totaal excl. BTW</td>
									<td>200,00</td>
								</tr>
								<tr>
									<td></td>
									<td>21% BTW</td>
									<td>42,00</td>
								</tr>
								<tr>
									<th></th>
									<th>Totaal</th>
									<th>&euro; 242,00</th>
								</tr>
							</table>
						</div>
						<div class="grid-body">
							{!! Form::hidden('email', $member->email) !!}
							{!! Form::hidden('pakket_omschrijving', 'Facebook Advertentie Geheimen Upgrade Geavanceerd') !!}
							{!! Form::hidden('pakket_id', '6') !!}
							{!! Form::hidden('bedrag', '200') !!}
							{!! Form::submit('Bestellen!', array('class'=>'btn btn-lg btn-success pull-left')) !!}
							<p class="pull-right">Je wordt doorgestuurd naar de betaalpagina</p>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			{!! Form::close() !!}
			@endif
		
		<!-- END PLACE PAGE CONTENT HERE -->

	</div>
</div>
<!-- END PAGE CONTAINER -->

@stop

@section('footer')
@include('includes.member.footer.mainfooter')
@stop

@section('footerscript')
<script>
	$(document).ready(function(){
		$('button.hoofdstuk-button').on('click', function(){
			var id = $(this).data('id');
			$('html,body').animate({
				scrollTop: $('div#'+id).offset().top
			}, 2000);
		});
	});
</script>
@stop