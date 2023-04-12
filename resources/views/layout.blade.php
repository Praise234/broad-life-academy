@if(Request::path() === '/')
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <!-- ========== Meta Tags ========== -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="An Educational Platform for E-Learning">

            <!-- ========== Page Title ========== -->
            <title>BroadLife Academy - </title>

            <!-- ========== Favicon Icon ========== -->
            <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">

            <!-- ========== Start Stylesheet ========== -->
            <link href="../css/bootstrap.min.css" rel="stylesheet" />
            <link href="../css/font-awesome.min.css" rel="stylesheet" />
            <link href="../css/themify-icons.css" rel="stylesheet" />
            <link href="../css/flaticon-set.css" rel="stylesheet" />
            <link href="../css/elegant-icons.css" rel="stylesheet" />
            <link href="../css/magnific-popup.css" rel="stylesheet" />
            <link href="../css/owl.carousel.min.css" rel="stylesheet" />
            <link href="../css/owl.theme.default.min.css" rel="stylesheet" />
            <link href="../css/animate.css" rel="stylesheet" />
            <link href="../css/bootsnav.css" rel="stylesheet" />
            <link href="../css/style.css" rel="stylesheet">
            <link href="../css/responsive.css" rel="stylesheet" />
            <!-- ========== End Stylesheet ========== -->

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="../js/html5/html5shiv.min.js"></script>
            <script src="../js/html5/respond.min.js"></script>
            <![endif]-->

            

        </head>

    <body>

        <!-- Preloader Start -->
        <div class="se-pre-con"></div>
        <!-- Preloader Ends -->

        <!-- Start Header Top 
        ============================================= -->
        <div class="top-bar-area text-light transparent">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-4 left-info">
                        <ul class="list">
                            <li>
                                Have any question? +123 456 7890
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 logo text-center">
                        <a href="#"><img src="../img/logo-light.png" alt="Logo"></a>
                    </div>
                    <div class="col-lg-4 right-info">
                        <div class="item-flex">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="button">
                                <a href="/register">Register</a>
                                <a href="/login"><i class="fa fa-sign-in-alt"></i>Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->


        @yield('body')



        <!-- Star Footer
        ============================================= -->
        <footer class="bg-dark text-light">
            <div class="container">
                <div class="f-items default-padding">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 item">
                            <div class="f-item about">
                                <img src="../img/logo-light.png" alt="Logo">
                                <p>
                                    Required honoured trifling eat pleasure man relation. Assurance yet bed was improving furniture man. Distrusts delighted
                                </p>
                                <p class="text-italic">
                                    Please write your email and get our amazing updates, news and support*
                                </p>
                                <div class="subscribe">
                                    <form action="#">
                                        <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                        <button type="submit"><i class="fa fa-paper-plane"></i></button>  
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 item">
                            <div class="f-item link">
                                <h4 class="widget-title">Usefull Links</h4>
                                <ul>
                                    <li>
                                        <a href="#">Courses</a>
                                    </li>
                                    <li>
                                        <a href="#">Event</a>
                                    </li>
                                    <li>
                                        <a href="#">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="#">Faqs</a>
                                    </li>
                                    <li>
                                        <a href="#">Teachers</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 item">
                            <div class="f-item link">
                                <h4 class="widget-title">Support</h4>
                                <ul>
                                    <li>
                                        <a href="#">Documentation</a>
                                    </li>
                                    <li>
                                        <a href="#">Forums</a>
                                    </li>
                                    <li>
                                        <a href="#">Language Packs</a>
                                    </li>
                                    <li>
                                        <a href="#">Release Status</a>
                                    </li>
                                    <li>
                                        <a href="#">LearnPress</a>
                                    </li>
                                    <li>
                                        <a href="#">Feedback</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 item">
                            <div class="f-item contact">
                                <h4 class="widget-title">Contact Info</h4>
                                <div class="address">
                                    <ul>
                                        <li>
                                            <strong>Email:</strong> support@validtheme.com
                                        </li>
                                        <li>
                                            <strong>Contact:</strong> +44-20-7328-4499
                                        </li>
                                    </ul>
                                </div>
                                <div class="opening-info">
                                    <h5>Opening Hours</h5>
                                    <ul>
                                        <li> <span> Mon - Tues :  </span>
                                        <div class="float-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li> <span> Wednes - Thurs :</span>
                                        <div class="float-right"> 8.00 am - 6.00 pm </div>
                                        </li>
                                        <li> <span> Sun : </span>
                                        <div class="float-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>&copy; Copyright <?php echo date('Y'); ?></p>
                        </div>
                        <div class="col-lg-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </footer>
        <!-- End Footer-->

@elseif(Request::path() === 'register' || Request::path() === 'login')

    <!DOCTYPE html>
    <html lang="en">

        <head>
            <!-- ========== Meta Tags ========== -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="An Educational Platform for E-Learning">

            <!-- ========== Page Title ========== -->
            <title>BroadLife Academy - </title>

            <!-- ========== Favicon Icon ========== -->
            <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">

            <!-- ========== Start Stylesheet ========== -->
            <link href="../css/bootstrap.min.css" rel="stylesheet" />
            <link href="../css/font-awesome.min.css" rel="stylesheet" />
            <link href="../css/themify-icons.css" rel="stylesheet" />
            <link href="../css/flaticon-set.css" rel="stylesheet" />
            <link href="../css/elegant-icons.css" rel="stylesheet" />
            <link href="../css/magnific-popup.css" rel="stylesheet" />
            <link href="../css/owl.carousel.min.css" rel="stylesheet" />
            <link href="../css/owl.theme.default.min.css" rel="stylesheet" />
            <link href="../css/animate.css" rel="stylesheet" />
            <link href="../css/bootsnav.css" rel="stylesheet" />
            <link href="../css/style.css" rel="stylesheet">
            <link href="../css/responsive.css" rel="stylesheet" />
            <!-- ========== End Stylesheet ========== -->

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="../js/html5/html5shiv.min.js"></script>
            <script src="../js/html5/respond.min.js"></script>
            <![endif]-->

            

        </head>


    <body class="bg-gradient">
        @yield('body')

@endif


    <!-- jQuery Frameworks
    ============================================= -->
    <script src="../js/jquery-1.12.4.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.appear.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/modernizr.custom.13711.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/progress-bar.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/imagesloaded.pkgd.min.js"></script>
    <script src="../js/count-to.js"></script>
    <script src="../js/YTPlayer.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/loopcounter.js"></script>
    <script src="../js/bootsnav.js"></script>
    <script src="../js/main.js"></script>

</body>
</html>