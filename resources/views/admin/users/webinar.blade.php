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
      <h3>Webinar deelnemers</h3>    
    </div>
    <!-- END PAGE TITLE -->
    <!-- BEGIN PlACE PAGE CONTENT HERE -->
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple horizontal purple">
          <div class="grid-title no-border">
            <h3>Members</h3> <h4>Aantal deelnemers: <span><?php echo(count($webinars)); ?></span></h4>
          </div>
          <div class="grid-body no-border">
            <table class="table no-more-tables">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Naam</th>
                  <th>Email</th>
                  <th>Last login</th>
                  <th>Acties</th>
                </tr>
              </thead>
              <tbody>
              @foreach($webinars as $webinar)
                <tr>
                  <td>{!! $webinar->id !!}</td>
                  <td>{!! $webinar->voornaam !!} {!! $webinar->achternaam !!}</td>
                  <td>{!! $webinar->email !!}</td>
                  <td>{!! $webinar->last_login !!}</td>
                  <td>
                    <a class="btn btn-warning" href="{!! action('Admin\AdminUserController@getEditMember',[$webinar->id]) !!}"><span class="fa fa-pencil"></span></a>
                    <!-- URL waar aanmeldingen van sportschool gezien worden -->
                    <a href="{!! action('Admin\AdminUserController@show',[$webinar->id]) !!}" class="btn btn-success"><span class="fa fa-eye"></span></a>
                    <!-- eind url -->
                    {!! Form::open(array('action'=>['Admin\AdminUserController@destroy',$webinar->id], 'method'=>'DELETE', 'style'=>'display:inline-block')) !!}
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