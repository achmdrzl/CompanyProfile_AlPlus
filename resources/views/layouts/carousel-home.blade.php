@push('style-alt')
    <style>
        .img-fluid {
            max-width: 100%;
            height: auto;
        }
    </style>
@endpush

<div class="p-0">
    <div class="grid-lines grid-lines-horizontal z-index-1">
        <span class="g-line-horizontal line-bottom color-line-secondary"></span>
    </div>
    <div class="grid-lines grid-lines-vertical z-index-1">
        <span class="g-line-vertical line-left color-line-secondary"></span>
        <span class="g-line-vertical line-right color-line-secondary"></span>
    </div>
    <div id="rev_slider_one_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase"
        data-source="gallery">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_one" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>

                <!-- SLIDE 1 -->
                <li data-index="rs-70" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-rotate="0" data-saveperformance="off" data-title="" data-param1="1" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                    data-param9="" data-param10="" data-description="" data-delay="10000">
                    <!-- MAIN IMAGE -->
                    {{-- <img src="https://via.placeholder.com/1920x950.png" data-bgcolor='rgba(255,255,255,0)'
                        style='' alt="" data-bgposition="center center" data-bgfit="cover"
                        class="rev-slidebg" data-bgrepeat="no-repeat" data-bgparallax="off" data-no-retina> --}}
                    <!-- MAIN VIDEO -->
                    <!-- Video Container with Overlay -->
                    <div class="video-container">
                    </div>


                    <div class="image-container">
                        {{-- <img class="mobile-image" src="{{ asset('assets/images/index/MTXX_MH20230629_204259513 (1) 1.png') }}"
                        alt="Placeholder Image"> --}}
                    </div>

                    {{-- <img class="mobile-image" src="{{ asset('assets/images/index/VEN02484 1.png') }}"
                        alt="Placeholder Image"
                        style="max-width: 100%; height: auto; display: block; margin: 0 auto;"> --}}
                    <video class="center-video desktop-video" controls loop muted autoplay>
                        <source src="{{ asset('assets/video/A/UTUBE FORMAT POLOS - ALPLUS PANTRY - POLOS .mp4') }}"
                            type="video/mp4">
                    </video>
                    
                    <!-- LAYER 1  right image overlay dark-->

                    <!-- LAYER 3  Thin text title-->
                    {{-- <div class="tp-caption tp-resizeme tp-caption-big" id="slide-70-layer-1"
                                    data-x="['center','center','center','center']" data-hoffset="['56','46','34','0']"
                                    data-y="['center','center','center','center']"
                                    data-voffset="['-64','-72','-65','-50']" data-fontsize="['206',150','0','0']"
                                    data-lineheight="['206','170','127','80']"
                                    data-letterspacing="['104','85','63','39']"
                                    data-fontweight="['900','900','900','900']"
                                    data-color="['transparent','transparent','transparent','transparent']"
                                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                    data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":500,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;","ease":"power3.inOut"}]'
                                    data-textAlign="['center','center','center','center']">Design
                                </div> --}}

                    <!-- LAYER 4  Bold Title-->
                    <div class="tp-caption tp-resizeme tp-caption-main" id="slide-70-layer-2"
                        data-x="['center','center','center','center']" data-hoffset="['2','0','0','0']"
                        data-y="['center','center','center','center']" data-voffset="['-56','-63','-60','-65']"
                        data-fontsize="['93','72','55','40']" data-lineheight="['83','70','51','55']"
                        data-color="['#fff','#fff','#fff','#fff']" data-fontweight="['200','200','200','200']"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                        data-textAlign="['left','left','left','left']">High-end Furnishings
                    </div>

                    <!-- LAYER 5  Paragraph-->
                    <div class="tp-caption tp-resizeme tp-desc" id="slide-70-layer-3"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['center','center','center','center']" data-voffset="['54','43','31','15']"
                        data-fontsize="['19','18','17','16']" data-lineheight="['33','27','28','24']"
                        data-width="['818','630','500','417']" data-weight="['500','500','500','500']"
                        data-color="['#fff','#fff','#fff','#fff']" data-whitespace="normal" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                        data-textAlign="['center','center','center','center']">Discover the freedom of design at the
                        palm of your hands. Tweak and decide what’s best for you, and let us make the magic happen.
                    </div>

                    <!-- LAYER 6  Read More-->
                    <div class="tp-caption rev-btn" id="slide-70-layer-4" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['center','center','center','center']"
                        data-voffset="['170','140','119','110']" data-fontsize="['13','18','17','0']"
                        data-lineheight="['25','18','16','16']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-responsive_offset="on"
                        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a
                            href="{{ route('projects.index') }}"
                            class="octf-btn octf-btn-primary btn-slider btn-large">View
                            Projects</a>
                    </div>

                </li>


                <!-- SLIDE 1 -->
                <li data-index="rs-71" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="{{ asset('assets/images/index/(11759)DIANA2_000-2.png') }}" data-rotate="0"
                    data-saveperformance="off" data-title="" data-param1="1" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/images/index/(11759)DIANA2_000-2.png') }}" data-bgcolor='#ffffff'
                        style='' alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="off" data-no-retina>


                    <!-- LAYER 3  Thin text title-->
                    {{-- <div class="tp-caption tp-resizeme tp-caption-big" id="slide-71-layer-1"
                                    data-x="['center','center','center','center']" data-hoffset="['56','46','34','0']"
                                    data-y="['center','center','center','center']"
                                    data-voffset="['-64','-72','-65','-50']" data-fontsize="['206',150','0','0']"
                                    data-lineheight="['206','170','127','80']"
                                    data-letterspacing="['104','85','63','39']"
                                    data-fontweight="['900','900','900','900']"
                                    data-color="['transparent','transparent','transparent','transparent']"
                                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                    data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":500,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;","ease":"power3.inOut"}]'
                                    data-textAlign="['center','center','center','center']">Quality
                                </div> --}}

                    <!-- LAYER 4  Bold Title-->
                    <div class="tp-caption tp-resizeme tp-caption-main text-center" style="margin-bottom: 80px;"
                        id="slide-71-layer-2" data-x="['center','center','center','center']"
                        data-hoffset="['2','0','0','0']" data-y="['center','center','center','center']"
                        data-voffset="['-56','-63','-60','-65']" data-fontsize="['93','72','55','40']"
                        data-lineheight="['83','70','51','55']" data-color="['#fff','#fff','#fff','#fff']"
                        data-fontweight="['200','200','200','200']" data-whitespace="nowrap" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                        data-textAlign="['left','left','left','left']">In-House Production <br> from Start to Finish
                    </div>

                    <!-- LAYER 5  Paragraph-->
                    <div class="tp-caption tp-resizeme tp-desc" id="slide-71-layer-3"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['center','center','center','center']" data-voffset="['54','43','31','15']"
                        data-fontsize="['19','18','17','16']" data-lineheight="['33','27','28','24']"
                        data-width="['818','630','500','417']" data-weight="['500','500','500','500']"
                        data-color="['#fff','#fff','#fff','#fff']" data-whitespace="normal" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                        data-textAlign="['center','center','center','center']">Supported by a qualified and talented
                        team of designers, we will help transform your visions into reality. From concept to completion,
                        trust AL+ to provide you with the best service.
                    </div>

                    <!-- LAYER 6  Read More-->
                    <div class="tp-caption rev-btn" id="slide-71-layer-4"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['center','center','center','center']" data-voffset="['170','140','119','110']"
                        data-fontsize="['13','18','17','0']" data-lineheight="['25','18','16','16']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-responsive_offset="on"
                        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a
                            href="{{ route('projects.index') }}"
                            class="octf-btn octf-btn-primary btn-slider btn-large">View
                            Projects</a>
                    </div>
                </li>

                <!-- SLIDE 1 -->
                <li data-index="rs-72" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="{{ asset('assets/images/index/Rev VEN02163 1.png') }}" data-rotate="0"
                    data-saveperformance="off" data-title="" data-param1="1" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/images/index/Rev VEN02163 1.png') }}" data-bgcolor='#ffffff'
                        style='' alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="off" data-no-retina>


                    <!-- LAYER 3  Thin text title-->
                    {{-- <div class="tp-caption tp-resizeme tp-caption-big" id="slide-72-layer-1"
                                    data-x="['center','center','center','center']" data-hoffset="['56','46','34','0']"
                                    data-y="['center','center','center','center']"
                                    data-voffset="['-64','-72','-65','-50']" data-fontsize="['206',150','0','0']"
                                    data-lineheight="['206','170','127','80']"
                                    data-letterspacing="['104','85','63','39']"
                                    data-fontweight="['900','900','900','900']"
                                    data-color="['transparent','transparent','transparent','transparent']"
                                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                    data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":500,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;","ease":"power3.inOut"}]'
                                    data-textAlign="['center','center','center','center']">Studio
                                </div> --}}

                    <!-- LAYER 4  Bold Title-->
                    <div class="tp-caption tp-resizeme tp-caption-main text-center" style="margin-bottom: 80px;"
                        id="slide-72-layer-2" data-x="['center','center','center','center']"
                        data-hoffset="['2','0','0','0']" data-y="['center','center','center','center']"
                        data-voffset="['-56','-63','-60','-65']" data-fontsize="['93','72','55','40']"
                        data-lineheight="['83','70','51','55']" data-color="['#fff','#fff','#fff','#fff']"
                        data-fontweight="['200','200','200','200']" data-whitespace="nowrap" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                        data-textAlign="['left','left','left','left']">The Authentic Mark <br> of TImelessness
                    </div>

                    <!-- LAYER 5  Paragraph-->
                    <div class="tp-caption tp-resizeme tp-desc" id="slide-72-layer-3"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['center','center','center','center']" data-voffset="['54','43','31','15']"
                        data-fontsize="['19','18','17','16']" data-lineheight="['33','27','28','24']"
                        data-width="['818','630','500','417']" data-weight="['500','500','500','500']"
                        data-color="['#fff','#fff','#fff','#fff']" data-whitespace="normal" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                        data-textAlign="['center','center','center','center']">Build to last forever, encapsulate the
                        essence of sophistication with our custom-made furnishings. Step into the next level of comfort
                        using our premium powder coated aluminum base, and make the best of your own homes.
                    </div>

                    <!-- LAYER 6  Read More-->
                    <div class="tp-caption rev-btn" id="slide-72-layer-4"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['center','center','center','center']" data-voffset="['170','140','119','110']"
                        data-fontsize="['13','18','17','0']" data-lineheight="['25','18','16','16']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-responsive_offset="on"
                        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a
                            href="{{ route('projects.index') }}"
                            class="octf-btn octf-btn-primary btn-slider btn-large">View
                            Projects</a>
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Function to check screen width and show/hide elements accordingly
    function handleResponsiveLayout() {
        var video = $('.center-video');
        var image = $('.mobile-image');

        if (window.innerWidth <= 767) {
            video.css('display', 'block');
            image.css('display', 'block');
        } else {
            image.css('display', 'none');
            video.css('display', 'display');
        }
    }

    // Initial check on page load
    handleResponsiveLayout();

    // Attach the function to the window resize event
    $(window).on('resize', handleResponsiveLayout);
</script>
