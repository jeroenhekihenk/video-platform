<div class="container" id="intro">
  <div class="col-md-10 col-md-offset-1">
    <h4>{!! $hetwebinar->titel !!}</h4>
    <div class="col-md-12">
      <h1>{!! $hetwebinar->slogan !!}</h1>
      <div class="col-md-5" style="padding:45px 15px;">
        <h5>{!! $hetwebinar->aanmeld_header_titel !!}</h5>
      </div>
      <div class="col-md-7">
        <h2 style="color:white;font-weight:600;">Jouw hosts:</h2>
        @foreach($hosts as $host)
        <div class="col-md-6 col-sm-6 col-xs-6 host">
          <img src="{!! url($host->afbeelding) !!}" alt="{!! $host->voornaam !!} {!! $host->achternaam !!}">
          <h3>{!! $host->voornaam !!} {!! $host->achternaam !!}</h3>
          <h6>- {!! $host->functie !!}</h6>
        </div>
        @endforeach
      </div>
      <div class="col-md-12">
        <center><button class="btn demo-button aanmelden-seminar">Direct Aanmelden</button></center>
      </div>
    </div>
  </div>
</div>