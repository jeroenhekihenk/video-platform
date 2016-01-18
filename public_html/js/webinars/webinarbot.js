var allGood = true;

function buitenKlik(e){

  $(document).on('click', function(e) {
    var $el = $('.belmijterugformulier');

    if(allGood == true) {

      if($(e.target).is('div.belmijterugformulier') || $(e.target).is('div.belmijterugformulier > div') || $(e.target).is('div.belmijterugformulier > div > *') || $(e.target).is('div.belmijterugformulier > form') || $(e.target).is('div.belmijterugformulier > form > *') || $(e.target).is('input.btn.btn-success') || $(e.target).is('div.belmijterugformulier > hr') || $(e.target).is('div.belmijterugformulier > form > div > input') || $(e.target).is('div.belmijterugformulier > form > div > p') || $(e.target).is('#email-error') || $(e.target).is('#voornaam-error') || $(e.target).is('#achternaam-error') || $(e.target).is('#email-error > p') || $(e.target).is('#voornaam-error > p') || $(e.target).is('#achternaam-error > p')){

      } else {
        $('#belmijterugformulier').fadeOut();
        $('#belmijterugformulier').removeClass("-on");
        allGood = false;
      }
    }
  });
}

$(document).ready(function(){
  $('.aanmelden-seminar').on('click', function(){
    $('#belmijterugformulier').fadeIn();
    $('#belmijterugformulier').addClass("-on");
    $(window).resize(function(){
      $('.belmijterugformulier').css({'margin-top':-Number($('.belmijterugformulier').height() /2 )});
    });

    setTimeout(function(){
      allGood = true;
      buitenKlik();
    },1000);
  });
  $('#MERGE0').focusout(function () {
    $('#email').val($(this).val());
  });
  $('#MERGE1').focusout(function () {
    $('#voornaam').val($(this).val());
  });
  $('#MERGE2').focusout(function () {
    $('#achternaam').val($(this).val());
  });
});

$('form#webinar-aanmelden').submit(function (e) {
  e.preventDefault();

  var $_token = $('#token-download').val();
  var formaction = $('input[type=hidden][name=formaction]').val();

// Verstuur gegevens naar mailchimp
$.ajax({
  type: 'POST',
  url: webinarslug,
  data: $('form#webinar-aanmelden').serialize(),
  dataType: 'json',
  headers: { 'X-XSRF-TOKEN':$_token},

  beforeSend: function() {
    $('#voornaam-error').hide();
    $('#email-error').hide();
    $('#achternaam-error').hide();
  },
  error: function(data){
    console.log(data);
    var responsetext = jQuery.parseJSON(data.responseText);
    $.each(responsetext, function(index, value) {
      if(index == 'voornaam'){
        $('#voornaam-error p').text(value);
        $('#voornaam-error').show();

// console.log(terug.voornaam);
} if(index == 'achternaam'){
  $('#achternaam-error p').text(value);
  $('#achternaam-error').show();
// console.log(terug.achternaam);
} if(index == 'email'){
  $('#email-error p').text(value);
  $('#email-error').show();
// console.log(terug.email);
}
});
  },
  success: function(data){
// Toch nog maar even sturen naar de back-end
$.ajax({
  url: formaction,
  type: 'POST',
  data: $('form#webinar-aanmelden').serialize(),
  dataType: 'jsonp',
  contentType: "application/json; charset=utf-8",
  beforeSend: function() {
    $('div.errors').hide();
  },
  success: function(data){
    if(data['result'] != "success") {
// ERROR
console.log(data['msg']);
$('div.errors').show();
} else {
  console.log(data);
  $('form#webinar-aanmelden').slideUp();
  $('div.titel h2').empty();
  $('div.titel h2').text('Belangrijk!');
  $('div#mc-message').slideDown();
}
}
});
}
});

$('div#close-form').on('click', function(){
  $('#belmijterugformulier').fadeOut("-on");
  $('#belmijterugformulier').removeClass("-on");
  allGood = false;
});
});