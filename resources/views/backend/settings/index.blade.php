@extends('backend.layouts.master')

@section('title', 'Settings')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Site-Settings',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Settings' => ''
        ]
    ])
@endsection

@section('content')
    <div class="row">

{{--        @if ($errors->any())--}}
{{--            <div class="alert alert-danger">--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}
        <form class="row" method="post" enctype='multipart/form-data' action="{{ route('setting.save') }}">
            @csrf
            @if(isset($settings->id))
                <input name="id" value="{{ $settings->id }}"  type="hidden">
            @endif

            <div class="col-lg-8 layout-spacing col-md-7 col-12">
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
                            <div class="col-md-6 col-lg-6 cpl-sm-12 ">
                                <label class="form-label" for="name">
                                    Organization Name<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="organization_name_en"
                                       id="name" required
                                       value="{{ old('organization_name_en', $settings->organization_name_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'organization_name_en'])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="name_jp">
                                    Organization Name JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="organization_name_jp"
                                       id="name_jp" required
                                       value="{{ old('organization_name_jp', $settings->organization_name_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'organization_name_jp'])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="email">
                                    Email<span class="text-danger"> *</span>
                                </label>
                                <input type="email" class="form-control" name="email" id="email"
                                       value="{{ old('email', $settings->email ?? '') }}" required>
                                @include('backend.shared.form_field_error', ['name' => 'email'])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="contact-no">
                                    Contact No.<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="contact_no" id="contact-no"
                                       value="{{ old('contact_no', $settings->contact_no ?? '') }}" required>
                                @include('backend.shared.form_field_error', ['name' => 'contact_no'])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="address_en">
                                    Address <span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="address_en" id="address_en"
                                       value="{{ old('address_en', $settings->address_en ?? '') }}" required>
                                @include('backend.shared.form_field_error', ['name' => 'address_en'])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="address_jp">
                                    Address JP <span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="address_jp" id="address_jp"
                                       value="{{ old('address_jp', $settings->address_jp ?? '') }}" required>
                                @include('backend.shared.form_field_error', ['name' => 'address_jp'])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="copyright_text_en">
                                    Copyright Text<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="copyright_text_en"
                                       id="copyright_text_en" required
                                       value="{{ old('copyright_text_en', $settings->copyright_text_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'copyright_text_en'])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="copyright_text_jp">
                                    Copyright Text JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="copyright_text_jp"
                                       id="copyright_text_jp" required
                                       value="{{ old('copyright_text_jp', $settings->copyright_text_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'copyright_text_jp'])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="operating_days_en">
                                    Operating Days<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="operating_days_en"
                                       id="operating_days_en" required
                                       value="{{ old('operating_days_en', $settings->operating_days_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'operating_days_en'])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="operating_days_jp">
                                    Operating Days JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="operating_days_jp"
                                       id="operating_days_jp" required
                                       value="{{ old('operating_days_jp', $settings->operating_days_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'operating_days_jp'])
                            </div>

                            <div class="form-group">
                                <label for="about_en" class="form-label">
                                    About Organization<span class="text-danger"> *</span>
                                </label>
                                <textarea class="form-control" id="about_en" rows="5" name="about_en"
                                          placeholder="Description"
                                          required>{{ old('about_en', $settings->about_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'about_en'])
                            </div>

                            <div class="form-group">
                                <label for="about_jp" class="form-label">
                                    About Organization JP<span class="text-danger"> *</span>
                                </label>
                                <textarea class="form-control" id="about_jp" rows="5" name="about_jp"
                                          placeholder="Description"
                                          required>{{ old('about_jp', $settings->about_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'about_jp'])
                            </div>

                            <div class="col-md-12 col-lg-12 cpl-sm-12">
                                <label class="form-label" for="map">
                                    Location Link(Google Map Link)<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="map"
                                       id="map" required
                                       value="{{ old('map', $settings->map ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'map'])
                            </div>
                        </div>
                    </div>
                </div>

                <div class="statbox widget box box-shadow mt-3">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Social Links</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="facebook">
                                    Facebook
                                </label>
                                <input type="url" class="form-control" name="facebook" id="facebook"
                                       value="{{ old('facebook', $settings->facebook ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'facebook'])
                            </div>

                            <div class="col-md-12">
                                <label class="form-label" for="instagram">
                                    Instagram
                                </label>
                                <input type="url" class="form-control" name="instagram" id="instagram"
                                       value="{{ old('instagram', $settings->instagram ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'instagram'])
                            </div>

                            <div class="col-md-12">
                                <label class="form-label" for="twitter">
                                    Twitter
                                </label>
                                <input type="url" class="form-control" name="twitter" id="twitter"
                                       value="{{ old('twitter', $settings->twitter ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'twitter'])
                            </div>

                            <div class="col-md-12">
                                <label class="form-label" for="linkedin">
                                    Linkedin
                                </label>
                                <input type="url" class="form-control" name="linkedin" id="linkedin"
                                       value="{{ old('linkedin', $settings->linkedin ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'linkedin'])
                            </div>

                            <div class="col-md-12">
                                <label class="form-label" for="tiktok">
                                    Tiktok
                                </label>
                                <input type="url" class="form-control" name="tiktok" id="tiktok"
                                       value="{{ old('tiktok', $settings->tiktok ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'tiktok'])
                            </div>

                            <div class="col-md-12">
                                <label class="form-label" for="youtube">
                                    Youtube
                                </label>
                                <input type="url" class="form-control" name="youtube" id="youtube"
                                       value="{{ old('youtube', $settings->youtube ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'youtube'])
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Logo</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <div class="row g-3">
                            <div class="multiple-file-upload">
                                <input id="logo" name="logo" type="file"
                                       accept="image/png,image/jpeg,image/jpg"
                                       class="file-input-preview"
                                       data-browse-on-zone-click="true">
                            </div>
                        </div>
                        @include('backend.shared.form_field_error', ['name' => 'logo'])
                    </div>
                </div>
                <div class="statbox widget box box-shadow mt-3">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Secondary Logo</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <div class="row g-3">
                            <div class="single-file-upload">
                                <input id="logo_secondary" name="logo_secondary" type="file"
                                       accept="image/png,image/jpeg,image/jpg"
                                       class="logo-secondary-preview"
                                       data-browse-on-zone-click="true">
                            </div>
                        </div>
                        @include('backend.shared.form_field_error', ['name' => 'logo_secondary'])
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
            @if(isset($settings->id))
            singleImageEdit(".file-input-preview", "{!! $settings->logo_link !!}", 4000);
            singleImageEdit(".logo-secondary-preview", "{!! $settings->logo_secondary_link !!}", 4000);
            @else
            singleImageCreate(".file-input-preview", 4000);
            singleImageCreate(".logo-secondary-preview", 4000);
            @endif
        })
    </script>
@endpush

