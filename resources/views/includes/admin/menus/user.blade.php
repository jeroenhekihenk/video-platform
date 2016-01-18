<!-- BEGIN MINI-PROFILE -->
<div class="user-info-wrapper"> 
  <div class="profile-wrapper">
  	@if($user->afbeelding != null || '')
    <img src="{!! url($user->afbeelding) !!}" alt="" data-src="{!! url($user->afbeelding) !!}" data-src-retina="{!! url($user->afbeelding) !!}" width="69" height="69" />
    @else
    <img alt="" width="69" height="69" />
    @endif
  </div>
  <div class="user-info">
    <div class="greeting">Welcome</div>
    <div class="username">{!! $user->voornaam !!} <span class="semi-bold">{!! $user->achternaam !!}</span></div>
    <div class="status">Status<a href="#"><div class="status-icon green"></div>Online</a></div>
  </div>
</div>
<!-- END MINI-PROFILE -->