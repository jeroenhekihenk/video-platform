@extends('layouts.backend')

@section('meta')
@include('includes.meta.noindexnofollow')
@stop

@section('css')
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
      <h3>{!! $cursus->naam !!}</h3>    
    </div>
    <div class="grid simple vertical green">
      <div class="grid-body">
        {!! $cursus->content !!}
      </div>
    </div>
    <!-- END PAGE TITLE -->
    <!-- BEGIN PlACE PAGE CONTENT HERE -->
    <div class="row">
      @if($errors->any())
      <div class="alert alert-error">
        <ul>
          @foreach($errors->all() as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
      </div>
      @endif
      @foreach($videos as $video)
        <div class="col-md-6 video">
          <div class="grid simple horizontal red">
            <div class="grid-title">
              <h4>{!! $video->titel !!}</h4>
              <small>{!! $video->plan->naam !!}</small>
            </div>
            <div class="grid-body">
              {!! $video->link !!}
            </div>
          </div>
        </div>
      @endforeach
    </div>
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