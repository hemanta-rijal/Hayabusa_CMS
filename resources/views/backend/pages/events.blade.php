@extends('backend.layouts.master')

@section('title', 'Events Page')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Events Page Content',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Events Page' => ''
        ]
    ])
@endsection

@section('content')
    <div class="row">
        <form class="row" method="post" enctype='multipart/form-data'
              action="{{ route('page.event.save') }}">
            @csrf
            @if(isset($page->id))
                <input name="id" value="{{ $page->id }}" type="hidden">
            @endif
            <div class="col-lg-12 layout-spacing col-md-12 col-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Event Page Information</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="main-title">
                                    Main Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="main_title_en"
                                       id="main-title" required
                                       value="{{ old('main_title_en', $page->main_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'main_title_en'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="main-title-jp">
                                    Main Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="main_title_jp"
                                       id="main-title-jp" required
                                       value="{{ old('main_title_jp', $page->main_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'main_title_jp'])
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="images">
                                    Image<span class="text-danger"> *</span>
                                </label>
                                <div id="images" class="multiple-file-upload">
                                    <input name="image" type="file"
                                           {{ $page->id ? '' : 'required' }}
                                           accept="image/png,image/jpeg,image/jpg"
                                           data-browse-on-zone-click="true"
                                           class="image" data-show-remove="true"
                                           data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
                                </div>
                                @include('backend.shared.form_field_error', ['name' => 'image'])
                            </div>
                        </div>
                    </div>
                </div>

                <div class="statbox widget box box-shadow mt-3">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Event Page Information</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="sup_title">
                                    Sup Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="sup_title_en"
                                       id="sup_title" required
                                       value="{{ old('sup_title_en', $page->sup_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'sup_title_en'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="sup_title_jp">
                                    Sup Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="sup_title_jp"
                                       id="sup_title_jp" required
                                       value="{{ old('sup_title_jp', $page->sup_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'sup_title_jp'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="title">
                                    Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="title_en"
                                       id="title" required
                                       value="{{ old('title_en', $page->title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'title_en'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="title_jp">
                                    Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="title_jp"
                                       id="title_jp" required
                                       value="{{ old('title_jp', $page->title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'title_jp'])
                            </div>

                            <div class="form-group">
                                <label for="sub_title_en" class="form-label">
                                    Sub Title<span class="text-danger"> *</span>
                                </label>
                                <textarea class="form-control" id="sub_title_en" rows="2" name="sub_title_en"
                                          required>{{ old('sub_title_en', $page->sub_title_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'sub_title_en'])
                            </div>

                            <div class="form-group">
                                <label for="sub_title_jp" class="form-label">
                                    Sub Title JP<span class="text-danger"> *</span>
                                </label>
                                <textarea class="form-control" id="sub_title_jp" rows="2" name="sub_title_jp"
                                          required>{{ old('sub_title_jp', $page->sub_title_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'sub_title_jp'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="form_title">
                                    Form Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="form_title_en"
                                       id="form_title" required
                                       value="{{ old('form_title_en', $page->form_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'form_title_en'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="form_title_jp">
                                    Form Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="form_title_jp"
                                       id="form_title_jp" required
                                       value="{{ old('form_title_jp', $page->form_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'form_title_jp'])
                            </div>

                            <div class="form-group">
                                <label for="form_sub_title_en" class="form-label">
                                    Form Sub Title<span class="text-danger"> *</span>
                                </label>
                                <textarea class="form-control" id="form_sub_title_en" rows="2" name="form_sub_title_en"
                                          required>{{ old('form_sub_title_en', $page->form_sub_title_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'form_sub_title_en'])
                            </div>

                            <div class="form-group">
                                <label for="form_sub_title_jp" class="form-label">
                                    Form Sub Title JP<span class="text-danger"> *</span>
                                </label>
                                <textarea class="form-control" id="form_sub_title_jp" rows="2" name="form_sub_title_jp"
                                          required>{{ old('form_sub_title_jp', $page->form_sub_title_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'form_sub_title_jp'])
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
                                <label class="form-label" for="detail_images">
                                    Image<span class="text-danger"> *</span>
                                </label>
                                <div id="detail_images" class="multiple-file-upload">
                                    <input name="detail_image" type="file"
                                           {{ $page->id ? '' : 'required' }}
                                           accept="image/png,image/jpeg,image/jpg"
                                           data-browse-on-zone-click="true"
                                           class="detail_image" data-show-remove="true"
                                           data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
                                </div>
                                @include('backend.shared.form_field_error', ['name' => 'detail_image'])
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
            @if(isset($page->id))
            singleImageEdit(".image", "{!! $page->image_link !!}", 1024);
            singleImageEdit(".detail_image", "{!! $page->detail_image_link !!}", 1024);
            @else
            singleImageCreate(".detail_image", 1024)
            singleImageCreate(".image", 1024)
            @endif
        })
    </script>
@endpush
