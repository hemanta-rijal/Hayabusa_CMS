@extends('backend.layouts.master')

@section('title', 'About Nepal Page')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'About Nepal Page Content',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'About Nepal Page' => '',
        ],
    ])
@endsection

@section('content')
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="row" method="post" enctype='multipart/form-data' action="{{ route('page.about-nepal.save') }}">
            @csrf
            @if (isset($page->id))
                <input name="id" value="{{ $page->id }}" type="hidden">
            @endif
            <div class="col-lg-12 layout-spacing col-md-12 col-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>About Nepal Page Information</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="main-title">
                                    Main Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="main_title_en" id="main-title" required
                                    value="{{ old('main_title_en', $page->main_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'main_title_en'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="main-title-jp">
                                    Main Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="main_title_jp" id="main-title-jp" required
                                    value="{{ old('main_title_jp', $page->main_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'main_title_jp'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="page_title">
                                    Page Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="page_title_en" id="page_title" required
                                    value="{{ old('page_title_en', $page->page_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'page_title_en'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="page_title_jp">
                                    Page Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="page_title_jp" id="page_title_jp" required
                                    value="{{ old('page_title_jp', $page->page_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'page_title_jp'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="page_sub_title">
                                    Page Sub Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="page_sub_title_en" id="page_sub_title"
                                    required value="{{ old('page_sub_title_en', $page->page_sub_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'page_sub_title_en',
                                ])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="page_sub_title_jp">
                                    Page Sub Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="page_sub_title_jp" id="page_sub_title_jp"
                                    required value="{{ old('page_sub_title_jp', $page->page_sub_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'page_sub_title_jp',
                                ])
                            </div>
                            <div class="col-md-12">
                                <label for="page_description_en">Description <span class="text-danger"> *</span></label>
                                <textarea id="page_description_en" class="ckeditor" required="required" name="page_description_en">{{ old('page_description_en', $page->page_description_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', [
                                    'name' => 'page_description_en',
                                ])
                            </div>

                            <div class="col-md-12">
                                <label for="page_description_jp">Description JP<span class="text-danger"> *</span></label>
                                <textarea id="page_description_jp" class="ckeditor" required="required" name="page_description_jp">{{ old('page_description_jp', $page->page_description_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', [
                                    'name' => 'page_description_jp',
                                ])
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Section 1</h4>
                                <hr/>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="section_1_title_en">
                                    Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="section_1_title_en"
                                    id="section_1_title_en" required
                                    value="{{ old('section_1_title_en', $page->section_1_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'section_1_title_en',
                                ])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="section_1_title_jp">
                                    Main Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="section_1_title_jp"
                                    id="section_1_title_jp" required
                                    value="{{ old('section_1_title_jp', $page->section_1_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'section_1_title_jp',
                                ])
                            </div>

                            <div class="col-md-12">
                                <label for="section_1_description_en">Description <span class="text-danger">
                                        *</span></label>
                                <textarea id="section_1_description_en" class="ckeditor" required="required" name="section_1_description_en">{{ old('section_1_description_en', $page->section_1_description_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', [
                                    'name' => 'section_1_description_en',
                                ])
                            </div>

                            <div class="col-md-12">
                                <label for="section_1_description_jp">Description JP<span class="text-danger">*</span></label>
                                <textarea id="section_1_description_jp" class="ckeditor" required="required" name="section_1_description_jp">{{ old('section_1_description_jp', $page->section_1_description_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', [
                                    'name' => 'section_1_description_jp',
                                ])
                            </div>
                        </div>


                        <div class="row" style="margin-top: 20px;">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <hr/>
                                <h4>Section 2</h4>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="section_2_title_en">
                                    Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="section_2_title_en" id="section_2_title_en"
                                    required value="{{ old('section_2_title_en', $page->section_2_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'section_2_title_en'
                                ])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="section_2_title_jp">
                                    Main Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="section_2_title_jp"
                                    id="section_2_title_jp" required
                                    value="{{ old('section_2_title_jp', $page->section_2_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', [
                                    'name' => 'section_2_title_jp'
                                ])
                            </div>

                            <div class="col-md-12">
                                <label for="section_2_description_en">Description <span class="text-danger">
                                        *</span></label>
                                <textarea id="section_2_description_en" class="ckeditor" required="required" name="section_2_description_en">{{ old('section_2_description_en', $page->section_2_description_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', [
                                    'name' => 'section_2_description_en',
                                ])
                            </div>

                            <div class="col-md-12">
                                <label for="section_2_description_jp">Description JP<span class="text-danger">
                                        *</span></label>
                                <textarea id="section_2_description_jp" class="ckeditor" required="required" name="section_2_description_jp">{{ old('section_2_description_jp', $page->section_1_description_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', [
                                    'name' => 'section_2_description_jp'
                                ])
                            </div>
                        </div>

                       

                        <div class="row g-3">
                            <div class="widget-content widget-content-area">
                                <div class="row g-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title (EN)</th>
                                                <th>Value (EN)</th>
                                                <th>Title (JP)</th>
                                                <th>Value (JP)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @for ($i = 0; $i < count(old('nepal', $page->details ?? ['1'])); $i++)
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter title (EN)"
                                                            name="nepal[{{ $i }}][title_en]" required
                                                            value="{{ old('nepal.' . $i . '.title_en', $page->details[$i]['title_en'] ?? '') }}">
                                                        @include('backend.shared.form_field_error', [
                                                            'name' => 'nepal.' . $i . '.title_en',
                                                        ])
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter value (EN)"
                                                            name="nepal[{{ $i }}][value_en]" required
                                                            value="{{ old('nepal.' . $i . '.value_en', $page->details[$i]['value_en'] ?? '') }}">
                                                        @include('backend.shared.form_field_error', [
                                                            'name' => 'nepal.' . $i . '.value_en',
                                                        ])
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter title (JP)"
                                                            name="nepal[{{ $i }}][title_jp]" required
                                                            value="{{ old('nepal.' . $i . '.title_jp', $page->details[$i]['title_jp'] ?? '') }}">
                                                        @include('backend.shared.form_field_error', [
                                                            'name' => 'nepal.' . $i . '.title_jp',
                                                        ])
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter value (JP)"
                                                            name="nepal[{{ $i }}][value_jp]" required
                                                            value="{{ old('nepal.' . $i . '.value_jp', $page->details[$i]['value_jp'] ?? '') }}">
                                                        @include('backend.shared.form_field_error', [
                                                            'name' => 'nepal.' . $i . '.value_jp',
                                                        ])
                                                    </td>
                                                    <td>
                                                        @if ($i === 0)
                                                            <button type="button" class="btn btn-success"
                                                                onclick="addRow()">Add
                                                            </button>
                                                        @else
                                                            <button type="button" class="btn btn-danger"
                                                                onclick="removeRow(this)">Remove
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label" for="page_image">
                                    Page Image<span class="text-danger"> *</span>
                                </label>
                                <div id="page_image" class="multiple-file-upload">
                                    <input name="page_image" type="file" {{ $page->id ? '' : 'required' }}
                                        accept="image/png,image/jpeg,image/jpg" data-browse-on-zone-click="true"
                                        class="page_image" data-show-remove="true"
                                        data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
                                </div>
                                @include('backend.shared.form_field_error', ['name' => 'page_image'])
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="images">
                                    Banner Bg Image<span class="text-danger"> *</span>
                                </label>
                                <div id="images" class="multiple-file-upload">
                                    <input name="image" type="file" {{ $page->id ? '' : 'required' }}
                                        accept="image/png,image/jpeg,image/jpg" data-browse-on-zone-click="true"
                                        class="image" data-show-remove="true"
                                        data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
                                </div>
                                @include('backend.shared.form_field_error', ['name' => 'image'])
                            </div>

                            <div class="col-md-3">
                                <label class="form-label" for="section_1_image">
                                    Section 1 Image<span class="text-danger"> *</span>
                                </label>
                                <div id="section_1_image" class="multiple-file-upload">
                                    <input name="section_1_image" type="file" {{ $page->id ? '' : 'required' }}
                                        accept="image/png,image/jpeg,image/jpg" data-browse-on-zone-click="true"
                                        class="section_1_image" data-show-remove="true"
                                        data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
                                </div>
                                @include('backend.shared.form_field_error', ['name' => 'section_1_image'])
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="section_2_image">
                                    Section 2 Image<span class="text-danger"> *</span>
                                </label>
                                <div id="section_2_image" class="multiple-file-upload">
                                    <input name="section_2_image" type="file" {{ $page->id ? '' : 'required' }}
                                        accept="image/png,image/jpeg,image/jpg" data-browse-on-zone-click="true"
                                        class="section_2_image" data-show-remove="true"
                                        data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
                                </div>
                                @include('backend.shared.form_field_error', ['name' => 'section_2_image'])
                            </div>

                            <div class="col-md-12">
                                <div class="mb-1">
                                    <label class="form-label" for="images">Gallery Images</label>
                                    <div class="form-label gallery-360">
                                        <input type="file" name="images[]" id="images"
                                            accept="image/png,image/jpeg,image/jpg" class="gallery-input-preview" multiple
                                            data-browse-on-zone-click="true"
                                            data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
                                    </div>
                                </div>
                            </div>


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
    <script src="//cdn.ckeditor.com/4.21.0/basic/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            CKEDITOR.replaceAll('ckeditor');
            @if (isset($page->id))
                singleImageEdit(".image", "{!! $page->image_link !!}", 1024);
                singleImageEdit(".page_image", "{!! $page->page_image_link !!}", 1024);
                singleImageEdit(".section_1_image", "{!! $page->section_one_image !!}", 1024);
                singleImageEdit(".section_2_image", "{!! $page->section_two_image !!}", 1024);
                multipleImageEdit(".gallery-input-preview", {!! $page->images !!}, 1024, 9,
                    '/about-nepal/remove_image');
            @else
                singleImageCreate(".page_image", 1024)
                singleImageCreate(".image", 1024)
                multipleImageCreate(".gallery-input-preview", 1024, 9);
            @endif
        })

        function addRow() {
            let tableBody = document.querySelector("tbody");
            let newRow = `
            <tr>
                <td>
                    <input type="text" class="form-control" placeholder="Enter title (EN)" name="nepal[${tableBody.childElementCount}][title_en]" required>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="Enter value (EN)" name="nepal[${tableBody.childElementCount}][value_en]" required>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="Enter title (JP)" name="nepal[${tableBody.childElementCount}][title_jp]" required>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="Enter value (JP)" name="nepal[${tableBody.childElementCount}][value_jp]" required>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button>
                </td>
            </tr>
        `;
            tableBody.insertAdjacentHTML("beforeend", newRow);
        }

        function removeRow(button) {
            let row = button.closest("tr");
            row.remove();
        }
    </script>
@endpush
