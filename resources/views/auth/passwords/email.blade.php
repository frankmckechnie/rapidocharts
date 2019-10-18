@extends('layouts.app')

@section('content')

<callout class='callout--container'></callout>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="login">
    <div class="login-container">

        <div class="login__wrapper">

            <div class="login__heading">
                <h1>Reset Password</h1>
                <p class='login__register'>Are you lost?
                    <a class='btn btn--link btn--small-text btn--no-padding' href="{{ route('login') }}">Login</a>
                    or looking to 
                    <a class='btn btn--link btn--small-text btn--no-padding' href="{{ route('register') }}">Create an account</a>
                </p>
            </div>

            <div class="login__body">
                
                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <fieldset>
                        <div class="form__group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <input id="email" type="email" class="form__field form__field--big" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form__group">
                            <button type="submit" class="btn btn--full btn--inverse">
                                Send Password Reset Link
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
