@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner">
        <img src="{{ $page->image_link }}" alt="img" class="bgbanner__img" />
        <h2>{{ $page->{'main_title_' . config('app.locale')} }}</h2>
    </div>

    <div class="container" data-aos="fade-up">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-xs-6 col-md-4">
                    <div class="blog_card" onclick="window.location='{{ route('frontend.blogs.details', $blog->slug) }}'">
                        <img class="blog_card--image" src="{{ $blog->thumbnail_link }}" alt="image" />
                        <div class="blog_card--details">
                            <div class="blog_card--title">
                                {{ $blog->{'title_' . config('app.locale')} }}
                            </div>
                            <div class="blog_card--desc">
                                {{ Str::limit(strip_tags($blog->{'description_' . config('app.locale')}), 19, '...') }}
                            </div>
                            <div class="blog_card--link">
                                @lang('site.buttons.read_more')
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
