
            <!--end-single-heading-->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div style="padding:25px;margin:25px;">
						<?php if($this->session->flashdata('SUCCESSMSG')) 
						{ ?>
                        <div role="alert" class="alert alert-success">
                                <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                                <strong>Well done!</strong>
                                <?php echo $this->session->flashdata('SUCCESSMSG'); ?>
                        </div>
						<?php } ?>
						</div>
					</div>
					<div class="col-md-12 text-center">
						<a href="<?php echo base_url(); ?>" class="btn btn-success" style="margin:25px 0px;">Back To Home</a>
					</div>
				</div>
			</div>
				