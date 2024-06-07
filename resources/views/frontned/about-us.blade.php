@extends('layout');
@section('content')
    <div class="tl-breadcrumb tl-breadcrumb-3 pt-120 pb-120">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-6">
                    <div class="banner-txt">
                        <h1 class="tl-breadcrumb-title">About Us</h1>
                    </div>
                </div>

                <div class="col-md-6">
                    <ul class="tl-breadcrumb-nav d-flex">
                        <li><a href="index.html">Home</a></li>
                        <li class="current-page">
                            <span class="dvdr"><i class="icofont-simple-right"></i></span>
                            <span>About</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="tl-3-about tl-3-section-spacing">
        <div class="container">
            <div class="row gy-4 gy-sm-5 align-items-center">
                <div class="col-lg-6">
                    <div class="tl-3-about-txt">
                        <h2 class="tl-3-section-title">Experience in School Leadership &amp; Teaching</h2>
                        <p class="tl-3-about-descr">Mauris sit amet lacinia est, vitae tristique metus. Nulla facilisi.
                            Mauris tempor nibh vitae pulvinar ultricies. Sed malesuada placerat metus. Vivamus sagittis arcu
                            eu elit semper, eget varius turpis posuere. Suspendisse ac nibh cursus, dignissim urna a,
                            porttitor nisi.</p>

                        <div class="tl-1-about-author">
                            <div class="tl-1-about-author-intro">
                                <div class="tl-1-about-author-img">
                                    <img src="assets/images/tl-3/author-img.png" alt="Author image">
                                </div>
                                <div class="tl-1-about-author-info">
                                    <h5 class="tl-1-about-author-name">Hugh Millie-Yate</h5>
                                    <span class="tl-1-about-author-role">Vice Principal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tl-3-about-img">
                        <img src="{{ asset('assets/images/tl-3/about-img-1.webp') }}" alt="School Picture">
                        <img src="{{ asset('assets/images/tl-3/about-img-2.webp') }}" alt="School Picture">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="tl-3-cta tl-3-cta-inner container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="tl-3-cta-txt">
                    <h2 class="tl-3-section-title">Apply For Scholarship</h2>
                    <p class="tl-3-cta-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod non
                        arcu nec volutpat.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-4">
                <div class="tl-3-cta-btn text-start text-md-end">
                    <a href="{{ route('scholarship.list') }}" class="tl-3-def-btn">Apply Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection
