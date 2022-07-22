@extends('index')
@section('content')
    <div class="auth-div">
        <div class="title-login">
            <h5>reset password</h5>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600 status_text">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="pre-div">
                <div class="auth-input-div">
                    <x-jet-label class="input-label" for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="form-control input-auth" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                </div>
                <div class="auth-input-div">
                    <x-jet-label class="input-label" for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="form-control input-auth" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="auth-input-div">
                    <x-jet-label class="input-label" for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="form-control input-auth" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="login-div">
                    <button class="btn login-btn">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@stop
