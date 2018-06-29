<!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul style="height:100%;width:100%;">
			<?php 
				$data7 = $this->db->get("tbl_slider")->result();
				foreach($data7 as $res)
				{
			?>
            <li data-transition="fade">
                <img src="<?php echo base_url(); ?>upload/slider/<?php echo $res->slider; ?>"  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                
                <div class="tp-caption tp-resizeme"
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="160" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"  
                    data-start="500">
                    <!--div class="slide-content-box mar-lft">
                        <h2>We are Business </h2>
                    </div-->
                </div>
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="215" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="1500">
                    <!--div class="slide-content-box mar-lft">
                        <h1>Provide Professional<br>Business Consalting</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Maiores dicta veritatis <br>quas facere corporis in, nostrum, dignissimos suscipit. </p>
                    </div-->
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="460" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2500">
                    <!--div class="slide-content-box mar-lft">
                        <div class="button">
                            <a class="" href="#">Know More</a>     
                            <a class="btn-style-two" href="#">Contact Us</a>     
                        </div>
                    </div-->
                </div>
            </li>
			<?php 
				}
			?>
            <!--li data-transition="fade">
                <img src="<?php echo base_url(); ?>assets/frontend/images/list/s2.jpg" alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption tp-resizeme"
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="-135" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"  
                    data-start="500">
                    <!--div class="slide-content-box middle-slide">
                        <h2>We have 20 years of experience with</h2>
                    </div->
                </div>
                <div class="tp-caption  tp-resizeme" 
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="-35" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="1500">
                    <!--div class="slide-content-box middle-slide">
                        <h1>Certified Business Consultants</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Maiores dicta veritatis <br>quas facere corporis in, nostrum, dignissimos suscipit.</p>
                    </div->
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="90" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <!--div class="slide-content-box middle-slide">
                        <div class="button">
                            <a class="#" href="#">Our Company</a>
                            <a class="btn-style-two" href="#">Contact Us</a>           
                        </div>    
                    </div->
                </div>
            </li-->
            <!--li data-transition="fade">
                <img src="images/slides/3.jpg"  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="right" data-hoffset="0" 
                    data-y="top" data-voffset="160" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <!--div class="slide-content-box right-slide">
                        <h2>Be Successful and Be Happy</h2>
                        <h1>We support to find a<br>Business Solutions</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Maiores dicta veritatis <br>quas facere corporis in, nostrum, dignissimos suscipit.</p>
                    </div->
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="center" data-hoffset="165" 
                    data-y="top" data-voffset="450" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <!--div class="slide-content-box">
                        <div class="button">
                            <a class="" href="#">Our Company</a>     
                            <a class="btn-style-two" href="#">Contact Us</a>     
                        </div>
                    </div->
                </div>
            </li-->
        </ul>
    </div>
</section>
<!--End rev slider wrapper-->