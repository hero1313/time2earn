@extends('index')
@section('content')
    <div class="container-withdraw">
        <header class="withdraw-header">
            <a href="{{route('timer')}}" class="back-icon">
                <img src="assets/icon/back.png" alt="">
            </a>
            <div class="user-logo">
                <h5>Withdraw</h5>
                <img src="assets/icon/user-icon.png" alt="">
                <h6>User543</h6>
            </div>
            <a href="" class="clodu-icon">
                <img src="assets/icon/cloud.png" alt="">
            </a>
        </header>
        <div class="balance">
            <button class="btn button-balance">Balance:127$</button>
        </div>
        <div class="auth-input-div mb-4">
            <label class="input-label"  for="email">Amount</label>
            <input type="text" class="form-control input-auth" name="amount" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="auth-input-div mb-4">
            <label class="input-label"  for="email">Withdraw Address</label>
            <input type="text" class="form-control input-auth" name="withdraw-Address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="login-div">
            <button class="btn login-btn" type="submit">WITHDRAW</button>
        </div>
    </div>
@stop
