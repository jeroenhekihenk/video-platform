@if($hetwebinar->webinarrecensies)
<div class="clearfix"></div>
<hr>
@foreach($hetwebinar->webinarrecensies->take(2) as $recensie)
<div class="col-md-6" style="margin:10px auto;">
  <img src="{!! $recensie->url !!}" alt="">
</div>
@endforeach
<div class="clearfix"></div>
@foreach($hetwebinar->webinarrecensies()->skip(2)->take(2)->get() as $recensie)
<div class="col-md-6" style="margin:10px auto;">
  <img src="{!! $recensie->url !!}" alt="">
</div>
@endforeach
<div class="clearfix"></div>
@endif