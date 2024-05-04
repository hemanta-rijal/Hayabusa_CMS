@extends('backend.layouts.master')

@section('title', 'Home Banner')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Home Banner',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Home Banner' => '',
        ],
    ])
@endsection

@php
    $homeBanner = !$homeBanner->isEmpty() ? json_decode($homeBanner->first()->value_en) : null;
    $bannerImage = $homeBanner !==null ? '/uploads/images/banner/'.optional($homeBanner)->image : null; 
@endphp

@section('content')
    <div class="row">
        <form class="row" method="post" enctype='multipart/form-data' action="{{ route('home-banner.save') }}">
            @csrf
            <div class="layout-spacing col-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Home Banner Information</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row g-3">
                            <div class="col-md-12 col-lg-12 cpl-sm-12 ">
                                <label class="form-label" for="title">
                                    Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="title_en" id="title" required
                                    value="{{ old('title_en', optional($homeBanner)->title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'title_en'])
                            </div>

                            <div class="col-md-12 col-lg-12 cpl-sm-12">
                                <label class="form-label" for="title_jp">
                                    Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="title_jp" id="title_jp" required
                                    value="{{ old('title_jp', optional($homeBanner)->title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'title_jp'])
                            </div>

                            <div class="form-group">
                                <label for="sub_title_en" class="form-label">
                                    Description En<span class="text-danger"> *</span>
                                </label>
                                <textarea class="form-control" id="description_en" rows="5" name="description_en" placeholder="Description En"
                                    required>{{ old('description_en', optional($homeBanner)->description_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'description_en'])
                            </div>

                            <div class="form-group">
                                <label for="sub_title_jp" class="form-label">
                                    Description JP<span class="text-danger"> *</span>
                                </label>
                                <textarea class="form-control" id="description_jp" rows="5" name="description_jp" placeholder="Description Jp"
                                    required>{{ old('description_jp', optional($homeBanner)->description_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'description_jp'])
                            </div>
                        </div>
                        <div class="row" style="margin-top:5px;">
                            <hr />
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Button 1</h4>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button1_text_en">
                                    Button 1 EN<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_1[title_en]" id="button1_text_en"
                                    required
                                    value="{{ old('button_1[title_en]', optional($homeBanner)->button_1->title_en ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'button_1[title_en]',
                                ])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button1_text_jp">
                                    Button 1 JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_1[title_jp]" id="button1_text_jp"
                                    required
                                    value="{{ old('button_1[title_jp]', optional($homeBanner)->button_1->title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'button_1[title_jp]',
                                ])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button1_link">
                                    Button 1 Link<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_1[link]" id="button1_link" required
                                    value="{{ old('button_1[link]', optional($homeBanner)->button_1->link ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'button_1[link]'])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button1_target">
                                    Target<span class="text-danger"> *</span>
                                </label>
                                <select name="button_1[target]" id="button1_target" class="form-control">
                                    <option value="_self"
                                        {{ optional(optional($homeBanner)->button_1)->target == '_self' ? 'selected' : '' }}>
                                        Self
                                    </option>
                                    <option value="_blank"
                                        {{ optional(optional($homeBanner)->button_1)->target == '_blank' ? 'selected' : '' }}>
                                        New
                                    </option>
                                </select>
                                @include('backend.shared.form_field_error', ['name' => 'button_1[target]'])
                            </div>
                        </div>
                        <div class="row" style="margin-top:5px;">
                            <hr />
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Button 2</h4>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button2_text_en">
                                    Button 2 EN<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_2[title_en]" id="button2_text_en"
                                    required
                                    value="{{ old('button_2[title_en]', optional($homeBanner)->button_2->title_en ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'button_2[title_en]',
                                ])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button1_text_jp">
                                    Button 2 JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_2[title_jp]"
                                    id="button2_text_jp" required
                                    value="{{ old('button_2[title_jp]', optional($homeBanner)->button_2->title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'button_2[title_jp]',
                                ])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button2_link">
                                    Button 2 Link<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_2[link]" id="button2_link"
                                    required
                                    value="{{ old('button_2[link]', optional($homeBanner)->button_2->link ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'button_1[link]'])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button2_target">
                                    Target<span class="text-danger"> *</span>
                                </label>
                                <select name="button_2[target]" id="button2_target" class="form-control">
                                    <option value="_self"
                                        {{ optional(optional($homeBanner)->button_2)->target == '_self' ? 'selected' : '' }}>
                                        Self
                                    </option>
                                    <option value="_blank"
                                        {{ optional(optional($homeBanner)->button_2)->target == '_blank' ? 'selected' : '' }}>
                                        New
                                    </option>
                                </select>
                                @include('backend.shared.form_field_error', [
                                    'name' => 'button_2[target]',
                                ])
                            </div>
                        </div>
                        <div class="row" style="margin-top:5px;">
                            <hr />
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Button 3</h4>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button3_text_en">
                                    Button 3 EN<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_3[title_en]"
                                    id="button3_text_en" required
                                    value="{{ old('button_3[title_en]', optional($homeBanner)->button_3->title_en ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'button_3[title_en]',
                                ])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button1_text_jp">
                                    Button 3 JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_3[title_jp]"
                                    id="button3_text_jp" required
                                    value="{{ old('button_3[title_jp]', optional($homeBanner)->button_3->title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'button_3[title_jp]',
                                ])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button3_link">
                                    Button 3 Link<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_3[link]" id="button3_link"
                                    required
                                    value="{{ old('button_3[link]', optional($homeBanner)->button_3->link ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'button_3[link]'])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button3_target">
                                    Target<span class="text-danger"> *</span>
                                </label>
                                <select name="button_3[target]" id="button3_target" class="form-control">
                                    <option value="_self"
                                        {{ optional(optional($homeBanner)->button_3)->target == '_self' ? 'selected' : '' }}>
                                        Self
                                    </option>
                                    <option value="_blank"
                                        {{ optional(optional($homeBanner)->button_3)->target == '_blank' ? 'selected' : '' }}>
                                        New
                                    </option>
                                </select>
                                @include('backend.shared.form_field_error', [
                                    'name' => 'button_3[target]',
                                ])
                            </div>
                        </div>
                        <div class="row" style="margin-top:5px;">
                            <hr />
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Button 4</h4>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button4_text_en">
                                    Button 4 EN<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_4[title_en]"
                                    id="button4_text_en" required
                                    value="{{ old('button_4[title_en]', optional($homeBanner)->button_4->title_en ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'button_4[title_en]',
                                ])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button4_text_jp">
                                    Button 3 JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_4[title_jp]"
                                    id="button4_text_jp" required
                                    value="{{ old('button_4[title_jp]', optional($homeBanner)->button_4->title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'button_4[title_jp]',
                                ])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button4_link">
                                    Button 4 Link<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_4[link]" id="button4_link"
                                    required
                                    value="{{ old('button_4[link]', optional($homeBanner)->button_4->link ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'button_4[link]'])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button4_target">
                                    Target<span class="text-danger"> *</span>
                                </label>
                                <select name="button_4[target]" id="button4_target" class="form-control">
                                    <option value="_self"
                                        {{ optional(optional($homeBanner)->button_4)->target == '_self' ? 'selected' : '' }}>
                                        Self
                                    </option>
                                    <option value="_blank"
                                        {{ optional(optional($homeBanner)->button_4)->target == '_blank' ? 'selected' : '' }}>
                                        New
                                    </option>
                                </select>
                                @include('backend.shared.form_field_error', [
                                    'name' => 'button_4[target]',
                                ])
                            </div>
                        </div>



                        <div class="col-md-3">
                            <label class="form-label" for="image">
                                Image <span class="text-danger"> *</span>
                            </label>
                            <div class="multiple-file-upload">
                                <input id="image" name="image" type="file"
                                    accept="image/png,image/jpeg,image/jpg" class="background-image-preview"
                                    data-browse-on-zone-click="true" {{ optional($homeBanner)->image ? '' : 'required' }}>
                            </div>
                            @include('backend.shared.form_field_error', ['name' => 'image'])
                        </div>
                    </div>
                    <div class="row g-3 mt-3">
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit</button>
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
        $(document).ready(function() {
            @if ($bannerImage!==null)
                singleImageEdit(".background-image-preview", "{!! $bannerImage !!}", 2000);
            @else
                singleImageCreate(".background-image-preview", 2000);
            @endif
        })
    </script>
@endpush
