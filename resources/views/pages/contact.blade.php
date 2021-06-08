@extends('layout')
@section('content')
    <div class="container-fluid" style="padding-top: 98px; background: #F7F8F9;">
        <div class="row pb-5">
            <div class="col-lg-6 px-lg-5">
                <div class="card" style="border-radius: 10px">
                    <form method="POST" action="/send-email">
                        @csrf
                        <div class="card-body">
                            <p>Contact Us</p>
                            <input class="form-control form-control-md mb-3" type="text" placeholder="Name" name="name"
                                required>
                            <input class="form-control form-control-md mt-lg-4 mb-3" type="tel" placeholder="Phone Number"
                                name="phone" required>
                            <input class="form-control form-control-md mt-lg-4 mb-3" type="email" placeholder="Email"
                                name="email" required>
                            <textarea name="message" class="form-control mt-lg-4" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Message" required></textarea>
                            <div class="col text-right px-0 py-3">
                                <button type="submit" class="btn px-5"
                                    style="background: #2CA58D; color: #ffffff">Send</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-6 pl-lg-5">
                <div class="column">
                    <p class="contact-text-title1 m-0">
                        Contact Info
                    </p>
                    <p class="contact-text-title2 m-0">
                        (021) 215-843-92
                    </p>
                    <p class="contact-text-title2 m-0">
                        Sentra Industri Elang Laut 1 & 2 Blok B8, Jakarta Utara
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop
