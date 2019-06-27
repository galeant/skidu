<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/creative-agency/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 04:57:19 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HTML Template</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('creative-agency-css/bootstrap.min.css') }}" />

    <link type="text/css" rel="stylesheet" href="{{ asset('creative-agency-css/owl.carousel.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('creative-agency-css/owl.theme.default.css') }}" />

    <link type="text/css" rel="stylesheet" href="{{ asset('creative-agency-css/magnific-popup.css') }}" />

    <link rel="stylesheet" href="{{ asset('creative-agency-css/font-awesome.min.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('creative-agency-css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('craft-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('craft-css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('craft-css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('craft-fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('craft-fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('craft-fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

    <header id="home">

        <div class="bg-img" style="background-image: url('creative-agency-img/background1.jpg');">
            <div class="overlay"></div>
        </div>

        <nav id="nav" class="navbar nav-transparent">
            <div class="container">
                <div class="navbar-header">

                    <div class="navbar-brand">
                        <a href="index.html">
                            <img class="logo" src="{{ asset('creative-agency-img/logo.png') }}" alt="logo">
                            <img class="logo-alt" src="{{ asset('creative-agency-img/logo-alt.png') }}" alt="logo">
                        </a>
                    </div>

                    <div class="nav-collapse">
                        <span></span>
                    </div>

                </div>

                <ul class="main-nav nav navbar-nav navbar-right">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#pricing">Prices</a></li>
                    <li><a href="#team">Team</a></li>
                    <li class="has-dropdown"><a href="#blog">Blog</a>
                        <ul class="dropdown">
                            <li><a href="blog-single.html">blog post</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

            </div>
        </nav>

        <div class="home-wrapper">
            <div class="container">
                <div class="row">

                    <div class="col-md-10 col-md-offset-1">
                        <div class="home-content">
                            <h1 class="white-text">We Are Creative Agency</h1>
                            <p class="white-text">Morbi mattis felis at nunc. Duis viverra diam non justo. In nisl. Nullam sit amet magna in magna gravida vehicula. Mauris tincidunt sem sed arcu. Nunc posuere.
                            </p>
                            <button class="white-btn">Get Started!</button>
                            <button class="main-btn">Learn more</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </header>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mr-auto mb-5">
                    <span class="d-block text-uppercase text-secondary">Who We Are</span>
                    <span class="divider my-4"></span>
                    <h2 class="mb-4 section-title">We Are <strong>Design Agency</strong> That Bring Your Ideas Alive</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id autem temporibus blanditiis accusamus perferendis libero accusantium nisi itaque tempore, harum aliquid aut, sapiente dolor tenetur. Tempora corrupti suscipit delectus perspiciatis!</p>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus.</p>
                    <p><a href="#" class="btn btn-outline-black">Learn More</a></p>
                </div>
                <div class="col-lg-6">
                    <figure class="img-dotted-bg">
                        <img src="{{ asset('craft-images/about_1.jpg') }}" alt="Image" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </div>

    
    <div class="section portfolio-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="mb-4 section-title">Latest Work</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a href="portfolio-single.html" class="work-thumb">
                        <div class="work-text">
                            <h2>Work Name Here</h2>
                            <p>Category Here</p>
                        </div>
                        <img src="{{ asset('craft-images/work_1.jpg') }}" alt="Image" class="img-fluid">
                    </a>
                    <a href="portfolio-single.html" class="work-thumb">
                        <div class="work-text">
                            <h2>Work Name Here</h2>
                            <p>Category Here</p>
                        </div>
                        <img src="{{ asset('craft-images/work_4.jpg') }}" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="portfolio-single.html" class="work-thumb">
                        <div class="work-text">
                            <h2>Work Name Here</h2>
                            <p>Category Here</p>
                        </div>
                        <img src="{{ asset('craft-images/work_2.jpg') }}" alt="Image" class="img-fluid">
                    </a>
                    <a href="portfolio-single.html" class="work-thumb">
                        <div class="work-text">
                            <h2>Work Name Here</h2>
                            <p>Category Here</p>
                        </div>
                        <img src="{{ asset('craft-images/work_3.jpg') }}" alt="Image" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p><a href="portfolio.html" class="btn btn-outline-white px-4 py-3">More Portfolio</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mr-auto mb-3">
                    <span class="d-block text-uppercase text-secondary">Featured Services</span>
                    <span class="divider my-4"></span>
                    <h2 class="mb-4 section-title">The <strong>Services</strong> That We Are Providing</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id autem temporibus blanditiis accusamus perferendis libero accusantium nisi itaque tempore, harum aliquid aut, sapiente dolor tenetur. Tempora corrupti suscipit delectus perspiciatis!</p>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus.</p>

                </div>
                <div class="col-lg-6">
                    <div class="row mt-5">
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="service">
                                <span class="icon icon-shield mb-4 d-block"></span>
                                <h3>Branding</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="service">
                                <span class="icon icon-screen-desktop mb-4 d-block"></span>
                                <h3>Web Design</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="service">
                                <span class="icon icon-screen-smartphone mb-4 d-block"></span>
                                <h3>App Design</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="service">
                                <span class="icon icon-rocket mb-4 d-block"></span>
                                <h3>Start Up</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="section md-padding">

        <div class="container">

            <div class="row">

                <div class="section-header text-center">
                    <h2 class="title">Welcome to Website</h2>
                </div>

                <div class="col-md-4">
                    <div class="about">
                        <i class="fa fa-cogs"></i>
                        <h3>Fully Customizible</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
                        <a href="#">Read more</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="about">
                        <i class="fa fa-magic"></i>
                        <h3>Awesome Features</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
                        <a href="#">Read more</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="about">
                        <i class="fa fa-mobile"></i>
                        <h3>Fully Responsive</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
                        <a href="#">Read more</a>
                    </div>
                </div>

            </div>

        </div>

    </div>

    
    <div id="portfolio" class="section md-padding bg-grey">

        <div class="container">

            <div class="row">

                <div class="section-header text-center">
                    <h2 class="title">Featured Works</h2>
                </div>

                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="{{ asset('creative-agency-img/work1.jpg') }}" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>Category</span>
                        <h3>Lorem ipsum dolor</h3>
                        <div class="work-link">
                            <a href="#"><i class="fa fa-external-link"></i></a>
                            <a class="lightbox" href="{{ asset('creative-agency-img/work1.jpg') }}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="{{ asset('creative-agency-img/work2.jpg') }}" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>Category</span>
                        <h3>Lorem ipsum dolor</h3>
                        <div class="work-link">
                            <a href="#"><i class="fa fa-external-link"></i></a>
                            <a class="lightbox" href="{{ asset('creative-agency-img/work2.jpg') }}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="img/work3.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>Category</span>
                        <h3>Lorem ipsum dolor</h3>
                        <div class="work-link">
                            <a href="#"><i class="fa fa-external-link"></i></a>
                            <a class="lightbox" href="{{ asset('creative-agency-img/work3.jpg') }}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="{{ asset('creative-agency-img/work4.jpg') }}" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>Category</span>
                        <h3>Lorem ipsum dolor</h3>
                        <div class="work-link">
                            <a href="#"><i class="fa fa-external-link"></i></a>
                            <a class="lightbox" href="{{ asset('creative-agency-img/work4.jpg') }}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="{{ asset('creative-agency-img/work5.jpg') }}" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>Category</span>
                        <h3>Lorem ipsum dolor</h3>
                        <div class="work-link">
                            <a href="#"><i class="fa fa-external-link"></i></a>
                            <a class="lightbox" href="{{ asset('creative-agency-img/work5.jpg') }}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="{{ asset('creative-agency-img/work6.jpg') }}" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>Category</span>
                        <h3>Lorem ipsum dolor</h3>
                        <div class="work-link">
                            <a href="#"><i class="fa fa-external-link"></i></a>
                            <a class="lightbox" href="{{ asset('creative-agency-img/work6.jpg') }}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div id="service" class="section md-padding">

        <div class="container">

            <div class="row">

                <div class="section-header text-center">
                    <h2 class="title">What we offer</h2>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-diamond"></i>
                        <h3>App Development</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-rocket"></i>
                        <h3>Graphic Design</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-cogs"></i>
                        <h3>Creative Idea</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-diamond"></i>
                        <h3>Marketing</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-pencil"></i>
                        <h3>Awesome Support</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-flask"></i>
                        <h3>Brand Design</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div id="features" class="section md-padding bg-grey">

        <div class="container">

            <div class="row">

                <div class="col-md-6">
                    <div class="section-header">
                        <h2 class="title">Why Choose Us</h2>
                    </div>
                    <p>Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris. Ultrices sagittis orci a scelerisque purus.</p>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Quis varius quam quisque id diam vel quam elementum.</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Mauris augue neque gravida in fermentum.</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Orci phasellus egestas tellus rutrum.</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="about-slider" class="owl-carousel owl-theme">
                        <img class="img-responsive" src="{{ asset('creative-agency-img/about1.jpg') }}" alt="">
                        <img class="img-responsive" src="{{ asset('creative-agency-img/about2.jpg') }}" alt="">
                        <img class="img-responsive" src="{{ asset('creative-agency-img/about1.jpg') }}" alt="">
                        <img class="img-responsive" src="{{ asset('creative-agency-img/about2.jpg') }}" alt="">
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div id="numbers" class="section sm-padding">

        <div class="bg-img" style="background-image: url('creative-agency-img/background2.jpg');">
            <div class="overlay"></div>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-users"></i>
                        <h3 class="white-text"><span class="counter">451</span></h3>
                        <span class="white-text">Happy clients</span>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-trophy"></i>
                        <h3 class="white-text"><span class="counter">12</span></h3>
                        <span class="white-text">Awards won</span>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-coffee"></i>
                        <h3 class="white-text"><span class="counter">154</span>K</h3>
                        <span class="white-text">Cups of Coffee</span>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-file"></i>
                        <h3 class="white-text"><span class="counter">45</span></h3>
                        <span class="white-text">Projects completed</span>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div id="pricing" class="section md-padding">

        <div class="container">

            <div class="row">

                <div class="section-header text-center">
                    <h2 class="title">Pricing Table</h2>
                </div>

                <div class="col-sm-4">
                    <div class="pricing">
                        <div class="price-head">
                            <span class="price-title">Basic plan</span>
                            <div class="price">
                                <h3>$9<span class="duration">/ month</span></h3>
                            </div>
                        </div>
                        <ul class="price-content">
                            <li>
                                <p>1GB Disk Space</p>
                            </li>
                            <li>
                                <p>100 Email Account</p>
                            </li>
                            <li>
                                <p>24/24 Support</p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <button class="outline-btn">Purchase now</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="pricing">
                        <div class="price-head">
                            <span class="price-title">Silver plan</span>
                            <div class="price">
                                <h3>$19<span class="duration">/ month</span></h3>
                            </div>
                        </div>
                        <ul class="price-content">
                            <li>
                                <p>1GB Disk Space</p>
                            </li>
                            <li>
                                <p>100 Email Account</p>
                            </li>
                            <li>
                                <p>24/24 Support</p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <button class="outline-btn">Purchase now</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="pricing">
                        <div class="price-head">
                            <span class="price-title">Gold plan</span>
                            <div class="price">
                                <h3>$39<span class="duration">/ month</span></h3>
                            </div>
                        </div>
                        <ul class="price-content">
                            <li>
                                <p>1GB Disk Space</p>
                            </li>
                            <li>
                                <p>100 Email Account</p>
                            </li>
                            <li>
                                <p>24/24 Support</p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <button class="outline-btn">Purchase now</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div id="testimonial" class="section md-padding">

        <div class="bg-img" style="background-image: url('creative-agency-img/background3.jpg');">
            <div class="overlay"></div>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-md-10 col-md-offset-1">
                    <div id="testimonial-slider" class="owl-carousel owl-theme">

                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <img src="{{ asset('creative-agency-img/perso1.jpg') }}" alt="">
                                <h3 class="white-text">John Doe</h3>
                                <span>Web Designer</span>
                            </div>
                            <p class="white-text">Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris.</p>
                        </div>

                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <img src="{{ asset('creative-agency-img/perso2.jpg') }}" alt="">
                                <h3 class="white-text">John Doe</h3>
                                <span>Web Designer</span>
                            </div>
                            <p class="white-text">Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris.</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <div id="team" class="section md-padding">

        <div class="container">

            <div class="row">

                <div class="section-header text-center">
                    <h2 class="title">Our Team</h2>
                </div>

                <div class="col-sm-4">
                    <div class="team">
                        <div class="team-img">
                            <img class="img-responsive" src="{{ asset('creative-agency-img/team1.jpg') }}" alt="">
                            <div class="overlay">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>John Doe</h3>
                            <span>Web Designer</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="team">
                        <div class="team-img">
                            <img class="img-responsive" src="{{ asset('creative-agency-img/team2.jpg') }}" alt="">
                            <div class="overlay">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>John Doe</h3>
                            <span>Web Designer</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="team">
                        <div class="team-img">
                            <img class="img-responsive" src="{{ asset('creative-agency-img/team3.jpg') }}" alt="">
                            <div class="overlay">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>John Doe</h3>
                            <span>Web Designer</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div id="blog" class="section md-padding bg-grey">

        <div class="container">

            <div class="row">

                <div class="section-header text-center">
                    <h2 class="title">Recents news</h2>
                </div>

                <div class="col-md-4">
                    <div class="blog">
                        <div class="blog-img">
                            <img class="img-responsive" src="{{ asset('creative-agency-img/blog1.jpg') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li><i class="fa fa-user"></i>John doe</li>
                                <li><i class="fa fa-clock-o"></i>18 Oct</li>
                                <li><i class="fa fa-comments"></i>57</li>
                            </ul>
                            <h3>Molestie at elementum eu facilisis sed odio</h3>
                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                            <a href="blog-single.html">Read more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="blog">
                        <div class="blog-img">
                            <img class="img-responsive" src="{{ asset('creative-agency-img/blog2.jpg') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li><i class="fa fa-user"></i>John doe</li>
                                <li><i class="fa fa-clock-o"></i>18 Oct</li>
                                <li><i class="fa fa-comments"></i>57</li>
                            </ul>
                            <h3>Molestie at elementum eu facilisis sed odio</h3>
                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                            <a href="blog-single.html">Read more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="blog">
                        <div class="blog-img">
                            <img class="img-responsive" src="{{ asset('creative-agency-img/blog3.jpg') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li><i class="fa fa-user"></i>John doe</li>
                                <li><i class="fa fa-clock-o"></i>18 Oct</li>
                                <li><i class="fa fa-comments"></i>57</li>
                            </ul>
                            <h3>Molestie at elementum eu facilisis sed odio</h3>
                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                            <a href="blog-single.html">Read more</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div id="contact" class="section md-padding">

        <div class="container">

            <div class="row">

                <div class="section-header text-center">
                    <h2 class="title">Get in touch</h2>
                </div>

                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-phone"></i>
                        <h3>Phone</h3>
                        <p>512-421-3940</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bfdad2ded6d3ffcccacfcfd0cdcb91dcd0d2">[email&#160;protected]</a></p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-map-marker"></i>
                        <h3>Address</h3>
                        <p>1739 Bubby Drive</p>
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <form class="contact-form">
                        <input type="text" class="input" placeholder="Name">
                        <input type="email" class="input" placeholder="Email">
                        <input type="text" class="input" placeholder="Subject">
                        <textarea class="input" placeholder="Message"></textarea>
                        <button class="main-btn">Send message</button>
                    </form>
                </div>

            </div>

        </div>

    </div>

    <footer id="footer" class="sm-padding bg-dark">

        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <div class="footer-logo">
                        <a href="index.html"><img src="{{ asset('creative-agency-img/logo-alt.png') }}" alt="logo"></a>
                    </div>

                    <ul class="footer-follow">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>

                    <div class="footer-copyright">
                        <p>Copyright © 2017. All Rights Reserved. Designed by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
                    </div>

                </div>
            </div>

        </div>

    </footer>

    <div id="back-to-top"></div>

    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <script data-cfasync="false" src="{{ asset('creative-agency-js/email-decode.min.js') }}"></script>
    <script type="a0520ad00f72731040c98d19-text/javascript" src="{{ asset('creative-agency-js/jquery.min.js') }}"></script>
    <script src="{{ asset('craft-js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('craft-js/popper.min.js') }}"></script>
    <script type="a0520ad00f72731040c98d19-text/javascript" src="{{ asset('creative-agency-js/bootstrap.min.js') }}"></script>
    <script type="a0520ad00f72731040c98d19-text/javascript" src="{{ asset('creative-agency-js/owl.carousel.min.js') }}"></script>
    <script type="a0520ad00f72731040c98d19-text/javascript" src="{{ asset('creative-agency-js/jquery.magnific-popup.js') }}"></script>
    <script type="a0520ad00f72731040c98d19-text/javascript" src="{{ asset('creative-agency-js/main.js') }}"></script>
    <script src="{{ asset('creative-agency-js/rocket-loader.min.js') }}" data-cf-settings="a0520ad00f72731040c98d19-|49" defer=""></script>
    <script src="{{ asset('craft-js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('craft-js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('craft-js/jquery.stellar.min.js') }}"></script>
</body>

<!-- Mirrored from colorlib.com/etc/creative-agency/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 04:57:29 GMT -->

</html>