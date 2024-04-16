@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner">
        <img src="{{ $page->image_link }}" class="bgbanner__img"/>
        <h2>{{ $page->{'main_title_' . config('app.locale')} }}</h2>
    </div>

    <div class="bgbanner-details" data-aos="fade-up">
        <p>
            {{ $page->{'page_description_' . config('app.locale')} }}
        </p>
        <button class="button" onclick="window.location='{{ $page->link }}'">
            {{ $page->{'button_text_' . config('app.locale')} }}
        </button>
    </div>

    <div class="container" data-aos="fade-up">
        <div class="d-flex">
            @foreach ($clients as $client)
                <div class="grid-5">
                    <div class="image-card">
                        <img src="{{ $client->image_link }}" alt="image"/>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
