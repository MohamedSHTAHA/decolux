@extends('layouts.front.app')



@section('content')



<section class="wpb_row vc_row-fluid hero_one no-padding">
    <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper ">

                    <p class="rs-p-wp-fix"></p>
                    <rs-module-wrap id="rev_slider_1_2_wrapper" data-source="gallery" style="background:#E9E9E9;padding:0;">
                        <rs-module id="rev_slider_1_2" style="" data-version="6.3.5">
                            <rs-slides>
                                <rs-slide data-key="rs-1" data-title="Slide 1" data-thumb="{{ asset($slider1) }}" data-anim="ei:d;eo:d;s:500;r:0;t:fade;sl:10;">
                                    <img src="{{ asset($slider1) }}" title="Slider 2" width="1920" height="1280" data-bg="p:center top;" class="rev-slidebg" data-no-retina>
                                    <!--
							-->
                                    <rs-layer id="slider-1-slide-1-layer-2" class="big-text" data-type="text" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="xo:0,0,0,1px;y:m;yo:0,0,0,-40px;" data-text="s:20,20,28,25;l:22;" data-frame_0="sX:2;sY:2;tp:600;" data-frame_1="tp:600;e:easeInOutExpo;st:400;sp:800;sR:400;" data-frame_999="x:0;y:0;z:-50;sX:0.85;sY:0.85;o:0;rX:0;rY:0;rZ:0;skX:0;skY:0;tp:600;e:nothing;st:w;sp:400;sR:4800;" style="z-index:6;font-family:Roboto;">GREEN BOND CIRCLE
                                    </rs-layer>
                                    <!--

							-->
                                    <rs-layer id="slider-1-slide-1-layer-3" data-type="text" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="xo:0,0,0,14px;yo:335px,335px,335px,296px;" data-text="l:22;" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:easeInOutExpo;st:800;sp:400;sR:800;" data-frame_999="y:50px;o:0;tp:600;e:nothing;st:w;sp:450;sR:4800;" style="z-index:7;font-family:Roboto;"><a target="_blank" href="{{ asset('uploads/logo/'.$pdf) }}" class="btn-slider">Our Color Charts</a>
                                    </rs-layer>
                                    <!--
-->
                                </rs-slide>
                                <rs-slide data-key="rs-2" data-title="Slide 2" data-thumb="{{ asset($slider2) }}" data-anim="ei:d;eo:d;s:500;r:0;t:fade;sl:10;">
                                    <img src="{{ asset($slider2) }}" title="slider 1" width="1106" height="728" data-bg="p:center top;" class="rev-slidebg" data-no-retina>
                                    <!--
							-->
                                    <rs-layer id="slider-1-slide-2-layer-2" class="big-text" data-type="text" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="y:m;" data-text="s:20,20,30,30;l:22;" data-frame_0="sX:2;sY:2;tp:600;" data-frame_1="tp:600;e:easeInOutExpo;st:400;sp:800;sR:400;" data-frame_999="x:0;y:0;z:-50;sX:0.85;sY:0.85;o:0;rX:0;rY:0;rZ:0;skX:0;skY:0;tp:600;e:nothing;st:w;sp:400;sR:4800;" style="z-index:6;font-family:Roboto;">GREEN BOND CIRCLE
                                    </rs-layer>
                                    <!--

							-->
                                    <rs-layer id="slider-1-slide-2-layer-3" data-type="text" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="yo:335px;" data-text="l:22;" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:easeInOutExpo;st:800;sp:400;sR:800;" data-frame_999="y:50px;o:0;tp:600;e:nothing;st:w;sp:450;sR:4800;" style="z-index:7;font-family:Roboto;"><a target="_blank" href="{{ asset('uploads/logo/'.$pdf) }}" class="btn-slider">Our Color Charts</a>
                                    </rs-layer>
                                    <!--
-->
                                </rs-slide>
                            </rs-slides>
                        </rs-module>

                    </rs-module-wrap>

                </div>
            </div>
        </div>

    </div>

</section>






<section class="wpb_row vc_row-fluid vc_custom_1495530476030">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper ">

                        <h1 class="ot_custom_heading  " style="text-align: center;">What We Offer</h1>

                        <div class=" separator ">
                            <span><i class="fa fa-circle"></i></span>
                        </div>
                        <div class="spacer-single"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpb_row vc_row-fluid offer vc_custom_1589297574087 margg">
    <div class="container">
        <div class="row">
       
        @foreach(\App\Services::with('servicesDetails')->get() as $service)
            <div class="wpb_column vc_column_container vc_col-sm-3">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper ">
                        <div class="wpb_single_image wpb_content_element vc_align_left">

                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                   {{-- <img class="vc_single_image-img " src="{{ asset('front')}}/images/1-150x43.png" width="150" height="43" alt="1" title="1" />--}}
                                   {{$service->name}}
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section class="wpb_row vc_row-fluid team vc_custom_1589297749150 vc_row-has-fill margg">
    <div class="container">
        <div class="row">
            <div class="container-4 wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper wow fadeInUp">

                        <!-- team member -->
                        @foreach(\App\Services::with('servicesDetails')->get() as $service)
                        <div class="de-team-list team-box wow fadeInUp">
                            <div class="team-pic">
                                <img width="500" height="500" src="{{ asset('uploads/services_images/'.$service->image) }}" class="img-responsive" alt="" loading="lazy" srcset="{{ asset('uploads/services_images/'.$service->image) }}" sizes="(max-width: 500px) 100vw, 500px" title="{{ $service->name }}" />
                            </div>
                            <div class="team-desc">
                                <h3></h3>
                                <div class="small-border"></div>
                                <p>@if(!empty($service->servicesDetails[0])) {!! $service->servicesDetails[0]->description !!} @endif</p>
                                <div class="social">
                                </div>
                            </div>
                        </div>
                       @endforeach
                        <!-- team close -->

                        <div class="vc_empty_space" style="height: 50px">
                            <span class="vc_empty_space_inner"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="wpb_row vc_row-fluid text-light bg-fixed vc_custom_1587803640174 vc_row-has-fill" style="background-image: url({{ asset('front')}}/images/ourmission.png) !important;">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper ">
                        <h1 class="ot_custom_heading  " style="text-align: center;color: #ffffff;">Our Mission</h1>
                        <div class=" separator "><span><i class="fa fa-circle"></i></span>
                        </div>
                        <div class="spacer-single">
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper ">

                        <div class="de_tab tab_steps tab_5  ">
                            <ul class="de_nav process-circle-textonly">
                                <li class="active wow fadeIn " data-wow-delay="0.4s">
                                    <span class="content-mid">
                                        <div class="inner">
                                            SERVICE
                                        </div>
                                    </span>
                                    <div class="v-border"></div>
                                </li>

                                <li class=" wow fadeIn " data-wow-delay="0.8s">
                                    <span class="content-mid">
                                        <div class="inner">
                                            COMMITMENT
                                        </div>
                                    </span>
                                    <div class="v-border"></div>
                                </li>

                                <li class=" wow fadeIn " data-wow-delay="1.2s">
                                    <span class="content-mid">
                                        <div class="inner">
                                            CUSTOMER SATISFACTION
                                        </div>
                                    </span>
                                    <div class="v-border"></div>
                                </li>

                                <li class=" wow fadeIn " data-wow-delay="1.6s">
                                    <span class="content-mid">
                                        <div class="inner">
                                            Quality Assurance
                                        </div>
                                    </span>
                                    <div class="v-border"></div>
                                </li>

                                <li class=" wow fadeIn " data-wow-delay="2s">
                                    <span class="content-mid">
                                        <div class="inner">
                                            Innovation theory
                                        </div>
                                    </span>
                                    <div class="v-border"></div>
                                </li>

                            </ul>

                            <div class="de_tab_content">
                                <div class="de_tab_content_inner">
                                    <p>We shared our experience in Aluminium composite panels cladding with you for commercial <b>, residential, hospitality and retail projects. </b> Our services are rendered with professionalism and complete responsibility ensuring that all clients requirements and expectation are met.</p>
                                </div>
                                <div class="de_tab_content_inner">
                                    <p><strong>GBC</strong> is committed to provide you with the highest level of personal attention, guidance for every step of the way. Consistency, quality, attention to detail and communication are assured at every stage.</p>
                                </div>
                                <div class="de_tab_content_inner">
                                    <p>Customer satisfaction information, including surveys and ratings, can help a company determine how to best improve or changes its products and services.</p>
                                </div>
                                <div id="tab-618" class="de_tab_content_inner">
                                    <p>Our team carries out quality control process through every step starting from receiving the orders, manufacturing and delivery the order to the client with a professionalism way.</p>
                                </div>
                                <div class="de_tab_content_inner">
                                    <p>We’re aiming to share our long experience in the Aluminum composite panel filed with our respective clients to reach the maximum Creativity.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="wpb_row vc_row-fluid call-to-action bg-color text-center vc_custom_1442204079522 no-padding">
    <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-12">

            <div class="vc_column-inner">
                <div class="wpb_wrapper ">
                    <a href="/inquiry" target="_self" class="btn btn-line-black btn-big  ">CONTACT US</a>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection