@extends('layouts.backend')

@section('meta')
@include('includes.meta.noindexnofollow')
@stop

@section('pixels')
@stop

@section('titel')
{!! $cursus->naam !!}
@stop

@section('headernav')
@include('includes.member.header.nav')
@stop

@section('menu')
@include('includes.member.menus.mainmenu')
@stop

@section('content')
<!-- BEGIN PAGE CONTAINER-->
<div class="page-content"> 
	<div class="content">  
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">  
			<h3>{!! $cursus->naam !!}</h3>    
		</div>
		<div class="grid simple vertical green">
			<div class="grid-body">
				{!! $cursus->content !!}
			</div>
		</div>
		<!-- END PAGE TITLE -->
		<div class="col-md-12 col-sm-12">
			<h3>Klik op één van de onderstaande buttons om direct naar dit hoofdstuk te gaan.</h3>
			@foreach($hoofdstukken as $hoofdstuk)
				<button class="btn btn-success hoofdstuk-button" data-id="{!! $hoofdstuk->shortname !!}" id="{!! $hoofdstuk->shortname !!}" style="margin-bottom:5px;"><span class="fa fa-chevron-right"></span> {!! $hoofdstuk->naam !!}</button>
			@endforeach
		</div>
		<div class="clearfix"></div>
		<hr>
		<!-- BEGIN PlACE PAGE CONTENT HERE -->
			@if($cursus->id == '1' && $member->cursussen->contains(1) && $member->benodigd_id == null)
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="grid simple horizontal green">
						<div class="grid-title no-border">
							<h3>We hebben nog wat nodig!</h3>
						</div>
						<div class="grid-body no-border">
							<p>Voordat wij bezig kunnen met je Facebook tab-app, hebben wij nog enkele bestanden en gegevens van je sportschool nodig.</p>
							<p>Klik op onderstaande button om deze benodigdheden aan te leven en gelijk te beginnen met het bekijken van de video's!</p>
							<a href="{!! action('Member\MemberBenodigdhedenController@create') !!}" class="btn btn-success">Bestanden aanleveren</a>
						</div>
					</div>
				</div>
			</div>
			@else
				@foreach($hoofdstukken as $hoofdstuk)
				<div class="row hoofdstuk" id="{!! $hoofdstuk->shortname !!}">
					<div class="col-md-12">
						<h2 class="hoofdstuk-titel">{!! $hoofdstuk->naam !!}</h2>
						<hr>
						@foreach($hoofdstuk->videos as $video)
						{{-- @foreach($videos as $video) --}}
							@if($member->plan_id == '2')
								@if($video->plan_id == '3')
								{{-- Member met gratis video --}}
								<div class="col-md-4 col-sm-6 video">
									<div class="grid simple horizontal blue">
										<div class="grid-title">
											<h4>{!! $video->titel !!}</h4>
											{{-- <small>{!! $video->plan->naam !!}</small> --}}
										</div>
										@if($video->link != '')
										<div class="grid-body">
											{!! $video->link !!}
										</div> 
										@endif
										@if($video->tool1_tekst != null)
										<div class="grid-body">
											<ul>
												@if($video->tool1_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool1_link) !!}" target="_blank">{!! $video->tool1_tekst !!}</a>
													</li>
												@endif
												@if($video->tool2_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool2_link) !!}" target="_blank">{!! $video->tool2_tekst !!}</a>
													</li>
												@endif
												@if($video->tool3_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool3_link) !!}" target="_blank">{!! $video->tool3_tekst !!}</a>
													</li>
												@endif
												@if($video->tool4_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool4_link) !!}" target="_blank">{!! $video->tool4_tekst !!}</a>
													</li>
												@endif
											</ul>
										</div>
										@endif
									</div>
								</div>
								@elseif($video->plan_id == '2')
								{{-- Member met betaalde video --}}
								<div class="col-md-4 col-sm-6 video">
									<div class="grid simple horizontal green">
										<div class="grid-title">
											<h4>{!! $video->titel !!}</h4>
											{{-- <small>{!! $video->plan->naam !!}</small> --}}
										</div>
										<div class="grid-body">
											<div style="min-height:285px;width:100%;background-image:url('../../images/digitus/overlay.png'); background-repeat:repeat; padding: 50px 25px;text-align:center;">
												<h2 style="color:white;">Je moet upgraden om deze video te bekijken</h2>
												<p style="color:white;">Neem a.u.b. contact op met: <a href="mailto:jeroen@digitusmarketing.nl&subject=Upgraden Video Cursus" style="color:white;text-decoration:underline;">jeroen@digitusmarketing.nl</a></p>
												{{-- <a href="{!! action('Member\MemberCursussenUpgradeController@create', $cursus->id) !!}" class="btn btn-success">Upgraden!</a> --}}
											</div>
										</div>
										@if($video->tool1_tekst != null)
										<div class="grid-body">
											<ul>
												@if($video->tool1_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool1_link) !!}" target="_blank">{!! $video->tool1_tekst !!}</a>
													</li>
												@endif
												@if($video->tool2_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool2_link) !!}" target="_blank">{!! $video->tool2_tekst !!}</a>
													</li>
												@endif
												@if($video->tool3_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool3_link) !!}" target="_blank">{!! $video->tool3_tekst !!}</a>
													</li>
												@endif
												@if($video->tool4_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool4_link) !!}" target="_blank">{!! $video->tool4_tekst !!}</a>
													</li>
												@endif
											</ul>
										</div>
										@endif
									</div>
								</div>
								@endif
							@endif
							@if($member->plan_id == '4')
								@if($video->plan_id == '3')
								{{-- Member Webinar met gratis video --}}
								<div class="col-md-4 col-sm-6 video">
									<div class="grid simple horizontal blue">
										<div class="grid-title">
											<h4>{!! $video->titel !!}</h4>
											{{-- <small>{!! $video->plan->naam !!}</small> --}}
										</div>
										<div class="grid-body">
											{!! $video->link !!}
										</div> 
										@if($video->tool1_tekst != null)
										<div class="grid-body">
											<ul>
												@if($video->tool1_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool1_link) !!}" target="_blank">{!! $video->tool1_tekst !!}</a>
													</li>
												@endif
												@if($video->tool2_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool2_link) !!}" target="_blank">{!! $video->tool2_tekst !!}</a>
													</li>
												@endif
												@if($video->tool3_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool3_link) !!}" target="_blank">{!! $video->tool3_tekst !!}</a>
													</li>
												@endif
												@if($video->tool4_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool4_link) !!}" target="_blank">{!! $video->tool4_tekst !!}</a>
													</li>
												@endif
											</ul>
										</div>
										@endif
									</div>
								</div>
								@elseif($video->plan_id == '2')
								{{-- Member Webinar met betaalde video --}}
								<div class="col-md-4 col-sm-6 video">
									<div class="grid simple horizontal green">
										<div class="grid-title">
											<h4>{!! $video->titel !!}</h4>
											{{-- <small>{!! $video->plan->naam !!}</small> --}}
										</div>
										<div class="grid-body">
											{!! $video->link !!}
										</div>
										@if($video->tool1_tekst != null)
										<div class="grid-body">
											<ul>
												@if($video->tool1_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool1_link) !!}" target="_blank">{!! $video->tool1_tekst !!}</a>
													</li>
												@endif
												@if($video->tool2_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool2_link) !!}" target="_blank">{!! $video->tool2_tekst !!}</a>
													</li>
												@endif
												@if($video->tool3_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool3_link) !!}" target="_blank">{!! $video->tool3_tekst !!}</a>
													</li>
												@endif
												@if($video->tool4_tekst != null)
													<li class="col-md-6">
														<a href="{!! url($video->tool4_link) !!}" target="_blank">{!! $video->tool4_tekst !!}</a>
													</li>
												@endif
											</ul>
										</div>
										@endif
									</div>
								</div>
								@endif
							@endif
							
						@endforeach
						</div>
					</div>
				@endforeach
			@endif
		
		<!-- END PLACE PAGE CONTENT HERE -->

	</div>
</div>
<!-- END PAGE CONTAINER -->

@stop

@section('footer')
@include('includes.member.footer.mainfooter')
@stop

@section('footerscript')
<script>
	$(document).ready(function(){
		$('button.hoofdstuk-button').on('click', function(){
			var id = $(this).data('id');
			$('html,body').animate({
				scrollTop: $('div#'+id).offset().top
			}, 2000);
		});
	});
</script>
@stop