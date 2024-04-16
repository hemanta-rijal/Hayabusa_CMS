@extends('backend.layouts.master')

@section('title', 'Sub Courses')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Sub Courses',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Sub Courses' => ''
        ]
    ])
@endsection

@section('content')
    <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <div class="custom-buttons">
                            @include('backend.shared.buttons.add-btn', ['route'=> route("subCourses.create")])
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th style="width:5%" scope="col">S.No</th>
                            <th class="text-center" scope="col">Course</th>
                            <th class="text-center" scope="col">Name</th>
                            <th class="text-center" scope="col">Name JP</th>
                            <th class="text-center" scope="col">Image</th>
                            <th style="width: 10%" class="text-center" scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody class="sortable">
                        @foreach($subCourses as $index => $subCourse)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="text-center">{{ $subCourse->course->name_en }}</td>
                                <td class="text-center">{{ $subCourse->name_en }}</td>
                                <td class="text-center">{{ $subCourse->name_jp }}</td>
                                <td class="text-center">
                                    <img src="{{ $subCourse->image_link }}"
                                         style="height: 80px; width: 80px; object-fit: scale-down"
                                         alt="sub-course-image">
                                </td>
                                <td class="text-center">
                                    <div class="action-btns">
                                        @include('backend.shared.buttons.edit-btn', ['route' => route('subCourses.edit', $subCourse->id)])
                                        @include('backend.shared.buttons.delete-btn', ['route' => route('subCourses.destroy', $subCourse->id)])
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-js')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/backend/delete-alert.js') }}"></script>
@endpush

