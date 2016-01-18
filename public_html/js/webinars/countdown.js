$(".timer")
    .countdown(webinarcountdowntijd, function(event) {
      $(this).html(
        event.strftime('<div class="dagen"><p class="cijfer">%-D</p><p class="letter">dagen</p></div><div class="uren"><p class="cijfer">%-H</p><p class="letter">uur</p></div><div class="minuten"><p class="cijfer">%-M</p><p class="letter">minuten</p></div><div class="seconden"><p class="cijfer">%-S</p><p class="letter">seconden</p></div>'));
    });