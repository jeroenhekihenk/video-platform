@extends('layouts.backend')

@section('meta')
@include('includes.meta.noindexnofollow')
@stop

@section('css')
{!! Html::style('/css/member/sessieform.css') !!}
@stop

@section('titel')
Benodigdheden Facebook tab-app
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
      <h3>Facebook tab-app</h3>    
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
      <div class="col-md-9 col-md-offset-1">
        <div class="grid-title no-border">
          <h3>Benodigdheden Facebook tab-app</h3>
        </div>
        <div class="grid-body no-border full-seminar-form">
          <div class="container">
            <center>
              <ul id="progressbar">
                <li class="active" style="width:25%;"><p>1. Sportschool</p></li>
                <li style="width:25%;"><p>2. Welkomstpagina</p></li>
                <li style="width:25%;"><p>3. Bedankpagina</p></li>
                <li style="width:25%;"><p>4. Recensies</p></li>
              </ul>
            </center>
            <div class="progress-pointer">
              <span class="pointer"></span>
            </div>
            <hr style="border-color:#0e76bc;border-width:2px 0 0;margin-top:0;">
            <div class="container" style="margin: 0; overflow: hidden; position: relative;">
              <div id="fieldset-holder" style="display: block; float: left; overflow: hidden; width: 10000px;">
                <style>
                  fieldset{
                    max-width: 1170px;
                  }
                </style>
                {!! Form::open(array('class'=>'form-registreren', 'action'=> 'Member\MemberBenodigdhedenController@store', 'files'=>true, 'method'=>'POST')) !!}
                  @include('includes.forms.member.benodigdheden')
                {!! Form::close() !!}
              </div>
            </div>
          </div>
          <!-- -->
        </div>
      </div>
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
{!! Html::script('/js/member/1.11.0.jquery-ui.js') !!}
{!! Html::script('/js/member/jquery.easing.1.3.js') !!}
{!! Html::script('/js/member/seminar-drachten.js') !!}

</script>
@stop