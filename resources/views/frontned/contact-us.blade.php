@extends('layout')

@section('content')
    <div class="tl-breadcrumb border-0 pt-120 pb-120">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-6">
                    <div class="banner-txt">
                        <h1 class="tl-breadcrumb-title">Contact One</h1>
                    </div>
                </div>

                <div class="col-md-6">
                    <ul class="tl-breadcrumb-nav d-flex">
                        <li><a href="index.html">Home</a></li>
                        <li class="current-page">
                            <span class="dvdr"><i class="icofont-simple-right"></i></span>
                            <span>Contact</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="tl-7-contact">
        <div class="container">
            <div class="row gy-4 gy-md-5 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <h2 class="tl-8-section-title">Get In Touch</h2>
                    <form action="{{ route('contact.store') }}" method="POST" class="tl-7-contact-form">
                        @csrf
                        <div class="row g-3 g-md-4">
                            <div class="col-6 col-xxs-12">
                                <input type="text" name="stud-name" id="tl-7-stud-name" placeholder="Your Name" required
                                    value="{{ old('stud-name') }}">
                                @error('stud-name')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6 col-xxs-12">
                                <input type="email" name="stud-mail" id="tl-7-stud-mail" placeholder="Your Email" required
                                    value="{{ old('stud-mail') }}">
                                @error('stud-mail')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6 col-xxs-12">
                                <input type="number" name="stud-age" id="tl-7-stud-age" placeholder="Your Age" required
                                    value="{{ old('stud-age') }}">
                                @error('stud-age')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6 col-xxs-12">
                                <input type="tel" name="stud-number" id="tl-7-stud-namer" placeholder="Your Number"
                                    required value="{{ old('stud-number') }}">
                                @error('stud-number')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <textarea name="stud-message" id="tl-7-stud-message" placeholder="Your Message" required>{{ old('stud-message') }}</textarea>
                                @error('stud-message')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col">
                                <button type="submit" class="tl-7-def-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2169.5878941785077!2d90.39650346418186!3d23.861328234002062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9884c556831%3A0xbf922ce212df4e67!2sSpeedDigit%20Software%20Solution!5e0!3m2!1sen!2sbd!4v1687239684068!5m2!1sen!2sbd"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
