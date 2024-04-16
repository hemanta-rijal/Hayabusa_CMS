@php
    $testimonials = [
        ['img' => 'frontend/jpgs/testimonial1.png', 'name' => 'Emily Jhonson', 'title' => 'Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.', 'desc' => 'I cannot express how grateful I am to Hayabusa Consultancy for their exceptional services in helping me prepare for my journey to Japan.', 'videoId' => 'y9YdkP-6d_E'],
        ['img' => 'frontend/jpgs/testimonial1.png', 'name' => 'Emily Jhonson', 'title' => 'Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.', 'desc' => 'I cannot express how grateful I am to Hayabusa Consultancy for their exceptional services in helping me prepare for my journey to Japan.', 'videoId' => 'r8xpQ6n-Zjs'],
        ['img' => 'frontend/jpgs/testimonial1.png', 'name' => 'Emily Jhonson', 'title' => 'Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.', 'desc' => 'I cannot express how grateful I am to Hayabusa Consultancy for their exceptional services in helping me prepare for my journey to Japan.', 'videoId' => 'nVJJ_ivgELA'],
        ['img' => 'frontend/jpgs/testimonial1.png', 'name' => 'Emily Jhonson', 'title' => 'Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.', 'desc' => 'I cannot express how grateful I am to Hayabusa Consultancy for their exceptional services in helping me prepare for my journey to Japan.', 'videoId' => 'H7bzyggFYSE'],
        ['img' => 'frontend/jpgs/testimonial1.png', 'name' => 'Emily Jhonson', 'title' => 'Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.', 'desc' => 'I cannot express how grateful I am to Hayabusa Consultancy for their exceptional services in helping me prepare for my journey to Japan.', 'videoId' => 'Sh8ZYHnb86c'],
        ['img' => 'frontend/jpgs/testimonial1.png', 'name' => 'Emily Jhonson', 'title' => 'Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.', 'desc' => 'I cannot express how grateful I am to Hayabusa Consultancy for their exceptional services in helping me prepare for my journey to Japan.', 'videoId' => '0bfk90rWV9U'],
    ];
    $testimonials2 = [['img' => 'frontend/jpgs/testimonial1.png', 'name' => 'Emily Jhonson', 'title' => 'Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.', 'desc' => 'I cannot express how grateful I am to Hayabusa Consultancy for their exceptional services in helping me prepare for my journey to Japan.', 'videoId' => 'y9YdkP-6d_E'], ['img' => 'frontend/jpgs/testimonial1.png', 'name' => 'Emily Jhonson', 'title' => 'Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.', 'desc' => 'I cannot express how grateful I am to Hayabusa Consultancy for their exceptional services in helping me prepare for my journey to Japan.', 'videoId' => 'r8xpQ6n-Zjs']];
    $tabs = [['key' => 'student', 'title' => 'Student Testimonial'], ['key' => 'client', 'title' => 'Client Testimonial']];
@endphp

@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner">
        <img src={{ asset('frontend/jpgs/bg1.png') }} class="bgbanner__img" />
        <h2>@lang('site.testimonials.testimonial')</h2>
    </div>

    <section id="tabs" class="container tabs__pink" data-aos="fade-up">
        <ul class="nav nav-tabs wide-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link{{ $activeTab == 'student' ? ' active' : '' }} services-nav-link services-nav-link"
                    id="nav-student-tab" data-bs-toggle="tab" data-bs-target="#nav-student" type="button" role="tab"
                    aria-controls="nav-student" aria-selected="{{ $activeTab == 'student' ? 'true' : 'false' }}">
                    @lang('site.testimonials.student')
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link{{ $activeTab == 'client' ? ' active' : '' }} services-nav-link services-nav-link"
                    id="nav-client-tab" data-bs-toggle="tab" data-bs-target="#nav-client" type="button" role="tab"
                    aria-controls="nav-client" aria-selected="{{ $activeTab == 'client' ? 'true' : 'false' }}">
                    @lang('site.testimonials.client')
                </button>
            </li>
        </ul>
        <div class="tab-content testimonial-tab" id="myTabContent">
            <div class="tab-pane fade{{ $activeTab == 'student' ? ' show active' : '' }} services-tab-pane" id="nav-student"
                role="tabpanel" aria-labelledby="nav-student-tab"
                style="{{ $activeTab == 'student' ? '' : 'display: none;' }}">
                <div class="row" style="justify-content: space-between" data-aos="fade-up">
                    @foreach ($studentTestimonials as $index => $testimonial)
                        <div class="col-xs-12 col-md-6">
                            <div class="testimonial-card mb-4">
                                <div class="testimonial-card--container">
                                    @if (isset($testimonial->youtube))
                                        <img src="{{ $testimonial->image_link }}" style="height: 100% ;width:100%"
                                            alt="img"
                                            onclick="playVideo(
                                             'student-video-{{ $index }}', '{{ $testimonial->youtube }}',
                                             'student-card--close-{{ $index }}', 'student-card--play-{{ $index }}')" />
                                        <div id="{{ 'student-video-' . $index }}" class="card--video"></div>

                                        <div class="card--play" id='student-card--play-{{ $index }}'
                                            onclick="playVideo(
                                             'student-video-{{ $index }}', '{{ $testimonial->youtube }}',
                                             'student-card--close-{{ $index }}', 'student-card--play-{{ $index }}')">
                                            <img src="{{ asset('frontend/icons/play.png') }}" alt="img" />
                                        </div>
                                        <div class="card--close" id='student-card--close-{{ $index }}'
                                            onclick="closeVideo(
                                         'student-video-{{ $index }}',
                                         'student-card--close-{{ $index }}',
                                         'student-card--play-{{ $index }}')">
                                            <img src="{{ asset('frontend/icons/close.png') }}" alt="img" />
                                        </div>
                                        <div class="card--name">
                                            <div class="pills">
                                                <div class="pills-text">
                                                    {{ $testimonial->{'name_' . config('app.locale')} }}</div>
                                            </div>
                                        </div>
                                    @else
                                        <img src="{{ $testimonial->image_link }}" class="card--image" alt="img" />
                                        <div class="card--name">
                                            <div class="pills">
                                                <div class="pills-text">
                                                    {{ $testimonial->{'name_' . config('app.locale')} }}</div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="testimonial-card--title">
                                    {{ $testimonial->{'tagline_' . config('app.locale')} }}</div>
                                <div class="testimonial-card--details">
                                    {!! $testimonial->{'testimonial_' . config('app.locale')} !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="tab-pane fade{{ $activeTab == 'client' ? ' show active' : '' }} services-tab-pane" id="nav-client"
                role="tabpanel" aria-labelledby="nav-client-tab"
                style="{{ $activeTab == 'client' ? '' : 'display: none;' }}">
                <div class="d-flex" data-aos="fade-up">
                    @foreach ($clientTestimonials as $index => $testimonial)
                        <div class="grid-2">
                            <div class="testimonial-card mb-4">
                                <div class="testimonial-card--container">
                                    @if (isset($testimonial->youtube))
                                        <img src="{{ $testimonial->image_link }}" class="card--image" alt="img"
                                            onclick="playVideo(
                                             'client-video-{{ $index }}', '{{ $testimonial->youtube }}',
                                             'client-card--close-{{ $index }}', 'client-card--play-{{ $index }}')" />
                                        <div id="{{ 'client-video-' . $index }}" class="card--video"></div>

                                        <div class="card--play" id='client-card--play-{{ $index }}'
                                            onclick="playVideo(
                                             'client-video-{{ $index }}', '{{ $testimonial->youtube }}',
                                             'client-card--close-{{ $index }}', 'client-card--play-{{ $index }}')">
                                            <img src="{{ asset('frontend/icons/play.png') }}" alt="img" />
                                        </div>
                                        <div class="card--close" id='client-card--close-{{ $index }}'
                                            onclick="closeVideo(
                                         'client-video-{{ $index }}',
                                         'client-card--close-{{ $index }}',
                                         'client-card--play-{{ $index }}')">
                                            <img src="{{ asset('frontend/icons/close.png') }}" alt="img" />
                                        </div>
                                        <div class="card--name">
                                            <div class="pills">
                                                <div class="pills-text">
                                                    {{ $testimonial->{'name_' . config('app.locale')} }}</div>
                                            </div>
                                        </div>
                                    @else
                                        <img src="{{ $testimonial->image_link }}" class="card--image" alt="img" />
                                        <div class="card--name">
                                            <div class="pills">
                                                <div class="pills-text">
                                                    {{ $testimonial->{'name_' . config('app.locale')} }}</div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="testimonial-card--title">
                                    {{ $testimonial->{'tagline_' . config('app.locale')} }}</div>
                                <div class="testimonial-card--details">
                                    {!! $testimonial->{'testimonial_' . config('app.locale')} !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </section>
@endsection

@push('custom-js')
    <script type="text/javascript">
        function playVideo(id, videoLink, closeId, playId) {
            const playerDiv = document.getElementById(id);
            const playBtn = document.getElementById(playId);
            const close = document.getElementById(closeId);
            playerDiv.style.display = "block";
            playBtn.style.display = "none";
            close.style.display = "block";
            playerDiv.innerHTML = '<iframe id="videoPlayer-' + id + '" src="' + videoLink +
                '?enablejsapi=1&version=3&playerapiid=ytplayer&controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';

            const player = new YT.Player("videoPlayer-" + id, {
                events: {
                    onReady: function(event) {
                        event.target.playVideo();
                    }
                }
            });
        }

        function closeVideo(id, closeId, playId) {
            const playerDiv = document.getElementById(id);
            const playButton = document.getElementById(playId);
            const closeButton = document.getElementById(closeId);

            playerDiv.innerHTML = "";
            playerDiv.style.display = "none";
            playButton.style.display = "block";
            closeButton.style.display = "none";
        }

        document.addEventListener('DOMContentLoaded', function() {
            const navTabs = document.querySelectorAll('.services-nav-link');
            const tabPanes = document.querySelectorAll('.services-tab-pane');

            navTabs.forEach(function(navTab) {
                navTab.addEventListener('click', function(event) {
                    event.preventDefault();
                    const selectedTabId = this.getAttribute('data-bs-target').replace('#', '');
                    tabPanes.forEach(function(tabPane) {
                        if (tabPane.id === selectedTabId) {
                            tabPane.style.display = 'block';
                            tabPane.style.opacity = '1';
                        } else {
                            tabPane.style.display = 'none';
                            tabPane.style.opacity = '0';
                        }
                    });
                });
            });
        });
    </script>
@endpush
