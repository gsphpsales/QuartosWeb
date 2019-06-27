// SLIDER
$(document).ready(function () {
    $('.banner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        infinite: true,
    });
});

// SCROLL
$('.scroll').click(function(event) {

if (
  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
  && 
  location.hostname == this.hostname
) {

  var target = $(this.hash);
  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

  if (target.length) {

    event.preventDefault();
    $('html, body').animate({
      scrollTop: target.offset().top
    }, 1000, function() {

    });
  }
}
});