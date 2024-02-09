<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>AL +</title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

    <meta name="title" content="Design Interior Surabaya | AL +">
    <meta name="url" content="{{ route('index') }}">
    <meta
        content="desain interior surabaya, desain grafis surabaya, kontraktor surabaya, desain arsitektur surabaya, desain kamar surabaya, desain kamar anak surabaya, desain furnitur surabaya, desain galeri surabaya, desain dapur surabaya, desain ruang tamu surabaya, desain kantor surabaya, desain studio surabaya, desain kamar mandi surabaya"
        name="description">
    <meta
        content="desain interior surabaya, desain grafis surabaya, kontraktor surabaya, desain arsitektur surabaya, desain kamar surabaya, desain kamar anak surabaya, desain furnitur surabaya, desain galeri surabaya, desain dapur surabaya, desain ruang tamu surabaya, desain kantor surabaya, desain studio surabaya, desain kamar mandi surabaya"
        name="keywords">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="Design Interior Surabaya | AL +">
    <meta property="og:url" content="{{ route('index') }}" />
    <meta property="og:description"
        content="Punya rencana untuk mengadakan acara komunitas? Ruangan di MyCo fleksibel untuk dimodifikasi sesuai kebutuhan event Anda, yuk kunjungi MyCo dan MyCo X. renovasi atau modifikasi interior rumah anda, di AL+ akan merealisasikan hal itu sesuai permintaan anda, yuk hubungi kami segera">
       <meta property="og:site_name" content="Design Interior Surabaya | AL +" />


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon2.svg') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lightgallery.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/woocommerce.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/royal-preload.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/plugins/revolution/revolution/css/navigation.css') }}">

    @stack('style-alt')
</head>

<body>
    {{-- <div id="royal_preloader"></div> --}}

    <div id="page" class="site">
        @include('layouts.header')

        <div id="side-panel" class="side-panel">
            <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
            <div class="side-panel-block">
                <div class="side-panel-wrap">
                    <div class="the-logo">
                        <a href="index-html">
                            <img src="{{ asset('assets/images/logo-home-3.svg') }}" alt="AL+">
                        </a>
                    </div>
                    <div class="ot-heading ">
                        <h2 class="main-heading">Contact Info</h2>
                    </div>
                    <div class="side-panel-cinfo">
                        <ul class="panel-cinfo">
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="list-item-text">Jl. Embong Kenongo 77, Sby</span>
                            </li>
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="list-item-text">alplus.id@gmail.com</span>
                            </li>
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="list-item-text">+62878-5088-2828</span>
                            </li>
                        </ul>
                    </div>
                    <div class="side-panel-social">
                        <ul>
                            <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="site-content">
            @yield('content')
        </div>


        <footer id="site-footer" class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                        <div class="widget-footer">
                            <img src="{{ asset('assets/images/logo-home-3.svg') }}" class="footer-logo"
                                alt="">
                            <p>Made to last forever. Experience AL+, experience #ADefinitePlus.</p>
                            <div class="footer-social list-social">
                                <ul>
                                    <li><a href="http://facebook.com" target="_self"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://twitter.com" target="_self"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a href="http://linkedin.com" target="_self"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="http://instagram" target="_self"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                        <div class="widget-footer">
                            <h6>Contacts</h6>
                            <ul class="footer-list">
                                <li class="footer-list-item">
                                    <span class="list-item-icon"><i class="ot-flaticon-place"></i></span>
                                    <span class="list-item-text">Jl. Embong Kenongo 77, Sby</span>
                                </li>
                                <li class="footer-list-item">
                                    <span class="list-item-icon"><i class="ot-flaticon-mail"></i></span>
                                    <span class="list-item-text">alplus.id@gmail.com</span>
                                </li>
                                <li class="footer-list-item">
                                    <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                                    <span class="list-item-text">+62878-5088-2828</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                        <div class="widget-footer widget-contact">
                            <h6>Latest Projects</h6>
                            <ul>
                                <li><a href="#">Stylish Family Appartment</a></li>
                                <li><a href="#">Modern Villa in Belgium</a></li>
                                <li><a href="#">Private House in Spain</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    {{-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="widget-footer footer-widget-subcribe">
                            <h6>Subscribe</h6>
                            <form class="mc4wp-form" method="post">
                                <div class="mc4wp-form-fields">
                                    <div class="subscribe-inner-form">
                                        <input type="email" name="EMAIL" placeholder="YOUR EMAIL"
                                            required="">
                                        <button type="submit" class="subscribe-btn-icon"><i
                                                class="ot-flaticon-send"></i></button>
                                    </div>
                                </div>
                            </form>
                            <p>Follow our newsletter to stay updated about agency.</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </footer><!-- #site-footer -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                        <p>Copyright © 2023<a class="text-light" href="#"></a> All
                            Rights Reserved.</p>
                    </div>
                    <div class="col-lg-5 col-md-12 align-self-center">
                        <ul class="icon-list-items inline-items justify-content-lg-end">
                            <li class="icon-list-item inline-item">
                                <a href="#"><span class="icon-list-text">Terms of use</span></a>
                            </li>
                            <li class="icon-list-item inline-item">
                                <a href="#"><span class="icon-list-text">Privacy Environmental
                                        Policy</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- #page -->
    {{-- <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a> --}}
    <a id="back-to-top" href="https://wa.me/yourphonenumber" class="show">
        <i class="fab fa-whatsapp"></i>
    </a>
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/mousewheel.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/royal_preloader.min.js') }}"></script> --}}
    <!-- REVOLUTION JS FILES -->

    <script src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script src="{{ asset('assets/js/rev-script-1.js') }}"></script>
    {{-- <script>
        window.jQuery = window.$ = jQuery;
        (function($) {
            "use strict";
            //Preloader
            Royal_Preloader.config({
                mode: 'progress',
                background: '#1a1a1a',
            });
        })(jQuery);
    </script> --}}
</body>

</html>
