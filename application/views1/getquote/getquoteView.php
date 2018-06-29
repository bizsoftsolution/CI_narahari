<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li class="active">Order Details</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
            
			<div class="col-md-6">
				<h3 class="panel-title">Order Details
			</h3>
			</div>
			<div class="col-md-6">
				<div style="text-align:right;">
               <a href="<?php echo  base_url();?>Getquote" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
			</div>
         </div>
		 <br>
		 <hr/>
         <div class="container-fluid">
            <!-- content Starts Here-->
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <br>
					<hr style="box-shadow: 0 10px 20px rgba(0,0,0,.19), 0 6px 6px rgba(0,0,0,.23);">
					<h3 style="color: #2196f3;font-weight: bold;">Personnal Details</h3>
					<hr style="box-shadow: 0 10px 20px rgba(0,0,0,.19), 0 6px 6px rgba(0,0,0,.23);">
					<?php 
						$id = $this->uri->segment(3);
						$order_details_val = $this->db->get_where('tbl_checkout', array("checkout_id"=>$id))->result();
						foreach($order_details_val as $order_details)
						{
					?>
					<form name="add"   method="POST" action="" class="form-horizontal">
					<div class="table-responsive">
						<table class="table table-striped" style="border:1px solid #c3b9b9;">
							
							<tr>
								<th style="width:50%">Name</th>
								<td style="width:50%"><?php echo $order_details->firstname.' '.$order_details->lastname; ?></td>
							</tr>
							<tr>
								<th>Address</th>
								<td><?php echo $order_details->address1.'<br>'.$order_details->address2; ?></td>
							</tr>
							<tr>
								<th>Phone</th>
								<td><?php echo $order_details->phone; ?></td>
							</tr>
							<tr>
								<th>Email ID</th>
								<td><?php echo $order_details->email; ?></td>
							</tr>
							<tr>
								<th>City</th>
								<td><?php echo $order_details->city; ?></td>
							</tr>
							<tr>
								<th>Country</th>
								<td><?php echo $order_details->country; ?></td>
							</tr>
						
						</table>
					</div>
						<div style="margin:15px 0;"></div>
						<?php 
						}
					?>
					<hr style="box-shadow: 0 10px 20px rgba(0,0,0,.19), 0 6px 6px rgba(0,0,0,.23);">
					<h3 style="color: #2196f3;font-weight: bold;">Product Details</h3>
					<hr style="box-shadow: 0 10px 20px rgba(0,0,0,.19), 0 6px 6px rgba(0,0,0,.23);">
					<?php 
						//$id = $this->uri->segment(3);
						//$order_val = $this->db->get_where('tbl_order_details', array("id"=>$id))->result();
						foreach($getquoteView as $order)
						{
					?>
					
					<div class="table-responsive">
						<table class="table table-striped" style="border:1px solid #c3b9b9;">
							<tr>
								<th>Product Name</th>
								<td><?php echo $order->product_name; ?></td>
							</tr>
							<tr>
								<th>Quantity</th>
								<td><?php echo $order->qty; ?></td>
							</tr>
							
							
						
						</table>
					</div>
						<div style="margin:15px 0;"></div>
						
					<!--div class="table-responsive">
						<table class="table table-striped" style="border:1px solid #c3b9b9;">
							<tr>
								<th style="width:50%"><b>Product Status</b></th>
								<td style="width:50%">
									<select class="form-control" name="orderstatus">
										<option label="Status"></option>
										<option value="DELIVERED">DELIVERED</option>
										<option value="PROCESSING">PROCESSING</option>
									</select>
								</td>
								
								
							</tr>
						</table>
					</div>

					
				<div style="margin:25px 0;"></div>	
                  <div style="text-align:center">
                     <input type="submit" name="submit" value="Update" class="btn btn-success">
                     <input type="reset" value="Reset" class="btn btn-danger">
                  </div-->
               </form>
			   <?php 
						}
					?>
              
               <br><br>
            </div>
         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
   