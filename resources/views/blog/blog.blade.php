@extends('layouts.main')

@section('content')
    <div class="page-header dtable text-center header-transparent" style="background-image: url('{{ asset('assets/images/D/(D1)ALP-1.png') }}'); background-repeat: no-repeat; background-size: cover; color: #FFF;">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">Blog Grid</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Blog Grid</li>
                </ul>
            </div>
        </div>
    </div>
    </div>

    <div class="entry-content">
        <div class="container">
            <div class="row">

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
                                        {{-- <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span> --}}
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.detail') }}">Top 10 Tips for Your Kitchen
                                            Interior
                                            Design</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    We are constantly growing, learning...
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
                                        {{-- <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span> --}}
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.detail') }}">The Golden Ratio Rules for
                                            Best 2D Sketch</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    We are constantly growing, learning...
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
                                        {{-- <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span> --}}
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.detail') }}">Use Pastel Colors & Natural
                                            Materials</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    We are constantly growing, learning...
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
                                        {{-- <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span> --}}
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.detail') }}">New Simple Architecture
                                            Solutions 2020</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    We are constantly growing, learning...
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
                                        {{-- <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span> --}}
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.detail') }}">Benefits of Loft Interior
                                            Design in
                                            House</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    We are constantly growing, learning...
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
                                        {{-- <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span> --}}
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.detail') }}">Attention to Details:
                                            Bathroom Equipment
                                            2020</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    We are constantly growing, learning...
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
                                        {{-- <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span> --}}
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.detail') }}">Incredible House Design
                                            for Big Family</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    We are constantly growing, learning...
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
                                        {{-- <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span> --}}
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.detail') }}">Diamond Apartment: Best
                                            Tips for Design</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    We are constantly growing, learning...
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
                                        {{-- <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span> --}}
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.detail') }}">20 Ideas for Guest House
                                            of Your Dream</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    We are constantly growing, learning...
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
                                        {{-- <span class="byline">
                                            <span class="author vcard"><a class="url fn n" href="#">Tom
                                                    Black</a></span>
                                        </span> --}}
                                    </div><!-- .entry-meta -->

                                    <h5 class="entry-title">
                                        <a class="title-link" href="{{ route('blog.detail') }}">How to Use White Color in
                                            Interior
                                            Design</a>
                                    </h5>
                                </div><!-- .entry-header -->

                                <div class="the-excerpt">
                                    We are constantly growing, learning...
                                </div><!-- .entry-content -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- <ul class="page-pagination none-style">
                <li><a class="prev page-numbers" href="#"><i class="ot-flaticon-left-arrow"></i></a></li>
                <li><a class="page-numbers" href="#">1</a></li>
                <li><span aria-current="page" class="page-numbers current">2</span></li>
                <li><a class="page-numbers" href="#">3</a></li>
                <li><a class="next page-numbers" href="#"><i class="ot-flaticon-right-arrow"></i></a></li>
            </ul> --}}
        </div>
    @endsection
