<footer>

    <div class="main-footer">
        <div class="container">
            <div class="row">


                <div class="col-md-6 col-sm-6">
                    <div id="text-2" class="widget widget_text">
                        <div class="textwidget">
                            <p>
                                <img loading="lazy" class="alignnone wp-image-1857 size-full" src="{{ asset('front')}}/images/footeer.png" alt="" width="251" height="50" />
                            </p>
                            <p>@if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->discpriton)){!!\App\Settings::orderBy('id', 'DESC')->first()->discpriton!!}
                            @endif
                            </p>


                        </div>
                    </div>
                </div><!-- end col-lg-3 -->


                <div class="col-md-6 col-sm-6">
                    <div id="custom_html-2" class="widget_text widget widget_custom_html">
                        <h3>Contact Us</h3>
                        <div class="textwidget custom-html-widget">
                            <address>
                                <span>
                                {{--@if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->address)){{\App\Settings::orderBy('id', 'DESC')->first()->address}}
                                    @endif--}}
                                </span>
                                <span><strong>Phone:</strong>{{--@if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->phone))
                                    {{\App\Settings::orderBy('id', 'DESC')->first()->phone}}@endif--}}
                                    +962 79 200 400 2 , +962 79 200 600 2
                                </span>
                                <span>
                                    <strong>Email:</strong>
                                    @if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->email))
                                    <a href="{{\App\Settings::orderBy('id', 'DESC')->first()->email}}">

                                        {{\App\Settings::orderBy('id', 'DESC')->first()->email}}

                                    </a>
                                    @endif
                                </span>
                                <span>
                                    <strong>Location:</strong>
                                    @if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->address))
                                   <a target="_blank" href="{{\App\Settings::orderBy('id', 'DESC')->first()->address}}" rel="noopener">

                         Ibn Al Romeieh Amman, Amman Governorate Juwaida Qweismeh Jordan </a>
                                       
                                        @endif
                                </span>

                            </address>
                        </div>
                    </div>

                </div><!-- end col-lg-3 -->

            </div>
        </div>
    </div>

    <div class="subfooter ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    © Copyright 2021 - <b>company name</b> Developed by..<a href="#" target="_blank" rel="noopener">my team</a>
                </div>

                <div class="col-md-6 text-right">
                    <div class="social-icons">
                        <ul>

                            <li><a target="_blank" href="#">
                                    <i class="fa fa-facebook"></i></a>
                            </li>

                            <li>
                                <a target="_blank" href="
                                @if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->twiter))
                                {{\App\Settings::orderBy('id', 'DESC')->first()->twiter}}
                                @endif
                                "><i class="fa fa-twitter"></i></a>
                            </li>
                            <!--<li>
                                <a target="_blank" href="
                                @if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->binterest))
                                {{\App\Settings::orderBy('id', 'DESC')->first()->binterest}}
                                @endif
                                "><i class="fa fa-pinterest"></i></a>
                            </li>-->
                            <li>
                                <a target="_blank" href="
                                @if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->linkedin))
                                {{\App\Settings::orderBy('id', 'DESC')->first()->linkedin}}
                                @endif
                                "><i class="fa fa-linkedin"></i></a>
                            </li>

                            <li>
                                <a target="_blank" href="
                                @if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->instgram))
                                {{\App\Settings::orderBy('id', 'DESC')->first()->instgram}}
                                @endif
                                "><i class="fa fa-instagram"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <a id="back-to-top" href="#" class="show"></a>
</footer>
