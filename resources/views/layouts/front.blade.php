<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Youth Economic Capital</title>

    <!-- Vendor CSS (Icon Font) -->
    <!--
<link rel="stylesheet" href="assets/css/vendor/fontawesome.min.css">
-->

    <!-- Plugins CSS (All Plugins Files) -->
    <!--
<link rel="stylesheet" href="assets/css/plugins/splitting.min.css">
<link rel="stylesheet" href="assets/css/plugins/animate.min.css">
<link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
<link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
<link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
<link rel="stylesheet" href="assets/css/plugins/aos.min.css">
<link rel="stylesheet" href="assets/css/plugins/magnific-popup-min.css">
-->

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" />  -->


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="/yec/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="/yec/assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="/yec/assets/css/style.min.css">
    <link rel="stylesheet" href="/yec/assets/css/custom.css">
    <style>
        .menu-text{
            color: #0C9DBF !important;
        }
        .service-icon{
            background-color: #0C9DBF !important;
        }

        .vertical-tab{
            font-family: 'Karla', sans-serif;
            display: table;
        }
        .vertical-tab p{
            font-size: 16px;
        }
        .vertical-tab .nav-tabs{
            display: table-cell;
            width: 25%;
            min-width: 25%;
            border: none;
            vertical-align: top;
        }
        .vertical-tab .nav-tabs li{ float: none; }
        .vertical-tab .nav-tabs li a{
            color: #555;
            background: #fff;
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            text-align: center;
            padding: 8px 7px 7px;
            margin: 0 10px 12px 0;
            border-radius: 30px;
            border: none;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            overflow: hidden;
            position: relative;
            z-index: 1;
            transition: all 0.5s ease 0s;
        }
        .vertical-tab .nav-tabs li a:hover,
        .vertical-tab .nav-tabs li.active a,
        .vertical-tab .nav-tabs li.active a:hover{
            color: #fff;
            background: #fff;
            border: none;
        }
        .vertical-tab .nav-tabs li a:before{
            content: '';
            background-color: #1AA3C3;
            height: 7%;
            width: 100%;
            border-radius: 30px;
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -1;
            transition: all 0.3s ease-out 0s;
        }
        .vertical-tab .nav-tabs li a:hover:before,
        .vertical-tab .nav-tabs li.active a:before,
        .vertical-tab .nav-tabs li.active a:hover:before{
            height: 100%;
        }
        .vertical-tab .tab-content{
            color: #777;
            background: #fff;
            font-size: 14px;
            font-weight: 500;
            line-height: 21px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            display: table-cell;
        }
        .vertical-tab .tab-content h3{
            color: #1AA3C3;
            font-size: 22px;
            font-weight: 500;
            text-transform: capitalize;
            margin: 0 0 5px;
        }
        @media only screen and (max-width: 479px){
            .vertical-tab .nav-tabs{
                width: 100%;
                display: block;
            }
            .vertical-tab .nav-tabs li a{
                padding: 10px 25px 9px;
                margin: 0 0 12px;
            }
            .vertical-tab .tab-content{
                font-size: 14px;
                padding: 15px;
                display: block;
            }
        }

        /*team*/
        .heading.heading-icon {
            display: block;
        }
        .padding-lg {
            display: block;
            padding-top: 60px;
            padding-bottom: 60px;
        }
        .practice-area.padding-lg {
            padding-bottom: 55px;
            padding-top: 55px;
        }
        .practice-area .inner{
            border:1px solid #999999;
            text-align:center;
            margin-bottom:28px;
            padding:40px 25px;
        }
        .our-webcoderskull .cnt-block:hover {
            box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
            border: 0;
        }
        .practice-area .inner h3{
            color:#3c3c3c;
            font-size:24px;
            font-weight:500;
            font-family: 'Poppins', sans-serif;
            padding: 10px 0;
        }
        .practice-area .inner p{
            font-size:14px;
            line-height:22px;
            font-weight:400;
        }
        .practice-area .inner img{
            display:inline-block;
        }


        .our-webcoderskull{
            /*background: url("http://www.webcoderskull.com/img/right-sider-banner.png") no-repeat center top / cover;*/

        }
        .our-webcoderskull .cnt-block{
            float:left;
            width:100%;
            background:#fff;
            padding:30px 20px;
            text-align:center;
            border:2px solid #d5d5d5;
            margin: 0 0 28px;
        }
        .our-webcoderskull .cnt-block figure{
            width:148px;
            height:148px;
            border-radius:100%;
            display:inline-block;
            margin-bottom: 15px;
        }
        .our-webcoderskull .cnt-block img{
            width:148px;
            height:148px;
            border-radius:100%;
        }
        .our-webcoderskull .cnt-block h3{
            color:#2a2a2a;
            font-size:20px;
            font-weight:500;
            padding:6px 0;
            text-transform:uppercase;
        }
        .our-webcoderskull .cnt-block h3 a{
            text-decoration:none;
            color:#2a2a2a;
        }
        .our-webcoderskull .cnt-block h3 a:hover{
            color:#337ab7;
        }
        .our-webcoderskull .cnt-block p{
            color:#2a2a2a;
            font-size:13px;
            line-height:20px;
            font-weight:400;
        }
        .our-webcoderskull .cnt-block .follow-us{
            margin:20px 0 0;
        }
        .our-webcoderskull .cnt-block .follow-us li{
            display:inline-block;
            width:auto;
            margin:0 5px;
        }
        .our-webcoderskull .cnt-block .follow-us li .fa{
            font-size:24px;
            color:#767676;
        }
        .our-webcoderskull .cnt-block .follow-us li .fa:hover{
            color:#025a8e;
        }

        .row.heading h2 {
            color: #fff;
            font-size: 52.52px;
            line-height: 95px;
            font-weight: 400;
            text-align: center;
            margin: 0 0 40px;
            padding-bottom: 20px;
            text-transform: uppercase;
        }


        /*sliii*/
        .holderCircle { width: 500px; height: 500px; border-radius: 100%; margin: 60px auto; position: relative; }


        .dotCircle { width: 100%; height: 100%; position: absolute; margin: auto; top: 0; left: 0; right: 0; bottom: 0; border-radius: 100%; z-index: 20; }
        .dotCircle  .itemDot { display: block; width: 80px; height: 80px; position: absolute; background: #ffffff; color: #7d4ac7; border-radius: 20px; text-align: center; line-height: 80px; font-size: 30px; z-index: 3; cursor: pointer; border: 2px solid #e6e6e6; }
        .dotCircle  .itemDot .forActive { width: 56px; height: 56px; position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: none; }
        .dotCircle  .itemDot .forActive::after { content: ''; width: 5px; height: 5px; border: 3px solid #7d4ac7; bottom: -31px; left: -14px; filter: blur(1px); position: absolute; border-radius: 100%; }
        .dotCircle  .itemDot .forActive::before { content: ''; width: 6px; height: 6px; filter: blur(5px); top: -15px; position: absolute; transform: rotate(-45deg); border: 6px solid #a733bb; right: -39px; }
        .dotCircle  .itemDot.active .forActive { display: block; }
        .round { position: absolute; left: 40px; top: 45px; width: 410px; height: 410px; border: 2px dotted #4AA1D3; border-radius: 100%; -webkit-animation: rotation 100s infinite linear; }
        .dotCircle .itemDot:hover, .dotCircle .itemDot.active { color: #ffffff; transition: 0.5s;   /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#7d4ac7+0,4AA1D3+100 */ background: #4AA1D3; /* Old browsers */ background: -moz-linear-gradient(left, #7d4ac7 0%, #4AA1D3 100%); /* FF3.6-15 */ background: -webkit-linear-gradient(left, #4AA1D3 0%, #4AA1D3 100%); /* Chrome10-25,Safari5.1-6 */ background: linear-gradient(to right, #7d4ac7 0%, #4AA1D3 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */ filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7d4ac7', endColorstr='#4AA1D3', GradientType=1); /* IE6-9 */ border: 2px solid #ffffff; -webkit-box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13); -moz-box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13); box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13); }
        .dotCircle .itemDot { font-size: 40px; }
        .contentCircle { width: 250px; border-radius: 100%; color: #222222; position: relative; top: 150px; left: 50%; transform: translate(-50%, -50%); }
        .contentCircle .CirItem { border-radius: 100%; color: #222222; position: absolute; text-align: center; bottom: 0; left: 0; opacity: 0; transform: scale(0); transition: 0.5s; font-size: 15px; width: 100%; height: 100%; top: 0; right: 0; margin: auto; line-height: 250px; }
        .CirItem.active { z-index: 1; opacity: 1; transform: scale(1); transition: 0.5s; }
        .contentCircle .CirItem i { font-size: 180px; position: absolute; top: 0; left: 50%; margin-left: -90px; color: #000000; opacity: 0.1; }
        @media only screen and (min-width:300px) and (max-width:599px) {
            .holderCircle {/* width: 300px; height: 300px;*/ margin: 110px auto; }
            .holderCircle::after { width: 100%; height: 100%; }
            .dotCircle { width: 100%; height: 100%; top: 0; right: 0; bottom: 0; left: 0; margin: auto; }
        }
        @media only screen and (min-width:600px) and (max-width:767px) { }
        @media only screen and (min-width:768px) and (max-width:991px) { }
        @media only screen and (min-width:992px) and (max-width:1199px) { }
        @media only screen and (min-width:1200px) and (max-width:1499px) { }
        .title-box .title { font-weight: 600; letter-spacing: 2px; position: relative; z-index: -1; }
        .title-box span { text-shadow: 0 10px 10px rgba(0, 0, 0, .15); font-weight: 800; color: #4AA1D3; }
        .title-box p {font-size: 17px; line-height: 2em; }

        .yec{
            color: #387A78 !important;
        }




    </style>
    @livewireStyles

</head>

<body>
<div id="preloader">
    <div class="preloader">
        <div class="spinner-border text-primary"></div>
    </div>
</div>

<!-- Header Area Start Here -->
<header class="main-header-area header-transparent header-sticky">
    <!-- Main Header Area Start -->
    <div class="main-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-xl-2 col-md-6 col-6">
                    <div class="header-logo d-flex align-items-center">
                        <a href="/">
                            <img class="nonsticky-logo img-full" src="/yec/assets/images/logo/logo.png" alt="Header Logo">
                            <img class="sticky-logo img-full" src="/yec/assets/images/logo/white-logo.png" alt="Header Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-6 d-flex justify-content-end">
{{--                    <nav class="main-nav d-none d-lg-flex">--}}
{{--                        <ul class="nav">--}}
{{--                            <li>--}}
{{--                                <a class="active" href="/">--}}
{{--                                    <span class="menu-text"> Home</span>--}}

{{--                                </a>--}}

{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="{{route('about')}}">--}}
{{--                                    <span class="menu-text">About</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    Category 1--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}


{{--                                    <div class="container">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <span class="text-uppercase text-white">Category 1</span>--}}
{{--                                                <ul class="nav flex-column">--}}
{{--                                                    <li class="nav-item">--}}
{{--                                                        <a class="nav-link active" href="#">Active</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="nav-item">--}}
{{--                                                        <a class="nav-link" href="#">Link item</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="nav-item">--}}
{{--                                                        <a class="nav-link" href="#">Link item</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.col-md-4  -->--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <ul class="nav flex-column">--}}
{{--                                                    <li class="nav-item">--}}
{{--                                                        <a class="nav-link active" href="#">Active</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="nav-item">--}}
{{--                                                        <a class="nav-link" href="#">Link item</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="nav-item">--}}
{{--                                                        <a class="nav-link" href="#">Link item</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.col-md-4  -->--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <a href="">--}}
{{--                                                    <img src="https://dummyimage.com/200x100/ccc/000&text=image+link" alt="" class="img-fluid">--}}
{{--                                                </a>--}}
{{--                                                <p class="text-white">Short image call to action</p>--}}

{{--                                            </div>--}}
{{--                                            <!-- /.col-md-4  -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!--  /.container  -->--}}


{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="{{route('yef-section')}}" target="_blank">--}}
{{--                                    <span class="menu-text">Yef</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="{{route('services')}}">--}}
{{--                                    <span class="menu-text"> Service</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href=""f>--}}
{{--                                    <span class="menu-text"> Our Projects</span>--}}

{{--                                </a>--}}

{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="blog.html">--}}
{{--                                    <span class="menu-text"> Blog</span>--}}

{{--                                </a>--}}

{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="{{route('contact')}}">--}}
{{--                                    <span class="menu-text">Contact</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="{{route('register')}}">--}}
{{--                                    <span class="menu-text"><b>Register</b></span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="{{route('login')}}">--}}
{{--                                    <span class="menu-text"><b>Login</b></span>--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </nav>--}}
                    <nav class="navbar navbar-light bg-light navbar-expand-lg" id="myNavbar">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="mainNav">
                            <ul class="navbar-nav ml-auto nav-fill">

                                <li class="nav-item px-4">
                                    <a href="#" class="nav-link">Home <span class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item px-4 dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="aboutDropdown">
                                        <a class="dropdown-item" href="{{route('about')}}">What we do</a>
                                        <a class="dropdown-item" href="{{route('about')}}">Team</a>
                                        <div class="dropdown-divider"></div>
                                        <div class="d-md-flex align-items-start justify-content-start">
                                            <div>
                                                <div class="dropdown-header">Vision</div>
{{--                                                <a class="dropdown-item" href="#">Bespoke software</a>--}}
{{--                                                <a class="dropdown-item" href="#">Mobile apps</a>--}}
{{--                                                <a class="dropdown-item" href="#">Websites</a>--}}
                                            </div>
                                            <div>
                                                <div class="dropdown-header">Mission</div>

                                            </div>
                                            <div>


                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item px-4 dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Services</a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="servicesDropdown">
                                        <a class="dropdown-item" href="#">What we do</a>

                                        <div class="dropdown-divider"></div>
                                        <div class="d-md-flex align-items-start justify-content-start">
                                            <div>
                                                <div class="dropdown-header">Financial Planning</div>

                                            </div>
                                            <div>
                                                <div class="dropdown-header">Professional Services</div>

                                            </div>

                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item px-4">
                                    <a href="#" class="nav-link">Our Projects</a>
                                </li>

                                <li class="nav-item px-4">
                                    <a href="{{route('contact')}}" class="nav-link">Contact</a>
                                </li>

                                <li class="nav-item px-4">
                                    <a href="{{route('register')}}" class="nav-link">Register</a>
                                </li>


                                <li class="nav-item px-4">
                                    <a href="{{route('yef-section')}}" class="nav-link">YEF</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header Area End -->
    <!-- off-canvas mobile menu start -->
    <aside class="off-canvas-wrapper" id="mobileMenu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="fa fa-times"></i>
            </div>
            <div class="off-canvas-inner">
                <div class="offcanvas-widget-area">
                    <!-- Start Serach Box -->
                    <div class="search-box-wrap off-canvas-item">
                        <form action="#" method="post">
                            <input placeholder="Search..">
                            <button class="btn-search"><i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- End Search Box -->
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="#">Home</a>

                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li class="menu-item-has-children"><a href="#">Portfolio</a>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Blog</a>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                    <!-- Soclial Link Start -->
                    <div class="widget-social">
                        <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                    <!-- Social Link End -->
                </div>
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
    <!-- Offcanvas Serach Start -->
    <aside class="off-canvas-search-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="off-canvas-inner">
                <form action="#" method="post">
                    <input type="search" placeholder="Search..">
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </aside>
    <!-- Offcanvas Search End -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-menu-wrapper" id="sideMenu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="off-canvas-inner">
                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <!-- Start Serach Box -->
                    <div class="search-box-wrap off-canvas-item">
                        <form action="#" method="post">
                            <input placeholder="Search..">
                            <button class="btn-search"><i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- End Search Box -->
                    <ul class="menu-top-menu">
                        <li><span>Who We Are</span></li>
                    </ul>
                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <ul class="useful-link">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="service.html">Service</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                    <div class="widget-social">
                        <ul class="menu-top-menu">
                            <li><span>Connect With Us</span></li>
                        </ul>
                        <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
            <div class="btn-close-off-canvas">
                <i class="fa fa-times"></i>
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
</header>
<!-- Header Area End Here -->
{{ $slot }}
<!-- Footer Section Start Here -->
<footer class="footer-section pt-90" style="background-color: #EAF6F5">
    <div class="footer-widget-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-custom">
                    <div class="single-footer-widget m-0" data-aos="fade-up" data-aos-delay="300" data-aos-anchor-placement="bottom bottom">
                        <div class="footer-logo pb-3">
                            <a href="index.html">
                                <img src="/yec/assets/images/logo/logo.png" alt="Logo Image">
                            </a>
                        </div>
                        <p class="desc-content pt-3 pb-3 primary-color">We are an impact investment company seeks to operate impact funds aligned with the philosophy of SDG
                            Financing – creating impact as well as the essential financial return.</p>
                        <!-- Soclial Link Start -->
                        <div class="widget-social pt-4">
                            <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                            <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                            <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                        </div>
                        <!-- Social Link End -->
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-custom">
                    <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="400" data-aos-anchor-placement="bottom bottom">
                        <h2 class="widget-title">Our Servcies</h2>
                        <ul class="widget-list pt-3">
                            <li><a href="{{route('services')}}">Business</a></li>
                            <li><a href="service.html">Growth</a></li>
                            <li><a href="service.html">Funding</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-2 col-custom">
                    <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="500" data-aos-anchor-placement="bottom bottom">
                        <h2 class="widget-title">Quicklink</h2>
                        <ul class="widget-list pt-3">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Term Of Use</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-custom">
                    <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="600" data-aos-anchor-placement="bottom bottom">
                        <h2 class="widget-title">Get in Touch</h2>
                        <div class="widget-body pt-3">
                            <p class="desc-content pb-3">Enter your email and receive the latest news from us.</p>
                            <div class="newsletter-form-wrap pt-4">
                                <form id="mc-form" class="mc-form d-flex position-relative">
                                    <input type="email" id="mc-email" class="form-control email-box rounded-0" placeholder="email@example.com" name="EMAIL">
                                    <button id="mc-submit" class="btn newsletter-btn position-absolute" type="submit"><i class="fa fa-envelope"></i></button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                                </div>
                                <!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area pt-5 border-top mt-90 mb-5">
        <div class="container custom-area">
            <div class="row">
                <div class="col-12 text-center col-custom">
                    <div class="copyright-content">
                        <p class="mb-0">Copyright © 2020 <a href="#">YEC</a> | Built</strong>&nbsp;by <a href="#">Bint</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End Here -->



<!-- Scroll Top Start Here -->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fa fa-angle-double-up"></i>
    <i class="arrow-bottom fa fa-angle-double-up"></i>
</a>
<!-- Scroll Top End Here -->

<!-- Global Vendor, plugins JS -->

<!-- Vendors JS -->
<!--
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
-->

<!-- Plugins JS -->
<!--
<script src="assets/js/plugins/splitting.min.js"></script>
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/waypoints.min.js"></script>
<script src="assets/js/plugins/counter.min.js"></script>
<script src="assets/js/plugins/aos.min.js"></script>
<script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="assets/js/plugins/jquery.vide.min.js"></script>
<script src="assets/js/plugins/masonry.min.js"></script>
<script src="assets/js/plugins/theia-sticky-sidebar.min.js"></script>
<script src="assets/js/plugins/nice-select.min.js"></script>
<script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/plugins/jquery-ui.min.js"></script>
-->

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<script src="/yec/assets/js/vendor/vendor.min.js"></script>
<script src="/yec/assets/js/plugins/plugins.min.js"></script>

<!--Main JS-->
<script src="/yec/assets/js/main.js"></script>
<script>

    let i=2;
    $(document).ready(function(){
        var radius = 200;
        var fields = $('.itemDot');
        var container = $('.dotCircle');
        var width = container.width();
        radius = width/2.5;

        var height = container.height();
        var angle = 0, step = (2*Math.PI) / fields.length;
        fields.each(function() {
            var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
            var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
            if(window.console) {
                console.log($(this).text(), x, y);
            }

            $(this).css({
                left: x + 'px',
                top: y + 'px'
            });
            angle += step;
        });


        $('.itemDot').click(function(){

            var dataTab= $(this).data("tab");
            $('.itemDot').removeClass('active');
            $(this).addClass('active');
            $('.CirItem').removeClass('active');
            $( '.CirItem'+ dataTab).addClass('active');
            i=dataTab;

            $('.dotCircle').css({
                "transform":"rotate("+(360-(i-1)*36)+"deg)",
                "transition":"2s"
            });
            $('.itemDot').css({
                "transform":"rotate("+((i-1)*36)+"deg)",
                "transition":"1s"
            });


        });

        setInterval(function(){
            var dataTab= $('.itemDot.active').data("tab");
            if(dataTab>6||i>6){
                dataTab=1;
                i=1;
            }
            $('.itemDot').removeClass('active');
            $('[data-tab="'+i+'"]').addClass('active');
            $('.CirItem').removeClass('active');
            $( '.CirItem'+i).addClass('active');
            i++;


            $('.dotCircle').css({
                "transform":"rotate("+(360-(i-2)*36)+"deg)",
                "transition":"2s"
            });
            $('.itemDot').css({
                "transform":"rotate("+((i-2)*36)+"deg)",
                "transition":"1s"
            });

        }, 5000);

    });
</script>
@livewireScripts
</body>

</html>
