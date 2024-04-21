@extends('backend.layouts.master')

@section('title', 'Settings')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Statistics',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Statistics' => '',
        ],
    ])
@endsection

@section('content')
    <div class="row">
        <form class="row" method="post" enctype='multipart/form-data' action="{{ route('statistics.save') }}">
            @csrf
            @if (isset($settings->id))
                <input name="id" value="{{ $settings->id }}" type="hidden">
            @endif

            <div class="col-lg-12 layout-spacing col-md-7 col-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Statics Information</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        @foreach ($allStat as $stat)
                            <div class="row g-3">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4 style="text-transform:capitalize">
                                        {{ str_replace(['stat.', '_'], ' ', $stat->key) }}</h4>
                                </div>
                                <input type="hidden" name="key[]" value="{{$stat->key}}">
                                <div class="col-md-6 col-lg-6 cpl-sm-12 ">
                                    <label class="form-label" for="name">
                                        Title<span class="text-danger"> *</span>
                                    </label>
                                    <input type="text" class="form-control" name="title_en[]" id="name" required
                                        value="{{ old('title_en', $stat->title_en ?? '') }}">
                                    @include('backend.shared.form_field_error', [
                                        'name' => 'title_en',
                                    ])
                                </div>
                                <div class="col-md-6 col-lg-6 cpl-sm-12 ">
                                    <label class="form-label" for="name">
                                        Title JP<span class="text-danger"> *</span>
                                    </label>
                                    <input type="text" class="form-control" name="title_jp[]" id="name" required
                                        value="{{ old('title_jp', $stat->title_jp ?? '') }}">
                                    @include('backend.shared.form_field_error', [
                                        'name' => 'title_jp',
                                    ])
                                </div>

                                <div class="col-md-6 col-lg-6 cpl-sm-12">
                                    <label class="form-label" for="name_jp">
                                        Value<span class="text-danger"> *</span>
                                    </label>
                                    <input type="text" class="form-control" name="value_en[]" id="value_en" required
                                        value="{{ old('value_en', $stat->value_en ?? '') }}">
                                    @include('backend.shared.form_field_error', [
                                        'name' => 'value_en',
                                    ])
                                </div>

                                <div class="col-md-4 col-lg-6 cpl-sm-12">
                                    <label class="form-label" for="email">
                                        Value JP<span class="text-danger"> *</span>
                                    </label>
                                    <input type="text" class="form-control" name="value_jp[]" id="value_jp"
                                        value="{{ old('value_jp', $stat->value_jp ?? '') }}" required>
                                    @include('backend.shared.form_field_error', ['name' => 'value_jp'])
                                </div>
                                @if (!$loop->last)
                                    <hr />
                                @endif

                            </div>
                        @endforeach
                        <div class="row g-3 mt-3">
                          <div class="col-12">
                              <button class="btn btn-primary" type="submit">Submit</button>
                          </div>
                      </div>
                    </div>
                </div>


            </div>
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
        $(document).ready(function() {
            @if (isset($settings->id))
                singleImageEdit(".file-input-preview", "{!! $settings->logo_link !!}", 4000);
                singleImageEdit(".logo-secondary-preview", "{!! $settings->logo_secondary_link !!}", 4000);
            @else
                singleImageCreate(".file-input-preview", 4000);
                singleImageCreate(".logo-secondary-preview", 4000);
            @endif
        })
    </script>
@endpush
