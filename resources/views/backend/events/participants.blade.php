@extends('backend.layouts.master')

@section('title', 'Event Participants')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Event Participants',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Events' => route('events.index'),
            'Event Participants' => ''
        ]
    ])
@endsection

@section('content')
    <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <div class="custom-buttons">
                                <h4>Participants for {{ $event->title_en }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th style="width:5%" scope="col">S.No</th>
                            <th class="text-center" scope="col">Name</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Phone No.</th>
                            <th class="text-center" scope="col">Detail</th>
                        </tr>
                        </thead>
                        <tbody class="sortable">
                        @foreach($participants as $index => $participant)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="text-center">{{ $participant->name }}</td>
                                <td class="text-center">{{ $participant->email }}</td>
                                <td class="text-center">{{ $participant->phone }}</td>
                                <td class="text-center">{{ $participant->detail }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-js')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/backend/delete-alert.js') }}"></script>
@endpush

