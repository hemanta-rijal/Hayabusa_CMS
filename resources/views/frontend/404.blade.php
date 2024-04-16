@extends('frontend.layouts.master')
@section('content')
    <div class="container extra-page">
        <img src="{{ $siteData->logo_link }}" alt="logo" class="logo"
            onclick="window.location='{{ route('frontend.home') }}'" style="cursor: pointer" />
        <h1>404</h1>
        <h5>Page Not Found</h5>
        <p>The page you are looking doesnot exist or an error occurred. Go back to previous page or go back to home to
            choose a new direction.</p>
        <button class="button" onclick="window.location='{{ route('frontend.home') }}'">Go back to home</button>
    </div>
@endsection
