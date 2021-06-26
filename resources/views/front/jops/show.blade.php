@extends('layouts.front.app')



@section('content')


<!-- subheader begin -->
<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" style="background-image: url('images/subheader-2.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>
                        The Blog Single
                    </h1>
                </div>
                <ul id="breadcrumbs" class="crumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="full-time.html">Full Time</a></li>
                    <li class="active">Drivers</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->



<!-- CONTENT BLOG -->
<div id="content">
    <div class="container">
        <div class="row">


            <div class="col-md-8">

                <ul class="blog-list">
                    <li class="single">
                        <div class="post-content">
                            <div class="post-image">
                            </div>

                            <div class="date-box">
                                <div class="day"> {{Carbon\Carbon::parse($jop->created_at)->format('d')}}</div>
                                <div class="month">{{Carbon\Carbon::parse($jop->created_at)->format('M')}}</div>
                            </div>

                            <div class="post-text page-content entry-content">
                                <h3 class="single-title">{{$jop->title}}</h3>
                                <div class="thjmf-job-list-single-tags">
                                    <div class="thjmf-inline-tags">
                                        <span class="dashicons dashicons-clock thjmf-dashicons"></span>
                                        {{Carbon\Carbon::parse($jop->created_at)->diffInMonths(Carbon\Carbon::parse(now()), false)}} months ago

                                    </div>
                                    <div class="thjmf-inline-tags">
                                        <span class="dashicons dashicons-location thjmf-dashicons"></span>{{$jop->country->title ?? ''}}
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

                                <div>
                                    {!!$jop->description!!}
                                </div>
                                <div class="wpforms-container wpforms-container-full">
                                    <form class="wpforms-validate wpforms-form " method="post" action="{{route('front.apply')}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <input type="hidden" name="jop_id" value="{{$jop->id}}" />
                                        <noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</noscript>

                                        <div class="wpforms-field-container">
                                            <div id="wpforms-1759-field_0-container" class="wpforms-field wpforms-field-name" data-field-id="0">
                                                <label class="wpforms-field-label" for="wpforms-1759-field_0">Name <span class="wpforms-required-label">*</span></label>
                                                <div class="wpforms-field-row wpforms-field-large">
                                                    <div class="wpforms-field-row-block wpforms-first wpforms-one-half">
                                                        <input type="text" class="wpforms-field-name-first wpforms-field-required" name="firstname" value="{{old('firstname')}}"  required>
                                                        <label for="wpforms-1759-field_0" class="wpforms-field-sublabel after ">First</label>
                                                        @error('firstname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="wpforms-field-row-block wpforms-one-half">
                                                        <input type="text" class="wpforms-field-name-last wpforms-field-required" name="lastname" value="{{old('lastname')}}" required>
                                                        <label for="wpforms-1759-field_0-last" class="wpforms-field-sublabel after ">Last</label>
                                                        @error('lastname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="wpforms-1759-field_1-container" class="wpforms-field wpforms-field-email" data-field-id="1">
                                                <label class="wpforms-field-label" for="wpforms-1759-field_1">Email <span class="wpforms-required-label">*</span></label>
                                                <input type="email" class="wpforms-field-large wpforms-field-required" name="email" value="{{old('email')}}" required>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div id="wpforms-1759-field_5-container" class="wpforms-field wpforms-field-text" data-field-id="5">
                                                <label class="wpforms-field-label" for="wpforms-1759-field_5">Phone <span class="wpforms-required-label">*</span></label>
                                                <input type="text" class="wpforms-field-large wpforms-field-required" name="phone" value="{{old('phone')}}" required>
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="wpforms-field wpforms-field-file-upload" data-field-id="4">
                                                <label class="wpforms-field-label" for="wpforms-1759-field_4">Resume <span class="wpforms-required-label">*</span></label>
                                                <input type="file" name="resume" class="custom-file-input" id="resume">

                                                @error('resume')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="wpforms-field wpforms-field-hp">
                                            <label for="wpforms-1759-field-hp" class="wpforms-field-label">Name</label>
                                            <input type="text" name="" class="wpforms-field-medium">
                                        </div>
                                        <div class="wpforms-submit-container">

                                            <button type="submit" class="wpforms-submit ">Apply</button>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="post-info">


                            <span class="post-user">
                                <i class="fa fa-user"></i>
                                <a href="#" title="Posts by admin" rel="author">{{$jop->user->name??''}}</a></span>
                            <div class="share-holder">
                                <h4>Share:</h4>
                                <div class="social-links rounded-share-icons">
                                    <a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                </ul>

                <div class="post-controls clearfix">

                    <nav class="navigation post-navigation" role="navigation" aria-label="Posts">
                        <h2 class="screen-reader-text">Post navigation</h2>
                        <div class="nav-links">
                            @isset($previous_jop)
                            <div class="nav-previous">
                                <a href="{{route('front.job-openings.show',$previous_jop->id)}}" rel="prev">
                                    <span class="post-title"><em>Older Post</em><strong>{{$previous_jop->title}}</strong>
                                    </span>
                                </a>
                            </div>

                            @endisset
                            @isset($next_jop)
                            <div class="nav-next">
                                <a href="{{route('front.job-openings.show',$next_jop->id)}}" rel="next">
                                    <span class="post-title"><em>Newer Post</em><strong> {{$next_jop->title}} </strong></span></a>
                            </div>
                            @endisset
                        </div>
                    </nav>
                </div>




            </div>

            <div class="col-md-4">
                <div id="sidebar" class="sidebar">
                    <div id="search-2" class="widget widget_search">
                        <form role="search" method="get" action="#">
                            <input type="search" id="search" class="search-field form-control" value="" name="s" placeholder="type to search&hellip;" />
                            <button id="btn-search" type="submit">
                            </button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection