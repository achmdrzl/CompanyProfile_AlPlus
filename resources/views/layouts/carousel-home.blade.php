@push('style-alt')
    <style>
        .center-video {
            display: block;
            margin: 0 auto;
        }

        /* CSS Styles */
        .video-container {
            position: relative;
            width: 100%;
            max-width: 1920px;
            /* Set a maximum width if needed */
        }

        .center-video {
            width: 100%;
            height: auto;
            display: block;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.1);
            /* Set the background color and opacity */
            pointer-events: none;
            /* Allow clicks to pass through the overlay */
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
                    data-thumb="{{ asset('assets/video/A/UTUBE FORMAT POLOS - ALPLUS PANTRY - POLOS .mp4') }}" data-rotate="0"
                    data-saveperformance="off" data-title="" data-param1="1" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="" data-delay="10000">
                    <!-- MAIN IMAGE -->
                    {{-- <img src="https://via.placeholder.com/1920x950.png" data-bgcolor='rgba(255,255,255,0)'
                        style='' alt="" data-bgposition="center center" data-bgfit="cover"
                        class="rev-slidebg" data-bgrepeat="no-repeat" data-bgparallax="off" data-no-retina> --}}
                    <!-- MAIN VIDEO -->
                    <!-- Video Container with Overlay -->
                    <div class="video-container">
                        <video class="center-video" width="1920" height="1080" controls loop muted autoplay>
                            <source src="{{ asset('assets/video/A/UTUBE FORMAT POLOS - ALPLUS PANTRY - POLOS .mp4') }}"
                                type="video/mp4">
                        </video>
                        <!-- Overlay -->
                        <div class="overlay"></div>
                    </div>

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
                    data-thumb="https://via.placeholder.com/1920x950.png" data-rotate="0" data-saveperformance="off"
                    data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                    data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="https://via.placeholder.com/1920x950.png" data-bgcolor='#ffffff' style=''
                        alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        class="rev-slidebg" data-bgparallax="off" data-no-retina>


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
                    data-thumb="https://via.placeholder.com/1920x950.png" data-rotate="0" data-saveperformance="off"
                    data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                    data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="https://via.placeholder.com/1920x950.png" data-bgcolor='#ffffff' style=''
                        alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        class="rev-slidebg" data-bgparallax="off" data-no-retina>


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
