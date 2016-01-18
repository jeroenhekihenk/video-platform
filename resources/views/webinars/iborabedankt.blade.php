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
          <h2 class="normal">Aanmelding succesvol!</h2>
        </div>
      </div>
      <div class="tiles grey no-padding col-md-7 col-md-offset-2">
         @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @if(Session::has('message'))
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40 xs-p-r-10">
          <div class="alert alert-success">{!! Session::get('message') !!}</div>
        </div>
        @endif
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40 xs-p-r-10 text-black">
          <div class="form-group col-md-12">
            <h3>Jouw plekje is gereserveerd! :)</h3>
            <p>Voeg dit exclusieve webinar toe aan jouw agenda en zorg er voor dat je het niet mist! </p>
          </div>
          <div class="col-md-4">
            <div class="form-group col-md-12 ical agenda">
              <a href="http://www.digitusmarketing.nl/uploads/webinar/Facebook Webinar - Digitus Marketing.ics">
                <img src="http://www.digitusmarketing.nl/uploads/webinar/icalendar.png" alt="iCalendar">
              </a>
              <p>iCal</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group col-md-12 outlook agenda">
              <a href="http://www.digitusmarketing.nl/uploads/webinar/Facebook Webinar - Digitus Marketing.ics">
                <img src="http://www.digitusmarketing.nl/uploads/webinar/outlook.png" alt="Outlook">
              </a>
              <p>Outlook</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group col-md-12 google-calendar agenda">
              <a href="https://www.google.com/calendar/event?action=TEMPLATE&text=Facebook+Webinar+-+Digitus+Marketing&dates=20151021T170000Z/20151021T180000Z&details=Wij+verheugen+ons+al+op+het+webinar!%0A+%0AHoud+je+mailbox+in+de+gaten,+we+sturen+je+tijdig+een+email+met+daarin+alle+informatie+dat+nodig+is+om+het+webinar+bij+te+wonen.%0A+%0AWe+zien+je+snel!%0A+%0A-+Parsifal+Tritsch+en+Rogier+van+Voorst&location=http://www.digitusmarketing.nl/VPNO/webinar" target="_blank">
                <img src="http://www.digitusmarketing.nl/uploads/webinar/Google-logo-2013.png" alt="Google Calendar">
              </a>
              <p>Google Calendar</p>
            </div>
          </div>
          <div class="col-md-12">
            <p>Er is een mail naar je onderweg met alle benodigde gegevens!</p>
          </div>
          <div class="clearfix"></div>
        </div> 
      </div>   
    </div>
  </div>
@stop

@section('footerscript')
@stop