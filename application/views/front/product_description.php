<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?php echo base_url(); ?>assets/frontend/images/resources/maxresdefault.png);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1 style="color: rgb(76, 70, 70);">Product Description</h1>
	            </div>
	        </div>
	    </div>
	</div>
</section>
<!--End breadcrumb area-->

<!--Start breadcrumb bottom area-->     
<!-- <div class="breadcrumb-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="left pull-left">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Checkout</li>
                    </ul>
                </div>
                <div class="right pull-right">
                    <a href="#">
                        <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span> 
                    </a>   
                </div>    
            </div>
        </div>
    </div>
</div> -->
<!--End breadcrumb bottom area-->

<!--Start shop area-->
<section class="single-shop-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--Start single shop content-->
				<?php 
					foreach($product_description as $row)
					{
				?>
                <div class="single-shop-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img-holder">
                                <img src="<?php echo base_url(); ?>upload/products/<?php echo $row->product_img; ?>" alt="Awesome Image" data-imagezoom="true" class="img-responsive" style="width:400px;height:400px;">
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="content-box">
                                <h3><?php echo $row->product_name; ?></h3>
                                <!--div class="review-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half"></i></li>
                                    </ul>
                                </div-->
                                <!--span class="price">$29.00</span-->
                                <div class="text">
                                    <p><?php echo substr($row->product_desc, 0, 500).' ';?></p>
                                </div>
                                <!--div class="location-box">
                                    <p>Check Delivery Option at Your Location:</p>
                                    <form action='#' method='post'><input type='hidden' name='form-name' value='form 3' />
                                        <input type="text" placeholder="Pincode">
                                        <button type="submit">Check</button><br/>
                                        <span>Expected Delivery in 4-10 Days</span>
                                    </form>
                                </div-->
								<form action="<?php echo base_url(); ?>Front/add" method="POST">
									
									<input type="hidden" value="<?php echo $row->id; ?>" name="id">
									<input type="hidden" value="<?php echo $row->product_name; ?>" name="name">
									<input type="hidden" value="<?php echo $row->product_img; ?>" name="image">
									<input type="hidden" value="150" name="price">
									<div class="addto-cart-box clearfix">
										<input class="quantity-spinner" type="text" value="1" name="qty">
										<input class="thm-btn bgclr-1 addtocart" type="submit" name="Quote" value="Get Quote">
										<!--button class="thm-btn bgclr-1 addtocart" type="submit" name="Quote" >Get Quote</button-->
									</div>
								</form>								
                            </div>
                        </div>
                    </div>
                </div>
				<?php 
					}
				?>
                <!--End single shop content-->
                <!--Start product tab box-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-tab-box">
                            <ul class="nav nav-tabs tab-menu">
                                <li class="active"><a href="#desc" data-toggle="tab">Descriprion</a></li>
                                <!--li class="active"><a href="#review" data-toggle="tab">Reviews (2)</a></li-->
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="desc">
									<?php 
										foreach($product_description as $row)
										{
									?>
                                    <div class="product-details-content">
                                        <div class="desc-content-box">
                                            <p><?php echo $row->product_desc; ?></p>
                                        </div>

                                    </div> 
								<?php
										}
								?>								
                                </div>
                                <!--div class="tab-pane" id="review">
                                    <div class="review-box">
                                        <div class="title">
                                            <h3>Business Book</h3>
                                        </div>
                                        <!--Start single review box->
                                        <div class="single-review-box">
                                            <div class="img-holder">
                                                <img src="images/shop/review-1.jpg" alt="Awesome Image">
                                            </div>
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="name pull-left">
                                                        <h4>Steven Rich – Sep 17, 2016:</h4>
                                                    </div>
                                                    <div class="review-box pull-right">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis sunt veniam corporis optio ea natus fugit accusantium minus perferendis, amet animi consequatur provident distinctio vel ullam quasi.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End single review box-->
                                        <!--Start single review box->
                                        <div class="single-review-box">
                                            <div class="img-holder">
                                                <img src="images/shop/review-2.jpg" alt="Awesome Image">
                                            </div>
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="name pull-left">
                                                        <h4>William Cobus – Aug 21, 2016:</h4>
                                                    </div>
                                                    <div class="review-box pull-right">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente accusamus, veniam. Sint vitae praesentium, dolores iste accusamus quam esse commodi voluptatum corrupti aspernatur.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End single review box->   
                                    </div>
                                    <div class="review-form">
                                        <div class="title">
                                            <h3>Add Your Comments</h3>
                                        </div>
                                        <div class="add-rating-box">
                                            <div class="add-rating-title">
                                                <h4>Your Rating</h4>    
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>   
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <form id='review-form' action='#' method='post'><input type='hidden' name='form-name' value='review-form' />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="field-label">
                                                        <p>First Name*</p>
                                                        <input type="text" name="fname" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="field-label">
                                                        <p>Last Name*</p>
                                                        <input type="text" name="lname" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="field-label">
                                                        <p>Email*</p>
                                                        <input type="email" name="email" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="field-label">
                                                        <p>Your Comments*</p>
                                                        <textarea name="review" required=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="thm-btn bgclr-1" type="submit">Submit Now</button>
                                                </div>
                                            </div>
                                        </form>  
                                    </div>
                                </div-->
                            </div>      
                        </div>
                    </div>
                </div>
                <!--End product tab box-->
                <!--Start related product box-->
                <!--div class="related-product">
                    <div class="sec-title pdb-50">
                        <h1>Related Products</h1>
                        <span class="border"></span>
                    </div>
                    <div class="row">
                        <!--Start single product item->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-product-item">
                                <div class="img-holder">
                                    <img src="images/shop/1.jpg" alt="Awesome Product Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a class="thm-btn bgclr-1" href="shopping-cart.html">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <div class="top clearfix">
                                        <div class="product-title pull-left">
                                            <h5>Business Book</h5>
                                        </div>
                                        <div class="review-box pull-right">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>    
                                    </div>
                                    <div class="product-value">
                                        <h4>$34.99</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single product item-->
                        <!--Start single product item->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-product-item">
                                <div class="img-holder">
                                    <img src="images/shop/2.jpg" alt="Awesome Product Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a class="thm-btn bgclr-1" href="shopping-cart.html">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <div class="top clearfix">
                                        <div class="product-title pull-left">
                                            <h5>Business Book</h5>
                                        </div>
                                        <div class="review-box pull-right">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>    
                                    </div>
                                    <div class="product-value">
                                        <h4>$44.99</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single product item-->
                        <!--Start single product item->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-product-item">
                                <div class="img-holder">
                                    <img src="images/shop/3.jpg" alt="Awesome Product Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a class="thm-btn bgclr-1" href="shopping-cart.html">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <div class="top clearfix">
                                        <div class="product-title pull-left">
                                            <h5>Business Book</h5>
                                        </div>
                                        <div class="review-box pull-right">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>    
                                    </div>
                                    <div class="product-value">
                                        <h4>$19.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single product item->
                    </div>
                </div-->
                <!--End related product box--> 
            </div>
            <!--Start sidebar Wrapper-->
            <!--Start sidebar Wrapper-->
            <!--div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
                <div class="sidebar-wrapper">
                    <!--Start single sidebar->
                    <div class="single-sidebar">
                        <form class='search-form' action='#' method='post'><input type='hidden' name='form-name' value='form 5' />
							<input placeholder="Search..." type="text">
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar->
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Categories</h3>
                        </div>
                        <ul class="categories clearfix">
                            <li><a href="#">Business Plans <span>(6)</span></a></li>
                            <li><a href="#">Marketing Ideas <span>(2)</span></a></li>
                            <li><a href="#">Accessories <span>(5)</span></a></li>
                            <li><a href="#">Electronic Scales <span>(10)</span></a></li>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                    <!--Start single sidebar-> 
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Filter By Price</h3>
                        </div>
                        <div class="price-ranger">
                            <div id="slider-range"></div>
                            <div class="ranger-min-max-block">
                                <input type="submit" value="Filter">
                                <span>Price:</span>
                                <input type="text" readonly class="min"> 
                                <span>-</span>
                                <input type="text" readonly class="max">
                            </div>
                        </div>
                    </div>
                    <!--End single sidebar-->
                    <!--End single sidebar-->
                    <!--Start single sidebar-> 
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Popular Products</h3>
                        </div>
                        <ul class="popular-product">
                            <li>
                                <div class="img-holder">
                                    <img src="images/shop/product-thumb-1.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <a href="#">
                                        <h4>The Innovators</h4>
                                    </a>
                                    <h5>$34.99</h5>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div> 
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images/shop/product-thumb-2.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <a href="#">
                                        <h4>Good to Great</h4>
                                    </a>
                                    <h5>$29.00</h5>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div> 
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images/shop/product-thumb-3.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <a href="#">
                                        <h4>Grow to Last</h4>
                                    </a>
                                    <h5>$24.99</h5>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div> 
                            </li>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-> 
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Tag Cloud</h3>
                        </div>
                        <ul class="product-tag">
                            <li><a href="#">Idea</a></li>    
                            <li><a href="#">Finance</a></li>    
                            <li><a href="#">Experts</a></li>    
                            <li><a href="#">Marketing</a></li>    
                            <li><a href="#">Services</a></li>    
                            <li><a href="#">Tips</a></li>    
                            <li><a href="#">Growth</a></li>    
                            <li><a href="#">Wealth</a></li>    
                        </ul>    
                    </div>
                    <!--End single sidebar-> 
                </div>    
            </div-->
            <!--End Sidebar Wrapper-->  
        </div>
    </div>
</section>
<!--End shop area-->