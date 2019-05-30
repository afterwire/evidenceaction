
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};
jQuery(function() {scrollFunction()});
function scrollFunction() {

  if (document.documentElement.scrollTop > 250) {
    jQuery("body").addClass("scrolling");
  } else if (document.documentElement.scrollTop  < 30) {
    jQuery("body").removeClass("scrolling");
  }

}
