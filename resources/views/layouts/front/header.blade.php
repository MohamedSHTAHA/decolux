<header class="site-header de_header_2 ">

    <!-- top header begin -->
    <div class="info">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="info-list">
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-3">

                    <ul class="social-list">

                        
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
                    <li>
                        <a target="_blank" href="
                        @if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->binterest))
                        {{\App\Settings::orderBy('id', 'DESC')->first()->binterest}}
                        @endif
                        "><i class="fa fa-pinterest"></i></a>
                    </li>
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


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="logo">
                    <a href="/">
                        <img class="logo-static" src="{{ asset('front')}}/images/Untitled-1.png" alt="DECOLUX KUWAIT">
                        <img class="logo-scroll" src="{{ asset('front')}}/images/Untitled-1.png" alt="DECOLUX KUWAIT">
                    </a>
                </div>
                <span id="menu-btn"></span>
                <!-- mainmenu begin -->
                <nav>
                    <ul id="mainmenu">
                        <li class="menu-item current-menu-ancestor ">
                            <a title="Home" href="/">Home</a>
                        </li>

                        <li class="menu-item">
                            <a title="Introduction" href="#">Introduction </a>

                            <ul role="menu" class=" sub-menu">

                                <li class="menu-item">
                                    <a title="About Us" href="/about-us">About Us</a>
                                </li>

                                <li class="menu-item ">
                                    <a title="Our Vision &#038; Mission" href="/our-vision">Our Vision &#038; Mission</a>
                                </li>

                                <li class="menu-item ">
                                    <a title="Our Partner &#038; Sister Companies" href="/our-partner-sister-companies">Our Partner &#038; Sister Companies</a>
                                </li>

                                <li class="menu-item">
                                    <a title="What We Offer" href="/what-we-offer">What We Offer</a>
                                </li>

                                <li class="menu-item ">
                                    <a title="News" href="/blog">News</a>
                                </li>
                            </ul>
                        </li>


                        <li class="menu-item  ">
                            <a title="Our Services" href="#">Our Services </a>

                            <ul role="menu" class=" sub-menu">

                                @foreach(\App\Services::all() as $row)

                                <li class="menu-item ">
                                    <a title="DecoSol" href="{{ route('front.showservice', $row->name) }}">{{$row->name}}</a>
                                </li>
                                @endforeach

                            {{--    <li class="menu-item ">
                                    <a title="DecoFit" href="decosol.html">DecoFit</a>
                                </li>

                                <li class="menu-item ">
                                    <a title="DecoSport" href="decosol.html">DecoSport</a>
                                </li>

                                <li class="menu-item ">
                                    <a title="DecoSteel" href="decosol.html">DecoSteel</a>
                                </li>--}}
                            </ul>
                        </li>

                        <li class="menu-item  ">
                            <a title="Gallery" href="#">Gallery </a>
                            <ul role="menu" class=" sub-menu">
                                <li class="menu-item ">
                                    <a title="General Gallery" href="{{route('front.general-gallery')}}">General Gallery</a>
                                </li>

                                <li class="menu-item">
                                    <a title="Project gallery" href="portfolios.html">Project gallery</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item ">
                            <a title="Contact" href="#">Contact </a>

                            <ul role="menu" class=" sub-menu">

                                <li class="menu-item ">
                                    <a title="Inquiry" href="/contact">Inquiry</a>
                                </li>

                                <li class="menu-item">
                                    <a title="Jobs" href="job-openings.html">Jobs</a>
                                </li>

                                <li class="menu-item">
                                    <a title="FAQs" href="/allfaqs">FAQs</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- mainmenu close -->
        </div>
    </div>


</header>
