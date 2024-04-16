@extends('backend.layouts.master')

@section('title', 'Course')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Edit Course',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Courses' => route('courses.index'),
            'Edit' => ''
        ]
    ])
@endsection

@section('content')
    <div class="row">
        <form class="row" method="post" enctype='multipart/form-data'
              action="{{ route('courses.update', $course->id) }}">
            @csrf
            @method('PUT')
            @include('backend.courses.form')
        </form>
    </div>
@endsection

@push('custom-styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css"
          crossorigin="anonymous">
@endpush

@push('custom-js')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
@endpush

