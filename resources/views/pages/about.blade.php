@extends('layout')
@section('content')

    <div class="container-fluid m-0 p-0">
        <div class="row justify-content-center row-bg" style="margin-top: 72px">
            <div class="col-lg-11 px-lg-5 m-auto">
                <div class="card align-items-center">
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
                    <div class="col-lg-12 text-center mt-3">
                        <div class="row pb-5 justify-content-center">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="p-5 m-2 text-justify about-text-card">
                                            Untuk mempersingkat waktu penyediaan dan memenuhi standar Biosafety Level (BSL)
                                            2
                                            Plus dengan Negative Room sesuai standar WHO, kami membangun laboratorium yang
                                            dilengkapi peralatan dan mesin yang telah terdaftar dalam rekomendasi Litbang
                                            Kemenkes dan rekomendasi Satgas Covid-19 sehingga dapat segera dioperasikan
                                            setelah
                                            dikirim dan dipasang
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card" style="border-radius: 10px">
                                    <img class="card-img-top" src="{{ asset('assets/img/imagebenefit2.png') }}"
                                        alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2 pb-5 justify-content-center">
                            <div class="col-lg-6">
                                <div class="card" style="border-radius: 10px">
                                    <img class="card-img-top" src="{{ asset('assets/img/imagebenefit1.png') }}"
                                        alt="image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="p-5 m-2 text-justify about-text-card">
                                            Untuk mempersingkat waktu penyediaan dan memenuhi standar Biosafety Level (BSL)
                                            2
                                            Plus dengan Negative Room sesuai standar WHO, kami membangun laboratorium yang
                                            dilengkapi peralatan dan mesin yang telah terdaftar dalam rekomendasi Litbang
                                            Kemenkes dan rekomendasi Satgas Covid-19 sehingga dapat segera dioperasikan
                                            setelah
                                            dikirim dan dipasang
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background: #F7F8F9; padding-bottom: 103px">
            <div class="row justify-content-center" style="padding-top: 104px">
                <div class="col-lg-6 text-center home-text-title">Our Laboratory</div>
            </div>
            <div class="column justify-content-center" style="margin-top: 103px">
                <div class="row my-lg-5 py-lg-4">
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('assets/img/imagehome1.png') }}" width="400" height="400" alt="image">
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('assets/img/imagehome2.png') }}" width="400" height="400" alt="image">
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('assets/img/imagehome3.png') }}" width="400" height="400" alt="image">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('assets/img/imagehome4.png') }}" width="400" height="400" alt="image">
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('assets/img/imagehome5.png') }}" width="400" height="400" alt="image">
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('assets/img/imagehome6.png') }}" width="400" height="400" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
