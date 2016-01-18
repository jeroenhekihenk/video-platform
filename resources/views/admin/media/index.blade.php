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
      <h3>Blog</h3>    
    </div>
    <!-- END PAGE TITLE -->
    <!-- BEGIN PlACE PAGE CONTENT HERE -->
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple horizontal green">
          <div class="grid-title no-border">
            <h3>Alle blogposts</h3>
          </div>
          <div class="grid-body no-border">
            <table class="table no-more-tables">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Afbeelding</th>
                  <th>Url</th>
                  <th>Titel</th>
                  <th>Alt</th>
                  <th>Acties</th>
                </tr>
              </thead>
              <tbody>
              @foreach($images as $image)
                <tr>
                  <td>{!! $image->id !!}</td>
                  <td><img src="{!! url($image->url) !!}" alt="" style="max-height:100px"></td>
                  <td>{!! url($image->url) !!}</td>
                  <td><h4>{!! $image->titel !!}</h4></td>
                  <td>{!! $image->alt !!}</td>
                  <td><a class="btn btn-warning" href="{!! action('Admin\AdminMediaController@edit',[$image->id]) !!}"><span class="fa fa-pencil"></span></a>
                  {{-- <a href="{!! action('BlogController@show',[$image->slug]) !!}" class="btn btn-success"><span class="fa fa-eye"></span></a> --}}
                  {!! Form::open(array('action'=>['Admin\AdminMediaController@destroy',$image->id], 'method'=>'DELETE', 'style'=>'display:inline-block')) !!}
                  <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                  {!! Form::close() !!}
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        {!! $images->render(); !!}
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