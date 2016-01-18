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
      <!-- BEGIN HEADER RIGHT SIDE SECTION -->
      <div class="pull-right"> 
        <div class="chat-toggler">  
          <!-- BEGIN NOTIFICATION CENTER -->
          <a href="#" class="dropdown-toggle" id="user-options" data-placement="bottom" data-content="" data-toggle="dropdown" data-original-title="Notifications">
            <div class="user-details"> 
              <div class="username">
                {!! $user->voornaam !!}<span class="bold">&nbsp;{!! $user->achternaam !!}</span>                 
              </div>            
            </div> 
            <div class="iconset"></div>
          </a>  
          <div id="notification-list" style="display:none">
            <div style="width:300px">
              <!-- BEGIN NOTIFICATION MESSAGE -->
              <div class="notification-messages info">
                <div class="user-profile">
                  <img src="{!! url($user->afbeelding) !!}" alt="" data-src="{!! url($user->afbeelding) !!}" data-src-retina="{!! url($user->afbeelding) !!}" width="35" height="35">
                </div>
                
                <div class="clearfix"></div>                  
              </div>
              <!-- END NOTIFICATION MESSAGE --> 
            </div>        
          </div>
          <!-- END NOTIFICATION CENTER -->
          <!-- BEGIN PROFILE PICTURE -->
          <div class="profile-pic"> 
            <img src="{!! url($user->afbeelding) !!}" alt="" data-src="{!! url($user->afbeelding) !!}" data-src-retina="{!! url($user->afbeelding) !!}" width="35" height="35" /> 
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
              <li><a href="#"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Bewerk profiel</a></li>
              <li class="divider"></li>                
              <li><a href="{!! action('Admin\AdminController@getLogout') !!}"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Uitloggen</a></li>
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