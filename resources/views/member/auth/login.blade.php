@extends('layouts.backend')

@section('content')
  <div class="container">
    <div class="row login-container animated fadeInUp">  
      <div class="col-md-7 col-md-offset-2 tiles white no-padding">
        <div class="p-t-30">
          <img src="{!! url('/images/digitus/DIGITUS_logo_def.png') !!}" alt="Logo Digitus Marketing" class="center">
        </div>
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10"> 
          <h2 class="normal">Log in op Digitus Marketing</h2>
        </div>
        <div class="tiles grey p-t-20 p-b-20 text-black">
          @include('includes.forms.auth.memberlogin')
        </div>   
      </div>   
    </div>
  </div>

@stop

@section('footerscript')
@stop