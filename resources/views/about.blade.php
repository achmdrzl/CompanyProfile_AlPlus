@extends('layouts.main')

@section('content')
    <div class="page-header dtable text-center header-transparent pheader-about"
        style="background-image: url('{{ asset('assets/images/B/(B1)BETA5-1.png') }}'); background-repeat: no-repeat; background-size: cover; color: #FFF;">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">Get to Know AL+</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="about-company">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 align-self-center text-center mb-5 mb-lg-0">
                    <div class="about-img">
                        <img src="{{ asset('assets/images/B/(A2)GOLF7.png') }}" alt="About AL+">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 align-self-center">
                    <div class="about-detail">
                        <div class="ot-heading is-dots">
                            <span>[ about AL+ ]</span>
                            <h2 class="main-heading">Striving Elegance in Every Design</h2>
                        </div>
                        <p>In AL+, we are dedicated to providing the highest quality of aluminum furniture for our clients.
                            We aim to create aesthetically pleasing kitchen and wardrobe solutions that can still perform
                            its utmost functionality.<br>
                            We think, we sketch, we build. Reach us if you have something in your mind – even as simple as
                            the color you’d want your countertop to be.</p>
                        <div class="ot-button">
                            <a href="{{ route('projects.index') }}" class="octf-btn octf-btn-dark border-hover-dark">View
                                Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="client-1 bg-light-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="clients-slide owl-theme owl-carousel">
                        <div class="img-item">
                            <figure>
                                <img src="{{ asset('assets/images/logo-partner/blum.png') }}" alt="Blum">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure>
                                <img src="{{ asset('assets/images/logo-partner/hafele.png') }}" alt="Hafele">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure>
                                <img src="{{ asset('assets/images/logo-partner/hettich.png') }}" alt="Hettich">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure>
                                <img src="{{ asset('assets/images/logo-partner/lamitak2.png') }}" alt="Lamitak">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure>
                                <img src="{{ asset('assets/images/logo-partner/taco.png') }}" alt="Taco">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure>
                                <img src="{{ asset('assets/images/logo-partner/quadra.png') }}" alt="Quadra">
                            </figure>
                        </div>
                        <!-- Add similar blocks for other images -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="client-1 bg-light-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="clients-slide owl-theme owl-carousel">
                        <div class="img-item">
                            <figure>
                                <img src="{{ asset('assets/images/logo-partner/blum.jpg') }}" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure>
                                <img src="{{ asset('assets/images/logo-partner/hafele.jpg') }}" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure>
                                <img src="{{ asset('assets/images/logo-partner/hettich.jpg') }}" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure>
                                <img src="{{ asset('assets/images/logo-partner/lamitak.jpg') }}" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure>
                                <img src="{{ asset('assets/images/logo-partner/taco-logo.jpg') }}" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure>
                                <img src="{{ asset('assets/images/logo-partner/quadra.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <section class="our-philosophy">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 theratio-align-center text-center">
                    <div class="ot-heading is-dots">
                        <span>[ company strategy ]</span>
                        <h2 class="main-heading text-light">Our Philosophy</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5 mb-xl-0">
                    <div class="support-box">
                        <div class="inner-box">
                            <div class="overlay flex-middle">
                                <div class="inner">
                                    <p>We call our style ‘live minimalism’. Live minimalism is not about a or visual look.
                                        It refers to inner feelings, to your true self.</p>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="icon-title">
                                    <span class="ot-flaticon-brickwall"></span>
                                    <h5>Our Missions</h5>
                                </div>
                                <img src="https://via.placeholder.com/750x628.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5 mb-xl-0">
                    <div class="support-box">
                        <div class="inner-box">
                            <div class="overlay flex-middle">
                                <div class="inner">
                                    <p>We call our style ‘live minimalism’. Live minimalism is not about a or visual look.
                                        It refers to inner feelings, to your true self.</p>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="icon-title">
                                    <span class="ot-flaticon-paint"></span>
                                    <h5>Our Vision</h5>
                                </div>
                                <img src="https://via.placeholder.com/750x628.png" class="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="support-box">
                        <div class="inner-box">
                            <div class="overlay flex-middle">
                                <div class="inner">
                                    <p>We call our style ‘live minimalism’. Live minimalism is not about a or visual look.
                                        It refers to inner feelings, to your true self.</p>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="icon-title">
                                    <span class="ot-flaticon-cube"></span>
                                    <h5>Our Values</h5>
                                </div>
                                <img src="https://via.placeholder.com/750x628.png"
                                    class="attachment-full size-full lazyloaded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-counter">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                    <div class="ot-counter">
                        <div>
                            <span>[</span>
                            <span class="num" data-to="180" data-time="2000">0</span>
                            <span>+]</span>
                        </div>
                        <h6>Current Clients</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                    <div class="ot-counter">
                        <div>
                            <span>[</span>
                            <span class="num" data-to="10" data-time="2000">0</span>
                            <span>+]</span>
                        </div>
                        <h6>years of experience</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-sm-0">
                    <div class="ot-counter">
                        <div>
                            <span>[</span>
                            <span class="num" data-to="35" data-time="2000">0</span>
                            <span>+]</span>
                        </div>
                        <h6>awards winning</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="ot-counter">
                        <div>
                            <span>[</span>
                            <span class="num" data-to="5" data-time="2000">0</span>
                            <span>+]</span>
                        </div>
                        <h6>Offices Worldwide</h6>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="our-portfolio">
        <div class="container container-big">
            <div class="row">
                <div class="col-lg-12 text-center theratio-align-center">
                    <div class="ot-heading is-dots">
                        <span>[ our process ]</span>
                        <h2 class="main-heading">Works</h2>
                    </div>
                    <div class="space-40"></div>
                    <div class="project-filter-wrapper">
                        <div class="projects-grid pf_4_cols style-2 p-info-s2 img-scale w-auto projects-metro">
                            <div class="grid-sizer"></div>
                            <div class="project-item category-19 thumb2x">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-standar.html">
                                            <img src="https://via.placeholder.com/1440x720.png" alt="">
                                        </a>
                                        <div class="overlay">
                                            <h5>Stylish Family Appartment</h5>
                                            <i class="ot-flaticon-add"></i>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-inner">
                                            <h5><a class="title-link" href="portfolio-standar.html">Stylish Family
                                                    Appartment</a></h5>
                                            <p class="portfolio-cates"><a href="#">Interior</a></p>
                                        </div>
                                        <a class="overlay" href="portfolio-standar.html"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item category-14 ">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-detail-slider.html">
                                            <img src="https://via.placeholder.com/720x720.png" alt="">
                                        </a>
                                        <div class="overlay">
                                            <h5>Minimal Guests House</h5>
                                            <i class="ot-flaticon-add"></i>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-inner">
                                            <h5><a class="title-link" href="portfolio-detail-slider.html">Minimal Guests
                                                    House</a></h5>
                                            <p class="portfolio-cates">
                                                <a href="#">Decor</a>
                                                <a href="#">Interior</a>
                                            </p>
                                        </div>
                                        <a class="overlay" href="portfolio-detail-slider.html"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item category-15 ">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-left.html">
                                            <img src="https://via.placeholder.com/720x720.png" alt="">
                                        </a>
                                        <div class="overlay">
                                            <h5>Art Family Residence</h5>
                                            <i class="ot-flaticon-add"></i>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-inner">
                                            <h5><a class="title-link" href="portfolio-left.html">Art Family Residence</a>
                                            </h5>
                                            <p class="portfolio-cates"><a href="#">Architecture</a></p>
                                        </div>
                                        <a class="overlay" href="portfolio-left.html"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item category-20 ">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-right.html">
                                            <img src="https://via.placeholder.com/720x720.png" alt="">
                                        </a>
                                        <div class="overlay">
                                            <h5>Private House in Spain</h5>
                                            <i class="ot-flaticon-add"></i>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-inner">
                                            <h5><a class="title-link" href="portfolio-right.html">Private House in
                                                    Spain</a></h5>
                                            <p class="portfolio-cates"><a href="#">Furniture</a></p>
                                        </div>
                                        <a class="overlay" href="portfolio-right.html"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item category-19 ">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-small.html">
                                            <img src="https://via.placeholder.com/720x720.png" alt="">
                                        </a>
                                        <div class="overlay">
                                            <h5>Modern Villa in Belgium</h5>
                                            <i class="ot-flaticon-add"></i>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-inner">
                                            <h5><a class="title-link" href="portfolio-small.html">Modern Villa in
                                                    Belgium</a></h5>
                                            <p class="portfolio-cates"><a href="#">Furniture</a></p>
                                        </div>
                                        <a class="overlay" href="portfolio-small.html"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item category-14 thumb2x">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-big.html">
                                            <img src="https://via.placeholder.com/1440x720.png" alt="">
                                        </a>
                                        <div class="overlay">
                                            <h5>Minimalistic Style Appartment</h5>
                                            <i class="ot-flaticon-add"></i>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-inner">
                                            <h5><a class="title-link" href="portfolio-big.html">Minimalistic Style
                                                    Appartment</a></h5>
                                            <p class="portfolio-cates"><a href="#">Furniture</a><a
                                                    href="#">interior</a></p>
                                        </div>
                                        <a class="overlay" href="portfolio-big.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <div style="margin-top:-80px;"></div>

    <section class="how-it-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 mb-5 mb-lg-0 align-self-center">
                    <div class="work-content">
                        <div class="ot-heading is-dots">
                            <span>[ Dig in deeper ]</span>
                            <h2 class="main-heading">Find out more</h2>
                        </div>
                        <div class="ot-accordions">
                            <div class="acc-item">
                                <div class="acc-toggle flex-middle" data-default="yes">
                                    I already have something in mind for my kitchen, but I want it to look as if it’s made
                                    out of wood. Could you swap the wood with something else? I have a bad experience with
                                    all kinds of wood since it’s not resistant to termites.
                                    <span class="down"><i class="fas fa-plus"></i></span>
                                    <span class="up"><i class="fas fa-minus"></i></span>
                                </div>
                                <div class="acc-content">
                                    Sure! Here in AL+, we have different types of finishings, including textured HPL that
                                    looks similar to wood. It’s termite free, so you can maintain the cozy look and feel
                                    without having to worry about the termites.
                                </div>
                            </div>
                            <div class="acc-item">
                                <div class="acc-toggle flex-middle">
                                    What are the other options for the furnishings?
                                    <span class="down"><i class="fas fa-plus"></i></span>
                                    <span class="up"><i class="fas fa-minus"></i></span>
                                </div>
                                <div class="acc-content">
                                    We also provide other materials, such as fluted glass, art mirror, and artglass.
                                </div>
                            </div>
                            <div class="acc-item">
                                <div class="acc-toggle flex-middle">
                                    Are you sure aluminum is safe for kitchen purposes? I’m afraid that it might rust and
                                    melt considering we might not be able to avoid water splashes and heat during the
                                    cooking process.
                                    <span class="down"><i class="fas fa-plus"></i></span>
                                    <span class="up"><i class="fas fa-minus"></i></span>
                                </div>
                                <div class="acc-content">
                                    Our aluminium is 100% safe for any use. We cover our raw materials with premium powder
                                    coating so that it doesn’t rust. Other than that, aluminum is a material widely known
                                    for its resistance to temperature change. Anything won’t happen even if you steam it
                                    directly!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="" style="margin-top: 35px;">
                        <img src="{{ asset('assets/images/B/(B5) RNAS3_000.png') }}" alt="FAQ Section">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="about-team">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="ot-heading is-dots">
                        <span>[ our professionals ]</span>
                        <h2 class="main-heading">Meet Our Skilled Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-slider owl-theme owl-carousel">
                    <div class="team-item">
                        <div class="team-wrap">
                            <div class="team-thumb">
                                <img src="https://via.placeholder.com/750x977.png" alt="Christina Torres">
                            </div>
                            <div class="team-text-overlay">
                                <div class="team-info dtable">
                                    <div class="dcell">
                                        <h4 class="m_name">Christina Torres</h4>
                                        <div class="team-social flex-middle">
                                            <span class="ot-flaticon-add"></span>
                                            <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                            <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                            <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="m_extra">
                                        <span>[ Company Founder ]</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-wrap">
                            <div class="team-thumb">
                                <img src="https://via.placeholder.com/750x977.png" alt="Jesica Lina">
                            </div>
                            <div class="team-text-overlay">
                                <div class="team-info dtable">
                                    <div class="dcell">
                                        <h4 class="m_name">Jesica Lina</h4>
                                        <div class="team-social flex-middle">
                                            <span class="ot-flaticon-add"></span>
                                            <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                            <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                            <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="m_extra">
                                        <span>[ Marketing Manager ]</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-wrap">
                            <div class="team-thumb">
                                <img src="https://via.placeholder.com/750x977.png" alt="Robert Cooper">
                            </div>
                            <div class="team-text-overlay">
                                <div class="team-info dtable">
                                    <div class="dcell">
                                        <h4 class="m_name">Robert Cooper</h4>
                                        <div class="team-social flex-middle">
                                            <span class="ot-flaticon-add"></span>
                                            <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                            <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                            <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="m_extra">
                                        <span>[ Finance Manager ]</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-wrap">
                            <div class="team-thumb">
                                <img src="https://via.placeholder.com/750x977.png" alt="Olivia Peterson">
                            </div>
                            <div class="team-text-overlay">
                                <div class="team-info dtable">
                                    <div class="dcell">
                                        <h4 class="m_name">Olivia Peterson</h4>
                                        <div class="team-social flex-middle">
                                            <span class="ot-flaticon-add"></span>
                                            <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                            <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                            <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="m_extra">
                                        <span>[ CEO of Company ]</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-wrap">
                            <div class="team-thumb">
                                <img src="https://via.placeholder.com/750x977.png" alt="Amalia Bruno">
                            </div>
                            <div class="team-text-overlay">
                                <div class="team-info dtable">
                                    <div class="dcell">
                                        <h4 class="m_name">Amalia Bruno</h4>
                                        <div class="team-social flex-middle">
                                            <span class="ot-flaticon-add"></span>
                                            <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                            <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                            <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="m_extra">
                                        <span>[ Interior Designer ]</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-wrap">
                            <div class="team-thumb">
                                <img src="https://via.placeholder.com/750x977.png" alt="Katie Doyle">
                            </div>
                            <div class="team-text-overlay">
                                <div class="team-info dtable">
                                    <div class="dcell">
                                        <h4 class="m_name">Katie Doyle</h4>
                                        <div class="team-social flex-middle">
                                            <span class="ot-flaticon-add"></span>
                                            <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                            <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                            <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="m_extra">
                                        <span>[ Interior Designer ]</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-wrap">
                            <div class="team-thumb">
                                <img src="https://via.placeholder.com/750x977.png" alt="Andrew Kinzer">
                            </div>
                            <div class="team-text-overlay">
                                <div class="team-info dtable">
                                    <div class="dcell">
                                        <h4 class="m_name">Andrew Kinzer</h4>
                                        <div class="team-social flex-middle">
                                            <span class="ot-flaticon-add"></span>
                                            <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                            <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                            <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="m_extra">
                                        <span>[ CEO of Company ]</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-wrap">
                            <div class="team-thumb">
                                <img src="https://via.placeholder.com/750x977.png" alt="Anna Richmond">
                            </div>
                            <div class="team-text-overlay">
                                <div class="team-info dtable">
                                    <div class="dcell">
                                        <h4 class="m_name">Anna Richmond</h4>
                                        <div class="team-social flex-middle">
                                            <span class="ot-flaticon-add"></span>
                                            <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                            <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                            <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="m_extra">
                                        <span>[ Marketing Manager ]</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-wrap">
                            <div class="team-thumb">
                                <img src="https://via.placeholder.com/750x977.png" alt="Christina Torres">
                            </div>
                            <div class="team-text-overlay">
                                <div class="team-info dtable">
                                    <div class="dcell">
                                        <h4 class="m_name">Christina Torres</h4>
                                        <div class="team-social flex-middle">
                                            <span class="ot-flaticon-add"></span>
                                            <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                            <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                            <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="m_extra">
                                        <span>[ Company Founder ]</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-wrap">
                            <div class="team-thumb">
                                <img src="https://via.placeholder.com/750x977.png" alt="Jesica Lina">
                            </div>
                            <div class="team-text-overlay">
                                <div class="team-info dtable">
                                    <div class="dcell">
                                        <h4 class="m_name">Jesica Lina</h4>
                                        <div class="team-social flex-middle">
                                            <span class="ot-flaticon-add"></span>
                                            <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                            <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                            <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="m_extra">
                                        <span>[ Marketing Manager ]</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-wrap">
                            <div class="team-thumb">
                                <img src="https://via.placeholder.com/750x977.png" alt="Robert Cooper">
                            </div>
                            <div class="team-text-overlay">
                                <div class="team-info dtable">
                                    <div class="dcell">
                                        <h4 class="m_name">Robert Cooper</h4>
                                        <div class="team-social flex-middle">
                                            <span class="ot-flaticon-add"></span>
                                            <a href="https://twitter.com"><i class="fab fab fa-twitter"></i></a>
                                            <a href="https://linkedin.com"><i class="fab fab fa-linkedin-in"></i></a>
                                            <a href="https://instagram.com"><i class="fab fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="m_extra">
                                        <span>[ Finance Manager ]</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
