//Scripts layoutScripts v1.0

// Funciones Generales
var $menuMobile = $('#mm'),
  $botnoMobile = $('#openMenuMobile'),
  $dataAttr = $('[data-menu-expand]');
function menuMobile() {
  var elDato = $dataAttr.attr('data-menu-expand');
  // console.log(elDato);
  switch (elDato) {
    case 'false':
      $menuMobile.attr('data-menu-expand', true);
      $botnoMobile.attr('data-menu-expand', true);
      $('body').addClass('bloquear');
      TweenMax.to($menuMobile, 0.3, { scale: 1.0, opacity: 1, ease: Power3.easeInOut, zIndex: 5, easeParams: [1.1, 0.7], force3D: true });
      break;
    case 'true':
      $menuMobile.attr('data-menu-expand', false);
      $botnoMobile.attr('data-menu-expand', false);
      $('body').removeClass('bloquear');
      TweenMax.to($menuMobile, 0.3, { scale: 1.2, opacity: 0, ease: Power3.easeInOut, zIndex: -1, easeParams: [1.1, 0.7], force3D: true });
      break;
    default:
      break;
  }
}

function WowData() {
  var wow = new WOW(
    {
      boxClass: 'wow',      // default
      animateClass: 'animated', // default
      offset: 0,          // default
      mobile: false,       // default
      live: true        // default
    })
  setTimeout(function () {
    wow.init();
  }, 1000);
}

function isSafari() { return /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor); }
function isChrome() { return /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor); }
function scrolMenu() {
  var c, currentScrollTop = 0,
    navbar = $('#headerGeneral');

  $(window).scroll(function () {
    var a = $(window).scrollTop();
    var b = navbar.outerHeight();

    currentScrollTop = a;

    if (c < currentScrollTop && a > b + b) {
      // navbar.addClass("scrollHUp");
      if (isSafari() || isChrome()) {
        navbar.css('-webkit-transform', 'translateY(-100%)');
      } else {
        navbar.css('transform', 'translateY(-100%)');
      }
    } else if (c > currentScrollTop && !(a <= b)) {
      // navbar.removeClass("scrollHUp");
      if (isSafari() || isChrome()) {
        navbar.css('-webkit-transform', 'translateY(0)');
      } else {
        navbar.css('transform', 'translateY(0)');
      }
    }
    c = currentScrollTop;
  });
}
function headScrolDown() {
  //WindowSrcoll
  $(window).on("scroll", function () {
    let headerPirn = $("#headerGeneral").outerHeight();
    let sumaHead = headerPirn;
    if ($(window).scrollTop() > sumaHead) {
      $("#headerGeneral").addClass("activeHead");
    } else {
      $("#headerGeneral").removeClass("activeHead");
    }
  });
}

$(function(){
  scrolMenu();
  headScrolDown();
  
  // Menu Mobile
  $('#md').clone().prependTo('#contListMenu').removeAttr('id').show();
  TweenMax.to($('#mm'), 0, { scale: 1.2, opacity: 0, zIndex: -1, force3D: true });

  // Slider
  $('.slideCt__slide').slick({
    fade: true,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 500,
    dots: false,
    prevArrow: $('#prevslideHomeMain'),
    nextArrow: $('#nextslideHomeMain'),
  });

  
});
