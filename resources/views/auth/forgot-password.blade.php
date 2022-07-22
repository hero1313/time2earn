@extends('index')
@section('content')
    <div class="auth-div">
        <div class="title-login">
            <h5>password recover</h5>
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 status_text">
                {{ session('status') }} please check your spam.
            </div>
        @endif
        </div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="pre-div">
                <div class="auth-input-div mb-4">
                    <label class="input-label"  for="email">Email</label>
                    <input type="email" class="form-control input-auth" type="email" name="email" :value="old('email')" required autofocus>
                </div>
                <div class="login-div">
                    <button class="btn login-btn" type="submit">Login</button>
                </div>
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </div>
@stop
