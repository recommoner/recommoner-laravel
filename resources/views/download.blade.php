@extends('master')
@section('content')
    <div id="wrapper">
        <div id="content">
            <article class="mw8 w-80 mt4 center ph2 ph3-ns pv4 mb5 br3 bg-white">
                <h1 id="title" class="f3 fw3 f2-ns tc lh-title mt0 mb3 measure center">Download Toolkit &amp;
                    Resources</h1>
                <article class="cf">
                    <div class="fl w-100 w-50-ns">
                        <form class="pa2 black-80" action="" method="">
                            <div class="center">
                                <input name="name" id="name" class="input-reset ba b--black-20 br2 pa2 mb3 db w-100"
                                       type="text" placeholder="Name">
                                <input name="email" id="email" class="input-reset ba b--black-20 br2 pa2 mb3 db w-100"
                                       type="text" placeholder="Email">
                                <input name="profession" id="email"
                                       class="input-reset ba b--black-20 br2 pa2 mb3 db w-100"
                                       type="text" placeholder="Profession or Affiliation">
                                <input name="referral" id="email"
                                       class="input-reset ba b--black-20 br2 pa2 mb3 db w-100"
                                       type="text" placeholder="How did you find Recommoner?">

                                <fieldset id="intended-use" class="bn pa0">
                                    <legend class="f5 mv2 ma0">How are you going to use Recommoner?</legend>
                                    <div class="flex items-center mb2">
                                        <input class="mr2" type="checkbox" id="community" value="community">
                                        <label for="community" class="lh-copy">Community Issue</label>
                                    </div>
                                    <div class="flex items-center mb2">
                                        <input class="mr2" type="checkbox" id="business" value="business">
                                        <label for="business" class="lh-copy">Business</label>
                                    </div>
                                    <div class="flex items-center mb2">
                                        <input class="mr2" type="checkbox" id="classroom" value="classroom">
                                        <label for="classroom" class="lh-copy">Classroom</label>
                                    </div>
                                    <div class="flex items-center mb2">
                                        <input class="mr2" type="checkbox" id="research" value="research">
                                        <label for="research" class="lh-copy">Research</label>
                                    </div>
                                </fieldset>

                                <div class="g-recaptcha mt3" data-sitekey="6LcPjSYUAAAAAFQ0OGNbrlk3cw3LWj87Lsr1kOnZ">
                                    <div style="width: 304px; height: 78px;">
                                        <div>
                                            <iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LcPjSYUAAAAAFQ0OGNbrlk3cw3LWj87Lsr1kOnZ&amp;co=aHR0cDovL3d3dy5yZWNvbW1vbmVyLmNvbTo4MA..&amp;hl=en&amp;v=r20170919161736&amp;size=normal&amp;cb=64aapttag2ni"
                                                    title="recaptcha widget" width="304" height="78" frameborder="0"
                                                    scrolling="no"
                                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                        </div>
                                        <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                                  class="g-recaptcha-response"
                                                  style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea>
                                    </div>
                                </div>
                                <br>

                                <small id="disclosure" class="f7 db mv2 fw1">We would like to stay connected. By
                                    downloading
                                    our resources, you agree to grant us the ability to follow up with you with
                                    correspondence relating to your usage.
                                </small>
                                <span id="submit"><a class="no-underline" href="download-success.html"><h2
                                                class="f5 near-white tc pt3 fw4 link dim near-black br2 bg-blue pv3">Submit</h2></a></span>

                            </div>
                        </form>

                    </div>
                    <div class="fl w-100 w-50-ns tl ph3">
                        <img src="/images/download-hero.png" class="mw-100" alt="">
                        <p class="pv0 mt2 f5">Recommoner is a work in progress – its development depends on usage and
                            testing. Recommoner is licensed under a Creative Commons Attribution 3.0 Unported License
                            and
                            development is managed on Github. In plain English, you can use
                            it any way you wish, as long as you attribute it and share any iterations with us (and other
                            users) by emailing to: hello@recommoner.com.</p>
                    </div>
                </article>
            </article>
        </div>
    </div>
@endsection