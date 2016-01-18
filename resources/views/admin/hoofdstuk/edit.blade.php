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
      <h3>Hoofdstukken</h3>    
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
      <div class="col-md-12">
        <div class="grid-title no-border">
          <h3>"{!! $hoofdstuk->naam !!}" bewerken</h3>
        </div>
        <div class="grid-body no-border">
          {!! Form::model($hoofdstuk, array('action'=>['Admin\AdminHoofdstukController@update', $hoofdstuk->id], 'method'=>'PATCH')) !!}
            @include('includes.forms.admin.hoofdstuk',['submitButtonText'=>'Bewerk Hoofdstuk'])
          {!! Form::close() !!}
        </div>
      </div>
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