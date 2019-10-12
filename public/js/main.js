$(function ($) {
    "use strict";


        /* Offset start */
        var $window = $(window),
        $body = $('body');
        // Click To Scroll 

        $(function () {
            $('.navigation .navbar-nav a').on('click', function (event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top -80
                }, 1000);
                event.preventDefault();
            });
        });


        // Navbar collapse on click
        $('.nav-link').on('click', function () {
            $('.navbar-collapse').collapse('hide');
        });

        // bottom to top js start
        var html_body = $('html, body');
        var amountScrolled = 300;
        var bootomclass = $('.bottomtotop');
        bootomclass.hide();
        $window.on('scroll', function () {
            if ($window.scrollTop() > amountScrolled) {
                bootomclass.fadeIn('slow');
            } else {
                bootomclass.fadeOut('slow');
            }
            if ($(".navigation").offset().top > 0) {
                $(".navigation").addClass("stiky-nav");
            } else {
                $(".navigation").removeClass("stiky-nav");
            }
        });

        bootomclass.on('click', function () {
            html_body.animate({
                scrollTop: 0
            }, 600);
            return false;
        });

        //scrollspy menu
        $body.scrollspy({
            target: '#mainmenu',
            offset: 100
        });
        
    //  preloader js start 
    $window.on('load', function () {
    setTimeout(function () {
        $('#preloader').fadeOut('slow', function () {});
    }, 600);
    });


        $('.project-gallery').mixItUp();

        // counter up
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });

        //   magnific popup activation
        $('.video-play-btn').magnificPopup({
            type: 'video'
        });
        $('.img-popup').magnificPopup({
            type: 'image'
        });



        // testimonial-slider 
        var $testimonialSlider = $('.testimonial-slider');
            $testimonialSlider.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            nav: true,
            nav: true,
            dots:false,
            autoplayTimeout: 6000,
            smartSpeed: 1200,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                576: {
                    items: 1,
                    nav: false
                },
                950: {
                    items: 1,
                    nav: false
                },
                960: {
                    items: 1,
                    nav: false
                },
                1200: {
                    items: 1
                }
            }
        });

        // team_slider
        var $team_slider = $('.team_slider');
            $team_slider.owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            margin:30,
            autoplay: false,
            center: true,
            autoplayTimeout: 8000,
            smartSpeed: 1500,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                },
                1920: {
                    items:3
                }
            }
        });

        // blog-slider
        var $blog_slider = $('.blog-slider');
            $blog_slider.owlCarousel({
            loop: true,
            nav: false,
            dots:false,
            margin:30,
            autoplay: true,
            autoplayTimeout: 6000,
            smartSpeed: 1200,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 3
                },
                1920: {
                    items: 3
                }
            }
        });

        // partner-slider
        var $brand_slider = $('.brand-slider');
            $brand_slider.owlCarousel({
            loop: true,
            nav: false,
            dots:false,
            margin:30,
            autoplay: true,
            autoplayTimeout: 6000,
            smartSpeed: 1200,
            responsive: {
                0: {
                    items: 2
                },
                450: {
                    items: 3
                },
                768: {
                    items: 4
                },
                1200: {
                    items: 5
                },
                1920: {
                    items: 5
                }
            }
        });


            /*-----------------------------
            Blog Comments Reblay Form
            -----------------------------*/
            $(document).on('click','.replay',function(e){
                e.preventDefault();
                let parent = $(this).parent().parent().parent();
                
                if(parent.children('.replay-form').length <1){
                    parent.append(`<div class="replay-form">
                    <div class="replay-form-close">&times;</div>
                    <form action="#">
                            <textarea class="input-field" placeholder="Write your replay"></textarea>
                            <button class="mybtn1 replay-comment-btn">REPLAY COMMENT <i class="far fa-comment"></i></button>
                    </form>
                    </div>`);
                }
            });
            $(document).on('click','.replay-form-close',function(e){
                e.preventDefault();
                $(this).parent().remove();
            });

});

var canvasDots = function() {
    var canvas = document.querySelector('canvas.dots-canvas'),
        ctx = canvas.getContext('2d'),
        colorDot = '#ffffff',
        color = '#ffffff';
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    canvas.style.display = 'block';
    ctx.fillStyle = colorDot;
    ctx.lineWidth = .2;
    ctx.strokeStyle = color;

    var mousePosition = {
        x: 30 * canvas.width / 100,
        y: 30 * canvas.height / 100
    };

    var dots = {
        nb: 350,
        distance: 60,
        d_radius: 100,
        array: []
    };

    function Dot(){
        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height;

        this.vx = -.5 + Math.random();
        this.vy = -.5 + Math.random();

        this.radius = Math.random();
    }

    Dot.prototype = {
        create: function(){
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
        ctx.fill();
        },

        animate: function(){
        for(i = 0; i < dots.nb; i++){

            var dot = dots.array[i];

            if(dot.y < 0 || dot.y > canvas.height){
            dot.vx = dot.vx;
            dot.vy = - dot.vy;
            }
            else if(dot.x < 0 || dot.x > canvas.width){
            dot.vx = - dot.vx;
            dot.vy = dot.vy;
            }
            dot.x += dot.vx;
            dot.y += dot.vy;
        }
        },

        line: function(){
        for(i = 0; i < dots.nb; i++){
            for(j = 0; j < dots.nb; j++){
            i_dot = dots.array[i];
            j_dot = dots.array[j];

            if((i_dot.x - j_dot.x) < dots.distance && (i_dot.y - j_dot.y) < dots.distance && (i_dot.x - j_dot.x) > - dots.distance && (i_dot.y - j_dot.y) > - dots.distance){
                if((i_dot.x - mousePosition.x) < dots.d_radius && (i_dot.y - mousePosition.y) < dots.d_radius && (i_dot.x - mousePosition.x) > - dots.d_radius && (i_dot.y - mousePosition.y) > - dots.d_radius){
                ctx.beginPath();
                ctx.moveTo(i_dot.x, i_dot.y);
                ctx.lineTo(j_dot.x, j_dot.y);
                ctx.stroke();
                ctx.closePath();
                }
            }
            }
        }
        }
    };

    function createDots(){
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        for(i = 0; i < dots.nb; i++){
        dots.array.push(new Dot());
        dot = dots.array[i];

        dot.create();
        }

        dot.line();
        dot.animate();
    }

    window.onmousemove = function(parameter) {
        mousePosition.x = parameter.pageX;
        mousePosition.y = parameter.pageY;
    }

    mousePosition.x = window.innerWidth / 2;
    mousePosition.y = window.innerHeight / 2;

    setInterval(createDots, 1000/30); 
    };

    $( document ).ready(function() {
        if ($('.dots-canvas').length > 0) {
            canvasDots();
        }
    });
    