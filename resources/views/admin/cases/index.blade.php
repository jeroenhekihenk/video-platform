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
      <h3>Cases</h3>    
    </div>
    <!-- END PAGE TITLE -->
    <!-- BEGIN PlACE PAGE CONTENT HERE -->
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple horizontal grey">
          <div class="grid-title">
            <h3>Alle Cases</h3>
          </div>
          <div class="grid-body no-border">
            <table class="table no-more-tables">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Klant</th>
                  <th>Titel</th>
                  <th style="max-width:600px">Content</th>
                  <th>Categorie</th>
                  <th>Acties</th>
                </tr>
              </thead>
              <tbody>
              @foreach($cases as $case)
                <tr>
                  <td><img src="{!! url($case->logo) !!}" alt="" class="profile-pic"></td>
                  <td><h4>{!! $case->klant !!}</h4></td>
                  <td><h4>{!! $case->titel !!}</h4></td>
                  <td style="max-width:600px">{!! $case->excerpt !!}</td>
                  <td><span class="label label-info">{!! $case->categorie->naam !!}</span></td>
                  <td>
                    <a class="btn btn-warning" href="{!! action('Admin\AdminCasesController@edit',[$case->id]) !!}"><span class="fa fa-pencil"></span></a>
                    <a href="{!! action('CasesController@show',[$case->slug]) !!}" class="btn btn-success"><span class="fa fa-eye"></span></a>
                    {!! Form::open(array('action'=>['Admin\AdminCasesController@destroy',$case->id], 'method'=>'DELETE', 'style'=>'display:inline-block')) !!}
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