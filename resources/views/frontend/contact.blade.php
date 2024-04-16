@php
    
@endphp

@extends('frontend.layouts.master')
@section('content')
    <div class="map">
        {!! $siteData->map !!}
    </div>

    <div class="container">
        <div class="d-flex events-flex" style="justify-content: space-between">
            <div class="flex-50" data-aos="fade-up">
                <div class="bg__contact">
                    <div class="heading">
                        <div class="main-title ">Send Us A Message</div>
                    </div>
                    <p class="grey">If you have any questions regarding recruitment or recruitment, please contact us via
                        message or inquiry.
                    </p>
                    <div class="d-flex flex__column">
                        <div class="contact__item">
                            <div class="icon__pink">
                                <img src={{ asset('frontend/svgs/phone.svg') }} />
                            </div>
                            <div class="content">
                                <p class="title">Phone</p>
                                <p class="bold">01-4002139 | 01-4002151</p>
                            </div>
                        </div>
                        <div class="contact__item">
                            <div class="icon__pink">
                                <img src={{ asset('frontend/svgs/pin.svg') }} />
                            </div>
                            <div class="content">
                                <p class="title">Location</p>
                                <p class="bold">Rani Bari, Lazimpat, Kathmandu</p>
                            </div>
                        </div>
                        <div class="contact__item">
                            <div class="icon__pink">
                                <img src={{ asset('frontend/svgs/mail.svg') }} />
                            </div>
                            <div class="content">
                                <p class="title">Email</p>
                                <p class="bold">info@hayabusaconsultancy.com</p>
                            </div>
                        </div>
                    </div>
                    <p class="grey">Follow us in social media
                    </p>
                    <div class="d-flex flex-20 justify__content__mmd">
                        <div class="icon__pink">
                            <img src={{ asset('frontend/svgs/facebook.svg') }} alt="facebook" />
                        </div>
                        <div class="icon__pink">
                            <img src={{ asset('frontend/svgs/youtube.svg') }} alt="youtube" />
                        </div>
                        <div class="icon__pink">
                            <img src={{ asset('frontend/svgs/linkedin.svg') }} alt="linkedin" />
                        </div>
                        <div class="icon__pink">
                            <img src={{ asset('frontend/svgs/tik-tok.svg') }} alt="tiktok"
                                style="width:18px; height:auto" />
                        </div>
                        <div class="icon__pink">
                            <img src={{ asset('frontend/svgs/twitter.svg') }} alt="youtube" />
                        </div>
                        <div class="icon__pink">
                            <img src={{ asset('frontend/svgs/instagram.svg') }} alt="instagram"
                                style="width: 30px; height:auto" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex-50" data-aos="fade-up">
                <form action="#">
                    <div class="row mb-4">
                        <div class="col">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName">
                        </div>
                        <div class="col">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="col">
                            <label for="service" class="form-label">Service</label>
                            <input type="text" class="form-control" id="service">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="day" class="form-label">Set a day</label>
                            <input type="text" class="form-control" id="day">
                        </div>
                        <div class="col">
                            <label for="time" class="form-label">Set a time</label>
                            <input type="text" class="form-control" id="time">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <label for="details" class="form-label">Additional Details</label>
                            <textarea class="form-control" id="details" rows="4"></textarea>
                        </div>
                    </div>
                </form>
                <button class="button" style="float: right">Send Message</button>
            </div>
        </div>
    </div>
@endsection
