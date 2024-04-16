@extends('backend.layouts.master')

@section('title', 'Courses Page')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Courses Page Content',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Courses Page' => ''
        ]
    ])
@endsection

@section('content')
    <div class="row">
        <form class="row" method="post" enctype='multipart/form-data'
              action="{{ route('page.course.save') }}">
            @csrf
            @if(isset($page->id))
                <input name="id" value="{{ $page->id }}" type="hidden">
            @endif
            <div class="col-lg-12 layout-spacing col-md-12 col-12">
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
                            <div class="col-md-6">
                                <label class="form-label" for="course-section-title-en">
                                    Course Section Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" id="course-section-title-en"
                                       name="course_section_title_en"
                                       value="{{ old('course_section_title_en', $page->course_section_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'course_section_title_en'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="course-section-title-jp">
                                    Course Section Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" id="course-section-title-jp"
                                       name="course_section_title_jp"
                                       value="{{ old('course_section_title_jp', $page->course_section_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'course_section_title_jp'])
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
            @if(isset($page->id))
            singleImageEdit(".image", "{!! $page->image_link !!}", 1024);
            @else
            singleImageCreate(".image", 1024)
            @endif
        })
    </script>
@endpush

