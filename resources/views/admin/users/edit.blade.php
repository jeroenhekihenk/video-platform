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
      <h3>Gebruikers</h3>    
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
      <div class="col-md-11 col-md-offset-1">
        <div class="grid-title no-border">
          <h3>{!! $user->voornaam !!} {!! $user->achternaam !!} Bewerken</h3>
        </div>
        <div class="grid-body no-border">
          {!! Form::model($user, array('action'=>['Admin\AdminUserController@update', $user->id], 'method'=>'PATCH', 'files'=>true)) !!}
            @include('includes.forms.admin.user', ['submitButtonText'=>'Bewerk gebruiker'])
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
{!! Html::script('/js/admin/wysihtml5-0.3.0.js') !!}
{!! Html::script('/js/admin/bootstrap-wysihtml5.js') !!}
<script>
  $('div.preview-afbeelding').on('click', function(){
    $(this).remove();
    $('div.nieuw-afbeelding').show();
  });
</script>
@stop