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
        $('.notice-slider').slick({

        slidesToScroll:1,
        autoplay:true,
        arrows: false,
        dots: false,
        vertical: true,
        verticalSwiping: true
    
    });	
    </script>

    <script type="text/javascript">
        $(document).ready( function () {
        $('#frontTable').DataTable({
            "pageLength": 25,
            "paging":   false,
        });
    } );
    </script>

    @if( Session::has('success'))
    <script type="text/javascript">
        $(document).ready(function() {
        $('#form_submit_confirmation').modal();
    });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="form_submit_confirmation" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-offset-3">
                            <img src="/images/namaste-girl.png" class="img-responsive" style="height:250px;">
                        </div>
                        <h2 class="modal_message">{{ Session::get('success') }}</h2>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <script>
        /*! Main */
        $(document).ready(function($) {
  
        // Fixa navbar ao ultrapassa-lo
        var navbar = $('#navbar'),
    		distance = navbar.offset().top,
            $window = $(window);

            if($(window).width() >= 768){
                console.log("screen size less than 768");
                $window.scroll(function() {
            if ($window.scrollTop() >= distance) {
                navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
                $("body").css("padding-top", "70px");
            }else{
                navbar.removeClass('navbar-fixed-top');
                $("body").css("padding-top", "0px");
            }
        });
        } 
    });
    </script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script> --}}
    <script>
        /* When the user clicks on the button,                                     toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>