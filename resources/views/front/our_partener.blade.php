@extends('layouts.front.app')



@section('content')


<!-- subheader begin -->

  @if(!empty($Settings ))
                    @foreach($Settings  as $row)
                    @if(!empty($row->Ourvendorsbrandsimage ))
                    
                    <section id="subheader" data-speed="8" data-type="background" style="background-image: url('{{ asset('uploads/logo/'.$row->Ourvendorsbrandslogo) }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>Our vendors and brands</h1>
                                        </div>               
                <ul id="breadcrumbs" class="crumb"><li><a href="/home">Home</a></li>
                    <li><a href="introduction.html">Introduction</a></li>
                    <li class="active">Our vendors and brands</li></ul> 
            </div>
        </div>
    </div>
</section>


                    @else
                    
<section id="subheader" data-speed="8" data-type="background" style="background-image: url('{{ asset('front') }}/images/WHAT-WE-OFFER.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>Our vendors and brands</h1>
                                        </div>               
                <ul id="breadcrumbs" class="crumb"><li><a href="/home">Home</a></li>
                    <li><a href="introduction.html">Introduction</a></li>
                    <li class="active">Our vendors and brands</li></ul> 
            </div>
        </div>
    </div>
</section>
 @endif
      @endforeach
@else

<section id="subheader" data-speed="8" data-type="background" style="background-image: url('{{ asset('front') }}/images/WHAT-WE-OFFER.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>Our vendors and brands</h1>
                                        </div>               
                <ul id="breadcrumbs" class="crumb"><li><a href="/home">Home</a></li>
                    <li><a href="introduction.html">Introduction</a></li>
                    <li class="active">Our vendors and brands</li></ul> 
            </div>
        </div>
    </div>
</section>

 @endif
      

<!-- subheader close -->



                <section class="wpb_row vc_row-fluid side-bg no-padding vc_custom_1474447018555 vc_row-has-fill no-padding">
                    <div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner">
                    <div class="wpb_wrapper "  >	
 <div class="side-bg">


    
         @if(!empty($Settings ))
                    @foreach($Settings  as $row)
                    @if(!empty($row->Ourvendorsbrandsimage ))
                    
                        <div class="image-container hidden-xs pull-left col-md-5" style="background-image:url({{ asset('uploads/logo/'.$row->Ourvendorsbrandsimage) }}); ?>" data-delay="0"></div>
                        
                         <img class="visible-xs img-responsive" src="{{ asset('uploads/logo/'.$row->Ourvendorsbrandsimage) }}" />
                     @else
                         <div class="image-container hidden-xs pull-left col-md-5" style="background-image:url({{ asset('front') }}/images/Partner-and-sister-companies.jpg); ?>" data-delay="0"></div>
                         
     <img class="visible-xs img-responsive" src="{{ asset('front') }}/images/Partner-and-sister-companies.jpg" />
     @endif
      @endforeach

                        @else
                            <div class="image-container hidden-xs pull-left col-md-5" style="background-image:url({{ asset('front') }}/images/Partner-and-sister-companies.jpg); ?>" data-delay="0"></div>
                             <img class="visible-xs img-responsive" src="{{ asset('front') }}/images/Partner-and-sister-companies.jpg" />
@endif
    <div class="container">
        <div class="row">
            <div class="inner-padding">
                <div class="col-md-6 col-md-offset-6 wow fadeInRight" data-wow-delay=".2s">
                    <h2>Our vendors and brands</h2><br/>
                    @if(!empty($Settings ))
                    @foreach($Settings  as $row)
                    @if(!empty($row->Ourvendorsbrands ))
                    <b>{!! $row->Ourvendorsbrands !!}<b>
                    @else

                   <p> As we are part of Bahatco group we are supported by a chain of sister companies (Bahman General Trading and Contracting Co. LTD, AL Omraniya Co. LTD, Arab Building Material Company LTD, Hadidco Co. LTD, Creative Design Center) providing us with big support in terms of sales and procurement of raw material with competitive price which give our company the ability to build a competitive offers that will be executed in the shortest time frame and excellent service.</p>
<p>Our wide choose of international suppliers that we have been dealing with them for over 25 years  provide us the possibility to offer you a wide choice of products in the best value.                    </div>
@endif
                        @endforeach

                        @else
                        <p> As we are part of Bahatco group we are supported by a chain of sister companies (Bahman General Trading and Contracting Co. LTD, AL Omraniya Co. LTD, Arab Building Material Company LTD, Hadidco Co. LTD, Creative Design Center) providing us with big support in terms of sales and procurement of raw material with competitive price which give our company the ability to build a competitive offers that will be executed in the shortest time frame and excellent service.</p>
<p>Our wide choose of international suppliers that we have been dealing with them for over 25 years  provide us the possibility to offer you a wide choice of products in the best value.                    </div>
@endif
<div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

</div>
                    </div>
                    </div>
                    </div>
</section>
<section class="wpb_row vc_row-fluid call-to-action bg-color text-center vc_custom_1442204580531 no-padding"><div class="row">
<div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
        <div class="wpb_wrapper "  >			
        <a href="/inquiry" target="_self" class="btn btn-line-black btn-big  ">Talk With Us</a>
    
</div></div>
</div>
</div>
</section>

@endsection