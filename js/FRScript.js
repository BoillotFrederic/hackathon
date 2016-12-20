
// Next slide
// $('.carousel').carousel('next');
// $('.carousel').carousel('next', 9); // Move next n times.
// $('.carousel').carousel('set', 4);
$('.carousel').carousel({
    padding: 200
});
autoplay()
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4000);
}

$('.carousel.carousel-slider').carousel({full_width: true});
