@extends('layout')
@section('content')


    <div class="container-fluid" style="padding-top: 150px; background: #F7F8F9;">
        <div class="row mb-3 justify-content-center">
            <div class="col-lg-6 pb-lg-2 mb-lg-2 text-center services-text-title">Our Team</div>
        </div>
        <div class="row m-lg-5 p-lg-2 justify-content-center">
            <div class="col-lg-3 mb-4">
                <div class="card ourteam-card-size">
                    <img style="border-radius: 10px 10px 0 0" src="{{ asset('assets/img/teambaskara.png') }}" alt="">
                    <div class="card-body bg-home1 p-2">
                        <p class="text-center ourteam-card-text1">Baskara Harimukti Sukarya</p>
                        <p class="text-center ourteam-card-text2">Komisaris Utama</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card ourteam-card-size">
                    <img style="border-radius: 10px 10px 0 0" src="{{ asset('assets/img/teamjamil.png') }}" alt="">
                    <div class="card-body bg-home1 p-2">
                        <p class="text-center ourteam-card-text1">Jamil Mubarok</p>
                        <p class="text-center ourteam-card-text2">Direktur</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card ourteam-card-size">
                    <img style="border-radius: 10px 10px 0 0" src="{{ asset('assets/img/teamirma.png') }}" alt="">
                    <div class="card-body bg-home1 p-2">
                        <p class="text-center ourteam-card-text1">Irma Rosmalawati</p>
                        <p class="text-center ourteam-card-text2">Direktur Utama</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card ourteam-card-size">
                    <img style="border-radius: 10px 10px 0 0" src="{{ asset('assets/img/teamwiwing.png') }}" alt="">
                    <div class="card-body bg-home1 p-2">
                        <p class="text-center ourteam-card-text1">Dr. Veronica Wiwing, Sp, MK</p>
                        <p class="text-center ourteam-card-text2">Penanggung Jawab Laboratorium</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-lg-5 mb-lg-5 justify-content-center">
        </div>
    </div>

@stop
