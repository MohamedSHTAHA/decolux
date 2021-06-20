 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <title>Home</title>
     <meta name="description" content=" " />
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front')}}/images/decolux-O.png">
     <link rel='stylesheet' href='{{ asset("front")}}/plugins/css/layerslider.css' type='text/css' media='all' />
     <link crossorigin="anonymous" rel='stylesheet' id='ls-google-fonts-css' href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900%7CPlayfair+Display:regular,italic,700,900&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/dist/style.min.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/dist/theme.min.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/plugins/css/contact-form-7.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/plugins/assets/css/rs6.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/wpforms-full.min.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/newstyle.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/plugins/v4-shims.min.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/plugins/all.min.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/plugins/themes/fonts/font-awesome.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/plugins/themes/fonts/style.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/plugins/themes/fonts/elegant-font/style.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/bootstrap.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/plugin.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/archi/style.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/archi/blocks.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/archi/light.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/archi/joinchat.min.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/gallery/js_composer.min.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/gallery/prettyPhoto.min.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/gallery/owl.min.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/gallery/animate.min.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/archi/thjmf-public.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/css/archi/dashicons.min.css' type='text/css' media='all' />
     <link rel='stylesheet' href='{{ asset("front")}}/plugins/assets/css/js_composer.min.css' type='text/css' media='all' />
     <script type='text/javascript' src='{{ asset("front")}}/js/jquery.min.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/jquery.min.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/jquery-migrate.min.js'></script>
     <script type='text/javascript'>
         /* <![CDATA[ */
         var LS_Meta = {
             "v": "6.11.2",
             "fixGSAP": "1"
         };
         /* ]]> */
     </script>

     <script type='text/javascript' src='{{ asset("front")}}/js/layerslider.utils.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/layerslider.kreaturamedia.jquery.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/layerslider.transitions.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/rbtools.min.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/rs6.min.js'></script>

     <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyB2YeMKniOp8PvU2qPj99m7LTedKOEGYUM&#038;ver=5.7.2' id='archi-maps-js-js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/maplace.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/new.js'></script>

 </head>



 <body class="jPreLoader  has-topbar">
     <div id="wrapper">
         <!-- header begin -->
         @include('layouts.front.header')
         <!-- header close -->


         @yield('content')

         <!-- footer begin -->
         @include('layouts.front.footer')
         <!-- footer close -->


     </div>


     <script type='text/javascript' src='{{ asset("front")}}/js/slider.js'></script>
     <script type="text/javascript">
         window.jQuery = window.$ = jQuery;
         (function($) {
             "use strict";

             /* Enable/Disable Animate Scroll on Desktop and Mobile */
             jQuery(document).ready(function() {
                 'use strict';
                 new WOW().init();
             });

         })(jQuery);
     </script>

     <div class="joinchat joinchat--left" data-settings='{"telephone":"96566902021","mobile_only":false,"button_delay":3,"whatsapp_web":false,"message_views":2,"message_delay":10,"message_badge":false,"message_send":"","message_hash":""}'>

         <div class="joinchat__button">
             <div class="joinchat__button__open"></div>
         </div>
         <svg height="0" width="0">
             <defs>
                 <clipPath id="joinchat__message__peak">
                     <path d="M17 25V0C17 12.877 6.082 14.9 1.031 15.91c-1.559.31-1.179 2.272.004 2.272C9.609 18.182 17 18.088 17 25z" />
                 </clipPath>
             </defs>
         </svg>
     </div>


     <script type="text/html" id="wpb-modifications"></script>
     <link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet" property="stylesheet" media="all" type="text/css">

     <script type="text/javascript">
         if (typeof revslider_showDoubleJqueryError === "undefined") {
             function revslider_showDoubleJqueryError(sliderID) {
                 var err = "<div class='rs_error_message_box'>";
                 err += "<div class='rs_error_message_oops'>Oops...</div>";
                 err += "<div class='rs_error_message_content'>";
                 err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                 err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                 err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                 err += "</div>";
                 err += "</div>";
                 var slider = document.getElementById(sliderID);
                 slider.innerHTML = err;
                 slider.style.display = "block";
             }
         }
     </script>

     <script type='text/javascript' src='{{ asset("front")}}/js/dist/vendor/wp-polyfill.min.js'></script>

     <script type='text/javascript'>
         ('fetch' in window) || document.write('<script src="https://decolux-kw.com/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>');
         (document.contains) || document.write('<script src="https://decolux-kw.com/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>');
         (window.DOMRect) || document.write('<script src="https://decolux-kw.com/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>');
         (window.URL && window.URL.prototype && window.URLSearchParams) || document.write('<script src="https://decolux-kw.com/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>');
         (window.FormData && window.FormData.prototype.keys) || document.write('<script src="https://decolux-kw.com/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>');
         (Element.prototype.matches && Element.prototype.closest) || document.write('<script src="https://decolux-kw.com/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>');
         ('objectFit' in document.documentElement.style) || document.write('<script src="https://decolux-kw.com/wp-includes/js/dist/vendor/wp-polyfill-object-fit.min.js?ver=2.3.4"></scr' + 'ipt>');
     </script>
     <script type='text/javascript' src='{{ asset("front")}}/js/dist/hooks.min.js'></script>


     <script type='text/javascript' src='{{ asset("front")}}/js/dist/i18n.min.js'></script>

     <script type='text/javascript'>
         wp.i18n.setLocaleData({
             'text direction\u0004ltr': ['ltr']
         });
     </script>



     <script type='text/javascript' src='{{ asset("front")}}/js/dist/vendor/lodash.min.js'></script>

     <script type='text/javascript'>
         window.lodash = _.noConflict();
     </script>


     <script type='text/javascript' src='{{ asset("front")}}/js/dist/url.min.js'></script>

     <script type='text/javascript'>
         (function(domain, translations) {
             var localeData = translations.locale_data[domain] || translations.locale_data.messages;
             localeData[""].domain = domain;
             wp.i18n.setLocaleData(localeData, domain);
         })("default", {
             "locale_data": {
                 "messages": {
                     "": {}
                 }
             }
         });
     </script>

     <script type='text/javascript' src='{{ asset("front")}}/js/dist/api-fetch.min.js'></script>


     <script type='text/javascript' id='wp-api-fetch-js-translations'>
         (function(domain, translations) {
             var localeData = translations.locale_data[domain] || translations.locale_data.messages;
             localeData[""].domain = domain;
             wp.i18n.setLocaleData(localeData, domain);
         })("default", {
             "locale_data": {
                 "messages": {
                     "": {}
                 }
             }
         });
     </script>

     <script>
         // Get the modal
         var modal = document.getElementById("myModal");

         // Get the button that opens the modal
         var btn = document.getElementById("myBtn");

         // Get the <span> element that closes the modal
         var span = document.getElementsByClassName("close")[0];

         // When the user clicks the button, open the modal 
         btn.onclick = function() {
             modal.style.display = "block";
         }

         // When the user clicks on <span> (x), close the modal
         span.onclick = function() {
             modal.style.display = "none";
         }

         // When the user clicks anywhere outside of the modal, close it
         window.onclick = function(event) {
             if (event.target == modal) {
                 modal.style.display = "none";
             }
         }
     </script>
     <script type='text/javascript' id='contact-form-7-js-extra'>
         /* <![CDATA[ */
         var wpcf7 = {
             "cached": "1"
         };
         /* ]]> */
     </script>
     <script type='text/javascript' src='{{ asset("front")}}/plugins/contact-form-7.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/comment-reply.min.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/jpreLoader.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/wow.min.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/total1.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/designesia.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/joinchat.min.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/dist/js_composer_front.min.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/wp-embed.min.js'></script>
     <script src="{{ asset('front')}}/js/kit.js"></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/jquery.validate.min.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/mailcheck.min.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/wpforms.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/form.js'></script>
     <script type='text/javascript' src='{{ asset("front")}}/js/jquery.prettyPhoto.min.js'></script>
 </body>

 </html>