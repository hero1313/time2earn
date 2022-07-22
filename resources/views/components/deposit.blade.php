@extends('index')
@section('content')
    <div class="container-withdraw">
        <header class="withdraw-header">
            <a href="{{route('timer')}}" class="back-icon">
                <img src="assets/icon/back.png" alt="">
            </a>
            <div class="user-logo">
                <h5>Deposit</h5>
                <img class="deposit-user" src="assets/icon/user-icon.png" alt="">
                <h6>User543</h6>
            </div>
            <a href="" class="clodu-icon">
                <img src="assets/icon/cloud.png" alt="">
            </a>
        </header>
        <div class="balance-deposit">
            Balance:127$
        </div>
        <div class="qr">
            <img src="assets/icon/qr.png" alt="">
        </div>

        <div class="reg-input-div mb-4">
            <label class="input-label"  for="email">Deposit Address</label>
            <input type="text" class="form-control input-auth" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="reg-input-div mb-4">
            <label class="input-label"  for="email">Amount</label>
            <input type="text" class="form-control input-auth" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="reg-input-div mb-4">
            <label class="input-label"  for="email">Address form</label>
            <input type="text" class="form-control input-auth" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>

        <div class="login-div">
            <button class="btn login-btn" type="submit">DEPOSIT</button>
        </div>
    </div>
@stop
