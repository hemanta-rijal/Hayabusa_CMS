@php
    
@endphp

@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner">
        <img src={{ asset('frontend/jpgs/bg1.png') }} class="bgbanner__img" />
        <h2>Applying for: Factory Worker </h2>
    </div>

    <div class="container" data-aos="fade-up">
        <form action="#">
            <div class="row">
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="text" class="form-control" id="dob">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="gender" class="form-label">Gender</label>
                    <input type="text" class="form-control" id="gender">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="status" class="form-label">Marital Status</label>
                    <input type="text" class="form-control" id="status">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="religon" class="form-label">Religion</label>
                    <input type="text" class="form-control" id="religon">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="nationality" class="form-label">Nationality</label>
                    <input type="text" class="form-control" id="nationality">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="phoneNum" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phoneNum">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control" id="country">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="district" class="form-label">District</label>
                    <input type="text" class="form-control" id="district">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="fathers" class="form-label">Father’s Name</label>
                    <input type="text" class="form-control" id="fathers">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="mother" class="form-label">Mother’s Name</label>
                    <input type="text" class="form-control" id="mother">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="spouse" class="form-label">Spouse’s Name</label>
                    <input type="text" class="form-control" id="spouse">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="children" class="form-label">Number of Children</label>
                    <input type="text" class="form-control" id="children">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="height " class="form-label">Height (cm)</label>
                    <input type="text" class="form-control" id="height ">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="weight" class="form-label">Weight (kg)</label>
                    <input type="text" class="form-control" id="weight">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="children" class="form-label">Number of Children</label>
                    <input type="text" class="form-control" id="children">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="height " class="form-label">Height (cm)</label>
                    <input type="text" class="form-control" id="height ">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="weight" class="form-label">Weight (kg)</label>
                    <input type="text" class="form-control" id="weight">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="experience" class="form-label">Work Experience</label>
                    <textarea class="form-control" id="experience" rows="4"></textarea>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="academics " class="form-label">Academic Qualification</label>
                    <textarea class="form-control" id="academics " rows="4"></textarea>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="technical" class="form-label">Technical Qualifications</label>
                    <textarea class="form-control" id="technical" rows="4"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="passportNo" class="form-label">Passport Number</label>
                    <input type="text" class="form-control" id="passportNo">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="passportDistrict " class="form-label">Passport Issued District</label>
                    <input type="text" class="form-control" id="passportDistrict ">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="abroadIssuedPlace" class="form-label">Abroad Passport Issue Place</label>
                    <input type="text" class="form-control" id="abroadIssuedPlace">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="passportIssueDate" class="form-label">Passport Issue Date</label>
                    <input type="text" class="form-control" id="passportIssueDate">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="passportExpiryDate " class="form-label">Passport Expiry Date</label>
                    <input type="text" class="form-control" id="passportExpiryDate ">
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <label for="expectedSalary " class="form-label">Expected Salary</label>
                    <input type="text" class="form-control" id="expectedSalary ">
                </div>
            </div>
            <div style="margin-left:calc(100% - 245px)">
                <button class="button" style="text-align: right">Submit your application</button>
            </div>
        </form>
    </div>
@endsection
