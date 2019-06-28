<div id="order">
<?php 
$paid_status = $this->input->get('paid_status');
?>
<a href="<?php echo base_url() ?>staff/payment_client" class="close-order" title="Close"><i class="material-icons">cancel</i></a>
     <div class="windoworder">
			<br>			
			<br>
<div class="row">
  <div class="col-sm-12 col-md-4 col-lg-4"></div>
  <div class="col-sm-12 col-md-4 col-lg-4">
    <div class="card">
      <div class="card-body">
		<form action="<?php echo site_url() ?>staff/payment_client/payment_update" method="post">
			<input type="hidden" name="no_order" value="<?php echo $this->input->get('no_order'); ?>">
			<input type="hidden" name="id" value="<?php echo $this->input->get('id'); ?>">
			<input type="hidden" name="po" value="<?php echo $this->input->get('po'); ?>">
			<div class="switch">
			<?php if($paid_status == 1){?>
			<label>
			  NO PAID
			  <input value="1" name="paid_status" type="checkbox" checked>
			  <span class="lever"></span>
			  PAID
			</label>
			<?php } else{ ?>
			<label>
			  NO PAID
			  <input value="1" name="paid_status" type="checkbox">
			  <span class="lever"></span>
			  PAID
			</label>
			<?php } ?>
			&nbsp;&nbsp;&nbsp;
			<input style="border-radius:150px" type="submit" class="btn btn-primary" value="send">
		  </div>
		</form>
      </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-4 col-lg-4"></div>
 </div>
</div>