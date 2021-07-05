@extends('layouts.front.app')



@section('content')

<!-- subheader begin -->
<section id="subheader" data-speed="8" data-type="background" style="background-image: url('{{ asset('front')}}/images/WHAT-WE-OFFER.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>Project Gallery</h1>
                </div>
                <ul id="breadcrumbs" class="crumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Project Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->



<section class="wpb_row vc_row-fluid vc_custom_1495594625318 no-padding">
    <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper ">

                    <div class="projects-grid-wrapper">

                        <div class="projects-grid projects-load-ajax overlay_s1  pf_4_cols" style="margin:0px 0px">
                            <div class="project-item-sizer"></div>


                            @isset($projects)
                            @empty(!$projects)
                            @foreach ( $projects as $index=>$project)
                            <div class="project-item " style="padding:0px">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <img width="700" height="466" src="{{$project->getFirstMediaUrl('projects')}}" class="attachment-thumb-portfolio size-thumb-portfolio wp-post-image" alt="" loading="lazy" srcset="{{$project->getFirstMediaUrl('projects')}}" sizes="(max-width: 700px) 100vw, 700px" title="{{$project->name}}" />
                                    </div>

                                    <a class=" " href="#" data-toggle="modal" data-target="#modal-project{{$project->id}}">
                                        <span class="project-overlay">
                                            <span class="project-name id-color">{{$project->name}}</span>
                                        </span>
                                    </a>
                                </div>

                            </div>

                            <!-- The Modal -->
                            <div id="modal-project{{$project->id}}" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <button type="button" class="close mfp-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    @isset ($projects[$index-1])
                                    <a href="#" data-toggle="modal" data-target="#modal-project{{$projects[$index-1]->id??''}}" data-dismiss="modal" title="Previous (Left arrow key)" class="mfp-arrow mfp-arrow-left mfp-prevent-close"></a>

                                    @endisset
                                    @isset ($projects[$index+1])
                                    <a href="#" data-toggle="modal" data-target="#modal-project{{$projects[$index+1]->id??''}}" data-dismiss="modal" title="Next (Right arrow key)" class="mfp-arrow mfp-arrow-right mfp-prevent-close"></a>

                                    @endisset
                                    <section class="wpb_row vc_row-fluid" style="background: #fff0;">
                                        <div class="container">
                                            <div class="row">

                                                <div class="wpb_column vc_column_container vc_col-sm-8">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper ">
                                                            @if(!empty($project->getMedia('projects')))
                                                            @foreach ($project->getMedia('projects') as $media )
                                                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                        <img width="700" height="466" src="{{$media->getFullUrl()}}" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="{{$media->getFullUrl()}}" sizes="(max-width: 700px) 100vw, 700px" title="">
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                            @endforeach
                                                            @endif




                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper ">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="project-info">
                                                                        <h2>{{$project->name}} #{{$project->id}}</h2>
                                                                        <div class="details">
                                                                            <div class="info-text"><span class="title">Client: {!! $project->client !!}</span></div>
                                                                            <div class="info-text"><span class="title">Consultant: {!! $project->consultant !!}</span></div>
                                                                            <div class="info-text"><span class="title">Contractor: {!! $project->contractor !!}</span></div>
                                                                            <div class="info-text"><span class="title">Value: KWD {!! $project->value !!}</span><span class="val"><br>
                                                                                </span></div>
                                                                            <div class="info-text"><span class="title">Project Period: From
                                                                                    {{Carbon\Carbon::parse($project->from)->formatLocalized('%b %Y')}} to {{Carbon\Carbon::parse($project->to)->formatLocalized('%b %Y')}}</span></div>
                                                                            <div></div>
                                                                        </div>
                                                                        {!! $project->description !!}
                                                                        <h3>Scope Of Work:</h3>
                                                                        {!! $project->scope_work !!}
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div>

                            </div>
                            @endforeach
                            @endempty

                            @endisset
                        </div>
                        <div class="pagination w100 text-center">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>





<!------------------------------------------------start modal------------------------------>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!------------------------------------------------end modal------------------------------>


@endsection