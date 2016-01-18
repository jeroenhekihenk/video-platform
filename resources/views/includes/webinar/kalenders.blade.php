<h4>{!! $hetwebinar->webinarkalender->first()->kalender_titel !!}</h4>
<div class="col-md-4">
  <div class="form-group col-md-12 ical agenda">
    <a href="{!! url($hetwebinar->webinarkalender->first()->ical) !!}">
      <img src="http://www.digitusmarketing.nl/uploads/webinar/icalendar.png" alt="iCalendar">
    </a>
    <p>iCal</p>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group col-md-12 outlook agenda">
    <a href="{!! url($hetwebinar->webinarkalender->first()->outlook) !!}">
      <img src="http://www.digitusmarketing.nl/uploads/webinar/outlook.png" alt="Outlook">
    </a>
    <p>Outlook</p>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group col-md-12 google-calendar agenda">
    <a href="{!! url($hetwebinar->webinarkalender->first()->google_calendar) !!}" target="_blank">
      <img src="http://www.digitusmarketing.nl/uploads/webinar/Google-logo-2013.png" alt="Google Calendar">
    </a>
    <p>Google Calendar</p>
  </div>
</div>