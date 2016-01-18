<!-- BEGIN MINI-PROFILE -->
<div class="user-info-wrapper"> 
  <div class="profile-wrapper">
  	 @if($member->afbeelding != null || '')
	    <img src="{!! url($member->afbeelding) !!}" alt="" data-src="{!! url($member->afbeelding) !!}" data-src-retina="{!! url($member->afbeelding) !!}" width="69" height="69" />
	 @else
	 	<img alt="" width="69" height="69" />
	 @endif
  </div>
  <div class="user-info">
    <div class="greeting">Welkom</div>
    <div class="username">{!! $member->voornaam !!} <span class="semi-bold">{!! $member->achternaam !!}</span></div>
    <div class="status">Status<a href="#"><div class="status-icon green"></div>Online</a></div>
  </div>
</div>
<!-- END MINI-PROFILE -->