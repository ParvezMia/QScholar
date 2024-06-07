@extends('layout')

@section('content')
    <div class="tl-breadcrumb tl-breadcrumb-2 border-0 pt-120 pb-120">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-6">
                    <div class="banner-txt">
                        <h1 class="tl-breadcrumb-title">Organizations</h1>
                    </div>
                </div>

                <div class="col-md-6">
                    <ul class="tl-breadcrumb-nav d-flex">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current-page">
                            <span class="dvdr"><i class="icofont-simple-right"></i></span>
                            <span>Organizations</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="tl-inner-blogs pt-120 pb-50">
        <div class="container">
            <div class="row g-4 justify-content-center">
                @forelse ($organizations as $organization)
                    <div class="col-lg-4 col-sm-6">
                        <div class="tl-6-latest-article">
                            <div class="tl-6-latest-article-img">
                                <img src="{{ asset($organization->org_image) }}" alt="Organization Image">
                            </div>

                            <div class="tl-6-latest-article-txt">
                                <span class="tl-6-info-pill">{{ $organization->org_name }}</span>
                                <h4 class="tl-6-latest-article-title tl-6-title-hover">
                                    <a
                                        href="{{ route('organization.details', $organization->id) }}">{{ $organization->org_name }}</a>
                                </h4>
                                <ul class="tl-6-latest-article-infos">
                                    <li>{{ $organization->scholarships->count() }} Scholarships</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No organizations available.</p>
                @endforelse
            </div>

            <!-- Pagination Controls -->
            <div class="pagination mt-4">
                {{ $organizations->links() }}
            </div>
        </div>
    </section>
@endsection
