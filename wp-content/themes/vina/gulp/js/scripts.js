$('.carousel').carousel({
  interval: 5000,
  pause: true
});
$('.carousel-inner .carousel-item:first-child').addClass('active');

$(document).on('click', '[data-toggle="lightbox"]', function (event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});