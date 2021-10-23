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
      $('#contListMenu ul li.menu-item-has-children a').removeClass('active');
      $('#contListMenu .sub-menu').removeClass('current');
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
  WowData();
  
  // Menu Mobile
  $('#md').clone().prependTo('#contListMenu').removeAttr('id').show();
  TweenMax.to($('#mm'), 0, { scale: 1.2, opacity: 0, zIndex: -1, force3D: true });

  $('#contListMenu ul li.menu-item-has-children > a').click(function(e){
    e.preventDefault();
    $('#contListMenu ul li.menu-item-has-children a').removeClass('active');
    $('#contListMenu .sub-menu').removeClass('current');
    $(this).addClass('active').parent().find('.sub-menu').addClass('current');
    // $(this).addClass('active');
  });
  // $('#contListMenu ul li.menu-item-has-children a.active').click(function(ev){
  //   ev.preventDefault();
  //   console.log('hola');
  //   $('#contListMenu .sub-menu').removeClass('current');
  // });

  // Slider
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

  $(".filter-button").click(function (e) {
    e.preventDefault();
    var value = $(this).attr('data-filtro');

    if (value == "all") {
      //$('.filter').removeClass('hidden');
      $('.filter').show('1000');
    }
    else {
      //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
      //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
      $(".filter").not('.' + value).hide('3000');
      $('.filter').filter('.' + value).show('3000');

    }
    if ($(".filter-button").removeClass("activeFilter")) {
      $(this).removeClass("activeFilter");
    }
    $(this).addClass("activeFilter");
  });

  // Validación Formularios
  jQuery.validator.methods.matches = function (value, element, params) {
    var re = new RegExp(params);
    // window.console.log(re);
    // window.console.log(value);
    // window.console.log(re.test( value ));
    return this.optional(element) || re.test(value);
  }

  $('.input-number').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});
  $("#frmContacto").validate({
      errorElement: "div",
      errorClass: "error-line",
      rules: {
        inpNombre: "required",
        inpEmail: {
          required: true,
          email: true    
        },
        inpTel: {
          required: true,
          matches: "^(\\d|\\s)+$",
          minlength: 8,
          maxlength: 10
        },
        mensaje: "required",
      },
      messages: {
        inpNombre: "<i class='fa fa-exclamation-triangle'><i>",
        inpEmail: "<i class='fa fa-exclamation-triangle'><i>",
        inpEmail: {
          required: "<i class='fa fa-exclamation-triangle'><i>",
          email: "<i class='fa fa-exclamation-triangle'><i>"    
        },
        inpTel: {
          required: "<i class='fa fa-exclamation-triangle'><i>",
          matches: "<i class='fa fa-exclamation-triangle'><i>",
          minlength: "<i class='fa fa-exclamation-triangle'><i>",
          maxlength: "<i class='fa fa-exclamation-triangle'><i>"
        },
        mensaje: "<i class='fa fa-exclamation-triangle'><i>",
      },
      submitHandler: function(form) {
        // console.log("enviar form");
        var dataForm = $('#frmContacto').serialize();
        $.ajax({
          url: '/contactoscript.php',
          type: 'POST',
          data: dataForm,
          beforeSend: function(xhr) {
            // $('.btnSend').addClass('loadBtn');
          },
          complete: function(xhr, textstatus) {
            // $('.btnSend').removeClass('loadBtn');
          },
          success: function(data) {
            console.log(data);
            $("#frmContacto").each (function(){
              this.reset();
            });
            // $('#modalCongrats').removeClass('hideMo').addClass('showMo');
            // setTimeout(function(){
            //   $('#modalCongrats').removeClass('showMo').addClass('hideMo');
            // }, 5000);
          },
          error: function(e) {
            console.log(e);
          }
        });
      }
    });

  
});
