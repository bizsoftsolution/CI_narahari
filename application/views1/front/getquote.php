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


<!--Start cart area-->
<section class="cart-area">
    <div class="container">
		<?php
		if($cart = $this->cart->contents())
		{ 
			//var_dump($cart);
			
		?>
		<?php
				echo form_open('Front/update_cart');
				
				?>
        <div class="row">
            <div class="col-md-12">
				
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Quantity</th>
                                <th style="text-align:center;">Remove</th>
                            </tr>    
                        </thead>
                        <tbody>
							<?php 
							foreach($cart as $item)
							{
								echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
								echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
								echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
								echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
								echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
							?>
                            <tr>
								<td ><?php echo $item['name'] ?></td>
								<td ><img src="<?php echo base_url(); ?>upload/products/<?php echo $item['image'] ?>" style="width:60px;height:60px;" class="img-responsive"></td>
								
                                <td class="qty">
									<?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" class="quantity-spinner" '); ?>
                                    <!--input class="quantity-spinner" type="text" value="<?php echo $item['qty'] ?>" name="cart"-->
                                </td>
                               
                                <td>
									
                                    <div class="remove" style="text-align:center;">
										<a href="<?php echo base_url(); ?>Front/remove/<?php echo $item['rowid']; ?>" style="color:red;">Delete</a>
                                          
                                    </div>
                                </td>
                            </tr>
							<?php 
							}
							?>
                            
                        </tbody>    
                    </table>
                </div>
				
				
            </div>     
        </div>
		<div class="row">&nbsp;</div>
		<div class="row">
			<div class="col-md-2">
				<input class="thm-btn bgclr-1" type="submit" value="Update Cart" style="    margin: 5px 0;"/>
				
			</div>
			<div class="col-md-3">
				<a class="thm-btn bgclr-1" href="<?php echo base_url(); ?>" style="    margin: 5px 0;">Continue Shopping</a>
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-3">
				<a class="thm-btn bgclr-1" href="<?php echo base_url(); ?>Quote/" style="margin: 5px 0;">Proceed to Checkout</a>
			</div>
		</div>
		<?php echo form_close(); ?>
		
		<?php 
		}
		else
		{ ?>
		<div class="row">
			<div class="col-lg-12">
				<img src="<?php echo base_url(); ?>assets/images/empty-cart.png" class="img-responsive" style="display:block;margin:0 auto;">
				<!--span style="font-size: 18px;text-align: center;" class="product-name"> Your cart has been empty add item!!</span-->
			</div>
		</div>
	   <?php }
		?>
    </div>
</section>         
<!--End cart area-->

<script type="text/javascript">
					function clear_cart() {
						var result = confirm('Are you sure want to clear all bookings?');
						if (result) {
							window.location = "<?php echo base_url(); ?>Front/remove/all";
						} else {
							return false; // cancel button
						}
					}
			</script>