@extends('layout')
@section('content')

    <div class="container-fluid" style="margin-top: 150px">
        <div class="row pb-lg-5 mb-lg-5 justify-content-center">
            <div class="col-lg-6 pb-lg-2 mb-lg-2 text-center services-text-title">Our Services</div>
        </div>
        <div class="row mx-lg-5 pt-lg-5 mt-lg-5 justify-content-center align-items-center">
            <div class="col-lg-4 text-center">
                <div class="card services-card-bg">
                    <div class="card-body m-lg-5">
                        <div class="mt-lg-5">
                            <img src="{{ asset('assets/img/vector1.png') }}" width="114" height="147" alt="">
                            <p class="pt-lg-3 pb-lg-0 services-text-card">Lab Service</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="card services-card-bg">
                    <div class="card-body my-lg-5 mx-lg-2">
                        <div class="mt-lg-5">
                            <img src="{{ asset('assets/img/vector2.png') }}" width="136" height="136" alt="">
                            <p class="pt-lg-3 services-text-card">Home Service</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="card services-card-bg">
                    <div class="card-body my-lg-5 mx-lg-2">
                        <div class="mt-lg-4">
                            <img src="{{ asset('assets/img/vector3.png') }}" width="164" height="164" alt="">
                            <p class="pt-lg-3 services-text-card">Corporate Service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-home justify-content-center" style="margin-top: 150px">
            <div id="carouselExampleControls" class="carousel slide w-100" data-interval="false" data-ride="carousel">
                <div class="container">
                    <div class="row py-lg-4 my-lg-5">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="card service-card-height">
                                            <div class="card-body p-0">
                                                <div class="container">
                                                    <div class="row py-lg-5 my-lg-5">
                                                        <div class="col-lg-12">
                                                            <p class="m-0 text-center service-card-text1">
                                                                Rapid Swab Antigen
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <p class="m-0 text-center service-card-text2">
                                                                Rp 200,000
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="card service-card-height">
                                            <div class="card-body p-0">
                                                <div class="container">
                                                    <div class="row py-lg-5 my-lg-5">
                                                        <div class="col-lg-12">
                                                            <p class="m-0 text-center service-card-text1">
                                                                Test Antibodi Netralisasi Covid-19
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <p class="m-0 text-center service-card-text2">
                                                                Rp 300,000
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="card service-card-height">
                                            <div class="card-body p-0">
                                                <div class="container">
                                                    <div class="row py-lg-5 my-lg-5">
                                                        <div class="col-lg-12">
                                                            <p class="m-0 text-center service-card-text1">
                                                                Day + 1 PCR Test
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <p class="m-0 text-center service-card-text2">
                                                                Rp 800,000
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="card service-card-height">
                                            <div class="card-body p-0">
                                                <div class="container">
                                                    <div class="row py-lg-5 my-lg-5">
                                                        <div class="col-lg-12">
                                                            <p class="m-0 text-center service-card-text1">
                                                                12 Hours PCR Test
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <p class="m-0 text-center service-card-text2">
                                                                Rp 1,000,000
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="card service-card-height">
                                            <div class="card-body p-0">
                                                <div class="container">
                                                    <div class="row py-lg-5 my-lg-5">
                                                        <div class="col-lg-12">
                                                            <p class="m-0 text-center service-card-text1">
                                                                6 Hours PCR Test
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <p class="m-0 text-center service-card-text2">
                                                                Rp 1,500,000
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

@stop
