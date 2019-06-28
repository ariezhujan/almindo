<div class="row">
            <div class="col-md-6" style="margin-top:-40px">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Profile</h4>
                  <p class="card-category"><?php echo $this->session->userdata('ses_nama');?></p>
                </div>
                <div class="card-body">
				<?php foreach($akses as $su){?>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">NIK</label>
                          <p><?php echo $su->nik ?></p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">nama</label>
                          <p><?php echo $su->nama ?></p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">USERNAME</label>
                          <p><?php echo $su->username ?></p>
                        </div>
                      </div>
                      <div class="col-md-12"><hr></div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">EMAIL</label>
                          <p><?php echo $su->email ?></p>
                        </div>
                      </div>
					  <div class="col-md-12"><hr></div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">PASSWORD</label>
                          <p><?php echo $su->password ?></p>
                        </div>
                      </div>
                    </div>
				<?php } ?>
                      </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
 </div>