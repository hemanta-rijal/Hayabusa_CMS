@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner">
        <img src="{{ $page->image_link }}" class="bgbanner__img" alt="banner"/>
        <h2>{{ $page->{'main_title_' . config('app.locale')} }}</h2>
    </div>

    <div class="container">
        @forelse($events as $index => $event)
            @if($index == 0)
                <div class="bgbanner__two bgbanner__two--events" data-aos="fade-up">
                    <img src="{{ $event->thumbnail_link }}" class="image" alt="event"/>
                    <div class="banner-content">
                        <div class="title mb-4">
                            {{-- <div class="sub">Featured Event</div>--}}
                            <div class="main">{{ $event->{'title_' . config('app.locale')} }}</div>
                            <div class="flex">
                                <div class="time">
                                    <img src="{{ asset('frontend/svgs/calendar-outline-white.png') }}"
                                         alt="calendar" class="responsive-image icon"/>
                                    <span>{{ $event->{'date_' . config('app.locale')} }}</span>
                                </div>
                                <div class="time">
                                    <img src="{{ asset('frontend/svgs/time-outline-white.png') }}"
                                         alt="time" class="icon"/>
                                    <span>{{ $event->{'time_' . config('app.locale')} }}</span>
                                </div>
                            </div>
                        </div>
                        <button class="button mb-4"
                                onclick="window.location='{{ route('frontend.events.details', $event->slug) }}'">
                            @lang('site.event_pg.sign_up')
                        </button>
                    </div>
                </div>
            @else
                @if($index == 1)
                    <div class="d-flex">@endif
                        <div class="grid-3">
                            <div class="events__card"
                                 onclick="window.location='{{ route('frontend.events.details', $event->slug) }}'">
                                <img src="{{ $event->thumbnail_link }}" alt="event" class="image"/>
                                <div class="content">
                                    <h2>{{ $event->{'title_' . config('app.locale')} }}</h2>
                                    <div class="time">
                                        <img src="{{ asset('frontend/svgs/calendar-outline.png') }}"
                                             alt="calendar" class="responsive-image icon"/>
                                        <span>{{ $event->{'date_' . config('app.locale')} }}</span>
                                    </div>
                                    <div class="time">
                                        <img src="{{ asset('frontend/svgs/time-outline.png') }}"
                                             alt="time" class="icon"/>
                                        <span>{{ $event->{'time_' . config('app.locale')} }}</span>
                                    </div>
                                    <button onclick="window.location='{{ route('frontend.events.details', $event->slug) }}'"
                                            class="button">
                                        @lang('site.event_pg.view')
                                    </button>
                                </div>
                            </div>
                        </div>
                        @if($loop->last)</div>
                @endif
            @endif

        @empty
            <p data-aos="fade-up">@lang('site.event_pg.empty')</p>
        @endforelse
    </div>
@endsection
