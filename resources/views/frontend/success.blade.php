@extends('frontend.layouts.master')
@section('content')
    <div class="container extra-page">
        <img src={{ asset('frontend/icons/success.svg') }} alt="sucess"
            onclick="window.location='{{ route('frontend.home') }}'" style="cursor: pointer" />
        <h3>Success!</h3>
        <p>Your form has been submitted. We will get in touch with you very soon. If you need to contact us please call
            <span class="text-secondary text-bold">9851327207</span>

        </p>
        <button class="button" onclick="window.location='{{ route('frontend.home') }}'">Go back to home</button>
    </div>
@endsection
