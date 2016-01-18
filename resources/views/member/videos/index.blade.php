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
			<h3>Dashboard</h3>    
		</div>
		<!-- END PAGE TITLE -->
		<!-- BEGIN PlACE PAGE CONTENT HERE -->
		<div class="row">
			@if($user->plan == 'member' || $user->plan == 'gratis-demo' || $user->plan == 'admin')
			@foreach($fvideos as $video)
			<div class="col-md-6">
				<div class="grid simple horizontal green">
					<div class="grid-title">
						<h4>{!! $video->titel !!}</h4>deze is gratis
					</div>
					<div class="grid-body">
						{!! $video->link !!}
					</div>
				</div>
			</div>
			@endforeach
			@endif
		</div>
		<!-- END PLACE PAGE CONTENT HERE -->
		<!-- BEGIN PlACE PAGE CONTENT HERE -->
		<div class="row">
			@if($user->plan == 'member' || $user->plan == 'admin')
			@foreach($pvideos as $video)
			<div class="col-md-6">
				<div class="grid simple horizontal blue">
					<div class="grid-title">
						<h4>{!! $video->titel !!}</h4>deze is niet gratis
					</div>
					<div class="grid-body">
						{!! $video->link !!}
					</div>
				</div>
			</div>
			@endforeach
			@endif
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