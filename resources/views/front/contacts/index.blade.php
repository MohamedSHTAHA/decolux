@extends('layouts.front.app')



@section('content')


<!-- subheader begin -->
<section id="subheader" data-speed="8" data-type="background" style="background-image: url('images/subheader-6-1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>Contact</h1>
                </div>
                <ul id="breadcrumbs" class="crumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->



<section class="wpb_row vc_row-fluid vc_custom_1438577278176 no-padding">
    <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper ">
                    <div id="gmap-60c4c5d5d0ca7" style="height: 500px;">

                    </div>

                    <script type="text/javascript">
                        (function($) {
                            "use strict"
                            $(document).ready(function() {

                                var locations = [
                                    ['<div class="infobox"><span><span></div>', 29.3567995, 47.9056821, 2]
                                ];

                                var map = new google.maps.Map(document.getElementById('gmap-60c4c5d5d0ca7'), {
                                    zoom: 15,
                                    scrollwheel: false,
                                    navigationControl: true,
                                    mapTypeControl: false,
                                    scaleControl: false,
                                    draggable: true,
                                    styles: [{
                                        "stylers": [{
                                            "hue": "#ff1a00"
                                        }, {
                                            "invert_lightness": true
                                        }, {
                                            "saturation": -100
                                        }, {
                                            "lightness": 33
                                        }, {
                                            "gamma": 0.5
                                        }]
                                    }, {
                                        "featureType": "water",
                                        "elementType": "geometry",
                                        "stylers": [{
                                            "color": "#2D333C"
                                        }]
                                    }],
                                    center: new google.maps.LatLng(29.3567995, 47.9056821),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                });

                                var infowindow = new google.maps.InfoWindow();

                                var marker, i;

                                for (i = 0; i < locations.length; i++) {
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                        map: map,
                                        icon: 'images/map-marker.png',
                                        title: ''
                                    });
                                    google.maps.event.addListener(marker, (function(marker, i) {
                                        return function() {
                                            infowindow.setContent(locations[i][0]);
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));
                                }

                            });

                        })(jQuery);
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="wpb_row vc_row-fluid vc_custom_1438577300524">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container vc_col-sm-8">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper wow fadeInLeft">
                        <h3 class="ot_custom_heading  " style="">SEND US MESSAGE</h3>

                        <div class="vc_empty_space" style="height: 10px">
                            <span class="vc_empty_space_inner"></span>
                        </div>
                        <div class="wpforms-container wpforms-container-full" id="wpforms-1927">

                            <form class="wpforms-validate wpforms-form wpforms-ajax-form" method="post" action="{{ route('front.savecontact') }}">
                                @csrf
                                @method('POST')

                                <div class="wpforms-field-container">
                                    <div id="wpforms-1927-field_0-container" class="wpforms-field wpforms-field-name" data-field-id="0">
                                        <label class="wpforms-field-label" for="wpforms-1927-field_0">Name <span class="wpforms-required-label">*</span></label>

                                        <input type="text" id="wpforms-1927-field_0" class="wpforms-field-large wpforms-field-required" name="name" required>
                                    </div>
                                    <div id="wpforms-1927-field_1-container" class="wpforms-field wpforms-field-email" data-field-id="1">
                                        <label class="wpforms-field-label" for="wpforms-1927-field_1">Email <span class="wpforms-required-label">*</span></label>

                                        <input type="email" id="wpforms-1927-field_1" class="wpforms-field-large wpforms-field-required" name="email" required>

                                    </div>

                                    <div id="wpforms-1927-field_6-container" class="wpforms-field wpforms-field-text" data-field-id="6">
                                        <label class="wpforms-field-label" for="wpforms-1927-field_6">Phone <span class="wpforms-required-label">*</span>
                                        </label>
                                        <input type="text" id="wpforms-1927-field_6" class="wpforms-field-large wpforms-field-required" name="phone" required>
                                    </div>

                                    <div id="wpforms-1927-field_4-container" class="wpforms-field wpforms-field-text" data-field-id="4">
                                        <label class="wpforms-field-label" for="wpforms-1927-field_4">Company Name</label>
                                        <input type="text" id="wpforms-1927-field_4" class="wpforms-field-large" name="company_name">
                                    </div>

                                    <div id="wpforms-1927-field_5-container" class="wpforms-field wpforms-field-text" data-field-id="5">
                                        <label class="wpforms-field-label" for="wpforms-1927-field_5">Company Address</label>
                                        <input type="text" id="wpforms-1927-field_5" class="wpforms-field-large" name="company_Address">
                                    </div>

                                    <div id="wpforms-1927-field_2-container" class="wpforms-field wpforms-field-textarea" data-field-id="2"><label class="wpforms-field-label" for="wpforms-1927-field_2">Comment or Message <span class="wpforms-required-label">*</span></label><textarea id="wpforms-1927-field_2" class="wpforms-field-medium wpforms-field-required" name="comment_message" required></textarea></div>

                                </div>

                                <div class="wpforms-field wpforms-field-hp"><label for="wpforms-1927-field-hp" class="wpforms-field-label">Name</label><input type="text" name="" id="wpforms-1927-field-hp" class="wpforms-field-medium"></div>

                                <div class="wpforms-submit-container">

                                    <button type="submit" class="wpforms-submit1">Submit Form</button>


                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-4">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper wow fadeInRight">
                        <h3 class="ot_custom_heading  " style="">CONTACT INFO</h3>

                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <address><a href="@if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->address)){{\App\Settings::orderBy('id', 'DESC')->first()->address}}
                                    @endif">Address</a></address>
                                <address><strong>Phone: </strong>@if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->phone))
                                    {{\App\Settings::orderBy('id', 'DESC')->first()->phone}}@endif
                                </address>
                                <address><strong>Email: </strong><a href="@if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->email))
                                    {{\App\Settings::orderBy('id', 'DESC')->first()->email}}@endif">@if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->email))
                                        {{\App\Settings::orderBy('id', 'DESC')->first()->email}}@endif</a></address>
                                <address><strong>Web: </strong><a href="@if(!empty(\App\Settings::orderBy('id', 'DESC')->first()->website))
                                    {{\App\Settings::orderBy('id', 'DESC')->first()->website}}@endif" target="_blank" rel="noopener noreferrer">website company</a></address>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection