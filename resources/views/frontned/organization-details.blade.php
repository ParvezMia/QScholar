@extends('layout')

@section('content')
    <div class="tl-breadcrumb pt-120 pb-120">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-6">
                    <div class="banner-txt">
                        <h1 class="tl-breadcrumb-title">Organization Profile</h1>
                    </div>
                </div>

                <div class="col-md-6">
                    <ul class="tl-breadcrumb-nav d-flex">
                        <li><a href="index.html">Home</a></li>
                        <li class="current-page">
                            <span class="dvdr"><i class="icofont-simple-right"></i></span>
                            <span>Organization Profile</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="tl-staff-profile pt-120 pb-120">
        <div class="container">
            <div class="tl-staff-profile-top">
                <img src="{{ asset($organization->org_image) }}" alt="organization image">

                <div class="tl-staff-profile-txt">
                    <div class="tl-staff-profile-intro">
                        <div>
                            <h4 class="tl-staff-profile-name">{{ $organization->org_name }}</h4>
                            <h6 class="tl-staff-profile-role">{{ $organization->org_email }}</h6>
                            <h6 class="tl-staff-profile-role">{{ $organization->org_website }}</h6>
                        </div>
                        <ul class="tl-3-footer-socials tl-staff-profile-socials">
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>

                    <p class="tl-staff-profile-bio">an inspiring educator, has dedicated his life to nurturing young minds.
                        With a degree in English Education from Riverside University, he embarked on his journey at Oakridge
                        High School. Through innovative teaching, she cultivated an inclusive classroom where every
                        student's voice was valued. Sarah's impact stretched beyond the classroom, leading workshops and
                        embracing technology to enhance learning. his legacy is woven through the success stories of
                        students who continue to be inspired by his passion for education.</p>
                </div>

                <div class="tl-course-details-infos tl-staff-profile-infos">
                    <div class="tl-course-details-info">
                        <h5 class="tl-staff-profile-info-value">{{ $organization->scholarships->count() }}</h5>
                        <h6 class="tl-course-details-info-name">Numebnr of Scholarship </h6>
                    </div>
                </div>
            </div>

            <div class="tl-staff-profile-courses">
                <h3 class="tl-staff-profile-courses-title">See Running Scholarships</h3>
                <div class="row g-3 g-xl-4">
                    @foreach ($organization->scholarships as $scholarship)
                        <div class="col-lg-4 col-sm-6">
                            <div class="tl-1-course">
                                <div class="tl-1-course-img">
                                    <img src="{{ asset('path/to/your/image/directory/' . $scholarship->image) }}"
                                        alt="Scholarship Image">
                                    <span
                                        class="tl-1-course-price">${{ number_format($scholarship->scholarship_amount, 2) }}</span>
                                </div>

                                <div class="tl-1-course-txt">
                                    <span class="tl-1-course-author">By <a
                                            href="#">{{ $organization->org_name }}</a></span>
                                    <h4 class="tl-1-course-title"><a
                                            href="{{ route('scholar.details', $scholarship->id) }}">{{ $scholarship->scholarship_name }}</a>
                                    </h4>
                                    <p>{{ Str::limit($scholarship->scholarship_description, 100) }}</p>
                                    <div class="tl-1-course-stats">
                                        <div class="tl-1-course-stat">
                                            <span class="tl-1-course-stat-icon"><i
                                                    class="fa-regular fa-calendar-alt"></i></span>
                                            <span class="tl-1-course-stat-txt">Deadline:
                                                {{ $scholarship->scholarship_application_deadline->format('m/d/Y') }}</span>
                                        </div>
                                        <!-- Add more stats if necessary -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
