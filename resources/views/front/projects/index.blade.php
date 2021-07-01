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

                                    <a onclick="openProject('{{$index-1}}','{{$index}}','{{$index+1}}');" class=" " href="#" >
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
                                    <span class="close mfp-close">&times;</span>
                                    <section class="wpb_row vc_row-fluid" style="background: #fff0;">
                                        <div class="container">
                                            <div class="row">

                                                <div class="wpb_column vc_column_container vc_col-sm-8">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper ">
                                                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                        <img width="700" height="466" src="images/17.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="images/17.jpg" sizes="(max-width: 700px) 100vw, 700px" title="">
                                                                    </div>
                                                                </figure>
                                                            </div>

                                                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                        <img width="700" height="466" src="images/15.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="images/15.jpg" sizes="(max-width: 700px) 100vw, 700px" title="">
                                                                    </div>
                                                                </figure>
                                                            </div>

                                                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                        <img width="700" height="466" src="images/16.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="images/16.jpg" sizes="(max-width: 700px) 100vw, 700px" title="">
                                                                    </div>
                                                                </figure>
                                                            </div>

                                                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                        <img width="700" height="466" src="images/14.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="images/14.jpg" sizes="(max-width: 700px) 100vw, 700px" title="">
                                                                    </div>
                                                                </figure>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper ">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="project-info">
                                                                        <h2>Symphony Style Hotel (Hotel Missoni) #{{$project->id}}</h2>
                                                                        <div class="details">
                                                                            <div class="info-text"><span class="title">Client: Al Tijaria
                                                                                    Real Estate</span></div>
                                                                            <div class="info-text"><span class="title">Consultant: Salah Al
                                                                                    Qualaf/ Gravin Images-UK</span></div>
                                                                            <div class="info-text"><span class="title">Contractor: Adel Al
                                                                                    Duaij General Trading &amp; Contracting Co.</span></div>
                                                                            <div class="info-text"><span class="title">Value: KWD
                                                                                    5,743,500.000</span><span class="val"><br>
                                                                                </span></div>
                                                                            <div class="info-text"><span class="title">Project Period: From
                                                                                    Aug 2008 to April 2011</span></div>
                                                                            <div></div>
                                                                        </div>
                                                                        <p>The project is located is Al Salmiya Area. It dominates directly
                                                                            Salem AlMubarak Street from one side and the Arab Gulf Street
                                                                            from the other<br>
                                                                            side. The land area is 11,200m2. the design consists of a
                                                                            commercial<br>
                                                                            complex composed of a basement, ground floor, mezzanine and a
                                                                            first<br>
                                                                            floor, surmounted by two towers. The first is designed to be
                                                                            used as<br>
                                                                            offices with 11 floors, dominating directly Salem Al-Mubarak
                                                                            Street, and<br>
                                                                            the other designed to be used as a 20-storey, five-star hotel
                                                                            with 20<br>
                                                                            floors dominating the Arab Gulf Street.</p>
                                                                        <h3>Scope Of Work:</h3>
                                                                        <p>Turnkey 200 luxury room hotel designed by Rosita Missoni with top
                                                                            quality<br>
                                                                            finishes and furniture manufactured with more than 100 items
                                                                            custom made by our professional team</p>
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

<script type="text/javascript">
    function openProject(priev, current, next) {
       // alert(priev + current + next);
        //$('#modal-project'+current).modal();
        document.getElementById('#modal-project'+current).style.display = "block";
        //$('#myModal').modal('hide');
    }
</script>






@endsection