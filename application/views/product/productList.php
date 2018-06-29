<script type="application/javascript">
/** After windod Load */
$(window).bind("load", function() {
  window.setTimeout(function() {
    $(".alert").fadeTo(300, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);
});
</script>
<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li class="active">Product</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
		
		<div class="panel-body">
			<div class="tabbable">
				<ul class="nav nav-tabs nav-tabs-highlight">
					<li class="active"><a href="" >Product List</a></li>
				</ul>

				<div class="tab-content">
					<div class="active">
      <!-- Traffic sources -->
			<div class="row">
				<div class="col-md-6">
					<?php
					if($this->session->flashdata('notification')) 
					{
					$message = $this->session->flashdata('notification');
					?>
					<div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?>

					</div>
					<?php
					}
					?>
				</div>
				<div class="col-md-6">
					<div style="text-align:right;">
					  <a class="btn bg-purple" href="<?php echo  base_url();?>Product/Add"><i class="glyphicon glyphicon-plus"></i> Add </a>
				   </div>
				</div>
			</div>
			
           <hr/>
         <table class="table datatable-button-print-columns">
            <thead>
               <tr>

                 <th>Sno </th>
                 <th>Name</th>
                 <!--th>Product Description</th-->
                 <th>Image</th>
                 <th style="width:180px;">Action </th>
               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
              foreach($productList as $row) {
            ?>
              <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row->product_name;?></td>
              <!--td><?php echo $row->product_desc;?></td-->
              <td><img src="<?php echo base_url(); ?>upload/products/<?php echo $row->product_img;?>" class="img-responsive" style="width:75px;height:75px;"/></td>
              
             
              <td style="text-align:center">
				<a href="<?php echo base_url(); ?>Product/Edit/<?php echo $row->id;?>" title="Edit" class="btn bg-success"><i class="glyphicon glyphicon-pencil "></i>
              </a>&nbsp;<a href="<?php echo base_url(); ?>Product/Delete/<?php echo $row->id;?>"  title="Delete" class="btn bg-danger remove" onclick="return confirm('Are You Sure want to Delete');"><i class="glyphicon glyphicon-remove "></i></a>
				<!--ul class="icons-list">
					<li class="dropdown text-muted">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-stack3 position-left" style="margin-right:0px;"></i> <span class="caret"></span></a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="<?php echo base_url(); ?>Product/Edit/<?php echo $row->id;?>" title="Edit" ><i class="glyphicon glyphicon-pencil "></i>
              Edit</a></li>
							<li><a href="<?php echo base_url(); ?>Product/Delete/<?php echo $row->id;?>"  title="Delete" onclick="return confirm('Are You Sure want to Delete');"><i class="glyphicon glyphicon-remove "></i>Delete</a></li>
							
						</ul>
					</li>
				</ul-->
              </td>
              </tr>
              <?php $i++;}?>


            </tbody>
         </table>
      <!-- /traffic sources -->
					</div>
				</div>
			</div>
		</div>
		
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
