@extends('layouts.backend')

@section('css')
<style>
body{
  background-image: url('http://www.digitusmarketing.nl/images/site/bg/ibora-webinar.jpg');
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
}
.login-container{
  margin-bottom:5%;
}
.demo-button {
    background: #ff6f21 none repeat scroll 0 0 !important;
    border-color: #b74d13 !important;
    color: white !important;
    font-size: 12pt !important;
    font-weight: bold !important;
    padding: 9px 30px !important;
    text-transform: uppercase;
}
.demo-button:hover {
    background: #fc762d none repeat scroll 0 0 !important;
    color: white !important;
}
.demo-button:active, .demo-button:focus {
    border-top: 2px solid #b74d13 !important;
    color: white !important;
    padding: 8px 30px 9px !important;
}

/*
|-----------------------------------------------------------------------
| MOBILE PORTRAIT
|-----------------------------------------------------------------------
*/

@media only screen and (min-width:220px) and (max-width:680px) and (orientation:portrait) {
  .p-l-40,
  .xs-p-l-10,
  .p-r-40,
  .xs-p-r-10 {
    padding-left:15px;
    padding-right:15px;
  }
  #webinar {
    height: auto !important;
    width: 100%;
  }
}

/*
|-----------------------------------------------------------------------
| MOBILE LANDSCAPE
|-----------------------------------------------------------------------
*/

@media screen and (min-width:321px) and (max-width:768px) and (orientation:landscape) {
  .p-l-40,
  .xs-p-l-10,
  .p-r-40,
  .xs-p-r-10 {
    padding-left:15px;
    padding-right:15px;
  }
  #webinar {
    height: auto !important;
    width: 100%;
  }
}

</style>
@stop

@section('content')
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '712938138769005');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=712938138769005&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
  <div class="container">
    <div class="row login-container">  
      <div class="col-md-12 tiles white no-padding">
        <div class="p-t-30">
          <img src="{!! url('/images/digitus/DIGITUS_logo_def.png') !!}" alt="Logo Digitus Marketing" class="center">
        </div>
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40 xs-p-r-10"> 
          <h2 class="normal">Herhaling Exclusief Facebook Marketing Webinar</h2>
        </div>
      </div>
      <div class="tiles grey col-md-12 p-b-20">
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
        <div class="col-md-12">
          <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40 xs-p-r-10">
            <h2>Welkom bij de herhaling van ons webinar!</h2>
            <hr>
            <style>
            iframe#webinar{
              max-width:100%;
              width:100%;
              margin: 0 auto;
              float:none;
              display:block;
            }
            .login-container {
              margin-top: 5%;
            }
            </style>
            <iframe id="webinar" height="600" src="https://youtube.com/embed/lbiAdrFQQcI?modestbranding=1&showinfo=0" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="col-md-12" style="text-align:center;">
          <h2><a href="{!! action('Webinar\WebinarController@getHetAanbod') !!}" target="_blank">www.digitusmarketing.nl/21oktober</a></h2>
          <div class="clearfix"></div>
          <hr>
          <b style="color:black;">( Laatste kans t/m zondag 25-10-2015 23:59 )</b>
        </div>
        {{-- <div class="col-md-12">
          <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40 xs-p-r-10">
            <h2>Chat</h2>
            <hr>
            <iframe src="https://tlk.io/digitusmarketing" frameborder="0" height="450" id="webinar"></iframe>
          </div>
        </div> --}}
        {{-- <div class="magniet p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40 xs-p-r-10" style="display:none;overflow:visible;">
          <h2>Nu is het 10:20 op 29 september 2015!!</h2>
          <a href="webinar-aanbod" class="btn demo-button">Bekijk aanbod!</a>
        </div> --}}
      </div>   
    </div>
  </div>
@stop

@section('footerscript')
<script>
// $(document).ready(function(){
//   var nu = new Date($.now());
//   var anderedate = new Date('29 Sep 2015 13:30');
  
//   window.setInterval(function(){
//     if(nu > anderedate){
//       $('.magniet').slideDown();
//       $('.magniet').css('overflow','visible');
//     } else {
//       console.log('nog eventjes wachten');
//     }
//   }, 10000);
// });
</script>
@stop