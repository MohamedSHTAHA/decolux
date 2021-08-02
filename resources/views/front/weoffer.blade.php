@extends('layouts.front.app')



@section('content')


<!-- subheader begin -->
<section id="subheader" data-speed="8" data-type="background"
    style="background-image: url('{{ asset('front') }}/images/WHAT-WE-OFFER.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>What We Offer</h1>
                </div>
                <ul id="breadcrumbs" class="crumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="introduction.html">Introduction</a></li>
                    <li class="active">What We Offer</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->






<section class="wpb_row vc_row-fluid vc_custom_1495530476030">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper ">
                        <!-- Element: OT Heading -->
                        <h1 class="ot_custom_heading  " style="text-align: center;">What We Offer</h1>
                        <!-- Element: OT Line solid -->
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

<section class="wpb_row vc_row-fluid offer vc_custom_1589297574087">
    <div class="container">
        <div class="row">
        @foreach($services as $service)
            <div class="wpb_column vc_column_container vc_col-sm-3">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper ">
                        <div class="wpb_single_image wpb_content_element vc_align_left">

                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                    {{--<img class="vc_single_image-img " src="{{ asset('uploads/services_images/'.$service->image) }}"
                                        width="150" height="43" alt="1" title="1" /> --}}{{$service->name}}
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

<section class="wpb_row vc_row-fluid team vc_custom_1589297749150 vc_row-has-fill">
    <div class="container">
        <div class="row">
            <div class="container-4 wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper wow fadeInUp">

                        <!-- team member -->
                        @foreach($services as $service)
                        <div class="de-team-list team-box wow fadeInUp">
                            <div class="team-pic">
                                <img width="500" height="500"
                                    src="{{ asset('uploads/services_images/'.$service->image) }}" class="img-responsive"
                                    alt="" loading="lazy"
                                    srcset="{{ asset('uploads/services_images/'.$service->image) }}"
                                    sizes="(max-width: 500px) 100vw, 500px" title="{{ $service->name }}" />
                            </div>
                            <div class="team-desc">
                                <h3></h3>
                                <div class="small-border"></div>
                                <p>{!! $service->servicesDetails[0]->description !!}</p>
                                <div class="social">
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- team close -->

                        <!-- team member -->

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




<section class="wpb_row vc_row-fluid call-to-action bg-color dark text-center vc_custom_1453975666551">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper ">
                        <a href="/contact" target="_self" class="btn btn-line-black btn-big  ">CONTACT US</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection