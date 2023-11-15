$(document).ready(function () {
    if (jQuery) {
      // jQuery is loaded
      // ===== Scroll to Top ==== 
      $(window).scroll(function () {
        if ($(this).scrollTop() >= 150) {        // If page is scrolled more than 50px
          $('#return-to-top').show(1200);    // Fade in the arrow
        } else {
          $('#return-to-top').hide(1200);   // Else fade out the arrow
        }
      });
    } else {
      // jQuery is not loaded
    }  

  });