
// Next slide
$('.carousel').carousel('prev');
$('.carousel').carousel('next');
  $('.carousel').carousel({
    padding: 200
});
autoplay()
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 7000);
}
