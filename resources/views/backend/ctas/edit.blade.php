@extends('backend.layouts.master')

@section('title', 'CTA Page')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'CTA Page Content',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'CTA Page' => '',
        ],
    ])
@endsection

@section('content')
    <div class="row">
        <form class="row" method="post" enctype='multipart/form-data' 
        action="{{ route('ctas.update', $cta->id) }}">
            @csrf
            @method('PUT')
            @include('backend.ctas.form')
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

            singleImageEdit(".file-input-preview", "{!! $cta->image_link !!}", 3000);
        })
    </script>
@endpush
