import { Carousel } from 'bootstrap'
import lightbox from 'lightbox2';

const slideCarousel = document.querySelector('#slideHome')
if (slideCarousel) {
  $('.carousel-inner .carousel-item:first-child').addClass('active');

  new bootstrap.Carousel(slideCarousel, {
    interval: 5000,
    pause: true
  })
}

lightbox.option({
  'resizeDuration': 500,
  'wrapAround': true,
  'maxWidth': 600,
})