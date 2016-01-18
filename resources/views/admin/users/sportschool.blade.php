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
      <h3>{!! $user->voornaam !!} {!! $user->achternaam !!}</h3>    
    </div>
    <!-- END PAGE TITLE -->
    <!-- BEGIN PlACE PAGE CONTENT HERE -->

    <div class="row">
      <div class="col-md-8 col-sm-8 col-md-offset-2">
        <div class="grid simple horizontal blue">
          <div class="grid-title">
            <h4>Sportschool gegevens:</h4>
          </div>
          <div class="grid-body">
            @if($user->sportschool)
              <table class="table no-more-tables">
              <thead>
                <tr>
                  <th>Sportschool</th>
                  <th>Aantal aanmeldingen</th>
                  <th>Laatste aanmelding</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{!! $user->sportschool->naam !!}</td>
                  <td>{!! $user->sportschool->aanmeldingen !!}</td>
                  <td>{!! $user->sportschool->laatste_aanmelding !!}</td>
                </tr>
            @endif
          </div>
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

@stop