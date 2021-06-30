@extends('layouts.front.app')



@section('content')


<!-- subheader begin -->
<section id="subheader" data-speed="8" data-type="background" style="background-image: url('{{ asset('front')}}/images/subheader-2.jpg');">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>Jobs</h1>
                </div>
                <ul id="breadcrumbs" class="crumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Jobs</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->



<section class="wpb_row vc_row-fluid vc_custom_1586146717821">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper ">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <h2><strong>Current </strong><b>Openings</b></h2>
                                <div id="thjmf-job-listings-box">
                                    <div id="thjmf_ajax_load_modal"></div>


                                    <div class="thjmf-job-listings">
                                        @isset($jops)

                                        @foreach ($jops as $jop)
                                        <div class="thjmf-job-listings-list thjmf-listing-loop-content list-wrapper">
                                            <table class="thjmf-listing-solo-table" border="0" cellspacing="0" cellpadding="0">
                                                <thead>
                                                    <tr class="thjmf-listing-header">
                                                        <td colspan="2">
                                                            <div class="thjmf-listing-title" style="overflow: hidden;">
                                                                <h3>{{$jop->title}}</h3>
                                                                @if ($jop->featured == 1)
                                                                <div class="thjmf-featured-post">
                                                                    <img class="thjm-featured-icon" src="https://decolux-kw.com/wp-content/plugins/job-manager-career/assets/images/bookmark.svg" title="Featured Job">
                                                                </div>
                                                                @endif

                                                            </div>
                                                            <div class="thjmf-job-list-single-tags">
                                                                <div class="thjmf-inline-tags">
                                                                    <span class="dashicons dashicons-clock thjmf-dashicons"></span>

                                                                    {{Carbon\Carbon::parse($jop->created_at)->diffForHumans()}} months ago
                                                                </div>
                                                                <div class="thjmf-inline-tags">
                                                                    <span class="dashicons dashicons-location thjmf-dashicons"></span>{{$jop->country->title}}
                                                                </div>
                                                                <div class="thjmf-inline-tags">
                                                                    <span class="dashicons dashicons-portfolio thjmf-dashicons"></span>
                                                                    @isset($jop->types)
                                                                    @foreach ($jop->types as $type )
                                                                    {{$type->title }} @if ($jop->types->last()->id != $type->id) / @endif
                                                                    @endforeach
                                                                    @endisset
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="thjmf-listing-body">
                                                        <td class="thjmf-job-single-excerpt">
                                                            <div class="thjmf-listing-single-content">
                                                                <p>{!! $jop->description !!}
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td class="thjmf-job-single-more">
                                                            <button type="button"><a href="{{route('front.job-openings.show',$jop->id)}}">
                                                                    Details</a>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        @endforeach
                                        @endisset

                                    </div>
                                    <div class="thjmf-load-more-section">
                                    </div>

                                </div>


                            </div>
                        </div>

                        <div class="wpb_text_column wpb_content_element  vc_custom_1586750327909">
                            <div class="wpb_wrapper">
                                <h2 class="fancy-title entry-title">
                                    <strong>BUILD SOMETHING BIG WITH US.</strong>
                                </h2>
                                <p>Our expectation form you are to think unthinkable and attempt the impossible
                                    everyday. We believe failure is an option. Having the allowance to fail,
                                    which could lead to something incredible. We know you are going somewhere no
                                    one else has been to discover and create. We are looking for people that
                                    have the right attitude, feel free to apply.</p>


                                <div class="wpforms-container wpforms-container-full" id="wpforms-1759">
                                    <form class="wpforms-validate wpforms-form wpforms-ajax-form" method="post" action="#">

                                        <div class="wpforms-field-container">
                                            <div class="wpforms-field wpforms-field-name" data-field-id="0">
                                                <label class="wpforms-field-label" for="wpforms-1759-field_0">Name <span class="wpforms-required-label">*</span>
                                                </label>
                                                <div class="wpforms-field-row wpforms-field-large">
                                                    <div class="wpforms-field-row-block wpforms-first wpforms-one-half">
                                                        <input type="text" class="wpforms-field-name-first wpforms-field-required" name="" required>
                                                        <label for="wpforms-1759-field_0" class="wpforms-field-sublabel after ">First</label>
                                                    </div>

                                                    <div class="wpforms-field-row-block wpforms-one-half">
                                                        <input type="text" class="wpforms-field-name-last wpforms-field-required" name="" required>
                                                        <label for="wpforms-1759-field_0-last" class="wpforms-field-sublabel after ">Last</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wpforms-field wpforms-field-email" data-field-id="1">
                                                <label class="wpforms-field-label" for="wpforms-1759-field_1">Email <span class="wpforms-required-label">*</span>
                                                </label>
                                                <input type="email" class="wpforms-field-large wpforms-field-required" name="" required>
                                            </div>

                                            <div class="wpforms-field wpforms-field-text" data-field-id="5">
                                                <label class="wpforms-field-label" for="wpforms-1759-field_5">Phone <span class="wpforms-required-label">*</span>
                                                </label>
                                                <input type="text" class="wpforms-field-large wpforms-field-required" name="" required>
                                            </div>

                                            <div class="wpforms-field wpforms-field-file-upload" data-field-id="4">
                                                <label class="wpforms-field-label" for="wpforms-1759-field_4">Resume <span class="wpforms-required-label">*</span></label>
                                            </div>

                                        </div>



                                        <div class="wpforms-submit-container">

                                            <button type="submit" name="" class="wpforms-submit ">Apply</button>

                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection