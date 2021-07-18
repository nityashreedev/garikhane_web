<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li><a href="{{url('/admin/dashboard')}}" >Home</a></li>
                <li><a href="{{url('/')}}" target="_blank" >Website</a></li>

                {{-- <li>
                    <a href="javascript: void(0);">
                        <i class="fe-airplay"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Users </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{url('/admin/users')}}">User list</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/invited-user')}}"> Invited User list</a>
                        </li>

                    </ul>
                </li> --}}

                <li>
                    <a href="javascript: void(0);">
                        <i class="fas fa-university"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Bank Information </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{url('/admin/banking')}}">Bank list</a>
                        </li>
            
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-flag"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Banner </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{url('/admin/banner')}}">Banner list</a>
                        </li>
            
                    </ul>
                </li>
                <li>
                    <a href="{{url('/admin/commite')}}">
                        <i class="fa fa-user"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Commite Member </span>
                        </a>
                        
                </li>
                <li>
                    <a href="{{url('/admin/contact/enquire')}}">
                        <i class="fa fa-user"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Contact Enquiry </span>
                        </a>
                        
                </li>
                <li>
                    <a href="{{url('/admin/digital-library')}}">
                        
                        <i class="fas fa-newspaper"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Digital Library </span>
                        </a>      
                </li>
                <li>
                    <a href="{{url('/admin/entreprenure/form/submission')}}">
                        <i class="fas fa-business-time"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Entreprenure List </span>
                        </a>
                        
                 </li>

                 <li>
                    <a href="{{route('entrepreneurship.page')}}">
                        <i class="fas fa-business-time"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Entrepreneurship Process Details </span>
                        </a>
                        
                 </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="fas fa-calendar-week"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Events </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{url('/admin/event')}}">Events list</a>
                        </li>
            
                    </ul>
                </li>

                <li>
                    <a href="{{url('/admin/faq')}}">
                        <i class="fas fa-comment"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> FAQ </span>
                        </a>
                        
                </li>
                <li>
                    <a href="{{route('garikhane.page')}}">
                        <i class="fas fa-business-time"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Garikhane Intro Page </span>
                        </a>
                        
                 </li>
                 <li>
                    <a href="{{url('/admin/karmabhomi/form/submission')}}">
                        <i class="fas fa-business-time"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span>Garikhane Project Form</span>
                        </a>
                 </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fas fa-street-view"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Images </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{url('/admin/gallery')}}">
                            <i class="fa fa-image"></i>
                                <span class="badge badge-success badge-pill float-right"></span>
                                <span> Image Gllery </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/admin/imagecategory')}}">
                            <i class="fa fa-image"></i>
                                <span class="badge badge-success badge-pill float-right"></span>
                                <span> Image Category </span>
                            </a>
                        </li>
            
                    </ul>
                </li>
                <li>
                    <a href="{{url('/admin/link')}}">
                        
                        <i class="fas fa-newspaper"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Important Link </span>
                        </a>
                        
                </li>
            
                <li>
                    <a href="javascript: void(0);">
                        <i class="fas fa-briefcase"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Jobs </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{url('/admin/job')}}">Job list</a>
                        </li>
            
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="fas fa-street-view"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Location </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{url('/admin/locations')}}">Location List</a>
                        </li>
            
                    </ul>
                </li>

                <li>
                    <a href="{{url('/admin/mentor/form/submission')}}">
                        <i class="fa fa-user"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Mentor List </span>
                        </a>
                        
                </li>
                <li>
                    <a href="{{url('/admin/news')}}">
                        
                        <i class="fas fa-newspaper"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> News and Press Release </span>
                        </a>
                        
                </li>
                <li>
                    <a href="{{url('/admin/notice')}}">
                        
                        <i class="fas fa-newspaper"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Notices </span>
                        </a>
                        
                </li>
                <li>
                    <a href="{{url('/admin/notification')}}">
                        
                        <i class="fas fa-newspaper"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Notifications </span>
                        </a>
                        
                </li>
                <li>
                    <a href="{{url('/admin/partner')}}">
                        <i class="fa fa-user"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Our Partner </span>
                        </a>
                        
                </li>
                <li>
                    <a href="{{url('/admin/garikhanne/project')}}">
                        <i class="fa fa-tasks"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Our Projects </span>
                        </a>
                        
                </li>
                <li>
                    <a href="{{url('/admin/pdf')}}">
                        <i class="fa fa-tasks"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> PDF File </span>
                        </a>
                        
                </li>
                <li>
                    <a href="{{url('/admin/popup')}}">
                        <i class="fa fa-image"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Popup </span>
                        </a>
                        
                </li>
                <li>
                    <a href="{{url('/admin/service')}}">
                        <i class="fa fa-wrench"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Program </span>
                        </a>
                        
                </li> 
                <li>
                    <a href="{{url('/admin/project/idea/bank')}}">
                        <i class="fa fa-university"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Project Idea Bank </span>
                        </a>
                        
                </li>
                <li>
                    <a href="{{url('/admin/setting')}}">
                        <i class="fas fa-sliders-h"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Setting </span>
                        </a>
                        
                    </li>
                    
                    <li>
                        <a href="{{url('/admin/testimonial')}}">
                           <i class="fas fa-comment"></i>
                                <span class="badge badge-success badge-pill float-right"></span>
                                <span> Testimonial </span>
                            </a>
                            
                    </li> 
                 
                <li>
                    <a href="{{url('/admin/users')}}">
                        <i class="fa fa-users"></i>
                            <span class="badge badge-success badge-pill float-right"></span>
                            <span> Users </span> 
                        </a>
                        
                </li>                                                     
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
