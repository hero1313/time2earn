@extends('index')
@section('content')
    <div class="auth-div">
            <div class="signup-div">
                <h5>Sign Up</h5>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="pre-div">
                    <div class="reg-input-div mb-4">
                        <label class="input-label"  for="email">Full Name</label>
                        <input type="text" class="form-control input-auth" name="name" id="exampleInputEmail1" placeholder="Full Name">
                    </div>
                    <div class="reg-input-div mb-4">
                        <label class="input-label"  for="email">Email</label>
                        <input type="email" class="form-control input-auth" name="email" id="exampleInputEmail1"  placeholder="Enter email">
                    </div>
                    <div class="reg-input-div mb-4">
                        <label class="input-label"  for="email">Password</label>
                        <input type="password" class="form-control input-auth" id="password" name="password" required autocomplete="new-password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
                    </div>
                    <div class="reg-input-div mb-4">
                        <label class="input-label"  for="email">Confirm Password</label>
                        <input type="password" class="form-control input-auth" id="password_confirmation" required autocomplete="new-password" name="password_confirmation" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm Password">
                    </div>
                    <div class="login-div">
                        <button class="btn login-btn" type="submit">Sign Up</button>
                    </div>

                    <div class="forgot ema">
                        Alredy have any account?   <a class="signup" href="/login">Sign in</a>
                </div>
            </form>
    </div>
@stop
