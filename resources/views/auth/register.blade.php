@extends('layouts.app')

@section('content')

<callout class='callout--container'></callout>


<div class="register">
    <div class="register-container">
        <div class="register__wrapper">
            <div class="register__heading">
                <h1>Register</h1>
                <p class='register__login'>Allready have an account? <a class='btn btn--link btn--small-text' href="{{ route('login') }}">Login</a></p>

            </div>

            <div class="register__body">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form__group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="form__label">Name</label>

                            <input id="name" type="text" class="form__field form__field--big" name="name" value="{{ old('name') }}"
                                required autofocus>

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                    </div>

                    <div class="form__group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="form__label">E-Mail Address</label>

                        <input id="email" type="email" class="form__field form__field--big" name="email" value="{{ old('email') }}"
                            required>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form__group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="form__label">Password</label>

                        <input id="password" type="password" class="form__field form__field--big" name="password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form__group">
                        <label for="password-confirm" class="form__label">Confirm Password</label>

                        <input id="password-confirm" type="password" class="form__field form__field--big" name="password_confirmation"
                            required>
                    </div>

                    <div class="form__group">
                        <button type="submit" class="btn btn--inverse btn--full">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection