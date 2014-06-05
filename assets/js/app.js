$( 'iframe' ).wrap( '<div class="wrapper wrapper-video"></div>' );

$(function bootstrapHeadSpace() {
  'use strict';
  var target = '.navbar-fixed-top';
  $(target).addClass('transition');
  var position = $(window).scrollTop();

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if(scroll <= position || scroll < 200) {
      $(target).addClass('up').removeClass('down');
    } else {
      $(target).addClass('down').removeClass('up');
    }
    position = scroll;
  });
});
