<footer>

    <div class="main-footer">
        <div class="container">
            <div class="row">


                <div class="col-md-6 col-sm-6">
                    <div id="text-2" class="widget widget_text">
                        <div class="textwidget">
                            <p>
                                <img loading="lazy" class="alignnone wp-image-1857 size-full" src="{{ asset('front')}}/images/Untitled-1.png" alt="" width="251" height="50" />
                            </p>
                            <p>{!!\App\Settings::orderBy('id', 'DESC')->first()->discpriton!!}.</p>


                        </div>
                    </div>
                </div><!-- end col-lg-3 -->


                <div class="col-md-6 col-sm-6">
                    <div id="custom_html-2" class="widget_text widget widget_custom_html">
                        <h3>Contact Us</h3>
                        <div class="textwidget custom-html-widget">
                            <address>
                                <span>{{\App\Settings::orderBy('id', 'DESC')->first()->address}}</span>
                                <span><strong>Phone:</strong>{{\App\Settings::orderBy('id', 'DESC')->first()->phone}}</span>
                                <span>
                                    <strong>Email:</strong>
                                    <a href="{{\App\Settings::orderBy('id', 'DESC')->first()->email}}">{{\App\Settings::orderBy('id', 'DESC')->first()->address}}email</a>
                                </span>
                                <span>
                                    <strong>Web:</strong>
                                    <a target="_blank" href="#" rel="noopener">{{\App\Settings::orderBy('id', 'DESC')->first()->website}}</a>
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
                                <a target="_blank" href="{{\App\Settings::orderBy('id', 'DESC')->first()->twiter}}"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="{{\App\Settings::orderBy('id', 'DESC')->first()->binterest}}"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="{{\App\Settings::orderBy('id', 'DESC')->first()->linkedin}}"><i class="fa fa-linkedin"></i></a>
                            </li>

                            <li>
                                <a target="_blank" href="{{\App\Settings::orderBy('id', 'DESC')->first()->instgram}}"><i class="fa fa-instagram"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <a id="back-to-top" href="#" class="show"></a>
</footer>
