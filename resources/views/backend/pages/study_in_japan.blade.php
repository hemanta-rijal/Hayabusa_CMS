@extends('backend.layouts.master')

@section('title', 'Study Japan Page')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Study Japan Page Content',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Study Japan Page' => ''
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
              action="{{ route('page.study-in-japan.save') }}">
            @csrf
            @if(isset($page->id))
                <input name="id" value="{{ $page->id }}" type="hidden">
            @endif
            <div class="col-lg-12 layout-spacing col-md-12 col-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Study Japan Page Information</h4>
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

                            <div class="col-md-6 col-lg-6 cpl-sm-12 ">
                                <label class="form-label" for="button_text">
                                    Button Text<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_text_en"
                                       id="button_text" required
                                       value="{{ old('button_text_en', $page->button_text_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'button_text_en'])
                            </div>

                            <div class="col-md-6 col-lg-6 cpl-sm-12">
                                <label class="form-label" for="button_text_jp">
                                    Button Text JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="button_text_jp"
                                       id="button_text_jp" required
                                       value="{{ old('button_text_jp', $page->button_text_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'button_text_jp'])
                            </div>

                            <div class="col-12">
                                <label class="form-label" for="link">
                                    Button Link<span class="text-danger"> *</span>
                                </label>
                                <input type="url" class="form-control" name="link"
                                       id="link" required
                                       value="{{ old('link', $page->link ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'link'])
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="secondary_sub_title_en">
                                    Secondary Sub Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="secondary_sub_title_en"
                                       id="secondary_sub_title_en" required
                                       value="{{ old('secondary_sub_title_en', $page->secondary_sub_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'secondary_sub_title_en'])
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="secondary_sub_title_jp">
                                    Secondary Sub Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="secondary_sub_title_jp"
                                       id="secondary_sub_title_jp" required
                                       value="{{ old('secondary_sub_title_jp', $page->secondary_sub_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'secondary_sub_title_jp'])
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="secondary_title_en">
                                    Secondary Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="secondary_title_en"
                                       id="secondary_title_en" required
                                       value="{{ old('secondary_title_en', $page->secondary_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'secondary_title_en'])
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="secondary_title_jp">
                                    Secondary Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="secondary_title_jp"
                                       id="secondary_title_jp" required
                                       value="{{ old('secondary_title_jp', $page->secondary_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'secondary_title_jp'])
                            </div>

                            <div class="col-md-12">
                                <label for="secondary_page_description_en">Secondary Description <span class="text-danger"> *</span></label>
                                <textarea id="secondary_page_description_en" class="ckeditor" required="required"
                                          name="secondary_page_description_en">{{ old('secondary_page_description_en', $page->secondary_page_description_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'secondary_page_description_en'])
                            </div>

                            <div class="col-md-12">
                                <label for="secondary_page_description_jp">Secondary Description JP<span
                                        class="text-danger"> *</span></label>
                                <textarea id="secondary_page_description_jp" class="ckeditor" required="required"
                                          name="secondary_page_description_jp">{{ old('secondary_page_description_jp', $page->secondary_page_description_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'secondary_page_description_jp'])
                            </div>

                            <div class="widget-content widget-content-area">
                                <div class="row g-3">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>English</th>
                                            <th>Japanese</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for ($i = 0; $i < count(old('question', $page->questions ?? ["1"])); $i++)
                                            <tr>
                                                <td style="width: 45%">
                                                    <input type="text" class="form-control"
                                                           placeholder="Enter question (EN)"
                                                           name="question[{{ $i }}][question_en]" required
                                                           value="{{ old('question.'.$i.'.question_en', $page->questions[$i]['question_en'] ?? '') }}">
                                                    @include('backend.shared.form_field_error', ['name' => 'question.'.$i.'.question_en'])
                                                    <br/>
                                                    <textarea class="form-control" rows="4" name="question[{{ $i }}][answer_en]"
                                                              placeholder="Enter answer (EN)"
                                                              required>{{ old('question.'.$i.'.answer_en', $page->questions[$i]['answer_en'] ?? '') }}</textarea>
                                                    @include('backend.shared.form_field_error', ['name' => 'question.'.$i.'.answer_en'])
                                                </td>
                                                <td style="width: 45%">
                                                    <input type="text" class="form-control"
                                                           placeholder="Enter question (JP)"
                                                           name="question[{{ $i }}][question_jp]" required
                                                           value="{{ old('question.'.$i.'.question_jp', $page->questions[$i]['question_jp'] ?? '') }}">
                                                    @include('backend.shared.form_field_error', ['name' => 'question.'.$i.'.question_jp'])
                                                    <br/>
                                                    <textarea class="form-control" rows="4" name="question[{{ $i }}][answer_jp]"
                                                              placeholder="Enter answer (EN)"
                                                              required>{{ old('question.'.$i.'.answer_jp', $page->questions[$i]['answer_jp'] ?? '') }}</textarea>
                                                    @include('backend.shared.form_field_error', ['name' => 'question.'.$i.'.answer_jp'])
                                                </td>
                                                <td style="width: 10%">
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
                                <label class="form-label" for="second_image">
                                    Page Secondary Image<span class="text-danger"> *</span>
                                </label>
                                <div id="second_image" class="multiple-file-upload">
                                    <input name="second_image" type="file"
                                           {{ $page->id ? '' : 'required' }}
                                           accept="image/png,image/jpeg,image/jpg"
                                           data-browse-on-zone-click="true"
                                           class="second_image" data-show-remove="true"
                                           data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
                                </div>
                                @include('backend.shared.form_field_error', ['name' => 'second_image'])
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

                            <div class="col-md-12">
                                <div class="mb-1">
                                    <label class="form-label" for="images">Affiliated Colleges Images</label>
                                    <div class="form-label gallery-360">
                                        <input type="file" name="images[]" id="images"
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
            singleImageEdit(".image", "{!! $page->image_link !!}", 1024);
            singleImageEdit(".page_image", "{!! $page->page_image_link !!}", 1024);
            singleImageEdit(".second_image", "{!! $page->second_image_link !!}", 1024);
            multipleImageEdit(".gallery-input-preview", {!! $page->images !!}, 1024, 20, '/study-in-japan/remove_image');
            @else
            singleImageCreate(".page_image", 1024);
            singleImageCreate(".second_image", 1024);
            singleImageCreate(".image", 1024);
            multipleImageCreate(".gallery-input-preview", 1024, 20);
            @endif
        })

        function addRow() {
            let tableBody = document.querySelector("tbody");

            // Set the HTML content for the new row
            let newRow = `
            <td>
                <input type="text" class="form-control" placeholder="Enter question (EN)"
                    name="question[${tableBody.childElementCount}][question_en]" required>
                <br/>
                <textarea class="form-control" rows="4" name="question[${tableBody.childElementCount}][answer_en]"
                    placeholder="Enter answer (EN)" required></textarea>
            </td>
            <td>
                <input type="text" class="form-control" placeholder="Enter question (JP)"
                    name="question[${tableBody.childElementCount}][question_jp]" required>
                <br/>
                <textarea class="form-control" rows="4" name="question[${tableBody.childElementCount}][answer_jp]"
                    placeholder="Enter answer (JP)" required></textarea>
            </td>
            <td>
                <button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button>
            </td>
        `;

            tableBody.insertAdjacentHTML("beforeend", newRow);
        }

        function removeRow(button) {
            let row = button.closest("tr");
            row.remove();
        }
    </script>
@endpush
