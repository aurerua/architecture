/**
 * JS file for adding touch gestures to the image carousel
 * It requires hammer.js
 */

// Make the carousel respond to touch events.
$(document).ready(function() {
  var theCarousel = $('#carousel-example-generic');
  // Create a simple 'hammer' instance
  var hammer = new Hammer(theCarousel[0]); // The element is passed to hammer, not the jquery object.
  // Only add touch gestures for touch devices
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
  // Move to the next slide if the carousel is tapped, or swiped to the left
    hammer.on('panleft swipeleft', function(ev) {
        theCarousel.carousel('next');
      });
    // Move to the previous slide if the carousel is swiped to the right
    hammer.on('panright swiperight', function(ev) {
      theCarousel.carousel('prev');
    });
  } else {
    hammer.on('tap', function(ev) {
      theCarousel.carousel('next');
    });
  };
});
 