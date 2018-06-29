<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?php echo base_url(); ?>assets/frontend/images/resources/maxresdefault.png);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1 style="color: rgb(76, 70, 70);">Checkout</h1>
	            </div>
	        </div>
	    </div>
	</div>
</section>
<!--End breadcrumb area-->

<!--Start Checkout area-->
<section class="checkout-area">
    <div class="container">
		<?php
		if($cart = $this->cart->contents())
		{
		?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form billing-info">
                    <div class="sec-title pdb-50">
                        <h1>Billing Address</h1>
                        <span class="border"></span>
                    </div>
                    <form action="<?php echo base_url(); ?>Quote/Addcart" method="POST" id="basicform">
						<input type='hidden' name='form-name' value='form 3' />
                        <div class="row">

                            <div class="col-md-6">
                                <div class="field-label">First Name*</div>
                                <div class="field-input">
                                    <input type="text" name="fname" id="fname" placeholder="" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">Last Name *</div>
                                <div class="field-input">
                                    <input type="text" name="lname" id="lname" placeholder="" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">Address1 *</div>
                                <div class="field-input">
                                    <input type="text" name="address1" id="address1" placeholder="" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
								<div class="field-label">Address2 *</div>
                                <div class="field-input">
                                    <input type="text" name="address2" id="address2" placeholder="">
                                </div>
                            </div>
							<div class="col-md-6">
                                <div class="field-label">Email ID *</div>
                                <div class="field-input">
                                    <input type="text" name="email" id="email" placeholder="Email Address" required="">
                                </div>
                            </div>
							<div class="col-md-6">
								<div class="field-label">Phone No *</div>
                                <div class="field-input">
                                    <input type="text" name="phone" id="phone" placeholder="Phone Number" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">Town / City *</div>
                                <div class="field-input">
                                    <input type="text" name="city" id="city" placeholder="" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">Country*</div>
                                <div class="field-input">
                                    <input type="text" name="country" id="country" placeholder="" required="">
                                </div>
                            </div>
                            

                       
                        </div>    
                    
                </div>    
            </div>
			<div class="col-lg-12 col-md-12">
                <div class="table">
                    <div class="sec-title">
                        <h1>Order Summary</h1>
                        <span class="border"></span>
                    </div>
					
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th class="product-column">Product Name</th>
                                <th>Quantity</th>
                            </tr>    
                        </thead>
                        <tbody>
							<?php 
					foreach ($cart as $item)
					{
					?>
                            <tr>
                                <td class="product-column">
                                    <?php echo $item['name']; ?>
                                </td>
                                <td class="price"><?php echo $item['qty']; ?></td>
                            </tr>
                           <?php 
					}
					?> 
                        </tbody>
                    </table>
					
                </div>
				
				<div class="placeorder-button" style="    float: right;">
					<input class="thm-btn bgclr-1" type="submit" name="add_checkout_data" value="Place Order">
				</div> 
				</form>		
            </div>
			
            <!--div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="form shipping-info">
                    <div class="sec-title pdb-50">
                        <h1>Shipping to a Different Address<input type="checkbox"></h1>
                        <span class="border"></span>
                    </div>
                    <form method='post' action='#'><input type='hidden' name='form-name' value='form 4' />
                        <div class="row">
                            <div class="col-md-12">
                                <div class="field-label">Country*</div>
                                <div class="field-input">
                                    <input type="text" name="country" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">First Name*</div>
                                <div class="field-input">
                                    <input type="text" name="fname" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">Last Name *</div>
                                <div class="field-input">
                                    <input type="text" name="lname" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Address *</div>
                                <div class="field-input">
                                    <input type="text" name="address" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-input">
                                    <input type="text" name="address" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Town / City *</div>
                                <div class="field-input">
                                    <input type="text" name="town-city" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Other Notes</div>
                                <div class="field-input">
                                    <textarea name="other-notes" placeholder=""></textarea>
                                </div>
                            </div>
                            
                        </div>    
                    </form>
                </div>    
            </div-->  
        </div>
        <?php 
		}
		?>

    </div>
</section>         
<!--End Checkout area-->

<script type="text/javascript">
  
  jQuery().ready(function() {

    // validate form on keyup and submit
    var v = jQuery("#basicform").validate({
      rules: {
        fname: {
          required: true,
          minlength: 2,
          maxlength: 16
        },
		lname: {
          required: true,
          minlength: 1,
          maxlength: 16
        },
		address1: {
          required: true,
          minlength: 3,
          maxlength: 100
        },
		address21: {
          required: true,
          minlength: 3,
          maxlength: 100
        },
        email: {
          required: true,
          minlength: 2,
          email: true,
          maxlength: 100,
        },
		phone: {
          required: true,
          number: true
        },
		city: {
          required: true,
          minlength: 3,
          maxlength: 25
        },
		state: {
          required: true,
          minlength: 3,
          maxlength: 25
        },
		postcode: {
			required: true,
			number: true
        },
		country: {
			required: true,
        },
		
		
        pwd: {
          required: true,
          minlength: 6,
          maxlength: 15,
        },
        cpwd: {
          required: true,
          minlength: 6,
          equalTo: "#pwd",
        }

      },
      errorElement: "span",
      errorClass: "help-inline-error",
    });


  });
</script>