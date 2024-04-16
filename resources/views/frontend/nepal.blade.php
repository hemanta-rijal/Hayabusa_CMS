@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner">
        <img src="{{ $page->image_link }}" class="bgbanner__img" alt="img" />
        <h2>{{ $page->{'main_title_' . config('app.locale')} }}</h2>
    </div>

    <div class="container">
        <div class="sub-title" data-aos="fade-up">{{ $page->{'page_sub_title_' . config('app.locale')} }}</div>
        <div class="heading" data-aos="fade-up">
            <div class="main-title ">{{ $page->{'page_title_' . config('app.locale')} }}</div>
        </div>
        <img src="{{ $page->page_image_link }}" class="responsive-image" data-aos="fade-up" alt="img" />

    </div>

    <div class="container">
        <div class="d-flex">
            <div class="flex-50" data-aos="fade-up">
                <table class="table table-striped table-bordered" style="width: 90%">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th scope="col">@lang('site.table.particular')</th>
                            <th scope="col">@lang('site.table.details')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($page->details as $index => $item)
                            <tr>
                                <td>{{ $item['title_' . config('app.locale')] }}</td>
                                <td>{{ $item['value_' . config('app.locale')] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex-50" data-aos="fade-up">
                <p class="grey">
                    {!! $page->{'page_description_' . config('app.locale')} !!}
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="sub-title" data-aos="fade-up">@lang('site.common.gallery')</div>
        <div class="heading">
            <div class="main-title" data-aos="fade-up">@lang('site.common.photos')</div>
        </div>
        <div class="row" data-aos="fade-up" style="row-gap: 20px">
            @foreach ($page->images as $image)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image" style="margin: 0px !important">
                        <a class="fancybox__image" href={{ $image->image_link }}><img src="{{ $image->image_link }}"
                                alt="image" /></a>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
