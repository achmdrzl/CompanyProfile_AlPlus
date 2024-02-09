@extends('layouts.main')

@section('content')
    @include('layouts.carousel-home')

    {{-- <div class="client-1 bg-light-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="clients-slide owl-theme owl-carousel">
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt="">
                            </figure>
                        </div>
                        <div class="img-item">
                            <figure><img src="https://via.placeholder.com/300x145.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <section class="story-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="story-text">
                        <p>“Even if you don’t have a ready sketch of what you want – we will help you to get the
                            result you dreamed of.”</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="story-author">
                        <img src="https://via.placeholder.com/140x140.png" class="" alt="">
                        <div class="story-content">
                            <h5 class="story-title">David Oswald</h5>
                            <p class="story-description">founder of company</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="about-1">
        <div class="grid-lines grid-lines-vertical">
            <span class="g-line-vertical line-left color-line-default"></span>
            <span class="g-line-vertical line-center color-line-default"></span>
            <span class="g-line-vertical line-right color-line-default"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-5 mb-lg-0">
                    <div class="about-img-1">
                        <img src="{{ asset('assets/images/A/(A2)GOLF5.png') }}" alt="About AL+">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 align-self-center">
                    <div class="about-content-1 ml-xl-70">
                        <div class="ot-heading is-dots mb-3">
                            <span>[ about AL+ ]</span>
                            <h2 class="main-heading">Striving Elegance in Every Design</h2>
                        </div>
                        <p>In AL+, we are dedicated to providing the highest quality of aluminum furniture for our clients.
                            We aim to create aesthetically pleasing kitchen and wardrobe solutions that can still perform
                            its utmost functionality.<br>
                            We think, we sketch, we build. Reach us if you have something in your mind – even as simple as
                            the color you’d want your countertop to be.</p>
                        <div class="ot-button">
                            <a href="{{ route('projects.index') }}" class="octf-btn octf-btn-dark">View Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 px-0">
                    <div class="cate-lines h-light">
                        <div class="cate-item">
                            <a href="#">
                                <img src="https://via.placeholder.com/750x422.png" alt="">
                            </a>
                            <div class="cate-item_content">
                                <a href="#">
                                    <h2>Kitchen Solution<span class="number-stroke">01</span></h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-0">
                    <div class="cate-lines h-light">
                        <div class="cate-item">
                            <a href="#">
                                <img src="https://via.placeholder.com/750x422.png" alt="">
                            </a>
                            <div class="cate-item_content">
                                <a href="#">
                                    <h2>Built-in Wardrobess<span class="number-stroke">02</span></h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-0">
                    <div class="cate-lines s-dark">
                        <div class="cate-item">
                            <a href="#">
                                <img src="https://via.placeholder.com/750x422.png" alt="">
                            </a>
                            <div class="cate-item_content">
                                <a href="#">
                                    <h2>Custom Furnitures<span class="number-stroke">03</span></h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <section class="services-1">
        <div class="grid-lines grid-lines-vertical">
            <span class="g-line-vertical line-left color-line-default"></span>
            <span class="g-line-vertical line-center color-line-default"></span>
            <span class="g-line-vertical line-right color-line-default"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center theratio-align-center">
                    <div class="ot-heading is-dots">
                        <span>[ OUR SERVICES ]</span>
                        <h2 class="main-heading">What Can We Offer</h2>
                    </div>
                    <div class="space-50"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div
                        class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-1 text-center">
                        <div class="icon-main"><img src="https://via.placeholder.com/74x84.png" alt=""></div>
                        <div class="content-box">
                            <h5><a href="#">Design & Planning</a></h5>
                            <p>We will help you to get the result you dreamed of.</p>
                        </div>
                        <div class="link-box">
                            <a href="#" class="btn-details">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div
                        class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-2 text-center">
                        <div class="icon-main"><img src="https://via.placeholder.com/74x84.png" alt=""></div>
                        <div class="content-box">
                            <h5><a href="#">Custom Solutions</a></h5>
                            <p>Individual, aesthetically stunning solutions for customers.</p>
                        </div>
                        <div class="link-box">
                            <a href="#" class="btn-details">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div
                        class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-3 text-center">
                        <div class="icon-main"><img src="https://via.placeholder.com/74x84.png" alt=""></div>
                        <div class="content-box">
                            <h5><a href="#">Furniture & Decor</a></h5>
                            <p>We create and produce our product design lines.</p>
                        </div>
                        <div class="link-box">
                            <a href="#" class="btn-details">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="space-120"></div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                    <div class="ot-counter">
                        <div>
                            <span>[</span>
                            <span class="num" data-to="180" data-time="2000">180</span>
                            <span>+]</span>
                        </div>
                        <h6>Current Clients</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                    <div class="ot-counter">
                        <div>
                            <span>[</span>
                            <span class="num" data-to="10" data-time="2000">10</span>
                            <span>+]</span>
                        </div>
                        <h6>years of experience</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-sm-0">
                    <div class="ot-counter">
                        <div>
                            <span>[</span>
                            <span class="num" data-to="35" data-time="2000">35</span>
                            <span>+]</span>
                        </div>
                        <h6>awards winning</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="ot-counter">
                        <div>
                            <span>[</span>
                            <span class="num" data-to="5" data-time="2000">5</span>
                            <span>+]</span>
                        </div>
                        <h6>Offices Worldwide</h6>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="our-portfolio-slide">
        <div class="grid-lines grid-lines-vertical">
            <span class="g-line-vertical line-left color-line-default"></span>
            <span class="g-line-vertical line-center color-line-default"></span>
            <span class="g-line-vertical line-right color-line-default"></span>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center theratio-align-center">
                    <div class="ot-heading is-dots">
                        <span>[ our portfolio ]</span>
                        <h2 class="main-heading">Works</h2>
                    </div>
                    <div class="space-40"></div>
                    <div class="project-slider projects-grid style-1 img-scale m-0 owl-theme owl-carousel">
                        <div class="project-items category-19 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.Lpetclinic') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/Ms.%20L%20Pet%20Clinic/(7272)PET3_5MiqT73QN.png?updatedAt=1707442814663"
                                            alt="Project Pet Clinic">
                                    </a>
                                    <div class="overlay">
                                        <h5>Ms. L Pet Clinic</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.Lpetclinic') }}">Ms. L Pet
                                                Clinic</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="{{ route('project.Lpetclinic') }}">Pet
                                                Clinic</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.Lpetclinic') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-14 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.Rhouse') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/Mr.%20R%20House/(7272)RON_FR1T8itlf.png?updatedAt=1707442794361"
                                            alt="Project R House">
                                    </a>
                                    <div class="overlay">
                                        <h5>Mr. R House</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.Rhouse') }}">Mr. R House</a></h5>
                                        <p class="portfolio-cates"><a href="{{ route('project.Rhouse') }}">House</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.Rhouse') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-15 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.Lhouse') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/Mr.%20L%20House/(7272)KLAUR2_hRm9c-5GP.png?updatedAt=1707442774651"
                                            alt="Project L House">
                                    </a>
                                    <div class="overlay">
                                        <h5>Mr. L House</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.Lhouse') }}">Mr. L House</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="{{ route('project.Lhouse') }}">House</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.Lhouse') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-20 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.Hkitchen') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/Mr.%20H%20Kitchen/(7272)SUKHAR5_O75oQgHvw.png?updatedAt=1707442751087"
                                            alt="Project H Kitchen">
                                    </a>
                                    <div class="overlay">
                                        <h5>Mr. H Kitchen</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.Hkitchen') }}">Mr. H
                                                Kitchen</a></h5>
                                        <p class="portfolio-cates"><a href="{{ route('project.Hkitchen') }}">Kitchen</a>
                                        </p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.Hkitchen') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-20 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.MsDiana') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/Ms.%20Diana/(7272)DIANA2_000%201_NZfD7ACzP.jpg?updatedAt=1707443076126"
                                            alt="Project D House">
                                    </a>
                                    <div class="overlay">
                                        <h5>Ms. D House</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.MsDiana') }}">Ms. D House</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="#">House</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.MsDiana') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-20 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.BPuryGalaxy') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/B%20House%20Puri%20Galaxy/(7272)_Z8cQv3WrQ.jpg?updatedAt=1707444775994"
                                            alt="Project B Puri Galaxy">
                                    </a>
                                    <div class="overlay">
                                        <h5>B House Puri Galaxy</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.BPuryGalaxy') }}">B House Puri
                                                Galaxy</a></h5>
                                        <p class="portfolio-cates"><a
                                                href="{{ route('project.BPuryGalaxy') }}">Kitchen</a>
                                        </p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.BPuryGalaxy') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-19 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.NgHouse') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/NG-house/720_91glgpoa4.png?updatedAt=1707445619829"
                                            alt="Project NG House Pagesangan">
                                    </a>
                                    <div class="overlay">
                                        <h5>NG House Pagesangan</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.NgHouse') }}">NG House
                                                Pagesangan</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="#">House</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.NgHouse') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-19 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.NsHouse') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/NS%20House/720_tupNNDwFF.png?updatedAt=1707446970561"
                                            alt="Project NS House Pondok Tjandra">
                                    </a>
                                    <div class="overlay">
                                        <h5>NS House Pondok Tjandra</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.NsHouse') }}">NS House Pondok Tjandra</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="#">House</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.NsHouse') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="margin-top: -120px;"></div>
    <section class="skill-1">
        <div class="grid-lines grid-lines-vertical">
            <span class="g-line-vertical line-left color-line-default"></span>
            <span class="g-line-vertical line-center color-line-default"></span>
            <span class="g-line-vertical line-right color-line-default"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Testimonials</h3>
                    <div class="space-20"></div>
                    <div class="ot-testimonials v-light">
                        <div class="testimonial-inner testi-col-3 owl-theme owl-carousel">
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    <span></span>
                                    "You will never fake the feeling of being in such a place. The live minimalism base on
                                    the natural materials & alive unprocessed."
                                </div>
                                <div class="t-head flex-middle">
                                    <img src="https://via.placeholder.com/80x80.png" alt="">
                                    <div class="tinfo">
                                        <h6>Anna Paulina</h6>
                                        <span>Client of Company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    <span></span>
                                    "You will never fake the feeling of being in such a place. The live minimalism base on
                                    the natural materials & alive unprocessed."
                                </div>
                                <div class="t-head flex-middle">
                                    <img src="https://via.placeholder.com/80x80.png" alt="">
                                    <div class="tinfo">
                                        <h6>Pablo Gusterio</h6>
                                        <span>Client of Company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    <span></span>
                                    "You will never fake the feeling of being in such a place. The live minimalism base on
                                    the natural materials & alive unprocessed."
                                </div>
                                <div class="t-head flex-middle">
                                    <img src="https://via.placeholder.com/80x80.png" alt="">
                                    <div class="tinfo">
                                        <h6>Kristina Lee</h6>
                                        <span>Client of Company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    <span></span>
                                    "You will never fake the feeling of being in such a place. The live minimalism base on
                                    the natural materials & alive unprocessed."
                                </div>
                                <div class="t-head flex-middle">
                                    <img src="https://via.placeholder.com/80x80.png" alt="">
                                    <div class="tinfo">
                                        <h6>Anna Paulina</h6>
                                        <span>Client of Company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    <span></span>
                                    "You will never fake the feeling of being in such a place. The live minimalism base on
                                    the natural materials & alive unprocessed."
                                </div>
                                <div class="t-head flex-middle">
                                    <img src="https://via.placeholder.com/80x80.png" alt="">
                                    <div class="tinfo">
                                        <h6>Pablo Gusterio</h6>
                                        <span>Client of Company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    <span></span>
                                    "You will never fake the feeling of being in such a place. The live minimalism base on
                                    the natural materials & alive unprocessed."
                                </div>
                                <div class="t-head flex-middle">
                                    <img src="https://via.placeholder.com/80x80.png" alt="">
                                    <div class="tinfo">
                                        <h6>Kristina Lee</h6>
                                        <span>Client of Company</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="space-40"></div> --}}
                    {{-- <div class="space-2"></div> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section-team-list team-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center theratio-align-center">
                    <div class="ot-heading is-dots">
                        <span>[ our professionals ]</span>
                        <h2 class="main-heading">Meet Our Skilled Team</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
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

    <section class="cta"
        style="background-image: url('{{ asset('assets/images/A/(A6)LAUR4-1.png') }}'); background-repeat: no-repeat; background-size: cover; padding: 70px 0 73px 0; color: #FFF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="text-light mb-0">Get a quote, or consult your design for free.</h2>
                    <div class="space-5"></div>
                    <p class="mb-0">Your dream home furnishings are just one click away.</p>
                </div>
                <div class="col-lg-4 text-left text-lg-right align-self-center">
                    <div class="ot-button">
                        <a href="{{ route('contact.index') }}" class="octf-btn octf-btn-light border-hover-light">(reach
                            us here)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="grid-lines grid-lines-vertical">
            <span class="g-line-vertical line-left color-line-default"></span>
            <span class="g-line-vertical line-center color-line-default"></span>
            <span class="g-line-vertical line-right color-line-default"></span>
        </div>
        <div class="container">
            <div class="row pb-50">
                <div class="col-lg-8 col-md-12 mb-4 mb-lg-0">
                    <div class="ot-heading is-dots">
                        <span>[ our blog ]</span>
                        <h2 class="main-heading">Curated by AL+</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-lg-right align-self-center">
                    <div class="ot-button">
                        <a href="{{ route('blog.index') }}" class="octf-btn octf-btn-dark border-hover-dark">View all</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="post-box masonry-post post-item">
                        <div class="post-inner">
                            <div class="entry-media post-cat-abs">
                                <a href="{{ route('blog.detail') }}"><img src="https://via.placeholder.com/570x484.png"
                                        alt=""></a>
                                <div class="post-cat">
                                    <div class="posted-in"><a href="#">Interior</a></div>
                                </div>
                            </div>
                            <div class="inner-post">
                                <div class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on"><a href="#">March 19, 2020</a></span>
                                        <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span>
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.detail') }}">Top 10 Tips for Your
                                            Kitchen
                                            Interior Design</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    A faceting effect livens up and...
                                </div><!-- .entry-content -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="post-box masonry-post post-item">
                        <div class="post-inner">
                            <div class="entry-media post-cat-abs">
                                <a href="{{ route('blog.detail') }}"><img src="https://via.placeholder.com/570x484.png"
                                        alt=""></a>
                                <div class="post-cat">
                                    <div class="posted-in"><a href="#">Interior</a></div>
                                </div>
                            </div>
                            <div class="inner-post">
                                <div class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on"><a href="#">March 19, 2020</a></span>
                                        <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span>
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.detail') }}">The Golden Ratio Rules
                                            for
                                            Best 2D Sketch</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    A faceting effect livens up and...
                                </div><!-- .entry-content -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="post-box masonry-post post-item">
                        <div class="post-inner">
                            <div class="entry-media post-cat-abs">
                                <a href="{{ route('blog.detail') }}"><img src="https://via.placeholder.com/570x484.png"
                                        alt=""></a>
                                <div class="post-cat">
                                    <div class="posted-in"><a href="#">Interior</a></div>
                                </div>
                            </div>
                            <div class="inner-post">
                                <div class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on"><a href="#">March 19, 2020</a></span>
                                        <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span>
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.detail') }}">Use Pastel Colors &
                                            Natural
                                            Materials</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    A faceting effect livens up and...
                                </div><!-- .entry-content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
