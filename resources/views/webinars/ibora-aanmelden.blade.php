@extends('layouts.backend')

@section('css')
<style>
body{
  background-image: url('http://www.digitusmarketing.nl/images/site/bg/ibora-webinar.jpg');
  background-size: cover;
  background-position: center center;
}
.login-container{
  margin-bottom:5%;
}
</style>
@stop

@section('content')
  <div class="container">
    <div class="row login-container animated fadeInUp">  
      <div class="col-md-7 col-md-offset-2 tiles white no-padding">
        <div class="p-t-30">
          <img src="{!! url('/images/digitus/DIGITUS_logo_def.png') !!}" alt="Logo Digitus Marketing" class="center">
        </div>
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40 xs-p-r-10"> 
          <h2 class="normal">Aanmelden Webinar VPNO</h2>
        </div>
      </div>
      <div class="tiles grey no-padding col-md-7 col-md-offset-2">
         @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @if(Session::has('message'))
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40 xs-p-r-10">
          <div class="alert alert-success">{!! Session::get('message') !!}</div>
        </div>
        @endif
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40 xs-p-r-10 text-black">
          <div class="form-group">
            @include('includes.forms.webinars.iboraaanmelden')
          </div>
        </div>
      </div>   
    </div>
  </div>
@stop

@section('footerscript')
@stop