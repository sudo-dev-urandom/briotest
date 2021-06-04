@extends('layout')
@section('content')
    <div class="container-fluid" style="padding-top: 98px; background: #F7F8F9;">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15868.113745055785!2d106.7453852!3d-6.1268757!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6af8ff8423ea24b9!2sBriotest%20Lab!5e0!3m2!1sid!2sid!4v1622791626280!5m2!1sid!2sid"
                    width="100%" class="p-lg-4" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-lg-6 pl-lg-5">
                <div class="column">
                    <div class="col">
                        <p class="contact-text-title1">
                            Contact Info
                        </p>
                    </div>
                    <div class="col">
                        <p class="contact-text-title2">
                            (021) 215-843-92
                            Sentra Industri Elang Laut 1 & 2 Blok B8, Jakarta Utara
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-lg-5">
                <div class="card" style="border-radius: 10px">
                    <div class="card-body">
                        <p>Contact Us</p>
                        <input class="form-control form-control-md" type="text" placeholder="Name">
                        <input class="form-control form-control-md mt-lg-4" type="tel" placeholder="Phone Number">
                        <input class="form-control form-control-md mt-lg-4" type="email" placeholder="Email">
                        <textarea class="form-control mt-lg-4" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Message"></textarea>
                        <div class="col text-right px-0 py-3">
                            <button type="button" class="btn px-5" style="background: #2CA58D; color: #ffffff">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
