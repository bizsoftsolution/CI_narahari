<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
      <li><a href="">Dashboard</a></li>
      <li class="active">Astro Mail List</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
        <div class="panel-heading">
           <h2 class="panel-title">Astro Mail List</h2>
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
                 <th>Date</th>
                 <th>email</th>
                 <th>Personnal Details</th>
                 <th>Contact Details</th>
                 <th>Language</th>
                 <th>Amount</th>

               </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
//			$data = $this->db->get('tbl_booking')->result();
			
              foreach($astromailList as $row) {
            ?>
              <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row->date; ?></td>
              <td><?php echo $row->email; ?></td>
              <td>
			  <b>Name :</b> <?php echo $row->name; ?><br>
			  <b>Father Name :</b> <?php echo $row->fathername; ?><br>
			  <b>DOB :</b> <?php echo $row->dob; ?><br>
			  <b>Time :</b> <?php echo $row->time; ?><br>
			  <b>Gender :</b> <?php echo $row->gender; ?><br>
			  <b>Place :</b> <?php echo $row->place; ?><br>
			  
			  </td>
              <td>
				 <b>Address</b> <?php echo $row->address_1; ?>, <?php echo $row->address_2; ?><br>
				  <b>State :</b> <?php echo $row->state; ?><br>
				  <b>Country :</b> <?php echo $row->country; ?><br>
				  <b>Pincode :</b> <?php echo $row->pincode; ?><br>
				  <b>Telephone :</b> <?php echo $row->telephone; ?><br>
				  <b>Mobile :</b> <?php echo $row->mobile; ?><br>
			  </td>
              <td><?php echo $row->language; ?></td>
              <td><?php echo $row->amount; ?></td>
			 
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
