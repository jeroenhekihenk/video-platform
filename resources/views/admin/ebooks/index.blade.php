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
      <h3>Ebooks</h3>    
    </div>
    <!-- END PAGE TITLE -->
    <!-- BEGIN PlACE PAGE CONTENT HERE -->
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple horizontal yellow">
          <div class="grid-title no-border">
            <h3>Alle Ebooks</h3>
          </div>
          <div class="grid-body no-border">
            <table class="table no-more-tables">
              <thead>
                <tr>
                  <th>Actief</th>
                  <th>Titel</th>
                  <th>Downloads</th>
                  <th>Acties</th>
                </tr>
              </thead>
              <tbody>
              @foreach($ebooks as $ebook)
                <tr {{ $ebook->deleted_at != null ? 'class=danger' : '' }}>
                  <td>
                  @if($ebook->deleted_at != null)
                  @else
                    @if($ebook->active == '1')
                      <span class="badge badge-success"><span class="fa fa-check"></span></span>
                      <a href="{!! action('Admin\AdminEbooksController@setDisabled',[$ebook->id]) !!}"><span class="badge"><span class="fa fa-times"></span></span></a>
                    @elseif($ebook->active == '0')
                      <a href="{!! action('Admin\AdminEbooksController@setActive',[$ebook->id]) !!}"><span class="badge"><span class="fa fa-check"></span></span></a>
                      <span class="badge badge-danger"><span class="fa fa-times"></span></span>
                    @endif
                  @endif
                  </td>
                  <td><h4>{!! $ebook->naam !!} @if($ebook->deleted_at != null) <small>(Deze is al verwijderd)</small> @endif</h4></td>
                  <td><span class="label label-info"><span class="fa fa-download"></span> {!! $ebook->downloads !!} x</span></td>
                  <td>
                    @if($ebook->deleted_at != null)
                      {!! Form::open(array('action'=>['Admin\AdminEbooksController@forceDelete',$ebook->id], 'method'=>'DELETE', 'style'=>'display:inline-block')) !!}
                      <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                      {!! Form::close() !!}
                      <a href="{!! action('Admin\AdminEbooksController@restoreEbook',[$ebook->id]) !!}" class="btn btn-primary" title="Restore Ebook"><span class="fa fa-undo"></span></a>
                    @else
                      <a class="btn btn-warning" href="{!! action('Admin\AdminEbooksController@edit',[$ebook->id]) !!}"><span class="fa fa-pencil"></span></a>
                      {!! Form::open(array('action'=>['Admin\AdminEbooksController@destroy',$ebook->id], 'method'=>'DELETE', 'style'=>'display:inline-block')) !!}
                      <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                      {!! Form::close() !!}
                    @endif
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