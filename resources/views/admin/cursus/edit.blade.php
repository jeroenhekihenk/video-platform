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
      <h3>Cursussen</h3>    
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
      <div class="col-md-6 col-md-offset-3">
        <div class="grid-title no-border">
          <h3>"{!! $cursus->naam !!}" bewerken</h3>
        </div>
        <div class="grid-body no-border">
          {!! Form::model($cursus, array('action'=>['Admin\AdminCursusController@update',$cursus->id], 'method'=>'PATCH', 'files'=>true)) !!}
            @include('includes.forms.admin.cursus',['submitButtonText'=>'Bewerk Cursus'])
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
<script>
  $('div.preview-afbeelding').on('click', function(){
    $(this).remove();
    $('div.nieuw-afbeelding').show();
  });
</script>
@stop