<div id="order">
<?php 
$id = $this->input->get('id');
$company_name = $this->input->get('company_name');
?>
<a href="<?php echo base_url() ?>staff/charcoalpricing?id=<?php echo $id; ?>&company_name=<?php echo $company_name; ?>" class="close-order" title="Close"><i class="material-icons">cancel</i></a>
     <div class="windoworder">
			<br>			
			<br>
<div class="row">			
			 <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:-40px">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">EDIT CHARCOAL COMBINE</h4>
				  <p><?php echo $this->input->get('company_name'); ?></p>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
						<form method="post" action="<?php echo base_url() ?>staff/charcoalpricing/update?id=<?php echo $this->input->get('id'); ?>&company_name=<?php echo $company_name = $this->input->get('company_name')?>">
							<input type="hidden" name="no" value="<?php echo $this->input->get('no'); ?>">
							<input type="hidden" name="id" value="<?php echo $this->input->get('id'); ?>">
							<div class="row">
							<div class="col-lg-2 col-md-3 col-sm-12">
							<p><?php echo $this->input->get('company_name'); ?></p>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12">
								<p><?php echo $this->input->get('calories'); ?></p>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12">
								<p><?php echo $this->input->get('size'); ?></p>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12">
								<p><input type="number" class="form-control" class="uang" name="pricing" placeholder="<?php echo $this->input->get('pricing'); ?>" required="required"></p>
							</div>
							<div class="col-md-12"><hr></div>
							</div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right ">Update Pricing</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
	</div>	
  </div>
</div>
		