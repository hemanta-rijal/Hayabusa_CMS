@extends('backend.layouts.master')

@section('title', 'Contact Banner')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Contact Banner',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Contact Banner' => ''
        ]
    ])
@endsection

@section('content')
    <div class="row">
        <form class="row" method="post" enctype='multipart/form-data' action="{{ route('contact-banner.save') }}">
            @csrf
            @if(isset($banner->id))
                <input name="id" value="{{ $banner->id }}" type="hidden">
            @endif

            <div class="layout-spacing col-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Basic Information</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <div class="row g-3">
                            <div class="col-md-12 col-lg-12 cpl-sm-12 ">
                                <label class="form-label" for="title">
                                    Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="title_en"
                                       id="title" required
                                       value="{{ old('title_en', $banner->title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'title_en'])
                            </div>

                            <div class="col-md-12 col-lg-12 cpl-sm-12">
                                <label class="form-label" for="title_jp">
                                    Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="title_jp"
                                       id="title_jp" required
                                       value="{{ old('title_jp', $banner->title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'title_jp'])
                            </div>

                            <div class="form-group">
                                <label for="sub_title_en" class="form-label">
                                    Sub Title<span class="text-danger"> *</span>
                                </label>
                                <textarea class="form-control" id="sub_title_en" rows="5" name="sub_title_en"
                                          placeholder="Description"
                                          required>{{ old('sub_title_en', $banner->sub_title_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'sub_title_en'])
                            </div>

                            <div class="form-group">
                                <label for="sub_title_jp" class="form-label">
                                    Sub Title JP<span class="text-danger"> *</span>
                                </label>
                                <textarea class="form-control" id="sub_title_jp" rows="5" name="sub_title_jp"
                                          placeholder="Description"
                                          required>{{ old('sub_title_jp', $banner->sub_title_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'sub_title_jp'])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12 ">
                                <label class="form-label" for="button_text">
                                    Button Text<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_text_en"
                                       id="button_text" required
                                       value="{{ old('button_text_en', $banner->button_text_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'button_text_en'])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button_text_jp">
                                    Button Text JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_text_jp"
                                       id="button_text_jp" required
                                       value="{{ old('button_text_jp', $banner->button_text_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'button_text_jp'])
                            </div>

                            <div class="col-12">
                                <label class="form-label" for="link">
                                    Button Link<span class="text-danger"> *</span>
                                </label>
                                <input type="url" class="form-control" name="link"
                                       id="link" required
                                       value="{{ old('link', $banner->link ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'link'])
                            </div>

                            <div class="col-md-3">
                                <label class="form-label" for="background_image">
                                    Background Image <span class="text-danger"> *</span>
                                </label>
                                <div class="multiple-file-upload">
                                    <input id="background_image" name="background_image" type="file"
                                           accept="image/png,image/jpeg,image/jpg"
                                           class="background-image-preview"
                                           data-browse-on-zone-click="true" {{ $banner->id ? '' : 'required' }}>
                                </div>
                                @include('backend.shared.form_field_error', ['name' => 'background_image'])
                            </div>

                            <div class="row g-3 mt-3">
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

@push('custom-styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css"
          crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap-file-input/file-input.min.css') }}">
@endpush

@push('custom-js')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/file-upload.js') }}"></script>
    <script src="{{ asset('lib/bootstrap-file-input/file-input.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            @if(isset($banner->id))
            singleImageEdit(".background-image-preview", "{!! $banner->background_image_link !!}", 2000);
            @else
            singleImageCreate(".background-image-preview", 2000);
            @endif
        })
    </script>
@endpush

