@extends('layouts.app')

@section('content')

<callout class='callout--container'></callout>

<div class="login">
    <div class="login-container">

        <div class="login__wrapper">

            <div class="login__heading">
                <h1>Login</h1>
                <p class='login__register'>Necesicto a rapidocharts account? <a class='btn btn--link btn--small-text' href="{{ route('register') }}">Create an account</a></p>
            </div>

            <div class="login__body">
                <form id='login-form' method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <fieldset>

                        <div class="form__group{{ $errors->has('email') ? ' form__group--error' : '' }}">
                            <label for="email" class="form__label">E-Mail Address</label>

                            <input id="email" type="email" class="form__field form__field--big" name="email" value="{{ old('email') }}"
                                required autofocus>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form__group{{ $errors->has('password') ? ' form__group--error' : '' }}">
                            <label for="password" class="form__label">Password</label>

                            <input id="password" type="password" class="form__field form__field--big" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form__group">
                            <div class="form__checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Keep me in?
                                </label>
                            </div>
                        </div>

                        <div class="form__group">
                            <button type="submit" class="btn btn--full btn--inverse">
                                Let me in!
                            </button>

                            <a class="btn btn--link btn--full btn--small-text login__btn" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection