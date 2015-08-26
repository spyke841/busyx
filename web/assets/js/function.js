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
});
