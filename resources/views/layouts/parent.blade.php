<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ "Edumate | " . $pagename }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.png') }}" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('/css/fontawesome.min.css') }}">
    <!-- Flat-Icon -->
    <link rel="stylesheet" href="{{ asset('/assets/fonts/font/flaticon.css') }}">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
    <!-- Owl Carousel -->
    <!-- <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}"> -->
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
    @yield('head')
</head>

<body>

    <!-- preloader area start -->
     <!-- <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="cube-wrapper">
                <div class="cube-folding">
                    <span class="leaf1"></span>
                    <span class="leaf2"></span>
                    <span class="leaf3"></span>
                    <span class="leaf4"></span>
                </div>
                <span class="loading" data-name="Loading">Loading</span>
            </div>
        </div>
    </div>  -->
    <!-- preloader area end -->


    <!-- Navebar Area start -->
    <header class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/logo-color.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu"
                            aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="mainmenu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service">Forums</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#project-gallery">Peers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#testimonial-area">Gigs</a>
                                </li>
                            
                                @if( !Auth::check() && Auth::user() == null)
                                <li class="nav-item">
                                    <a class="mybtn1" style="margin-top:10px;"href="{{url('/login')}}"><span>LOG IN</span></a>
                                </li>
                                @else
                                <li class="nav-item dropdown">
                                    <a class="mybtn1 dropdown-toggle" style="margin-top:10px;" href="{{url('/profile')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->first_name}}
                                    </a>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Tasks</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="{{url('/logout')}}"><strong>Sign out<strong></a>
                                    </div>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Navebar Area End -->

    @yield('body')


    <!-- Footer Section Start -->
    <footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-info-area">
                        <div class="footer-logo">
                            <a href="#" class="logo-link">
                                <img src="assets/images/logo-color.png" alt="">
                            </a>
                        </div>
                        <div class="text">
                            <p>Conveying or northward offending admitting perfectly my. Colonel gravity get thought fat smiling add but. Wonder twenty hunted and put income set desire expect.
                            </p>
                        </div>
                    </div>
                    <div class="fotter-social-links">
                        <ul>
                            <li>
                                <a href="#" class="facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google-plus">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dribbble">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget use-full-link-widget">
                        <h4 class="title">
                            Usefull
                        </h4>
                        <ul class="link-list">
                            <li>
                                <a href="#">
                                        <i class="fas fa-angle-double-right"></i>Blog
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <i class="fas fa-angle-double-right"></i>About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <i class="fas fa-angle-double-right"></i>Our Story
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <i class="fas fa-angle-double-right"></i>Forum
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <i class="fas fa-angle-double-right"></i>Carer
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget support-link-widget">
                        <h4 class="title">
                            Support
                        </h4>
                        <ul class="link-list">
                            <li>
                                <a href="#">
                                        <i class="fas fa-angle-double-right"></i>FAQ's
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <i class="fas fa-angle-double-right"></i>Privacy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <i class="fas fa-angle-double-right"></i>Policy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <i class="fas fa-angle-double-right"></i>Support
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <i class="fas fa-angle-double-right"></i>Documentation
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                        <div class="footer-widget instagram-feed-widget">
                                <h4 class="title">
                                    Instagram Feed
                                </h4>
                                <ul class="instagram-feed-list">
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/instagram/1.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                <img src="assets/images/instagram/2.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                <img src="assets/images/instagram/3.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                <img src="assets/images/instagram/4.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                <img src="assets/images/instagram/5.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                <img src="assets/images/instagram/6.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                </div>
            </div>
        </div>
        <div class="copy-bg text-center">
            <p>Copyright © 2019. All rights reserved by
                <a href="index.html">DevScriptPro</a>
            </p>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Back to Top Start -->
    <div class="bottomtotop">
        <i class="fa fa-chevron-right"></i>
    </div>
    <!-- Back to Top End -->

    <!-- jquery -->
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <!-- popper -->
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <!-- way poin js-->
    <!-- <script src="{{ asset('/js/waypoints.min.js') }}"></script> -->
    <!-- Counter js-->
    <!-- <script src="{{ asset('/js/counter.js') }}"></script> -->
    <!-- Image loaded js-->
    <script src="{{ asset('/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Mixitup js-->
    <!-- <script src="{{ asset('/js/mixitup.min.js') }}"></script> -->
    <!-- owl carousel -->
    <!-- <script src="{{ asset('/js/owl.carousel.min.js') }}"></script> -->
    <!-- magnific popup -->
    <!-- <script src="{{ asset('/js/jquery.magnific-popup.js') }}"></script> -->
    <!-- counterup js-->
    <!-- <script src="{{ asset('/js/jquery.counterup.min.js') }}"></script> -->
    <!-- easing js-->
    <!-- <script src="{{ asset('/js/jquery.easing.1.3.js') }}"></script> -->
    <!-- main -->
    <!-- <script src="{{ asset('/js/contact.js') }}"></script> -->
    <!-- main -->
    <script src="{{ asset('/js/main.js') }}"></script>

    @yield('scripts')
</body>

</html>