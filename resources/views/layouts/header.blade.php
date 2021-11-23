<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Courses</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{asset('assets/images/favicons/site.webmanifest')}}" />
    <meta name="description" content="Onilne Courses" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/icomoon-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/twentytwenty/twentytwenty.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/zilom.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/zilom-responsive.css')}}" />
    <style>
        .customer-logos {
       background-color: white;
   }

/* Slider */
.slick-slide {
    margin: 0px 20px;
}



.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;

    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;

    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;

    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;

    height: auto;

    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
    </style>
</head>

<body>

    <div class="preloader">
        <img class="preloader__image" width="60" src="{{asset('assets/images/loader.png')}}" alt="" />
    </div>

    <!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-header main-header--one  clearfix">

            <div class="main-header-two__bottom">
                <div class="container">
                    <div class="main-header-two__bottom-inner clearfix">
                        <nav class="main-menu main-menu--1">
                            <div class="main-menu__inner">
                                <div class="left">
                                    <div class="logo-box1">
                                        <a href="{{route('home')}}">
                                            <img src="{{asset('assets/images/resources/logo-1.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="right">
                                  <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                                    <ul class="main-menu__list">
                                        <li class="dropdown current">
                                            <a href="{{route('home')}}">Home</a>

                                        </li>

                                        <li class="dropdown">
                                            <a href="#">Courses</a>
                                            <ul>
                                                <li><a href="{{route('home')}}">Courses</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('about')}}">Coporate Training</a></li>
<!-- 
                                        <li><a href="{{route('about')}}">Explore Courses</a></li> -->
                                        <li><a href="{{route('contact')}}">Contact</a></li>



                                    </ul>
                                </div>

                                <div class="right">
                                    <div class="main-menu__right">
                                        <div class="main-menu__right-cart-search">
                                            <div class="main-menu__right-cart-box">

                                            </div>
                                            @guest
                                            <div class="main-menu__right-search-box">
                                                <a href="{{route('login')}}" style="background: #9fa4c4;"  class="thm-btn">Login</a>
                                                <a href="{{route('register-user')}}" style="background: #ffac81;"  class="thm-btn">Sign up</a>
                                            </div>
                                            @endguest
                                            @auth
                                            <div class="main-menu__right-search-box">
                                                <a href="{{route('dashboard')}}" style="background: #9fa4c4;"  class="thm-btn">Dashboard</a>
                                                <a href="{{route('signout')}}" style="background: #ffac81;"  class="thm-btn">Logout</a>
                                            </div>
                                            @endauth



                                        </div>
                                         @auth
                                        <ul class="main-menu__list">
                                            <li class="dropdown">
                                                <!-- <a href="#" style="color:black; padding: 5px 50px 5px 50px; border-radius: 10px;background: lightblue;" class="btn btn-sm">{{ Auth::user()->name }}</a> -->
                                                <ul>
                                                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                                    <li><a href="{{route('signout')}}">Logout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                     @endauth

                                    </div>
                                </div>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>

            <div style="background: #42378f;" class="main-header--two__top clearfix">
                <div  class="container">
                    <div  class="main-header--two__top-inner clearfix">
                        <div class="main-header--two__top-left">
                            <ul class="main-header--two__top-contact-info list-unstyled">
                                <li class="main-header--two__top-contact-info-single">

                                    <div class="text">
                                        <p><a href="tel:123456789">Entrepreneurship</a></p>
                                    </div>
                                </li>

                                <li class="main-header--two__top-contact-info-single">

                                    <div class="text">
                                        <p><a href="mailto:info@templatepath.com">Marketing</a></p>
                                    </div>
                                </li>
                                <li class="main-header--two__top-contact-info-single">

                                    <div class="text">
                                        <p><a href="mailto:info@templatepath.com">E-commerce</a></p>
                                    </div>
                                </li>
                                <li class="main-header--two__top-contact-info-single">

                                    <div class="text">
                                        <p><a href="mailto:info@templatepath.com">Digital Marketing</a></p>
                                    </div>
                                </li>
                                <li class="main-header--two__top-contact-info-single">

                                    <div class="text">
                                        <p><a href="mailto:info@templatepath.com">IT Management</a></p>
                                    </div>
                                </li>
                                <li class="main-header--two__top-contact-info-single">

                                    <div class="text">
                                        <p><a href="mailto:info@templatepath.com">Accounting & Finance</a></p>
                                    </div>
                                </li>
                                <li class="main-header--two__top-contact-info-single">

                                    <div class="text">
                                        <p><a href="mailto:info@templatepath.com"> HR Management</a></p>
                                    </div>
                                </li>

                            </ul>
                        </div>



                    </div>
                </div>
            </div>

        </header>


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content">

            </div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
