/*------------------------------------------------------------------
 [Table of contents]

 1. Video
 2. Youtube
 3. Add .html file on page
 4. Menu-Bar
 5. Counter
 6. Homepage Carousel
 7. Owl Carousel

 -------------------------------------------------------------------*/

"use strict";

// ======================= Video =============================
var iframeVideo = document.getElementById("iframeVideo");
if (iframeVideo) {
    document.querySelector(".video-overlay").onclick = function () {
        this.style.display = "none";
        iframeVideo.setAttribute('src',
            'https://player.vimeo.com/video/10260175?title=0&byline=0&portrait=0?rel=0&autoplay=1');
    };
}

// ====================== Youtube ============================
var iframeYoutube = document.getElementById("iframeYoutube");
if (iframeYoutube) {
    document.querySelector(".youtube-overlay").onclick = function () {
        this.style.display = "none";
        iframeYoutube.setAttribute('src',
            'https://www.youtube.com/embed/IM-yYn6i_58?rel=0&autoplay=1');
    };
}

$(function() {

       // ================ Add .html file on page =================
    $.get("/charity-header_page", function(data){
        $('#header').append(data);
    });
    $.get("/ecology-header_page", function(data){
        $('#header-ecology').append(data);
    });
    $.get("/charity-menu-bar", function(data){
        $('#menuBar-charity').append(data);
    });
    $.get("/ecology-menu-bar", function(data){
        $('#menuBar-ecology').append(data);
    });
    $.get("/charity-sidebar", function(data){
        $('#sidebar').append(data);
    });
    $.get("/ecology-sidebar", function(data){
        $('#sidebar-ecology').append(data);
    });
    $.get("/charity-footer", function(data){
        $('#footer').append(data);
    });
    $.get("/ecology-footer", function(data){
        $('#footer-ecology').append(data);
    });

    // ===================== Menu-Bar ======================
    // $(document).on('click','button.navbar-toggle', function(){
    //     if($(".slider-info")) {
    //         $(".slider-info").each(function () {
    //             $(this).toggleClass("displayNone");
    //         });
    //         $(".slider").toggleClass("shadowButton");
    //     }
    //     if($(".banner h1")) {
    //         $(".banner h1").toggleClass("displayNone");
    //         $(".banner ul").toggleClass("displayNone");
    //         $(".banner").toggleClass("shadowButton");
    //     }
    //     if($(".page-404")) {
    //         $(".page-404 .menuBar").css("background","rgb(06, 06, 06)");
    //     }
    //     if($(".page-single")) {
    //         $(".page-single .menuBar").css("background","rgb(06, 06, 06)");
    //     }
    // });

    // $(document).on('mouseover',"li.dropdown", function(){
    //     $(this).addClass("open");
    // }).on('mouseout',"li.dropdown", function(){
    //     $(this).removeClass("open");
    // });

    // ===================== Counter ======================
    var countbox = $("#counts");
    if (countbox.length>0) {
        var show = true;
        $(window).on("scroll load resize", function () {

            if (!show) return false;

            var w_top = $(window).scrollTop();
            var e_top = countbox.offset().top;
            var w_height = $(window).height();
            var d_height = $(document).height();
            var e_height = countbox.outerHeight();

            if (w_top + 900 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
                $(".spincrement").spincrement({
                    thousandSeparator: "",
                    duration: 3000
                });
                show = false;
            }
        });
    }

    // =================== Homepage Carousel ====================
    var slider=$('.slider');
    if(slider.length>0) {
        $("#home-carousel .slider-info h4").addClass('animated fadeInDown');
        $("#home-carousel .slider-info h2").addClass('animated fadeInDown');
        $("#home-carousel .slider-info .buttons").addClass('animated fadeInDown');
    }
    $('#home-carousel').carousel(
        {
            interval: 7000
        }
    );

    // ===================== Owl Carousel ======================
    var owl = $('.owl-carousel');
    if (owl.length>0) {
        owl.owlCarousel({
            autoplayHoverPause: true,
            autoplayTimeout: 4000,
            autoplay: true,
            loop: true,
            margin: 30,
            responsive: {
                0: {
                    items: 1
                },
                400: {
                    items: 2
                },
                700: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    }

});
jQuery("#carousel1").owlCarousel({
  autoplay: true,
  rewind: true, /* use rewind if you don't want loop */
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});
 
$(document).ready(function() { 
    if($(window).width() < 768){
        $('.dt-1').click(function() {
        if ($( ".dt-1" ).hasClass('open')) {
            $(".dm-1").css("display", "none");
            $(".dt-1").removeClass("open");    
        } else {
            
          $( ".dt-1" ).addClass( 'open');
          $(".dm-1").css("display", "list-item");
        }
    });

    $('.dt-2').click(function() {
        if ($( ".dt-2" ).hasClass('open')) {
            $(".dm-2").css("display", "none");
            $(".dt-2").removeClass("open");    
        } else {
            
          $( ".dt-2" ).addClass( 'open');
          $(".dm-2").css("display", "block");
        }
    });

    $('.dt-3').click(function() {
        if ($( ".dt-3" ).hasClass('open')) {
            $(".dm-3").css("display", "none");
            $(".dt-3").removeClass("open");    
        } else {
          $( ".dt-3" ).addClass( 'open');
          $(".dm-3").css("display", "block");
        }
    });

    $('.dt-4').click(function() {
        if ($( ".dt-4" ).hasClass('open')) {
            $(".dm-4").css("display", "none");
            $(".dt-4").removeClass("open");    
        } else {
          $( ".dt-4" ).addClass( 'open');
          $(".dm-4").css("display", "block");
        }
    });

    $('.dt-5').click(function() {
        if ($( ".dt-5" ).hasClass('open')) {
            $(".dm-5").css("display", "none");
            $(".dt-5").removeClass("open");    
        } else {
          $( ".dt-5" ).addClass( 'open');
          $(".dm-5").css("display", "block");
        }
    });
    
    $('.dt-6').click(function() {
        if ($( ".dt-6" ).hasClass('open')) {
            $(".dm-6").css("display", "none");
            $(".dt-6").removeClass("open");    
        } else {
          $( ".dt-6" ).addClass( 'open');
          $(".dm-6").css("display", "list-item");
        }
    });
  }

});
