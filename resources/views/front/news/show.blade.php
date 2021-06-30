@extends('layouts.front.app')



@section('content')


    <!-- subheader begin -->
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom"
        style="background-image: url('images/subheader-2.jpg');">
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
                        <li><a href="blog.html">News</a></li>
                        <li class="active">We have been awarded the contract for Motorized Roller shades works</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENT BLOG -->
    <div id="content">
        <div class="container">
            <div class="row">


                <div class="col-md-8">

                    <ul class="blog-list">
                        <li class="single">
                            <div class="post-content">
                                <div class="post-image">

                                    <img width="1200" height="806" src="{{ asset('uploads/\news_images/' . $new->image) }}"
                                        class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                                        srcset="{{ asset('uploads/\news_images/' . $new->image) }}"
                                        sizes="(max-width: 1200px) 100vw, 1200px" title="kuwait credit bank" />
                                </div>

                                <div class="date-box">
                                    <div class="day">{{ $new->created_at->format('d') }}</div>
                                    <div class="month">{{ $new->created_at->format('M') }}</div>
                                </div>

                                <div class="post-text page-content entry-content">
                                    <h3 class="single-title">{!! $new->description !!}</h3>
                                    <p><span style="font-weight: 400;">{!! $new->description !!}</span></p>
                                </div>
                            </div>

                            <div class="post-info">
                                <span class="post-user"><i class="fa fa-user"></i><a href="#" title="Posts by admin"
                                        rel="author">{{ $new->users->name }}</a></span>
                                <span class="post-category"><i class="fa fa-folder"></i><a href="/blog"
                                        rel="category tag">News</a></span>
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
                                <div class="nav-previous">
                                    <a href="#" rel="prev">
                                        <span class="post-title"><em>Older Post</em>
                                            <strong>{!! $oldernew->description !!}</strong></span></a>
                                </div>
                            </div>
                        </nav>
                    </div>


                    <div class='comments-box'>
                        <h4>{{ count($new->newsComments) }} comments</h4>
                    </div>
                    <ul class="single-comment ">
                        @foreach ($new->newsComments as $comment )


                        <li id="comment-116" class="post-content-comment grey-section">
                            <div class="img"><img alt='' src='{{ asset("front")}}/images/user.jpg' srcset='{{ asset("front")}}/images/user.jpg'
                                    class='avatar avatar-70 photo' height='70' width='70' loading='lazy' />
                            </div>
                            <div class="comment-content">
                                <h6>{{$comment->name}}</h6>
                            </div>
                            <div class="date">
                                <span class="c_date">{{$comment->created_at}}</span>
                              {{--  <span class="c_reply">
                                    <a rel='nofollow' class='comment-reply-link' href='#'>Reply</a></span>--}}
                            </div>
                            <div class="comment-content">
                                <p><em>{{$comment->comment}}.</em></p>
                            </div>
                            <div class="clearfix"></div>
                        </li>

                        @endforeach


                    </ul>

                    <div class="leave-reply grey-section form">
                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">
                                <h4>Leave a reply</h4> <small><a rel="nofollow" id="cancel-comment-reply-link"
                                        href="/we-have-been-awarded-the-contract-for-motorized-roller-shades-works/#respond"
                                        style="display:none;">Cancel reply</a></small>
                            </h3>

                            <div class="wpforms-container wpforms-container-full" id="wpforms-1759">
                                <form class="wpforms-validate wpforms-form wpforms-ajax-form" method="post"
                                    action="{{ route('front.savecomments', $new->id) }}">
                                    @csrf
                                    @method('POST')
                                    <div class="wpforms-field-container">
                                        <div class="wpforms-field wpforms-field-name" data-field-id="0">
                                            <label class="wpforms-field-label" for="wpforms-1759-field_0">Name <span
                                                    class="wpforms-required-label">*</span>
                                            </label>
                                            <div class="wpforms-field-row wpforms-field-large">
                                                <div class="wpforms-field-row-block wpforms-first wpforms-one-half">
                                                    <input type="text"
                                                        class="wpforms-field-name-first wpforms-field-required" name="first"
                                                        required>
                                                    <label for="wpforms-1759-field_0"
                                                        class="wpforms-field-sublabel after ">First</label>
                                                </div>

                                                <div class="wpforms-field-row-block wpforms-one-half">
                                                    <input type="text"
                                                        class="wpforms-field-name-last wpforms-field-required" name="last"
                                                        required>
                                                    <label for="wpforms-1759-field_0-last"
                                                        class="wpforms-field-sublabel after ">Last</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wpforms-field wpforms-field-email" data-field-id="1">
                                            <label class="wpforms-field-label" for="wpforms-1759-field_1">Email <span
                                                    class="wpforms-required-label">*</span>
                                            </label>
                                            <input type="email" class="wpforms-field-large wpforms-field-required"
                                                name="email" required>
                                        </div>

                                        <div class="wpforms-field wpforms-field-text" data-field-id="5">
                                            <label class="wpforms-field-label" for="wpforms-1759-field_5">Phone <span
                                                    class="wpforms-required-label">*</span>
                                            </label>
                                            <input type="text" class="wpforms-field-large wpforms-field-required"
                                                name="phone" required>
                                        </div>

                                        <div class="wpforms-field wpforms-field-file-upload" data-field-id="4">
                                            <textarea name="comment" aria-required="true" placeholder="Comment "
                                                style="height: 100px;"></textarea>
                                        </div>


                                    </div>



                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                            value="Send Message">



                                    </p>

                                </form>
                            </div>



                        </div><!-- #respond -->
                    </div>



                </div>

                <div class="col-md-4">
                    <div id="sidebar" class="sidebar">
                        <div id="search-2" class="widget widget_search">
                            <form role="search" method="get" action="#">
                                <input type="search" id="search" class="search-field form-control" value="" name="s"
                                    placeholder="type to search&hellip;" />
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
    <!-- END CONTENT BLOG -->

@endsection
