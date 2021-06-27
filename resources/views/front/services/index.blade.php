@extends('layouts.front.app')



@section('content')


<section id="subheader" data-speed="8" data-type="background" style="background-image: url('images/deco-sol.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>DecoSol</h1>
                </div>
                <ul id="breadcrumbs" class="crumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li><a href="our-services.html">Our Services</a></li>
                    <li class="active">DecoSol</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->



<section class="wpb_row vc_row-fluid">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper ">




@if(!empty($servicesbyname ))
                        @foreach( $servicesbyname  as $row)
                        <div class="side-bg">

                            <div class="image-container hidden-xs pull-left col-md-6" style="background-image:url(images/2-10.jpg); ?>" data-delay="0"></div>

                            <!-- Added this code in 26/03/2019 -->
                            <img class="visible-xs img-responsive" src="images/2-10.jpg" />

                            <div class="container">
                                <div class="row">
                                    <div class="inner-padding">
                                        <div class="col-md-5 col-md-offset-7 wow {{$row->fadetype}}" data-wow-delay=".2s">
                                            <h2></h2><br/>
                                            <p> In addition to large collection of all types of other window blind</p>
                                            <p><strong>Cellular shade</strong></p>
                                            <p><strong>Panel Track</strong></p>
                                            <p><strong>Venetian blind</strong></p>
                                            <p><strong>Wooden Blind</strong></p>
                                            <p><strong>Draperies and Curtains</strong></p>
                                            <p><strong>Home automation </strong>Our company goal is to provide its customer with a full solution for their comfort and <em>convenience</em> that can be a standalone smart system or communicate with
                                                other Low Voltage protocols Like LON. KNX, RS485, bus and give the option for all audio-Visual controllers to communicate with our Blind, Light Screen or any other Electrical Device. With wide range
                                                of switches, remote control, or touch screen.
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="side-bg">
                            No Data Found
                            <div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
