@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner">
        <img src="{{ $page->image_link }}" class="bgbanner__img" />
        <h2>{{ $page->{'main_title_' . config('app.locale')} }}</h2>
    </div>

    <div class="container">
        <div class="row" style="justify-content: space-between">
            <div class="col-xs-12 col-md-6" data-aos="fade-up">
                <img src={{ $page->page_image_link }} style="width:100%;height:auto" />
            </div>
            <div class="col-xs-12 col-md-6" data-aos="fade-up">
                {!! $page->{'page_description_' . config('app.locale')} !!}
                <button class="button" onclick="window.location='{{ route('frontend.contact') }}'">
                    {{ $page->{'button_text_' . config('app.locale')} }}
                </button>
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="row">
            @foreach ($page->questions as $index => $item)
                <div class="accordion__container mb-4 col-xs-12">
                    <button class="accordion accordion-border">
                        <span class="index">{{ $index + 1 }}</span>
                        <div class="title"> {{ $item['question_' . config('app.locale')] }}</div>
                    </button>
                    <div class="panel">
                        <p>{{ $item['answer_' . config('app.locale')] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('frontend.common.banner')

    <div class="container">
        <div class="sub-title" data-aos="fade-up">@lang('site.japan.japan')</div>
        <div class="heading">
            <div class="main-title" data-aos="fade-up">@lang('site.japan.clients')</div>
        </div>
        <div class="d-flex" data-aos="fade-up">
            @foreach ($clients as $client)
                <div class="grid-5">
                    <div class="image-card">
                        <img src="{{ $client->image_link }}" alt="img" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
