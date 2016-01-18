@extends('layouts.backend')

@section('meta')
@include('includes.meta.noindexnofollow')
@stop

@section('pixels')
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
			<h3>Cursussen</h3>    
		</div>
		<!-- END PAGE TITLE -->
		<!-- BEGIN PlACE PAGE CONTENT HERE -->
		<div class="row">
		@foreach($cursussen as $cursus)
			@if($member->heeftCursus($cursus->id))

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="grid simple horizontal green">
					<div class="grid-title">
						<h4>{!! $cursus->naam !!}</h4>
					</div>
					@if($cursus->afbeelding)
					<div class="grid-image">
						<img src="{!! url($cursus->afbeelding) !!}" alt="{!! $cursus->naam !!}">
					</div>
					@endif
					<div class="grid-body">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0;">						
							<a href="{!! action('Member\MemberCursussenController@show',[$cursus->slug]) !!}" class="btn btn-success pull-right">Ga naar cursus</a>
						</div>
					</div>
				</div>
			</div>
			@else
			<div class="col-md-4 col-sm-6 col-xs-12 disabled">
				<div class="grid simple horizontal green">
					<div class="grid-title">
						<h4>{!! $cursus->naam !!}</h4>
					</div>
					@if($cursus->afbeelding)
					<div class="grid-image">
						<img src="{!! url($cursus->afbeelding) !!}" alt="{!! $cursus->naam !!}">
					</div>
					@endif
					<div class="grid-body">
						<div class="col-lg-6 col-md-12 col-sm-6 col-xs-6" style="padding:0;">
							<a href="#" class="btn btn-success disabled"><span class="fa fa-info" style="margin-right:5px;"></span> Meer informatie</a>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-6 col-xs-6" style="padding:0;">
							<a href="#" class="btn btn-primary disabled pull-right"><span class="fa fa-shopping-cart" style="margin-right:5px;"></span> Bestel cursus</a>
						</div>
					</div>
				</div>
			</div>
			@endif
		@endforeach
		</div>
		<!-- END PLACE PAGE CONTENT HERE -->

	</div>
</div>
<!-- END PAGE CONTAINER -->

@stop

@section('footer')
@include('includes.member.footer.mainfooter')
@stop

@section('footerscript')

@stop