@php
    $contactPage = !$contactPage->isEmpty() ? json_decode($contactPage->first()->value_en) : null;
@endphp

@extends('frontend.layouts.master')
@section('content')
    <div class="map">
        {!! $siteData->map !!}
    </div>
    <div class="bgbanner-details" data-aos="fade-up">
        <p>
            {{ optional($contactPage)->{'contact_page_description_'.config('app.locale')} }} 
        </p>
        {!! convertJsonToButton(optional($contactPage)->button,'button') !!}
    </div>

    <div class="container">
        <div class="d-flex events-flex" style="justify-content: space-between">
            <div class="flex-50" data-aos="fade-up">
                <div class="bg__contact">
                    <div class="heading">
                        <div class="main-title ">{{ optional($contactPage)->{'send_message_title_'.config('app.locale')} }} </div>
                    </div>
                    <p class="grey">
                        {{ optional($contactPage)->{'send_message_description_'.config('app.locale')} }}
                    </p>
                    <div class="d-flex flex__column">
                        <div class="contact__item">
                            <div class="icon__pink">
                                <img src={{ asset('frontend/svgs/phone.svg') }} />
                            </div>
                            <div class="content">
                                <p class="title">@lang('site.contact form.Phone')</p>
                                <p class="bold">01-4002139 | 01-4002151</p>
                            </div>
                        </div>
                        <div class="contact__item">
                            <div class="icon__pink">
                                <img src={{ asset('frontend/svgs/pin.svg') }} />
                            </div>
                            <div class="content">
                                <p class="title">@lang('site.contact form.Location')</p>
                                <p class="bold">Rani Bari, Lazimpat, Kathmandu</p>
                            </div>
                        </div>
                        <div class="contact__item">
                            <div class="icon__pink">
                                <img src={{ asset('frontend/svgs/mail.svg') }} />
                            </div>
                            <div class="content">
                                <p class="title">@lang('site.contact form.Email')</p>
                                <p class="bold">info@hayabusaconsultancy.com</p>
                            </div>
                        </div>
                    </div>
                    <p class="grey">{{ optional($contactPage)->{'social_icon_title_'.config('app.locale')} }}
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
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="row mb-4">
                        <div class="col">
                            <label for="full_name" class="form-label">@lang('site.contact form.Full Name')</label>
                            <input type="text" class="form-control" id="full_name" name="full_name">
                            @include('backend.shared.form_field_error', ['name' => 'full_name'])
                        </div>
                        <div class="col">
                            <label for="email" class="form-label">@lang('site.contact form.Email Address')</label>
                            <input type="email" class="form-control" id="email" name="email">
                            @include('backend.shared.form_field_error', ['name' => 'email'])
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="phone" class="form-label">@lang('site.contact form.Phone Number')</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                            @include('backend.shared.form_field_error', ['name' => 'phone'])
                        </div>
                        <div class="col">
                            <label for="service" class="form-label">@lang('site.contact form.Service')</label>
                            <input type="text" class="form-control" id="service" name="service">
                            @include('backend.shared.form_field_error', ['name' => 'service'])
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="day" class="form-label">@lang('site.contact form.Set a day')</label>
                            <input type="text" class="form-control" id="day" name="day">
                            @include('backend.shared.form_field_error', ['name' => 'day'])
                        </div>
                        <div class="col">
                            <label for="time" class="form-label">@lang('site.contact form.Set a time')</label>
                            <input type="text" class="form-control" id="time" name="time">
                            @include('backend.shared.form_field_error', ['name' => 'time'])
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <label for="details" class="form-label">@lang('site.contact form.Additional Details')</label>
                            <textarea class="form-control" id="details" name="details" rows="4"></textarea>
                            @include('backend.shared.form_field_error', ['name' => 'details'])
                        </div>
                    </div>
                    <input type="submit" class="button" style="float: right" value="@lang('site.contact form.Send Message')">
                </form>
            </div>
        </div>
    </div>
@endsection
