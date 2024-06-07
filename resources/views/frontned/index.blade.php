@extends('layout')

@section('content')
    <!-- BANNER SECTION STARTS HERE -->
    <section class="tl-banner">
        <div class="container">
            <div class="row gy-5">
                <div class="col-md-8">
                    <div class="tl-banner-txt">
                        <h1 class="tl-banner-title">Let’s Build Your Future With <span class="last-word">QScholar</span>.
                        </h1>
                        <p class="tl-banner-short-descr">Through a combination of lectures, readings, and discussions,
                            students will gain a solid foundation in educational psychology.</p>
                        <a href="#" class="tl-def-btn">More details <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- BANNER SECTION ENDS HERE -->


    <!-- ABOUT SECTION STARTS HERE -->
    <section class="tl-10-about-section p-120">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-lg-6">
                    <div class="tl-10-about-img">
                        <img src="images/about-img-2.png" alt="students">

                        <span class="bottom-img">
                            <img src="images/about-img-1.png" alt="students">
                        </span>



                        <div class="tl-10-users">
                            <div class="tl-10-users-img">
                                <img src="images/04.png" alt="user">
                                <img src="images/03.png" alt="user">
                                <img src="images/02.png" alt="user">
                                <span class="last-img">
                                    <img src="images/01.png" alt="user">
                                    <span class="last-img-txt">2k+</span>
                                </span>
                            </div>

                            <h6 class="tl-10-users-txt">More Than <br> 2k+ Tutors</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tl-10-about-txt">
                        <h2 class="tl-section-title tl-10-about-title">Leadership The Educupt Global <span
                                class="last-word">Education</span>.</h2>
                        <p class="tl-10-about-descr tl-about-descr">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form, by injected
                            randomised words which don't look even slightly believable.</p>
                        <a href="#" class="tl-def-btn-2">QScholar Overview <i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION ENDS HERE -->


    <!-- COURSE SECTION STARTS HERE -->
    {{-- <section class="tl-10-course pb-120">
        <div class="container">
            <div class="tl-10-course-row">
                <div class="tl-10-single-course">
                    <h3 class="tl-10-single-course-title">Undergaduate</h3>
                    <p class="tl-10-single-course-descr">
                        Lorem ipsum dolorous rises quiz varus qualm quisque id connecter adipescent commode impediment.
                    </p>

                    <ul class="course-subjects">
                        <li>Business &amp; Administration</li>
                        <li>Corporate Finance</li>
                    </ul>

                    <p class="course-type">
                        <i class="fa-regular fa-clock"></i> Online + OnSite
                    </p>
                </div>

                <div class="tl-10-single-course active tl-10-single-course-2">
                    <h3 class="tl-10-single-course-title">Graduate</h3>
                    <p class="tl-10-single-course-descr">
                        Lorem ipsum dolorous rises quiz varus qualm quisque id connecter adipescent commode impediment.
                    </p>

                    <ul class="course-subjects">
                        <li>Business &amp; Administration</li>
                        <li>Corporate Finance</li>
                        <li>Biotechnology</li>
                        <li>Major in Economics</li>
                        <li>Public Administration</li>
                    </ul>

                    <p class="course-type">
                        <i class="fa-regular fa-clock"></i> Online + OnSite
                    </p>
                </div>

                <div class="tl-10-single-course tl-10-single-course-3">
                    <h3 class="tl-10-single-course-title">Online Education</h3>
                    <p class="tl-10-single-course-descr">
                        Lorem ipsum dolorous rises quiz varus qualm quisque id connecter adipescent commode impediment.
                    </p>

                    <ul class="course-subjects">
                        <li>Business &amp; Administration</li>
                        <li>Corporate Finance</li>
                    </ul>

                    <p class="course-type">
                        <i class="fa-regular fa-clock"></i> Online only
                    </p>
                </div>

                <a href="#" class="tl-10-course-btn"><img src="images/arrow.png" alt="arrow icon"></a>
            </div>
        </div>
    </section> --}}
    <!-- COURSE SECTION ENDS HERE -->


    <section class="tl-4-programs tl-3-section-spacing" data-bg-color="#F3F1F1"
        style="background-color: rgb(243, 241, 241);">
        <div class="container">
            <h2 class="tl-4-section-title">Listed <span class="last-word">Organizations</span></h2>

            <div class="row g-4 tl-4-programs-row">
                @foreach ($organizations as $organization)
                    <div class="col-lg-4 col-md-6">
                        <div class="tl-4-program">
                            <div class="tl-4-program-heading">
                                <img src="{{ asset($organization->org_image) }}" alt="Icon">
                                <div class="tl-4-program-heading-txt">
                                    <h4 class="tl-4-program-title">{{ $organization->org_name }}</h4>
                                    <h6 class="tl-4-program-sub-title">{{ $organization->org_email }}</h6>
                                </div>
                            </div>

                            <img src="{{ asset($organization->org_image) }}" alt="Program Image" class="tl-4-program-img">

                            <div class="tl-4-program-txt">
                                <p class="tl-4-program-descr">{{ $organization->org_address }}</p>
                                <a href="#" class="tl-4-program-btn">Learn More <i
                                        class="fa-regular fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- TESTIMONIAL SECTION STARTS HERE -->
    <section class="tl-10-testimonial tl-testimonial tl-3-section-spacing pb-120">
        <div class="container">
            <div class="tl-10-section-heading">
                <h2 class="tl-section-title">
                    <h2 class="tl-4-section-title">Listed <span class="last-word">Schoalarships</span></h2>
                </h2>
            </div>

            <div class="tl-testimonial-slider owl-carousel">
                @foreach ($scholarship as $scholarship)
                    <div class="tl-10-single-testimony">
                        <p class="tl-10-single-testimony-txt tl-single-testimony-txt">
                            {{ $scholarship->scholarship_name }}
                        </p>

                        <div class="tl-10-single-testimony-reviewer">
                            <img src="{{ asset($scholarship['organization']['org_image']) }}" alt="Person"
                                class="tl-10-single-testimony-reviewer-img">
                            <div class="tl-10-single-testimony-reviewer-info">
                                <h6 class="tl-10-single-testimony-reviewer-name">Posted By
                                    {{ $scholarship['organization']['org_name'] }}
                                </h6>
                                <div class="d-flex w-100 justify-content-between" style="gap: .75rem; margin-top: 20px">
                                    <p class="tl-10-single-testimony-reviewer-label">
                                        {{ $scholarship->scholarship_amount }}</p>
                                    <p class="tl-10-single-testimony-reviewer-label">
                                        {{ \Carbon\Carbon::parse($scholarship->scholarship_application_deadline)->format('Y-m-d') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('scholar.details', $scholarship->id) }}"
                            class="tl-10-single-testimony-reviewer-name mt-10" style="margin-top: 40px">Learn More <i
                                class="fa-regular fa-angle-right"></i></a>
                    </div>
                @endforeach

            </div>

            <div class="tl-10-testimonial-slider-nav">

            </div>
        </div>
    </section>
    <!-- TESTIMONIAL SECTION ENDS HERE -->

    <section class="tl-4-testimonial tl-3-section-spacing">
        <div class="container">
            <h2 class="tl-4-section-title">Trusted by over 42,000+ Students Have To Say</h2>

            <div class="tl-4-testimonial-slider owl-carousel owl-loaded owl-drag">








                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-5184px, 0px, 0px); transition: all 0.25s ease 0s; width: 10368px;">
                        <div class="owl-item cloned" style="width: 1296px;">
                            <div>
                                <div class="tl-4-testimony">
                                    <img src="assets/images/tl-4/testimony-3.jpg" alt="User image"
                                        class="tl-4-testimony-img">

                                    <div class="tl-4-testimony-txt">
                                        <p class="tl-4-testimony-review">Morbi consectetur elementum purus mattis cursus
                                            purus vel metus iaculis sagittis. Vestibulum molestie bibendum turpis luctus sem
                                            lacinia quis. Quisque amet velit sit amet dui hendrerit ultricies a id ipsum
                                            Mauris sit amet lacinia est, vitae tristique metus tempor nibh ultricies.</p>

                                        <div class="tl-4-reviewer">
                                            <div class="tl-4-reviewer-txt">
                                                <h6 class="tl-4-reviewer-name">Desmond Eagle</h6>
                                                <span class="tl-4-reviewer-label">Adjunct Professor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1296px;">
                            <div>
                                <div class="tl-4-testimony">
                                    <img src="assets/images/tl-4/testimony-4.jpg" alt="User image"
                                        class="tl-4-testimony-img">

                                    <div class="tl-4-testimony-txt">
                                        <p class="tl-4-testimony-review">Morbi consectetur elementum purus mattis cursus
                                            purus vel metus iaculis sagittis. Vestibulum molestie bibendum turpis luctus sem
                                            lacinia quis. Quisque amet velit sit amet dui hendrerit ultricies a id ipsum
                                            Mauris sit amet lacinia est, vitae tristique metus tempor nibh ultricies.</p>

                                        <div class="tl-4-reviewer">
                                            <div class="tl-4-reviewer-txt">
                                                <h6 class="tl-4-reviewer-name">Nathaneal Down</h6>
                                                <span class="tl-4-reviewer-label">Student, CSE</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1296px;">
                            <div>
                                <div class="tl-4-testimony">
                                    <img src="assets/images/tl-4/testimony-1.jpg" alt="User image"
                                        class="tl-4-testimony-img">

                                    <div class="tl-4-testimony-txt">
                                        <p class="tl-4-testimony-review">Morbi consectetur elementum purus mattis cursus
                                            purus vel metus iaculis sagittis. Vestibulum molestie bibendum turpis luctus sem
                                            lacinia quis. Quisque amet velit sit amet dui hendrerit ultricies a id ipsum
                                            Mauris sit amet lacinia est, vitae tristique metus tempor nibh ultricies.</p>

                                        <div class="tl-4-reviewer">
                                            <div class="tl-4-reviewer-txt">
                                                <h6 class="tl-4-reviewer-name">Russell Sprout</h6>
                                                <span class="tl-4-reviewer-label">Student, CSE</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1296px;">
                            <div>
                                <div class="tl-4-testimony">
                                    <img src="assets/images/tl-4/testimony-2.jpg" alt="User image"
                                        class="tl-4-testimony-img">

                                    <div class="tl-4-testimony-txt">
                                        <p class="tl-4-testimony-review">Morbi consectetur elementum purus mattis cursus
                                            purus vel metus iaculis sagittis. Vestibulum molestie bibendum turpis luctus sem
                                            lacinia quis. Quisque amet velit sit amet dui hendrerit ultricies a id ipsum
                                            Mauris sit amet lacinia est, vitae tristique metus tempor nibh ultricies.</p>

                                        <div class="tl-4-reviewer">
                                            <div class="tl-4-reviewer-txt">
                                                <h6 class="tl-4-reviewer-name">Thomas R. Toe</h6>
                                                <span class="tl-4-reviewer-label">B.Tech (CSE) , 2018-2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 1296px;">
                            <div>
                                <div class="tl-4-testimony">
                                    <img src="assets/images/tl-4/testimony-3.jpg" alt="User image"
                                        class="tl-4-testimony-img">

                                    <div class="tl-4-testimony-txt">
                                        <p class="tl-4-testimony-review">Morbi consectetur elementum purus mattis cursus
                                            purus vel metus iaculis sagittis. Vestibulum molestie bibendum turpis luctus sem
                                            lacinia quis. Quisque amet velit sit amet dui hendrerit ultricies a id ipsum
                                            Mauris sit amet lacinia est, vitae tristique metus tempor nibh ultricies.</p>

                                        <div class="tl-4-reviewer">
                                            <div class="tl-4-reviewer-txt">
                                                <h6 class="tl-4-reviewer-name">Desmond Eagle</h6>
                                                <span class="tl-4-reviewer-label">Adjunct Professor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1296px;">
                            <div>
                                <div class="tl-4-testimony">
                                    <img src="assets/images/tl-4/testimony-4.jpg" alt="User image"
                                        class="tl-4-testimony-img">

                                    <div class="tl-4-testimony-txt">
                                        <p class="tl-4-testimony-review">Morbi consectetur elementum purus mattis cursus
                                            purus vel metus iaculis sagittis. Vestibulum molestie bibendum turpis luctus sem
                                            lacinia quis. Quisque amet velit sit amet dui hendrerit ultricies a id ipsum
                                            Mauris sit amet lacinia est, vitae tristique metus tempor nibh ultricies.</p>

                                        <div class="tl-4-reviewer">
                                            <div class="tl-4-reviewer-txt">
                                                <h6 class="tl-4-reviewer-name">Nathaneal Down</h6>
                                                <span class="tl-4-reviewer-label">Student, CSE</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1296px;">
                            <div>
                                <div class="tl-4-testimony">
                                    <img src="assets/images/tl-4/testimony-1.jpg" alt="User image"
                                        class="tl-4-testimony-img">

                                    <div class="tl-4-testimony-txt">
                                        <p class="tl-4-testimony-review">Morbi consectetur elementum purus mattis cursus
                                            purus vel metus iaculis sagittis. Vestibulum molestie bibendum turpis luctus sem
                                            lacinia quis. Quisque amet velit sit amet dui hendrerit ultricies a id ipsum
                                            Mauris sit amet lacinia est, vitae tristique metus tempor nibh ultricies.</p>

                                        <div class="tl-4-reviewer">
                                            <div class="tl-4-reviewer-txt">
                                                <h6 class="tl-4-reviewer-name">Russell Sprout</h6>
                                                <span class="tl-4-reviewer-label">Student, CSE</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1296px;">
                            <div>
                                <div class="tl-4-testimony">
                                    <img src="assets/images/tl-4/testimony-2.jpg" alt="User image"
                                        class="tl-4-testimony-img">

                                    <div class="tl-4-testimony-txt">
                                        <p class="tl-4-testimony-review">Morbi consectetur elementum purus mattis cursus
                                            purus vel metus iaculis sagittis. Vestibulum molestie bibendum turpis luctus sem
                                            lacinia quis. Quisque amet velit sit amet dui hendrerit ultricies a id ipsum
                                            Mauris sit amet lacinia est, vitae tristique metus tempor nibh ultricies.</p>

                                        <div class="tl-4-reviewer">
                                            <div class="tl-4-reviewer-txt">
                                                <h6 class="tl-4-reviewer-name">Thomas R. Toe</h6>
                                                <span class="tl-4-reviewer-label">B.Tech (CSE) , 2018-2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                            aria-label="Previous">‹</span></button><button type="button" role="presentation"
                        class="owl-next"><span aria-label="Next">›</span></button></div>
            </div>

            <div class="tl-4-testimonial-users">
                <button class="">
                    <span class="tl-4-reviewer">
                        <img src="assets/images/tl-4/user-1.jpg" alt="User Image" class="tl-4-reviewer-img">

                        <span class="tl-4-reviewer-txt">
                            <span class="tl-4-reviewer-name">Russell Sprout</span>
                            <span class="tl-4-reviewer-label">Student, CSE</span>
                        </span>
                    </span>
                </button>

                <button class="">
                    <span class="tl-4-reviewer">
                        <img src="assets/images/tl-4/user-2.jpg" alt="User Image" class="tl-4-reviewer-img">

                        <span class="tl-4-reviewer-txt">
                            <span class="tl-4-reviewer-name">Thomas R. Toe</span>
                            <span class="tl-4-reviewer-label">B.Tech (CSE) , 2018-2023</span>
                        </span>
                    </span>
                </button>

                <button class="active">
                    <span class="tl-4-reviewer">
                        <img src="assets/images/tl-4/user-3.jpg" alt="User Image" class="tl-4-reviewer-img">

                        <span class="tl-4-reviewer-txt">
                            <span class="tl-4-reviewer-name">Desmond Eagle</span>
                            <span class="tl-4-reviewer-label">Adjunct Professor</span>
                        </span>
                    </span>
                </button>

                <button class="">
                    <span class="tl-4-reviewer">
                        <img src="assets/images/tl-4/user-4.jpg" alt="User Image" class="tl-4-reviewer-img">

                        <span class="tl-4-reviewer-txt">
                            <span class="tl-4-reviewer-name">Nathaneal Down</span>
                            <span class="tl-4-reviewer-label">Student, CSE</span>
                        </span>
                    </span>
                </button>
            </div>
        </div>
    </section>


    <!-- BLOG SECTION STARTS HERE -->
    <section class="tl-10-blog p-120">
        <div class="container">
            <div class="tl-10-blog-heading d-flex align-items-center justify-content-between">
                <h2 class="tl-section-title tl-10-section-title">Our News &amp; <span class="last-word">Blogs</span>.</h2>
                <a href="#" class="tl-def-btn">Latest News <i class="fa-regular fa-arrow-right"></i></a>
            </div>

            <div class="tl-10-blog-inner-heading tl-blog-inner-heading">
                <span class="tl-10-blog-inner-title">Latest Posts</span>
                <span class="tl-10-blog-quantity">{{ $blogs->count() }}</span>
            </div>

            <div class="row g-xl-4 g-3 justify-content-center justify-content-md-around">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="tl-single-blog tl-10-single-blog" style="flex-direction: column">
                            <div class="tl-10-single-blog-img w-100">
                                @if (filter_var($blog->image_path, FILTER_VALIDATE_URL))
                                    <img src="{{ $blog->image_path }}" alt="Blog Thumbnail">
                                @else
                                    <img src="{{ Storage::url($blog->image_path) }}" alt="Blog Thumbnail">
                                @endif
                            </div>

                            <div class="tl-10-single-blog-txt">
                                <span
                                    class="tl-single-blog-date tl-10-single-blog-date">{{ $blog->created_at->format('F d, Y') }}</span>
                                <h4 class="tl-single-blog-title tl-10-single-blog-title"><a
                                        href="{{ route('blogs.show', ['id' => $blog->id]) }}">{{ $blog->title }}</a>
                                </h4>
                                <p class="tl-single-blog-descr tl-10-single-blog-descr">
                                    {{ Str::limit($blog->content, 100) }}</p>
                                <a class="tl-single-blog-btn tl-10-single-blog-btn"
                                    href="{{ route('blogs.show', ['id' => $blog->id]) }}">Read More <i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- BLOG SECTION ENDS HERE -->
@endsection
