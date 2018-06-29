<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8">
	<title>.:: NARAHARI ::.</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/style.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/resources/favicon.png">
    <link rel="icon" type="image/png" href="images/resources/favicon.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/resources/favicon.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    
</head>
<body>
<div class="boxed_wrapper">

<!--Start Preloader -->
<!--div class="preloader"></div-->
<!--End Preloader --> 

<!--Start header area-->

<!--Start top bar area-->
<!--div class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <div class="top-left">
                    <ul class="top-contact-info">
                        <li><span class="flaticon-technology"></span>Phone: (123) 0200 12345</li>    
                        <li><span class="flaticon-note"></span>Mailus@Consultant.com</li>     
                    </ul>   
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <div class="top-right clearfix">
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <div class="language-switcher">
                        <div id="polyglotLanguageSwitcher">
                            <form action='#' method='post'><input type='hidden' name='form-name' value='form 1' />
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
</div-->
<!--End top bar area-->  

<!--Start mainmenu area-->
<div class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 clearfix">
                <!--Start logo-->
                <div class="logo pull-left">
                    <a href="<?php echo base_url(); ?>">
                        <img src="<?php echo base_url(); ?>assets/frontend/images/resources/naraharilogo.png" alt="Awesome Logo">
                    </a>
                </div>
                <!--End logo-->
                <!--Start mainmenu-->
                <nav class="main-menu pull-left">
                    <div class="navbar-header">   	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li <?php echo ($this->uri->segment(1) == '' ? 'class="current"' : ''); ?>><a href="<?php echo base_url(); ?>">Home</a>
                            	<!--ul>
                                    <li><a href="index-3.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-4.html">Home3</a></li>
                                </ul-->
                            </li>
                            <li <?php echo ($this->uri->segment(2) == 'about' ? 'class="current"' : ''); ?> ><a href="<?php echo base_url(); ?>Front/about">ABOUT US</a>
                                <!--ul>
                                    <li><a href="about.html">About Company</a></li>
                                    <li><a href="testimonials.html">Success Stories</a></li>
                                    <li><a href="project.html">Gallery</a></li>
                                    <li><a href="project-single.html">Gallery Single</a></li>
                                    <li><a href="faq.html">FAQ’s</a></li>
                                </ul-->
                            </li>
                            <!--li class="dropdown"><a href="services.html">Services</a>
                                <ul>
                                    <li><a href="services.html">View All Services</a></li>
                                    <li><a href="service-single.html">Service Single</a></li>
                                </ul>
                            </li-->
                            <!--li class="dropdown"><a href="events.html">Events</a>
                                <ul>
                                    <li><a href="events.html">Events</a></li>
                                    <li><a href="event-single.html">Events Single</a></li>
                                </ul>
                            </li-->
                            <!--li class="dropdown"><a href="blog-default.html">Blog</a>
                                <ul>
                                    <li><a href="blog-default.html">Blog Default</a></li>
                                    <li><a href="blog-large.html">Blog Large</a></li>
                                    <li><a href="blog-single.html">Blog Single Post</a></li>
                                </ul>
                            </li-->
                            <li <?php echo ($this->uri->segment(2) == 'products' ? 'class="current"' : ''); ?>><a href="<?php echo base_url(); ?>Front/products">Products</a>
                                <!--ul>
                                    <li><a href="shop.html">Shop Products</a></li>
                                    <li><a href="shop-single.html">Products Single</a></li>
                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="account.html">My Account</a></li>
                                </ul-->
                            </li>
                            <li <?php echo ($this->uri->segment(2) == 'contact' ? 'class="current"' : ''); ?>><a href="<?php echo base_url(); ?>Front/contact">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
                <!--End mainmenu-->
                <!--Start mainmenu right box-->
                <div class="mainmenu-right-box pull-right">
                    <!--div class="outer-search-box">
                        <div class="seach-toggle"><i class="fa fa-search"></i></div>
                        <ul class="search-box">
                            <li>
                                <form method='post' action='#'><input type='hidden' name='form-name' value='form 2' />
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Search Here" required>
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div-->
                    <div class="appointment-button">
                        <a class="thm-btn bgclr-1" href="<?php echo base_url(); ?>Front/getquote">Get Quote</a>
                    </div>
                </div> 
                <!--End mainmenu right box-->
            </div>   
        </div>
    </div>
</div>
<!--End mainmenu area-->