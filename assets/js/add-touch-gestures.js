/**
 * JS file for adding touch gestures to the image carousel
 * It requires hammer.js
 */

// Make the carousel respond to touch events.
$(document).ready(function() {
  var theCarousel = $('#carousel-example-generic');
  // Create a simple 'hammer' instance
  var hammer = new Hammer(theCarousel[0]); // The element is passed to hammer, not the jquery object.
  // Move to the next slide if the carousel is tapped, or moved to the left
  hammer.on('panleft swipeleft', function(ev) {
    console.log('to the left');
    theCarousel.carousel('next');
  });
  // Move to the previous slide if the carousel is moved to the right
  hammer.on('panright swiperight', function(ev) {
    console.log('to the right');
    theCarousel.carousel('prev');
  });
});
 