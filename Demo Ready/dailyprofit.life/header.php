<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <title>Daily Profit.Life</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="web_assets/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="web_assets/css/responsive.css">
    <!--Color Switcher Mockup-->
    <link rel="stylesheet" href="web_assets/css/color-switcher-design.css">
    <!--Color Themes-->
    <link rel="stylesheet" href="web_assets/css/color-themes/default-theme.css" id="theme-color-file">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="web_assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="web_assets/images/favicon/logo.png" sizes="32x32">
    <link rel="icon" type="image/png" href="web_assets/images/favicon/logo1.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
<style>
    html{
        scroll-behavior:smooth;
    }
</style>
</head>

<body>
    <div class="boxed_wrapper">

        <!-- <div class="preloader"></div> -->

        <!--Start Top bar area -->
        <!-- <section class="top-bar-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="flex-box-three">
                            <div class="state-box clearfix">
                                <div class="state-select-box float-left">
                                    <select class="selectmenu area_select clearfix">
                                        <option value="1">Newyork</option>
                                        <option value="2">Canada</option>
                                    </select>
                                    <div class="icon-holder">
                                        <span class="flaticon-globe"></span>
                                    </div>
                                </div>
                                <div class="state-content float-right">
                                    <div class="state" id="value1">
                                        <ul class="clearfix">
                                            <li>
                                                <div class="icon-box">
                                                    <span class="flaticon-technology"></span>
                                                </div>
                                                <div class="text-box">
                                                    <p>+123-456-7890 & 23</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-box">
                                                    <span class="flaticon-note"></span>
                                                </div>
                                                <div class="text-box">
                                                    <p>Mailus@inFocus.com</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="top-right clearfix">
                                <div class="social-links-box float-left">
                                    <p>Stay Connected:</p>
                                    <ul class="sociallinks-style-one">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="language-switcher float-right">
                                    <div id="polyglotLanguageSwitcher">
                                        <form action="#">
                                            <select id="polyglot-language-options">
                                                <option id="en" value="en" selected>English</option>
                                                <option id="fr" value="fr">French</option>
                                                <option id="de" value="de">German</option>
                                                <option id="it" value="it">Italian</option>
                                                <option id="es" value="es">Spanish</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--End Top bar area -->

        <!--Start header area-->
        <header class="header-area" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="header-content">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="#home">
                                        <img src="web_assets/images/resources/logo.png" alt="Awesome Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="header-right clearfix">
                                <nav class="main-menu float-left">
                                    <div class="navbar-header clearfix">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li class="current"><a href="#home">Home</a></li>
                                            <li class="dropdown"><a href="#about">About</a>
                                                <!-- <ul>
                                                    <li><a href="about.html">About Company</a></li>
                                                    <li><a href="team.html">Meet Our Team</a></li>
                                                    <li><a href="project.html">Our Projects</a></li>
                                                    <li><a href="project-single.html">Project Single</a></li>
                                                    <li><a href="faq.html">FAQ’s</a></li>
                                                    <li><a href="testimonials.html">Testimonials</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                </ul> -->
                                            </li>
                                            <li class="dropdown"><a href="#features">Features </a>
                                                <!-- <ul>
                                                    <li><a href="services.html">View All Services</a></li>
                                                    <li><a href="service-single.html">Service Single</a></li>
                                                </ul> -->
                                            </li>
                                            <li class="dropdown"><a href="#services">Services </a>
                                                <!-- <ul>
                                                    <li><a href="blog.html">Blog Default</a></li>
                                                    <li><a href="blog-large.html">Blog Large</a></li>
                                                    <li><a href="blog-single.html">Blog Single Post</a></li>
                                                </ul> -->
                                            </li>
                                            <li class="dropdown"><a href="#testimonials">Testimonials 
</a>
                                             
                                            </li>
                                            <li class="dropdown"><a href="#">Login
</a>
                                             
                                            </li>
                                            <li class="dropdown"><a href="#">Register 
</a>
                                             
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </nav>
                                <!--Start mainmenu right box-->
                                <!-- <div class="mainmenu-right-box float-left">
                                     <div class="outer-search-box">
                                        <div class="seach-toggle"><i class="fa fa-search"></i></div>
                                        <ul class="search-box">
                                            <li>
                                                <form method="post"
                                                    action="https://st.ourhtmldemo.com/new/myconsult/index.html">
                                                    <div class="form-group">
                                                        <input type="search" name="search" placeholder="Search Here"
                                                            required>
                                                        <button type="submit"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                    </div> -->
                               
                                <!--End mainmenu right box-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!---Start sticky header-->
            <div class="sticky-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="left-colum pull-left">
                                <div class="logo">
                                    <a href="index-2.html">
                                        <img src="web_assets/images/resources/logo.png" alt="Awesome Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="right-colum pull-right">
                                <nav class="main-menu float-left">
                                    <div class="navbar-header clearfix">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li class="current"><a href="#home">Home</a></li>
                                            <li class="dropdown"><a href="#about">About</a>
                                                <!-- <ul>
                                                    <li><a href="about.html">About Company</a></li>
                                                    <li><a href="team.html">Meet Our Team</a></li>
                                                    <li><a href="project.html">Our Projects</a></li>
                                                    <li><a href="project-single.html">Project Single</a></li>
                                                    <li><a href="faq.html">FAQ’s</a></li>
                                                    <li><a href="testimonials.html">Testimonials</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                </ul> -->
                                            </li>
                                            <li class="dropdown"><a href="#features">Features</a>
                                                <!-- <ul>
                                                    <li><a href="services.html">View All Services</a></li>
                                                    <li><a href="service-single.html">Service Single</a></li>
                                                </ul> -->
                                            </li>
                                            <li class="dropdown"><a href="#services">services</a>
                                                <!-- <ul>
                                                    <li><a href="blog.html">Blog Default</a></li>
                                                    <li><a href="blog-large.html">Blog Large</a></li>
                                                    <li><a href="blog-single.html">Blog Single Post</a></li>
                                                </ul> -->
                                            </li>
                                            <li class="dropdown"><a href="#testimonials">Testimonials 
                                                </a> </li>                                            
                                                <li class="dropdown"><a href="#">Login
                                                </a> </li> 
                                                <li class="dropdown"><a href="#">Register
                                                </a> </li> 
                                            <!-- <li><a href="contact.html">Contact</a></li> -->
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---End sticky header-->
        </header>
        <!--End header area-->