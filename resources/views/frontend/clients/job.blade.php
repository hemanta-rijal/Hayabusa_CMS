@php
    $list = [
        ['title' => 'Factory Worker', 'category' => 'Factory Worker', 'avaiability' => '120', 'salary' => 'USD 550 / Month', 'description' => 'Car factory worker', 'companyName' => 'Takt Outsourcing SRL', 'country' => '120', 'phone' => 'USD 550 / Month', 'contactPerson' => 'Ketan Maharjan', 'contactEmail' => 'ketan@maharjan.com', 'address' => '66770', 'facilities' => ['Uniform', 'Food', 'Transportation', 'Overtime'], 'workingHour' => '8', 'contractPeriod' => '2', 'leave' => '20', 'additional' => "With our extensive network of partner institutions and industry connections, Hayabusa Consultancy and Training Center strives to provide exclusive opportunities for internships, exchange programs, and cultural exchanges, further enhancing students' understanding of Japanese society and fostering global citizenship."],
        ['title' => 'Security Guard', 'category' => 'Security Guard', 'avaiability' => '120', 'salary' => 'USD 550 / Month', 'description' => 'Car Security Guard', 'companyName' => 'Takt Outsourcing SRL', 'country' => '120', 'phone' => 'USD 550 / Month', 'contactPerson' => 'Ketan Maharjan', 'contactEmail' => 'ketan@maharjan.com', 'address' => '66770', 'facilities' => ['Uniform', 'Food', 'Transportation', 'Overtime'], 'workingHour' => '8', 'contractPeriod' => '2', 'leave' => '20', 'additional' => "With our extensive network of partner institutions and industry connections, Hayabusa Consultancy and Training Center strives to provide exclusive opportunities for internships, exchange programs, and cultural exchanges, further enhancing students' understanding of Japanese society and fostering global citizenship."],
    ];
@endphp

@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner">
        <img src={{ asset('frontend/jpgs/bg1.png') }} class="bgbanner__img" />
        <h2>Current Openings</h2>
    </div>

    <div class="container">
        <div class="d-flex align-items-start vertical-tabs">
            <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical" data-aos="fade-up">
                <button class="nav-link">
                    Available Jobs
                </button>
                @foreach ($list as $index => $item)
                    <button class="nav-link{{ $index == 0 ? ' active' : '' }}" id="v-pills-tab-{{ $index }}"
                        data-bs-toggle="pill" data-bs-target="#v-pills-content-{{ $index }}" type="button"
                        role="tab" aria-controls="v-pills-content-{{ $index }}"
                        aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                        {{ $item['title'] }}
                    </button>
                @endforeach
            </div>
            <div class="tab-content" id="v-pills-tabContent" style="width: 70%" data-aos="fade-up">
                @foreach ($list as $index => $item)
                    <div class="tab-pane fade{{ $index == 0 ? ' show active' : '' }}"
                        id="v-pills-content-{{ $index }}" role="tabpanel"
                        aria-labelledby="v-pills-tab-{{ $index }}">
                        <h2 class="mb-5" style="font-weight: 600"> {{ $item['title'] }}</h2>

                        <div style="margin-bottom: 50px">
                            <div class="opening-title">
                                <h2>Job Details</h2>
                                <hr />
                            </div>
                            <div class="row opening-row">
                                <div class="col-md-12 col-lg-4 font-bold">Job Catagory</div>
                                <div class="col-md-12 col-lg-8 font-grey">{{ $item['category'] }}</div>
                            </div>
                            <div class="row opening-row">
                                <div class="col-md-12 col-lg-4 font-bold">Available Vacancy</div>
                                <div class="col-md-12 col-lg-8 font-grey">{{ $item['avaiability'] }}</div>
                            </div>
                            <div class="row opening-row">
                                <div class="col-md-12 col-lg-4 font-bold">Salary</div>
                                <div class="col-md-12 col-lg-8 font-grey">{{ $item['salary'] }}</div>
                            </div>
                            <div class="row opening-row">
                                <div class="col-md-12 col-lg-4 font-bold">Job Description</div>
                                <div class="col-md-12 col-lg-8 font-grey">{{ $item['description'] }}</div>
                            </div>
                        </div>
                        <div style="margin-bottom: 50px">
                            <div class="opening-title">
                                <h2>Job Details</h2>
                                <hr />
                            </div>
                            <div class="row opening-row">
                                <div class="col-md-12 col-lg-4 font-bold">Company Name</div>
                                <div class="col-md-12 col-lg-8 font-grey">{{ $item['companyName'] }}</div>
                            </div>
                            <div class="row opening-row">
                                <div class="col-md-12 col-lg-4 font-bold">Country</div>
                                <div class="col-md-12 col-lg-8 font-grey">{{ $item['country'] }}</div>
                            </div>
                            <div class="row opening-row">
                                <div class="col-md-12 col-lg-4 font-bold">Phone</div>
                                <div class="col-md-12 col-lg-8 font-grey">{{ $item['phone'] }}</div>
                            </div>
                            <div class="row opening-row">
                                <div class="col-md-12 col-lg-4 font-bold">Contact person</div>
                                <div class="col-md-12 col-lg-8 font-grey">{{ $item['contactPerson'] }}</div>
                            </div>
                            <div class="row opening-row">
                                <div class="col-md-12 col-lg-4 font-bold">Email Address</div>
                                <div class="col-md-12 col-lg-8 font-grey">{{ $item['contactEmail'] }}</div>
                            </div>
                            <div class="row opening-row">
                                <div class="col-md-12 col-lg-4 font-bold">Postal Address</div>
                                <div class="col-md-12 col-lg-8 font-grey">{{ $item['address'] }}</div>
                            </div>
                        </div>
                        <div style="margin-bottom: 50px">
                            <div class="opening-title">
                                <h2>Terms and Conditions</h2>
                                <hr />
                            </div>
                            <div class="row opening-row">
                                <div class="col-md-12 col-lg-4 font-bold">Facilities Provided</div>
                                <div class="col-md-12 col-lg-8 font-grey">
                                    @foreach ($item['facilities'] as $facility)
                                        <div class="checklist">{{ $facility }}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row opening-row">
                                <div class="col-md-12 col-lg-4 font-bold">Working Hours / Day</div>
                                <div class="col-md-12 col-lg-8 font-grey">{{ $item['workingHour'] }}</div>
                            </div>
                            <div class="row opening-row">
                                <div class="col-md-12 col-lg-4 font-bold">Period of contract (Years)</div>
                                <div class="col-md-12 col-lg-8 font-grey">{{ $item['contractPeriod'] }}</div>
                            </div>
                            <div class="row opening-row">
                                <div class="col-md-12 col-lg-4 font-bold">Leave</div>
                                <div class="col-md-12 col-lg-8 font-grey">{{ $item['leave'] }}</div>
                            </div>
                        </div>
                        <div style="margin-bottom: 50px">
                            <div class="opening-title">
                                <h2>Additional Information</h2>
                                <hr />
                            </div>
                            <div class="opening-row">
                                <div class="font-grey">
                                    <p> {{ $item['additional'] }}</p>
                                </div>
                            </div>
                        </div>

                        <button class="button" onclick="window.location='{{ route('frontend.clients.apply') }}'">Apply for
                            this
                            job</button>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
