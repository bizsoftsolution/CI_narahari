<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Get Quote List</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
        <div class="panel-heading">
           <h2 class="panel-title">Get Quote List</h2>
           <div style="text-align:right;">
              <!--a class="btn bg-purple" href="<?php echo  base_url();?>"><i class="glyphicon glyphicon-plus"></i> Add </a-->
              <!--a href="<?php echo  base_url();?>" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a-->
           </div>
           <hr/>
        </div>
         <table class="table datatable-button-print-columns" id="dadadad">
            <thead>
               <tr>

                 <th>Sno</th>
                 <th>Name</th>
                 <th>Phone</th>
                 <th>Email</th>
                 <th>City</th>
                 <th>Country</th>
                 <th>Action</th>

               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
//			$data = $this->db->get('tbl_booking')->result();
			
              foreach($getquoteList as $row) {
            ?>
              <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row->firstname.' '.$row->lastname; ?></td>
              <td><?php echo $row->phone; ?></td>
              <td><?php echo $row->email; ?></td>
              <td><?php echo $row->city; ?></td>
              <td><?php echo $row->country; ?></td>
              <td>
				<a href="<?php echo base_url(); ?>Getquote/View/<?php echo $row->checkout_id;?>" title="Edit" class="btn bg-primary"><!--i class="glyphicon glyphicon-pencil "></i-->View
				</a>&nbsp;
				<!--a href="<?php echo base_url(); ?>Product/Delete/<?php echo $row->id;?>"  title="Delete" class="btn bg-danger remove" onclick="return confirm('Are You Sure want to Delete');"><i class="glyphicon glyphicon-remove "></i></a-->
			  </td>
			 
              </tr>
			<?php    
			$i++;    }
			?>      

            </tbody>
         </table>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
