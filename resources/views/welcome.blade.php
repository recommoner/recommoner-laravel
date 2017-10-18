@extends('master')
@section('content')
<div id="slider" class="">
    <div class="cover bg-left pv6 db" style="background-image: url({{ asset('images/eviction.jpg')}}">
        <div id="maintext" class="pt5 ph1 mr5 measure-narrow fr">
            <h1 class="f2 f1-l mb0 lh-solid">platform your negotiations</h1>
            <h2 class="f3 mt2 mb3 fw4">Engage your group and make decisions together. </h2>
            <a id="exploreBtn" class="f6 hover-white no-underline white dib pa3 br2 mr2 mr3-ns grow ttu"
               href="{{url('register')}}">Explore Now</a>
        </div>
    </div>
    <div class="cover bg-left pv6 db" style="background-image: url({{asset('images/village.jpg')}});">
        <div id="maintext" class="pt5 ph1 mr5 measure-narrow fr">
            <h1 class="f2 f1-l mb0 lh-solid">different roles</h1>
            <h2 class="f3 mt2 mb3 fw4">Based on the Yoruba village idea, roles open up new spaces for commons-based
                agreements. </h2>
            <a id="exploreBtn" class="f6 hover-white no-underline white dib pa3 br2 mr2 mr3-ns grow ttu"
               href="{{url('register')}}">Explore Now</a>
        </div>
    </div>
    <div class="cover bg-left pv6 db" style="background-image: url({{ asset('images/differenceandinclusion.jpg')}}">
        <div id="maintext" class="pt5 ph1 mr5 measure-narrow fr">
            <h1 class="f2 f1-l mb0 lh-solid">difference & inclusion</h1>
            <h2 class="f3 mt2 mb3 fw4">Form collective rules that will respect individual interests. </h2>
            <a id="exploreBtn" class="f6 hover-white no-underline white dib pa3 br2 mr2 mr3-ns grow ttu"
               href="{{url('register')}}">Explore Now</a>
        </div>
    </div>
    <div class="cover bg-left pv6 db" style="background-image: url({{ asset('images/negotiatefairly.jpg')}}">
        <div id="maintext" class="pt5 ph1 mr5 measure-narrow fr">
            <h1 class="f2 f1-l mb0 lh-solid">negotiate fairly</h1>
            <h2 class="f3 mt2 mb3 fw4">Learn patterns of negotiation built on reciprocity, trust, and
                reputation. </h2>
            <a id="exploreBtn" class="f6 hover-white no-underline white dib pa3 br2 mr2 mr3-ns grow ttu"
               href="{{url('register')}}">Explore Now</a>
        </div>
    </div>
</div>

<article id="about" class="cf center white pt2 center v-mid mw8">
    <div id="vidcol" class="fl w-100 w-50-ns">
        <video id="video" class="video-js center w-100 w-50-ns fl" controls preload="auto"
               poster="{{asset('images/poster.jpg')}}"
               data-setup="{}">
            <source src="http://www.recommoner.com/beta/vids/large.mp4" type='video/mp4'>
            <source src="http://www.recommoner.com/beta/vids/large.webm" type='video/webm'>
            <source src="http://www.recommoner.com/beta/vids/small.mp4" type='video/mp4'>
            <source src="http://www.recommoner.com/beta/vids/small.webm" type='video/webm'>
            <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
        </video>
    </div>
    <div id="textcol" class="fl w-100 w-50-ns pb2">
        <h1 class="tl mb1 f2 fw4 mt0">About</h1>
        <span class="f4 fw3 pb3 db">Recommoner is a set of tools, resources, and spaces for negotiations and collective decision making.</span>

        <article class="dt w-100 bb b--black-05 pb2 mt2" href="#0">
            <div class="dtc w2 w3-ns v-mid">
                <img src="{{ asset('images/toolkit.svg')}}" class="ba b--black-10 db br-100 w2 w3-ns h2 h3-ns"/>
            </div>
            <div class="dtc v-mid pl3 pv2 bulletpoint">
                    <span class="f6"><span class="title f5 b small-caps">Toolkit</span> Prompts & principles for challenge negotiations.<br><a
                                href="{{url('downloads')}}" class="link orange dim">Check out the toolkit</a></span>
            </div>
        </article>

        <article class="dt w-100 bb b--black-05 pb2 mt2" href="#0">
            <div class="dtc w2 w3-ns v-mid">
                <img src="{{ asset('images/narratives.svg')}}" class="ba b--black-10 db br-100 w2 w3-ns h2 h3-ns"/>
            </div>
            <div class="dtc v-mid pl3 pv2 bulletpoint">
                    <span class="f6"><span class="title f5 b small-caps">Narratives</span> Support arguments to improve negotiations and formulate agreements.<br><a
                                href="{{url('narratives')}}" class="link orange dim">Read Narratives</a></span>
            </div>
        </article>

        <article class="dt w-100 bb b--black-05 pb2 mt2" href="#0">
            <div class="dtc w2 w3-ns v-mid">
                <img src="{{ asset('images/responsibility.svg')}}" class="ba b--black-10 db br-100 w2 w3-ns h2 h3-ns"/>
            </div>
            <div class="dtc v-mid pl3 pv2 bulletpoint">
                <span class="f6"><span class="title f5 b small-caps">Shared Responsibilities</span> Participants serve different roles and make decisions together. Roles may be chosen or assigned by the system.<br></span>
            </div>
        </article>
    </div>
</article>
@endsection