$.fn.infobulle = function( txt, color){
	var hauteur = this.outerHeight(true),
	distance = this.position(),
	classname = this.attr('class');
  if (!color) {
    color = 'normal';
  } else {
    color = color;
  }
  // console.log(hauteur);
	this.hover(function() {
      $(this).css('position', 'relative');
			$('.infobulle').remove();
			$(this).append('<div class="infobulle" style="top:-5px;left:-5px;"></div>');
			$('.infobulle').append('<div class="infobulle_inner ' + color + '">' + txt + '</div>');
	}, function() {
		$('.infobulle').remove();
	});
	return this;
};
$(document).ready(function(){
  $('.code_to_copy').infobulle('copier le code');

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

  var codeToCopy = new ZeroClipboard($('.code_to_copy'));
  codeToCopy.on( "ready", function( readyEvent ) {
    // alert( "ZeroClipboard SWF is ready!" );

    codeToCopy.on( "aftercopy", function( event ) {
      // `this` === `codeToCopy`
      // `event.target` === the element that was clicked
      // event.target.style.display = "none";
      // console.log($(event.target).attr('rel'));
      $('.' + $(event.target).attr('rel')).html('<br>code copié').fadeIn( 300 ).delay( 800 ).fadeOut( 400 );
    } );
  } );

  $('.view_code').click(function(){
    // console.log($(this).attr('rel'));
    $('#' + $(this).attr('rel')).toggleClass('cacher');
  });

});
