@extends('backend.layouts.master')

@section('title', 'Home Banner')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Contact Page',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Contact Page' => '',
        ],
    ])
@endsection

@php
    $contactPageData = !$contactPageData->isEmpty() ? json_decode($contactPageData->first()->value_en) : null;
    $bannerImage = $contactPageData !== null ? '/uploads/images/banner/' . optional($contactPageData)->image : null;
@endphp

@section('content')
    <div class="row">
        <form class="row" method="post" action="{{ route('contact_page.save') }}">
            @csrf
            <div class="layout-spacing col-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Contact Page Information</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row" style="margin-top:5px;">
                            
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Left of Form Section</h4>
                                <hr />
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="send_message_title_en">
                                    Send Message Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="send_message_title_en"
                                    id="send_message_title_en" required
                                    value="{{ old('send_message_title_en', optional($contactPageData)->send_message_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'send_message_title_en',
                                ])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="send_message_title_jp">
                                    Send Message Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="send_message_title_jp"
                                    id="send_message_title_jp" required
                                    value="{{ old('send_message_title_jp', optional($contactPageData)->send_message_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'send_message_title_jp',
                                ])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label for="send_message_description_en" class="form-label">
                                    Send Message Description En<span class="text-danger"> *</span>
                                </label>
                                <textarea class="form-control" id="send_message_description_en" rows="5" name="send_message_description_en"
                                    placeholder="Description En" required>{{ old('send_message_description_en', optional($contactPageData)->send_message_description_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', [
                                    'name' => 'send_message_description_en',
                                ])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label for="send_message_description_jp" class="form-label">
                                    Send Message Description JP<span class="text-danger"> *</span>
                                </label>
                                <textarea class="form-control" id="send_message_description_jp" rows="5" name="send_message_description_jp"
                                    placeholder="send message description Jp" required>{{ old('send_message_description_jp', optional($contactPageData)->send_message_description_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', [
                                    'name' => 'send_message_description_jp',
                                ])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                              <label class="form-label" for="social_icon_title_en">
                                  Social Icon Title<span class="text-danger"> *</span>
                              </label>
                              <input type="text" class="form-control" name="social_icon_title_en"
                                  id="social_icon_title_en" required
                                  value="{{ old('social_icon_title_en', optional($contactPageData)->social_icon_title_en ?? '') }}">
                              @include('backend.shared.form_field_error', [
                                  'name' => 'social_icon_title_en',
                              ])
                          </div>

                          <div class="col-md-6 col-lg-6 cpl-sm-12">
                              <label class="form-label" for="social_icon_title_jp">
                                Social Icon Title JP<span class="text-danger"> *</span>
                              </label>
                              <input type="text" class="form-control" name="social_icon_title_jp"
                                  id="social_icon_title_jp" required
                                  value="{{ old('social_icon_title_jp', optional($contactPageData)->social_icon_title_jp ?? '') }}">
                              @include('backend.shared.form_field_error', [
                                  'name' => 'social_icon_title_jp',
                              ])
                          </div>
                        </div>

                        <div class="row" style="margin-top:5px;">
                            <hr />
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Below Google Map Section</h4>
                            </div>
                        </div>



                        <div class="row g-3">
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label for="contact_page_description_en" class="form-label">
                                    Main Description En<span class="text-danger"> *</span>
                                </label>
                                <textarea class="form-control" id="contact_page_description_en" rows="5" name="contact_page_description_en"
                                    placeholder="Description En" required>{{ old('contact_page_description_en', optional($contactPageData)->contact_page_description_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', [
                                    'name' => 'contact_page_description_en',
                                ])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label for="contact_page_description_jp" class="form-label">
                                    Main Description Jp<span class="text-danger"> *</span>
                                </label>
                                <textarea class="form-control" id="contact_page_description_jp" rows="5" name="contact_page_description_jp"
                                    placeholder="Description En" required>{{ old('contact_page_description_jp', optional($contactPageData)->contact_page_description_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', [
                                    'name' => 'contact_page_description_jp',
                                ])
                            </div>



                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button1_text_en">
                                    Button EN<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button[title_en]" id="button_text_en"
                                    required
                                    value="{{ old('button[title_en]', optional($contactPageData)->button->title_en ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'button[title_en]',
                                ])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button1_text_jp">
                                    Button JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button[title_jp]" id="button1_text_jp"
                                    required
                                    value="{{ old('button[title_jp]', optional($contactPageData)->button->title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'button[title_jp]',
                                ])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button1_link">
                                    Button Link<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button[link]" id="button1_link" required
                                    value="{{ old('button[link]', optional($contactPageData)->button->link ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'button[link]'])
                            </div>
                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button1_target">
                                    Target<span class="text-danger"> *</span>
                                </label>
                                <select name="button[target]" id="button1_target" class="form-control">
                                    <option value="_self"
                                        {{ optional(optional($contactPageData)->button)->target == '_self' ? 'selected' : '' }}>
                                        Self
                                    </option>
                                    <option value="_blank"
                                        {{ optional(optional($contactPageData)->button)->target == '_blank' ? 'selected' : '' }}>
                                        New
                                    </option>
                                </select>
                                @include('backend.shared.form_field_error', [
                                    'name' => 'button[target]',
                                ])
                            </div>
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
            @if ($bannerImage !== null)
                singleImageEdit(".background-image-preview", "{!! $bannerImage !!}", 2000);
            @else
                singleImageCreate(".background-image-preview", 2000);
            @endif
        })
    </script>
@endpush
