<div id="order">
<?php 
$id = $this->input->get('id');
$company_name = $this->input->get('company_name');
$x = 1;
?>
<a href="<?php echo base_url() ?>staff/charcoalpricing?id=<?php echo $id; ?>&company_name=<?php echo $company_name; ?>" class="close-order" title="Close"><i class="material-icons">cancel</i></a>
     <div class="windoworder">
			<br>			
			<br>
<div class="row">			
			 <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:-40px">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">SET CHARCOAL COMBINE</h4>
				  <p><?php echo $this->input->get('company_name'); ?></p>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
						<form method="post" action="<?php echo base_url() ?>staff/charcoalpricing/save?id=<?php echo $this->input->get('id'); ?>&company_name=<?php echo$company_name = $this->input->get('company_name')?>">
							<div class="inc">
						<div class="controls">
						<div class="row" class="remove_this">
								<div class="col-lg-1 col-md-1 col-sm-12">
								</div>
								<input type="hidden" name="id[]" value="<?php echo $this->input->get('id'); ?>">
								<input type="hidden" name="company_name[]" value="<?php echo $this->input->get('company_name'); ?>">
								<div class="col-lg-2 col-md-2 col-sm-12">
									<select class="form-control" name="calories[]" required="required">
									<option disabled selected>Select Calories</option>
										<option value="1"> HIGH</option>
										<option value="2"> MEDIUM</option>
										<option value="3"> LOW</option>
									</select>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12">
									<select class="form-control" name="size[]" required="required">
									<option disabled selected>Select Size</option>
										<option value="1"> FINE</option>
										<option value="2"> ROM</option>
										<option value="3"> ASALAN</option>
										<option value="4"> NUT</option>
										<option value="5"> LAMPIE</option>
									</select>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12">
									<input type="number" type="width:10px" class="form-control" class="uang" name="pricing[]" placeholder="Pricing(Rp)" required="required">
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12">
									<a href="#" rel='tooltip' title='Delete Delivery'><i class='material-icons' style='font-size: 25px;color:red'>cancel</i></a>
								</div>
								<div class="col-md-12"><hr></div>
							</div>
                        </div>
                      </div>
					  <button type="submit" class="btn btn-primary pull-right ">Set Pricing</button>
								<div class="clearfix"></div>
                  </form>
				  <button class="btn btn-info" type="submit" id="append" name="append">Tambah Input</button>
                    </div>
    <br>
    <br>
    </div>
    </div>
                </div>
              </div> 
            </div>
	</div>	
  </div>
</div>
