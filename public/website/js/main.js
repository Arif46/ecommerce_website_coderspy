
(function ($) {
"use strict";

	// One Page Nav
  var top_offset = $('.ulta-beauty-wrapper').height() - 10;
  $('.one-page-Nav nav ul').onePageNav({
    currentClass: 'active',
    scrollOffset: top_offset,
    scrollSpeed: 1000,
    scrollThreshold: 1,
  });


    // Extra info bar //add class
    $('.info-bar').click(function(){
      $('.extra-inofo-bar-1').addClass('info-open');
      })
      
      // Remove clas
      $('.close-icon').click(function(){
      $('.extra-inofo-bar-1').removeClass('info-open');
      })


// Extra info bar //add class
    $('.choose-wrapper').click(function(){
        $(this).toggleClass('info-open');
      })


    // Submit Your Idea page Pagenation
      $(document).ready(function(){
        $('.rating-numbers .rating-number').click(function(){
          $('.rating-number').removeClass("active");
          $(this).addClass("active");
        });
      });







	//* Navbar Fixed
	var nav_offset_top = $('header').height() + 50;
	/*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 400) {
    $("#sticky-header").removeClass("navbar_fixed");
    $('#back-top').fadeOut(500);
	} else {
    $("#sticky-header").addClass("navbar_fixed");
    $('#back-top').fadeIn(500);
	}
});

// back to top 
$('#back-top a').on("click", function () {
  $('body,html').animate({
    scrollTop: 0
  }, 1000);
  return false;
});

// #######################
//   MOBILE MENU          
// #######################

// var menu = $('ul#mobile-menu');
// if (menu.length) {
//     menu.slicknav({
//         prependTo: ".mobile_menu",
//         closedSymbol: '<i class="ti-angle-down"></i>',
//         openedSymbol: '<i class="ti-angle-up"></i>'
//     });
// };

/* 3. slick Nav */
  // mobile_menu
  var menu = $('ul#navigation');
  if(menu.length){
    menu.slicknav({
      prependTo: ".mobile_menu",
      closedSymbol: '+',
      openedSymbol:'-'
    });
  };



    /* 5.  Applic App */
    var client_list = $('.testimonial-active');
    if(client_list.length){
      client_list.owlCarousel({
        navText:['<i class="fa fa-angle-leftss"></i>','<i class="fa fa-angle-rightsss "></i>'],
        slidesToShow: 1,
        slidesToScroll: 1,
        loop: true,
        autoplay:true,
        speed: 3000,
        // smartSpeed:2000,
        nav: true,
        dots: false,
        // margin: 15,
        autoplayHoverPause: true,
        responsive : {
          0 : {
            items: 1
          },
          768 : {
            items: 1
          },
          992 : {
            items: 1
          },
          1200:{
            items: 1
          }
        }
      });
    }

// wow js
  new WOW().init();

// nice select 
// $('.niceSelect').niceSelect();

/* 6. Nice Selectorp  */
var nice_Select = $('select');
  if(nice_Select.length){
    nice_Select.niceSelect();
}

// Video Pop
$('.tutorial-pop').magnificPopup({
  type: 'iframe',
});

// Bootstrap Tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


// ####################### 
// hero-slider     
// #######################

$('.home-slider').owlCarousel({
  loop:true,
  margin:0,
  items:1,
  autoplay:false,
  navText:['<i class="left-slider-arrowsss"></i>','<i class="rightss"></i>'],
  nav:true,
  dots:true,
  autoplaySpeed: 800,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:1
        },
        992:{
            items:1
        }
    }
  });


// ####################### 
// hero-slider     
// #######################

$('.blog_banner_active').owlCarousel({
  loop:true,
  margin:0,
  items:1,
  autoplay:true,
  navText:['<i class="fa fa-angle-leftss"></i>','<i class="fa fa-angle-rightss "></i>'],
  nav:true,
  dots:false,
  autoplayHoverPause: true,
  autoplaySpeed: 800,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:1
        },
        992:{
            items:1
        }
    }
  });


// ####################### 
// Product-slider     
// #######################

$('.product-carousel').owlCarousel({
  loop:true,
  margin:0,
  items:1,
  autoplay:true,
  navText:['<i class="fa fa-angle-leftss"></i>','<i class="fa fa-angle-rightss "></i>'],
  nav:true,
  dots:true,
  autoplayHoverPause: true,
  autoplaySpeed: 800,
  margin: 30,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:2
        },
        992:{
            items:3
        }
    }
  });

// ####################### 
// cat Product-slider     
// #######################

// index page
$('.cat-product-carousel').owlCarousel({
  loop:true,
  margin:0,
  items:1,
  autoplay:true,
  navText:['<i class="fa fa-angle-leftss"></i>','<i class="fa fa-angle-rightss "></i>'],
  nav:true,
  dots:true,
  autoplayHoverPause: true,
  autoplaySpeed: 800,
  margin: 30,
    responsive:{
        0:{
            items:1
        },
        // 767:{
        //     items:3
        // },
        767:{
            items:2
        },
        1100:{
            items:4
        },
        1400:{
            items:5
        }
    }
  });

// Compare list Page
$('.cat-product-carousel2').owlCarousel({
  loop:true,
  margin:0,
  items:1,
  autoplay:true,
  navText:['<i class="fa fa-angle-leftss"></i>','<i class="fa fa-angle-rightsss "></i>'],
  nav:true,
  dots:true,
  autoplayHoverPause: true,
  autoplaySpeed: 800,
  margin: 30,
    responsive:{
        0:{
            items:1
        },
        // 767:{
        //     items:3
        // },
        700:{
            items:2
        },
        1000:{
            items:3
        },
        1400:{
            items:3
        }
    }
  });


// ####################### 
// testmonial_active     
// #######################

$('.testmonial_active').owlCarousel({
loop:true,
margin:20,
items:1,
autoplay:true,
navText:['<i class="flaticon-backss"></i>','<i class="flaticon-nextsss"></i>'],
nav:true,
dots:false,
autoplayHoverPause: true,
autoplaySpeed: 800,
  responsive:{
      0:{
          items:1
      },
      767:{
          items:1
      },
      992:{
          items:1
      }
  }
});

$('.user-review').owlCarousel({
loop:true,
margin:30,
autoplay:true,
navText:['<i class="fa fa-angle-rightss"></i>','<i class="fa fa-angle-leftsss"></i>'],
nav:true,
dots:false,
autoplayHoverPause: true,
autoplaySpeed: 800,
  responsive:{
      0:{
          items:1
      },
      767:{
          items:2
      },
      992:{
          items:2
      }
  }
});

  // counter 
  $('.counter').counterUp({
    delay: 10,
    time: 10000
  });

/* magnificPopup img view */
$('.popup-image').magnificPopup({
  type: 'image',
	gallery: {
	  enabled: true
	}
});

/* magnificPopup video view */
$('.popup-video').magnificPopup({
  type: 'iframe',
  mainClass: 'mfp-fade',
  removalDelay: 160,
  preloader: false,
  fixedContentPos: false
});

// for filter
  // init Isotope
  var $grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      // use outer width of grid-sizer for columnWidth
      columnWidth: 1
    }
  });

  // filter items on button click
  $('.portfolio-menu').on('click', 'button', function () {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });

  //for menu active class
  $('.lang_lists li').on('click', function (event) {
    $(this).siblings('.active').removeClass('active');
    $(this).addClass('active');
    event.preventDefault();
	});


  // frahnan js 
  $('.switcher_wrap li').click(function(){
    $('li').removeClass("active");
    $(this).addClass("active");
});


// Increment and Decrement
$(document).ready(function() {
  const minus = $('.quantity__minus');
  const plus = $('.quantity__plus');
  const input = $('.quantity__input');
  minus.click(function(e) {
    e.preventDefault();
    var value = input.val();
    if (value > 1) {
      value--;
    }
    input.val(value);
  });
  
  plus.click(function(e) {
    e.preventDefault();
    var value = input.val();
    value++;
    input.val(value);
  })
});



$(document).ready(function() {
  $(".js-select2").select2();
  $(".js-select2-multi").select2();

  $(".large").select2({
    dropdownCssClass: "big-drop",
  });
});






})(jQuery);	
