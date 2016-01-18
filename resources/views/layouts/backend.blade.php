<!DOCTYPE html>
<html>
<head>
  <title>@yield('titel')</title>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link rel="icon" href="{{ URL::to('/') }}/images/digitus/favicon.ico" type="image/ico" />
  <link rel="shortcut icon" href="{{ URL::to('/') }}/images/digitus/favicon.ico" type="image/ico" />
  @yield('meta')
  
  {!! Html::style('/css/admin/pace-theme-flash.css') !!}  
  {!! Html::style('/css/admin/jquery.scrollbar.css') !!}  
  {!! Html::style('/css/admin/bootstrap.min.css') !!}  
  {!! Html::style('/css/admin/bootstrap-theme.min.css') !!}  
  {!! Html::style('/css/admin/font-awesome.css') !!}  
  {!! Html::style('/css/admin/animate.min.css') !!}  
  {!! Html::style('/css/admin/style.css') !!}  
  {!! Html::style('/css/admin/responsive.css') !!}  
  {!! Html::style('/css/admin/custom-icon-set.css') !!}  
  @yield('css')
</head>
<body class="">
@include('includes.google.analytics')

@yield('headernav')

<!-- BEGIN CONTENT -->
<div class="page-container row-fluid">
  @yield('menu')
  <!-- BEGIN SCROLL UP HOVER -->
  {{-- <a href="#" class="scrollup">Scroll</a> --}}
  <!-- END SCROLL UP HOVER -->
  <!-- END MENU -->

  @yield('content')

  @yield('footer')
</div>
<!-- END CONTENT --> 
<!-- BEGIN CORE JS FRAMEWORK--> 
{!! Html::script('/js/admin/jquery-1.8.3.min.js') !!}
{!! Html::script('/js/admin/jquery-ui-1.10.1.custom.min.js') !!}
{!! Html::script('/js/admin/bootstrap.min.js') !!}
{!! Html::script('/js/admin/breakpoints.js') !!}
{!! Html::script('/js/admin/jquery.unveil.min.js') !!}
{!! Html::script('/js/admin/jqueryblockui.js') !!}
<!-- END CORE JS FRAMEWORK --> 
<!-- BEGIN PAGE LEVEL JS -->  
{!! Html::script('/js/admin/jquery.scrollbar.min.js') !!}
{!! Html::script('/js/admin/pace.min.js') !!}
{!! Html::script('/js/admin/jquery.animateNumbers.js') !!}
<!-- END PAGE LEVEL PLUGINS -->   

<!-- BEGIN CORE TEMPLATE JS --> 
{!! Html::script('/js/admin/core.js') !!}
{!! Html::script('/js/admin/chat.js') !!}
{!! Html::script('/js/admin/demo.js') !!}
<!-- END CORE TEMPLATE JS --> 

<!-- END NEED TO WORK ON -->
@yield('footerscript')
</body>
</html>