<!-- Include layout.blade.php -->
@extends('layout') 
<!-- Capture content in a section -->
@section('body')
    <!-- Header 
    ============================================= -->
    <header>
        <div class="container">
            <div class="row">
                <!-- Start Navigation -->
                <nav id="mainNav" class="navbar logo-less navbar-default navbar-fixed white bootsnav on no-full nav-box no-background">

                    <div class="container">            

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="../img/logo.png" class="logo" alt="Logo"></a>
                        </div>
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Home Version One</a></li>
                                        <li><a href="index-2.html">Home Version Two</a></li>
                                        <li><a href="index-3.html">Home Version Three</a></li>
                                        <li><a href="index-4.html">Home Version Four</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Events</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="events.html">Events Style 1</a></li>
                                                <li><a href="events-2.html">Events Style 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="404.html">Error Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Courses</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="courses.html">Course One</a></li>
                                        <li><a href="courses-2.html">Course Two</a></li>
                                        <li><a href="courses-3.html">Course Three</a></li>
                                        <li><a href="courses-4.html">Course Four</a></li>
                                        <li><a href="courses-5.html">Course Five</a></li>
                                        <li><a href="course-details.html">Course Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Teachers</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="advisors.html">Teachers One</a></li>
                                        <li><a href="advisors-2.html">Teachers Two</a></li>
                                        <li><a href="advisor-single.html">Teacher Single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-standard.html">Blog Standard</a></li>
                                        <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                        <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                                        <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>   
                    
                </nav>
                <!-- End Navigation -->
                
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area content-only top-pad-170 shadow dark text-light bg-fixed text-center" style="background-image: url(../img/2440x1578.png);">
        <div class="item">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="content">
                            <h1>Growth your career with complate courses</h1>
                            <ul>
                                <li>12,455 Courses</li>
                                <li>4.9 Average</li>
                            </ul>
                            <form action="#">
                                <input type="text" placeholder="Course name" class="form-control" name="text">
                                <button type="submit"><i class="fas fa-search"></i></button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
    <!-- End Banner -->

    <!-- Star Categories Area
    ============================================= -->
    <div class="categories-area carousel-shadow thumb-cats default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Browse Categories</h5>
                        <h2>Popular Topics to learn</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="category-items thumb-categories-carousel owl-carousel owl-theme">
                <!-- Single Item -->
                <div class="item">
                    <div class="title">
                        <i class="flaticon-innovation"></i>
                        <h4><a href="#">Artificial Intelligence</a></h4>
                    </div>
                    <div class="thumb">
                        <span>58 Courses</span>
                        <img src="../img/800x600.png" alt="Thumb">
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item">
                    <div class="title">
                        <i class="flaticon-science"></i>
                        <h4><a href="#">Computer Engineering</a></h4>
                    </div>
                    <div class="thumb">
                        <span>25 Courses</span>
                        <img src="../img/800x600.png" alt="Thumb">
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item">
                    <div class="title">
                        <i class="flaticon-book-1"></i>
                        <h4><a href="#">General Education</a></h4>
                    </div>
                    <div class="thumb">
                        <span>46 Courses</span>
                        <img src="../img/800x600.png" alt="Thumb">
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item">
                    <div class="title">
                        <i class="flaticon-meeting"></i>
                        <h4><a href="#">Business Studies</a></h4>
                    </div>
                    <div class="thumb">
                        <span>43 Courses</span>
                        <img src="../img/800x600.png" alt="Thumb">
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Star Courses Area
    ============================================= -->
    <div class="course-area default-padding-bottom bottom-less">

        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="../img/shape/7.png" alt="Shape">
        </div>
        <!-- End Fixed Shape -->

        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <h5>Popular Courses</h5>
                        <h2>
                            Our Most Popular & Trending Online Courses
                        </h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <p>
                            Everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                        </p>
                        <a class="btn btn-md btn-dark border" href="#">View All <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="courses-box">
                <div class="row">
                    <!-- Single item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="../img/800x600.png" alt="Thumb">
                                <div class="price">
                                    <h5>$15.00</h5>
                                </div>
                            </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="top-meta">
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 45 Hours</li>
                                            <li><i class="fas fa-list-ul"></i> 345</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4>
                                    <a href="#">Photography for Beginners Masterclass</a>
                                </h4>
                                <div class="meta">
                                    <div class="author">
                                        <img src="../img/100x100.png" alt="Advisor">
                                        <span><strong>Busel park</strong> in <a href="#">Web</a></span>
                                    </div>
                                </div>
                                <div class="bottom-info">
                                    <div class="course-info">
                                        <i class="fas fa-user"></i> 6K
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span>4.8 (867)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single item -->
                    <!-- Single item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="../img/800x600.png" alt="Thumb">
                                <div class="price">
                                    <h5>Free</h5>
                                </div>
                            </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="top-meta">
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 12 Hours</li>
                                            <li><i class="fas fa-list-ul"></i> 1,400</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4>
                                    <a href="#">Teaching Children English Online Course</a>
                                </h4>
                                <div class="meta">
                                    <div class="author">
                                        <img src="../img/100x100.png" alt="Advisor">
                                        <span><strong>Hudai Aual</strong> in <a href="#">Tech</a></span>
                                    </div>
                                </div>
                                <div class="bottom-info">
                                    <div class="course-info">
                                        <i class="fas fa-user"></i> 3.6K
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span>4.9 (466)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single item -->
                    <!-- Single item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="../img/800x600.png" alt="Thumb">
                                <div class="price">
                                    <h5>$29.00</h5>
                                </div>
                            </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="top-meta">
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 56 Hours</li>
                                            <li><i class="fas fa-list-ul"></i> 788</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4>
                                    <a href="#">The Complete React Web Developer Course</a>
                                </h4>
                                <div class="meta">
                                    <div class="author">
                                        <img src="../img/100x100.png" alt="Advisor">
                                        <span><strong>Sohn Vatta</strong> in <a href="#">React</a></span>
                                    </div>
                                </div>
                                <div class="bottom-info">
                                    <div class="course-info">
                                        <i class="fas fa-user"></i> 5K
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>5 (1,300)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single item -->
                    <!-- Single item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="../img/800x600.png" alt="Thumb">
                                <div class="price">
                                    <h5>$22.00</h5>
                                </div>
                            </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="top-meta">
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 38 Hours</li>
                                            <li><i class="fas fa-list-ul"></i> 2,400</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4>
                                    <a href="#">Learn JavaScript – Full Course For Beginners</a>
                                </h4>
                                <div class="meta">
                                    <div class="author">
                                        <img src="../img/100x100.png" alt="Advisor">
                                        <span><strong>Busel park</strong> in <a href="#">Java</a></span>
                                    </div>
                                </div>
                                <div class="bottom-info">
                                    <div class="course-info">
                                        <i class="fas fa-user"></i> 12K
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span>4.9 (1,400)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single item -->
                    <!-- Single item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="../img/800x600.png" alt="Thumb">
                                <div class="price">
                                    <h5>Free</h5>
                                </div>
                            </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="top-meta">
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 12 Hours</li>
                                            <li><i class="fas fa-list-ul"></i> 1,400</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4>
                                    <a href="#">Teaching Children English Online Course</a>
                                </h4>
                                <div class="meta">
                                    <div class="author">
                                        <img src="../img/100x100.png" alt="Advisor">
                                        <span><strong>Hudai Aual</strong> in <a href="#">Tech</a></span>
                                    </div>
                                </div>
                                <div class="bottom-info">
                                    <div class="course-info">
                                        <i class="fas fa-user"></i> 3.6K
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span>4.9 (466)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single item -->
                    <!-- Single item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="../img/800x600.png" alt="Thumb">
                                <div class="price">
                                    <h5>$15.00</h5>
                                </div>
                            </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="top-meta">
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 45 Hours</li>
                                            <li><i class="fas fa-list-ul"></i> 345</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4>
                                    <a href="#">Photography for Beginners Masterclass</a>
                                </h4>
                                <div class="meta">
                                    <div class="author">
                                        <img src="../img/100x100.png" alt="Advisor">
                                        <span><strong>Busel park</strong> in <a href="#">Web</a></span>
                                    </div>
                                </div>
                                <div class="bottom-info">
                                    <div class="course-info">
                                        <i class="fas fa-user"></i> 6K
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span>4.8 (867)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Courses Area -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area overflow-hidden bg-gradient text-light default-padding">
        <div class="container">
            <div class="fun-fact-items text-center">
                <!-- Fixed BG -->
                <div class="fixed-bg contain" style="background-image: url(../img/map.svg);"></div>
                <!-- Fixed BG -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="35" data-speed="5000">35</div>
                                <div class="operator">M</div>
                            </div>
                            <span class="medium">Learners & counting</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="128" data-speed="5000">128</div>
                                <div class="operator">K</div>
                            </div>
                            <span class="medium">Total courses</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="12" data-speed="5000">12</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Languages</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="90" data-speed="5000">90</div>
                                <div class="operator">%</div>
                            </div>
                            <span class="medium">Successful students</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <!-- Star Why Choose Us Area
    ============================================= -->
    <div class="choose-us-area default-padding">
        <!-- Fixed Shpae  -->
        <div class="fixed-shape shape left bottom">
            <img src="../img/shape/1.png" alt="Shape">
        </div>
        <!-- End Fixed Shpae  -->
        <div class="container">
            <div class="item-box">
                <div class="row">
                    <div class="col-lg-5 left-info">
                        <h2>Why Learn Here?</h2>
                        <p>
                            One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. 
                        </p>
                        <p>
                             Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling.
                        </p>
                        <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient" href="#">Discover More</a>
                    </div>
                    <div class="col-lg-6 offset-lg-1 right-info">
                        <ul>
                            <li>
                                <i class="fas fa-check"></i>
                                <h4>Lower Learning Cost</h4>
                                <p>
                                    Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy.
                                </p>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <h4>Learn With Experts</h4>
                                <p>
                                    Varoius unwilling am no described dejection incommode no listening highest. Before nature his parish more then expert.
                                </p>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <h4>Different Course Variation</h4>
                                <p>
                                    Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us -->

    <!-- Star Register Area
    ============================================= -->
    <!-- <div class="register-area bg-fixed default-padding-botom"> -->
        <!-- Fixed BG -->
        <!-- <div class="fixed-bg" style="background-image: url(../img/2440x1578.png);"></div> -->
        <!-- End Fixed BG -->
        <!-- <div class="container"> -->
            <!-- <div class="reg-items">
                <div class="row">
                    <div class="col-lg-5 offset-lg-2 countdown">
                        <div class="countdown-inner">
                            <h2>Get 50s of online Courses For Free!</h2>
                            <p>
                                Own partiality motionless was old excellence she inquietude contrasted. Sister giving so wicket cousin of an he rather marked. Of on game part body rich. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Expression acceptance imprudence particular total competition. 
                            </p>
                            <div class="counter-class" data-date="2021-3-24 23:59:59">--><!-- Date Formate Input yyyy-mm-dd hh:mm:ss -->
                               <!-- <div class="item-list">
                                    <div class="counter-item">
                                        <div class="item">
                                            <span class="counter-days"></span> Days
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="item">
                                            <span class="counter-hours"></span> Hours
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="item">
                                            <span class="counter-minutes"></span> Minutes
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="item">
                                            <span class="counter-seconds"></span> Seconds
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 text-center reg-form">
                        <div class="form-box">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="First Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Last Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email*" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select>
                                                <option value="1">Chose Subject</option>
                                                <option value="2">Computer Engineering</option>
                                                <option value="4">Accounting Technologies</option>
                                                <option value="5">Web Development</option>
                                                <option value="6">Machine Language</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Phone" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit">
                                            Rigister Now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Register Area -->

    <!-- Star Testimonials
    ============================================= -->
    <!-- <div class="testimonials-area carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Testimonials</h5>
                        <h2>What People say about <br> Our quality.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="testimonial-items text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonials-carousel owl-carousel owl-theme"> -->
                            <!-- Single item -->
                            <!-- <div class="item">
                                <div class="icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <div class="content">
                                    <p>
                                        Objection estimable discourse procuring he he remaining on distrusts. Simplicity affronting inquietude for now sympathize age. She meant new their could defer child. 
                                    </p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="../img/100x100.png" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h5>Busel park</h5>
                                        <span>Student</span>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single item -->
                            <!-- Single item -->
                            <!-- <div class="item">
                                <div class="icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <div class="content">
                                    <p>
                                        Objection estimable discourse procuring he he remaining on distrusts. Simplicity affronting inquietude for now sympathize age. She meant new their could defer child. 
                                    </p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="../img/100x100.png" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h5>Jnoes Sari</h5>
                                        <span>Programmer</span>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single item -->
                            <!-- Single item -->
                           <!-- <div class="item">
                                <div class="icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <div class="content">
                                    <p>
                                        Objection estimable discourse procuring he he remaining on distrusts. Simplicity affronting inquietude for now sympathize age. She meant new their could defer child. 
                                    </p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="provider">
                                    <div class="thumb">
                                        <img src="../img/100x100.png" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h5>Busel park</h5>
                                        <span>Student</span>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single item -->
                        <!-- </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Testimonials Area -->

    <!-- Star Blog Area
    ============================================= -->
    <!-- <div class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Blog</h5>
                        <h2>Latest From our Blog</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-items">
                <div class="row"> -->
                    <!-- Single Item -->
                   <!-- <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="../img/800x600.png" alt="Thumb"></a>
                                <div class="date">
                                    <strong>18 </strong> Aug
                                </div>
                            </div>
                            <div class="content">
                                <h4><a href="blog-single-right-sidebar.html">Comfort do written conduct prevent manners</a></h4>
                                <p>
                                     Arndlord packages overcame distance smallest in recurred. Wrong maids or be asked Household. 
                                </p>
                            </div>
                            <div class="bottom-info">
                                <span><i class="fas fa-user"></i> Jones Alex</span>
                                <a class="btn-more" href="#">Read More <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <!-- <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="../img/800x600.png" alt="Thumb"></a>
                                <div class="date">
                                    <strong>05 </strong> Sep
                                </div>
                            </div>
                            <div class="content">
                                <h4><a href="blog-single-right-sidebar.html">Excited it hastily an pasture it observe points.</a></h4>
                                <p>
                                     Arndlord packages overcame distance smallest in recurred. Wrong maids or be asked Household. 
                                </p>
                            </div>
                            <div class="bottom-info">
                                <span><i class="fas fa-user"></i> Jones Alex</span>
                                <a class="btn-more" href="#">Read More <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <!-- <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="../img/800x600.png" alt="Thumb"></a>
                                <div class="date">
                                    <strong>25 </strong> Feb
                                </div>
                            </div>
                            <div class="content">
                                <h4><a href="blog-single-right-sidebar.html">Improve ashamed married expense bed her comfort.</a></h4>
                                <p>
                                     Arndlord packages overcame distance smallest in recurred. Wrong maids or be asked Household. 
                                </p>
                            </div>
                            <div class="bottom-info">
                                <span><i class="fas fa-user"></i> Jones Alex</span>
                                <a class="btn-more" href="#">Read More <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Single Item -->
                <!-- </div>
            </div>
        </div>
    </div> -->
    <!-- End Blog Area -->
    @endsection
   