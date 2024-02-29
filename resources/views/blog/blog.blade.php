@extends('layouts.main')

@section('content')
    <div class="page-header dtable text-center header-transparent"
        style="background-image: url('{{ asset('assets/images/D/(D1)ALP-1.png') }}'); background-repeat: no-repeat; background-size: cover; color: #FFF;">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">Blogs</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="/">Home</a></li>
                    <li class="active">Blogs</li>
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
            {{-- <ul class="page-pagination none-style">
                <li><a class="prev page-numbers" href="#"><i class="ot-flaticon-left-arrow"></i></a></li>
                <li><a class="page-numbers" href="#">1</a></li>
                <li><span aria-current="page" class="page-numbers current">2</span></li>
                <li><a class="page-numbers" href="#">3</a></li>
                <li><a class="next page-numbers" href="#"><i class="ot-flaticon-right-arrow"></i></a></li>
            </ul> --}}
        </div>
    @endsection
