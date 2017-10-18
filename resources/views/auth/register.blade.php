@extends('master')

@section('content')
    <div style="background-image: url(http://www.goodwp.com/images/201411/goodwp.com_31995.jpg); background-repeat: no-repeat;background-size: 100% 100%">
        <div class="container">
            <div class="row">
                <div class="mw8 w-31 mt5 center ph2 ph3-ns ptbSet mb5 brdr3 bg-white">
                    <div class="panel panel-default ph3-ns">
                        <h3 class="text-center loginName">Register</h3>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label>Name</label>
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>Email</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif

                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label>Password</label>

                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>

                                <div>

                                    <button id="exploreBtn" type="submit" class="btn full-btn btn-primary">
                                        Register
                                    </button>
                                </div>
                                <div class="col-md-12 mt3 pl0">
                                    {!! Recaptcha::render() !!}
                                </div>
                                <div class="form-group col-md-12" style="margin-top: 15px">
                                    <p>Already have a account <a style="color: #FF7734" href="{{ url('login') }}">login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
