<header id="site-header" class="site-header header-transparent">
    <!-- Main Header start -->
    <div class="octf-main-header is-fixed">
        <div class="octf-area-wrap">
            <div class="container-fluid octf-mainbar-container">
                <div class="octf-mainbar">
                    <div class="octf-mainbar-row octf-row">
                        <div class="octf-col logo-col no-padding">
                            {{-- <div id="site-logo" class="site-logo">
                                <a href="{{ route('index') }}">
                                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Theratio" class="">
                                </a>
                            </div> --}}
                            <div id="site-logo" class="site-logo">
                                <a href="{{ route('index') }}">
                                    {{-- <img src="{{ asset('assets/images/logo.svg') }}" alt="Theratio" class=""> --}}
                                    <h5 class="main-heading tp-caption tp-resizeme tp-caption-main text-light"
                                        style="margin-left:15px; margin-top:15px;">#ADefinitePlus.</h5>
                                </a>
                            </div>
                        </div>
                        <div class="octf-col menu-col no-padding">
                            <nav id="site-navigation" class="main-navigation">
                                <ul class="menu">
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="{{ route('about.index') }}">About</a></li>
                                    <li><a href="{{ route('projects.index') }}">Projects</a></li>
                                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                                    <li><a href="{{ route('contact.index') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="octf-col cta-col text-right no-padding">
                            <!-- Call To Action -->
                            <div class="octf-btn-cta">

                                {{-- <div class="octf-cart octf-cta-header">
                                    <a class="cart-contents" href="cart-page.html" title="View your shopping cart">
                                        <i class="ot-flaticon-shopping-bag"></i>
                                        <span class="count">2</span>
                                    </a>

                                    <div class="site-header-cart">
                                        <div class="widget woocommerce widget_shopping_cart">
                                            <div class="widget_shopping_cart_content">
                                                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                    <li class="woocommerce-mini-cart-item mini_cart_item">
                                                        <a class="remove remove_from_cart_button" href="#">×</a>
                                                        <a href="single-product.html"><img
                                                                src="https://via.placeholder.com/720x853.png"
                                                                class="" alt="">Velvet Teal
                                                            Blue</a>
                                                        <span class="quantity">1 × <span
                                                                class="amount"><bdi><span>$</span>195</bdi></span></span>
                                                    </li>
                                                    <li class="woocommerce-mini-cart-item mini_cart_item">
                                                        <a class="remove remove_from_cart_button" href="#">×</a>
                                                        <a href="single-product.html"><img
                                                                src="https://via.placeholder.com/720x853.png"
                                                                class="" alt="">Natural
                                                            Pouffe</a>
                                                        <span class="quantity">1 × <span
                                                                class="amount"><bdi><span>$</span>145</bdi></span></span>
                                                    </li>
                                                </ul>

                                                <p class="woocommerce-mini-cart__total total">
                                                    <strong>Subtotal:</strong> <span
                                                        class="amount"><bdi><span>$</span>340</bdi></span>
                                                </p>
                                                <p class="woocommerce-mini-cart__buttons buttons">
                                                    <a href="cart-page.html" class="button wc-forward">View
                                                        cart</a>
                                                    <a href="checkout-page.html"
                                                        class="button checkout wc-forward">Checkout</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="octf-search octf-cta-header">
                                    <div class="toggle_search octf-cta-icons">
                                        <i class="ot-flaticon-search"></i>
                                    </div>
                                    <!-- Form Search on Header -->
                                    <div class="h-search-form-field collapse">
                                        <div class="h-search-form-inner">
                                            <form role="search" method="get" class="search-form">
                                                <input type="search" class="search-field" placeholder="SEARCH..."
                                                    value="" name="s">
                                                <button type="submit" class="search-submit"><i
                                                        class="ot-flaticon-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="octf-sidepanel octf-cta-header" style="background-color: #FFF"> --}}
                                <div class="octf-sidepanel octf-cta-header">
                                    <div class="site-overlay panel-overlay"></div>
                                    <div id="panel-btn" class="panel-btn octf-cta-icons">
                                        <a href="{{ route('index') }}">
                                            <img src="{{ asset('assets/images/logo-home-3.svg') }}" alt="AL+"
                                                class="" style="margin-left:25px;">
                                        </a>
                                        {{-- <img src="{{ asset('assets/images/logo-home-1.png') }}" alt=""> --}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_mobile">
        <div class="container-fluid">
            <div class="octf-mainbar-row octf-row">
                <div class="octf-col">
                    <div class="mlogo_wrapper clearfix">
                        <div class="mobile_logo">
                            <a href="{{ route('index') }}">
                                {{-- <img src="{{ asset('assets/images/logo.svg') }}" alt="Theratio" class=""> --}}
                                <h5 class="text-light" style="margin-left:15px; margin-top:15px;">#ADefinitePlus.</h5>
                            </a>
                        </div>
                        {{-- <div class="mobile_logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/images/logo.svg') }}" alt="Theratio">
                            </a>
                        </div> --}}
                    </div>
                </div>
                <div class="octf-col justify-content-end">
                    <div class="octf-menu-mobile octf-cta-header">
                        <div id="mmenu-toggle" class="mmenu-toggle">
                            <button>
                                {{-- <i class="ot-flaticon-menu"></i> --}}
                                <img src="{{ asset('assets/images/logo-home-3.svg') }}" alt="AL+" class="">
                            </button>
                        </div>
                        <div class="site-overlay mmenu-overlay"></div>
                        <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                            <div class="mmenu-inner">
                                <a class="mmenu-close" href="#"><i class="ot-flaticon-right-arrow"></i></a>
                                <div class="mobile-nav">
                                    <ul id="menu-main-menu" class="mobile_mainmenu none-style">
                                        <li><a href="{{ route('index') }}">Home</a></li>
                                        <li><a href="{{ route('about.index') }}">About</a></li>
                                        <li><a href="{{ route('projects.index') }}">Projects</a></li>
                                        <li><a href="{{ route('blog.index') }}">Blog</a></li>
                                        <li><a href="{{ route('contact.index') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
