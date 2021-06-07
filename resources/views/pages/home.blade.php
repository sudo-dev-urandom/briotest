@extends('layout')
@section('content')

    <div class="container-fluid" style="margin-top: 130px">
        <div class="row justify-content-center">
            <div class="col-lg-12 px-lg-5">
                <video loop="true" autoplay="autoplay" muted>
                    <source src="{{ asset('assets/video/videohome.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="row bg-home justify-content-center" style="margin-top: 107px">
            <div class="col-lg-6 m-auto">
                <div class="column justify-content-center">
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset('assets/img/logohorizontal.png') }}" width="248" height="84" alt="image">
                    </div>
                    <div class="col-lg-12 home-text-intro text-center mt-3">
                        Aman, Nyaman, Dapat Diandalkan
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="padding-top: 104px; background: #F7F8F9; padding-bottom: 103px">
            <div class="col-lg-6 text-center home-text-title">Our Laboratory</div>
        </div>
        <div class="row justify-content-center" style="margin-top: 103px">
            <div class="row my-lg-5 py-lg-4">
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('assets/img/imagehome1.png') }}" height="400" alt="image">
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('assets/img/imagehome2.png') }}" height="400" alt="image">
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('assets/img/imagehome3.png') }}" height="400" alt="image">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('assets/img/imagehome4.png') }}" height="400" alt="image">
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('assets/img/imagehome5.png') }}" height="400" alt="image">
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('assets/img/imagehome6.png') }}" height="400" alt="image">
                </div>
            </div>
        </div>
    </div>

@stop
