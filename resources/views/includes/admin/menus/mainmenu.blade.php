<!-- BEGIN SIDEBAR -->
<!-- BEGIN MENU -->
<div class="page-sidebar" id="main-menu"> 
  <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
    @include('includes.admin.menus.user')
    <!-- BEGIN SIDEBAR MENU --> 
    <p class="menu-title">BROWSE<span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
    <ul>  
      <!-- BEGIN SELECTED LINK -->
      <li {{ Request::is('jandje') ? 'class=active' : '' }}>
        <a href="{!! action('Admin\AdminController@index') !!}">
          <i class="icon-custom-home"></i>
          <span class="title">Dashboard</span>
          <span class="selected"></span>
          {{-- <span class="badge badge-important pull-right">5</span> --}}
        </a>
      </li>
      <!-- END SELECTED LINK -->
      <!-- BEGIN ONE LEVEL MENU -->
      <li {{ Request::is('jandje/ebooks') || Request::is('jandje/ebooks/*') ? 'class=active' : '' }}>
        <a href="javascript:;">
          <i class="fa fa-book"></i>
          <span class="title">Ebooks</span>
          <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
          <li {{ Request::is('jandje/ebooks') ? 'class=active' : '' }}><a href="{!! action('Admin\AdminEbooksController@index') !!}">Alle Ebook</a></li>
          <li {{ Request::is('jandje/ebooks/create') ? 'class=active' : '' }}><a href="{!! action('Admin\AdminEbooksController@create') !!}">Nieuw Ebook</a></li>
        </ul>
      </li>
      <!-- END ONE LEVEL MENU -->
      <!-- BEGIN ONE LEVEL MENU -->
      <li {{ Request::is('jandje/users') || Request::is('jandje/users/*') || Request::is('jandje/member/create') || Request::is('jandje/member/*/edit') ? 'class=active' : '' }}>
        <a href="javascript:;">
          <i class="fa fa-users"></i>
          <span class="title">Gebruikers</span>
          <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
          <li {{ Request::is('jandje/users') ? 'class=active' : '' }}><a href="{!! action('Admin\AdminUserController@index') !!}">Alle Gebruikers</a></li>
          <li {{ Request::is('jandje/users/create') ? 'class=active' : '' }}><a href="{!! action('Admin\AdminUserController@create') !!}">Nieuwe Gebruiker</a></li>
          <li {{ Request::is('jandje/member/create') ? 'class=active' : '' }}><a href="{!! action('Admin\AdminUserController@createMember') !!}">Nieuwe Member</a></li>
        </ul>
      </li>
      <!-- END ONE LEVEL MENU -->
      <!-- BEGIN ONE LEVEL MENU -->
      <li {{ Request::is('jandje/cursus') || Request::is('jandje/cursus/*') || Request::is('jandje/videos') || Request::is('jandje/videos/*') || Request::is('jandje/hoofdstuk') || Request::is('jandje/hoofdstuk/*')  ? 'class=active' : '' }}>
        <a href="javascript:;">
          <i class="fa fa-institution"></i>
          <span class="title">Cursussen</span>
          <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
          <li {{ Request::is('jandje/cursus') ? 'class=active' : '' }}><a href="{!! action('Admin\AdminCursusController@index') !!}">Alle Cursussen</a></li>
          <li {{ Request::is('jandje/cursus/create') ? 'class=active' : '' }}><a href="{!! action('Admin\AdminCursusController@create') !!}">Nieuwe Cursus</a></li>
          <li {{ Request::is('jandje/hoofdstuk') ? 'class=active' : '' }}><a href="{!! action('Admin\AdminHoofdstukController@index') !!}">Alle Hoofdstukken</a></li>
          <li {{ Request::is('jandje/hoofdstuk/create') ? 'class=active' : '' }}><a href="{!! action('Admin\AdminHoofdstukController@create') !!}">Nieuw Hoofdstuk</a></li>
          <li {{ Request::is('jandje/videos') ? 'class=active' : '' }}><a href="{!! action('Admin\AdminVideosController@index') !!}">Alle Videos</a></li>
          <li {{ Request::is('jandje/videos/create') ? 'class=active' : '' }}><a href="{!! action('Admin\AdminVideosController@create') !!}">Nieuwe Video</a></li>
        </ul>
      </li>
      <!-- END ONE LEVEL MENU -->
      <!-- BEGIN BADGE LINK -->
      {{-- <li class="">
        <a href="#">
          <i class="fa fa-envelope"></i>
          <span class="title">Link 2</span>
          <span class="badge badge-disable pull-right">203</span>
        </a>
      </li> --}}
      <!-- END BADGE LINK -->     
      <!-- BEGIN SINGLE LINK -->
      {{-- <li class="">
        <a href="#">
          <i class="fa fa-flag"></i>
          <span class="title">Link 3</span>
        </a>
      </li> --}}
      <!-- END SINGLE LINK -->    
      <!-- BEGIN TWO LEVEL MENU -->
      <li {{ Request::is('jandje/rollen') || Request::is('jandje/rollen/*') || Request::is('jandje/categorieen') || Request::is('jandje/categorieen/*') || Request::is('jandje/icons') ? 'class=open' : '' }}>
        <a href="javascript:;">
          <i class="fa fa-folder-open"></i>
          <span class="title">Extras</span>
          <span class="arrow"></span>
        </a>
        <ul class="sub-menu" {{ Request::is('jandje/rollen') || Request::is('jandje/rollen/*') || Request::is('jandje/categorieen') || Request::is('jandje/categorieen/*') || Request::is('jandje/icons') ? 'style=display:block' : '' }}>
          <li {{ Request::is('jandje/rollen') || Request::is('jandje/rollen/*')  ? 'class=active' : '' }}>
            
          </li>
        </ul>
      </li>
      <!-- END TWO LEVEL MENU -->     
    </ul>
    <!-- END SIDEBAR MENU -->
  </div>
</div>