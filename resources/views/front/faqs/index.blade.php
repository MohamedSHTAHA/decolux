@extends('layouts.front.app')



@section('content')



<!-- subheader begin -->
<section id="subheader" data-speed="8" data-type="background"

     style="background-image: url('images/bg-9.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>FAQs</h1>
                                        </div>
                <ul id="breadcrumbs" class="crumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">FAQs</li></ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->



                <section class="wpb_row vc_row-fluid vc_custom_1496118963846"><div class="container">

                    <div class="row">
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner">
                            <div class="wpb_wrapper "  >
                                <h3 style="text-align: left" class="vc_custom_heading s2 padding40 vc_custom_1571631402347" >
                                    <b>Sales</b> QUESTIONS</h3>
                            </div>
                            </div>
                        </div>
                        <div class="expand-group wpb_column vc_column_container vc_col-sm-8">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper "  >

@foreach($faqss as $row)
   <div class="expand">
    <h4>{{$row->question}}?</h4>
    <div class="hidden-content">
        <p>{{$row->answer}}.</p>
    </div>
</div>
@endforeach

</div>
                            </div>
                        </div>
                    </div>
                    </div>
</section>

<section class="wpb_row vc_row-fluid bg-color padding20 text-dark">
    <div class="container">
        <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-8">
    <div class="vc_column-inner"><div class="wpb_wrapper "  >
 <h2 class="ot_custom_heading  " style="" >Do you have more questions?</h2>
</div>
    </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-4">
    <div class="vc_column-inner">
        <div class="wpb_wrapper "  >
         <a href="/inquiry" target="_self" class="btn btn-line-black btn-big  mt20">Ask Us</a>

</div>
    </div>
    </div>
    </div>
    </div>
</section>




@endsection
