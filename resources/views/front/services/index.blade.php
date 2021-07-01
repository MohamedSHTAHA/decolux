@extends('layouts.front.app')



@section('content')


<section id="subheader" data-speed="8" data-type="background" style="background-image: url('{{ asset('uploads/services_images/'.$servicename->image) }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>{{$servicename->name}}</h1>
                </div>
                <ul id="breadcrumbs" class="crumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="">Our Services</a></li>
                    <li class="active">{{$servicename->name}}</li>
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

                            <div class="image-container hidden-xs @if($row->fadetype=='fadeInRight') pull-left @else pull-right right0 @endif col-md-6" style="background-image:url({{ asset('uploads/servicesdetails_images/'.$row->image) }}); ?>" data-delay="0"></div>

                            <!-- Added this code in 26/03/2019 -->
                            <img class="visible-xs img-responsive" src="{{ asset('uploads/servicesdetails_images/'.$row->image) }}" />

                            <div class="container">
                                <div class="row">
                                    <div class="inner-padding">
                                        <div class="col-md-5   @if($row->fadetype=='fadeInRight') col-md-offset-7  @else  @endif wow {{$row->fadetype}}" data-wow-delay=".2s">
                                            <h2></h2><br/>
                                     {!! $row->description !!}
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
