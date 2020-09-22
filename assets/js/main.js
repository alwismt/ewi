(function ($) {
	"use strict";
    jQuery(document).ready(function($) {

        // preloader
        $('.loader').fadeOut(1000);
        // mobile menu 
        $('#mobile-menu').meanmenu({
            meanScreenWidth: "767",
            meanMenuContainer: '.mobile-menu'
        });
        // syntext highlighter
       SyntaxHighlighter.all();

    }); 
    // sponsor carousel
    $('.sponsors').slick({
        dots: false,
        autoplay: true,
        arrows: false,
        slidesToShow: 6,
        lazyLoad: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: true,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });

    jQuery(window).load(function(){

            // Menu js for Position fixed
            $(window).scroll(function(){
              var window_top = $(window).scrollTop() + 1; 
              if (window_top > 200) {
                  $('.header').addClass('menu_fixed animated fadeInDown');
              } else {
                  $('.header').removeClass('menu_fixed animated fadeInDown');
              }
          }); 
          // back to top
           var scrollTop = $(".scrollTop");
        
          $(window).scroll(function() {
            // declare variable
            var topPos = $(this).scrollTop();
        
            // if user scrolls down - show scroll to top button
            if (topPos > 100) {
              $(scrollTop).css("opacity", "1");
        
            } else {
              $(scrollTop).css("opacity", "0");
            }
        
        }); // scroll END
            
          //Click event to scroll to top
            $(scrollTop).click(function() {
                $('html, body').animate({
                  scrollTop: 0
                }, 800);
                return false;
            
      }); // click() scroll top EMD


    });
}(jQuery));	