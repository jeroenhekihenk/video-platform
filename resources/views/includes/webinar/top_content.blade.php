<div class="col-md-6 hoelaat-wanneer">
  <p>
    <span class="fa fa-calendar"></span> {!! $hetwebinar->deDatum() !!}
  </p>
  <p>
    <span class="fa fa-clock-o"></span> Vanaf {!! $hetwebinar->deTijd() !!} uur
  </p>
</div>
<div class="col-md-6 counter">
  <div class="timer">
    <div class="dagen">
      <p class="cijfer"></p>
      <p class="letter"></p>
    </div>
    <div class="uren">
      <p class="cijfer"></p>
      <p class="letter"></p>
    </div>
    <div class="minuten">
      <p class="cijfer"></p>
      <p class="letter"></p>
    </div>
    <div class="seconden">
      <p class="cijfer"></p>
      <p class="letter"></p>
    </div>
  </div>   
</div>
<div class="clearfix"></div>
<hr>