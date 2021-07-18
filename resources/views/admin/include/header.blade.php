
<!-- {{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}


{{--<body>--}}

<!-- Begin page -->
<!-- {{--<div id="wrapper">--}} --

    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                    <span class="pro-user-name ml-1">
                               {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                            </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{Auth::user()->fname}}{{Auth::user()->lname}} !</h6>
                    </div>
                    <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0"><a href ="{{url('admin/user/setting')}}">setting</a></h6>
                </div>
                  
                   
                   

                    <div class="dropdown-divider"></div>
                    <!-- item-->
                    <a href="{{ route('logout') }}" class="dropdown-item notify-item"   onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}

                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>


        </ul>

        <!-- LOGO -->

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>



        </ul>
    </div>
    <!-- end Topbar -->
