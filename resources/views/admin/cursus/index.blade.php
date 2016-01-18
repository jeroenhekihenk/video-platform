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
      <h3>Cursussen</h3>    
    </div>
    <!-- END PAGE TITLE -->
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple horizontal green">
          <div class="grid-title no-border">
            <h3>Alle cursussen</h3>
          </div>
          <div class="grid-body no-border">
            <table class="table no-more-tables">
              <thead>
                <tr>
                  <th>Naam</th>
                  <th>Content</th>
                  <th>Cursisten</th>
                  <th class="acties">Acties</th>
                </tr>
              </thead>
              <tbody>
              @foreach($cursussen as $cursus)
                <tr>
                  <td>{!! $cursus->naam !!}</td>
                  <td>{!! $cursus->content !!}</td>
                  <td>{!! count($cursus->users) !!}</td>
                  <td><a class="btn btn-warning" href="{!! action('Admin\AdminCursusController@edit',[$cursus->id]) !!}"><span class="fa fa-pencil"></span></a>
                  <a href="{!! action('Admin\AdminCursusController@show',[$cursus->slug]) !!}" class="btn btn-success"><span class="fa fa-eye"></span></a>
                  {!! Form::open(array('action'=>['Admin\AdminCursusController@destroy',$cursus->id], 'method'=>'DELETE', 'style'=>'display:inline-block')) !!}
                  <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                  <a href="{!! action('Admin\AdminCursistenController@index', [$cursus->id]) !!}" class="btn btn-primary" title="Bekijk cursisten"><span class="fa fa-graduation-cap"></span></a>
                  {!! Form::close() !!}
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END PAGE CONTAINER -->

@stop

@section('footer')
  @include('includes.admin.footer.mainfooter')
@stop

@section('footerscript')

@stop