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
	
	<div class="col-lg-12">
      <!-- Traffic sources -->
		<div class="panel panel-flat">
			 <div class="panel-heading">
				<div class="col-md-3">
					<h3 class="panel-title">Add New Product
				</h3>
				</div>
				<div class="col-md-6">
					<!--h3 class="panel-title">Add New Category
				</h3-->
					 <?php if($message == "FAILED") { ?>
				   <div class="alert alert-danger">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Action Failed !!! </strong>
				   </div>
				   <?php } else if($message == "SUCCESS") {  ?>
				   <div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Success !!! </strong> New Product Created successfully
				   </div>
				   <?php } ?>
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
	<form class="form-horizontal form-validate-jquery" action="<?php echo base_url();?>Product/Add" method="POST" enctype="multipart/form-data">
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
								<input type="text" name="productname" class="form-control" required="required" placeholder="Product Name">
							</div>
						</div>
						<!-- /basic text input -->
						<!-- Basic textarea -->
						<div class="form-group">
							<label class="control-label col-lg-3">Product Description<span class="text-danger">*</span></label>
							<div class="col-lg-9">
								<textarea rows="3" cols="3" name="productdescription" id="editor-full" class="form-control" required="required" placeholder="Product Description"></textarea>
							</div>
						</div>
						<!-- /basic textarea -->
						<div class="form-group">
							<label class="control-label col-lg-3">Quantity</label>
							<div class="col-lg-9">
								<div class="input-group">
									<!--span class="input-group-addon"><i class="icon-cube2"></i></span-->
									<input type="text" name="digits" class="form-control quantity" required="required" placeholder="Enter Quantity" id="quantity">
									<!--span class="input-group-addon">.00</span-->
								</div>
							</div>
						</div>
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
						<label class="control-label col-md-3">Images</label>
						<div class="col-md-9">
							<input name="bg_banner" class="form-control file-styled" type="file" required="required">
							<span class="help-block">Accepted formats: PNG, JPG. Max file size 2Mb, <label style="color:red">Resolution (  )</label></span>
						</div>
					</div>

				</fieldset>
				<div class="text-right">
					<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
					<input type="submit" class="btn btn-primary icon-arrow-right14 position-right" value="Submit" name="Submit_product_data"> 
				</div>
			</div>
		</div>
   </div>
   </form>
</div>
