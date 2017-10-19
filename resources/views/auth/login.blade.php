@extends('master')
@section('content')
<div class="loginForm"
     style="background-image: url(http://www.goodwp.com/images/201411/goodwp.com_31995.jpg); background-repeat: no-repeat;background-size: 100% 100%">
    <div class="container">
        <div class="row">
            <div class="mw8 w-31 mt5 center ph2 ph3-ns pv4 mb5 brdr3 bg-white">
                <h3 class="text-center loginName">Login</h3>
                <div class="panel-body">
                    <article class="cf">
                        <div class="fl w-100">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-12">
                                    <label>Email</label>


                                    <input id="email" type="email"
                                           class="form-control"
                                           name="email"
                                           value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-12">
                                    <label>Password</label>


                                    <input id="password" type="password"
                                           class="form-control"
                                           name="password"
                                           required>

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-12" style="margin-top: 15px">
                                    <button id="exploreBtn" type="submit"
                                            class="btn full-btn btn-primary">
                                        Login
                                    </button>
                                </div>
                                <div class="col-md-12 mt3">
                                    <!--                                    {!! Recaptcha::render() !!}-->
                                </div>

                                <div class="col-md-12" style="margin-top: 15px">
                                    <p>Don't have a account <a style="color: #FF7734" href="{{ url('register') }}">register</a>
                                    </p>
                                </div>
                                <div class="col-md-12" style="margin-top: 15px">
                                    <p><a class="pull-right" style="color: #FF7734" href="{{ url('password/reset') }}">Forget
                                            Password</a></p>
                                </div>


                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
