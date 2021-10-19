@extends('layouts.front.app')



@section('content')

@if(!empty($aboutus ))
                    @foreach($aboutus  as $row)
                    
                     @if(!empty($row->aboutuslogo ))
                
<section id="subheader" data-speed="8" data-type="background" style="background-image: url('{{ asset('uploads/aboutus/'.$row->aboutuslogo) }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>About Us</h1>
                </div>
                <ul id="breadcrumbs" class="crumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li><a href="introduction.html">Introduction</a>
                    </li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@else
<section id="subheader" data-speed="8" data-type="background" style="background-image: url('{{ asset('front')}}/images/WHAT-WE-OFFER.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>About Us</h1>
                </div>
                <ul id="breadcrumbs" class="crumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li><a href="introduction.html">Introduction</a>
                    </li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endif
@endforeach
@else
<section id="subheader" data-speed="8" data-type="background" style="background-image: url('{{ asset('front')}}/images/WHAT-WE-OFFER.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>About Us</h1>
                </div>
                <ul id="breadcrumbs" class="crumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li><a href="introduction.html">Introduction</a>
                    </li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endif

<section class="wpb_row vc_row-fluid side-bg no-padding vc_custom_1474447018555 vc_row-has-fill no-padding">
    <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper ">
                    <div class="side-bg">
@if(!empty($aboutus ))
                    @foreach($aboutus  as $row)
                    
                    
                    
                        <div class="image-container hidden-xs pull-left col-md-5" style="background-image:url({{ asset('uploads/aboutus/'.$row->image) }}); ?>" data-delay="0"></div>
                    @endforeach
                    @else
                        <div class="image-container hidden-xs pull-left col-md-5" style="background-image:url({{ asset('front')}}/images/ABOUT-us.jpg); ?>" data-delay="0"></div>
                        
                        @endif
                        @if(!empty($aboutus ))
                    @foreach($aboutus  as $row)
                    <img class="{{ asset('uploads/aboutus/'.$row->image) }}" />
                    @endforeach
                    @else
                        <img class="visible-xs img-responsive" src="{{ asset('front')}}/images/ABOUT-us.jpg" />
@endif
                        <div class="container">
                            <div class="row">
                                <div class="inner-padding">
                                    <div class="col-md-6 col-md-offset-6 wow fadeInRight" data-wow-delay=".2s">
                                        <h2>ABOUT US</h2><br />
                                        @if(!empty($aboutus ))
                    @foreach($aboutus  as $row)
               
                    <b>{!! $row->text !!}<b>
                        @endforeach
                    @else
                                     	We were Founded in  <b>2021 </b> 2021 in Jordan the heart of the middle east as one of the main suppliers 
                                         of all types of buildings and walls cladding from ACP.</p>
                                        <p> We’re looking forwards to cooperate with you in order to give you the chance to seek the right information and solutions for the best products you can use for cladding.
                                        </p>
                                        <p>
                                        We have launched several brands such as green bond circle, FAAL which reflect our vision and experience in the finishing in constructions market which suits the local market needs. Accordingly, we decided to start with a fresh new look for the company with a young look with younger generation supported by our long experience to follow the new market trends and requirements.
                                        </p>
                                        @endif
                                      
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


</section>

<section class="wpb_row vc_row-fluid vc_custom_1438749369192 vc_row-has-fill">
    <div class="container">
        <div class="row">
            <div class="container-4 wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper wow fadeInUp">
                        @isset($projects)
                        @empty(!$projects)
                        @foreach ( $projects as $index=>$project)
                        <!-- team member -->
                        <div class="de-team-list team-box wow fadeInUp">
                            <div class="team-pic">
                                <img width="400" height="400" src="{{$project->getFirstMediaUrl('projects')}}" sizes="(max-width: 400px) 100vw, 400px" title="{{$project->name}}" />
                            </div>
                            <div class="team-desc">
                                <h3>{{$project->name}}</h3>
                                <p class="lead">{{$project->consultant}}</p>
                                <div class="small-border"></div>
                                <p>{!! $project->description  !!}</p>
                                <div class="social">
                                </div>
                            </div>
                        </div>
                        <!-- team close -->
                        @endforeach
                        @endempty

                        @endisset
                      

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpb_row vc_row-fluid text-light bg-fixed vc_custom_1588354161012 vc_row-has-fill" style="background-image: url({{ asset('front')}}/images/bg-3.jpg) !important;">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper wow fadeInUp">
                        <h1 class="ot_custom_heading  " style="text-align: center;color: #ffffff;">Our Message
                        </h1>
                        <div class=" separator ">
                            <span><i class="fa fa-circle"></i></span>
                        </div>
                        <div class="spacer-single"></div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper ">
                        <div class="testimonial__carousel de_carousel wow fadeInUp" data-wow-delay=".3s" data-visible="2" data-autoplay="false" data-autoheight="false" data-speed="200" data-navspeed="800" data-rewinspeed="1000">
                            <div class="col-md-12 item">
                                <div class="de_testi">
                                    <blockquote>
                                    @if(!empty($aboutus ))
                    @foreach($aboutus  as $row)
                    <p>{!! $row->message1 !!}</p>
                                            @endforeach
                                            @else

                                            <p>The value of a company lies in maintaining a sustainable growth,
                                            increasing customer value in this fast-changing business
                                            environment, and contributing to our society and country. I believe
                                            that the creative challenges DECOLUX KUWAIT makes in order to
                                            provide a safer and more comfortable living environment based on
                                            advanced technologies will…</p>
                                            @endif
                                        <div class="de_testi_by no-margin">


                                            <div>
                                            
                                            </div>

                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-12 item">
                                <div class="de_testi">
                                    <blockquote>
                                    @if(!empty($aboutus ))
                    @foreach($aboutus  as $row)
                    <p>{!! $row->message2 !!}</p>
                                            @endforeach
                                            @else


                                        <p>I&#8217;m proud to be part of a company that puts aside preconceived
                                            notions and truly understands the needs of our clients. It&#8217;s
                                            an empathetic approach which drives us to challenge ourselves and be
                                            that much more creative. Our work is powered by our commitment and
                                            dedication to our clients.</p>

                                            @endif
                                        <div class="de_testi_by no-margin">


                                            <div>
                                             
                                            </div>

                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wpb_row vc_row-fluid call-to-action bg-color text-center vc_custom_1442204580531 no-padding">
    <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">

                <div class="wpb_wrapper ">
                @if(!empty($aboutus ))
                    @foreach($aboutus  as $row)
                    <a href=" {{ asset('uploads/aboutus/'.$row->pdf) }}" target="_blank" class="btn btn-line-black btn-big  ">PDF Download</a>

                                            @endforeach
                                            @else

               
                    <a href="https://decolux-kw.com/wp-content/uploads/2020/06/company-profile-..pdf" target="_blank" class="btn btn-line-black btn-big  ">PDF Download</a>
@endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection