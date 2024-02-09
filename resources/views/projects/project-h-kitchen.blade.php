@extends('layouts.main')

@section('content')
    <div class="page-header dtable text-center header-transparent pheader-portfolio-detail-hkitchen">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">Mr. H Kitchen</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="portfolio-masonry.html">Portfolio</a></li>
                    <li class="active">Mr. H Kitchen</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="portfolio-detail p-0">
        <div class="container">
            <div class="row">
                <div class="space-90"></div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="p-detail-info">
                        <h6>architect:</h6>
                        <p>David Oswald</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="p-detail-info">
                        <h6>client:</h6>
                        <p>OceanThemes</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="p-detail-info">
                        <h6>Terms::</h6>
                        <p>6 month</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="p-detail-info">
                        <h6>project type::</h6>
                        <p>Interior Design</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="p-detail-info">
                        <h6>Strategy::</h6>
                        <p>Minimalistic</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="p-detail-info">
                        <h6>date::</h6>
                        <p>November 22, 2020</p>
                    </div>
                </div>
                <div class="space-40"></div>
                <div class="col-md-12">
                    <div class="image-gallery">
                        <div id="gallery-2" class="gallery gallery-columns-1 s2">
                            <figure class="gallery-item">
                                <div class="gallery-icon portrait">
                                    <a href="{{ asset('assets/images/projects/Mr. H Kitchen/(11759)SUKHAR.png') }}">
                                        <img src="{{ asset('assets/images/projects/Mr. H Kitchen/(11759)SUKHAR.png') }}"
                                            alt="">
                                        <span class="overlay"><i class="ot-flaticon-add"></i></span>
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon portrait">
                                    <a href="{{ asset('assets/images/projects/Mr. H Kitchen/(11759)SUKHAR2.png') }}">
                                        <img src="{{ asset('assets/images/projects/Mr. H Kitchen/(11759)SUKHAR2.png') }}"
                                            alt="">
                                        <span class="overlay"><i class="ot-flaticon-add"></i></span>
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon portrait">
                                    <a href="{{ asset('assets/images/projects/Mr. H Kitchen/(11759)SUKHAR3.png') }}">
                                        <img src="{{ asset('assets/images/projects/Mr. H Kitchen/(11759)SUKHAR3.png') }}"
                                            alt="">
                                        <span class="overlay"><i class="ot-flaticon-add"></i></span>
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon portrait">
                                    <a href="{{ asset('assets/images/projects/Mr. H Kitchen/(11759)SUKHAR4.png') }}">
                                        <img src="{{ asset('assets/images/projects/Mr. H Kitchen/(11759)SUKHAR4.png') }}"
                                            alt="">
                                        <span class="overlay"><i class="ot-flaticon-add"></i></span>
                                    </a>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="space-50"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{-- <p><span class="drop-cap"><span class="drop-cap-letter">C</span></span>onsidering the physical, mental, --}}
                    <p> The client wanted something that matches their old kitchen set, so we played with neutral colors. To
                        make it look luxurious and neat, we designed a marble frame near the pantry, while using a black
                        tinted glass to create a more sophisticated look.</p>
                    {{-- <p><strong>Biophilia is the idea that humans possess an innate tendency to seek connections with
                            nature.</strong> The term translates to ‘the love of living things’ in ancient Greek (philia =
                        the love of / inclination towards), and was used by German-born American psychoanalyst Erich Fromm
                        in The Anatomy of Human Destructiveness (1973), which described biophilia as “the passionate love of
                        life and of all that is alive.” The term was later used by American biologist Edward O. Wilson in
                        his work Biophilia (1984), which proposed that the tendency of humans to focus on and to affiliate
                        with nature and other life-forvms.</p> --}}
                    <div class="space-20"></div>
                    <div class="space-5"></div>
                    <div class="share-portfolio">
                        <a class="twit" target="_blank" href="twitter.com" title="Twitter"><i
                                class="fab fa-twitter"></i></a>
                        <a class="face" target="_blank" href="facebook.com" title="Facebook"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="pint" target="_blank" href="pinterest.com" title="Pinterest"><i
                                class="fab fa-pinterest-p"></i></a>
                        <a class="linked" target="_blank" href="linkedin.com" title="LinkedIn"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="project-bottom">
                        <div class="portfolio-related-posts-wrap">
                            <div class="portfolio-related-title-wrap">
                                <h2 class="portfolio-related-title">Related Projects</h2>
                            </div>
                            <div class="row">
                                <div class="projects-grid pf_3_cols style-1 img-scale w-auto m-0">
                                    <div class="project-item category-14 ">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-standar.html">
                                                    <img src="https://via.placeholder.com/720x720.png" alt="">
                                                </a>
                                                <div class="overlay">
                                                    <h5>Minimal Guests House</h5>
                                                    <i class="ot-flaticon-add"></i>
                                                </div>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a class="title-link" href="portfolio-standar.html">Minimal Guests
                                                            House</a></h5>
                                                    <p class="portfolio-cates">
                                                        <a href="#">Decor</a>
                                                        <a href="#">Interior</a>
                                                    </p>
                                                </div>
                                                <a class="overlay" href="portfolio-standar.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item category-15 ">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-detail-slider.html">
                                                    <img src="https://via.placeholder.com/720x720.png" alt="">
                                                </a>
                                                <div class="overlay">
                                                    <h5>Art Family Residence</h5>
                                                    <i class="ot-flaticon-add"></i>
                                                </div>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a class="title-link" href="portfolio-detail-slider.html">Art
                                                            Family Residence</a></h5>
                                                    <p class="portfolio-cates"><a href="#">Architecture</a></p>
                                                </div>
                                                <a class="overlay" href="portfolio-detail-slider.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-item category-20 ">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail">
                                                <a href="portfolio-left.html">
                                                    <img src="https://via.placeholder.com/720x720.png" alt="">
                                                </a>
                                                <div class="overlay">
                                                    <h5>Private House in Spain</h5>
                                                    <i class="ot-flaticon-add"></i>
                                                </div>
                                            </div>
                                            <div class="portfolio-info">
                                                <div class="portfolio-info-inner">
                                                    <h5><a class="title-link" href="portfolio-left.html">Private House in
                                                            Spain</a></h5>
                                                    <p class="portfolio-cates"><a href="#">Furniture</a></p>
                                                </div>
                                                <a class="overlay" href="portfolio-left.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
