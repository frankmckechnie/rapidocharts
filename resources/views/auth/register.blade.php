@extends('layouts.app')

@section('content')


<div class="register">
    <div class="register-container">
        <div class="register__wrapper grid grid--gutters">
            <div class="grid-cell grid-cell--1of3">
                <div class="register__logo">
                </div>
            </div>

            <div class="grid-cell">
                <div class="register__heading">
                    <h1>What you waiting for?</h1>
                    <p class='register__text'>
                        Register today and see what RapidoCharts can offer you! <br/> Already have an account? <a
                        class='btn btn--link btn--small-text btn--no-padding'
                        href="{{ route('login') }}">Login</a>
                    </p>
                </div>

                <div class="register__body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form__group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="form__label">Name</label>

                            <input id="name" type="text" class="form__field form__field--big" name="name"
                                value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form__group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="form__label">E-Mail Address</label>

                            <input id="email" type="email" class="form__field form__field--big" name="email"
                                value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form__group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="form__label">Password</label>

                            <input id="password" type="password" class="form__field form__field--big" name="password"
                                required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form__group">
                            <label for="password-confirm" class="form__label">Confirm Password</label>

                            <input id="password-confirm" type="password" class="form__field form__field--big"
                                name="password_confirmation" required>
                        </div>

                        <div class="form__group form__group--row">
                            <div class="form__cell">

                                <button type="submit" class="btn btn--inverse ">
                                    Listo!
                                </button>
                            </div>
                            <div class="form__cell">
                                <p class="register__text">
                                    By clicking the "Listo!" button, you are creating a RapidoCharts account, and you
                                    agree to RapidoChart's
                                    <a class="btn btn--link btn--small-text btn--no-padding"
                                        href="{{url('standard/terms')}}" rel="noopener noreferrer">Terms of
                                        Use</a> and <a class="btn btn--link btn--no-padding btn--small-text"
                                        href="{{url('standard/policy')}}" rel="noopener noreferrer">Privacy Policy</a>.
                                         
                                </p>
                             
                            </div>


                        </div>


                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection