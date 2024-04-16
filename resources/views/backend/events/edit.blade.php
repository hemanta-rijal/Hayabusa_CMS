@extends('backend.layouts.master')

@section('title', 'Event')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Edit Event',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Events' => route('events.index'),
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
              action="{{ route('events.update', $event->id) }}">
            @csrf
            @method('PATCH')
            @include('backend.events.form')
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

            singleImageEdit(".file-input-preview", "{!! $event->thumbnail_link !!}", 3000);
            multipleImageEdit(".gallery-input-preview", {!! $event->images !!}, 2000, 9, '/remove_image');
        })
    </script>
@endpush

