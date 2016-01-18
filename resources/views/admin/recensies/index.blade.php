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
      <h3>Recensies</h3>    
    </div>
    <!-- END PAGE TITLE -->
    <!-- BEGIN PlACE PAGE CONTENT HERE -->
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple horizontal green">
          <div class="grid-title no-border">
            <h3>Alle Recensies</h3>
          </div>
          <div class="grid-body no-border">
            <table class="table no-more-tables">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Klantnaam</th>
                  <th>Bedrijf</th>
                  <th>Link</th>
                  <th>Content</th>
                  <th width="100">Acties</th>
                </tr>
              </thead>
              <tbody>
              @foreach($recensies as $recensie)
                <tr>
                  <td>{!! $recensie->id !!}</td>
                  <td>{!! $recensie->klantnaam !!}</td>
                  <td>{!! $recensie->bedrijf !!}</td>
                  <td><span class="label label-success"><span class="fa fa-globe"></span> {!! $recensie->link !!}</span></td>
                  <td>{!! $recensie->content !!}</td>
                  <td width="100"><a class="btn btn-warning" href="{!! action('Admin\AdminRecensieController@edit',[$recensie->id]) !!}"><span class="fa fa-pencil"></span></a>
                  {!! Form::open(array('action'=>['Admin\AdminRecensieController@destroy',$recensie->id], 'method'=>'DELETE', 'style'=>'display:inline-block')) !!}
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