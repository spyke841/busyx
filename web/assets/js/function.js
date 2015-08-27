
$(document).ready(function(){
  $('#nav-icon').click(function(e){
    e.preventDefault();
    if ($('#rideau').length > 0) {
      $('#rideau').remove();
    } else {
      $('body').prepend('<div id="rideau">rideau</div>');
    }
    $(this).toggleClass('open');
    $(this).toggleClass('slide_right');
    $("#aside").toggleClass("left");
  });

  $("#aside a").click(function(event){
    if($(this).next('ul').length){
      event.preventDefault();
      $(this).next().toggle('fast');
      $(this).children('i:last-child').toggleClass('fa-caret-down fa-caret-left');
    }
  });
  $(window).scroll(function(e) {
    var dist = $( window ).scrollTop();
    $('#aside').css('height', $(document).height());
    $('#aside nav').css({paddingTop: dist});
  });

  var code_to_copy = $('.code_to_copy');
  for (var i = 0; i < code_to_copy.length; i++) {
    var clientTarget = new ZeroClipboard( $("#target-to-copy_" + i));
  }
  $('button.code_to_copy').click(function(){
    rel_copy = $(this).attr('rel');
    // console.log(rel_copy);
    $('.' + rel_copy).html('<br>code copié').fadeIn().delay(500).fadeOut();
  });
  $('.view_code').click(function(){
    // console.log($(this).attr('rel'));
    if ($('#' + $(this).attr('rel')).is(":visible")) {
      $('#' + $(this).attr('rel')).fadeOut();
    }
    else {
      $('#' + $(this).attr('rel')).fadeOut();
    }
    // $('#' + $(this).attr('rel')).toggleClass('cacher');
  })

});
