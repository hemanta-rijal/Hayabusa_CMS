@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner">
        <img src="{{ $studentService->images['image'] }}" class="bgbanner__img" alt="img"/>
        <h2>{{ $studentService->{'main_title_' . config('app.locale')} }}</h2>
    </div>

    <section id="tabs" class="container tabs__pink" data-aos="fade-up">
        <ul class="nav nav-tabs wide-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $activeTab == 'student' ? ' active' : '' }} services-nav-link"
                        id="nav-student-tab servicesTab" data-bs-toggle="tab"
                        data-bs-target="#nav-student" type="button" role="tab"
                        aria-controls="nav-student" aria-selected="true">
                    @lang('site.services.student_tab')
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $activeTab == 'client' ? ' active' : '' }} services-nav-link"
                        id="nav-client-tab servicesTab" data-bs-toggle="tab"
                        data-bs-target="#nav-client" type="button" role="tab"
                        aria-controls="nav-client" aria-selected="false">
                    @lang('site.services.client_tab')
                </button>
            </li>
        </ul>
    </section>
    <div class="container">
        <div class="tab-pane fade {{ $activeTab == 'student' ? ' show active' : '' }} services-tab-pane"
             id="nav-student" style="{{ $activeTab == 'client' ? 'display: none' : '' }}"
             role="tabpanel" aria-labelledby="nav-student-tab">
            <div class="sub-title" data-aos="fade-up">{{ $studentService->{'sub_title_' . config('app.locale')} }}</div>
            <div class="heading">
                <div class="main-title" data-aos="fade-up">
                    {{ $studentService->{'title_' . config('app.locale')} }}
                </div>
            </div>
            <div class="d-flex" style="justify-content: space-between">
                <div class="flex-50" data-aos="fade-up">
                    <img src="{{ $studentService->images['page_image'] }}" style="width: 100%" class="mr-5" alt="img"/>
                </div>
                <div class="flex-50" data-aos="fade-up">
                    <p class="grey">
                        {!! $studentService->{'description_' . config('app.locale')} !!}
                    </p>
                    <button class="button" onclick="window.location='{{ route('frontend.contact') }}'">
                        {{ $studentService->{'button_text_' . config('app.locale')} }}
                    </button>
                </div>
            </div>
        </div>
        <div class="tab-pane fade {{ $activeTab == 'client' ? ' show active' : '' }} services-tab-pane" id="nav-client"
             role="tabpanel" aria-labelledby="nav-client-tab"
             style="{{ $activeTab == 'student' ? 'display: none' : '' }}">
            <div class="sub-title" data-aos="fade-up">{{ $clientService->{'sub_title_' . config('app.locale')} }}</div>
            <div class="heading">
                <div class="main-title" data-aos="fade-up">
                    {{ $clientService->{'title_' . config('app.locale')} }}
                </div>
            </div>
            <div class="d-flex" style="justify-content: space-between">
                <div class="flex-50" data-aos="fade-up">
                    <img src="{{ $clientService->images['page_image'] }}" width="100%" class="mr-5" alt="img"/>
                </div>
                <div class="flex-50" data-aos="fade-up">
                    <p class="grey">
                        {!! $clientService->{'description_' . config('app.locale')} !!}
                    </p>
                    <button class="button" onclick="window.location='{{ route('frontend.contact') }}'">
                        {{ $clientService->{'button_text_' . config('app.locale')} }}
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-grey" data-aos="fade-up">
        <div class="container">
            <div class="tab-pane fade {{ $activeTab == 'student' ? ' show active' : '' }} services-tab-pane"
                 id="nav-student" style="{{ $activeTab == 'client' ? 'display: none' : '' }}" role="tabpanel"
                 aria-labelledby="nav-student-tab">
                <div class="d-flex align-items-start vertical-tabs">
                    <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical"
                         data-aos="fade-up">
                        @foreach ($studentService->services as $index => $service)
                            <button class="nav-link{{ $index == 0 ? ' active' : '' }}"
                                    id="v-pills-tab-{{ $index }}" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-content-{{ $index }}" type="button" role="tab"
                                    aria-controls="v-pills-content-{{ $index }}"
                                    aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                {{ $service['title_' . config('app.locale')] }}
                            </button>
                        @endforeach
                    </div>
                    <div class="tab-content" id="v-pills-tabContent" data-aos="fade-up">
                        @foreach ($studentService->services as $index => $service)
                            <div class="tab-pane fade{{ $index == 0 ? ' show active' : '' }}"
                                 id="v-pills-content-{{ $index }}" role="tabpanel"
                                 aria-labelledby="v-pills-tab-{{ $index }}">
                                <h2>
                                    {{ $service['title_' . config('app.locale')] }}
                                </h2>
                                <img src="{{ $studentService->images['services'][$index] }}"/>
                                <p> {{ $service['description_' . config('app.locale')] }}</p>
                                <button onclick="window.location='{{ route('frontend.contact') }}'" class="button">
                                    @lang('site.services.enquire')
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="tab-pane fade {{ $activeTab == 'client' ? ' show active' : '' }} services-tab-pane"
                 id="nav-client" role="tabpanel" aria-labelledby="nav-client-tab"
                 style="{{ $activeTab == 'student' ? 'display: none' : '' }}">
                <div class="d-flex align-items-start vertical-tabs">
                    <div class="nav flex-column" id="v-pills-client-tab" role="tablist" aria-orientation="vertical"
                         data-aos="fade-up">
                        @foreach ($clientService->services as $index => $service)
                            <button class="nav-link{{ $index == 0 ? ' active' : '' }}"
                                    id="v-pills-client-tab-{{ $index }}" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-client-content-{{ $index }}" type="button" role="tab"
                                    aria-controls="v-pills-client-content-{{ $index }}"
                                    aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                {{ $service['title_' . config('app.locale')] }}
                            </button>
                        @endforeach
                    </div>
                    <div class="tab-content" id="v-pills-client-tabContent" data-aos="fade-up">
                        @foreach ($clientService->services as $index => $service)
                            <div class="tab-pane fade{{ $index == 0 ? ' show active' : '' }}"
                                 id="v-pills-client-content-{{ $index }}" role="tabpanel"
                                 aria-labelledby="v-pills-client-tab-{{ $index }}">
                                <h2>
                                    {{ $service['title_' . config('app.locale')] }}
                                </h2>
                                <img src="{{ $clientService->images['services'][$index] }}"/>
                                <p> {{ $service['description_' . config('app.locale')] }}</p>
                                <button onclick="window.location='{{ route('frontend.contact') }}'" class="button">
                                    @lang('site.services.enquire')
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container" data-aos="fade-up">
            @if(count($studentTestimonials) > 0)
                <div class="tab-pane fade{{ $activeTab == 'student' ? ' show active' : '' }} services-tab-pane"
                 id="nav-student" role="tabpanel" aria-labelledby="nav-student-tab"
                 style="{{ $activeTab == 'client' ? 'display: none;' : '' }}">
                <div class="sub-title">@lang('site.services.think')</div>
                <div class="heading">
                    <div class="main-title" style="text-transform: capitalize">@lang('site.testimonials.student')</div>
                    <button class="button" onclick="window.location='{{ route('frontend.testimonials') }}'">@lang('site.services.more')</button>
                </div>

                <div class="d-flex">
                    @foreach ($studentTestimonials as $testimonial)
                        <div class="grid-2">
                            <div class="testimonial-card mb-4">
                                <div class="testimonial-card--container ">
                                    <img src="{{ $testimonial->image_link }}" class="card--image" alt="img"/>
                                    <div class="card--name">
                                        <div class="pills">
                                            <div class="pills-text"> {{ $testimonial->{'name_' . config('app.locale')} }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-card--title"> {{ $testimonial->{'tagline_' . config('app.locale')} }}</div>
                                <div class="testimonial-card--details">
                                    {!! $testimonial->{'testimonial_' . config('app.locale')} !!}
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

            @if(count($clientTestimonials) > 0)
                <div class="tab-pane fade{{ $activeTab == 'client' ? ' show active' : '' }} services-tab-pane"
                 id="nav-client" role="tabpanel" aria-labelledby="nav-client-tab"
                 style="{{ $activeTab == 'student' ? 'display: none;' : '' }}">
                <div class="sub-title">@lang('site.services.think')</div>
                <div class="heading">
                    <div class="main-title" style="text-transform: capitalize">@lang('site.testimonials.client')</div>
                    <button class="button" onclick="window.location='{{ route('frontend.testimonials', ['type' => 'client']) }}'">@lang('site.services.more')</button>
                </div>

                <div class="d-flex">
                    @foreach ($clientTestimonials as $testimonial)
                        <div class="grid-2">
                            <div class="testimonial-card mb-4">
                                <div class="testimonial-card--container ">
                                    <img src="{{ $testimonial->image_link }}" class="card--image" alt="img"/>
                                    <div class="card--name">
                                        <div class="pills">
                                            <div class="pills-text"> {{ $testimonial->{'name_' . config('app.locale')} }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-card--title"> {{ $testimonial->{'tagline_' . config('app.locale')} }}</div>
                                <div class="testimonial-card--details">
                                    {!! $testimonial->{'testimonial_' . config('app.locale')} !!}
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var navTabs = document.querySelectorAll('.services-nav-link');
            var tabPanes = document.querySelectorAll('.services-tab-pane');

            navTabs.forEach(function (navTab) {
                navTab.addEventListener('click', function (event) {
                    event.preventDefault();
                    var selectedTabId = this.getAttribute('data-bs-target').replace('#', '');
                    tabPanes.forEach(function (tabPane) {
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
@endsection
