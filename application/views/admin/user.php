<div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="margin-top:-40px">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Profile</h4>
                  <p class="card-category"><?php echo $this->session->userdata('ses_nama');?></p>
                  <?php echo $this->session->flashdata('notif')?>
                </div>
                <div class="card-body">
				<?php foreach($member as $su){ ?>
                    <div class="row" style="text-align: center">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">COMPANY NAME</label>
                          <p><?php echo $su->company_name ?></p>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">COMPANY OWNER</label>
                          <p><?php echo $su->company_owner ?> </p>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">COMPANY PHONE NUMBER</label>
                          <p><?php echo $su->company_phone_number ?></p>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-12"><hr></div>
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">COMPANY ADDRESS</label>
                          <p><?php echo $su->address ?></p>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-12"><hr></div>
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">PERSONAL IN CHARGE</label>
                          <p><?php echo $su->pic ?></p>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">PHONE NUMBER PERSONAL IN CHARGE</label>
                          <p><?php echo $su->no_pic ?></p>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-12"><hr></div>
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">NAME OF BANK</label>
                          <p><?php echo $su->bank ?></p>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">BRANCH OF BANK</label>
                          <p><?php echo $su->branch_bank ?></p>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">ACCOUNT NUMBER OF BANK</label>
                          <p><?php echo $su->account_number ?></p>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-12"><hr></div>
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">EMAIL</label>
                          <p><?php echo $su->email ?></p>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">PASSWORD</label>
                          <p><?php echo $su->password ?></p>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <a href="<?php echo site_url(); ?>admin/editprofile/index1" class="btn btn-primary" data-toggle="tooltip" title="Input Data"><i class="fa fa-cog fa-lg text-default"></i>&nbsp;Edit Profile</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
					<?php ; } ?>
                </div>
              </div>
            </div>
 </div>
		  <div id="toast"><div id="img"><img src="<?php echo base_url() ?>assets/images/like.png" nosend="1" border="0" width="100" height="100" alt="almindo" title="almindo"></div><div id="desc">Perubahan data sukses...</div></div>