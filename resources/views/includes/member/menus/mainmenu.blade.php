<!-- BEGIN SIDEBAR -->
<!-- BEGIN MENU -->
<div class="page-sidebar" id="main-menu"> 
  <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
    @include('includes.member.menus.user')
    <!-- BEGIN SIDEBAR MENU --> 
    <p class="menu-title">BROWSE<span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
    <ul>  
      <!-- BEGIN SELECTED LINK -->
      <li {{ Request::is('member') ? 'class=active' : '' }}>
        <a href="{!! action('Member\MemberIndexController@index') !!}">
          <i class="icon-custom-home"></i>
          <span class="title">Dashboard</span>
          <span class="selected"></span>
          {{-- <span class="badge badge-important pull-right">5</span> --}}
        </a>
      </li>
      <!-- END SELECTED LINK -->
      <!-- BEGIN SELECTED LINK -->
      <li {{ Request::is('member/cursussen') || Request::is('member/cursussen/*') ? 'class=active' : '' }}>
        <a href="{!! action('Member\MemberCursussenController@index') !!}">
          <i class="fa fa-graduation-cap"></i>
          <span class="title">Cursussen</span>
          <span class="selected"></span>
          {{-- <span class="badge badge-important pull-right">5</span> --}}
        </a>
      </li>
      <!-- END SELECTED LINK -->
      {{-- @if($member->cursussen->contains(1) && $member->benodigd_id == null) --}}
      <!-- BEGIN SELECTED LINK -->
      <!-- <li >
        <a href="#">
          <i class="fa fa-exclamation"></i>
          <span class="title">Benodigdheden</span>
          <span class="selected"></span>
        </a>
      </li> -->
      <!-- END SELECTED LINK -->
      {{-- @endif --}}
    </ul>
    <!-- END SIDEBAR MENU -->
  </div>
</div>