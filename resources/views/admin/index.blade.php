@extends('layouts.backend')

@section('meta')
	@include('includes.meta.noindexnofollow')
@stop

@section('pixels')
@stop

@section('headernav')
	@include('includes.admin.header.nav')
@stop

@section('menu')
    @include('includes.admin.menus.mainmenu')
@stop

@section('content')
<!-- BEGIN PAGE CONTAINER-->
<div class="page-content"> 
	<div class="content">  
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">  
			<h3>Master Page</h3>    
		</div>
		<!-- END PAGE TITLE -->
		<!-- BEGIN PlACE PAGE CONTENT HERE -->

		<!-- END PLACE PAGE CONTENT HERE -->

	</div>
</div>
<!-- END PAGE CONTAINER -->

@stop

@section('footer')
	@include('includes.admin.footer.mainfooter')
@stop

@section('footerscript')

@stop