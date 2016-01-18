<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse"> 
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
    <!-- BEGIN NAVIGATION HEADER -->
    <div class="header-seperation"> 
      <!-- BEGIN MOBILE HEADER -->
      <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">  
        <li class="dropdown">
          <a id="main-menu-toggle" href="#main-menu" class="">
            <div class="iconset top-menu-toggle-white"></div>
          </a>
        </li>    
      </ul>
      <!-- END MOBILE HEADER -->
      <!-- BEGIN LOGO --> 
      <a href="#">
        <img src="{!! url('/images/digitus/Digitus-logo-wit.png') !!}" class="logo" alt="" data-src="{!! url('/images/digitus/Digitus-logo-wit.png') !!}" data-src-retina="{!! url('/images/digitus/Digitus-logo-wit.png') !!}" width="106"/>
      </a>
      <!-- END LOGO --> 
    </div>
    <!-- END NAVIGATION HEADER -->
    <!-- BEGIN CONTENT HEADER -->
    <div class="header-quick-nav"> 
      <!-- BEGIN HEADER LEFT SIDE SECTION -->
      <div class="pull-left"> 
        <!-- BEGIN SLIM NAVIGATION TOGGLE -->
        <ul class="nav quick-section">
          <li class="quicklinks">
            <a href="#" class="" id="layout-condensed-toggle">
              <div class="iconset top-menu-toggle-dark"></div>
            </a>
          </li>
        </ul>
        <!-- END SLIM NAVIGATION TOGGLE -->           
      </div>
      <!-- END HEADER LEFT SIDE SECTION -->
      @if($member->cursussen->contains(1))
      <!-- If cursus 1, Laat tab-app status zien -->
      <div class="pull-left">
        <div class="tab-app-status">
          Facebook Tab App Status: 
          <a href="{!! url($member->tab_app_link) !!}" target="_blank">
            @if($member->tab_app == 'Bezig') 
              <span class="label label-info">{!! $member->tab_app !!}</span>
            @elseif($member->tab_app == 'Offline')
              <span class="label label-danger">{!! $member->tab_app !!}</span>
            @elseif($member->tab_app == 'Geen')
              <span class="label label-warning">{!! $member->tab_app !!}</span>
            @elseif($member->tab_app == 'Online')
              <span class="label label-success"><span class="fa fa-globe"></span> {!! $member->tab_app !!}</span>
            @endif
          </a>
        </div>
        <?php $string = $member->tab_app_link;
              $arr = explode(',', $string);
        ?>
        <div class="tab-app-link">
          Facebook Tab App URL: @foreach($arr as $ar)<span class="label">{!! $ar !!}</span> &nbsp;@endforeach
        </div>
      </div>
      <!-- endif cursus 1, laat tab-app status zien -->
      @endif
      <!-- BEGIN HEADER RIGHT SIDE SECTION -->
      <div class="pull-right"> 
        <div class="chat-toggler">  
          <!-- BEGIN NOTIFICATION CENTER -->
          <a href="#" class="dropdown-toggle" id="user-options" data-placement="bottom" data-content="" data-toggle="dropdown" data-original-title="Notifications">
            <div class="user-details"> 
              <div class="username">
                {!! $member->voornaam !!}<span class="bold">&nbsp;{!! $member->achternaam !!}</span>                 
              </div>            
            </div> 
            <div class="iconset"></div>
          </a>  
          <!-- END NOTIFICATION CENTER -->
          <!-- BEGIN PROFILE PICTURE -->
          <div class="profile-pic"> 
            @if($member->afbeelding != null || '')
              <img src="{!! url($member->afbeelding) !!}" alt="{!! $member->voornaam !!} {!! $member->achternaam !!}" data-src="{!! url($member->afbeelding) !!}" data-src-retina="{!! url($member->afbeelding) !!}" width="35" height="35" /> 
            @else
              <img alt="" width="35" height="35" /> 
            @endif
          </div>  
          <!-- END PROFILE PICTURE -->          
        </div>
        <!-- BEGIN HEADER NAV BUTTONS -->
        <ul class="nav quick-section">
          <!-- BEGIN SETTINGS -->
          <li class="quicklinks"> 
            <a data-toggle="dropdown" class="dropdown-toggle pull-right" href="#" id="user-options">            
              <div class="iconset top-settings-dark"></div>   
            </a>
            <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="user-options">
              {{-- <li><a href="#">Normal Link</a></li> --}}
              <li><a href="{!! action('Member\MemberProfileController@editProfile',$member->id) !!}"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Bewerk profiel</a></li>
              {{-- <li><a href="{!! action('Member\MemberProfileController@editPassword',$member->id) !!}"><i class="fa fa-lock"></i>&nbsp;&nbsp;Wijzig wachtwoord</a></li> --}}
              <li class="divider"></li>                
              <li><a href="{!! action('Member\MemberAuthController@getLogout') !!}"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Uitloggen</a></li>
            </ul>
          </li>
          <!-- END SETTINGS -->

        </ul>
        <!-- END HEADER NAV BUTTONS -->
      </div>
      <!-- END HEADER RIGHT SIDE SECTION -->
    </div> 
    <!-- END CONTENT HEADER --> 
  </div>
  <!-- END TOP NAVIGATION BAR --> 
</div>
<!-- END HEADER