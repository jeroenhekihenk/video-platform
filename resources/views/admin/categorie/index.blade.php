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
      <h3>Categorieën</h3>    
    </div>
    <!-- END PAGE TITLE -->
    <!-- BEGIN PlACE PAGE CONTENT HERE -->
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple horizontal grey">
          <div class="grid-title">
            <h3>Alle Categorieën</h3>
          </div>
          <div class="grid-body no-border">
            <table class="table no-more-tables">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Naam</th>
                  <th>Acties</th>
                </tr>
              </thead>
              <tbody>
              @foreach($categorieen as $categorie)
                <tr>
                  <td>{!! $categorie->id !!}</td>
                  <td><h4>{!! $categorie->naam !!}</h4></td>
                  <td>
                    <a class="btn btn-warning" href="{!! action('Admin\AdminCategorieController@edit',[$categorie->id]) !!}"><span class="fa fa-pencil"></span></a>
                    {!! Form::open(array('action'=>['Admin\AdminCategorieController@destroy',$categorie->id], 'method'=>'DELETE', 'style'=>'display:inline-block')) !!}
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