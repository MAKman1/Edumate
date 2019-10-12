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
    <!-- magnific popup -->
    <script src="{{ asset('/js/jquery.magnific-popup.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <!-- counterup js-->
    <script src="{{ asset('/js/jquery.counterup.min.js') }}"></script>
    <!-- easing js-->
    <script src="{{ asset('/js/jquery.easing.1.3.js') }}"></script>

@endsection
@section('body')
    <section class="service" id="service">

        <div class="round-shape4">
            <img src="{{ asset('/assets/images/round-shape4.png') }}" alt="">
        </div>
        <div class="round-shape6">
            <img src="{{ asset('/}assets/images/round-shape6.png') }}" alt="">
        </div>
        <img class="shape" src="{{ asset('/assets/images/shape2.png') }}" alt="">
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

    <!-- Team Area Start -->
    <section class="team" id="team">
        <div class="background"></div>
        <div class="round-shape3">
            <img src="{{ asset('/assets/images/round-shape3.png') }}" alt="">
        </div>
        <div class="round-shape5">
            <img src="{{ asset('/assets/images/round-shape5.png') }}" alt="">
        </div>
        <div class="round-shape7">
            <img src="{{ asset('/assets/images/round-shape7.png') }}" alt="">
        </div>
        <div class="round-shape8">
            <img src="{{ asset('/assets/images/round-shape8.png') }}" alt="">
        </div>

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
                                <img src="{{ asset('/assets/images/team/1.png') }}" alt="">
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
                                <img src="{{ asset('/assets/images/team/2.png') }}" alt="">
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
                                <img src="{{ asset('/assets/images/team/3.png') }}" alt="">
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
                                <img src="{{ asset('/assets/images/team/4.png') }}" alt="">
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
                                <img src="{{ asset('/assets/images/team/5.png') }}" alt="">
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


    
@endsection