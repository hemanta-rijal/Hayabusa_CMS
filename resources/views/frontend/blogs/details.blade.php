@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner__two">
        <img class="image" src="{{ $blog->thumbnail_link }}" alt="image" />
        <div class="banner-content">
            <div class="title mb-4">
                <div class="sub">@lang('site.blogs.blog')</div>
                <div class="main">{{ $blog->{'title_' . config('app.locale')} }}</div>
            </div>
            <button class="button mb-4" onclick="window.location='{{ route('frontend.blogs.blogs') }}'">
                @lang('site.blogs.back')
            </button>
        </div>
    </div>
    <div class="container" data-aos="fade-up">
        <p class="details" style="text-align: justify">
            {!! $blog->{'description_' . config('app.locale')} !!}
        </p>
    </div>
    @if (count($blog->images) > 0)
        <div class="container" data-aos="fade-up">
            <div class="sub-title" data-aos="fade-up">@lang('site.event_pg.gallery')</div>
            <div class="heading">
                <div class="main-title" data-aos="fade-up">@lang('site.event_pg.related_img')</div>
            </div>
            <div class="row" data-aos="fade-up" style="row-gap: 20px">
                @foreach ($blog->images as $image)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image" style="margin: 0px !important"> <a class="fancybox__image"
                                href={{ $image->image_link }}><img src="{{ $image->image_link }}" alt="image" /></a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
