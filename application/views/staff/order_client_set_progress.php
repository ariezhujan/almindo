<div id="order">
<?php 
$status = $this->input->get('status');
$id = $this->input->get('id');
$po = $this->input->get('po');
$calories = $this->input->get('calories');
$size = $this->input->get('size');
$company_name = $this->input->get('company_name');
?>
<a href="<?php echo base_url() ?>staff/order_client_progress?id=<?php echo $id ?>&company_name=<?php echo $company_name ?>&po=<?php echo $po ?>&calories=<?php echo $calories ?>&size=<?php echo $size ?>" class="close-order" title="Close"><i class="material-icons">cancel</i></a><
     <div class="windoworder">
			<br>			
			<br>
<div class="row">
  <div class="col-sm-12 col-md-4 col-lg-4"></div>
  <div class="col-sm-12 col-md-4 col-lg-4">
    <div class="card">
      <div class="card-body">
<form action="<?php echo site_url() ?>staff/order_client_progress/update_progress?id=<?php echo $id ?>&company_name=<?php echo $company_name ?>&po=<?php echo $po ?>&calories=<?php echo $calories ?>&size=<?php echo $size ?>" method="post">

			<input type="hidden" name="no" value="<?php echo $this->input->get('no'); ?>">
			<input type="hidden" name="id" value="<?php echo $this->input->get('id'); ?>">
			<input type="hidden" name="po" value="<?php echo $this->input->get('po'); ?>">
			<?php if($status == 0){?>
			<div class="switch">
				<label>
				  <input value="33" name="status" type="checkbox">
				  &nbsp;<span class="lever"></span>
				  PROGRESS 
				</label>
			</div>
			&nbsp;&nbsp;
			<div class="switch">
				<label>
				  <input value="66" name="status" type="checkbox" disabled>
				  <span class="lever"></span>
				  DELIVERY 
				</label>
			</div>
			&nbsp;&nbsp;
			<div class="switch">
				<label>
				  <input value="99" name="status" type="checkbox" disabled>
				 &nbsp;&nbsp;<span class="lever"></span>
				  DELIVERED 
				</label>
			</div>
			<?php } elseif($status == 33){ ?>
			<div class="switch">
				<label>
				  <input value="33" name="status" type="checkbox" checked>
				  &nbsp;<span class="lever"></span>
				  PROGRESS 
				</label>
			</div>
			&nbsp;&nbsp;
			<div class="switch">
				<label>
				  <input value="66" name="status" type="checkbox">
				  <span class="lever"></span>
				  DELIVERY 
				</label>
			</div>
			&nbsp;&nbsp;
			<div class="switch">
				<label>
				  <input value="99" name="status" type="checkbox" disabled>
				  &nbsp;&nbsp;<span class="lever"></span>
				  DELIVERED 
				</label>
			</div>			
			<?php } elseif($status == 66){ ?>
			<div class="switch">
				<label>
				  <input value="33" name="status" type="checkbox"checked>
				  &nbsp;<span class="lever"></span>
				  PROGRESS 
				</label>
			</div>
			&nbsp;&nbsp;
			<div class="switch">
				<label>
				  <input value="66" name="status" type="checkbox" checked>
				  <span class="lever"></span>
				  DELIVERY 
				</label>
			</div>
			&nbsp;&nbsp;
			<div class="switch">
				<label>
				  <input value="99" name="status" type="checkbox">
				  &nbsp;&nbsp;<span class="lever"></span>
				  DELIVERED 
				</label>
			</div>			
			<?php } elseif($status == 99){ ?>
			<div class="switch">
				<label>
				  <input value="33" name="status" type="checkbox"checked>
				  <span class="lever"></span>
				  &nbsp;PROGRESS 
				</label>
			</div>
			&nbsp;&nbsp;
			<div class="switch">
				<label>
				  <input value="66" name="status" type="checkbox" checked>
				  <span class="lever"></span>
				  DELIVERY 
				</label>
			</div>
			&nbsp;&nbsp;
			<div class="switch">
				<label>
				  <input value="99" name="status" type="checkbox" checked>
				  &nbsp;&nbsp;<span class="lever"></span>
				  DELIVERED 
				</label>
			</div>			
			<?php } ?>
		  &nbsp;&nbsp;&nbsp;
			<br>
			<br>
			<input style="border-radius:150px" type="submit" class="btn btn-primary" value="send">
		  
		</form>
      </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-4 col-lg-4"></div>
 </div>
</div>