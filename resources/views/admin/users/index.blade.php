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
      <h3>Gebruikers</h3>    
    </div>
    <!-- END PAGE TITLE -->
    <!-- BEGIN PlACE PAGE CONTENT HERE -->
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple horizontal red">
          <div class="grid-title no-border">
            <h3>Administrators</h3>
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
                  <th>Acties</th>
                </tr>
              </thead>
              <tbody>
              @foreach($admins as $admin)
                <tr>
                  <td><img src="{!! url($admin->afbeelding) !!}" alt="" class="profile-pic"></td>
                  <td>{!! $admin->voornaam !!}</td>
                  <td>{!! $admin->achternaam !!}</td>
                  <td>{!! $admin->email !!}</td>
                  <td>{!! $admin->role->naam !!}</td>
                  <td>
                    <a class="btn btn-warning" href="{!! action('Admin\AdminUserController@edit',[$admin->id]) !!}"><span class="fa fa-pencil"></span></a>
                    <a href="" class="btn btn-success"><span class="fa fa-eye"></span></a>
                    {!! Form::open(array('action'=>['Admin\AdminUserController@destroy',$admin->id], 'method'=>'DELETE', 'style'=>'display:inline-block')) !!}
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
    <!-- BEGIN PlACE PAGE CONTENT HERE -->
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple horizontal purple">
          <div class="grid-title no-border">
            <h3>Members</h3>
          </div>
          <div class="grid-body no-border">
            <table class="table no-more-tables">
              <thead>
                <tr>
                  <th>Klantnr</th>
                  <th>Naam</th>
                  <th>Email</th>
                  <th>Bedrijfsnaam</th>
                  <th>Benodigdheden</th>
                  <th>Tab-App</th>
                  <th>Conversiepixel</th>
                  <th>Last login</th>
                  <th>Acties</th>
                </tr>
              </thead>
              <tbody>
              @foreach($members as $member)
                <tr>
                  <td>{!! $member->klantnummer !!}</td>
                  <td>{!! $member->voornaam !!} {!! $member->achternaam !!}</td>
                  <td>{!! $member->email !!}</td>
                  <td>                    
                  </td>
                  <td><a href="{!! url($member->tab_app_link) !!}" target="_blank"><span class="label label-info"><span class="fa fa-globe"></span> {!! $member->tab_app !!} </span></a></td>
                  <td>
                    

                  </td>
                  <td>{!! $member->last_login !!}</td>
                  <td>
                    <a class="btn btn-warning" href="{!! action('Admin\AdminUserController@getEditMember',[$member->id]) !!}"><span class="fa fa-pencil"></span></a>
                    <!-- URL waar aanmeldingen van sportschool gezien worden -->
                    <a href="{!! action('Admin\AdminUserController@show',[$member->id]) !!}" class="btn btn-success"><span class="fa fa-eye"></span></a>
                    <!-- eind url -->
                    {!! Form::open(array('action'=>['Admin\AdminUserController@destroy',$member->id], 'method'=>'DELETE', 'style'=>'display:inline-block')) !!}
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