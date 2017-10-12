@extends('master')
@section('content')
    <div id="wrapper">
        <div id="content">
            <article class="mw8 w-80 mt4 center ph2 ph3-ns pv4 mb5 br3 bg-white">
                <h1 id="title" class="f3 fw3 f2-ns tc lh-title mt0 mb3 measure center">Download Toolkit &amp;
                    Resources</h1>
                <article class="cf">
                    <div class="fl w-100 w-50-ns">
                        <form class="pa2 black-80" action="/downloads" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="center">
                                <input name="name" class="input-reset ba b--black-20 br2 pa2 mb3 db w-100"
                                       type="text" placeholder="Name">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                @endif
                                <input name="email" class="input-reset ba b--black-20 br2 pa2 mb3 db w-100"
                                       type="text" placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                @endif
                                <input name="profession_affiliation"
                                       class="input-reset ba b--black-20 br2 pa2 mb3 db w-100"
                                       type="text" placeholder="Profession or Affiliation">
                                @if ($errors->has('profession_affiliation'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('profession_affiliation') }}</strong>
                                        </span>
                                @endif
                                <input name="how_did_rec"
                                       class="input-reset ba b--black-20 br2 pa2 mb3 db w-100"
                                       type="text" placeholder="How did you find Recommoner?">
                                @if ($errors->has('how_did_rec'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('how_did_rec') }}</strong>
                                        </span>
                                @endif
                                <fieldset id="intended-use" class="bn pa0">
                                    <legend class="f5 mv2 ma0">How are you going to use Recommoner?</legend>
                                    <div class="flex items-center mb2">
                                        <input class="mr2" type="checkbox" name="community" value="community">
                                        <label for="community" class="lh-copy">Community Issue</label>
                                    </div>
                                    <div class="flex items-center mb2">
                                        <input class="mr2" type="checkbox" name="business" value="business">
                                        <label for="business" class="lh-copy">Business</label>
                                    </div>
                                    <div class="flex items-center mb2">
                                        <input class="mr2" type="checkbox" name="classroom" value="classroom">
                                        <label for="classroom" class="lh-copy">Classroom</label>
                                    </div>
                                    <div class="flex items-center mb2">
                                        <input class="mr2" type="checkbox" name="research" value="research">
                                        <label for="research" class="lh-copy">Research</label>
                                    </div>
                                </fieldset>
                                <br>
                                <small id="disclosure" class="f7 db mv2 fw1">We would like to stay connected. By
                                    downloading
                                    our resources, you agree to grant us the ability to follow up with you with
                                    correspondence relating to your usage.
                                </small>
                                <button type="submit" class="f5 btn btn-full near-white tc pt2 pb2 bg-blue ">Submit
                                </button>
                            </div>
                        </form>

                    </div>
                    <div class="fl w-100 w-50-ns tl ph3">
                        <img src="{{ asset('images/download-hero.png')}}" class="mw-100" alt="">
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