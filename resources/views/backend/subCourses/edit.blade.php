@extends('backend.layouts.master')

@section('title', 'Sub Course')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Edit Sub Course',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Sub Courses' => route('subCourses.index'),
            'Edit' => ''
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
              action="{{ route('subCourses.update', $subCourse->id) }}">
            @csrf
            @method('PATCH')
            @include('backend.subCourses.form')
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

            singleImageEdit(".file-input-preview", "{!! $subCourse->image_link !!}", 3000);
        })
    </script>
@endpush

