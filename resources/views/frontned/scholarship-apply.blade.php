@extends('layout')

@section('content')
    <div class="tl-breadcrumb pt-120 pb-120">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-6">
                    <div class="banner-txt">
                        <h1 class="tl-breadcrumb-title">Scholarships Apply</h1>
                    </div>
                </div>

                <div class="col-md-6">
                    <ul class="tl-breadcrumb-nav d-flex">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current-page">
                            <span class="dvdr"><i class="icofont-simple-right"></i></span>
                            <span>Scholarships Apply</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="tl-1-testimonial-slider-container container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4">Scholarship Application Form</h2>

                <form action="{{ route('scholarship.apply.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="scholarship_id" class="form-label">Scholarship ID</label>
                        <input type="text" class="form-control" id="scholarship_id" name="scholarship_id"
                            value="{{ $scholarship->id }}" hidden>
                    </div>

                    <div class="mb-3">
                        <label for="applicant_name" class="form-label">Applicant's Full Name</label>
                        <input type="text" class="form-control" id="applicant_name" name="applicant_name">
                        @error('applicant_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob">
                        @error('dob')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Permanent Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="education_level" class="form-label">Highest Level of Education</label>
                        <select class="form-select" id="education_level" name="education_level">
                            <option value="">Select</option>
                            <option value="High School">High School</option>
                            <option value="Associate's Degree">Associate's Degree</option>
                            <option value="Bachelor's Degree">Bachelor's Degree</option>
                            <option value="Master's Degree">Master's Degree</option>
                            <option value="Doctorate">Doctorate</option>
                        </select>
                        @error('education_level')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="gpa" class="form-label">Current GPA</label>
                        <input type="text" class="form-control" id="gpa" name="gpa">
                        @error('gpa')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="essay" class="form-label">Essay: Why do you deserve this scholarship?</label>
                        <textarea class="form-control" id="essay" name="essay" rows="5"></textarea>
                        @error('essay')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="extra_curricular" class="form-label">Extracurricular Activities</label>
                        <textarea class="form-control" id="extra_curricular" name="extra_curricular" rows="3"></textarea>
                        @error('extra_curricular')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="references" class="form-label">References (Names and Contact Information)</label>
                        <textarea class="form-control" id="references" name="references" rows="3"></textarea>
                        @error('references')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="file" class="form-label">Upload Supporting Documents (Resume, Transcripts,
                            etc.)</label>
                        <input type="file" class="form-control" id="file" name="file">
                        @error('file')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="tl-def-btn">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
@endsection
