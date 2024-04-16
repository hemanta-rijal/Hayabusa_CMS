@extends('backend.layouts.master')

@section('title', 'FAQ')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'FAQs',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'FAQs' => ''
        ]
    ])
@endsection

@section('content')
    <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <div class="custom-buttons">
                            @include('backend.shared.buttons.add-btn', ['route'=> route("faqs.create")])
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th style="width:5%" scope="col">S.No</th>
                            <th class="text-center" scope="col">Question</th>
                            <th style="width: 10%" class="text-center" scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody class="sortable">
                        @foreach($faqs as $index => $faq)
                            <tr data-row-id="{{ $index +1 }}" data-row-item-id="{{ $faq->id }}"
                                data-row-table="faqs">
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="text-center">{{ $faq->question_en }}</td>
                                <td class="text-center">
                                    <div class="action-btns">
                                        @include('backend.shared.buttons.edit-btn', ['route' => route('faqs.edit', $faq->id)])
                                        @include('backend.shared.buttons.delete-btn', ['route' => route('faqs.destroy', $faq->id)])
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset("lib/jquery-ui/jquery-ui.min.css") }}" type="text/css"/>
@endpush

@push('custom-js')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        const url = "{!! route('position-sort') !!}";
    </script>
    <script src="{{ asset('js/backend/delete-alert.js') }}"></script>
    <script src="{{ asset('js/backend/position-sort.js') }}"></script>
@endpush

