jQuery(document).ready(function($) {
    $('.hamburger').click(function() {
      $(this).toggleClass('open');
      $('.main-menu').toggleClass('show');
    });
  });
  