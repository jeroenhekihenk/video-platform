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
      <h3>Cursussen en Cursisten</h3>    
    </div>
    <!-- END PAGE TITLE -->
    @if($cursus)
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple horizontal red">
            <div class="grid-title no-border">
              <h3>{!! $cursus->naam !!}</h3>
            </div>
            <div class="grid-body no-border">
              <table class="table no-more-tables">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Voornaam</th>
                    <th>Achternaam</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Last login</th>
                    <th>Acties</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($cursus->users as $user)
                  <tr>
                    <td><img src="{!! url($user->afbeelding) !!}" alt="" class="profile-pic"></td>
                    <td>{!! $user->voornaam !!}</td>
                    <td>{!! $user->achternaam !!}</td>
                    <td>{!! $user->email !!}</td>
                    <td>{!! $user->role->naam !!}</td>
                    <td>{!! $user->last_login !!}</td>
                    <td>
                      <a class="btn btn-warning" href="{!! action('Admin\AdminUserController@edit',[$user->id]) !!}"><span class="fa fa-pencil"></span></a>
                      <a href="" class="btn btn-success"><span class="fa fa-eye"></span></a>
                      {!! Form::open(array('action'=>['Admin\AdminUserController@destroy',$user->id], 'method'=>'DELETE', 'style'=>'display:inline-block')) !!}
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
    @endif
  </div>
</div>
<!-- END PAGE CONTAINER -->

@stop

@section('footer')
  @include('includes.admin.footer.mainfooter')
@stop

@section('footerscript')

@stop