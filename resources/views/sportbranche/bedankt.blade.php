@extends('layouts.fullwidth')

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	{!! Html::style('/css/salespage.css') !!}
@stop

@section('meta')
	@include('includes.meta.indexfollow')
@stop

@section('pixels')
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '712938138769005');
fbq('track', 'PageView');
fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=712938138769005&ev=PageView&noscript=1" /></noscript>
@stop

@section('menu')
<div id="menubars">
	@include('includes.menus.logomenu')
</div>
@stop

@section('content')
		@if(Session::has('message'))
        <div class="col-md-12">
          <div class="alert alert-success">{!! Session::get('message') !!}</div>
        </div>
        @endif
        @if($errors->any())
        <div class="alert alert-danger">
        	<p>Er zijn fouten in het formulier opgetreden:</p>
        	<ul>
        		@foreach($errors->all() as $error)
        		<li>{!! $error !!}</li>
        		@endforeach
        	</ul>
        </div>
        @endif
	</div> <!-- / col-md-12 col-lg-12 col-xs-12 col-sm-12 -->
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
        <h1>Bedankt voor je aanvraag!</h1>
        <h3>Rogier zal binnen 2 werkdagen telefonisch contact met je opnemen, zodat je zo snel mogelijk aan de slag kunt!</h3>
            <br>
            <br>
            <br>
    </div>

    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="text-align:center;">
        <h2>Vergeet ons niet te liken op Facebook!</h2>
        <div class="fb-page" data-href="https://www.facebook.com/digitusmarketing" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/digitusmarketing"><a href="https://www.facebook.com/digitusmarketing">Digitus Marketing</a></blockquote></div></div>
         <br>
        <br>
        <br>
    </div>


    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

        <h5>Zie hieronder een aantal advertenties van ons.</h5>
    </div>
    <div class="clearfix"></div>
        <hr>

    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

        <h4>Carousel Ads:</h4>
        <img src="http://www.digitusmarketing.nl/images/media/Facebook Carousel Ad 1.png" alt="Facebook Carousel Ad">
        <img src="http://www.digitusmarketing.nl/images/media/Facebook Carousel Ad 2.png" alt="Facebook Carousel Ad">

            <hr>

        <h4>Link Ads:</h4>
        <img src="http://www.digitusmarketing.nl/images/media/Facebook Link Ad 1.png" alt="Facebook Link Ad">
        <img src="http://www.digitusmarketing.nl/images/media/Facebook Link Ad 2.png" alt="Facebook Link Ad">
        <img src="http://www.digitusmarketing.nl/images/media/Facebook Link Ad 3.png" alt="Facebook Link Ad">
        <img src="http://www.digitusmarketing.nl/images/media/Facebook Link Ad 4.png" alt="Facebook Link Ad">
        <img src="http://www.digitusmarketing.nl/images/media/Facebook Link Ad 5.png" alt="Facebook Link Ad">
        <img src="http://www.digitusmarketing.nl/images/media/Facebook Link Ad 6.png" alt="Facebook Link Ad">
        <img src="http://www.digitusmarketing.nl/images/media/Facebook Link Ad 7.png" alt="Facebook Link Ad">
        <img src="http://www.digitusmarketing.nl/images/media/Facebook Link Ad 8.png" alt="Facebook Link Ad">

            <hr>

        <h4>Link Ads Mobiel:</h4>
        <img src="http://www.digitusmarketing.nl/images/media/Facebook Link Ad Mobiel 1.png" alt="Facebook Link Ad Mobiel">
        <img src="http://www.digitusmarketing.nl/images/media/Facebook Link Ad Mobiel 2.png" alt="Facebook Link Ad Mobiel">

            <hr>

        <h4>Video Ads:</h4>
        <img src="http://www.digitusmarketing.nl/images/media/Facebook Video Ad 1.png" alt="Facebook Video Ad">    



    </div>

</div> <!-- / container -->
</div> <!-- / #page -->

@stop

@section('sidebar')

@stop

@section('footer')
	<!-- @include('includes.footer.footer-map') -->
@stop

@section('footerscript')
	@include('includes.forms.belmijterugformulier')
	{!! Html::script('js/jquery-1.11.2.js') !!}
	{!! Html::script('js/parallax.min.js') !!}
	{!! Html::script('js/salespage.js') !!}
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@stop