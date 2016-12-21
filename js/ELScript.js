$(function() {
    $("#conditions").hide();
})

$("#btnconditions").click(function() {
    $("#conditions").slideToggle();
    // console.log("ttttttttttttttttttttt")
})


$(document).ready(function() {

    $("#goToTop").fadeOut();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('#goToTop').fadeIn();
        } else {
            $('#goToTop').fadeOut();
        }
    });

    $('#goToTop').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});
