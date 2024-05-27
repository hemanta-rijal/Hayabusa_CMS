@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner">
        <img src="{{ $page->image_link }}" class="bgbanner__img" />
        <h2>{{ $page->{'main_title_' . config('app.locale')} }}</h2>
    </div>

    <div class="container" data-aos="fade-up">
        <div class="sub-title">{{ $page->{'page_sub_title_' . config('app.locale')} }}</div>
        <div class="heading">
            <div class="main-title ">{{ $page->{'page_title_' . config('app.locale')} }}</div>
        </div>

        <img src="{{ $page->page_image_link }}" alt="image" class="responsive-image" />
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6" data-aos="fade-up">
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
            <div class="col-sm-6 col-md-6 child__grey" data-aos="fade-up">
                {!! $page->{'page_description_' . config('app.locale')} !!}
                <button class="button">Download Our Brochure</button>
            </div>
        </div>
    </div>
    <style>
        .section_1_descrtiption .section_2_descrtiption p{
            text-align: justify
        }
    </style>


    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6" style="justify-content: space-between" data-aos="fade-up">
                <div class="sub-title"></div>
                <div class="heading">
                    <div class="main-title ">Itahari Branch </div>
                </div>
                <div class="section_1_descrtiption">
                    {!! $page->{'itahari_description_' . config('app.locale')} !!}
                </div>
            </div>
            <div class="col-xs-12 col-md-6" data-aos="fade-up">
                <img src={{ asset($page->itahari_image_link) }} style="width:100%;height:auto" />
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="justify-content: space-between">
            <div class="col-xs-12 col-md-6">
                <img src={{ $page->nepalgunj_image_link }} data-aos="fade-up" style="width:100%;height:auto" />
            </div>
            <div class="col-xs-12 col-md-6 mt-xs-2" data-aos="fade-up">
                <div class="heading">
                    <div class="main-title ">Nepalgunj Branch</div>
                </div>
                <div class="section_1_descrtiption">
                    {!! $page->{'nepalgunj_description_' . config('app.locale')} !!}
                </div>
                
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6" style="justify-content: space-between" data-aos="fade-up">
                <div class="sub-title"></div>
                <div class="heading">
                    <div class="main-title ">{{ $page->{'documentation_title_' . config('app.locale')} }}</div>
                </div>
                <div class="section_1_descrtiption">
                    {!! $page->{'documentation_description_' . config('app.locale')} !!}
                </div>
            </div>
            <div class="col-xs-12 col-md-6" data-aos="fade-up">
                <img src={{ asset($page->documentation_image_link) }} style="width:100%;height:auto" />
            </div>
        </div>
    </div>




    <div class="container">
        <div class="sub-title" data-aos="fade-up">{{ $page->{'team_sub_title_' . config('app.locale')} }}</div>
        <div class="heading" data-aos="fade-up">
            <div class="main-title ">{{ $page->{'team_title_' . config('app.locale')} }}</div>
        </div>
        <div class="row" data-aos="fade-up">
            @foreach ($teams as $index => $team)
                <div class="col-sm-12 col-md-4">
                    <div class="team__card mb-3">
                        <img src="{{ $team->image_link }}" alt="image"
                            style="height: 400px; object-fit:cover;width:100%" />
                        <h6 class="team__card--title">{{ $team->{'name_' . config('app.locale')} }}</h6>
                        <p class="team__card--subtitle">{{ $team->{'designation_' . config('app.locale')} }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="bgbanner-details" data-aos="fade-up">
            <p>
                {!! $page->{'team_description_' . config('app.locale')} !!}
            </p>
        </div>

    </div>

    <div class="banner__section" data-aos="fade-up">
        <div class="banner__section--content">
            <div class="banner__section--content--left">
                <p>{{ $page->{'director_title_' . config('app.locale')} }}</p>
                <div class="title">{{ $page->{'director_tagline_' . config('app.locale')} }}</div>
                <div class="desc">
                    {!! $page->{'director_description_' . config('app.locale')} !!}
                </div>
                <p>{{ $page->{'director_name_' . config('app.locale')} }}</p>
    
            </div>
            <div class="banner__section--content--right">
                <img src={{ $page->director_image_link }} class="banner-image" />
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
