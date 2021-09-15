$('.carousel').carousel();
$('.carousel-inner .carousel-item:first-child').addClass('active');

$(document).on('click', '[data-toggle="lightbox"]', function (event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});