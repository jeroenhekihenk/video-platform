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
                  <th>Auteur</th>
                  <th>Titel</th>
                  <th>Afbeelding</th>
                  <th>Gepubliceerd op:</th>
                  <th>Categorie</th>
                  <th class="acties">Acties</th>
                </tr>
              </thead>
              <tbody>
              @foreach($posts as $post)
                <tr>
                  <td><span class="label label-info"><span class="fa fa-user"></span>  {!! $post->getAuthor() !!}</span></td>
                  <td >{!! $post->titel !!}</td>
                  <td><img src="{!! url($post->uitgelichte_afbeelding) !!}" alt="" style="max-height:100px; max-width:125px;"></td>
                  <td>{!! $post->published_at !!}</td>
                  <td><span class="label label-success"><span class="fa fa-tag"></span> {!! $post->categorie->naam !!}</span></td>
                  <td><a class="btn btn-warning" href="{!! action('Admin\AdminBlogController@edit',[$post->id]) !!}"><span class="fa fa-pencil"></span></a>
                  <a href="{!! action('Admin\AdminBlogController@show',[$post->slug]) !!}" class="btn btn-success"><span class="fa fa-eye"></span></a>
                  {!! Form::open(array('action'=>['Admin\AdminBlogController@destroy',$post->id], 'method'=>'DELETE', 'style'=>'display:inline-block')) !!}
                  <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
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