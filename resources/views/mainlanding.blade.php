@extends('layouts.parent')

@section('head')
<link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('/js/waypoints.min.js') }}"></script>
    <!-- Counter js-->
    <script src="{{ asset('/js/counter.js') }}"></script>
    <!-- Mixitup js-->
    <script src="{{ asset('/js/mixitup.min.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('/js/jquery.magnific-popup.js') }}"></script>
    <!-- counterup js-->
    <script src="{{ asset('/js/jquery.counterup.min.js') }}"></script>
    <!-- easing js-->
    <script src="{{ asset('/js/jquery.easing.1.3.js') }}"></script>
    <!-- main -->
    <script src="{{ asset('/js/contact.js') }}"></script>
    <!-- main -->
    <script src="{{ asset('/js/typed.js') }}"></script>
    <script src="{{ asset('/js/custom2.js') }}"></script>


    <script>
        $('.search-input').focus(function(){
            $(this).parent().addClass('focus');
        }).blur(function(){
            $(this).parent().removeClass('focus');
        });


        var typed2 = new Typed('.typewriter', {
            strings: ['Let the <i>Edumate</i> community help!   ', 'Studies <i>suck?</i>   '],
            typeSpeed: 20,
            backSpeed: 1500,
            fadeOut: true,
            loop: true
        });

        $(function() {
            $('#scrolltoData').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
            });
        });

    </script>
    <script type="text/javascript">
        $('#searchInstitutes').on('keyup keypress focus',function(){
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
            $value=$(this).val();
            if( $value.length > 0){
                $("#instituteSearchResults").css("display", 'block');
                $("#instituteSearchResults").css("width", $("#searchInstitutesForm").width() - 10);
                $('#instituteSearchResults').html( "<td><div class=\"smallLoader\" id=\"searchLoader\"></div></td>");
                $.ajax({
                type : 'get',
                url : '{{URL::to('institute-search')}}',
                data:{'search':$value},
                success:function(data){
                    
                    $('#instituteSearchResults').html(data);
                }
                });
            }
            else{
                $("#instituteSearchResults").css("display", 'none');
            }
        });
        $('#searchInstitutesForm').on('focusout', function(e) {
            window.setTimeout(function() {
                $("#instituteSearchResults").css("display", 'none');
            }, 500);
        }); 
    </script>
@endsection

@section('body')
<div class="index3 index7 index-color1">
    <div id="home" class="hero-area">
        
        <canvas class="dots-canvas"></canvas>
        <img class="bgimg" src="{{ asset('/assets/images/heroarea/one/bg.png') }}" alt="">

        <div class="container">
            <div class="row">
                    <div class="col-lg-12 d-flex align-self-center">
                            <h1 class="presearchtitle" style="height:200px;">
                                <span class="typewriter">
                                </span>
                            </h1>
                    </div>

                    <form id="searchInstitutesForm"class="search-form">
                        <input type="search" value="" id="searchInstitutes" placeholder="Find your school/ college" class="search-input">
                        <button type="submit" class="search-button">
                            <svg class="submit-button">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#search"></use>
                            </svg>
                        </button>
                    </form>
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" display="none">
                    <symbol id="search" viewBox="0 0 32 32">
                        <path d="M 19.5 3 C 14.26514 3 10 7.2651394 10 12.5 C 10 14.749977 10.810825 16.807458 12.125 18.4375 L 3.28125 27.28125 L 4.71875 28.71875 L 13.5625 19.875 C 15.192542 21.189175 17.250023 22 19.5 22 C 24.73486 22 29 17.73486 29 12.5 C 29 7.2651394 24.73486 3 19.5 3 z M 19.5 5 C 23.65398 5 27 8.3460198 27 12.5 C 27 16.65398 23.65398 20 19.5 20 C 15.34602 20 12 16.65398 12 12.5 C 12 8.3460198 15.34602 5 19.5 5 z" />
                    </symbol>
                    </svg>

                    <table id="instituteSearchResults" class="search-results">
                    <td><div class="smallLoader" id="searchLoader"></div></td>
                    </table>

                    <div class="col-lg-12 d-flex align-self-center">
                            <div id="scrollsection07" style="text-align:center;width:100vw;">
                            <a id="scrolltoData" class="nav-link" href="#edumate-carousel">
                                <p>Or let's break the ice first</p>
                                <span></span><span></span></a>
                            </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->

    <!-- About area start -->
    <section class="about" id="edumate-carousel">
        <div class="container">
            <div class="row">
                    <div class="heroarea-slider">
                            <div class="item">
                                    <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 d-flex align-self-center">
                                                    <div class="left-content">
                                                     <div class="content">
                                                        <div class="layer-1">
                                                            <h1 class="title">
                                                                Modern & Creative Agency
                                                            </h1>
                                                        </div>
                                                        <div class="layer-2">
                                                            <p class="subtitle">
                                                                Effects present letters inquiry no an removed or friends. Desire behind
                                                                latter me though in. Supposing
                                                                shameless am engrossed itatibus additions.
                                                            </p>
                                                        </div>
                                                         <div class="layer-3">
                                                            <div class="links">
                                                                <a href="#" class="mybtn1">Discover Us<i class="fas fa-chevron-right"></i></a>
                                                            </div>
                                                         </div>
                                                     </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 order-first order-lg-last">
                                                    <div class="layer-4">
                                                        <div class="right-img">
                                                            <img class="img-fluid full-img" src="assets/images/heroarea/one/full.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            <div class="item">
                                    <div class="container">
                                            <div class="row">
                                                
                                                <div class="col-lg-6 order-first">
                                                    <div class="layer-4">
                                                        <div class="right-img">
                                                            <img class="img-fluid full-img" src="assets/images/heroarea/two/full.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 d-flex align-self-center">
                                                    <div class="left-content">
                                                     <div class="content">
                                                        <div class="layer-1">
                                                            <h1 class="title">
                                                                Modern & Creative Agency
                                                            </h1>
                                                        </div>
                                                        <div class="layer-2">
                                                            <p class="subtitle">
                                                                Effects present letters inquiry no an removed or friends. Desire behind
                                                                latter me though in. Supposing
                                                                shameless am engrossed itatibus additions.
                                                            </p>
                                                        </div>
                                                         <div class="layer-3">
                                                            <div class="links">
                                                                <a href="#" class="mybtn1">Discover Us<i class="fas fa-chevron-right"></i></a>
                                                            </div>
                                                         </div>
                                                     </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
            </div>
        </div>
    </section>
    <!--About area End -->

    <!--  Video Area Start -->
    <section class="video" id="video">
        <div class="overlay"></div>
        <img class="shape1" src="assets/images/bgshape1.png" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title">
                        <h2 class="title">why choose us</h2>

                        <p>Expenses as material breeding insisted building to in. Continual so distrusts pronounce by
                            unwilling listening. Thing do taste on we manor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="video-wrapper">
                        <div class="video-box">
                            <div class="overly"></div>
                            <div class="play-icon">
                                <a href="https://www.youtube.com/watch?v=4DCTTrGjGU4" class="video-play-btn mfp-iframe">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!--  Counter Area Start -->
        <div class="counter-area" id="counter-area">
            <img class="shape2" src="assets/images/bgshape2.png" alt="">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-3 col-6">
                        <div class="fun-box">
                            <div class="icon">
                                <i class="flaticon-project-management"></i>
                            </div>
                            <div class="counter-wrapper">
                                <h3 class="counter">900</h3><span class="math">+</span>
                            </div>
                            <h5 class="categori">Project Done</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="fun-box">
                            <div class="icon">
                                <i class="flaticon-briefing"></i>
                            </div>
                            <div class="counter-wrapper">
                                <h3 class="counter">99</h3><span class="math">+</span>
                            </div>
                            <h5 class="categori">Project Ongoing</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="fun-box">
                            <div class="icon">
                                <i class="flaticon-conversation"></i>
                            </div>
                            <div class="counter-wrapper">
                                <h3 class="counter">700</h3><span class="math">+</span>
                            </div>
                            <h5 class="categori">Number of Client</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="fun-box">
                            <div class="icon">
                                <i class="flaticon-trophy"></i>
                            </div>
                            <div class="counter-wrapper">
                                <h3 class="counter">100</h3><span class="math">+</span>
                            </div>
                            <h5 class="categori">Award-Winning</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Counter Area End -->
    </section>
    <!-- Video Area End -->

  

    <!-- Service Area start -->
    <section class="service" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title">
                        <h2 class="title">Services We Provide</h2>
                        <p>Expenses as material breeding insisted building to in. Continual so distrusts pronounce by
                            unwilling listening. Thing do taste on we manor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row serviceslider">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <div class="icon">
                            <i class="flaticon-computer-graphic"></i>
                        </div>
                        <div class="details">
                            <h4>
                                <a href="#" class="title">Web Design</a>
                            </h4>
                            <p class="text">New had happen unable uneasy. Drawings can followed improved out sociable
                                not. Earnestly so do instantlydetails.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <div class="icon">
                            <i class="flaticon-web"></i>
                        </div>
                        <div class="details">
                            <h4>
                                <a href="#" class="title">Web Development</a>
                            </h4>
                            <p class="text">New had happen unable uneasy. Drawings can followed improved out sociable
                                not. Earnestly so do instantlydetails.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <div class="icon">
                            <i class="flaticon-layers"></i>
                        </div>
                        <div class="details">
                            <h4>
                                <a href="#" class="title">Graphic Design</a>
                            </h4>
                            <p class="text">New had happen unable uneasy. Drawings can followed improved out sociable
                                not. Earnestly so do instantlydetails.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <div class="icon">
                            <i class="flaticon-image-1"></i>
                        </div>
                        <div class="details">
                            <h4>
                                <a href="#" class="title">Image Editing</a>
                            </h4>
                            <p class="text">New had happen unable uneasy. Drawings can followed improved out sociable
                                not. Earnestly so do instantlydetails.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <div class="icon">
                            <i class="flaticon-social-media"></i>
                        </div>
                        <div class="details">
                            <h4>
                                <a href="#" class="title">Social Marketing</a>
                            </h4>
                            <p class="text">New had happen unable uneasy. Drawings can followed improved out sociable
                                not. Earnestly so do instantlydetails.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <div class="icon">
                            <i class="flaticon-mobile-app"></i>
                        </div>
                        <div class="details">
                            <h4>
                                <a href="#" class="title">App Development</a>
                            </h4>
                            <p class="text">New had happen unable uneasy. Drawings can followed improved out sociable
                                not. Earnestly so do instantlydetails.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->


    <!-- Gate In Tuch Area Start -->
    <section id="get-intuch" class="get-intuch">
    <div class="overlay"></div>
    <img class="shape1" src="assets/images/bgshape1.png" alt="">
    <img class="shape2" src="assets/images/bgshape2.png" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8 text-center">
                    <div class="content">
                        <h2 class="title">Trusted by over <span>1000+ worldwide </span> business! & 30+ Services.</h2>
                        <p class="subtitle">New had happen unable uneasy. Drawings can followed improved out sociable
                            not. Earnestly so do instantly pretended.</p>
                        <a href="#" class="mybtn1 link">Contact us <i class="far fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gate In Tuch Area End -->

    <!-- Project Gallery Area Start -->
    <div class="project-gallery" id="project-gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title extra">
                        <h2 class="title">Our Recent Projects </h2>
                        <p>Expenses as material breeding insisted building to in. Continual so distrusts pronounce by
                            unwilling listening. Thing do taste on we manor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-gallery-filter d-flex justify-content-center">
                        <ul class="project-gallery-menu d-inline-block">
                            <li class="filter active" data-filter="all">All Cetagories</li>
                            <li class="filter" data-filter=".cat-1">Marketing</li>
                            <li class="filter" data-filter=".cat-2">Management</li>
                            <li class="filter" data-filter=".cat-3">Consulting</li>
                        </ul>
                    </div>

                    <div class="row project-gallery-item">

                        <div class="mix col-md-6 col-lg-4 gallery-item cat-1 cat-3">
                            <div class="gallery-item-content">
                                <div class="item-thumbnail">
                                    <img src="assets/images/work/7.jpg" alt="">
                                    <div class="content-overlay">
                                        <div class="content">
                                            <div class="links">
                                                <a class="img-popup image-preview" href="assets/images/work/7.jpg">
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                            <div class="info">
                                                <p class="tag">Design | Branding</p>
                                                <h4 class="project-name">Creative Web Design
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mix col-md-6 col-lg-4 gallery-item  cat-3 cat-4">
                            <div class="gallery-item-content">
                                <div class="item-thumbnail">
                                    <img src="assets/images/work/1.jpg" alt="">
                                    <div class="content-overlay">
                                        <div class="content">
                                            <div class="links">
                                                <a class="img-popup image-preview" href="assets/images/work/1.jpg">
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                            <div class="info">
                                                <p class="tag">Design | Branding</p>
                                                <h4 class="project-name">Creative Web Design
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mix col-md-6 col-lg-4 gallery-item cat-2 cat-1">
                            <div class="gallery-item-content">
                                <div class="item-thumbnail">
                                    <img src="assets/images/work/2.jpg" alt="">
                                    <div class="content-overlay">
                                        <div class="content">
                                            <div class="links">
                                                <a class="img-popup image-preview" href="assets/images/work/2.jpg">
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                            <div class="info">
                                                <p class="tag">Design | Branding</p>
                                                <h4 class="project-name">Creative Web Design
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mix col-md-6 col-lg-4 gallery-item cat-1 cat-3">
                                <div class="gallery-item-content">
                                    <div class="item-thumbnail">
                                        <img src="assets/images/work/9.jpg" alt="">
                                        <div class="content-overlay">
                                            <div class="content">
                                                <div class="links">
                                                    <a class="img-popup image-preview" href="assets/images/work/9.jpg">
                                                        <i class="fas fa-long-arrow-alt-right"></i>
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <p class="tag">Design | Branding</p>
                                                    <h4 class="project-name">Creative Web Design
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="mix col-md-6 col-lg-4 gallery-item cat-3 cat-4">
                                <div class="gallery-item-content">
                                    <div class="item-thumbnail">
                                        <img src="assets/images/work/5.jpg" alt="">
                                        <div class="content-overlay">
                                            <div class="content">
                                                <div class="links">
                                                    <a class="img-popup image-preview" href="assets/images/work/5.jpg">
                                                        <i class="fas fa-long-arrow-alt-right"></i>
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <p class="tag">Design | Branding</p>
                                                    <h4 class="project-name">Creative Web Design
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="mix col-md-6 col-lg-4 gallery-item cat-1 cat-2">
                            <div class="gallery-item-content">
                                <div class="item-thumbnail">
                                    <img src="assets/images/work/3.jpg" alt="">
                                    <div class="content-overlay">
                                        <div class="content">
                                            <div class="links">
                                                <a class="img-popup image-preview" href="assets/images/work/3.jpg">
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                            <div class="info">
                                                <p class="tag">Design | Branding</p>
                                                <h4 class="project-name">Creative Web Design
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mix col-md-6 col-lg-4 gallery-item cat-4 cat-2">
                            <div class="gallery-item-content">
                                <div class="item-thumbnail">
                                    <img src="assets/images/work/4.jpg" alt="">
                                    <div class="content-overlay">
                                        <div class="content">
                                            <div class="links">
                                                <a class="img-popup image-preview" href="assets/images/work/4.jpg">
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                            <div class="info">
                                                <p class="tag">Design | Branding</p>
                                                <h4 class="project-name">Creative Web Design
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mix col-md-6 col-lg-4 gallery-item cat-3 cat-2">
                            <div class="gallery-item-content">
                                <div class="item-thumbnail">
                                    <img src="assets/images/work/6.jpg" alt="">
                                    <div class="content-overlay">
                                        <div class="content">
                                            <div class="links">
                                                <a class="img-popup image-preview" href="assets/images/work/6.jpg">
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                            <div class="info">
                                                <p class="tag">Design | Branding</p>
                                                <h4 class="project-name">Creative Web Design
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mix col-md-6 col-lg-4 gallery-item cat-3 cat-1">
                            <div class="gallery-item-content">
                                <div class="item-thumbnail">
                                    <img src="assets/images/work/8.jpg" alt="">
                                    <div class="content-overlay">
                                        <div class="content">
                                            <div class="links">
                                                <a class="img-popup image-preview" href="assets/images/work/8.jpg">
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                            <div class="info">
                                                <p class="tag">Design | Branding</p>
                                                <h4 class="project-name">Creative Web Design
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Gallery Area End -->

    <!-- Testimonial Area Start -->
    <section class="testimonial-area" id="testimonial-area">
            <div class="overlay"></div>
            <img class="shape1" src="assets/images/bgshape1.png" alt="">
            <img class="shape2" src="assets/images/bgshape2.png" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title extra">
                        <h2 class="title">Our Clients Say </h2>
                        <p>Expenses as material breeding insisted building to in. Continual so distrusts pronounce by
                            unwilling listening. Thing do taste on we manor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="testimonial-slider">
                        <div class="item">
                            <div class="client">
                                <div class="client-image">
                                    <img src="assets/images/testimonialimage/1.jpg" class="img-fluid" alt="">
                                </div>
                                <p class="client-say">Contrary to popular belief, Lorem Ipsum is not simply random
                                    text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                    over 2000 years old.Contrary to popular belief, Lorem Ipsum is not simply random
                                    text.</p>
                                <h4 class="client-name">
                                    <a href="#">
                                        Natha Roy
                                    </a>
                                </h4>
                                <h5 class="designation">Lead Developer</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client">
                                <div class="client-image">
                                    <img src="assets/images/testimonialimage/2.jpg" class="img-fluid" alt="">
                                </div>
                                <p class="client-say">Contrary to popular belief, Lorem Ipsum is not simply random
                                    text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                    over 2000 years old.Contrary to popular belief, Lorem Ipsum is not simply random
                                    text.</p>
                                <h4 class="client-name">
                                    <a href="#">
                                        Natasha li
                                    </a>
                                </h4>
                                <h5 class="designation">Lead Developer</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->

    <!-- Team Area Start -->
    <section class="team" id="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title">
                        <h2 class="title">Our Smart Team</h2>
                        <p>Expenses as material breeding insisted building to in. Continual so distrusts pronounce by
                            unwilling listening. Thing do taste on we manor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="team_slider">
                        <div class="team-member">
                            <div class="member-pic">
                                <img src="assets/images/team/1.png" alt="">
                            </div>

                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="member-data">
                                <div class="name">
                                    <h4 class="title">Ashley Tulaba</h4>
                                    <p class="position">CEO &amp; Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-member">
                            <div class="member-pic">
                                <img src="assets/images/team/2.png" alt="">
                            </div>

                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="member-data">
                                <div class="name">
                                    <h4 class="title">Billy	Hall</h4>
                                    <p class="position">CEO &amp; Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-member">
                            <div class="member-pic">
                                <img src="assets/images/team/3.png" alt="">
                            </div>

                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="member-data">
                                <div class="name">
                                    <h4 class="title">Irene	Perez</h4>
                                    <p class="position">CEO &amp; Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-member">
                            <div class="member-pic">
                                <img src="assets/images/team/4.png" alt="">
                            </div>

                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="member-data">
                                <div class="name">
                                    <h4 class="title">Lori	Collins</h4>
                                    <p class="position">CEO &amp; Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-member">
                            <div class="member-pic">
                                <img src="assets/images/team/5.png" alt="">
                            </div>

                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="member-data">
                                <div class="name">
                                    <h4 class="title">Robert King</h4>
                                    <p class="position">CEO &amp; Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Team Area End -->

    <!-- Pricing Area Start -->
    <section class="pricing" id="pricing">
        <div class="overlay"></div>
        <img class="shape1" src="assets/images/bgshape1.png" alt="">
        <img class="shape2" src="assets/images/bgshape2.png" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title extra">
                        <h2 class="title">Our Pricing Plan</h2>

                        <p>Expenses as material breeding insisted building to in. Continual so distrusts pronounce by
                            unwilling listening. Thing do taste on we manor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pricing-tab">
                    <div class="tab-menu">
                        <ul class="nav" id="my-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-monthly-tab" data-toggle="pill" href="#pills-monthly"
                                    role="tab" aria-controls="pills-monthly" aria-selected="true">Monthly</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-yearly-tab" data-toggle="pill" href="#pills-yearly" role="tab"
                                    aria-controls="pills-yearly" aria-selected="false">Yearly</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-box basic">
                                        <div class="price-title">
                                            <h3 class="heading-title">Basic Plan</h3>
                                            <p class="heading-sub-title">This is basic Service Plan</p>
                                        </div>
                                        <div class="price-rate">
                                            <div class="center-align-content">
                                                <p class="price">$250</p>
                                                <p class="duration">/mo</p>
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <ul class="service-feature-list">
                                                <li>
                                                    <p>Android Application</p>
                                                </li>
                                                <li>
                                                    <p>IOS Application</p>
                                                </li>
                                                <li>
                                                    <p>UX/UI Designs</p>
                                                </li>
                                                <li>
                                                    <p>Wordpress Develop</p>
                                                </li>
                                                <li>
                                                    <p>PSD to HTML</p>
                                                </li>
                                                <li>
                                                    <p>Digital Marketing</p>
                                                </li>
                                                <li>
                                                    <p>Content Editing</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="buy-btn-wrapper">
                                            <a class="mybtn1" href="#">Start Now <i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-box standard">
                                        <div class="price-title">
                                            <h3 class="heading-title">Standard Plan</h3>
                                            <p class="heading-sub-title">This is Standard Service Plan</p>
                                        </div>
                                        <div class="price-rate">
                                            <div class="center-align-content">
                                                <p class="price">$350</p>
                                                <p class="duration">/mo</p>
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <ul class="service-feature-list">
                                                <li>
                                                    <p>Android Application</p>
                                                </li>
                                                <li>
                                                    <p>IOS Application</p>
                                                </li>
                                                <li>
                                                    <p>UX/UI Designs</p>
                                                </li>
                                                <li>
                                                    <p>Wordpress Develop</p>
                                                </li>
                                                <li>
                                                    <p>PSD to HTML</p>
                                                </li>
                                                <li>
                                                    <p>Digital Marketing</p>
                                                </li>
                                                <li>
                                                    <p>Content Editing</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="buy-btn-wrapper">
                                            <a class="mybtn1 price-active" href="#">Start Now <i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-box premium">
                                        <div class="price-title">
                                            <h3 class="heading-title">Premium Plan</h3>
                                            <p class="heading-sub-title">This is Premium Service Plan</p>
                                        </div>
                                        <div class="price-rate">
                                            <div class="center-align-content">
                                                <p class="price">$450</p>
                                                <p class="duration">/mo</p>
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <ul class="service-feature-list">
                                                <li>
                                                    <p>Android Application</p>
                                                </li>
                                                <li>
                                                    <p>IOS Application</p>
                                                </li>
                                                <li>
                                                    <p>UX/UI Designs</p>
                                                </li>
                                                <li>
                                                    <p>Wordpress Develop</p>
                                                </li>
                                                <li>
                                                    <p>PSD to HTML</p>
                                                </li>
                                                <li>
                                                    <p>Digital Marketing</p>
                                                </li>
                                                <li>
                                                    <p>Content Editing</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="buy-btn-wrapper">
                                            <a class="mybtn1" href="#">Start Now <i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">

                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-box basic">
                                        <div class="price-title">
                                            <h3 class="heading-title">Basic Plan</h3>
                                            <p class="heading-sub-title">This is basic Service Plan</p>
                                        </div>
                                        <div class="price-rate">
                                            <div class="center-align-content">
                                                <p class="price">$666</p>
                                                <p class="duration">/yr</p>
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <ul class="service-feature-list">
                                                <li>
                                                    <p>Android Application</p>
                                                </li>
                                                <li>
                                                    <p>IOS Application</p>
                                                </li>
                                                <li>
                                                    <p>UX/UI Designs</p>
                                                </li>
                                                <li>
                                                    <p>Wordpress Develop</p>
                                                </li>
                                                <li>
                                                    <p>PSD to HTML</p>
                                                </li>
                                                <li>
                                                    <p>Digital Marketing</p>
                                                </li>
                                                <li>
                                                    <p>Content Editing</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="buy-btn-wrapper">
                                            <a class="mybtn1" href="#">Start Now <i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-box standard">
                                        <div class="price-title">
                                            <h3 class="heading-title">Standard Plan</h3>
                                            <p class="heading-sub-title">This is Standard Service Plan</p>
                                        </div>
                                        <div class="price-rate">
                                            <div class="center-align-content">
                                                <p class="price">$888</p>
                                                <p class="duration">/yr</p>
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <ul class="service-feature-list">
                                                <li>
                                                    <p>Android Application</p>
                                                </li>
                                                <li>
                                                    <p>IOS Application</p>
                                                </li>
                                                <li>
                                                    <p>UX/UI Designs</p>
                                                </li>
                                                <li>
                                                    <p>Wordpress Develop</p>
                                                </li>
                                                <li>
                                                    <p>PSD to HTML</p>
                                                </li>
                                                <li>
                                                    <p>Digital Marketing</p>
                                                </li>
                                                <li>
                                                    <p>Content Editing</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="buy-btn-wrapper">
                                            <a class="mybtn1 price-active" href="#">Start Now <i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-box premium">
                                        <div class="price-title">
                                            <h3 class="heading-title">Premium Plan</h3>
                                            <p class="heading-sub-title">This is Premium Service Plan</p>
                                        </div>
                                        <div class="price-rate">
                                            <div class="center-align-content">
                                                <p class="price">$999</p>
                                                <p class="duration">/yr</p>
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <ul class="service-feature-list">
                                                <li>
                                                    <p>Android Application</p>
                                                </li>
                                                <li>
                                                    <p>IOS Application</p>
                                                </li>
                                                <li>
                                                    <p>UX/UI Designs</p>
                                                </li>
                                                <li>
                                                    <p>Wordpress Develop</p>
                                                </li>
                                                <li>
                                                    <p>PSD to HTML</p>
                                                </li>
                                                <li>
                                                    <p>Digital Marketing</p>
                                                </li>
                                                <li>
                                                    <p>Content Editing</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="buy-btn-wrapper">
                                            <a class="mybtn1" href="#">Start Now <i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </section>
    <!-- pricing part End -->

    <!-- Blog Area Start -->
    <section class="blog" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title extra">
                        <h2 class="title">Our Latest Blog</h2>
                       
                        <p>Expenses as material breeding insisted building to in. Continual so distrusts pronounce by
                            unwilling listening. Thing do taste on we manor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-slider">
                        <div class="item">
                            <div class="blog-box">
                                <div class="blog-images">
                                    <img src="assets/images/news/1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="blog-details">
                                    <ul class="post-meta-one">
                                        <li><a href="#"><i class="far fa-user"></i> John Doe </a></li>
                                        <li><a href="#"><i class="far fa-clock"></i> 1 Jan 2019 </a></li>
                                    </ul>
                                    <h3>
                                    <a class="blog-title" href='#'>
                                        His followed carriage propos.
                                    </a>
                                    </h3>
                                    <p class="post-body">
                                            Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs do ye admire. 
                                    </p>
                                </div>
                                <ul class="post-meta-two">
                                        <li>
                                            <a href="#">
                                                <i class="far fa-thumbs-up"></i>
                                                  <span>150</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="far fa-comments"></i> 
                                                <span>63</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="far fa-eye"></i> 
                                                <span>180</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="far fa-share-square"></i> 
                                                <span>20</span>
                                            </a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        <div class="item">
                                <div class="blog-box">
                                    <div class="blog-images">
                                        <img src="assets/images/news/2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="blog-details">
                                        <ul class="post-meta-one">
                                            <li><a href="#"><i class="far fa-user"></i> John Doe </a></li>
                                            <li><a href="#"><i class="far fa-clock"></i> 2 Jan 2019 </a></li>
                                        </ul>
                                        <h3>
                                        <a class="blog-title" href='#'>
                                            Followed his carriage propos.
                                        </a>
                                        </h3>
                                        <p class="post-body">
                                                Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs do ye admire. 
                                        </p>
                                    </div>
                                    <ul class="post-meta-two">
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-thumbs-up"></i>
                                                      <span>110</span> 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-comments"></i> 
                                                    <span>33</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-eye"></i> 
                                                    <span>160</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-share-square"></i> 
                                                    <span>50</span>
                                                </a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                            <div class="item">
                                    <div class="blog-box">
                                        <div class="blog-images">
                                            <img src="assets/images/news/3.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="blog-details">
                                            <ul class="post-meta-one">
                                                <li><a href="#"><i class="far fa-user"></i> John Doe </a></li>
                                                <li><a href="#"><i class="far fa-clock"></i> 3 Jan 2019 </a></li>
                                            </ul>
                                            <h3>
                                            <a class="blog-title" href='#'>
                                                Carriage his followed propos.
                                            </a>
                                            </h3>
                                            <p class="post-body">
                                                    Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs do ye admire. 
                                            </p>
                                        </div>
                                        <ul class="post-meta-two">
                                                <li>
                                                    <a href="#">
                                                        <i class="far fa-thumbs-up"></i>
                                                          <span>140</span> 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="far fa-comments"></i> 
                                                        <span>62</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="far fa-eye"></i> 
                                                        <span>180</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="far fa-share-square"></i> 
                                                        <span>27</span>
                                                    </a>
                                                </li>
                                            </ul>
                                    </div>
                                </div>
                                <div class="item">
                                        <div class="blog-box">
                                            <div class="blog-images">
                                                <img src="assets/images/news/4.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="blog-details">
                                                <ul class="post-meta-one">
                                                    <li><a href="#"><i class="far fa-user"></i> John Doe </a></li>
                                                    <li><a href="#"><i class="far fa-clock"></i> 4 Jan 2019 </a></li>
                                                </ul>
                                                <h3>
                                                <a class="blog-title" href='#'>
                                                    Propos his followed carriage.
                                                </a>
                                                </h3>
                                                <p class="post-body">
                                                        Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs do ye admire. 
                                                </p>
                                            </div>
                                            <ul class="post-meta-two">
                                                    <li>
                                                        <a href="#">
                                                            <i class="far fa-thumbs-up"></i>
                                                              <span>120</span> 
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="far fa-comments"></i> 
                                                            <span>43</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="far fa-eye"></i> 
                                                            <span>120</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="far fa-share-square"></i> 
                                                            <span>23</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End-->

    <!-- Partner Area Start -->
    <section id="faq" class="faq">
            <div class="overlay"></div>
            <img class="shape1" src="assets/images/bgshape1.png" alt="">
            <img class="shape2" src="assets/images/bgshape2.png" alt="">
        <div class="container">
                <div class="section-title extra">
                        <h2 class="title">have any Question</h2>
                       
                        <p>Expenses as material breeding insisted building to in. Continual so distrusts pronounce by
                            unwilling listening. Thing do taste on we manor.
                        </p>
                    </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel-group accordion" id="accordion-1">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 data-toggle="collapse" aria-expanded="true" data-target="#one" aria-controls="one" class="panel-title">
                                      What's Businesio ?
                                    </h4>
                                </div>
                                <div id="one" class="panel-collapse collapse show" aria-labelledby="one" data-parent="#accordion-1">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 data-toggle="collapse" aria-expanded="false" data-target="#two" aria-controls="two" class="panel-title">
                                      Why I will work with Businesio ?
                                    </h4>
                                </div>
                                <div id="two" class="panel-collapse collapse" aria-labelledby="two" data-parent="#accordion-1">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 data-toggle="collapse" aria-expanded="false" data-target="#three" aria-controls="three" class="panel-title">
                                      How can I be confident of the quality ?
                                    </h4>
                                </div>
                                <div id="three" class="panel-collapse collapse" aria-labelledby="three" data-parent="#accordion-1">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 data-toggle="collapse" aria-expanded="false" data-target="#four" aria-controls="four" class="panel-title">
                                       How we communicate with clients ?
                                    </h4>
                                </div>
                                <div id="four" class="panel-collapse collapse" aria-labelledby="four" data-parent="#accordion-1">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 data-toggle="collapse" aria-expanded="false" data-target="#four2" aria-controls="four2" class="panel-title">
                                       How can I be confident of the quality ?
                                    </h4>
                                </div>
                                <div id="four2" class="panel-collapse collapse" aria-labelledby="four2" data-parent="#accordion-1">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel-group accordion" id="accordion-2">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 data-toggle="collapse" aria-expanded="true" data-target="#five" aria-controls="five" class="panel-title">
                                       How many days do you work?
                                    </h4>
                                </div>
                                <div id="five" class="panel-collapse collapse show" aria-labelledby="five" data-parent="#accordion-2">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 data-toggle="collapse" aria-expanded="false" data-target="#six" aria-controls="six" class="panel-title">
                                       What are your payment models ?
                                    </h4>
                                </div>
                                <div id="six" class="panel-collapse collapse" aria-labelledby="six" data-parent="#accordion-2">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 data-toggle="collapse" aria-expanded="false" data-target="#seven" aria-controls="seven" class="panel-title">
                                       What are your payment terms ?
                                    </h4>
                                </div>
                                <div id="seven" class="panel-collapse collapse" aria-labelledby="seven" data-parent="#accordion-2">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 data-toggle="collapse" aria-expanded="false" data-target="#eight" aria-controls="eight" class="panel-title">
                                       How do you assure confidentiality?
                                    </h4>
                                </div>
                                <div id="eight" class="panel-collapse collapse" aria-labelledby="eight" data-parent="#accordion-2">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 data-toggle="collapse" aria-expanded="false" data-target="#six2" aria-controls="six2" class="panel-title">
                                       What are your payment models ?
                                    </h4>
                                </div>
                                <div id="six2" class="panel-collapse collapse" aria-labelledby="six2" data-parent="#accordion-2">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partner Area End -->

    <!-- Contact Area Start -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title">
                        <h2 class="title">Contact Us</h2>
                        <p>Expenses as material breeding insisted building to in. Continual so distrusts pronounce by
                            unwilling listening. Thing do taste on we manor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <ul class="info-contact">
                        <li>
                            <div class="info-box box1">
                                <div class="left">
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="content">
                                        <p>+333 123 4565 7898</p>
                                        <p>+333 153 4575 7893</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="info-box box2">
                                <div class="left">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="content">
                                        <p>demoname@name.com</p>
                                        <p>anothername@name.com</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="info-box box3">
                                <div class="left">
                                    <div class="icon">
                                        <i class="fas fa-map-marked-alt"></i>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="content">
                                        <p>140 Berkley Street, Philadelphia, Pennsylvania</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-8">
                    <div class="contact-form-wrapper">
                        <form id="contact-form" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="input-field borderd" id="name" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="col-md-12">
                                    <input type="email" class="input-field borderd" id="email" placeholder="Eenter Your Email"
                                        required>
                                </div>
                                <div class="col-12">
                                    <textarea class="input-field borderd textarea" rows="3" id="message" placeholder="Write your message here"
                                        required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="mybtn1"> Send Message <i class="far fa-envelope"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row brand">
                <div class="col-12">
                    <div class="brand-slider">
                        <div class="item">
                            <a href="#">
                                <img src="assets/images/brand/envato.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="assets/images/brand/envato.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="assets/images/brand/envato.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                                <a href="#">
                                    <img src="assets/images/brand/envato.png" alt="">
                                </a>
                        </div>
                        <div class="item">
                                <a href="#">
                                    <img src="assets/images/brand/envato.png" alt="">
                                </a>
                        </div>
                        <div class="item">
                                <a href="#">
                                    <img src="assets/images/brand/envato.png" alt="">
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <!-- Contact Area End -->

@endsection

