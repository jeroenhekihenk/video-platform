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
      <h3>Videos</h3>    
    </div>
    <!-- END PAGE TITLE -->
    @foreach($cursussen as $cursus)
    <div class="row">
      <div class="col-md-12 cursus">
        <h3 class="cursus">{!! $cursus->naam !!} Videos</h3>
        <div class="cursus-videos" style="display:none;">
          @foreach($cursus->hoofdstukken as $hoofdstuk)
          <div class="grid simple horizontal green">
            <div class="grid-title no-border">
              <h3>{!! $hoofdstuk->naam !!}</h3>
            </div>
            <div class="grid-body no-border">
              <table class="table no-more-tables">
                <thead>
                  <tr>
                    <th>Titel</th>
                    <th>Plan</th>
                    <th class="acties">Acties</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($hoofdstuk->videos as $video)
                  <tr>
                    <td>{!! $video->titel !!}</td>
                    <td>{!! $video->plan->naam !!}</td>
                    <td><a class="btn btn-warning" href="{!! action('Admin\AdminVideosController@edit',[$video->id]) !!}"><span class="fa fa-pencil"></span></a>
                    <a href="{!! action('Admin\AdminVideosController@show',[$video->id]) !!}" class="btn btn-success"><span class="fa fa-eye"></span></a>
                    {!! Form::open(array('action'=>['Admin\AdminVideosController@destroy',$video->id], 'method'=>'DELETE', 'style'=>'display:inline-block')) !!}
                    <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                    {!! Form::close() !!}
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <hr>
    @endforeach
  </div>
</div>
<!-- END PAGE CONTAINER -->

@stop

@section('footer')
  @include('includes.admin.footer.mainfooter')
@stop

@section('footerscript')
<script>
$('h3.cursus').on('click', function(){
  $(this).next('.cursus-videos').slideToggle();
});
</script>
@stop