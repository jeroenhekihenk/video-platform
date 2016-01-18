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
      <h3>Benodigdheden</h3>    
    </div>
    <!-- END PAGE TITLE -->
    <!-- BEGIN PlACE PAGE CONTENT HERE -->
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple horizontal red">
          <div class="grid-title no-border">
            <h3>Informatie</h3>
          </div>
          <div class="grid-body no-border">
            <div class="col-md-12">
              <div class="col-md-2">
                <h4>Logo</h4>
                <img src="{!! url($benodigdheid->logo) !!}" alt="">
                <h4>{!! $benodigdheid->sportschoolnaam !!}</h4>
                <p><span class="label label-inverse">Aanmeldingen: {!! $benodigdheid->aanmeldemail !!}</span></p>
              </div>
              <div class="col-md-2">
                <h4>Slider foto 1</h4>
                <img src="{!! url($benodigdheid->foto1) !!}" alt="">
              </div>
              <div class="col-md-2">
                <h4>Slider foto 2</h4>
                <img src="{!! url($benodigdheid->foto2) !!}" alt="">
              </div>
              <div class="col-md-2">
                <h4>Slider foto 3</h4>
                <img src="{!! url($benodigdheid->foto3) !!}" alt="">
              </div>
              <div class="col-md-2">
                <h4>Slider foto 4</h4>
                <img src="{!! url($benodigdheid->foto4) !!}" alt="">
              </div>
              <div class="col-md-2">
                <h4>Slider foto 5</h4>
                <img src="{!! url($benodigdheid->foto5) !!}" alt="">
              </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="col-md-12">
              <div class="col-md-6">
                <h4>Tekst welkomstpagina</h4>
                <p>{!! $benodigdheid->welkomstpagina !!}</p>
                <h4>Waarom sportschool:</h4>
                <p>{!! $benodigdheid->waaromsportschool !!}</p>
              </div>
              <div class="col-md-6">
                <h4>Tekst bedankpagina</h4>
                <p>{!! $benodigdheid->bedankpagina !!}</p>
                <h4>Personeelsfoto</h4>
                <img src="{!! url($benodigdheid->teamfoto) !!}" alt="">
              </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="col-md-12">
              <h4>Recensies</h4>
              <div class="col-md-2">
                <img src="{!! url($benodigdheid->recensie1_foto) !!}" alt="">
                <p>{!! $benodigdheid->recensie1_tekst !!}</p>
                <span class="label">{!! $benodigdheid->recensie1_naam !!}</span>
              </div>
              <div class="col-md-2">
                <img src="{!! url($benodigdheid->recensie2_foto) !!}" alt="">
                <p>{!! $benodigdheid->recensie2_tekst !!}</p>
                <span class="label">{!! $benodigdheid->recensie2_naam !!}</span>
              </div>
              <div class="col-md-2">
                <img src="{!! url($benodigdheid->recensie3_foto) !!}" alt="">
                <p>{!! $benodigdheid->recensie3_tekst !!}</p>
                <span class="label">{!! $benodigdheid->recensie3_naam !!}</span>
              </div>
              <div class="col-md-2">
                <img src="{!! url($benodigdheid->recensie4_foto) !!}" alt="">
                <p>{!! $benodigdheid->recensie4_tekst !!}</p>
                <span class="label">{!! $benodigdheid->recensie4_naam !!}</span>
              </div>
              <div class="col-md-2">
                <img src="{!! url($benodigdheid->recensie5_foto) !!}" alt="">
                <p>{!! $benodigdheid->recensie5_tekst !!}</p>
                <span class="label">{!! $benodigdheid->recensie5_naam !!}</span>
              </div>
              <div class="col-md-2">
                <img src="{!! url($benodigdheid->recensie6_foto) !!}" alt="">
                <p>{!! $benodigdheid->recensie6_tekst !!}</p>
                <span class="label">{!! $benodigdheid->recensie6_naam !!}</span>
              </div>
            </div>
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
  @include('includes.admin.footer.mainfooter')
@stop

@section('footerscript')

@stop