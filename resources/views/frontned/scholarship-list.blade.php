@extends('layout')

@section('content')
    <div class="tl-breadcrumb pt-120 pb-120">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-6">
                    <div class="banner-txt">
                        <h1 class="tl-breadcrumb-title">Scholarships</h1>
                    </div>
                </div>

                <div class="col-md-6">
                    <ul class="tl-breadcrumb-nav d-flex">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current-page">
                            <span class="dvdr"><i class="icofont-simple-right"></i></span>
                            <span>Scholarships</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="tl-inner-blogs pt-120 pb-50">
        <div class="container">
            <div class="row g-xl-4 g-3 justify-content-center justify-content-md-around">
                @forelse ($scholarships as $scholarship)
                    <div class="col-lg-6">
                        <div class="tl-4-blog">
                            <div class="tl-4-blog-img">
                                <img src="{{ asset($scholarship->organization->org_image) }}" alt="Scholarship Thumbnail">
                                <span
                                    class="kb-10-pop-article-category tl-4-blog-category">{{ $scholarship->organization->org_name }}</span>
                            </div>

                            <div class="tl-single-blog-txt">
                                <span class="tl-single-blog-date"><i class="fa-regular fa-clock"></i>
                                    {{ $scholarship->scholarship_application_deadline->format('M d, Y') }}</span>
                                <h4 class="tl-single-blog-title"><a href="#">{{ $scholarship->scholarship_name }}</a>
                                </h4>
                                <p class="tl-single-blog-descr">{!! Str::limit($scholarship->scholarship_description, 50) !!}
                                </p>
                                <a class="tl-single-blog-btn" href="{{ route('scholar.details', $scholarship->id) }}">Read
                                    More <i class="fa-regular fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No scholarships available.</p>
                @endforelse
            </div>

            <!-- Pagination Controls -->
            <div class="pagination mt-4">
                {{ $scholarships->links() }}
            </div>
        </div>
    </section>
@endsection
