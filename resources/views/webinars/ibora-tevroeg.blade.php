@extends('layouts.backend')

@section('css')
<style>
body{
  background-image: url("http://www.digitusmarketing.nl/images/site/bg/ibora-webinar.jpg");
  background-position: center center;
}
.login-container{
  margin-bottom:5%;
}
.ical{
    border-color: #ab373a #eee #eee;
}
.google-calendar{
    border-color: #fa9d00 #eee #eee;
}
.outlook {
    border-color: #1473c5 #eee #eee;
}
.agenda {
    background-color: white;
    border-radius: 4px;
    border-style: solid;
    border-width: 4px 1px 1px;
    padding: 15px;
}
.agenda a img {
    display: block;
    margin: 10px auto;
    max-height: 50px;
    max-width: 100%;
}
.agenda p {
    border-top: 1px solid #eee;
    padding-top: 10px;
    text-align: center;
}
</style>

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
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=712938138769005&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
@stop

@section('content')
  <div class="container">
    <div class="row login-container animated fadeInUp">  
      <div class="col-md-7 col-md-offset-2 tiles white no-padding">
        <div class="p-t-30">
          <img src="{!! url('/images/digitus/DIGITUS_logo_def.png') !!}" alt="Logo Digitus Marketing" class="center">
        </div>
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40 xs-p-r-10"> 
          <h2 class="normal">Oeps! Je bent te vroeg.</h2>
            <p>De herhaling van het exclusieve Facebook webinar zal online staan op 24 oktober vanaf 12:00.</p>
            <p>Tot dan!</p>
        </div>
      </div>
    </div>
  </div>
@stop

@section('footerscript')
@stop