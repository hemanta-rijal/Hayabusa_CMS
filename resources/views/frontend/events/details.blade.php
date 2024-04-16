@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner__two">
        <img src="{{ $event->thumbnail_link }}" class="image" alt="event" />
        <div class="banner-content">
            <div class="title mb-4">
                <div class="sub">@lang('site.event_pg.event')</div>
                <div class="main">{{ $event->{'title_' . config('app.locale')} }}</div>
            </div>
            <button class="button mb-4" onclick="window.location='{{ route('frontend.events') }}'">
                @lang('site.event_pg.back')
            </button>
        </div>
    </div>
    <div class="container">
        <div class="d-flex" style="justify-content: space-between">
            <div class="flex-50" data-aos="fade-up">
                <div class="sub-title">@lang('site.event_pg.details')</div>
                <div style="margin-top: 20px">
                    <div class="row opening-row">
                        <div class="col-md-12 col-lg-4 font-bold">@lang('site.event_pg.host')</div>
                        <div class="col-md-12 col-lg-8 font-grey">
                            {{ $event->{'title_' . config('app.locale')} }}
                        </div>
                    </div>
                    <div class="row opening-row">
                        <div class="col-md-12 col-lg-4 font-bold">@lang('site.event_pg.date')</div>
                        <div class="col-md-12 col-lg-8 font-grey">
                            {{ $event->{'date_' . config('app.locale')} }}
                        </div>
                    </div>
                    <div class="row opening-row">
                        <div class="col-md-12 col-lg-4 font-bold">@lang('site.event_pg.time')</div>
                        <div class="col-md-12 col-lg-8 font-grey">
                            {{ $event->{'time_' . config('app.locale')} }}
                        </div>
                    </div>
                    <div class="row opening-row">
                        <div class="col-md-12 col-lg-4 font-bold">@lang('site.event_pg.venue')</div>
                        <div class="col-md-12 col-lg-8 font-grey">
                            {{ $event->{'venue_' . config('app.locale')} }}
                        </div>
                    </div>
                    <div class="row opening-row">
                        <div class="col-md-12 col-lg-4 font-bold">@lang('site.event_pg.location')</div>
                        <div class="col-md-12 col-lg-8 font-grey">
                            {{ $event->{'location_' . config('app.locale')} }}
                        </div>
                    </div>
                    <div class="row opening-row">
                        <div class="col-md-12 col-lg-4 font-bold">@lang('site.event_pg.entry_fee')</div>
                        <div class="col-md-12 col-lg-8 font-grey">
                            {{ $event->{'entry_fee_' . config('app.locale')} }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-50" data-aos="fade-up">
                <p class="grey">
                    {!! $event->{'description_' . config('app.locale')} !!}
                </p>
                <button class="button" onclick="scrollToEventForm()">
                    @lang('site.event_pg.sign_up')
                </button>
            </div>
        </div>
    </div>

    @if (count($event->images) > 0)
        <div class="container" data-aos="fade-up">
            <div class="sub-title">@lang('site.event_pg.gallery')</div>
            <div class="heading">
                <div class="main-title ">@lang('site.event_pg.related_img')</div>
            </div>
            <div class="d-flex">
                @foreach ($event->images as $image)
                    <div class="grid-3">
                        <div class="image">
                            <a class="fancybox__image" href={{ $image->image_link }}><img src="{{ $image->image_link }}"
                                    alt="image" /></a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <div class="container" id="event-form">
        <div class="d-flex events-flex" style="justify-content: space-between">
            <div class="flex-50" data-aos="fade-up">
                <div class="bgbanner__events">
                    <img src="{{ $page->detail_image_link }}" class="image" alt="img" />
                    <div class="banner-content">
                        <div class="title mb-4">
                            <div class="sub-title">
                                {{ $page->{'sup_title_' . config('app.locale')} }}
                            </div>
                            <div class="main">{{ $page->{'title_' . config('app.locale')} }}</div>
                            <p>
                                {{ $page->{'sub_title_' . config('app.locale')} }}
                            </p>
                        </div>
                        <button class="button mb-4" onclick="window.location='{{ $page->link }}'">
                            {{ $page->{'button_text_' . config('app.locale')} }}
                        </button>
                    </div>
                </div>

            </div>
            <div class="flex-50" data-aos="fade-up">
                <div class="heading">
                    <div class="main-title ">{{ $page->{'form_title_' . config('app.locale')} }}</div>
                </div>
                <p class="grey">
                    {{ $page->{'form_sub_title_' . config('app.locale')} }}
                </p>
                <form action="{{ route('frontend.events.participate') }}" method="POST">
                    @csrf
                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                    <div class="row mb-4">
                        <div class="col">
                            <label for="fullName" class="form-label">
                                @lang('site.event_pg.name')
                                <span class="text-danger"> *</span>
                            </label>
                            <input type="text" class="form-control" name="name" id="fullName" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="email" class="form-label">
                                @lang('site.event_pg.email')
                                <span class="text-danger"> *</span>
                            </label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="col">
                            <label for="phone" class="form-label">
                                @lang('site.event_pg.phone')
                                <span class="text-danger"> *</span>
                            </label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <label for="details" class="form-label">@lang('site.event_pg.add_detail')</label>
                            <textarea class="form-control" name="details" id="details" rows="4"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="button" style="float: right">
                        @lang('site.event_pg.sign_up')
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('custom-js')
    <script>
        function scrollToEventForm() {
            const eventFormElement = document.getElementById('event-form');
            if (eventFormElement) {
                eventFormElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>
@endpush
