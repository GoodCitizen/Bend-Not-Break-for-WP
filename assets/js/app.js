$( 'iframe' ).wrap( '<div class="wrapper wrapper-video"></div>' );
/*
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
*/
(function ($) {
  // Mobile nav toggle
  $('.nav-toggle').click(function() {
    var navToggleText = $('.nav-wrapper').is(':visible') ? 'menu' : 'close menu';
    $(this).text(navToggleText);
    $(this).toggleClass('active');
    $('.nav-wrapper').toggleClass('active');
    return false;
  });

  $("#more-less-options-button").click(function() {
       var txt = $("#extra-options").is(':visible') ? 'more options' : 'less options';
       $("#more-less-options-button").text(txt);
       $("#extra-options").slideToggle();
  });

  // Mobile nav accordion
  $('.mobile-nav .nav-title').on('click',function(){
    var $this = $(this),
        $navList = $this.next('.nav-list');

    // Close any other open .nav-lists
    $('.mobile-nav .nav-title').not($this).removeClass('active');
    $('.nav-list').not($navList).removeClass('active');

    // Toggle the active class on .nav-titles and .nav-lists
    if (Modernizr.mq('(max-width: 480px)')) {
      $this.toggleClass('active');
      $navList.toggleClass('active');
    }

    return false;
  });
}(jQuery));
