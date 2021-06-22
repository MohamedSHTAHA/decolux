@extends('layouts.front.app')



@section('content')


    <!-- subheader begin -->
    <section id="subheader" data-speed="8" data-type="background"
        style="background-image: url('{{ asset('front') }}/images/subheader-2.jpg');">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap">
                        <h1>News</h1>
                    </div>
                    <ul id="breadcrumbs" class="crumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">News</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <div id="content">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <ul class="blog-list">


                        @foreach($news as $new)
                        <li id="post-1920"
                            class="wow fadeInUp post-1920 post type-post status-publish format-standard has-post-thumbnail hentry category-news">
                            <div class="post-content">
                                <div class="post-image">
                                    <a href="{{ route('front.blogdetails', $new->id) }}"
                                        title="{{$new->title}}">
                                        <img width="1400" height="787" src="{{ asset('uploads/\news_images/'.$new->image) }}"
                                            class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                                            srcset="{{ asset('uploads/\news_images/'.$new->image) }}" sizes="(max-width: 1400px) 100vw, 1400px"
                                            title="Qatar petroleum" /> </a>
                                </div>
                                <div class="date-box">
                                    <div class="day">{{$new->created_at->format('d')}}</div>
                                    <div class="month">{{$new->created_at->format('M')}}</div>
                                </div>
                                <div class="post-text">
                                    <h3><a href="{{ route('front.blogdetails', $new->id) }}">{!!$new->description!!}</a></h3>
                                    <p{!!$new->description!!}</p>
                                </div>
                                <a href="{{ route('front.blogdetails', $new->id) }}" class="btn-more">
                                    Read More </a>
                            </div>
                        </li>
                        @endforeach



                    </ul>

                    <div class="pagination text-center ">
                        <ul class="pagination">
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div id="sidebar" class="sidebar">
                        <div id="search-2" class="widget widget_search">
                            <form role="search" method="get" action="#">
                                <input type="search" id="search" class="search-field form-control" value="" name="s"
                                    placeholder="type to search&hellip;" />
                                <button id="btn-search" type="submit"></button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>




@endsection
