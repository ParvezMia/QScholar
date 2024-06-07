@extends('layout')

@section('content')
    <div class="tl-breadcrumb pt-120 pb-120">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-6">
                    <div class="banner-txt">
                        <h1 class="tl-breadcrumb-title">Scholarship Details</h1>
                    </div>
                </div>

                <div class="col-md-6">
                    <ul class="tl-breadcrumb-nav d-flex">
                        <li><a href="index.html">Home</a></li>
                        <li class="current-page">
                            <span class="dvdr"><i class="icofont-simple-right"></i></span>
                            <span>Scholarship Details</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tl-blog-details pt-120 pb-120">
        <div class="container">
            <div class="row gx-0 tl-blog-details-row">
                <div class="col-lg-8 offset-md-2">
                    <div class="tl-event-details-left tl-blog-details-left">
                        <div class="tl-blog-details-img">
                            <img src="assets/images/blog-details.jpg" alt="blog banner">

                            <div class="tl-course-details-infos tl-blog-details-infos">
                                <div class="tl-course-details-info tl-blog-details-info">
                                    <h6 class="tl-course-details-info-name tl-blog-details-info-name">
                                        <a href="{{ route('organization.details', $scholarship->organization->id) }}"><i
                                                class="fa-regular fa-user"></i>{{ $scholarship->organization->org_name }}</a>
                                    </h6>
                                </div>

                                <div class="tl-course-details-info tl-blog-details-info">
                                    <h6 class="tl-course-details-info-name tl-blog-details-info-name"><i
                                            class="fa-light fa-calendar-alt"></i>{{ $scholarship->scholarship_application_deadline->format('Y-m-d') }}
                                    </h6>
                                </div>
                                <div class="tl-course-details-info tl-blog-details-info">
                                    <h6 class="tl-course-details-info-name tl-blog-details-info-name"><i
                                            class="fa-light fa-calendar-alt"></i>{{ $scholarship->scholarship_amount }}
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <h2 class="tl-event-details-title tl-blog-details-title">{{ $scholarship->scholarship_name }}</h2>

                        <div class="tl-event-details-descr tl-blog-details-descr">
                            {!! $scholarship->scholarship_description !!}
                        </div>
                        @if (auth()->check())
                            <a href="{{ route('scholarship.apply', $scholarship->id) }}" class="tl-def-btn mt-20">Apply
                                Now</a>
                        @else
                            <a href="{{ route('login') }}" class="tl-def-btn mt-20">Login to Apply</a>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
