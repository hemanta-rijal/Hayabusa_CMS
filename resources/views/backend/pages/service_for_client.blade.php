@extends('backend.layouts.master')

@section('title', 'Service for Clients Page')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Service for Clients Page Content',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Service for Clients Page' => ''
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
              action="{{ route('page.client-services.save') }}">
            @csrf
            @if(isset($page->id))
                <input name="id" value="{{ $page->id }}" type="hidden">
            @endif
            <div class="col-lg-12 layout-spacing col-md-12 col-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Service for Clients Page Information</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="sub_title_en">
                                    Sub Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="sub_title_en"
                                       id="sub_title_en" required
                                       value="{{ old('sub_title_en', $page->sub_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'sub_title_en'])
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="sub_title_jp">
                                    Sub Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="sub_title_jp"
                                       id="sub_title_jp" required
                                       value="{{ old('sub_title_jp', $page->sub_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'sub_title_jp'])
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="title_en">
                                    Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="title_en"
                                       id="title_en" required
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

                            <div class="col-md-12">
                                <label for="description_en">Description <span class="text-danger"> *</span></label>
                                <textarea id="description_en" class="ckeditor" required="required"
                                          name="description_en">{{ old('description_en', $page->description_en ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'description_en'])
                            </div>

                            <div class="col-md-12">
                                <label for="description_jp">Description JP<span
                                        class="text-danger"> *</span></label>
                                <textarea id="description_jp" class="ckeditor" required="required"
                                          name="description_jp">{{ old('description_jp', $page->description_jp ?? '') }}</textarea>
                                @include('backend.shared.form_field_error', ['name' => 'description_jp'])
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
                                <label class="form-label" for="services_title_en">
                                    Services Title<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="services_title_en"
                                       id="services_title_en" required
                                       value="{{ old('services_title_en', $page->services_title_en ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'services_title_en'])
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="services_title_jp">
                                    Services Title JP<span class="text-danger"> *</span>
                                </label>
                                <input type="text" class="form-control" name="services_title_jp"
                                       id="services_title_jp" required
                                       value="{{ old('services_title_jp', $page->services_title_jp ?? '') }}">
                                @include('backend.shared.form_field_error', ['name' => 'services_title_jp'])
                            </div>

                            <div class="widget-content widget-content-area">
                                <div class="row g-3">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Title and Detail</th>
                                            <th>Title and Detail JP</th>
                                            <th style="width: 30%">Image</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="services-table-body">

                                        @for ($i = 0; $i < count(old('services', $page->services ?? ["1"])); $i++)
                                            <tr>
                                                <td style="width: 45%">
                                                    <input type="text" class="form-control"
                                                           placeholder="Enter Title (EN)"
                                                           name="services[{{ $i }}][title_en]" required
                                                           value="{{ old('services.'.$i.'.title_en', $page->services[$i]['title_en'] ?? '') }}">
                                                    @include('backend.shared.form_field_error', ['name' => 'services.'.$i.'.title_en'])
                                                    <br/>
                                                    <textarea class="form-control" rows="10"
                                                              name="services[{{ $i }}][description_en]"
                                                              placeholder="Enter description (EN)"
                                                              required>{{ old('services.'.$i.'.description_en', $page->services[$i]['description_en'] ?? '') }}</textarea>
                                                    @include('backend.shared.form_field_error', ['name' => 'services.'.$i.'.description_en'])
                                                </td>
                                                <td style="width: 45%">
                                                    <input type="text" class="form-control"
                                                           placeholder="Enter title (JP)"
                                                           name="services[{{ $i }}][title_jp]" required
                                                           value="{{ old('services.'.$i.'.title_jp', $page->services[$i]['title_jp'] ?? '') }}">
                                                    @include('backend.shared.form_field_error', ['name' => 'services.'.$i.'.title_jp'])
                                                    <br/>
                                                    <textarea class="form-control" rows="10"
                                                              name="services[{{ $i }}][description_jp]"
                                                              placeholder="Enter description (EN)"
                                                              required>{{ old('services.'.$i.'.description_jp', $page->services[$i]['description_jp'] ?? '') }}</textarea>
                                                    @include('backend.shared.form_field_error', ['name' => 'services.'.$i.'.description_jp'])
                                                </td>
                                                <td>
                                                    <input name="services[{{ $i }}][image]" type="file"
                                                           {{ $page->id ? '' : 'required' }}
                                                           accept="image/png,image/jpeg,image/jpg"
                                                           data-browse-on-zone-click="true"
                                                           class="service-{{ $i }}" data-show-remove="true"
                                                           data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
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
                        </div>

                        <div class="col-12 mt-3">
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
    <script src="//cdn.ckeditor.com/4.21.0/basic/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            let tableBody = document.getElementById("services-table-body");
            let rows = tableBody.getElementsByTagName("tr");
            CKEDITOR.replaceAll('ckeditor');
            @if(isset($page->id))
            singleImageEdit(".page_image", "{!! $page->images['page_image'] !!}", 1024);
            @for ($i = 0; $i < count($page->images['services']); $i++)
            singleImageEdit(".service-{{$i}}", "{{ $page->images['services'][$i] }}", 1024);
            @endfor
            @else
            singleImageCreate(".page_image", 1024)
            for (let i = 0; i < rows.length; i++) {
                singleImageCreate(".service-" + i, 1024);
            }
            @endif
        })

        function addRow() {
            let tableBody = document.querySelector("tbody");

            // Set the HTML content for the new row
            let newRow = `
            <td>
                <input type="text" class="form-control" placeholder="Enter title (EN)"
                    name="services[${tableBody.childElementCount}][title_en]" required>
                <br/>
                <textarea class="form-control" rows="10" name="services[${tableBody.childElementCount}][description_en]"
                    placeholder="Enter description (EN)" required></textarea>
            </td>
            <td>
                <input type="text" class="form-control" placeholder="Enter title (JP)"
                    name="services[${tableBody.childElementCount}][title_jp]" required>
                <br/>
                <textarea class="form-control" rows="10" name="services[${tableBody.childElementCount}][description_jp]"
                    placeholder="Enter description (JP)" required></textarea>
            </td>
            <td>
                <input name="services[${tableBody.childElementCount}][image]" type="file" required
                    accept="image/png,image/jpeg,image/jpg" data-browse-on-zone-click="true"
                    class="service-${tableBody.childElementCount}" data-show-remove="true"
                    data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
            </td>
            <td>
                <button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button>
            </td>
        `;
            tableBody.insertAdjacentHTML("beforeend", newRow);
            singleImageCreate(".service-" + (tableBody.childElementCount - 1), 1024);
        }

        function removeRow(button) {
            let row = button.closest("tr");
            row.remove();
        }
    </script>
@endpush
