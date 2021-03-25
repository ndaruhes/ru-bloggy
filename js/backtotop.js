$(document).ready(function() {
  $('.btt').on('click', function() {
    $('body, html').animate({
      scrollTop: 0
    }, 800);
  });
  $(window).scroll(function() {
    var $window = $(this).scrollTop();
    var btt = $('.btt');
    if ($window > 500) {
      btt.css('opacity', '1');
    } else {
      btt.css('opacity', '0');
    }
  });
});
