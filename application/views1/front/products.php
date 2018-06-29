

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?php echo base_url(); ?>assets/frontend/images/resources/consultation-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>Products</h1>
	            </div>
	        </div>
	    </div>
	</div>
</section>
<!--End breadcrumb area-->

<!--Start breadcrumb bottom area-->     
<!--div class="breadcrumb-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="left pull-left">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Shop</li>
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
</div-->
<!--End breadcrumb bottom area-->

<!--Start shop area-->
<section class="shop-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="shop-content">
				<div id="demo" class="box jplist" style="margin: 20px 0 50px 0">
					<div class="row">
						<div class="col-md-12">
							<!-- ios button: show/hide panel -->
							<div class="jplist-ios-button">
								<i class="fa fa-sort"></i>
								Actions
							</div>
							
							<!-- panel -->
							<div class="jplist-panel box panel-top">						
								
								<div class="showing pull-left">
									<div 
									   class="jplist-label" 
									   data-type="Page {current} of {pages}" 
									   data-control-type="pagination-info" 
									   data-control-name="paging" 
									   data-control-action="paging">
									</div>	

									<div 
									   class="jplist-pagination" 
									   data-control-type="pagination" 
									   data-control-name="paging" 
									   data-control-action="paging"
									   data-items-per-page="8">
									</div>
								</div>  
								
								<div class="shorting pull-right">
									<select 
									   class="jplist-select" 
									   data-control-type="sort-select" 
									   data-control-name="sort" 
									   data-control-action="sort">
									   
										  <option data-path="default">Sort by</option>
										  <option data-path=".title" data-order="asc" data-type="text">Title A-Z</option>
										  <option data-path=".title" data-order="desc" data-type="text">Title Z-A</option>
										  								
									</select>
								</div> 
								
							</div>
						</div>
						<div class="col-md-12">&nbsp;</div>
						<div class="col-md-12">&nbsp;</div>
						
						<div class="col-md-12">
							<div class="list box text-shadow">					
								
								<?php 
									foreach($products as $row)
									{
								?>
								<!-- item 1 -->
								<div class="list-item box">	
									<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="single-product-item">
											<div class="img-holder">
												<img src="<?php echo base_url(); ?>upload/products/<?php echo $row->product_img; ?>" alt="Awesome Product Image" style="width:300px;height:250px;">
												<div class="overlay-style-one">
													<div class="box">
														<div class="content">
															<a class="thm-btn bgclr-1" href="<?php echo base_url(); ?>Front/product_description/<?php echo $row->id; ?>">View</a>
														</div>
													</div>
												</div>
											</div>
											<div class="title-holder">
												<div class="top clearfix">
													<div class="product-title">
														<h5 style="text-align:center" class="title"><?php echo $row->product_name; ?></h5>
													</div>
													<!-- <div class="review-box pull-right">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
													</div>   -->  
												</div>
												<!-- <div class="product-value">
													<h4>$34.99</h4>
												</div> -->
											</div>
										</div>
									</div>
								</div>
								<?php 
									}
								?>
							</div>
						</div>
						
						<div class="col-md-12">
							<!-- no results -->
							<div class="box jplist-no-results text-shadow align-center">
								<p>No results found</p>
							</div>
							
							<!-- ios button: show/hide panel -->
							<div class="jplist-ios-button">
								<i class="fa fa-sort"></i>
							 Actions
							</div>
							
							<!-- panel -->
							<div class="jplist-panel box panel-bottom">
								
								<div 
								   class="jplist-label" 
								   data-type="{start} - {end} of {all}"
								   data-control-type="pagination-info" 
								   data-control-name="paging" 
								   data-control-action="paging">
								</div>
								
								<div 
								   class="jplist-pagination" 
								   data-control-type="pagination" 
								   data-control-name="paging" 
								   data-control-action="paging"
								   data-items-per-page="8"
								   data-control-animate-to-top="true">
								</div>
								
								<!--ul class="post-pagination text-center">
									<li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
								</ul-->
							
							</div>
						</div>
					</div>
				
					
					
					
					
					
				</div>
				</div>

            </div>
            <!--Start sidebar Wrapper-->
            <!--div class="col-lg-3 col-md-7 col-sm-7 col-xs-12 pull-left">
                <div class="sidebar-wrapper">
                    <!--Start single sidebar-->
                    <!-- <div class="single-sidebar">
                        <form class='search-form' action='#' method='post'><input type='hidden' name='form-name' value='form 3' />
							<input placeholder="Search..." type="text">
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
                    </div> -->
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <!-- <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Categories</h3>
                        </div>
                        <ul class="categories clearfix">
                            <li><a href="#">Business Plans <span>(6)</span></a></li>
                            <li><a href="#">Marketing Ideas <span>(2)</span></a></li>
                            <li><a href="#">Accessories <span>(5)</span></a></li>
                            <li><a href="#">Electronic Scales <span>(10)</span></a></li>
                        </ul>
                    </div> -->
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                    <!--Start single sidebar--> 
                    <!-- <div class="single-sidebar">
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
                    </div> -->
                    <!--End single sidebar-->
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                    <!-- <div class="single-sidebar">
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
                    </div> -->
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                   <!--  <div class="single-sidebar">
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
                    </div> -->
                    <!--End single sidebar-> 
                </div>    
            </div-->
            <!--End Sidebar Wrapper-->  
        </div>
    </div>
</section>
<!--End shop area-->