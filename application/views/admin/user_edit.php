<div id="order">
<a href="<?php echo base_url() ?>admin/editprofile" class="close-order" title="Close"><i class="material-icons">cancel</i></a>
     <div class="windoworder">
			<br>			
			<br>			

<div class="row">
<div class="col-md-3"></div>
			 <div class="col-md-6" style="margin-top:-40px">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit</h4>
                  <p class="card-category"><?php echo $this->session->userdata('ses_nama');?></p>
                </div>
                <div class="card-body">
				<form action="<?php echo base_url() ?>index.php/admin/editprofile/save" method="post">
				<?php foreach($member as $su){ ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">COMPANY NAME </label>
                          <input type="text" name="company_name" class="form-control" value="<?php echo $su->company_name ?>" required="required">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">COMPANY OWNER</label>
                          <input type="text" name="company_owner" class="form-control" value="<?php echo $su->company_owner ?>" required="required">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">COMPANY PHONE NUMBER</label>
                          <input type="text" name="company_phone_number" class="form-control" value="<?php echo $su->company_phone_number ?>" required="required">
                        </div>
                      </div>
                    </div>
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">COMPANY ADDRESS</label>
                          <input type="text" name="address" class="form-control" value="<?php echo $su->address ?>" required="required">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">PERSONAL IN CHARGE</label>
                          <input type="text" name="pic" class="form-control" value="<?php echo $su->pic ?>" required="required">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">PHONE NUMBER PERSONAL IN CHARGE</label>
                          <input type="number" name="no_pic" class="form-control" value="<?php echo $su->no_pic ?>" required="required">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">NAME OF BANK</label>
                          <input type="text" name="bank" class="form-control" value="<?php echo $su->bank ?>" required="required">
                        </div>
                      </div>
					  <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">BRANCH OF BANK</label>
                          <input type="text" name="branch_bank" class="form-control" value="<?php echo $su->branch_bank ?>" required="required">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">ACCOUNT NUMBER OF BANK</label>
                          <input type="number" name="account_number" class="form-control" value="<?php echo $su->account_number ?>" required="required">
                        </div>
                      </div>
                    </div>
                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">EMAIL</label>
                          <input type="email" name="email" class="form-control" value="<?php echo $su->email ?>" required="required">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">PASSWORD</label>
                          <input type="text" name="password" class="form-control" value="<?php echo $su->password ?>" required="required">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right "><i class="fa fa-archive fa-lg text-default"></i>&nbsp;Save Profile</button>
                    <div class="clearfix"></div>
					<?php ; } ?>
                  </form>
                </div>
              </div>
            </div>
<div class="col-md-3"></div>			
</div>

</div>
</div>