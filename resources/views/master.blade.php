<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Recommoner</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{assets('css/bs.css')}}">

    <meta name="description" content="Recommoner: address social dilemmas.">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="{{assets('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{assets('css/my.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{assets('css/tachyons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{assets('css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{assets('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{assets('css/video-js.css')}}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        .bulletpoint .title {
            color: #2f241f;
            display: block;
        }

        .bulletpoint .desc {
            display: block;
        }

        .slick-next {
            right: 25px;
            z-index: 10;
        }

        .slick-next:before,
        .slick-prev:before {
            color: orange;
            height: 2em;
            width: 2em;
        }

        .slick-prev {
            left: 25px;
            z-index: 10;
        }

        .video-dimensions {
            padding-top: 2em;
            width: 400px;
            height: 250px;
            max-width: 600px;
            max-height: 425px
        }

        #about {
            background-color: #e8e2dc;
            color: #333e48;
            display: block;
            border-radius: 4px;
            padding: 2em;
        }

        #slider {
            overflow: hidden;
            padding-bottom: 15px;
            margin-bottom: -15px;
        }

        #wrapper {
            background-color: #e8e2dc;
        }
    </style>


</head>
<body>
<main id="wrapper">
    <header class="">
        <nav class="center">
            <div class="pa3 hPadding19 dt w-100">
                <div class="dtc w2 min_inBlk v-mid pa1">
                    <a href="/" class="dib w5 logo h2 pv2">
                        <img src="/images/logo-beta.svg">
                    </a>
                </div>
                <div id="navlinks" class="dtc tr min_pb18 pt3 ph3">
                    <a class="f7 hover-orange no-underline white dn dib-l pv2 ph3" href="/narratives">Narratives</a>
                    <a class="f7 hover-orange no-underline white dn dib-l pv2 ph3" href="http://recommoning.com"
                       target="_blank">Blog</a>
                    <a class="f7 hover-orange no-underline white dn dib-l pv2 ph3" href="/download">Download</a>
                    @if (Auth::guest())
                    <a id="loginBtn"
                       class="f7 hover-orange no-underline white dib ml2 pv2 ph4 ba br2 mr2 mr3-ns grow"
                       href="/login">Log In</a>
                    <a id="signupBtn" class="f7 hover-white no-underline white dib mh0 pv2 ph4 br2 mr2 mr3-ns grow"
                       href="/register">Sign Up</a>
                    @else
                    <a class="f7 hover-orange no-underline white dn dib-l pv2 ph3"
                       href="/articles">{{ Auth::user()->name }}</a>
                    <a class="f7 hover-orange no-underline white dn dib-l pv2 ph3"
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @endif
                </div>
            </div>
        </nav>
    </header>

    @section('content')
    @show

    <footer class="pv4 white">
        <div class="tc mv2">
            <a href="#" title="Language" class="f6 dib ph2 link white dim">Language</a>
            <a href="/terms" title="Terms" class="f6 dib ph2 link white dim">Terms of Use</a>
            <a href="/privacy" title="Privacy" class="f6 dib ph2 link white dim">Privacy</a>
        </div>
        <small class="f7 db tc">Content licensed under a Creative Commons Attribution Non-Commercial ShareAlike 3.0
            Unported License.<br><br><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"
                                        target="_blank"><img alt="Creative Commons License" style="border-width:0"
                                                             src="https://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png"></a>
        </small>
    </footer>
</main>
<div id="otherjs">
    <script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/js/slick.min.js"></script>
    <script type="text/javascript" src="/js/video.js"></script>
    <script src=""></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#slider').slick({
                infinite: true,
                speed: 3500,
                autoplay: true,
                dots: true,
                arrows: true,
                // adaptiveHeight: true
            });
        });
    </script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-97721582-1', 'auto');
        ga('send', 'pageview');
    </script>
</div>
{{--
<script src="{{ asset('js/app.js') }}"></script>
--}}
</body>
</html>