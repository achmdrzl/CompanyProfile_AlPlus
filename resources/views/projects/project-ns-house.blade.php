@extends('layouts.main')

@section('content')
    <div class="page-header dtable text-center header-transparent pheader-portfolio-detail-nshouse">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">N House</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('projects.index') }}">Portfolio</a></li>
                    <li class="active">Pondak Tjandra</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="portfolio-detail p-0">
        <div class="container">
            <div class="row">
                <div class="space-90"></div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="p-detail-info">
                        <h6>designer:</h6>
                        <p style="line-height: 1.5;">Almer NH., S. Ds & Vincentius Kevin, S. Ars., M. Ars.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="p-detail-info">
                        <h6>style:</h6>
                        <p>Sleek Steel</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="p-detail-info">
                        <h6>client:</h6>
                        <p>Mr. K</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="p-detail-info">
                        <h6>project type:</h6>
                        <p>Kitchenset Build</p>
                    </div>
                </div>
                <div class="space-40"></div>
                <div class="col-md-12">
                    <div class="image-gallery">
                        <div id="gallery-2" class="gallery gallery-columns-1 s2">
                            <figure class="gallery-item">
                                <div class="gallery-icon portrait">
                                    <a
                                        href="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/NS%20House/1170-3_-PSznTbme.png?updatedAt=1707446970589">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/NS%20House/1170-3_-PSznTbme.png?updatedAt=1707446970589"
                                            alt="">
                                        <span class="overlay"><i class="ot-flaticon-add"></i></span>
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon portrait">
                                    <a
                                        href="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/NS%20House/1170-2_I8a0ly4gc.png?updatedAt=1707446970559">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/NS%20House/1170-2_I8a0ly4gc.png?updatedAt=1707446970559"
                                            alt="">
                                        <span class="overlay"><i class="ot-flaticon-add"></i></span>
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon portrait">
                                    <a
                                        href="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/NS%20House/1170_AtEWn_-5H.png?updatedAt=1707446970541">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/NS%20House/1170_AtEWn_-5H.png?updatedAt=1707446970541"
                                            alt="">
                                        <span class="overlay"><i class="ot-flaticon-add"></i></span>
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon portrait">
                                    <a
                                        href="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/NS%20House/1170-4_5xwZajclx.png?updatedAt=1707446970382">
                                        <img src="https://ik.imagekit.io/dxofqajmq/AlPlus%20Projects/NS%20House/1170-4_5xwZajclx.png?updatedAt=1707446970382"
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
                    <p> Aiming for the grand look, we designed the kitchen set to have three parts from the bottom up :
                        lower, middle, and upper. Pairing the misty grey with a dark wood finish, this particular project
                        screams mysteriousness and elegance.</p>
                    {{-- <p><strong>Biophilia is the idea that humans possess an innate tendency to seek connections with
                            nature.</strong> The term translates to ‘the love of living things’ in ancient Greek (philia =
                        the love of / inclination towards), and was used by German-born American psychoanalyst Erich Fromm
                        in The Anatomy of Human Destructiveness (1973), which described biophilia as “the passionate love of
                        life and of all that is alive.” The term was later used by American biologist Edward O. Wilson in
                        his work Biophilia (1984), which proposed that the tendency of humans to focus on and to affiliate
                        with nature and other life-forvms.</p> --}}
                    <div class="space-20"></div>
                    <div class="space-5"></div>
                    @include('layouts.share-porto')
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
