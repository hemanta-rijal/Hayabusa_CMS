@extends('backend.layouts.master')

@section('title', 'Dashboard')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Dashboard',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
        ]
    ])
@endsection

@section('content')

@endsection
