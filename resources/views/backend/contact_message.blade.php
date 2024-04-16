@extends('backend.layouts.master')

@section('title', 'Contact Messages')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Contact Messages',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Contact Messages' => ''
        ]
    ])
@endsection

@section('content')

    <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th style="width:5%" scope="col">S.No</th>
                            <th class="text-center" scope="col">Name</th>
                            <th style="width: 10%" class="text-center" scope="col">Email</th>
                            <th style="width: 10%" class="text-center" scope="col">Subject</th>
                            <th style="width: 50%" class="text-center" scope="col">Message</th>
                        </tr>
                        </thead>
                        <tbody class="sortable">
                        @foreach($messages as $index => $message)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="text-center">{{ $message->name }}</td>
                                <td class="text-center">{{ $message->email }}</td>
                                <td class="text-center">
                                    {{ $message->subject }}
                                </td>
                                <td style="width: 10%"><p style="word-wrap: break-word; max-width: 10%">{{ $message->message }}</p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
