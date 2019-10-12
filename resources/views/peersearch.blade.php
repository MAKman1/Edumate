@extends('layouts.parent')
@section('head')
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
@endsection
@section('scripts')
    <!-- way poin js-->
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

    <script>
        $(function() {
            $('#scrolltoData').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
            });
        });
    </script>
    <script type="text/javascript">
        $('#searchCourses').on('keyup keypress focus',function(){
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
            $value=$(this).val();
            $institute_id={{$institute->id}};
            if( $value.length > 0){
                $("#courseSearchResults").css("display", 'block');
                $("#courseSearchResults").css("width", $("#searchCoursesForm").width() - 10);
                $('#courseSearchResults').html( "<td><div class=\"smallLoader\" id=\"searchLoader\"></div></td>");
                $.ajax({
                type : 'get',
                url : '{{URL::to('course-search')}}',
                data:{'search':$value, 'institute_id': $institute_id},
                success:function(data){
                    
                    $('#courseSearchResults').html(data);
                }
                });
            }
            else{
                $("#courseSearchResults").css("display", "none");
            }
        });
        $('#searchCoursesForm').on('focusout', function(e) {
            window.setTimeout(function() {
                $("#courseSearchResults").css("display", 'none');
            }, 500);
        }); 
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
            $institute_id={{$institute->id}};
            $.ajax({
                type : 'get',
                url : '{{URL::to('popular-courses')}}',
                data:{'institute_id': $institute_id},
                success:function(data){
                    var owl = $("#popular-courses-div");
                    owl.trigger('replace.owl.carousel', data.html).trigger('refresh.owl.carousel');
                }
            });
        });
    </script>
@endsection
@section('body')
<div class="index3 index7 index-color1">
    <div id="home" class="hero-area">
        
        <canvas class="dots-canvas"></canvas>
        <img class="bgimg" src="{{ asset('/assets/images/heroarea/one/bg.png') }}" alt="">
        <div class="col-lg-12 d-flex align-self-center">
                <h2 class="presearchtitle" style="height:200px;">
                    Find a study peer from <u>{{ $institute->name}}</u>.
                </h2>
        </div>
        <div class="container">
            <div class="row">
                    <!-- <div class="col-lg-12 d-flex align-self-center">
                            <h2 class="presearchtitle" style="height:200px;">
                                Find a study peer from <u>{{ $institute->name}}</u>.
                            </h2>
                    </div> -->
                    <div class="col-lg-12 d-flex align-self-center">
                        <span class="badge badge-primary" style="margin:auto;text-align:center; margin-bottom:50px;">
                            <strong>STEP 1</strong>: Select your course
                        </span>
                    </div>
                    <form id="searchCoursesForm" class="search-form" style="margin-bottom:23vh;">
                        <input type="search" value="" id="searchCourses" placeholder="Find your course" class="search-input">
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

                    <table id="courseSearchResults" class="search-results" style="top:30% !important;">
                    <td><div class="smallLoader" id="searchLoader"></div></td>
                    </table>

                    <div class="col-lg-12 d-flex align-self-center">
                            <div id="scrollsection07" style="text-align:center;width:100vw;">
                            <a id="scrolltoData" class="nav-link" href="#popular-courses">
                                <p>Or select from popular courses</p>
                                <span></span><span></span></a>
                            </div>
                    </div>
                    
            </div>
        </div>

        <section class="team" id="popular-courses" style="padding-top:80px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title">
                        <h2 class="presearchtitle" style="padding-bottom:0px;">Popular courses</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div id="popular-courses-div" class="team_slider">
                    </div>             
                </div>
            </div>
        </section>
    </div>
</div>
    <!-- Service Area start -->
    <section class="service" id="service">

        <div class="round-shape4">
            <img src="../assets/images/round-shape4.png" alt="">
        </div>
        <div class="round-shape6">
            <img src="../assets/images/round-shape6.png" alt="">
        </div>
        <img class="shape" src="../assets/images/shape2.png" alt="">
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
        <div class="background"></div>
        <div class="round-shape1">
            <img src="../assets/images/round-shape1.png" alt="">
        </div>
        <div class="round-shape2">
            <img src="../assets/images/round-shape1.png" alt="">
        </div>
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

    

    <!-- Blog Area Start -->
    <section class="blog" id="blog">
        <div class="dubble-shape">
            <div class="dubble-inner">
                <div class="round-shape2">
                    <img src="../assets/images/round-shape2.png" alt="">
                </div>
                <div class="round-shape3">
                    <img src="../assets/images/round-shape3.png" alt="">
                </div>
            </div>
        </div>
        <img class="shape" src="../assets/images/shape2.png" alt="">
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
            
            </div>
        </div>
    </section>

@endsection