@extends('frontend.layouts.master')
@section('content')
    <div class="container extra-page">
        <img src="{{ $siteData->logo_link }}" alt="logo" class="logo"
            onclick="window.location='{{ route('frontend.home') }}'" style="cursor: pointer" />
        <h1>500</h1>
        <h5>INTERNAL SERVER ERROR</h5>
        <p>The server encountered an internal error or misconfiguration and was unable to complete your request.</p>
        <button class="button" onclick="window.location='{{ route('frontend.home') }}'">Go back to home</button>
    </div>
@endsection
