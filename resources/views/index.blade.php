@extends('layouts.main')

@push('style-alt')
    <style>
        .testi-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
        }

        .ttext {
            position: relative;
            max-width: 600px;
            /* Adjust the max-width as needed */
            margin: 0 auto;
            /* Center the text within the container */
            padding: 20px;
            /* Add padding for better readability */
        }

        .t-head {
            margin-top: 20px;
            /* Add margin to separate text and the header */
        }

        /* Add the following styles to center the header */
        .t-head .tinfo {
            text-align: center;
            margin: 0 auto;
        }

        .cta {
            background-size: cover;
            color: #FFF;
        }

        @media (max-width: 767px) {
            .cta {
                background-size: contain;
                background-position: center left;
                background-repeat: no-repeat;
                background-size: cover;
            }
        }
    </style>
@endpush

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
                        {{-- <img src="{{ asset('assets/images/A/(A2)GOLF5.png') }}" alt="About AL+"> --}}
                        <img src="{{ asset('assets/images/projects/Ms. Diana/(7272)DIANA.png') }}" alt="About AL+">
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
                            <a href="{{ route('projects.index') }}">
                                <img src="{{ asset('assets/images/index/Rev VEN02211.png') }}" alt="">
                                {{-- <img src="https://via.placeholder.com/750x422.png" alt=""> --}}
                            </a>
                            <div class="cate-item_content">
                                <a href="{{ route('projects.index') }}">
                                    <h2>Kitchen<br> Solution<span class="number-stroke">01</span></h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-0">
                    <div class="cate-lines h-light">
                        <div class="cate-item">
                            <a href="{{ route('projects.index') }}">
                                <img src="{{ asset('assets/images/index/DIANA 3.png') }}" alt="">
                            </a>
                            <div class="cate-item_content">
                                <a href="{{ route('projects.index') }}">
                                    <h2>Built-in<br> Wardrobes<span class="number-stroke">02</span></h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-0">
                    {{-- <div class="cate-lines s-dark"> --}}
                    <div class="cate-lines h-light">
                        <div class="cate-item">
                            <a href="{{ route('projects.index') }}">
                                <img src="{{ asset('assets/images/index/(D3)PBUD 1.png') }}" alt="">
                            </a>
                            <div class="cate-item_content">
                                <a href="{{ route('projects.index') }}">
                                    <h2>Custom<br> Furnitures<span class="number-stroke">03</span></h2>
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
                                    <a href="{{ route('project.NgHouse') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/NG-house/VEN02484_GiuVWWOTu.png?updatedAt=1708924156709"
                                            alt="Project NG House Pagesangan">
                                        {{-- <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/NG-house/720_91glgpoa4.png?updatedAt=1707445619829"
                                                alt="Project NG House Pagesangan"> --}}
                                    </a>
                                    <div class="overlay">
                                        <h5>NG House</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.NgHouse') }}">NG House</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="{{ route('project.NgHouse') }}">Pagesangan</a>
                                        </p>
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
                                        <h5>N House</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.NsHouse') }}">N House</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="{{ route('project.NsHouse') }}">Pondok
                                                Tjandra</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.NsHouse') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-19 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.BPuryGalaxy') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/B%20House%20Puri%20Galaxy/(7272)_Z8cQv3WrQ.jpg?updatedAt=1707444775994"
                                            alt="Project B Pury Galaxy">
                                    </a>
                                    <div class="overlay">
                                        <h5>B House</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.BPuryGalaxy') }}">B House</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="{{ route('project.BPuryGalaxy') }}">Puri
                                                Galaxy</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.BPuryGalaxy') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-19 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.MsDiana') }}">
                                        <img src="{{ asset('assets/images/projects/Ms. Diana/(7272)DIANA_000.png') }}"
                                            alt="Proejct D House">
                                    </a>
                                    <div class="overlay">
                                        <h5>D House</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.MsDiana') }}">D House</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="{{ route('project.MsDiana') }}">Malang</a>
                                        </p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.MsDiana') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-20 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.Lpetclinic') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/Ms.%20L%20Pet%20Clinic/(7272)PET3_5MiqT73QN.png?updatedAt=1707442814663"
                                            alt="Project L Pet Clinic">
                                    </a>
                                    <div class="overlay">
                                        <h5>Pet Clinic</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.Lpetclinic') }}">Pet
                                                Clinic</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="{{ route('project.Lpetclinic') }}">Ruko
                                                VBM</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.Lpetclinic') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-15 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.Rhouse') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/Mr.%20R%20House/(7272)RON_FR1T8itlf.png?updatedAt=1707442794361"
                                            alt="Project R House">
                                    </a>
                                    <div class="overlay">
                                        <h5>R House</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.Rhouse') }}">R House</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="{{ route('project.Rhouse') }}">Nginden
                                                Intan Barat</a>
                                        </p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.Rhouse') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-20 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.Lhouse') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/Mr.%20L%20House/(7272)KLAUR2_hRm9c-5GP.png?updatedAt=1707442774651"
                                            alt="Project L House">
                                    </a>
                                    <div class="overlay">
                                        <h5>L House/h5>
                                            <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.Lhouse') }}">L House</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="{{ route('project.Lhouse') }}">San
                                                Diego</a>
                                        </p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.Lhouse') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-19 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.Hkitchen') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/Mr.%20H%20Kitchen/(7272)SUKHAR5_O75oQgHvw.png?updatedAt=1707442751087"
                                            alt="Project H Kitchen">
                                    </a>
                                    <div class="overlay">
                                        <h5>H House</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.Hkitchen') }}">H House</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="{{ route('project.Hkitchen') }}">Villa
                                                Bukit Regency</a>
                                        </p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.Hkitchen') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-20 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.NfHouse') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/NF%20House/Image11_TctXHM1zz.png?updatedAt=1709189193129"
                                            alt="Project L Pet Clinic">
                                    </a>
                                    <div class="overlay">
                                        <h5>NF House</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.NfHouse') }}">NF House</a>
                                        </h5>
                                        <p class="portfolio-cates"><a
                                                href="{{ route('project.NfHouse') }}">Pagesangan</a>
                                        </p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.NfHouse') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-20 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.SkHouse') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/SK%20House/(7272)SEIKO2_000_f_j_03ae9S.png?updatedAt=1709190368511"
                                            alt="Project Mr. SK House">
                                    </a>
                                    <div class="overlay">
                                        <h5>SK House</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.SkHouse') }}">SK House</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="{{ route('project.SkHouse') }}">Citraland
                                                Surabaya</a>
                                        </p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.SkHouse') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-20 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.ApHouse') }}">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/AP%20HOUSE/(11759)APR1_000%201_Q8NjDopjg.png?updatedAt=1709191285713"
                                            alt="Project Mr. SK House">
                                    </a>
                                    <div class="overlay">
                                        <h5>AP House</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.ApHouse') }}">AP House</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="{{ route('project.ApHouse') }}">Gladstone
                                                Surabaya</a>
                                        </p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.ApHouse') }}"></a>
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
                                    "Thankyou so much to Ms. Jessica and AL+ team for making my compact kitchen compact and
                                    elegant. I highly recommend AL+ for those who want a termite free solution!."
                                </div>
                                <div class="t-head flex-middle">
                                    {{-- <img src="https://via.placeholder.com/80x80.png" alt=""> --}}
                                    <div class="tinfo">
                                        <h6>Mr. K</h6>
                                        <span>NS House</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    "I'm amazed at the cleanliness. From the design phase to the construction, I found
                                    everything I required in one place. Thank you so much, AL+, for providing a
                                    comprehensive solution"
                                </div>
                                <div class="t-head flex-middle">
                                    <div class="tinfo">
                                        <h6>Mrs. N</h6>
                                        <span>NG House</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    "Achieved the house of my dreams with the help of AL+ after trying out a few interior
                                    designers out there, but none work as well as AL+. Thankyou so much for everything"
                                </div>
                                <div class="t-head flex-middle">
                                    <div class="tinfo">
                                        <h6>Mr. B</h6>
                                        <span> B House</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    "“I never thought that pantries could be this beautifully and meticulously made.
                                    Shoutout to AL+ for the elegant design and quality!"
                                </div>
                                <div class="t-head flex-middle">
                                    <div class="tinfo">
                                        <h6>Mr. L</h6>
                                        <span> L House</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    "At first I didn’t think that it’s possible to create an elegant and eye-pleasing design
                                    using 100% aluminium, but AL+ has proved me wrong. My wife is very happy with our new
                                    kitchen, and I would totally recommend AL+ to my friends and relatives."
                                </div>
                                <div class="t-head flex-middle">
                                    <div class="tinfo">
                                        <h6>Mr. R</h6>
                                        <span> R House</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-40"></div>
                    <div class="space-2"></div>
                </div>
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

    <section class="cta" style="background-image: url('{{ asset('assets/images/A/(A6)LAUR4-1a.png') }}');">
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
                                <a href="{{ route('blog.a') }}"><img
                                        src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/Blog/MTXX_MH20230628_164550828_o4lMFscsZ.jpg?updatedAt=1707783474175"
                                        alt=""></a>
                                <div class="post-cat">
                                    <div class="posted-in"><a href="#">Interior</a></div>
                                </div>
                            </div>
                            <div class="inner-post">
                                <div class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on"><a href="#">February 13, 2024</a></span>
                                        {{-- <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span> --}}
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.a') }}">Small Space 101</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    Living in a small space doesn't mean sacrificing style and comfort. In fact, it presents
                                    an exciting
                                    challenge to unleash your creativity and transform your compact...
                                </div><!-- .entry-content -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="post-box masonry-post post-item">
                        <div class="post-inner">
                            <div class="entry-media post-cat-abs">
                                <a href="{{ route('blog.b') }}"><img
                                        src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/Blog/Rev%20VEN02211_gEsu7bv_M.png?updatedAt=1707784065295"
                                        alt=""></a>
                                <div class="post-cat">
                                    <div class="posted-in"><a href="#">Interior</a></div>
                                </div>
                            </div>
                            <div class="inner-post">
                                <div class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on"><a href="#">February 13, 2024</a></span>
                                        {{-- <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span> --}}
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.b') }}"
                                            style="line-height: 1.3; display: block; margin-bottom: 10px;">Affordable
                                            elegance: Budget
                                            Makeovers with ready-made panels for interior remodeling</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    Who says luxury has to come with a hefty. price tag?..
                                </div><!-- .entry-content -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="post-box masonry-post post-item">
                        <div class="post-inner">
                            <div class="entry-media post-cat-abs">
                                <a href="{{ route('blog.c') }}"><img
                                        src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/Blog/MTXX_MH20230629_204418961_Ot7f-j0HH.png?updatedAt=1707784598874"
                                        alt=""></a>
                                {{-- <a href="{{ route('blog.c') }}"><img src="https://via.placeholder.com/570x484.png"
                                        alt=""></a> --}}
                                <div class="post-cat">
                                    <div class="posted-in"><a href="#">Interior</a></div>
                                </div>
                            </div>
                            <div class="inner-post">
                                <div class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on"><a href="#">February 13, 2024</a></span>
                                        {{-- <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span> --}}
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.c') }}">The science of color
                                            combination</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    Color is not just a matter of personal preference; it's a science. Understanding the
                                    principles of color science and how different ...
                                </div><!-- .entry-content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
