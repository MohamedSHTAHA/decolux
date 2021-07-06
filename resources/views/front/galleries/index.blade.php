@extends('layouts.front.app')



@section('content')

<!-- subheader begin -->
<section id="subheader" data-speed="8" data-type="background" style="background-image: url('{{ asset('front')}}/images/WHAT-WE-OFFER.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>general gallery</h1>
                </div>
                <ul id="breadcrumbs" class="crumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">general gallery</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->



<section class="wpb_row vc_row-fluid offer vc_custom_1586832969625">
    <div class="container">
        <div class="row">

            @isset($galleries)
            @empty(!$galleries)
            @foreach ( $galleries as $gallery)
            <div class="vc_grid-item vc_clearfix vc_col-sm-3" style="padding: 5px">
                <div class="vc_grid-item-mini vc_clearfix">
                    <div class="vc_gitem-animated-block ">
                        <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto" style="background-image: url('{{$gallery->getFirstMediaUrl('galleries')}}') !important;">
                            <a href="{{$gallery->getFirstMediaUrl('galleries')}}" title="{{$gallery->title}}" data-rel="prettyPhoto[rel--2634047803]" data-vc-gitem-zone="prettyphotoLink" class="vc_gitem-link prettyphoto vc-zone-link vc-prettyphoto-link">
                            </a>
                            <img src="{{$gallery->getFirstMediaUrl('galleries')}}" class="vc_gitem-zone-img" alt="{{$gallery->title}}">

                        </div>
                    </div>
                </div>

            </div>
            @endforeach
            @endempty

            @endisset

            <!--<div class="vc_grid-item vc_clearfix vc_col-sm-3" style="padding: 5px">
                <div class="vc_grid-item-mini vc_clearfix">
                    <div class="vc_gitem-animated-block ">
                        <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto" style="background-image: url('{{ asset('front')}}/images/zebra-blinds-1024x680.jpg') !important;">
                            <a href="{{ asset('front')}}/images/zebra-blinds-1024x680.jpg" title="Zebra Blinds" data-rel="prettyPhoto[rel--2634047803]" data-vc-gitem-zone="prettyphotoLink" class="vc_gitem-link prettyphoto vc-zone-link vc-prettyphoto-link">
                            </a>
                            <img src="{{ asset('front')}}/images/zebra-blinds-1024x680.jpg" class="vc_gitem-zone-img" alt="">

                        </div>
                    </div>
                </div>

            </div>

            <div class="vc_grid-item vc_clearfix vc_col-sm-3" style="padding: 5px">
                <div class="vc_grid-item-mini vc_clearfix">
                    <div class="vc_gitem-animated-block ">

                        <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto" style="background-image: url('{{ asset('front')}}/images/wooden-flooring.jpg') !important;">
                            <a href="{{ asset('front')}}/images/wooden-flooring.jpg" title="Wooden Flooring" data-rel="prettyPhoto[rel--2634047803]" data-vc-gitem-zone="prettyphotoLink" class="vc_gitem-link prettyphoto vc-zone-link vc-prettyphoto-link"></a>
                            <img src="{{ asset('front')}}/images/wooden-flooring.jpg" class="vc_gitem-zone-img" alt="">

                        </div>
                    </div>
                </div>

            </div>

            <div class="vc_grid-item vc_clearfix vc_col-sm-3" style="padding: 5px">
                <div class="vc_grid-item-mini vc_clearfix">
                    <div class="vc_gitem-animated-block ">
                        <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto" style="background-image: url('{{ asset('front')}}/images/wooden-blinds-.jpg') !important;">
                            <a href="{{ asset('front')}}/images/wooden-blinds-.jpg" title="Wood Blinds" data-rel="prettyPhoto[rel--2634047803]" data-vc-gitem-zone="prettyphotoLink" class="vc_gitem-link prettyphoto vc-zone-link vc-prettyphoto-link"></a>
                            <img src="{{ asset('front')}}/images/wooden-blinds-.jpg" class="vc_gitem-zone-img" alt="">

                        </div>
                    </div>
                </div>

            </div>


            <div class="vc_grid-item vc_clearfix vc_col-sm-3" style="padding: 5px">
                <div class="vc_grid-item-mini vc_clearfix ">
                    <div class="vc_gitem-animated-block ">
                        <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto" style="background-image: url('{{ asset('front')}}/images/wall-covering-700x1024.jpg') !important;">
                            <a href="{{ asset('front')}}/images/wall-covering-700x1024.jpg" title="Wall Covering" data-rel="prettyPhoto[rel--2634047803]" data-vc-gitem-zone="prettyphotoLink" class="vc_gitem-link prettyphoto vc-zone-link vc-prettyphoto-link"></a>
                            <img src="{{ asset('front')}}/images/wall-covering-700x1024.jpg" class="vc_gitem-zone-img" alt="">

                        </div>
                    </div>
                </div>

            </div>-->
        </div>

        <!--<div class="row">
            <div class="vc_grid-item vc_clearfix vc_col-sm-3" style="padding: 5px">
                <div class="vc_grid-item-mini vc_clearfix ">
                    <div class="vc_gitem-animated-block ">
                        <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto" style="background-image: url('images/stainless-works-.jpg') !important;">
                            <a href="images/stainless-works-.jpg" title="Handrail" data-rel="prettyPhoto[rel--2634047803]" data-vc-gitem-zone="prettyphotoLink" class="vc_gitem-link prettyphoto vc-zone-link vc-prettyphoto-link"></a>
                            <img src="images/stainless-works-.jpg" class="vc_gitem-zone-img" alt="">
                        </div>
                    </div>
                </div>

            </div>

            <div class="vc_grid-item vc_clearfix vc_col-sm-3" style="padding: 5px">

                <div class="vc_grid-item-mini vc_clearfix ">
                    <div class="vc_gitem-animated-block ">
                        <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto" style="background-image: url('images/sports-finishing-types.jpg') !important;">
                            <a href="images/sports-finishing-types.jpg" title="Running Track" data-rel="prettyPhoto[rel--2634047803]" data-vc-gitem-zone="prettyphotoLink" class="vc_gitem-link prettyphoto vc-zone-link vc-prettyphoto-link"></a>
                            <img src="images/sports-finishing-types.jpg" class="vc_gitem-zone-img" alt="">

                        </div>
                    </div>
                </div>

            </div>

            <div class="vc_grid-item vc_clearfix vc_col-sm-3" style="padding: 5px">
                <div class="vc_grid-item-mini vc_clearfix ">
                    <div class="vc_gitem-animated-block ">
                        <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto" style="background-image: url('images/roller-blinds-fabrics.jpg') !important;">
                            <a href="images/roller-blinds-fabrics.jpg" title="Roller Blinds" data-rel="prettyPhoto[rel--2634047803]" data-vc-gitem-zone="prettyphotoLink" class="vc_gitem-link prettyphoto vc-zone-link vc-prettyphoto-link"></a>
                            <img src="images/roller-blinds-fabrics.jpg" class="vc_gitem-zone-img" alt="">

                        </div>
                    </div>
                </div>

            </div>

            <div class="vc_grid-item vc_clearfix vc_col-sm-3" style="padding: 5px">
                <div class="vc_grid-item-mini vc_clearfix ">

                    <div class="vc_gitem-animated-block ">
                        <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto " style="background-image: url('images/WhatsApp-Image-2020-04-13-at-12.46.02.jpeg') !important;">
                            <a href="images/WhatsApp-Image-2020-04-13-at-12.46.02.jpeg" title="Wooden Ceiling" data-rel="prettyPhoto[rel--2634047803]" data-vc-gitem-zone="prettyphotoLink" class="vc_gitem-link prettyphoto vc-zone-link vc-prettyphoto-link"></a>
                            <img src="images/WhatsApp-Image-2020-04-13-at-12.46.02.jpeg" class="vc_gitem-zone-img" alt="">

                        </div>
                    </div>

                </div>
            </div>



        </div>-->

    </div>
</section>


<section class="wpb_row vc_row-fluid call-to-action bg-color text-center vc_custom_1442204572844 no-padding">
    <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper ">
                    <a href="{{route('front.contact.index')}}" target="_self" class="btn btn-line-black btn-big  ">CONTACT US</a>

                </div>
            </div>
        </div>
    </div>
</section>



@endsection
