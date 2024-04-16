@php
    
@endphp

@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner">
        <img src={{ asset('frontend/jpgs/bg1.png') }} class="bgbanner__img" />
        <h2>Post New Requirement</h2>
    </div>


    <div class="bgbanner-details" data-aos="fade-up">
        <p>With our extensive network of partner institutions and industry connections, Hayabusa Consultancy and Training
            Center strives to provide exclusive opportunities for internships, exchange programs, and cultural exchanges,
            further enhancing students' understanding of Japanese society and fostering global citizenship.</p>
        <button class="button" onclick="window.location='{{ route('frontend.contact') }}'">Contact to us directly!</button>
    </div>

    <div class="container">
        <div class="sub-title" data-aos="fade-up">Post a job requirement</div>
        <div class="heading" data-aos="fade-up">
            <div class="main-title ">Find the right candidate for your job!</div>
        </div>
    </div>

    <form action="#">
        <div class="container" data-aos="fade-up">
            <div class="form-title">
                <h2>Company information</h2>
                <hr />
            </div>
            <div class="row mb-4">
                <div class="col">
                    <label for="company" class="form-label">Company</label>
                    <input type="text" class="form-control" id="company">
                </div>
                <div class="col">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control" id="country">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city">
                </div>
                <div class="col">
                    <label for="phone" class="form-label">Company Phone</label>
                    <input type="text" class="form-control" id="phone">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <label for="contactPerson" class="form-label">Contact Person</label>
                    <input type="text" class="form-control" id="contactPerson">
                </div>
                <div class="col">
                    <label for="contactPhone" class="form-label">Contact Person Phone</label>
                    <input type="text" class="form-control" id="contactPhone">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="col">
                    <label for="address" class="form-label">Postal Address</label>
                    <input type="text" class="form-control" id="address">
                </div>
            </div>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="form-title">
                <h2>Job Categories</h2>
                <hr />
            </div>
            <div class="row mb-4">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <label for="category" class="form-label">Job Category</label>
                    <input type="text" class="form-control" id="category">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <label for="noOfPeople" class="form-label">Number of People</label>
                    <input type="text" class="form-control" id="noOfPeople">
                </div>

                <div class="col-lg-2 col-md-6 col-sm-12">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="text" class="form-control" id="salary">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <label for="desc" class="form-label">Job Description</label>
                    <input type="text" class="form-control" id="desc">
                </div>
                <div class="col-lg-1 col-md-6 col-sm-12">
                    <button class="button" style="min-width:unset;margin-top: 30px;padding:0px">
                        <img src={{ asset('frontend/svgs/plus.svg') }} /></button>
                </div>
            </div>
            <hr />
        </div>
        <div class="container" data-aos="fade-up">
            <div class="form-title">
                <h2>Terms and Conditions</h2>
                <hr />
            </div>
            <div class="row mb-4">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="food">
                        <label class="form-check-label" for="food">
                            Food
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="accommodation">
                        <label class="form-check-label" for="accommodation">
                            Accommodations
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="medical">
                        <label class="form-check-label" for="medical">
                            Medical
                        </label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="uniform">
                        <label class="form-check-label" for="uniform">
                            Uniform
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="transport">
                        <label class="form-check-label" for="transport">
                            Transportation
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="overtime">
                        <label class="form-check-label" for="overtime">
                            Overtime
                        </label>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="airTicket">
                        <label class="form-check-label" for="airTicket">
                            Joining Air Ticket
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="returnAirTicket">
                        <label class="form-check-label" for="returnAirTicket">
                            Return Air Ticket
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="permit">
                        <label class="form-check-label" for="permit">
                            Residential Permit
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <label for="hours" class="form-label">Working Hours / Week</label>
                    <input type="text" class="form-control" id="hours">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <label for="contract" class="form-label">Period of contract</label>
                    <input type="text" class="form-control" id="contract">
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <label for="leave" class="form-label">Leave</label>
                    <input type="text" class="form-control" id="leave">
                </div>
            </div>
        </div>

        <div class="container" data-aos="fade-up">
            <div class="form-title">
                <h2>Additional Details</h2>
                <hr />
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <textarea class="form-control" id="details" rows="4"></textarea>
                </div>
            </div>
            <div style="margin-left:calc(100% - 245px)">
                <button class="button" style="text-align: right">Send your requirement</button>
            </div>
        </div>
    </form>
@endsection
