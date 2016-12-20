
// Next slide


$('.carousel').carousel({
      $('.carousel.carousel-slider').carousel({full_width: true});
  $('.carousel').carousel('next');
    padding: 200
});
autoplay()
function autoplay() {
    $('.carousel').carousel('next');
    $('.carousel.carousel-slider').carousel('next');
    setTimeout(autoplay, 4000);
}
