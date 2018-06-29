<!--Start call to action area-->
<section class="callto-action-area sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="text-holder">
                    <div class="sec-title text-right">
                        <h3>Some Story Behind Us</h3>
                        <h1>We Have 5 Years of experince</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Maiores dicta veritatis quas facere corporis in, nostrum, consectetur adipisicing elit Maiores dicta veritatis dignissimos suscipit.</p>
                     </div> 
                    <div class="row text-box">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-text-box pdr-30 text-right">
                                <h3>Our Mission</h3>
                                <p>Explain to you how all this mistaken idea of denouncing ut pleasure work praising pain was born and will give.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-text-box pdl-30 text-left">
                                <h3>Our Vision</h3>
                                <p>Pleasure work praising pain ut was born and will give you can complete design account sed the system.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="signature-readmore">
                                <div class="button pull-right">
                                    <a class="thm-btn bgclr-1" href="<?php echo base_url(); ?>Front/about">Read More</a>    
                                </div> 
                                <!--div class="signature pull-right">
                                    <img src="images/resources/signature.png" alt="signature">    
                                </div-->   
                            </div>
                        </div>
                    </div>   
                </div>
            </div> 
            <div class="col-md-5">
                <div class="img-holder wow slideInRight text-center">
                    <img src="<?php echo base_url(); ?>assets/frontend/images/list/callto-action.png" alt="Awesome Image">
                </div>
            </div>   
        </div>
    </div>
</section>
<!--End call to action area-->

<!--Start choosing area-->
<section class="choosing-area">
    <div class="container">
        <div class="sec-title text-center">
            <!--h3>Our Qualification</h3-->
            <h1>Why People Choosing Us</h1>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="text-holder">
                        <div class="iocn">
                            <span class="flaticon-smile"></span>
                        </div>
                        <div class="title">
	                        <h3>100% satisfication</h3>
	                    </div> 
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ratione officia animi.</p>
                        </div>
                    </div>   
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="text-holder">
                        <div class="iocn">
                            <span class="flaticon-business-1"></span>
                        </div>
                        <div class="title">
	                        <h3>Workout Routines</h3>
	                    </div> 
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ratione officia animi.</p>
                        </div>
                    </div>   
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
			<div class="col-md-4">
                <div class="single-item">
                    <div class="text-holder">
                        <div class="iocn">
                            <span class="flaticon-business"></span>
                        </div>
                        <div class="title">
	                        <h3>Certified Company</h3>
	                    </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ratione officia animi.</p>
                        </div>
                    </div>   
                </div>
            </div>
            
            <!--End single item-->
            <!--Start single item-->
            <!--div class="col-md-4">
                <div class="single-item">
                    <div class="text-holder">
                        <div class="iocn">
                            <span class="flaticon-note-1"></span>
                        </div>
                        <div class="title">
	                        <h3>First Hand Advice</h3>
	                    </div> 
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ratione officia animi.</p>
                        </div>
                    </div>   
                </div>
            </div-->
            <!--End single item-->
            <!--Start single item-->
            <!--div class="col-md-4">
                <div class="single-item">
                    <div class="text-holder">
                        <div class="iocn">
                            <span class="flaticon-book"></span>
                        </div>
                        <div class="title">
	                        <h3>Detailed Documentaion</h3>
	                    </div> 
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ratione officia animi.</p>
                        </div>
                    </div>   
                </div>
            </div-->
            <!--End single item-->
            <!--Start single item-->
            <!--div class="col-md-4">
                <div class="single-item">
                    <div class="text-holder">
                        <div class="iocn">
                            <span class="flaticon-line"></span>
                        </div>
                        <div class="title">
	                        <h3>Support & Motivation</h3>
	                    </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ratione officia animi.</p>
                        </div>
                    </div>   
                </div>
            </div-->
            <!--End single item-->
        </div>
    </div>
</section>  
<!--End choosing area-->


<!--Start service area-->
<section class="service-area">
    <div class="container">
        <div class="sec-title">
            <!--h3>What We Do</h3-->
            <h1>Our Products</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="servicecarousel">
                    <!--Start single item-->
					<?php 
						$this->db->limit(4);
						$this->db->select("*");
						$this->db->from("tbl_product");
						$query = $this->db->get();
						$row = $query->result();
						//var_dump($row);
						foreach($row as $res)
						{
					?>
                    <div class="single-service-item">
                        <div class="img-holder">
                            <img src="<?php echo base_url(); ?>upload/products/<?php echo $res->product_img; ?>" alt="Awesome Image" style="width270px;height:300px;" class="img-responsive">
                            <div class="content">
                                <div class="text-holder text-center">
                                    <div class="inner">
                                        <div class="inner-content">
                                            <!--div class="icon-box">
                                                <span class="flaticon-medical"></span>
                                            </div-->
                                            <h3><?php echo $res->product_name; ?></h3>
                                            <p><?php echo substr($res->product_desc, 0, 90).' ';?></p>
                                            <a class="thm-btn bgclr-1" href="<?php echo base_url(); ?>Front/product_description/<?php echo $res->id; ?>">View</a>
                                        </div>
                                    </div>    
                                </div>
                                <div class="text-holder-1 text-center">
                                    <div class="inner">
                                        <div class="inner-content">
                                            <!--div class="icon-box">
                                                <span class="flaticon-note-1"></span>
                                            </div-->
                                            <h3><?php echo $res->product_name; ?></h3>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
					<?php 
					}
					?>
                    <!--End single item-->
                  
                 
                   
                </div>
            </div>    
        </div>
    </div>
</section>
<!--End service area--> 

<!--Start project with text area--> 
<!--div class="main-project-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="project-filter post-filter text-center">
                    <li class="active" data-filter=".filter-item"><span>Show All</span></li>
                    <li data-filter=".business"><span>Business</span></li>
                    <li data-filter=".consulting"><span>Consulting</span></li>
                    <li data-filter=".investment"><span>Investment</span></li>
                    <li data-filter=".tax"><span>Tax</span></li>
                </ul>
            </div>
        </div>
        <div class="row project-content filter-layout">
            <!--Start single project item->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item consulting tax">
                <div class="single-project-item">
                    <div class="img-holder">
                        <img src="images/projects/1.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="project-single.html">Financial Planning</a>
                                    <span class="border"></span>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div> 
            </div>
            <!--End single project item-->
            <!--Start single project item->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item business tax investment">
                <div class="single-project-item">
                    <div class="img-holder">
                        <img src="images/projects/2.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="project-single.html">Financial Planning</a>
                                    <span class="border"></span>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div> 
            </div>
            <!--End single project item-->
            <!--Start single project item->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item business">
                <div class="single-project-item">
                    <div class="img-holder">
                        <img src="images/projects/3.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="project-single.html">Financial Planning</a>
                                    <span class="border"></span>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div> 
            </div>
            <!--End single project item-->
            <!--Start single project item->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item investment business consulting">
                <div class="single-project-item">
                    <div class="img-holder">
                        <img src="images/projects/4.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="project-single.html">Financial Planning</a>
                                    <span class="border"></span>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div> 
            </div>
            <!--End single project item-->
            <!--Start single project item->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item consulting">
                <div class="single-project-item">
                    <div class="img-holder">
                        <img src="images/projects/5.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="project-single.html">Financial Planning</a>
                                    <span class="border"></span>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div> 
            </div>
            <!--End single project item-->
            <!--Start single project item->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item tax business">
                <div class="single-project-item">
                    <div class="img-holder">
                        <img src="images/projects/6.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="project-single.html">Financial Planning</a>
                                    <span class="border"></span>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div> 
            </div>
            <!--End single project item->
        </div>
    </div>
</div-->                            
<!--End project with text area-->   
  
<!--Start slogan area-->
<!--section class="slogan-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content text-center">
                    <h1>find proper consultant for your business</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ratione officia animi.</p>
                    <p>consectetur adipisicing elit. Vel ratione officia animi.</p>
                    <a class="thm-btn bgclr-1" href="#">Get Free Consalting</a>
                </div>
            </div>
        </div>
    </div>
</section-->  
<!--End slogan area-->
  


<!--Start fact counter area-->
<!--section class="fact-counter-area" style="background-image:url(images/resources/fact-counter-bg.jpg);">
    <div class="container">
        <div class="sec-title">
            <h3>Interesting Facts</h3>
            <h1>sucessfull Experince</h1>
        </div>
        <div class="row">
            <!--Start single item->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <div class="count">
                        <h1>01</h1>
                    </div>
                    <div class="icon-holder">
                        <span class="fa fa-graduation-cap"></span> 
                    </div>
                    <h1><span class="timer" data-from="1" data-to="25" data-speed="5000" data-refresh-interval="50">25</span></h1>
                    <h3>Expeart Consultant</h3>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <div class="count">
                        <h1>02</h1>
                    </div>
                    <div class="icon-holder">
                        <span class="flaticon-smile"></span> 
                    </div>
                    <h1><span class="timer" data-from="1" data-to="284" data-speed="5000" data-refresh-interval="50">284</span></h1>
                    <h3>Happy Customers</h3>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <div class="count">
                        <h1>03</h1>
                    </div>
                    <div class="icon-holder">
                        <span class="fa fa-trophy"></span> 
                    </div>
                    <h1><span class="timer" data-from="1" data-to="176" data-speed="5000" data-refresh-interval="50">76</span></h1>
                    <h3>Winning Awards</h3>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <div class="count">
                        <h1>04</h1>
                    </div>
                    <div class="icon-holder">
                        <span class="fa fa-tasks"></span> 
                    </div>
                    <h1><span class="timer" data-from="1" data-to="142" data-speed="5000" data-refresh-interval="50">142</span></h1>
                    <h3>Sucessfull Projects</h3>
                </div>
            </div>
            <!--End single item->
        </div>
    </div>
</section-->
<!--End fact counter area-->

<!--Start testimonial area-->
<!--section class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title pull-left">
                    <h3>Testimonials</h3>
                    <h1>Successful Stories</h1>
                </div>
                <div class="more-button pull-right">
                    <a href="#">More Stories</a>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Start single item->
            <div class="col-md-4">
                <div class="single-testimonial-item text-center">
                    <div class="img-holder">
                        <img src="images/testimonial/1.png" alt="Awesome Image">
                    </div>
                    <div class="text-holder">
                        <h3>consectetur adipisicing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sit, minus animi eveniet et consectetur quas.</p>
                    </div>
                    <span class="border"></span>
                    <div class="name">
                        <h3>Steve Bairstow</h3>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item->
            <div class="col-md-4">
                <div class="single-testimonial-item text-center">
                    <div class="img-holder">
                        <img src="images/testimonial/2.png" alt="Awesome Image">
                    </div>
                    <div class="text-holder">
                        <h3>consectetur adipisicing elit</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sit, minus animi eveniet et consectetur quas.</p>
                    </div>
                    <span class="border"></span>
                    <div class="name">
                        <h3>Don Fletcher</h3>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item->
            <div class="col-md-4">
                <div class="single-testimonial-item text-center">
                    <div class="img-holder">
                        <img src="images/testimonial/3.png" alt="Awesome Image">
                    </div>
                    <div class="text-holder">
                        <h3>consectetur adipisicing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sit, minus animi eveniet et consectetur quas.</p>
                    </div>
                    <span class="border"></span>
                    <div class="name">
                        <h3>Jessica Jung</h3>
                    </div>
                </div>
            </div>
            <!--End single item->
        </div>
    </div>
</section-->
<!--End testimonial area--> 

<!--Start latest blog area-->  
<!--section class="latest-blog-area sec-padding">
    <div class="container">
        <div class="sec-title text-center">
            <h3>From Blog</h3>
            <h1>News and Articles</h1>
        </div>
        <div class="row">
            <!--Start single blog item->
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="images/blog/latest-blog-1.jpg" alt="Awesome Image">
                        <div class="overlay-style-one"></div>
                        <div class="categories">
                            <a href="#">Financial</a>
                        </div> 
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><a href="#">April 21, 2017</a></li>
                            <li><a href="#">10 Comments</a></li>
                        </ul>
                        <a href="blog-single.html">
                            <h3 class="blog-title">Strategic and commercial approach with issues</h3>
                        </a>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi repellendus quam, accusamus error aliquid, quos veritatis.</p>
                        </div>
                    </div>    
                </div>    
            </div>
            <!--End single blog item-->
            <!--Start single blog item->
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="images/blog/latest-blog-2.jpg" alt="Awesome Image">
                        <div class="overlay-style-one"></div>
                        <div class="categories">
                            <a href="#">Business</a>
                        </div> 
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><a href="#">February 05, 2017</a></li>
                            <li><a href="#">24 Comments</a></li>
                        </ul>
                        <a href="blog-single.html">
                            <h3 class="blog-title">Strategic and commercial approach with issues</h3>
                        </a>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi repellendus quam, accusamus error aliquid, quos veritatis.</p>
                        </div>
                    </div>    
                </div>    
            </div>
            <!--End single blog item-->
            <!--Start single blog item->
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="images/blog/latest-blog-3.jpg" alt="Awesome Image">
                        <div class="overlay-style-one"></div>
                        <div class="categories">
                            <a href="#">Investment</a>
                        </div> 
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><a href="#">January 14, 2017</a></li>
                            <li><a href="#">18 Comments</a></li>
                        </ul>
                        <a href="blog-single.html">
                            <h3 class="blog-title">Strategic and commercial approach with issues</h3>
                        </a>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi repellendus quam, accusamus error aliquid, quos veritatis.</p>
                        </div>
                    </div>    
                </div>    
            </div>
            <!--End single blog item->
        </div>
    </div>
</section-->
<!--End latest blog area-->

<!--Start consultations area-->
<section class="consultations-area" style="background-image:url(images/resources/consultation-bg.jpg);">
    <div class="container wow zoomIn" data-wow-delay="100ms" data-wow-duration="900ms">
        <div class="sec-title text-center">
            <h3 style="color:#a55e30;">Lets Talk</h3>
            <h1>Request For Consultation</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                            <div class="consultations-form-box">
                                <form id='consultations-form' name='consultations-form' action='' method='post'><input type='hidden' name='form-name' value='consultations-form' />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="form_name" value="" placeholder="Full Name *" required="">
                                            <input type="text" name="form_name" value="" placeholder="Mobile*" required="">
                                            <input type="email" name="form_email" value="" placeholder="Email *" required="">
                                            <!--select class="selectmenu">
                                                <option selected="selected">Select Service</option>
                                                <option>Business Consalting</option>
                                                <option>Marketing Activity</option>
                                            </select-->   
                                        </div>
                                        <div class="col-md-6">
                                            <textarea name="form_message" placeholder="Your Message.." required=""></textarea>    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="thm-btn bgclr-1" type="submit">Submit Now</button>   
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">   
                            <div class="contact-info">
                                <h2>Contact Details</h2>
                                <ul>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-arrows"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5>Address: No. 45, Jalan Rebena 10,<br>Off Jalan Seruling 59, Kawasan 3,<br>Taman Klang Jaya, <br>41200 Klang, <br>Selangor D.E.</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-technology"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5>Phone: (03) 3322 1761 <br> Fax : (03) 3322 1761</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-note"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5>Email: naraharicamplet@gmail.com</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--End consultations area-->  
 
<!--Start certificates area-->  
<section class="certificates-area">
    <div class="container">
        <div class="sec-title">
            <!--h3>Achivements</h3-->
            <h1>Our Clients</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="certificates">
                    <!--Start single item-->
                    <div class="single-item">
                        <a href="#">
                            <div class="single-item">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/certificates/5.jpg" alt="Awesome Image" style="width:270px;height:195px;">
                            </div>
                        </a>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <a href="#">
                            <div class="single-item">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/certificates/6.png" alt="Awesome Image" style="width:270px;height:195px;">
                            </div>
                        </a>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <a href="#">
                            <div class="single-item">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/certificates/7.jpg" alt="Awesome Image" style="width:270px;height:195px;">
                            </div>
                        </a>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <a href="#">
                            <div class="single-item">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/certificates/8.png" alt="Awesome Image" style="width:270px;height:195px;">
                            </div>
                        </a>
                    </div>
                    <!--End single item-->

                </div>
            </div>
        </div>
    </div>
</section>
<!--End certificates area-->  