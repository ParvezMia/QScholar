<!-- sidebar area start -->
<div class="kidba-menu-sidebar">
    <div class="kidba-menu-sidebar-inner">
        <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
                <span><i class="icofont-brand-nexus"></i></span>
                <span>close</span>
            </button>
        </div>
        <div class="kidba-menu-sidebar-top mb-40">
            <nav>
                <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                    <button class="active " id="nav-menu-tab" data-bs-toggle="tab" data-bs-target="#nav-menu"
                        type="button" role="tab" aria-controls="nav-menu" aria-selected="true">Menu</button>
                    <button id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button"
                        role="tab" aria-controls="nav-info" aria-selected="false">Info</button>
                </div>
            </nav>
        </div>
        <div class="kidba-menu-sidebar-bottom">
            <div class="logo mb-40">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('logo.png') }}" alt="logo">
                </a>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-menu" role="tabpanel" aria-labelledby="nav-menu-tab">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offwrap"></div>
<!-- sidebar area end -->


<!-- HEADER SECTION STARTS HERE -->
<div class="tl-header">
    <div class="container">
        <div class="row g-0 align-items-center">
            <div class="col-xl-2 col-lg-2">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-6">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('logo.png') }}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="d-lg-none d-flex justify-content-end col-6">
                        <button class="tl-hamburger navbar-toggler">
                            <i class="icofont-navigation-menu"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="tl-nav-menu">
                    <ul>
                        <li class="tl-nav-item tl-dropdown">
                            <a href="{{ route('home') }}" role="button">
                                Home
                            </a>
                        </li>
                        <li class="tl-nav-item tl-dropdown">
                            <a href="{{ route('aboutus') }}" role="button">
                                AboutUs
                            </a>
                        </li>

                        <li class="tl-nav-item tl-dropdown">
                            <a href="{{ route('organization.list') }}" role="button">
                                Organizations
                            </a>
                        </li>

                        <li class="tl-nav-item tl-dropdown">
                            <a href="#" role="button">
                                Scholarships
                            </a>
                        </li>

                        <li class="tl-nav-item tl-dropdown">
                            <a href="{{ route('blogs.list') }}" role="button">
                                Blog
                            </a>
                        </li>

                        <li class="tl-nav-item tl-dropdown">
                            <a href="{{ route('contact-us') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-4 d-lg-block d-none">
                <div class="tl-header-actions d-flex justify-content-end">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="tl-def-btn">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="tl-def-btn">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="tl-def-btn">Register</a>
                        @endif
                    @endauth

                </div>
            </div>
        </div>
    </div>
</div>
<!-- HEADER SECTION ENDS HERE -->
