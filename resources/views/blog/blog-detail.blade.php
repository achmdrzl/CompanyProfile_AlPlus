@extends('layouts.main')

@section('content')
    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent" style="background-image: url('{{ asset('assets/images/D/(D1)ALP-1.png') }}'); background-repeat: no-repeat; background-size: cover; color: #FFF;">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">Blog Single</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="our-services.html">Blog</a></li>
                        <li class="active">Blog Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="entry-content">
        <div class="container">
            <div class="row">
                <div class="content-area col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <article class="blog-post post-box">
                        <div class="entry-media post-cat-abs">
                            <img src="https://via.placeholder.com/790x510.png" alt="">
                            <div class="post-cat">
                                <div class="posted-in"><a href="#">Interiors</a></div>
                            </div>
                        </div>
                        <div class="inner-post">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <span class="posted-on"><a href="#">November 19, 2020</a></span>
                                </div>
                                <h3 class="entry-title">Use Pastel Colors & Natural Materials</h3>
                            </header>
                            <div class="entry-summary the-excerpt">
                                {{-- <p><span class="drop-cap"><span class="drop-cap-letter">A</span></span> faceting effect --}}
                                <p> Afaceting effect
                                    livens up and interrupts the cubism that sets the morphology of the West system apart
                                    from the cliches of modern design. Characterised by its suitability for use in a wide
                                    range of different contemporary and traditional arrangements, West also features glints
                                    of pure creativity, such as the chaise-longue, in pentagonal or hexagonal form and the
                                    elements that stand out for their striking backrests in saddle hide, ergonomically
                                    shaped to rise and support the rear cushion. True elements of surprise, they break up
                                    the compositional layout, creating a stylistic point of interest, and interrupting the
                                    continuous effect of the fabric covering, visually lightening the volume at the rear. A
                                    solution designed to optimise both look and form, created with the know-how about design
                                    and the savoir-faire associated with fine tailoring that have <span>always distinguished
                                        the Minotti brand</span>.</p>
                                <p>Every element of the system is made with exquisite goose down padding to ensure maximum
                                    comfort, features cushions finished with a piping that defines their profile and a
                                    distinctive aluminium strip, slightly rounded at the edges which skims the floor, in a
                                    brand new polished Brandy colour finish.</p>
                                {{-- <div id="gallery-2" class="gallery galleryid-82 gallery-columns-2 gallery-size-full">
                                    <figure class="gallery-item">
                                        <div class="gallery-icon landscape">
                                            <img src="https://via.placeholder.com/421x360.png" alt="">
                                        </div>
                                    </figure>
                                    <figure class="gallery-item">
                                        <div class="gallery-icon landscape">
                                            <img src="https://via.placeholder.com/421x360.png" alt="">
                                        </div>
                                    </figure>
                                </div>
                                <h4>You Will Never Fake the Feeling of Being in Such a Place</h4>
                                <p>West leaves plenty of room for interesting compositional possibilities: it enters a
                                    harmonious dialogue in terms of both colour and shape with the Amber coffee tables, is
                                    complemented by the Side coffee tables, with their frame in saddle hide that evokes that
                                    of the backrest and enhanced by the Clive consoles, which play around with surfaces,
                                    even setting one over another. <span><span>The combination of the two looks of
                                            West</span></span>, one with backrest in saddle hide and the other more
                                    conventional version with padded backrest and armrest.</p>
                                <blockquote>
                                    <p>“Even if you don’t have a ready sketch of what you want – we will help you to get the
                                        result you dreamed of.”<br><cite>DAVID OSWALD</cite></p>
                                </blockquote>
                                <p>Caule for Flos is an outdoor lighting collection with simple understated lines yet strong
                                    style identity. Copying the botanical structure of a flower, the collection features a
                                    real flexible slender stem, almost a natural element, a subtle addition to any outdoor
                                    setting. Available in different heights and configurations, the Caule <span>series comes
                                        in a variety of materials and surface finishes.</span></p>
                                <p><em>The bulky look created by the solid sculptural masses of the semi-circular legs of
                                        Wedge contrasts with the lightweight feet, which culminate in an oblique chisel tip
                                        shape.</em></p> --}}
                            </div>
                            <div class="entry-footer clearfix">
                                {{-- <div class="tagcloud">
                                    <a href="#" rel="tag">Exterior</a>
                                    <a href="#" rel="tag">Interior</a>
                                    <a href="#" rel="tag">Trends</a>
                                </div> --}}
                                <div class="share-post">
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
                            {{-- <div class="author-bio">
                                <div class="author-image"><img src="https://via.placeholder.com/150x150.png" alt="Tom Black"
                                        class="avatar"></div>
                                <div class="author-info">
                                    <h5>Tom Black</h5>
                                    <p class="des">He is attended the State University of New York at Oswego where he
                                        majored in English Literature and Creative Writing.</p>
                                    <div class="author-socials">
                                        <a href="twitter.com" target="_blank" title="Twitter" class="tooltip"><i
                                                class="fab fa-twitter"></i> </a>
                                        <a href="facebook.com" target="_blank" title="Facebook" class="tooltip"><i
                                                class="fab fa-facebook-f"></i> </a>
                                        <a href="linkedin.com" target="_blank" title="LinkedIn" class="tooltip"><i
                                                class="fab fa-linkedin-in"></i> </a>
                                        <a href="instagram.com" target="_blank" title="Instagram" class="tooltip"><i
                                                class="fab fa-instagram"></i> </a>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="related-posts">
                                <h3>Related Posts</h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="post-box post-item">
                                            <div class="post-inner">
                                                <div class="entry-media post-cat-abs">
                                                    <a href="post.html"><img src="https://via.placeholder.com/510x376.png"
                                                            alt=""></a>
                                                    <div class="post-cat">
                                                        <div class="posted-in"><a href="#">Interior</a></div>
                                                    </div>
                                                </div>
                                                <div class="inner-post">
                                                    <div class="entry-header">
                                                        <div class="entry-meta">
                                                            <span class="posted-on"><a href="#">March 19,
                                                                    2020</a></span>
                                                            {{-- <span class="byline">
                                                                <span class="author vcard"><a class="url fn n"
                                                                        href="#">Tom Black</a></span>
                                                            </span> --}}
                                                        </div><!-- .entry-meta -->

                                                        <h5 class="entry-title">
                                                            <a class="title-link" href="post.html">Top 10 Tips for Your
                                                                Kitchen Interior Design</a>
                                                        </h5>
                                                    </div><!-- .entry-header -->

                                                    <div class="the-excerpt">
                                                        We are constantly growing, learning, planning...
                                                    </div><!-- .entry-content -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm">
                                        <div class="post-box post-item">
                                            <div class="post-inner">
                                                <div class="entry-media post-cat-abs">
                                                    <a href="post.html"><img src="https://via.placeholder.com/510x376.png"
                                                            alt=""></a>
                                                    <div class="post-cat">
                                                        <div class="posted-in"><a href="#">Interior</a></div>
                                                    </div>
                                                </div>
                                                <div class="inner-post">
                                                    <div class="entry-header">
                                                        <div class="entry-meta">
                                                            <span class="posted-on"><a href="#">March 19,
                                                                    2020</a></span>
                                                            {{-- <span class="byline">
                                                                <span class="author vcard"><a class="url fn n"
                                                                        href="#">Tom Black</a></span>
                                                            </span> --}}
                                                        </div><!-- .entry-meta -->

                                                        <h5 class="entry-title">
                                                            <a class="title-link" href="post.html">The Golden Ratio Rules
                                                                for Best 2D Sketch</a>
                                                        </h5>
                                                    </div><!-- .entry-header -->

                                                    <div class="the-excerpt">
                                                        We are constantly growing, learning, planning...
                                                    </div><!-- .entry-content -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="widget-area primary-sidebar col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    {{-- <aside class="widget widget_categories">
                        <h6 class="widget-title">Categories</h6>
                        <ul>
                            <li><a href="#">Design</a> <span class="count">(3)</span></li>
                            <li><a href="#">Development</a> <span class="count">(5)</span></li>
                            <li><a href="#">Startup</a> <span class="count">(1)</span></li>
                            <li><a href="#">Technology</a> <span class="count">(3)</span></li>
                        </ul>
                    </aside> --}}
                    <aside class="widget widget_recent_news">
                        <h6 class="widget-title">Recent Posts</h6>
                        <ul class="recent-news clearfix">
                            <li class="clearfix">
                                <div class="thumb">
                                    <a href="post.html"><img src="https://via.placeholder.com/150x150.png"
                                            alt=""></a>
                                </div>
                                <div class="entry-header">
                                    <h6><a href="post.html">Plan Your Project with Your Software</a></h6>
                                    <span class="post-on"><span class="entry-date">November 21, 2019</span></span>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="thumb">
                                    <a href="post.html"><img src="https://via.placeholder.com/150x150.png"
                                            alt=""></a>
                                </div>
                                <div class="entry-header">
                                    <h6><a href="post.html">You have a Great Business Idea?</a></h6>
                                    <span class="post-on"><span class="entry-date">November 21, 2019</span></span>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="thumb">
                                    <a href="post.html"><img src="https://via.placeholder.com/150x150.png"
                                            alt=""></a>
                                </div>
                                <div class="entry-header">
                                    <h6><a href="post.html">Building Data Analytics Software</a></h6>
                                    <span class="post-on"><span class="entry-date">September 24, 2019</span></span>
                                </div>
                            </li>
                        </ul>
                    </aside>
                    {{-- <aside class="widget widget_tag_cloud">
                        <h6 class="widget-title">Tags</h6>
                        <div class="tagcloud">
                            <a href="#">business</a>
                            <a href="#">marketing</a>
                            <a href="#">SEO</a>
                            <a href="#">SMM</a>
                            <a href="#">solution</a>
                            <a href="#">startup</a>
                            <a href="#">strategy</a>
                            <a href="#">tips</a>
                        </div>
                    </aside> --}}
                    {{-- <aside class="widget widget_media_image text-center">
                        <a href="contact.html"><img src="https://via.placeholder.com/270x330.png" alt=""></a>
                    </aside> --}}
                </div>
            </div>
        </div>
    @endsection
