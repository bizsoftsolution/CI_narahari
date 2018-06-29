
<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="<?php echo base_url();?>Dashboard">Dashboard</a></li>
      <li class="active">Product</li>
   </ul>
</div>
<br>
<style>
	.form-horizontal .radio, .form-horizontal .checkbox, .form-horizontal .radio-inline, .form-horizontal .checkbox-inline
	{
		padding-top: 0px;
	}
	.checkbox .checker, .form-horizontal .checkbox-inline .checker
	{
		top:0px;
	}
	.checkbox .checker, .checkbox-inline .checker
	{
		top: 0px;
	}
</style>
<!-- Main charts -->
<div class="row">
	<?php 
		foreach($product as $row)
		{
	?>
	<div class="col-lg-12">
      <!-- Traffic sources -->
		<div class="panel panel-flat">
			 <div class="panel-heading">
				<div class="col-md-3">
					<h3 class="panel-title"><?php echo $row->product_name; ?>
				</h3>
				</div>
				<div class="col-md-6">
					<!--h3 class="panel-title">Add New Category
				</h3-->
				</div>
				<div class="col-md-3">
					<div style="text-align:right;">
				   <a href="<?php echo  base_url();?>Product" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
				</div>
				</div>
			 </div>
			 <div class="panel-body"></div>
		</div>
	</div>
	
	<form class="form-horizontal form-validate-jquery" action="<?php echo base_url();?>Product/Edit/<?php echo $row->id; ?>" method="POST" enctype="multipart/form-data">
	<div class="col-lg-12">
		<div class="panel panel-flat">
			<div class="panel-heading"></div>
				<div class="panel-body">
					<fieldset class="content-group">
						<legend class="text-bold">Product Details</legend>
						
						<!-- Basic text input -->
						<div class="form-group">
							<label class="control-label col-lg-3">Product Name<span class="text-danger">*</span></label>
							<div class="col-lg-9">
								<input type="text" name="productname" class="form-control" required="required" value="<?php echo $row->product_name; ?>">
							</div>
						</div>
						<!-- /basic text input -->
						<!-- Basic textarea -->
						<div class="form-group">
							<label class="control-label col-lg-3">Product Description<span class="text-danger">*</span></label>
							<div class="col-lg-9">
								<textarea rows="5" cols="5" name="productdescription" class="form-control" required="required"><?php echo $row->product_desc; ?></textarea>
							</div>
						</div>
						<!-- /basic textarea -->
						<!-- Digits only -->
						<div class="form-group">
							<label class="control-label col-lg-3">Quantity</label>
							<div class="col-lg-9">
								<div class="input-group">
									<!--span class="input-group-addon"><i class="icon-cube2"></i></span-->
									<input type="text" name="digits" class="form-control quantity" required="required" id="quantity" value="<?php echo $row->product_qty; ?>">
									
								</div>
							</div>
						</div>
						
						<!-- /digits only -->
					</fieldset>
				</div>
		</div>
      <!-- /traffic sources -->
   </div>

   <div class="col-lg-12">
		<div class="panel panel-flat">
			<div class="panel-heading"></div>
			<div class="panel-body">
				<fieldset class="content-group">
					<legend class="text-bold">Product Images</legend>
					<div class="form-group">
                        <label class="control-label col-md-2">Images</label>
						<div class="col-md-10">
							<img src="<?php echo base_url(); ?>upload/products/<?php echo $row->product_img; ?>" class="img-responsive" style="width:120px; height:120px;margin:0 0 5px 0;">
							<input type="hidden" name="already_bannerimg" value="<?php echo $row->product_img; ?>">
						</div>
						<div class="col-lg-12"></div>
						<label class="control-label col-md-2"></label>
						<div class="col-md-10">
							<input name="edit_bg_image" class="form-control file-styled" type="file" value="<?php echo $row->product_img; ?>">
                           <span class="help-block">Accepted formats: PNG, JPG. Max file size 2Mb, <label style="color:red">Resolution (  )</label></span>
						</div>
					</div>
					
				</fieldset>
				<div class="text-right">
					<input type="submit" class="btn btn-primary icon-arrow-right14 position-right" value="Update" name="Update_product_data"> 
				</div>
			</div>
		</div>
   </div>
   </form>
   <?php 
		}
   ?>
</div>
<!-- /dashboard content -->
