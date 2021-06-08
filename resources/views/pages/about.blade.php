@extends('layout')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center row-bg">
            <div class="col-lg col-sm-3 m-auto">
                <div class="card align-items-center card-size-about">
                    <div class="card-body">
                        <div class="column">
                            <div class="col-lg-12 pb-4">
                                <p class="text-center about-text-title1">
                                    Background
                                </p>
                            </div>
                            <div class="col-lg-12 pb-4">
                                <p class="text-justify about-text-title2">
                                    Penanganan pandemi covid 19 membutuhkan kapasitas testing & tracing yang
                                    memadai. Karena itu, jumlah laboratorium dengan spesifikasi dan tenaga ahli dengan
                                    sertifikasi tertentu merupakan elemen penting dalam penanganan Covid-19
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <p class="text-justify about-text-title2">
                                    Berangkat dari keinginan mendukung pemerintah dalam penanganan Covid-19, sejumlah
                                    pengusaha,
                                    dokter, tenaga kesehatan, dan tenaga ahli laboratorium berkolaborasi membangun <span
                                        style="font-weight: bold; color: #000000">Brio Test</span>
                                    yang mampu menyediakan fasilitas laboratorium molekuler dalam waktu singkat dan proses
                                    pemeriksaan yang akurat dan terpercaya
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-about justify-content-center">
            <div class="col-lg-10 m-auto">
                <div class="column pt-5 mt-5 justify-content-center">
                    <div class="col-lg-12 mb-5 pb-5 about-text-why text-center">
                        Why Briotest?
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-about justify-content-center">
            <div class="col-lg-4">
                <div class="card p-4 m-res" style="border-radius: 10px">
                    <div class="card-body card-size">
                        <img class="m-auto d-block" src="{{ asset('assets/img/vector4.png') }}" height="140" alt="">
                        <p class="about-text-title1 text-center mt-4">Memenuhi Standar Bisafety Level</p>
                        <p class="about-text-title2 text-justify">Untuk mempersingkat waktu penyediaan dan memenuhi standar
                            Biosafety
                            Level (BSL) 2 Plus dengan
                            Negative Room sesuai standar WHO, kami membangun laboratorium yang dilengkapi peralatan dan
                            mesin yang telah terdaftar dalam rekomendasi Litbang Kemenkes dan rekomendasi Satgas Covid-19
                            sehingga dapat segera dioperasikan setelah dikirim dan dipasang</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-4" style="border-radius: 10px">
                    <div class="card-body card-size">
                        <img class="m-auto d-block" src="{{ asset('assets/img/vector5.png') }}" height="140" alt="">
                        <p class="about-text-title1 text-center mt-4">Tenaga Medis yang Terkualifikasi</p>
                        <p class="about-text-title2 text-justify">Kami memiliki tim dengan kualifikasi dokter spesialis
                            mikrobilogi klinis dan teknisi laboratorium qPCR aplikator, serta dokter dan tenaga kesehatan
                            berpengalaman dan bersertifikasi lainnya.</p>
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
        </div>
    </div>
@stop
