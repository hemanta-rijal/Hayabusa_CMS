@extends('backend.layouts.master')

@section('title', 'About Page')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'About Page Content',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'About Page' => ''
        ]
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
        <form class="row" method="post" enctype='multipart/form-data'
              action="{{ route('page.about.save') }}">
            @csrf
            @if(isset($page->id))
                <input name="id" value="{{ $page->id }}" type="hidden">
            @endif
            <div class="col-lg-12 layout-spacing col-md-12 col-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>About Page Information</h4>
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
                                <label class="form-label" for="page_title">
                                    Page Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="page_title_en"
                                       id="page_title" required
                                       value="{{ old('page_title_en', $page->page_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'page_title_en'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="page_title_jp">
                                    Page Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="page_title_jp"
                                       id="page_title_jp" required
                                       value="{{ old('page_title_jp', $page->page_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'page_title_jp'])
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="page_sub_title">
                                    Page Sub Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="page_sub_title_en"
                                       id="page_sub_title" required
                                       value="{{ old('page_sub_title_en', $page->page_sub_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'page_sub_title_en'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="page_sub_title_jp">
                                    Page Sub Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="page_sub_title_jp"
                                       id="page_sub_title_jp" required
                                       value="{{ old('page_sub_title_jp', $page->page_sub_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'page_sub_title_jp'])
                            </div>

                            <div class="col-md-12">
                                <label for="page_description_en">Description <span class="text-danger"> *</span></label>
                                <textarea id="page_description_en" class="ckeditor" required="required"
                                          name="page_description_en">{{ old('page_description_en', $page->page_description_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'page_description_en'])
                            </div>

                            <div class="col-md-12">
                                <label for="page_description_jp">Description JP<span
                                        class="text-danger"> *</span></label>
                                <textarea id="page_description_jp" class="ckeditor" required="required"
                                          name="page_description_jp">{{ old('page_description_jp', $page->page_description_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'page_description_jp'])
                            </div>

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
                                        @for ($i = 0; $i < count(old('detail', $page->details ?? ["1"])); $i++)
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control"
                                                           placeholder="Enter title (EN)"
                                                           name="detail[{{ $i }}][title_en]" required
                                                           value="{{ old('detail.'.$i.'.title_en', $page->details[$i]['title_en'] ?? '') }}">
                                                    @include('backend.shared.form_field_error', ['name' => 'detail.'. $i .'.title_en'])
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                           placeholder="Enter value (EN)"
                                                           name="detail[{{ $i }}][value_en]" required
                                                           value="{{ old('detail.'.$i.'.value_en', $page->details[$i]['value_en'] ?? '') }}">
                                                    @include('backend.shared.form_field_error', ['name' => 'detail.'. $i .'.value_en'])
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                           placeholder="Enter title (JP)"
                                                           name="detail[{{ $i }}][title_jp]" required
                                                           value="{{ old('detail.'.$i.'.title_jp', $page->details[$i]['title_jp'] ?? '') }}">
                                                    @include('backend.shared.form_field_error', ['name' => 'detail.'. $i .'.title_jp'])
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                           placeholder="Enter value (JP)"
                                                           name="detail[{{ $i }}][value_jp]" required
                                                           value="{{ old('detail.'.$i.'.value_jp', $page->details[$i]['value_jp'] ?? '') }}">
                                                    @include('backend.shared.form_field_error', ['name' => 'detail.'. $i .'.value_jp'])
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

                            <div class="col-md-6">
                                <label class="form-label" for="team_sub_title">
                                    Team Sub Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="team_sub_title_en"
                                       id="team_sub_title" required
                                       value="{{ old('team_sub_title_en', $page->team_sub_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'team_sub_title_en'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="team_sub_title_jp">
                                    Team Sub Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="team_sub_title_jp"
                                       id="team_sub_title_jp" required
                                       value="{{ old('team_sub_title_jp', $page->team_sub_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'team_sub_title_jp'])
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="team_title">
                                    Team Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="team_title_en"
                                       id="team_title" required
                                       value="{{ old('team_title_en', $page->team_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'team_title_en'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="team_title_jp">
                                    Team Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="team_title_jp"
                                       id="team_title_jp" required
                                       value="{{ old('team_title_jp', $page->team_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'team_title_jp'])
                            </div>

                            <div class="col-md-12">
                                <label for="team_description_en">Team Description <span class="text-danger"> *</span></label>
                                <textarea id="team_description_en" class="ckeditor" required="required"
                                          name="team_description_en">{{ old('team_description_en', $page->team_description_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'team_description_en'])
                            </div>

                            <div class="col-md-12">
                                <label for="team_description_jp">Team Description JP<span
                                        class="text-danger"> *</span></label>
                                <textarea id="team_description_jp" class="ckeditor" required="required"
                                          name="team_description_jp">{{ old('team_description_jp', $page->team_description_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'team_description_jp'])
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="director_title">
                                    Director Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="director_title_en"
                                       id="director_title" required
                                       value="{{ old('director_title_en', $page->director_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'director_title_en'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="director_title_jp">
                                    Director Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="director_title_jp"
                                       id="director_title_jp" required
                                       value="{{ old('director_title_jp', $page->director_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'director_title_jp'])
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="director_tagline">
                                    Director Tagline<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="director_tagline_en"
                                       id="director_tagline" required
                                       value="{{ old('director_tagline_en', $page->director_tagline_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'director_tagline_en'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="director_tagline_jp">
                                    Director Tagline JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="director_tagline_jp"
                                       id="director_tagline_jp" required
                                       value="{{ old('director_tagline_jp', $page->director_tagline_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'director_tagline_jp'])
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="director_name">
                                    Director Name<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="director_name_en"
                                       id="director_name" required
                                       value="{{ old('director_name_en', $page->director_name_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'director_name_en'])
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="director_name_jp">
                                    Director Name JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="director_name_jp"
                                       id="director_name_jp" required
                                       value="{{ old('director_name_jp', $page->director_name_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'director_name_jp'])
                            </div>

                            <div class="col-md-12">
                                <label for="director_description_en">Director Description <span class="text-danger"> *</span></label>
                                <textarea id="director_description_en" class="ckeditor" required="required"
                                          name="director_description_en">{{ old('director_description_en', $page->director_description_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'director_description_en'])
                            </div>

                            <div class="col-md-12">
                                <label for="director_description_jp">Director Description JP<span
                                        class="text-danger"> *</span></label>
                                <textarea id="director_description_jp" class="ckeditor" required="required"
                                          name="director_description_jp">{{ old('director_description_jp', $page->director_description_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'director_description_jp'])
                            </div>

                            <div class="col-md-3">
                                <label class="form-label" for="page_image">
                                    Page Image<span class="text-danger"> *</span>
                                </label>
                                <div id="page_image" class="multiple-file-upload">
                                    <input name="page_image" type="file"
                                           {{ $page->id ? '' : 'required' }}
                                           accept="image/png,image/jpeg,image/jpg"
                                           data-browse-on-zone-click="true"
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
                                    <input name="image" type="file"
                                           {{ $page->id ? '' : 'required' }}
                                           accept="image/png,image/jpeg,image/jpg"
                                           data-browse-on-zone-click="true"
                                           class="image" data-show-remove="true"
                                           data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
                                </div>
                                @include('backend.shared.form_field_error', ['name' => 'image'])
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="director_image">
                                    Director Image<span class="text-danger"> *</span>
                                </label>
                                <div id="director_image" class="multiple-file-upload">
                                    <input name="director_image" type="file"
                                           {{ $page->id ? '' : 'required' }}
                                           accept="image/png,image/jpeg,image/jpg"
                                           data-browse-on-zone-click="true"
                                           class="director_image" data-show-remove="true"
                                           data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
                                </div>
                                @include('backend.shared.form_field_error', ['name' => 'director_image'])
                            </div>

                            <div class="col-md-12">
                                <div class="mb-1">
                                    <label class="form-label" for="gallery-images">Gallery Images</label>
                                    <div class="form-label gallery-360">
                                        <input type="file" name="images[]" id="gallery-images"
                                               accept="image/png,image/jpeg,image/jpg"
                                               class="gallery-input-preview" multiple
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
        $(document).ready(function () {
            CKEDITOR.replaceAll('ckeditor');
            @if(isset($page->id))
            singleImageEdit(".image", "{!! $page->image_link !!}", 3000);
            singleImageEdit(".page_image", "{!! $page->page_image_link !!}", 3000);
            singleImageEdit(".director_image", "{!! $page->director_image_link !!}", 3000);
            multipleImageEdit(".gallery-input-preview", {!! $page->images !!}, 1024, 9, '/about/remove_image');
            @else
            singleImageCreate(".page_image", 1024)
            singleImageCreate(".director_image", 1024)
            singleImageCreate(".image", 1024)
            multipleImageCreate(".gallery-input-preview", 1024, 9);
            @endif
        })

        function addRow() {
            let tableBody = document.querySelector("tbody");
            let newRow = `
            <tr>
                <td>
                    <input type="text" class="form-control" placeholder="Enter title (EN)" name="detail[${tableBody.childElementCount}][title_en]" required>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="Enter value (EN)" name="detail[${tableBody.childElementCount}][value_en]" required>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="Enter title (JP)" name="detail[${tableBody.childElementCount}][title_jp]" required>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="Enter value (JP)" name="detail[${tableBody.childElementCount}][value_jp]" required>
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
