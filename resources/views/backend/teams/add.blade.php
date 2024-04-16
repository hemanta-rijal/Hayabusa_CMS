@extends('backend.layouts.master')

@section('title', 'Team')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Add Team',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Teams' => route('teams.index'),
            'Add' => ''
        ]
    ])
@endsection

@section('content')
    <div class="row">
        <form class="row" method="post" enctype='multipart/form-data'
              action="{{ route('teams.store') }}">
            @csrf
            @include('backend.teams.form')
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
            singleImageCreate(".file-input-preview", 1024);
        })
    </script>
@endpush

