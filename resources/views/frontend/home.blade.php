@php
    $icons = ['frontend/clients/logo1.png', 'frontend/clients/logo2.png', 'frontend/clients/logo3.png', 'frontend/clients/logo4.png', 'frontend/clients/logo5.png', 'frontend/clients/logo6.png', 'frontend/clients/logo7.png'];
    $testimonials = [
        ['img' => 'frontend/jpgs/testimonial1.png', 'name' => 'Emily Jhonson', 'title' => 'Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.', 'desc' => 'I cannot express how grateful I am to Hayabusa Consultancy for their exceptional services in helping me prepare for my journey to Japan.'],
        ['img' => 'frontend/jpgs/testimonial1.png', 'name' => 'Emily Jhonson', 'title' => 'Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.', 'desc' => 'I cannot express how grateful I am to Hayabusa Consultancy for their exceptional services in helping me prepare for my journey to Japan.'],
        ['img' => 'frontend/jpgs/testimonial1.png', 'name' => 'Emily Jhonson', 'title' => 'Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.', 'desc' => 'I cannot express how grateful I am to Hayabusa Consultancy for their exceptional services in helping me prepare for my journey to Japan.'],
    ];
    $courses = [
        ['title' => 'JLPT', 'img' => 'frontend/jpgs/course.png', 'fullform' => 'Japanese-Language Proficiency Test', 'details' => 'The Japanese-Language Proficiency Test, or JLPT, is a standardized criterion-referenced test to evaluate and certify Japanese language proficiency for non-native speakers, covering language knowledge, reading ability, and listening ability. The test is held twice a year in Japan and selected countries (on the first Sunday of July and December), and once a year in other regions (either on the first Sunday of December or July depending on region).', 'route1' => 'frontend.about', 'route2' => 'frontend.about'],
        ['title' => 'JFT', 'img' => 'frontend/jpgs/course.png', 'fullform' => 'Japanese-Language Proficiency Test', 'details' => 'The Japanese-Language Proficiency Test, or JLPT, is a standardized criterion-referenced test to evaluate and certify Japanese language proficiency for non-native speakers, covering language knowledge, reading ability, and listening ability. The test is held twice a year in Japan and selected countries (on the first Sunday of July and December), and once a year in other regions (either on the first Sunday of December or July depending on region).', 'route1' => 'frontend.about', 'route2' => 'frontend.about'],
        ['title' => 'NAT', 'img' => 'frontend/jpgs/course.png', 'fullform' => 'Japanese-Language Proficiency Test', 'details' => 'The Japanese-Language Proficiency Test, or JLPT, is a standardized criterion-referenced test to evaluate and certify Japanese language proficiency for non-native speakers, covering language knowledge, reading ability, and listening ability. The test is held twice a year in Japan and selected countries (on the first Sunday of July and December), and once a year in other regions (either on the first Sunday of December or July depending on region).', 'route1' => 'frontend.about', 'route2' => 'frontend.about'],
        ['title' => 'Skills', 'img' => 'frontend/jpgs/course.png', 'fullform' => 'Japanese-Language Proficiency Test', 'details' => 'The Japanese-Language Proficiency Test, or JLPT, is a standardized criterion-referenced test to evaluate and certify Japanese language proficiency for non-native speakers, covering language knowledge, reading ability, and listening ability. The test is held twice a year in Japan and selected countries (on the first Sunday of July and December), and once a year in other regions (either on the first Sunday of December or July depending on region).', 'route1' => 'frontend.about', 'route2' => 'frontend.about'],
    ];
    $slides = [
        [
            'imageSrc' => 'frontend/jpgs/banner.png',
            'title' => 'Study & Work In Japan',
            'description' => 'We provide a Pathway to Japanese Language Excellence and Study Abroad Adventures in Japan!',
            'formInput' => [
                'label' => 'Your Email ID',
                'placeholder' => 'Send us your email to join us today',
            ],
            'buttonText' => 'Contact Us',
        ],
        [
            'imageSrc' => 'frontend/jpgs/banner.png',
            'title' => 'Study & Work In Japan',
            'description' => 'We provide a Pathway to Japanese Language Excellence and Study Abroad Adventures in Japan!',
            'buttonText' => 'View Details',
        ],
    ];
    
@endphp


@extends('frontend.layouts.master')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide cslide">
        <div class="carousel-indicators">
            <!-- Indicator buttons -->
            @foreach ($slides as $index => $slide)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}"
                    class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                    aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            <!-- Carousel slides -->
            @foreach ($slides as $index => $slide)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ $slide['imageSrc'] }}" class="d-block w-100" alt="Slide {{ $index + 1 }}" />
                    <div class="carousel-caption d-none d-md-block">
                        <div class="carousel__flex">
                            <div class="carousel__flex__details">
                                <h5>{{ $slide['title'] }}</h5>
                                <p>{{ $slide['description'] }}</p>
                            </div>
                            @if (isset($slide['formInput']))
                                <div class="carousel__flex__form">
                                    <div class="form-group">
                                        <label for="email">{{ $slide['formInput']['label'] }}</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="{{ $slide['formInput']['placeholder'] }}" autocomplete="off" />
                                    </div>
                                    <button class="button">{{ $slide['buttonText'] }}</button>
                                </div>
                            @elseif ($slide['buttonText'])
                                <div class="carousel__flex__form">
                                    <button class="button">{{ $slide['buttonText'] }}</button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    {{-- About Us Section --}}
    <div class="about__section">
        <div class="about__section--left" data-aos="fade-up">
            <div class="sub-title">About Us</div>
            <div class="main-title">We help you <br /> achieve your dream of <br /> going to Japan.</div>
        </div>
        <div class="about__section--right" data-aos="fade-up">
            <div class="sub-title--grey">Introducing Hayabusa Consultancy and Training Center: Your Pathway to Japanese
                Language Excellence and Study Abroad Adventures in Japan!
            </div>
            <p class="grey">Hayabusa Consultancy and Training Center, situated in the heart of Nepal, is a premier
                education consultancy
                dedicated to offering top-notch language courses and study abroad programs for students seeking to
                explore
                the wonders of Japan. With a strong emphasis on linguistic proficiency and cultural immersion, we strive
                to
                equip our students with the necessary skills and knowledge to thrive in a Japanese-speaking
                environment.</p>
            <button onclick="window.location='{{ route('frontend.about') }}'" class="button">More About Us</button>
        </div>
    </div>

    {{-- Flex Section --}}
    <div class="flex__section" data-aos="fade-up">
        <div class="item">
            <img src={{ asset('frontend/svgs/book.svg') }} alt="book" class="item-icon" />
            <p class="item-title">Years of Experience</p>
            <p class="main-title item-number">20<span>+</span></p>
        </div>
        <div class="item">
            <img src={{ asset('frontend/svgs/travel.svg') }} alt="travel" class="item-icon" />
            <p class="item-title">Our Students in Japan</p>
            <p class="main-title item-number">1600<span>+</span></p>
        </div>
        <div class="item">
            <img src={{ asset('frontend/svgs/device.svg') }} alt="device" class="item-icon" />
            <p class="item-title">Interview Taken</p>
            <p class="main-title item-number">1200<span>+</span></p>
        </div>
        <div class="item">
            <img src={{ asset('frontend/svgs/star.svg') }} alt="star" class="item-icon" />
            <p class="item-title">Valuable Clients</p>
            <p class="main-title item-number">30<span>+</span></p>
        </div>
    </div>

    {{-- Events Section --}}
    @if (count($events) > 0)
        <div class="events__section" data-aos="fade-up">
            <div class="events__section--content">
                <div class="sub-title text-white event-title">
                    @lang('site.home.event_sub_title')
                </div>
                <div class="heading">
                    <div class="main-title text-white">
                        @lang('site.home.event_title')
                    </div>
                    <button onclick="window.location='{{ route('frontend.events') }}'" class="button">
                        @lang('site.home.view_all')
                    </button>
                </div>
                <div class="events__flex">
                    <div class="events__flex--left">
                        <div class="sub-title text-white">@lang('site.home.featured')</div>
                        <div class="event-card">
                            <img src="{{ $events[0]->thumbnail_link }}" alt="events" class="image" />
                            <div class="title">
                                {{ $events[0]->{'title_' . config('app.locale')} }}
                            </div>
                            <div class="details">
                                <span class="time">
                                    <img src="{{ asset('frontend/svgs/calendar-outline.svg') }}" alt="calendar"
                                        class="icon" />
                                    <span>{{ $events[0]->{'date_' . config('app.locale')} }}</span>
                                </span>
                                <span class="time">
                                    <img src="{{ asset('frontend/svgs/time-outline.svg') }}" alt="time"
                                        class="icon" />
                                    <span>
                                        {{ $events[0]->{'time_' . config('app.locale')} }}
                                    </span>
                                </span>
                            </div>
                            <button onclick="window.location='{{ route('frontend.events.details', $events[0]->slug) }}'"
                                class="button">
                                @lang('site.home.view_one')
                            </button>
                        </div>

                    </div>
                    <div class="events__flex--right">
                        <div class="sub-title text-white">@lang('site.home.featured')</div>
                        @foreach ($events->slice(1) as $event)
                            <div class="horizontal-event-card"
                                onclick="window.location='{{ route('frontend.events.details', $event->slug) }}'">
                                <div class="details">{{ $events[0]->{'title_' . config('app.locale')} }}</div>
                                <div class="icon">
                                    <img src={{ asset('frontend/svgs/arrow-right-bold.svg') }} alt="arrow">
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Blogs Section --}}
    @if (count($blogs) > 0)
        <div class="blogs__section" data-aos="fade-up">
            <div class="sub-title">@lang('site.home.blog_sub_title')</div>
            <div class="heading">
                <div class="main-title ">@lang('site.home.blog_title')</div>
                <button onclick="window.location='{{ route('frontend.blogs.blogs') }}'" class="button">
                    @lang('site.home.blog_btn')
                </button>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="blog_card col-sm-12 col-md-4"
                        onclick="window.location='{{ route('frontend.blogs.details', $blog->slug) }}'">
                        <img class="blog_card--image" src="{{ $blog->thumbnail_link }}" alt="img"
                            style="width: 100%; height:200px; object-fit:cover" />
                        <div class="blog_card--details">
                            <div class="blog_card--title">
                                {{ $blog->{'title_' . config('app.locale')} }}
                            </div>
                            <div class="blog_card--desc">
                                {{ preg_replace('/^([\s\S]{1,70}).*$/u', '$1...', strip_tags($blog->{'description_' . config('app.locale')})) }}
                            </div>
                            <div class="blog_card--link">
                                @lang('site.home.blog_more')
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    @endif

    {{-- Courses Section --}}
    @if (count($courses) > 0)
        <div class="courses__section">
            <div class="main__section">
                <div class="sub-title" data-aos="fade-up">@lang('site.home.course_sub_title')</div>
                <div class="heading" data-aos="fade-up">
                    <div class="main-title ">@lang('site.home.course_title')</div>
                </div>
                <div>
                    <section id="tabs" class="project-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach ($course->subCourses as $index => $subCourse)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link{{ $index == 0 ? ' active' : '' }}"
                                        id="nav-{{ $index }}-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-{{ $index }}" type="button" role="tab"
                                        aria-controls="nav-{{ $index }}"
                                        aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                        {{ $subCourse->{'name_' . config('app.locale')} }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content mt-4" id="nav-tabContent" style="width:100% !important">
                            @foreach ($course->subCourses as $index => $subCourse)
                                <div class="tab-pane fade{{ $index == 0 ? ' show active' : '' }}"
                                    id="nav-{{ $index }}" role="tabpanel"
                                    aria-labelledby="nav-{{ $index }}-tab">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <img src="{{ $subCourse->image_link }}" alt="" data-aos="fade-up"
                                                style="width: 100%; height:300px; object-fit:cover">
                                        </div>
                                        <div class="tab-details col-sm-12 col-md-6" data-aos="fade-up">
                                            <h2>{{ $subCourse->{'name_' . config('app.locale')} }}</h2>
                                            <p>{!! $subCourse->{'description_' . config('app.locale')} !!}</p>

                                            <div class="tab-btn-container">
                                                <button class="button button--secondary"
                                                    onclick="window.location='{{ route('frontend.services.courses') }}'">
                                                    @lang('site.home.course_view')
                                                </button>
                                                <button class="button"
                                                    onclick="window.location='{{ route('frontend.services.courses') }}'">
                                                    @lang('site.home.course_apply')
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    @endif

    {{-- Servies Section --}}
    <div class="services__section">
        <div class="bg-card bg-card--blue" onclick="window.location='{{ route('frontend.services') }}'"
            data-aos="fade-up">
            <img src={{ asset('frontend/jpgs/stamp.png') }} class="stamp" />
            <div class="bg-card--title">@lang('site.home.services')</div>
            <div class="bg-card--main-title">@lang('site.home.service_student')</div>
        </div>
        <div class="bg-card bg-card--pink"
            onclick="window.location='{{ route('frontend.services', ['type' => 'client']) }}'" data-aos="fade-up">
            <img src={{ asset('frontend/jpgs/stamp.png') }} class="stamp" />
            <div class="bg-card--title">@lang('site.home.services')</div>
            <div class="bg-card--main-title">@lang('site.home.service_client')</div>
        </div>
    </div>

    {{-- Clients Section --}}
    <div class="clients__section" data-aos="fade-up">
        <div class="clients__section--header">
            <div class="sub-title">Featured Clients</div>
            <div class="heading">
                <div class="main-title ">We Work With The Best</div>
                <button onclick="window.location='{{ route('frontend.clients') }}'" class="button">View Our
                    Clients
                </button>
            </div>
        </div>

        <div class="slider">
            <div class="slide-track">
                @foreach ($icons as $icon)
                    <div class="slide">
                        <div class="image-card" style="width: 200px">
                            <img src={{ asset($icon) }} />
                        </div>
                    </div>
                @endforeach
                {{-- Double loop to create infinite loop effect --}}
                @foreach ($icons as $icon)
                    <div class="slide">
                        <div class="image-card" style="width: 200px">
                            <img src={{ asset($icon) }} />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Slider two --}}
        <div class="slider">
            <div class="slide-track">
                @foreach ($icons as $icon)
                    <div class="slide">
                        <div class="image-card" style="width: 200px">
                            <img src={{ asset($icon) }} />
                        </div>
                    </div>
                @endforeach
                {{-- Double loop to create infinite loop effect --}}
                @foreach ($icons as $icon)
                    <div class="slide">
                        <div class="image-card" style="width: 200px">
                            <img src={{ asset($icon) }} />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="clients__section--footer" data-aos="fade-up">
            With our extensive network of partner institutions and industry connections, Hayabusa Consultancy and
            Training
            Center strives to provide exclusive opportunities for internships, exchange programs, and cultural
            exchanges,
            further enhancing students' understanding of Japanese society and fostering global citizenship.
        </div>
    </div>

    @include('frontend.common.banner')

    {{-- FAQs --}}
    <div class="courses__section" data-aos="fade-up">
        <div class="main__section">
            <div class="sub-title">@lang('site.home.faq_sub_title')</div>
            <div class="heading">
                <div class="main-title ">@lang('site.home.faq_title')</div>
                <button onclick="window.location='{{ route('frontend.faqs') }}'" class="button">
                    @lang('site.home.faq_btn')
                </button>
            </div>
            <div class="faq__section--grid">
                @foreach ($faqs as $index => $faq)
                    <div class="accordion__container">
                        <button class="accordion">
                            <span class="index">{{ $index + 1 }}</span>
                            <div class="title"> {{ $faq->{'question_' . config('app.locale')} }}</div>
                        </button>
                        <div class="panel">
                            <p> {{ $faq->{'answer_' . config('app.locale')} }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Testimonial Section --}}
    <div class="testimonial__section" data-aos="fade-up">
        <div class="testimonial__section--header">
            <div class="sub-title">What people think about us</div>
            <div class="heading">
                <div class="main-title ">Testimonials</div>
                <button onclick="window.location='{{ route('frontend.testimonials') }}'" class="button">View More
                    Testimonials
                </button>
            </div>
        </div>

        <div class="slider">
            <div class="slide-track">
                @foreach ($testimonials as $testimonial)
                    <div class="slide">
                        <div class="testimonial-card">
                            <div class="testimonial-card--container" style="width: 500px">
                                <img src={{ asset($testimonial['img']) }} class="card--image" style="width: 500px" />
                                <div class="card--name">
                                    <div class="pills">
                                        <div class="pills-text"> {{ $testimonial['name'] }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card--title"> {{ $testimonial['title'] }}</div>
                            <div class="testimonial-card--details">{{ $testimonial['desc'] }}</div>
                        </div>
                    </div>
                @endforeach
                {{-- Double loop to create infinite loop effect --}}
                @foreach ($testimonials as $testimonial)
                    <div class="slide">
                        <div class="testimonial-card">
                            <div class="testimonial-card--container" style="width: 500px">
                                <img src={{ asset($testimonial['img']) }} class="card--image" style="width: 500px" />
                                <div class="card--name">
                                    <div class="pills">
                                        <div class="pills-text"> {{ $testimonial['name'] }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card--title"> {{ $testimonial['title'] }}</div>
                            <div class="testimonial-card--details">{{ $testimonial['desc'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Contact Us --}}
    <div data-aos="fade-up">
        <div class="d-flex events-flex">
            <div class="flex-50">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.322943870597!2d85.3389423!3d27.738183499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1910e4aa719b%3A0x828953fc2d109498!2sHayabusa%20Consultancy%20and%20Training%20Center!5e0!3m2!1sen!2snp!4v1689168261808!5m2!1sen!2snp"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="flex-50" style="padding:0rem 3rem;margin-bottom: 70px">
                <div class="heading">
                    <div class="main-title ">Send Us A Message</div>
                </div>
                <p class="grey">If you have any questions regarding recruitment or recruitment, please contact us via
                    message or inquiry.
                </p>
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
                        <div class="col-12">
                            <label for="details" class="form-label">Additional Details</label>
                            <textarea class="form-control" id="details" rows="4"></textarea>
                        </div>
                    </div>
                </form>
                <button class="button" onclick="window.location='{{ route('frontend.contact') }}'"
                    style="float: right">Send Message
                </button>
            </div>
        </div>
    </div>
@endsection
