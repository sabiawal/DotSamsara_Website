<header class="vs-header header-layout2">
    <div class="header-shape"></div>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center justify-content-between text-center text-lg-start">
                <div class="col-md-auto text-center text-md-start">
                    <div class="header-links">
                        <ul>
                            <li><i class="far fa-phone-alt"></i><a href="tel:+25632542598">(+256) 3254 2598</a></li>
                            <li class="d-none d-xxl-inline-block"><i class="far fa-map-marker-alt"></i>121 King St. Melbourne VIC 3000, Australia</li>
                            <li><i class="far fa-envelope"></i><a href="mailto:example@DotSamsara.com">example@DotSamsara.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="header-social">
                        <span class="social-title">Follow Us On: </span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        {{-- <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu Area -->
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <div class="container">
                <div class="menu-area">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="logo-style1">
                                <a href="/"><img src="frontend/assets/img/logo-white.png" alt="DotSamsara" class="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                <ul>
                                    <li class="">
                                        <a href="/"><span class="has-new-lable">Home<span class="new-label">new</span></span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('blog_list') }}">Blog List</a></li>
                                            <li><a href="{{ route('blog_grid') }}">Blog Grid</a></li>
                                            <li><a href="{{ route('blog_details') }}">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Service</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('service') }}">Service</a></li>
                                            <li><a href="{{ route('service_details') }}">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Team</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('team_list') }}">Team List</a></li>
                                            <li><a href="{{ route('team_details') }}">Team Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-btns">
                                <a href="#" class="vs-btn d-none d-xxl-inline-block">Contact Us<i class="far fa-arrow-right"></i></a>
                                <button class="icon-btn style3 sideMenuToggler"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>