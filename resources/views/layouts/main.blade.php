<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Theratio</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />
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
</head>

<body>
    {{-- <div id="royal_preloader"></div> --}}
    <div id="page" class="site">
        @include('layouts.header')

        {{-- <div id="side-panel" class="side-panel">
            <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
            <div class="side-panel-block">
                <div class="side-panel-wrap">
                    <div class="the-logo">
                        <a href="index-html">
                            <img src="{{ asset('assets/images/logo-footer.svg') }}" alt="Theratio">
                        </a>
                    </div>
                    <div class="ot-heading">
                        <h2 class="main-heading">Our Gallery</h2>
                    </div>
                    <div class="image-gallery">
                        <div id="gallery-1" class="gallery galleryid-102 gallery-columns-3 gallery-size-thumbnail">
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/150x150.png">
                                        <img src="https://via.placeholder.com/150x150.png" class=""
                                            alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/150x150.png">
                                        <img src="https://via.placeholder.com/150x150.png" class=""
                                            alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/150x150.png">
                                        <img src="https://via.placeholder.com/150x150.png" class=""
                                            alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/150x150.png">
                                        <img src="https://via.placeholder.com/150x150.png" class=""
                                            alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/150x150.png">
                                        <img src="https://via.placeholder.com/150x150.png" class=""
                                            alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/150x150.png">
                                        <img src="https://via.placeholder.com/150x150.png" class=""
                                            alt="">
                                    </a>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="ot-heading ">
                        <h2 class="main-heading">Contact Info</h2>
                    </div>
                    <div class="side-panel-cinfo">
                        <ul class="panel-cinfo">
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="panel-list-text">411 University St, Seattle, USA</span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="panel-list-text">theratio_interior@mail.com</span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="panel-list-text">+1 800 456 789 123</span>
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
        </div> --}}

        <div id="content" class="site-content">
            
            @yield('content')

        </div>


        <footer id="site-footer" class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                        <div class="widget-footer">
                            <img src="{{ asset('assets/images/logo-footer.svg') }}" class="footer-logo"
                                alt="">
                            <p>We provides a full range of interior design, architectural design.</p>
                            <div class="footer-social list-social">
                                <ul>
                                    <li><a href="http://facebook.com" target="_self"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://twitter.com" target="_self"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="http://linkedin.com" target="_self"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="http://instagram" target="_self"><i
                                                class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                        <div class="widget-footer">
                            <h6>Contacts</h6>
                            <ul class="footer-list">
                                <li class="footer-list-item">
                                    <span class="list-item-icon"><i class="ot-flaticon-place"></i></span>
                                    <span class="list-item-text">411 University St, Seattle, USA</span>
                                </li>
                                <li class="footer-list-item">
                                    <span class="list-item-icon"><i class="ot-flaticon-mail"></i></span>
                                    <span class="list-item-text">theratio_interior@mail.com</span>
                                </li>
                                <li class="footer-list-item">
                                    <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                                    <span class="list-item-text">+1 800 456 789 123</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                        <div class="widget-footer widget-contact">
                            <h6>Latest Projects</h6>
                            <ul>
                                <li><a href="#">Stylish Family Appartment</a></li>
                                <li><a href="#">Modern Villa in Belgium</a></li>
                                <li><a href="#">Private House in Spain</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
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
                    </div>
                </div>
            </div>
        </footer><!-- #site-footer -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                        <p>Copyright © 2020 Theratio by <a class="text-light" href="#">ThemeModern</a>. All
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
    <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
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
    <script src="{{ asset('assets/js/royal_preloader.min.js') }}"></script>
    <!-- REVOLUTION JS FILES -->

    <script src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script src="{{ asset('assets/js/rev-script-1.js') }}"></script>
    <script>
        window.jQuery = window.$ = jQuery;
        (function($) {
            "use strict";
            //Preloader
            Royal_Preloader.config({
                mode: 'progress',
                background: '#1a1a1a',
            });
        })(jQuery);
    </script>
</body>

</html>
