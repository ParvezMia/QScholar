@extends('layout')

@section('content')
    <div class="tl-breadcrumb pt-120 pb-120">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-6">
                    <div class="banner-txt">
                        <h1 class="tl-breadcrumb-title">Blog Details</h1>
                    </div>
                </div>

                <div class="col-md-6">
                    <ul class="tl-breadcrumb-nav d-flex">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current-page">
                            <span class="dvdr"><i class="icofont-simple-right"></i></span>
                            <span>Blog Details</span>
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
                            @if (filter_var($blog->image_path, FILTER_VALIDATE_URL))
                                <img src="{{ $blog->image_path }}" alt="Blog Image">
                            @else
                                <img src="{{ Storage::url($blog->image_path) }}" alt="Blog Image">
                            @endif
                            <div class="tl-course-details-infos tl-blog-details-infos">
                                <div class="tl-course-details-info tl-blog-details-info">
                                    <h6 class="tl-course-details-info-name tl-blog-details-info-name">
                                        <i class="fa-regular fa-user"></i> Admin
                                    </h6>
                                </div>
                                <div class="tl-course-details-info tl-blog-details-info">
                                    <h6 class="tl-course-details-info-name tl-blog-details-info-name"><i
                                            class="fa-light fa-calendar-alt"></i>{{ $blog->created_at->format('Y-m-d') }}
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <h2 class="tl-event-details-title tl-blog-details-title">{{ $blog->title }}</h2>

                        <div class="tl-event-details-descr tl-blog-details-descr">
                            {!! $blog->content !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
