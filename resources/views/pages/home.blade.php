@extends('layout')
@section('content')

    <div class="container-fluid p-lg-0">
        <div class="row justify-content-center">
            <video loop="true" autoplay="autoplay" muted>
                <source src="{{ asset('assets/video/videohome.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="row bg-home justify-content-center">
            <div class=" col-lg-6 p-3 m-auto">
                <div class="column justify-content-center">
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset('assets/img/logohorizontal.png') }}" class="image-home" alt="image">
                    </div>
                    <div class="col-lg-12 home-text-intro text-center mt-3">
                        Aman, Nyaman, Dapat Diandalkan
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center container-lab">
            <p class="text-center home-text-title pb-lg-5">Our Laboratory</p>
            <div class="container-fluid">
                <div class="row justify-content-center pb-lg-3">
                    <div class="container-home mx-3 col-lg-3 col-sm-3 col-md-3 mb-4 p-0 text-center">
                        <img src="{{ asset('assets/img/imagehome1.png') }}" class="imagehome-responsive" alt="image">
                        <div class="overlay">
                            <div class="text">Hello World</div>
                        </div>
                    </div>
                    <div class="container-home p-0 mx-3 col-lg-3 col-sm-3 col-md-3 mb-4 text-center">
                        <img src="{{ asset('assets/img/imagehome2.png') }}" class="imagehome-responsive" alt="image">
                        <div class="overlay">
                            <div class="text">Hello World</div>
                        </div>
                    </div>
                    <div class="container-home p-0 mx-3 col-lg-3 col-sm-3 col-md-3 mb-4 text-center">
                        <img src="{{ asset('assets/img/imagehome3.png') }}" class="imagehome-responsive" alt="image">
                        <div class="overlay">
                            <div class="text">Hello World</div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="container-home p-0 mx-3 col-lg-3 col-sm-3 col-md-3 mb-4 text-center">
                        <img src="{{ asset('assets/img/imagehome4.png') }}" class="imagehome-responsive" alt="image">
                        <div class="overlay">
                            <div class="text">Hello World</div>
                        </div>
                    </div>
                    <div class="container-home p-0 mx-3 col-lg-3 col-sm-3 col-md-3 mb-4 text-center">
                        <img src="{{ asset('assets/img/imagehome5.png') }}" class="imagehome-responsive" alt="image">
                        <div class="overlay">
                            <div class="text">Hello World</div>
                        </div>
                    </div>
                    <div class="container-home p-0 mx-3 col-lg-3 col-sm-3 col-md-3 mb-4 text-center">
                        <img src="{{ asset('assets/img/imagehome6.png') }}" class="imagehome-responsive" alt="image">
                        <div class="overlay">
                            <div class="text">Hello World</div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row justify-content-center" style="margin-top: 103px">

            </div> --}}
            {{-- <div class="row">
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('assets/img/imagehome4.png') }}" height="400" alt="image">
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('assets/img/imagehome5.png') }}" height="400" alt="image">
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('assets/img/imagehome6.png') }}" height="400" alt="image">
                </div>
            </div> --}}
        </div>
    </div>

@stop
