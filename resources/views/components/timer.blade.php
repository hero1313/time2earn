@extends('index')
@section('content')
    <div class="flex">
        <div class="res"></div>
        <div class="container-main">
            <header>
                <a href="{{route('menu')}}" class="user-icon">
                    <img src="assets/icon/user.png" alt="">
                </a>
                <a href="" class="send-icon">
                    <img src="assets/icon/send.png" alt="">
                </a>
            </header>
            <div class="speaker-div">
                <a class="speaker-a">
                    <button class="btn speaker-btn"><img src="assets/icon/speaker.png" alt="">  Dont have account or Need help </button>
                </a>
            </div>
            <div class="contents">
                <div class="timer-first">
                    <div class="timer-circle">
                        <div class=" circle-spinner">
                            <div class="circle-core">
                            </div>
                        </div>
                        <div id="stopwatch">
                            00:00:00
                        </div>
                    </div>
                </div>
            </div>
            <div class="speaker-div">
                <a class="speaker-a">
                    <button class="btn speaker-btn">Regisratiotn time: 03:12:2022</button>
                </a>
                <div class="twin-button flex">
                    <button class="btn speaker-twn-btn mr-2">Deposit: 1500$</button>
                    <button class="btn speaker-twn-btn">Speed: 1.5x</button>
                </div>
            </div>
            <div class="bottom-navigation">
                <div class="circle">
                    <a href="{{route('withdraw')}}">
                        <img class="down"  src="assets/icon/download.png" alt="">
                        <h5 class="dep">Withdraw</h5>
                    </a>
                </div>
                <div class="circle-2">
                    <a href="{{route('deposit')}}">
                        <img class="up" src="assets/icon/upload.png" alt="">
                        <h5 class="dep-2">Deposit</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="res"></div>
    </div>
@stop
