@extends('backend.layouts.master')

@section('title', 'Contact Form Submissions')

@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Contact Form Submissions',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Contact Form Submissions' => ''
        ]
    ])
@endsection

@section('content')
    <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <!-- Add any additional buttons or actions here -->
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th style="width:5%" scope="col">S.No</th>
                                <th class="text-center" scope="col">Full Name</th>
                                <th class="text-center" scope="col">Email Address</th>
                                <th class="text-center" scope="col">Phone Number</th>
                                <th class="text-center" scope="col">Service</th>
                                <th class="text-center" scope="col">Date</th>
                                <th class="text-center" scope="col">Time</th>
                                <th class="text-center" scope="col">Additional Details</th>
                                <th class="text-center" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($submissions as $index => $submission)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td class="text-center">{{ $submission->full_name }}</td>
                                    <td class="text-center">{{ $submission->email }}</td>
                                    <td class="text-center">{{ $submission->phone }}</td>
                                    <td class="text-center">{{ $submission->service }}</td>
                                    <td class="text-center">{{ $submission->day }}</td>
                                    <td class="text-center">{{ $submission->time }}</td>
                                    <td class="text-center">{{ $submission->details }}</td>
                                    <td class="text-center">
                                      <div class="action-btns">
                                          <!-- Delete button -->
                                          <form action="{{ route('contact.destroy', $submission->id) }}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this submission?')">Delete</button>
                                          </form>
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
