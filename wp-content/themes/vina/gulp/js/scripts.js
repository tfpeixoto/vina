$('.carousel').carousel({
  interval: 3000,
  pause: false
});
$('.carousel-inner .carousel-item:first-child').addClass('active');

$(document).on('click', '[data-toggle="lightbox"]', function (event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});