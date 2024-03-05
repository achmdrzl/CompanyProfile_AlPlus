@extends('layouts.main')

@section('content')
    <div class="page-header dtable text-center header-transparent pheader-portfolio"
        style="background-image: url('{{ asset('assets/images/C/(A6)LAUR5 12.png') }}'); background-repeat: no-repeat; background-size: cover; color: #FFF;">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">Here's What We Do</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Here's What We Do</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="our-portfolio-slide">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center theratio-align-center">
                    <div class="ot-heading is-dots">
                        <span>[ our portfolio ]</span>
                        <h2 class="main-heading">Works</h2>
                    </div>
                    <div class="space-40"></div>
                    {{-- <div class="project-slider projects-grid style-1 img-scale m-0 owl-theme owl-carousel">
                        <div class="project-items category-19 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.detail') }}">
                                        <img src="https://via.placeholder.com/720x720.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Stylish Family Appartment</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.detail') }}">Stylish Family
                                                Appartment</a></h5>
                                        <p class="portfolio-cates"><a href="#">Interior</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.detail') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-14 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.detail') }}">
                                        <img src="https://via.placeholder.com/720x720.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Minimal Guests House</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.detail') }}">Minimal Guests
                                                House</a></h5>
                                        <p class="portfolio-cates">
                                            <a href="#">Decor</a>
                                            <a href="#">Interior</a>
                                        </p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.detail') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-15 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.detail') }}">
                                        <img src="https://via.placeholder.com/720x720.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Art Family Residence</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.detail') }}">Art Family Residence</a></h5>
                                        <p class="portfolio-cates"><a href="#">Architecture</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.detail') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-20 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.detail') }}">
                                        <img src="https://via.placeholder.com/720x720.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Private House in Spain</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.detail') }}">Private House in Spain</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="#">Furniture</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.detail') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-19 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.detail') }}">
                                        <img src="https://via.placeholder.com/720x720.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Modern Villa in Belgium</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.detail') }}">Modern Villa in Belgium</a>
                                        </h5>
                                        <p class="portfolio-cates"><a href="#">Furniture</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.detail') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-14 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.detail') }}">
                                        <img src="https://via.placeholder.com/720x720.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Minimalistic Style Appartment</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.detail') }}">Minimalistic Style
                                                Appartment</a></h5>
                                        <p class="portfolio-cates"><a href="#">Furniture</a><a
                                                href="#">interior</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.detail') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-15">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.detail') }}">
                                        <img src="https://via.placeholder.com/720x720.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Luxury Bathroom Interior</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.detail') }}">Luxury Bathroom
                                                Interior</a></h5>
                                        <p class="portfolio-cates"><a href="#">decor</a><a
                                                href="#">Furniture</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.detail') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-14">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.detail') }}">
                                        <img src="https://via.placeholder.com/720x720.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Loft Kitchen Interior</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.detail') }}">Loft Kitchen
                                                Interior</a></h5>
                                        <p class="portfolio-cates"><a href="#">architecture</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.detail') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-items category-19">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{ route('project.detail') }}">
                                        <img src="https://via.placeholder.com/720x720.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>White Italian Villa</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{ route('project.detail') }}">White Italian Villa</a></h5>
                                        <p class="portfolio-cates"><a href="#">decor</a></p>
                                    </div>
                                    <a class="overlay" href="{{ route('project.detail') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center theratio-align-center">
                    <div class="project-filter-wrapper">
                        <div class="projects-grid pf_3_cols style-1 img-scale w-auto">
                            <div class="project-item category-19 ">
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
                            <div class="project-item category-19 ">
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
                                            <p class="portfolio-cates"><a
                                                    href="{{ route('project.NgHouse') }}">Pagesangan</a></p>
                                        </div>
                                        <a class="overlay" href="{{ route('project.NgHouse') }}"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item category-19 ">
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
                            <div class="project-item category-19 ">
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
                            <div class="project-item category-19 ">
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
                            <div class="project-item category-20 ">
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
                                            <h5>
                                                <a class="title-link" href="{{ route('project.Lhouse') }}">L House</a>
                                            </h5>
                                            <p class="portfolio-cates"><a href="{{ route('project.Lhouse') }}">San
                                                    Diego</a>
                                            </p>
                                        </div>
                                        <a class="overlay" href="{{ route('project.Lhouse') }}"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item category-15 ">
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
                            <div class="project-item category-20 ">
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
                            <div class="project-item category-20 ">
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
                            <div class="project-item category-20 ">
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
                            <div class="project-item category-20 ">
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
                            {{-- <div class="project-item category-14 ">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="{{ route('project.detail') }}">
                                            <img src="https://via.placeholder.com/720x720.png" alt="">
                                        </a>
                                        <div class="overlay">
                                            <h5>Minimalistic Style Appartment</h5>
                                            <i class="ot-flaticon-add"></i>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-inner">
                                            <h5><a class="title-link" href="{{ route('project.detail') }}">Minimalistic
                                                    Style
                                                    Appartment</a></h5>
                                            <p class="portfolio-cates"><a href="#">Furniture</a><a
                                                    href="#">interior</a></p>
                                        </div>
                                        <a class="overlay" href="{{ route('project.detail') }}"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item category-15">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="{{ route('project.detail') }}">
                                            <img src="https://via.placeholder.com/720x720.png" alt="">
                                        </a>
                                        <div class="overlay">
                                            <h5>Luxury Bathroom Interior</h5>
                                            <i class="ot-flaticon-add"></i>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-inner">
                                            <h5><a class="title-link" href="{{ route('project.detail') }}">Luxury
                                                    Bathroom
                                                    Interior</a></h5>
                                            <p class="portfolio-cates"><a href="#">decor</a><a
                                                    href="#">Furniture</a></p>
                                        </div>
                                        <a class="overlay" href="{{ route('project.detail') }}"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item category-14">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="{{ route('project.detail') }}">
                                            <img src="https://via.placeholder.com/720x720.png" alt="">
                                        </a>
                                        <div class="overlay">
                                            <h5>Loft Kitchen Interior</h5>
                                            <i class="ot-flaticon-add"></i>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-inner">
                                            <h5><a class="title-link" href="{{ route('project.detail') }}">Loft Kitchen
                                                    Interior</a></h5>
                                            <p class="portfolio-cates"><a href="#">architecture</a></p>
                                        </div>
                                        <a class="overlay" href="{{ route('project.detail') }}"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item category-19">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="{{ route('project.detail') }}">
                                            <img src="https://via.placeholder.com/720x720.png" alt="">
                                        </a>
                                        <div class="overlay">
                                            <h5>White Italian Villa</h5>
                                            <i class="ot-flaticon-add"></i>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-inner">
                                            <h5><a class="title-link" href="{{ route('project.detail') }}">White Italian
                                                    Villa</a>
                                            </h5>
                                            <p class="portfolio-cates"><a href="#">decor</a></p>
                                        </div>
                                        <a class="overlay" href="{{ route('project.detail') }}"></a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        {{-- <div class="btn-block text-center">
                            <a href="portfolio-five-column-wide.html" class="btn-loadmore octf-btn">Read More</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-portfolio">
        <div class="container">

        </div>
    </section>
@endsection
