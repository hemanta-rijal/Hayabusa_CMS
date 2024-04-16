@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner">
        <img src="{{ $page->image_link }}" class="bgbanner__img" />
        <h2>{{ $page->{'main_title_' . config('app.locale')} }}</h2>
    </div>

    <div class="container">
        <div class="d-flex" data-aos="fade-up">
            @foreach ($faqs as $index => $faq)
                <div class="accordion__container mb-4">
                    <button class="accordion accordion-border">
                        <span class="index">{{ $index + 1 }}</span>
                        <div class="title">
                            {{ $faq->{'question_' . config('app.locale')} }}
                        </div>
                    </button>
                    <div class="panel">
                        <p> {{ $faq->{'answer_' . config('app.locale')} }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="bgbanner-details" data-aos="fade-up">
        <p>
            {{ $page->{'page_description_' . config('app.locale')} }}
        </p>
        <button class="button" onclick="window.location='{{ $page->link }}'">
            {{ $page->{'button_text_' . config('app.locale')} }}
        </button>
    </div>
@endsection
