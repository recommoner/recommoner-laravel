@extends('master')

@section('content')
<div class="loginForm"
     style="background-image: url(http://www.goodwp.com/images/201411/goodwp.com_31995.jpg); background-repeat: no-repeat;background-size: 100% 100%">
    <div class="container">
        <div class="row">
            <div class="mw8 w-31 mt5 center ph2 ph3-ns pv4 mb5 brdr3 bg-white">
                <div class="panel panel-default">
                    <h3 class="text-center loginName">Forgot Password</h3>

                    <div class="panel-body mt4">
                        @if (session('status'))
                        <div class="alert alert-success" style="color: green; margin-bottom: 20px">
                            We have emailed your password resend link.
                        </div>
                        @endif

                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

                            <div class=" form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn full-btn btn-primary">
                                    Send Email
                                </button>
                            </div>
                            <div class="col-md-12" style="margin-top: 15px">
                                <p><a class="pull-right" style="color: #FF7734" href="{{ url('login') }}">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
