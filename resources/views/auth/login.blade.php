@extends('index')
@section('content')
    <div class="auth-div">
        <div class="title-login">
            <h5>Sign In</h5>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600 status_text">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <form method="POST" autocomplete="off" action="{{ route('login') }}">
            @csrf
            <div class="pre-div">
                <div class="auth-input-div mb-4">
                    <label class="input-label"  for="email">Email</label>
                    <input type="email" autocomplete="off" class="form-control input-auth" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="auth-input-div">
                    <label class="input-label"  for="email">password</label>
                    <input type="password" autocomplete="off" name="password" required class="form-control input-auth" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password">
                </div>
                <div class="forgot">
                    @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                    @endif
                </div>
                <div class="login-div">
                    <button class="btn login-btn" type="submit">Login</button>
                </div>

                <div class="forgot ema">
                    Don’t have any account?  <a class="signup" href="/register">Sign Up</a>
            </div>
        </form>
    </div>
@stop
