@include('includes.newheader')
@toastr_css
<body>
<!-- Header start -->

@yield('content')


@include('includes.newfooter')
@toastr_js
@toastr_render

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.notice_slider').slick({

        slidesToScroll: 1,
        autoplay:true,
        arrows: false,
        dots: false,
        vertical: true,
        verticalSwiping: true
    
    });	
</script>
<script>
/*! Main */
$(document).ready(function($) {
  
    // Fixa navbar ao ultrapassa-lo
    var navbar = $('#navbar'),
    		distance = navbar.offset().top,
        $window = $(window);

    $window.scroll(function() {
        if ($window.scrollTop() >= distance) {
            navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
          	$("body").css("padding-top", "70px");
        } else {
            navbar.removeClass('navbar-fixed-top');
            $("body").css("padding-top", "0px");
        }
    });
});
</script>
