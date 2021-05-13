<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

        <!-- CSS
        ============================================ -->

        <!-- Icon Font CSS -->
        <link rel="stylesheet" href="{{ asset('css/plugins/icofont.min.css') }}">

        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('css/plugins/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('/plugins/magnific-popup.css') }}">

        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

    <!-- Header Start  -->
    <div class="header-area bg-dark">
        <div class="header-container container">

            <!-- Header Wrapper Start  -->
            <div class="header-wrapper">
                <!-- Header Logo Start -->
                <div class="header-btn d-none d-lg-block">
                    <a href="#" class="btn btn-primary btn-hover-secondary">EPZ GLOBAL</a>
                </div>
                <!-- Header Logo End -->

                <!-- Header Menu Start -->
                <div class="header-menu d-none d-lg-block">
                    <ul class="nav-menu">
                        @if(Auth::user())
                            @if(Auth::user()->role=='user')
                            <li><a href="{{route('taketest')}}">Take Test</a></li>
                            <li><a href="{{route('mytest')}}">My Test</a></li>

                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                <button class="btn btn-lg btn-primary" type="submit">Logout</button>
                                </form></li>
                            @elseif(Auth::user()->role=='admin')
                            <li><a href="{{route('alltests')}}">All Results</a></li>
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <button class="btn btn-lg btn-primary" type="submit">Logout</button>
                                    </form></li>
                            @endif

                        @else

                        <li><a href="{{route('login')}}">Login</a></li>

                        <li><a href="{{route('register')}}">Register</a></li>
                        @endif

                    </ul>

                </div>
                <!-- Header Menu End -->

                <!-- Header Menu Start -->

                <!-- Header Menu End -->

                <!-- Header Mobile Toggle Start -->
                <div class="header-toggle d-lg-none">
                    <a class="menu-toggle" href="javascript:void(0)">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <!-- Header Mobile Toggle End -->
            </div>
            <!-- Header Wrapper End -->

        </div>
    </div>
    <!-- Header End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu">

        <!-- Menu Close Start -->
        <a class="menu-close" href="javascript:void(0)">
            <i class="icofont-close-line"></i>
        </a>
        <!-- Menu Close End -->

        <!-- Mobile Button Start -->
        <div class="mobile-btn">
            <a href="#" class="btn btn-primary btn-hover-secondary">Get A Quote <i class="icofont-double-right"></i></a>
        </div>
        <!-- Mobile Button End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-items">
            <ul class="nav-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li>
                    <a href="#">Services</a>
                    <ul class="sub-menu">
                        <li><a href="services.html">Services</a></li>
                        <li><a href="services-details.html">Services Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages </a>
                    <ul class="sub-menu">
                        <li><a href="cases.html">Cases</a></li>
                        <li><a href="cases-details.html">Cases Details</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="404-error.html">404 Error</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

        </div>
        <!-- Mobile Menu End -->

    </div>
    <!-- Mobile Menu End -->

    <!-- Overlay Start -->
    <div class="overlay"></div>
    <!-- Overlay End -->

    <!-- Slider Section Start -->
    <div class="section slider-section slider-active">

        <div class="slider-shape-01"></div>
        <div class="slider-shape-02">
            <img src="{{ asset('images/slider/shape-1.png')}}" alt="shape">
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider animation-style-01">

                    <!-- Slider Left Start -->
                    <div class="slider-left">

                        <!-- Slider Content Start -->
                        <div class="slider-content">
                            <div class="content-wrapper">
                                <h5 class="sub-title">OVER 28+ YEARS OF EXPERIENCE</h5>
                                <h1 class="main-title"> <strong>Consulting</strong> for your future plan</h1>
                                <a class="btn btn-outline-light" href="#">All Solution <i class="icofont-double-right"></i></a>
                            </div>
                        </div>
                        <!-- Slider Content End -->

                    </div>
                    <!-- Slider Left End -->

                    <!-- Slider Right Start -->
                    <div class="slider-right">

                        <!-- Slider Images Start -->
                        <div class="slider-images">
                            <img src="{{ asset('images/slider/slider-1.png')}}" alt="Slider Images">
                        </div>
                        <!-- Slider Images End -->

                    </div>
                    <!-- Slider Right End -->

                </div>
                <!-- Single Slider End -->

                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider animation-style-01">

                    <!-- Slider Left Start -->
                    <div class="slider-left">

                        <!-- Slider Content Start -->
                        <div class="slider-content">
                            <div class="content-wrapper">
                                <h5 class="sub-title">OVER 28+ YEARS OF EXPERIENCE</h5>
                                <h1 class="main-title"> <strong>Consulting</strong> for your future plan</h1>
                                <a class="btn btn-outline-light" href="#">All Solution <i class="icofont-double-right"></i></a>
                            </div>
                        </div>
                        <!-- Slider Content End -->

                    </div>
                    <!-- Slider Left End -->

                    <!-- Slider Right Start -->
                    <div class="slider-right">

                        <!-- Slider Images Start -->
                        <div class="slider-images">
                            <img src="{{ asset('images/slider/slider-2.png')}}" alt="Slider Images">
                        </div>
                        <!-- Slider Images End -->

                    </div>
                    <!-- Slider Right End -->

                </div>
                <!-- Single Slider End -->

                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider animation-style-01">

                    <!-- Slider Left Start -->
                    <div class="slider-left">

                        <!-- Slider Content Start -->
                        <div class="slider-content">
                            <div class="content-wrapper">
                                <h5 class="sub-title">OVER 28+ YEARS OF EXPERIENCE</h5>
                                <h1 class="main-title"> <strong>Consulting</strong> for your future plan</h1>
                                <a class="btn btn-outline-light" href="#">All Solution <i class="icofont-double-right"></i></a>
                            </div>
                        </div>
                        <!-- Slider Content End -->

                    </div>
                    <!-- Slider Left End -->

                    <!-- Slider Right Start -->
                    <div class="slider-right">

                        <!-- Slider Images Start -->
                        <div class="slider-images">
                            <img src="{{ asset('images/slider/slider-3.png')}}" alt="Slider Images">
                        </div>
                        <!-- Slider Images End -->

                    </div>
                    <!-- Slider Right End -->

                </div>
                <!-- Single Slider End -->
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

    </div>
    <!-- Slider Section End -->

    <!-- Service Section Start -->
    <div class="section section-padding service-section">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title shape text-center">
                <h5 class="sub-title">Consulting <span> Services</span></h5>
                <h2 class="main-title">EPZ GLOBAL Services</h2>
            </div>
            <!-- Section Title End -->

            <!-- Services Wrapper Start -->
            <div class="services-wrapper">
                <div class="row gx-10">
                    <div class="col-lg-4 col-md-6">

                        <!-- Services Wrapper Start -->
                        <div class="single-service" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-images">
                                <a href="services-details.html"><img src="{{ asset('images/services/services-1.jpg')}}" alt="Services"></a>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="services-details.html">Human Resources</a></h4>
                                <p>Lorem Ipsum is simply dummy text the printing and typesetting industry been the industry's sandard.</p>
                                <a href="services-details.html" class="btn">Details +</a>
                                <div class="shape"></div>
                            </div>
                        </div>
                        <!-- Services Wrapper end -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Services Wrapper Start -->
                        <div class="single-service" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-images">
                                <a href="services-details.html"><img src="{{ asset('images/services/services-2.jpg')}}" alt="Services"></a>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="services-details.html">Business Planning</a></h4>
                                <p>Lorem Ipsum is simply dummy text the printing and typesetting industry been the industry's sandard.</p>
                                <a href="services-details.html" class="btn">Details +</a>
                                <div class="shape"></div>
                            </div>
                        </div>
                        <!-- Services Wrapper end -->

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <!-- Services Wrapper Start -->
                        <div class="single-service" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-images">
                                <a href="services-details.html"><img src="{{ asset('images/services/services-3.jpg')}}" alt="Services"></a>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="services-details.html">Insurance Consulting</a></h4>
                                <p>Lorem Ipsum is simply dummy text the printing and typesetting industry been the industry's sandard.</p>
                                <a href="services-details.html" class="btn">Details +</a>
                                <div class="shape"></div>
                            </div>
                        </div>
                        <!-- Services Wrapper end -->

                    </div>
                </div>
            </div>
            <!-- Services Wrapper End -->

        </div>
    </div>
    <!-- Service Section End -->

    <!-- Call to Action Section Start -->
    <div class="section section-padding overflow-hidden call-to-action-section bg-color-01">
        <div class="container">

            <!-- Call to Action title Start -->
            <div class="call-to-action-title">
                <h2 class="title">You get perfect advice <br> from EPZ GLOBAL for <span>your business</span> <br> and others plan.</h2>
            </div>
            <!-- Call to Action title End -->

            <!-- Call to Action Wrapper Start -->
            <div class="call-to-action-wrapper" data-aos="fade-up" data-aos-delay="200">
                <div class="row gx-0">
                    <div class="col-lg-6">

                        <!-- Call to Action Video Start -->
                        <div class="call-to-action-video" style="background-image: url({{ asset('images/cta.jpg')}});">
                            <a class="play video-popup" href="https://www.youtube.com/watch?v=_OXPoubiFF0"><i class="icofont-ui-play"></i></a>
                        </div>
                        <!-- Call to Action Video End -->

                    </div>
                    <div class="col-lg-6">

                        <!-- Call to Action Contact Start -->
                        <div class="call-to-action-contact">
                            <img class="cta-icon" src="{{ asset('images/telephone.png')}}" alt="Telephone">

                            <div class="contact-wrapper-02 text-center">
                                <h3 class="title">Contact Us</h3>
                                <p>+88 957 436 97</p>
                            </div>
                        </div>
                        <!-- Call to Action Contact End -->

                    </div>
                </div>
            </div>
            <!-- Call to Action Wrapper End -->

            <!-- Call to Action button Start -->
            <div class="call-to-action-btn text-center">
                <a class="btn btn-primary btn-hover-secondary" href="#">Our Speaker <i class="icofont-double-right"></i></a>
            </div>
            <!-- Call to Action button End -->

        </div>
    </div>
    <!-- Call to Action Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="section section-padding why-choose-section mt-n10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content" data-aos="fade-right" data-aos-delay="200">

                        <!-- Why Choose Title Start -->
                        <div class="why-choose-title">
                            <h6 class="sub-title">Why Choose <span>Us?</span></h6>
                            <h2 class="main-title"> <span>Fasted improving</span> your business with EPZ GLOBAL.</h2>
                        </div>
                        <!-- Why Choose Title End -->

                        <!-- Why Choose Items Start -->
                        <div class="why-choose-items">

                            <!-- Single Items Start -->
                            <div class="single-item">
                                <div class="item-icon">
                                    <img src="{{ asset('images/icon/icon-1.png')}}" alt="Icon">
                                </div>
                                <div class="item-content">
                                    <h4 class="title"><span>3000+</span> Trusted Customer</h4>
                                    <p>Lorem Ipsum is simply dummy text the printing and typesetting industry the industry.</p>
                                </div>
                            </div>
                            <!-- Single Items End -->

                            <!-- Single Items Start -->
                            <div class="single-item">
                                <div class="item-icon">
                                    <img src="{{ asset('images/icon/icon-2.png')}}" alt="Icon">
                                </div>
                                <div class="item-content">
                                    <h4 class="title"><span>190+</span> Experienced Speaker</h4>
                                    <p>Lorem Ipsum is simply dummy text the printing and typesetting industry the industry.</p>
                                </div>
                            </div>
                            <!-- Single Items End -->

                            <!-- Single Items Start -->
                            <div class="single-item">
                                <div class="item-icon">
                                    <img src="{{ asset('images/icon/icon-3.png')}}" alt="Icon">
                                </div>
                                <div class="item-content">
                                    <h4 class="title"><span>24/7</span> Customer Support</h4>
                                    <p>Lorem Ipsum is simply dummy text the printing and typesetting industry the industry.</p>
                                </div>
                            </div>
                            <!-- Single Items End -->

                        </div>
                        <!-- Why Choose Items End -->

                    </div>
                    <!-- Why Choose Content End -->

                </div>
                <div class="col-lg-6">

                    <!-- Why Choose Content Start -->
                    <div class="why-choose-images" data-aos="fade-left" data-aos-delay="200">
                        <div class="choose-images">
                            <img src="{{ asset('images/why.png')}}" alt="Why Choose">
                        </div>
                        <div class="choose-shape"></div>
                        <img class="choose-arrow" src="{{ asset('images/arrow-1.png')}}" alt="arrow">
                    </div>
                    <!-- Why Choose Content End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Cases Section Start -->
    <div class="section section-padding bg-color-01">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title shape text-center">
                <h5 class="sub-title">Complete <span> Cases</span></h5>
                <h2 class="main-title">Our Successful Cases</h2>
            </div>
            <!-- Section Title End -->

            <!-- Cases Wrapper Start -->
            <div class="cases-wrapper cases-active" data-aos="fade-up" data-aos-delay="200">

                <img class="arrow-shape" src="{{ asset('images/cases/arrow.png')}}" alt="arrow">

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="single-cases swiper-slide">
                            <img src="{{ asset('images/cases/cases-1.jpg')}}" alt="Cases">

                            <div class="cases-content">
                                <h3 class="title"><a href="cases-details.html">Business Consulting</a></h3>
                                <span class="tags">business / company</span>
                            </div>
                        </div>
                        <div class="single-cases swiper-slide">
                            <img src="{{ asset('images/cases/cases-2.jpg')}}" alt="Cases">

                            <div class="cases-content">
                                <h3 class="title"><a href="cases-details.html">Fiancial Management</a></h3>
                                <span class="tags">business / company</span>
                            </div>
                        </div>
                        <div class="single-cases swiper-slide">
                            <img src="{{ asset('images/cases/cases-3.jpg')}}" alt="Cases">

                            <div class="cases-content">
                                <h3 class="title"><a href="cases-details.html">Business Imvesment</a></h3>
                                <span class="tags">business / company</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Swiper Arrows Start -->
                <div class="swiper-arrows">
                    <!-- Add Arrows -->
                    <div class="swiper-button-prev"><i class="icofont-double-left"></i></div>
                    <div class="swiper-button-next"><i class="icofont-double-right"></i></div>
                </div>
                <!-- Swiper Arrows End -->

            </div>
            <!-- Cases Wrapper End -->

        </div>
    </div>
    <!-- Cases Section End -->

    <!-- Brand Section Start -->
    <div class="section brand-section">
        <div class="container">
            <div class="row gx-0 row-cols-2 row-cols-sm-4 ">
                <div class="col">
                    <div class="single-brand">
                        <div class="brand-logo">
                            <img src="{{ asset('images/brand-logo/brand-1-1.png')}}" alt="Brand">
                            <img class="hover" src="{{ asset('images/brand-logo/brand-2-1.png')}}" alt="Brand">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-brand">
                        <div class="brand-logo">
                            <img src="{{ asset('images/brand-logo/brand-1-2.png')}}" alt="Brand">
                            <img class="hover" src="{{ asset('images/brand-logo/brand-2-2.png')}}" alt="Brand">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-brand">
                        <div class="brand-logo">
                            <img src="{{ asset('images/brand-logo/brand-1-3.png')}}" alt="Brand">
                            <img class="hover" src="{{ asset('images/brand-logo/brand-2-3.png')}}" alt="Brand">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-brand">
                        <div class="brand-logo">
                            <img src="{{ asset('images/brand-logo/brand-1-4.png')}}" alt="Brand">
                            <img class="hover" src="{{ asset('images/brand-logo/brand-2-4.png')}}" alt="Brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Section End -->


    <!-- Footer Start -->
    <div class="section footer-section">

        <!-- Footer Top Start -->
        <div class="footer-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="{{ asset('images/logo-2.png')}}" alt="Logo"></a>
                        </div>
                        <!-- Footer Logo End -->
                    </div>
                    <div class="col-md-4">
                        <!-- Footer Call Start -->
                        <div class="footer-call">
                            <div class="call-icon">
                                <img src="{{ asset('images/phone-call.png')}}" alt="Call">
                            </div>
                            <div class="call-content">
                                <h5 class="title">Call Us:</h5>
                                <p>+00 569 754 87</p>
                            </div>
                        </div>
                        <!-- Footer Call End -->
                    </div>
                    <div class="col-md-4">
                        <!-- Footer Call End -->
                        <div class="footer-social">
                            <ul class="social">
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-dribbble"></i></a></li>
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer Call End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Widget End -->
        <div class="footer-widget-section">
            <img class="shape-01" src="{{ asset('images/arrow-2.png')}}" alt="Arrow">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget" data-aos="fade-up" data-aos-delay="200">
                            <div class="widget-map">
                                <div class="mover-1"></div>

                                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>

                                <div class="mover-2"></div>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Footer Widget Link Start -->
                        <div class="footer-widget-link">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget" data-aos="fade-up" data-aos-delay="300">

                                <div class="footer-widget-title">
                                    <h4 class="title">All Services</h4>
                                    <span class="line"></span>
                                </div>

                                <ul class="footer-link">
                                    <li><a href="#"><i class="icofont-double-right"></i> Business Planning</a></li>
                                    <li><a href="#"><i class="icofont-double-right"></i> Insurance Consulting</a></li>
                                    <li><a href="#"><i class="icofont-double-right"></i> Human Resources</a></li>
                                    <li><a href="#"><i class="icofont-double-right"></i> Products Consulting</a></li>
                                    <li><a href="#"><i class="icofont-double-right"></i> Financial Consulting</a></li>
                                </ul>

                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Start -->
                            <div class="footer-widget" data-aos="fade-up" data-aos-delay="400">

                                <div class="footer-widget-title">
                                    <h4 class="title">Get in Touch</h4>
                                    <span class="line"></span>
                                </div>

                                <ul class="footer-info">
                                    <li>
                                        <div class="single-info">
                                            <div class="info-icon">
                                                <i class="icofont-phone"></i>
                                            </div>
                                            <div class="info-content">
                                                <p><a href="tel:005689476897">+00 568 94 768 97</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-info">
                                            <div class="info-icon">
                                                <i class="icofont-envelope-open"></i>
                                            </div>
                                            <div class="info-content">
                                                <p><a href="mailto:EPZ GLOBAL@gmail.com">EPZ GLOBAL@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-info">
                                            <div class="info-icon">
                                                <i class="icofont-google-map"></i>
                                            </div>
                                            <div class="info-content">
                                                <p>(352) 518-9735 <br> 13917 Wilson St <br> Florida(FL), 33525</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <!-- Footer Widget End -->

                        </div>
                        <!-- Footer Widget Link End -->
                    </div>
                </div>
            </div>
            <img class="shape-02" src="{{ asset('images/arrow-3.png')}}" alt="Arrow">
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Copyright Start -->
        <div class="footer-copyright">
            <div class="container">

                <!-- Footer Copyright Start -->
                <div class="copyright-wrapper">

                    <!-- Footer Copyright Start -->
                    <div class="copyright-text">
                        <p>&copy; 2021 <span> EPZ GLOBAL </span> Made with <i class="icofont-heart-alt"></i> by <a href="#" target="_blank">Prince K Rupiya</a></p>
                    </div>
                    <!-- Footer Copyright End -->

                    <!-- Footer Copyright Start -->
                    <div class="copyright-link">
                        <a href="#">Cookie Policy</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms & Conditions</a>
                    </div>
                    <!-- Footer Copyright End -->

                </div>
                <!-- Footer Copyright End -->

            </div>
        </div>
        <!-- Footer Copyright End -->

    </div>
    <!-- Footer End -->

    <!--Back To Start-->
    <a href="#" class="back-to-top">
        <i class="icofont-simple-up"></i>
    </a>
    <!--Back To End-->




    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="{{ asset('js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{ asset('js/vendor/jquery-3.5.1.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/plugins/popper.min.js')}}"></script>
    <script src={{ asset('js/plugins/bootstrap.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('js/plugins/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/plugins/validate.js')}}"></script>
    <script src="{{ asset('js/plugins/aos.js')}}"></script>
    <script src="{{ asset('js/plugins/ajax-contact.js')}}"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="{{ asset('js/plugins.min.js')}}"></script> -->


    <!-- Main JS -->
    <script src="{{ asset('js/main.js')}}"></script>


    </body>
</html>
