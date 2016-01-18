@extends('layouts.backend')

@section('meta')
@include('includes.meta.noindexnofollow')
@stop

@section('pixels')
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
			<h3>{!! $member->voornaam !!} {!! $member->achternaam !!}</h3>    
		</div>
		<!-- END PAGE TITLE -->
		<!-- BEGIN PlACE PAGE CONTENT HERE -->

		<div class="row">
			<div class="col-md-8 col-sm-8 col-md-offset-2">
				<div class="grid simple horizontal blue">
					<div class="grid-title">
						<h4>Profiel gegevens bewerken</h4>
					</div>
					<div class="grid-body">
						{!! Form::open(array('action'=>['Member\MemberProfileController@updateProfile',$member->id], 'files'=>true)) !!}
						<div class="col-md-4 col-sm-4">
							<h4>Profiel foto</h4>
							<div class="form-group">
								@if($member->afbeelding != '' || null)
								<div class="preview-afbeelding">
									<img src="{!! url($member->afbeelding) !!}" class="post-preview" alt="">
									<div class="bewerk-afbeelding">
										<a class="bewerk-afbeelding"><span class="fa fa-camera"></span> Bewerk afbeelding</a>
									</div>
								</div>
								<div class="nieuw-afbeelding" style="display:none;">
									{!! Form::file('afbeelding', array('style'=>'border:0 none;')) !!}
								</div>
								@else
								<div class="nieuw-afbeelding">
									{!! Form::file('afbeelding', array('style'=>'border:0 none;')) !!}
								</div>
								@endif
							</div>
							<div class="form-group">
								<b>Klantnummer:</b> {!! $member->klantnummer !!}
							</div>
						</div>
						<div class="col-md-8 col-sm-8">
							<h4>Informatie:</h4> 
							<div class="gegevens">
								<div class="form-group">
									{!! Form::label('voornaam', 'Voornaam:') !!}
									{!! Form::text('voornaam', $member->voornaam, array('class'=>'form-control')) !!}
								</div>
								<div class="form-group">
									{!! Form::label('achternaam', 'Achternaam:') !!}
									{!! Form::text('achternaam', $member->achternaam, array('class'=>'form-control')) !!}
								</div>
								<div class="form-group">
									{!! Form::label('email', 'Emailadres:') !!}
									{!! Form::email('email', $member->email, array('class'=> 'form-control')) !!}
								</div>
							</div>
	 					</div>
	 					{{-- <a href="{!! action('Member\MemberProfileController@editPassword', $member->id) !!}" class="btn btn-warning">Wachtwoord wijzigen</a> --}}
 						{!! Form::submit('Wijzigen', array('class'=>'btn btn-success pull-right')) !!}
						{!! Form::close() !!}
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
@include('includes.member.footer.mainfooter')
@stop

@section('footerscript')

@stop