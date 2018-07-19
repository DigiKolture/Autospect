<!doctype html>
<html lang="en">
<head>
    <!-- Start of Async Drift Code -->
    <script>
        "use strict";

        !function() {
            var t = window.driftt = window.drift = window.driftt || [];
            if (!t.init) {
                if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
                t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
                    t.factory = function(e) {
                        return function() {
                            var n = Array.prototype.slice.call(arguments);
                            return n.unshift(e), t.push(n), t;
                        };
                    }, t.methods.forEach(function(e) {
                    t[e] = t.factory(e);
                }), t.load = function(t) {
                    var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                    var i = document.getElementsByTagName("script")[0];
                    i.parentNode.insertBefore(o, i);
                };
            }
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('zrbkcyu9m3ew');
    </script>
    <!-- End of Async Drift Code -->
    <title>Autospect - Quality Inspection accross Nigeria</title>
    <!--meta-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="keywords" content="Mechanic, Car, Auto" />
    <meta name="description" content="Autospect Autoinspection Shop" />
    <!--slider revolution-->
    <link rel="stylesheet" type="text/css" href="{{asset('rs-plugin/css/settings.css')}}" media="screen" />
    <!--style-->
    {{--<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>--}}
    <link rel="stylesheet" type="text/css" href="{{asset('style/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/superfish.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/prettyPhoto.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/jquery.qtip.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/animations.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/odometer-theme-default.css')}}">
    <!--fonts-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/streamline-small/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/template/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/social/styles.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    @yield('styles')
</head>
<body>

    <div class="site-container">

        @include('layouts.header')

            @yield('content')

        @include('layouts.footer')

    </div>

    @include('layouts.script')
</body>
</html>