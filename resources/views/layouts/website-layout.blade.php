<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from demo.themewinter.com/html/cornike/construction/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 11:19:17 GMT -->

<head>

    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8">
    <title>Cornike</title>

    <!-- Mobile Specific Metas
	================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('website') }}/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ asset('website') }}/images/favicon.ico" type="image/x-icon">

    <!-- CSS
	================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('website') }}/css/bootstrap.min.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('website') }}/css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="{{ asset('website') }}/css/responsive.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('website') }}/css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('website') }}/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('website') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/owl.theme.default.min.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('website') }}/css/colorbox.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="body-inner">

        <div class="preload"></div>

        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <ul class="top-info">
                            <li><i class="fa fa-phone">&nbsp;</i>
                                <p class="info-text">(+89) 530-352-3027</p>
                            </li>
                            <li><i class="fa fa-envelope-o">&nbsp;</i>
                                <p class="info-text">info@cornike.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top info end -->

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-social text-right">
                        <ul class="unstyled">
                            <li>
                                <a title="Facebook" href="#">
                                    <span class="social-icon"><i class="fa fa-facebook"></i></span>
                                </a>
                                <a title="Twitter" href="#">
                                    <span class="social-icon"><i class="fa fa-twitter"></i></span>
                                </a>
                                <a title="Google+" href="#">
                                    <span class="social-icon"><i class="fa fa-google-plus"></i></span>
                                </a>
                                <a title="Linkdin" href="#">
                                    <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                                </a>
                                <a title="Rss" href="#">
                                    <span class="social-icon"><i class="fa fa-rss"></i></span>
                                </a>
                                <a title="Skype" href="#">
                                    <span class="social-icon"><i class="fa fa-skype"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top social end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </div>
        <!--/ Topbar end -->

        <!-- Header start -->
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <div class="logo">
                            <a href="index-2.html">
                                <img src="{{ asset('website') }}/images/logo.png" alt="">
                            </a>
                        </div><!-- logo end -->
                    </div><!-- Navbar header end -->

                    <div class="site-nav-inner">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <nav class="collapse navbar-collapse navbar-responsive-collapse pull-right">

                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="active"><a href="index-2.html">Home One</a></li>
                                        <li><a href="index-3.html">Home Two</a></li>
                                        <li><a href="index-4.html">Home Three</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="about2.html">About Us 2</a></li>
                                        <li><a href="team.html">Our People</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="quote.html">Get a Quote</a></li>
                                        <li><a href="career.html">Career</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="projects.html">Projects All</a></li>
                                        <li><a href="projects-single1.html">Projects Single 1</a></li>
                                        <li><a href="projects-single2.html">Projects Single 2</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="services.html">Services All</a></li>
                                        <li><a href="service-single1.html">Services Single 1</a></li>
                                        <li><a href="service-single2.html">Services Single 2</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#.">Parent Menu</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Child Menu 1</a></li>
                                                <li><a href="#">Child Menu 2</a></li>
                                                <li><a href="#">Child Menu 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">News <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                                        <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                                        <li><a href="news-single.html">News Single</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="contact1.html">Contact One</a></li>
                                        <li><a href="contact2.html">Contact Two</a></li>
                                    </ul>
                                </li>

                                <li class="nav-search">
                                    <span id="search"><i class="fa fa-search"></i></span>
                                </li>

                                <li class="header-get-a-quote">
                                    <a class="btn btn-primary" href="#">Get Free Quote</a>
                                </li>

                            </ul>
                            <!--/ Nav ul end -->

                        </nav>
                        <!--/ Collapse end -->

                        <div class="search" style="display: none;">
                            <input type="text" class="form-control" placeholder="Type what you want and enter">
                            <span class="search-close">&times;</span>
                        </div><!-- Site search end -->

                    </div><!-- Site nav inner end -->

                </div><!-- Row end -->
            </div><!-- Container end -->
        </header>
        <!--/ Header end -->

        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators visible-lg visible-md">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">

                <div class="item active" style="background-image:url({{ asset('website') }}/images/slider-main/bg1.jpg)">
                    <div class="slider-content text-left">
                        <div class="col-md-12">
                            <h2 class="slide-title-box animated2">27 Years Young</h2>
                            <h3 class="slide-title animated3">With a Bench Strength of</h3>
                            <h3 class="slide-sub-title animated3">1170+ Construction Experts</h3>
                            <p class="animated3">
                                <a href="#" class="slider btn btn-primary border">Our Services</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item 1 end -->

                <div class="item" style="background-image:url({{ asset('website') }}/images/slider-main/bg2.jpg)">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="slide-title animated4">We are the Leader in</h2>
                            <h3 class="slide-sub-title animated5">Construction Industry</h3>
                            <p class="slider-description lead animated3">We will deal with your failure that determines
                                how you achieve success.</p>
                            <p>
                                <a href="#" class="slider btn btn-primary">Our Services</a>
                                <a href="#" class="slider btn btn-primary border">Call Now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item 2 end -->

                <div class="item" style="background-image:url({{ asset('website') }}/images/slider-main/bg3.jpg)">
                    <div class="slider-content text-right">
                        <div class="col-md-12">
                            <h2 class="slide-title animated6">Meet Our Engineers</h2>
                            <h3 class="slide-sub-title animated7">We care our Cummunities</h3>
                            <p class="slider-description lead animated7">We will deal with your failure that determines
                                how you achieve success.</p>
                            <p>
                                <a href="#" class="slider btn btn-primary">Get Free Quote</a>
                                <a href="#" class="slider btn btn-primary border">Learn More</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item 3 end -->

            </div><!-- Carousel inner end-->

            <!-- Controllers -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!--/ Carousel end -->

        <section class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-xs-12">
                        <h3 class="call-to-action-title">We are committed to providing the best quality of service</h3>
                    </div>

                    <div class="col-md-2 col-xs-12">
                        <div class="call-to-action-btn-angle">
                            <a href="#"><i class="fa fa-paper-plane"></i>Contact Us</a>
                        </div>
                    </div>
                </div><!-- Row end -->
            </div><!-- Container end -->
        </section><!-- Call to action end -->

        <section id="ts-features" class="ts-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="intro-feature">
                            <h3>Company Vision and Purpose</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget
                                risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum
                                a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc
                                posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p><a class="intro-link" href="#"><i class="fa fa-caret-right"> </i> More Information</a>
                            </p>
                            <div class="img-box">
                                <div class="img-box-small">Pillars of Excellence</div>
                                <figure><img class="img-responsive" src="{{ asset('website') }}/images/intro/intro1.jpg" alt=""></figure>
                                <figure><img class="img-responsive" src="{{ asset('website') }}/images/intro/intro2.jpg" alt=""></figure>
                                <figure><img class="img-responsive" src="{{ asset('website') }}/images/intro/intro3.jpg" alt=""></figure>
                            </div>
                        </div><!-- Intro box end -->
                    </div><!-- Col end -->

                    <div class="col-sm-6">

                        <div class="featured-tab">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
                                        <span class="tab-head">
                                            <span class="tab-text-title">Trust</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
                                        <span class="tab-head">
                                            <span class="tab-text-title">Expertise</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
                                        <span class="tab-head">
                                            <span class="tab-text-title">Safety</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active animated fadeInRight" id="tab_a">
                                    <div class="tab-wrapper">

                                        <div class="ts-service-box">
                                            <span class="ts-service-icon"><i class="fa fa-trophy"> </i></span>
                                            <div class="ts-service-box-content">
                                                <h3>We've Repution for Excellence</h3>
                                                <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero.
                                                    Consectetur ut vestibulum vivamus vestibulum accumsa.</p>
                                            </div>
                                        </div><!-- Service 1 end -->

                                        <div class="ts-service-box">
                                            <span class="ts-service-icon"><i class="fa fa-sliders"> </i></span>
                                            <div class="ts-service-box-content">
                                                <h3>We Build Partnerships</h3>
                                                <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero.
                                                    Consectetur ut vestibulum vivamus vestibulum accumsa.</p>
                                            </div>
                                        </div><!-- Service 2 end -->

                                        <div class="ts-service-box">
                                            <span class="ts-service-icon"><i class="fa fa-thumbs-up"> </i></span>
                                            <div class="ts-service-box-content">
                                                <h3>Guided by Commitment</h3>
                                                <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero.
                                                    Consectetur ut vestibulum vivamus vestibulum accumsa.</p>
                                            </div>
                                        </div><!-- Service 3 end -->

                                    </div><!-- Tab wrapper end -->
                                </div><!-- Tab pane 1 end -->

                                <div class="tab-pane animated fadeInRight" id="tab_b">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et.</p>

                                    <div class="ts-service-box">
                                        <span class="ts-service-icon"><i class="fa fa-users"> </i></span>
                                        <div class="ts-service-box-content">
                                            <h3>A Team of Professionals</h3>
                                            <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero.
                                                Consectetur ut vestibulum vivamus vestibulum accumsa.</p>
                                        </div>
                                    </div><!-- Service 1 end -->

                                    <div class="ts-service-box">
                                        <span class="ts-service-icon">
                                            <i class="fa fa-hourglass"> </i>
                                        </span>
                                        <div class="ts-service-box-content">
                                            <h3>121 Years of Young</h3>
                                            <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero.
                                                Consectetur ut vestibulum vivamus vestibulum accumsa.</p>
                                        </div>
                                    </div><!-- Service 2 end -->
                                </div><!-- Tab pane 2 end -->

                                <div class="tab-pane animated fadeInLeft" id="tab_c">
                                    <img class="pull-left" src="{{ asset('website') }}/images/intro/intro2.jpg" alt="" />
                                    <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur
                                        ut vestibulum vivamus vestibulum accumsa.Aenean et dolor pretium, feugiat leom
                                        nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus vestibulum
                                        accumsa.Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero.
                                        Consectetur ut vestibulum vivamus vestibulum accumsa.Aenean et dolor pretium,
                                        feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus.
                                    </p>
                                </div><!-- Tab pane 3 end -->
                            </div><!-- tab content -->
                        </div><!-- Featured tab end -->

                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </section><!-- Feature are end -->

        <section id="facts" class="facts-area bg-overlay no-padding">
            <div class="container">
                <div class="row">
                    <div class="facts-wrapper">
                        <div class="col-sm-3 ts-facts">
                            <div class="ts-facts-img">
                                <img src="{{ asset('website') }}/images/icon-image/fact1.png" alt="" />
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp">1789</span></h2>
                                <h3 class="ts-facts-title">Project Handover</h3>
                            </div>
                        </div><!-- Col end -->

                        <div class="col-sm-3 ts-facts">
                            <div class="ts-facts-img">
                                <img src="{{ asset('website') }}/images/icon-image/fact2.png" alt="" />
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp">1247</span></h2>
                                <h3 class="ts-facts-title">Full-time Salaried</h3>
                            </div>
                        </div><!-- Col end -->

                        <div class="col-sm-3 ts-facts">
                            <div class="ts-facts-img">
                                <img src="{{ asset('website') }}/images/icon-image/fact3.png" alt="" />
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp">5000</span></h2>
                                <h3 class="ts-facts-title">Million Revenue</h3>
                            </div>
                        </div><!-- Col end -->

                        <div class="col-sm-3 ts-facts">
                            <div class="ts-facts-img">
                                <img src="{{ asset('website') }}/images/icon-image/fact4.png" alt="" />
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp">44</span></h2>
                                <h3 class="ts-facts-title">Countries Experience</h3>
                            </div>
                        </div><!-- Col end -->

                    </div> <!-- Facts end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </section><!-- Facts end -->

        <section id="ts-service-area" class="ts-service-area">
            <div class="container">
                <div class="row text-center">
                    <h2 class="border-title">What We Do</h2>
                    <p class="border-sub-title">
                        Collaboratively administrate empowered markets via plug-and-play networks.
                    </p>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="ts-service-box">
                            <div class="ts-service-box-img pull-left">
                                <img src="{{ asset('website') }}/images/icon-image/service-icon1.png" alt="" />
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Pre-Construction</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 1 end -->

                        <div class="ts-service-box">
                            <div class="ts-service-box-img pull-left">
                                <img src="{{ asset('website') }}/images/icon-image/service-icon2.png" alt="" />
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">General Contracting</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 2 end -->

                        <div class="ts-service-box">
                            <div class="ts-service-box-img pull-left">
                                <img src="{{ asset('website') }}/images/icon-image/service-icon3.png" alt="" />
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Construction Management</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 3 end -->

                    </div><!-- Col end -->

                    <div class="col-md-4 text-center">
                        <img class="service-center-img img-responsive" src="{{ asset('website') }}/images/services/service-center.png"
                            alt="" />
                    </div><!-- Col end -->

                    <div class="col-md-4">
                        <div class="ts-service-box">
                            <div class="ts-service-box-img pull-left">
                                <img src="{{ asset('website') }}/images/icon-image/service-icon4.png" alt="" />
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Design and Build</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 4 end -->

                        <div class="ts-service-box">
                            <div class="ts-service-box-img pull-left">
                                <img src="{{ asset('website') }}/images/icon-image/service-icon5.png" alt="" />
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Self-Perform Construction</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 5 end -->

                        <div class="ts-service-box">
                            <div class="ts-service-box-img pull-left">
                                <img src="{{ asset('website') }}/images/icon-image/service-icon6.png" alt="" />
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Health &amp; Safety Management</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 6 end -->
                    </div><!-- Col end -->
                </div><!-- Content row end -->

            </div>
            <!--/ Container end -->
        </section><!-- Service end -->

        <section id="project-area" class="project-area">
            <div class="container">
                <div class="row">
                    <h2 class="title">Our Projects</h2>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <div class="isotope-nav" data-isotope-nav="isotope">
                        <ul>
                            <li><a href="#" class="active" data-filter="*">Show All</a></li>
                            <li><a href="#" data-filter=".commercial">Commercial</a></li>
                            <li><a href="#" data-filter=".interiors">Interiors</a></li>
                            <li><a href="#" data-filter=".education">Education</a></li>
                            <li><a href="#" data-filter=".government">Government</a></li>
                            <li><a href="#" data-filter=".infrastructure">Infrastructure</a></li>
                            <li><a href="#" data-filter=".residential">Residential</a></li>
                            <li><a href="#" data-filter=".healthcare">Healthcare</a></li>
                        </ul>
                    </div><!-- Isotope filter end -->
                </div><!-- Filter row end -->
            </div>
            <!--/ Container end -->

            <div id="isotope" class="isotope">
                <div class="col-md-3 col-sm-6 col-xs-12 commercial isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="{{ asset('website') }}/images/projects/project1.jpg">
                            <img class="img-responsive" src="{{ asset('website') }}/images/projects/project1.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="project-item-info">
                            <div class="project-item-info-content">
                                <h3 class="project-item-title">
                                    <a href="projects-single1.html">Capital Teltway Building</a>
                                </h3>
                                <p class="project-cat">Commercial, Interiors</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Isotope item 1 end -->

                <div class="col-md-3 col-sm-6 col-xs-12 healthcare isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="{{ asset('website') }}/images/projects/project2.jpg">
                            <img class="img-responsive" src="{{ asset('website') }}/images/projects/project2.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="project-item-info">
                            <div class="project-item-info-content">
                                <h3 class="project-item-title">
                                    <a href="projects-single2.html">Ghum Touch Hospital</a>
                                </h3>
                                <p class="project-cat">Healthcare</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Isotope item 2 end -->

                <div class="col-md-3 col-sm-6 col-xs-12 government isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="{{ asset('website') }}/images/projects/project3.jpg">
                            <img class="img-responsive" src="{{ asset('website') }}/images/projects/project3.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="project-item-info">
                            <div class="project-item-info-content">
                                <h3 class="project-item-title">
                                    <a href="projects-single1.html">TNT East Facility</a>
                                </h3>
                                <p class="project-cat">Government</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Isotope item 3 end -->

                <div class="col-md-3 col-sm-6 col-xs-12 infrastructure isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="{{ asset('website') }}/images/projects/project4.jpg">
                            <img class="img-responsive" src="{{ asset('website') }}/images/projects/project4.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="project-item-info">
                            <div class="project-item-info-content">
                                <h3 class="project-item-title">
                                    <a href="projects-single2.html">Narriot Headquarters</a>
                                </h3>
                                <p class="project-cat">Infrastructure</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Isotope item 4 end -->

                <div class="col-md-3 col-sm-6 col-xs-12 infrastructure isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="{{ asset('website') }}/images/projects/project5.jpg">
                            <img class="img-responsive" src="{{ asset('website') }}/images/projects/project5.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="project-item-info">
                            <div class="project-item-info-content">
                                <h3 class="project-item-title">
                                    <a href="projects-single1.html">Kalas Metrorail</a>
                                </h3>
                                <p class="project-cat">Infrastructure</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Isotope item 5 end -->

                <div class="col-md-3 col-sm-6 col-xs-12 residential isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="{{ asset('website') }}/images/projects/project6.jpg">
                            <img class="img-responsive" src="{{ asset('website') }}/images/projects/project6.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="project-item-info">
                            <div class="project-item-info-content">
                                <h3 class="project-item-title">
                                    <a href="projects-single2.html">Ancraft Avenue House</a>
                                </h3>
                                <p class="project-cat">Residential</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Isotope item 6 end -->

                <div class="col-md-3 col-sm-6 col-xs-12 commercial isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="{{ asset('website') }}/images/projects/project7.jpg">
                            <img class="img-responsive" src="{{ asset('website') }}/images/projects/project7.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="project-item-info">
                            <div class="project-item-info-content">
                                <h3 class="project-item-title">
                                    <a href="projects-single1.html">Chornobyl Shelter</a>
                                </h3>
                                <p class="project-cat">Commercial</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Isotope item 7 end -->

                <div class="col-md-3 col-sm-6 col-xs-12 education isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="{{ asset('website') }}/images/projects/project8.jpg">
                            <img class="img-responsive" src="{{ asset('website') }}/images/projects/project8.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                        <div class="project-item-info">
                            <div class="project-item-info-content">
                                <h3 class="project-item-title">
                                    <a href="projects-single2.html">Saflock University</a>
                                </h3>
                                <p class="project-cat">Education</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Isotope item 8 end -->
            </div><!-- Isotope end -->

            <div class="general-btn text-center">
                <a class="btn btn-primary" href="projects.html">View All Projects</a>
            </div>

        </section><!-- Project area end -->

        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="border-title border-left">Why Work With Us?</h3>

                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">27 Years
                                            of Experience</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <img class="pull-left" src="{{ asset('website') }}/images/services/service1.jpg" alt="" />
                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                                            nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor</p>
                                    </div>
                                </div>
                            </div>
                            <!--/ Panel 1 end-->

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion"
                                            href="#collapseTwo"> Dedicated Consulting</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <img class="pull-right" src="{{ asset('website') }}/images/services/service2.jpg" alt="" />
                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                                            nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor</p>
                                    </div>
                                </div>
                            </div>
                            <!--/ Panel 2 end-->

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion"
                                            href="#collapseThree"> ISO 9001 Certified</a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <img class="pull-left" src="{{ asset('website') }}/images/services/service3.jpg" alt="" />
                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                                            nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor</p>
                                    </div>
                                </div>
                            </div>
                            <!--/ Panel 3 end-->

                        </div>
                        <!--/ Accordion end -->
                    </div><!-- Col end -->

                    <div class="col-md-6">

                        <h3 class="border-title border-left">Happy Clients</h3>

                        <div class="row all-clients">
                            <div class="col-sm-4">
                                <figure class="clients-logo">
                                    <a href="#"><img class="img-responsive" src="{{ asset('website') }}/images/clients/client1.png"
                                            alt="" /></a>
                                </figure>
                            </div><!-- Client 1 end -->

                            <div class="col-sm-4">
                                <figure class="clients-logo">
                                    <a href="#"><img class="img-responsive" src="{{ asset('website') }}/images/clients/client2.png"
                                            alt="" /></a>
                                </figure>
                            </div><!-- Client 2 end -->

                            <div class="col-sm-4">
                                <figure class="clients-logo">
                                    <a href="#"><img class="img-responsive" src="{{ asset('website') }}/images/clients/client3.png"
                                            alt="" /></a>
                                </figure>
                            </div><!-- Client 3 end -->

                            <div class="col-sm-4">
                                <figure class="clients-logo">
                                    <a href="#"><img class="img-responsive" src="{{ asset('website') }}/images/clients/client4.png"
                                            alt="" /></a>
                                </figure>
                            </div><!-- Client 4 end -->

                            <div class="col-sm-4">
                                <figure class="clients-logo">
                                    <a href="#"><img class="img-responsive" src="{{ asset('website') }}/images/clients/client5.png"
                                            alt="" /></a>
                                </figure>
                            </div><!-- Client 5 end -->

                            <div class="col-sm-4">
                                <figure class="clients-logo">
                                    <a href="#"><img class="img-responsive" src="{{ asset('website') }}/images/clients/client6.png"
                                            alt="" /></a>
                                </figure>
                            </div><!-- Client 6 end -->

                        </div><!-- Clients row end -->

                    </div><!-- Col end -->

                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </section><!-- Content end -->


        <section id="testimonial-area" class="testimonial-area bg-overlay">
            <div class="container">
                <div class="row text-center">
                    <h2 class="border-title">What People Said</h2>
                    <p class="border-sub-title">
                        Collaboratively administrate empowered markets via plug-and-play networks.
                    </p>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <div id="testimonial-slide" class="owl-carousel owl-theme testimonial-slide">
                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci
                                    done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitoa tion ullamco laboris nisi ut aliquip commodo.
                                </span>

                                <div class="quote-item-footer">
                                    <img class="testimonial-thumb" src="{{ asset('website') }}/images/clients/testimonial1.png"
                                        alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Gabriel Denis</h3>
                                        <span class="quote-subtext">Chairman, OKT</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 1 end -->

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci
                                    done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitoa tion ullamco laboris nisi aliquip consequat.
                                </span>

                                <div class="quote-item-footer">
                                    <img class="testimonial-thumb" src="{{ asset('website') }}/images/clients/testimonial2.png"
                                        alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Weldon Cash</h3>
                                        <span class="quote-subtext">CFO, First Choice</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 2 end -->

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci
                                    done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitoa tion ullamco laboris nisi ut commodo consequat.
                                </span>

                                <div class="quote-item-footer">
                                    <img class="testimonial-thumb" src="{{ asset('website') }}/images/clients/testimonial3.png"
                                        alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Minter Puchan</h3>
                                        <span class="quote-subtext">Director, AKT</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 3 end -->

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci
                                    done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </span>

                                <div class="quote-item-footer">
                                    <img class="testimonial-thumb" src="{{ asset('website') }}/images/clients/testimonial4.png"
                                        alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Tian Gray</h3>
                                        <span class="quote-subtext">Accountant</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 4 end -->

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci
                                    done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </span>

                                <div class="quote-item-footer">
                                    <img class="testimonial-thumb" src="{{ asset('website') }}/images/clients/testimonial5.png"
                                        alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Jeroge Tinker</h3>
                                        <span class="quote-subtext">Official</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 5 end -->

                    </div>
                    <!--/ Testimonial carousel end-->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </section>
        <!--/ Testimonial end -->

        <section class="subscribe no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="subscribe-call-to-acton">
                            <h3>Can We Help?</h3>
                            <h4>+44 (0) 3792 722 972</h4>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="ts-newsletter">
                            <div class="newsletter-introtext">
                                <h4>Newsletter Sign-up</h4>
                                <p>Latest updates and news</p>
                            </div>

                            <div class="newsletter-form">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" id="newsletter-form-email"
                                            class="form-control form-control-lg" placeholder="Your Email Here"
                                            autocomplete="off">
                                        <button class="btn btn-primary">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- Newsletter end -->
                    </div><!-- Col end -->

                </div><!-- Content row end -->
            </div>
            <!--/ Container end -->
        </section>
        <!--/ News end -->

        <section id="news" class="news">
            <div class="container">
                <div class="row text-center">
                    <h2 class="border-title">Company News</h2>
                    <p class="border-sub-title">
                        Collaboratively administrate empowered markets via plug-and-play networks.
                    </p>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="latest-post">
                            <div class="latest-post-media">
                                <a href="#" class="latest-post-img image-angle">
                                    <img class="img-responsive" src="{{ asset('website') }}/images/news/news1.jpg" alt="img">
                                </a>
                            </div>
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="#">We Just Completes $17.6 million Medical Clinic in Mid-Missouri</a>
                                </h4>
                                <div class="latest-post-meta">
                                    <span class="post-item-date">
                                        <i class="fa fa-calendar"></i> May 29, 2016
                                    </span>
                                    <span class="post-item-author">
                                        <i class="fa fa-user"></i> Admin
                                    </span>
                                </div>
                            </div>
                        </div><!-- Latest post end -->
                    </div><!-- 1st post col end -->

                    <div class="col-md-4 col-xs-12">
                        <div class="latest-post">
                            <div class="latest-post-media">
                                <a href="#" class="latest-post-img image-angle">
                                    <img class="img-responsive" src="{{ asset('website') }}/images/news/news2.jpg" alt="img">
                                </a>
                            </div>
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="#">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
                                </h4>
                                <div class="latest-post-meta">
                                    <span class="post-item-date">
                                        <i class="fa fa-calendar"></i> June 17, 2016
                                    </span>
                                    <span class="post-item-author">
                                        <i class="fa fa-user"></i> Admin
                                    </span>
                                </div>
                            </div>
                        </div><!-- Latest post end -->
                    </div><!-- 2nd post col end -->

                    <div class="col-md-4 col-xs-12">
                        <div class="latest-post">
                            <div class="latest-post-media">
                                <a href="#" class="latest-post-img image-angle">
                                    <img class="img-responsive" src="{{ asset('website') }}/images/news/news3.jpg" alt="img">
                                </a>
                            </div>
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="#">Silicon Bench and Cornike Begin Construction of Large-Scale Solar
                                        Facilities for Trade</a>
                                </h4>
                                <div class="latest-post-meta">
                                    <span class="post-item-date">
                                        <i class="fa fa-calendar"></i> June 28, 2016
                                    </span>
                                    <span class="post-item-author">
                                        <i class="fa fa-user"></i> Admin
                                    </span>
                                </div>
                            </div>
                        </div><!-- Latest post end -->
                    </div><!-- 3rd post col end -->
                </div>
                <!--/ Content row end -->

                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="#">See All Posts</a>
                </div>

            </div>
            <!--/ Container end -->
        </section>
        <!--/ News end -->

        <footer id="footer" class="footer bg-overlay">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="action-box">
                                <span class="action-box-icon">
                                    <i class="fa fa-map-marker"></i>
                                </span>
                                <div class="action-box-content">
                                    <h3>Where We Are</h3>
                                    <p class="action-box-text">CorNike Incorporate, 1450 Boone Crockett Lane, USA</p>
                                    <p><a href="#"><i class="fa fa-caret-right"> </i> Find More</a></p>
                                </div>
                            </div><!-- Action box 1 end -->
                        </div><!-- Col end -->

                        <div class="col-md-4">
                            <div class="action-box">
                                <span class="action-box-icon">
                                    <i class="fa fa-wrench"></i>
                                </span>
                                <div class="action-box-content">
                                    <h3>Subcontractors</h3>
                                    <p class="action-box-text">Get qualified today and work with us globally</p>
                                    <p><a href="#"><i class="fa fa-caret-right"> </i> Learn More</a></p>
                                </div>
                            </div><!-- Action box 2 end -->
                        </div><!-- Col end -->

                        <div class="col-md-4">
                            <div class="action-box">
                                <span class="action-box-icon">
                                    <i class="fa fa-comments"></i>
                                </span>
                                <div class="action-box-content">
                                    <h3>Contact Us</h3>
                                    <p class="action-box-text">Mail us: info@cornike.com <br /> Call us: +253-480-8973
                                    </p>
                                    <p><a href="#"><i class="fa fa-caret-right"> </i> Learn More</a></p>
                                </div>
                            </div><!-- Action box 3 end -->
                        </div><!-- Col end -->

                    </div><!-- Content row end -->
                </div>
                <!--/ Container end -->
            </div><!-- Footer top end -->

            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 footer-widget footer-about">
                            <h3 class="widget-title">About Us</h3>
                            <img class="footer-logo" src="{{ asset('website') }}/images/footer-logo.png" alt="" />
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done
                                idunt ut labore et dolore magna aliqua.</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div><!-- Footer social end -->
                        </div><!-- Col end -->

                        <div class="col-md-3 col-sm-12 footer-widget">
                            <h3 class="widget-title">Working Hours</h3>
                            <div class="working-hours">
                                We work 7 days a week, every day excluding major holidays. Contact us if you have an
                                emergency, with our Hotline and Contact form.
                                <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
                                <br> Saturday: <span class="text-right">12:00 - 15:00</span>
                                <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
                            </div>
                        </div><!-- Col end -->

                        <div class="col-md-3 col-sm-12 footer-widget">
                            <h3 class="widget-title">Services</h3>
                            <ul class="list-arrow">
                                <li><a href="#">Pre-Construction</a></li>
                                <li><a href="#">General Contracting</a></li>
                                <li><a href="#">Construction Management</a></li>
                                <li><a href="#">Design and Build</a></li>
                                <li><a href="#">Self-Perform Construction</a></li>
                            </ul>
                        </div><!-- Col end -->

                        <div class="col-md-3 col-sm-12 footer-widget">
                            <h3 class="widget-title">Instagram Widget</h3>
                            <div class="instagram-widget">
                                <a href="#"><img class="img-responsive" src="{{ asset('website') }}/images/gallery/gallery1.jpg" alt="" /></a>
                                <a href="#"><img class="img-responsive" src="{{ asset('website') }}/images/gallery/gallery2.jpg" alt="" /></a>
                                <a href="#"><img class="img-responsive" src="{{ asset('website') }}/images/gallery/gallery3.jpg" alt="" /></a>
                                <a href="#"><img class="img-responsive" src="{{ asset('website') }}/images/gallery/gallery4.jpg" alt="" /></a>
                                <a href="#"><img class="img-responsive" src="{{ asset('website') }}/images/gallery/gallery5.jpg" alt="" /></a>
                                <a href="#"><img class="img-responsive" src="{{ asset('website') }}/images/gallery/gallery6.jpg" alt="" /></a>
                            </div>
                        </div><!-- Col end -->

                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Footer main end -->

            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="copyright-info">
                                <span>Copyright © 2016 Cornike. All Rights Reserved.</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div class="footer-menu">
                                <ul class="nav unstyled">
                                    <li><a href="#">Investors</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Case Studies</a></li>
                                    <li><a href="#">Videos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- Row end -->

                    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
                        <button class="btn btn-primary" title="Back to Top">
                            <i class="fa fa-angle-double-up"></i>
                        </button>
                    </div>

                </div><!-- Container end -->
            </div><!-- Copyright end -->

        </footer><!-- Footer end -->


        <!-- Javascript Files
	================================================== -->

        <!-- initialize jQuery Library -->
        <script type="text/javascript" src="{{ asset('website') }}/js/jquery.js"></script>
        <!-- Bootstrap jQuery -->
        <script type="text/javascript" src="{{ asset('website') }}/js/bootstrap.min.js"></script>
        <!-- Owl Carousel -->
        <script type="text/javascript" src="{{ asset('website') }}/js/owl.carousel.min.js"></script>
        <!-- Counter -->
        <script type="text/javascript" src="{{ asset('website') }}/js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script type="text/javascript" src="{{ asset('website') }}/js/waypoints.min.js"></script>
        <!-- Color box -->
        <script type="text/javascript" src="{{ asset('website') }}/js/jquery.colorbox.js"></script>
        <!-- Isotope -->
        <script type="text/javascript" src="{{ asset('website') }}/js/isotope.js"></script>
        <script type="text/javascript" src="{{ asset('website') }}/js/ini.isotope.js"></script>

        <!-- Template custom -->
        <script type="text/javascript" src="{{ asset('website') }}/js/custom.js"></script>

    </div><!-- Body inner end -->
</body>

<!-- Mirrored from demo.themewinter.com/html/cornike/construction/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 11:21:47 GMT -->

</html>
