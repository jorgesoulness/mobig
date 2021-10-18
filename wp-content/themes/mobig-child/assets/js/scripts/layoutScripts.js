//Scripts layoutScripts v1.0

$(function(){
  $('.slideCt__slide').slick({
    fade: true,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 500,
    dots: true,
    prevArrow: $('#prevslideHomeMain'),
    nextArrow: $('#nextslideHomeMain'),
  });
});
