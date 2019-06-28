<div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Jadwal pengiriman Hari Ini <br>
				    <?php
					$tgl=date('l - M d , Y');
					echo $tgl;
					?>
				  </p>
                  <h3 class="card-title"><span id="watching_count_pengiriman_today"></span>
				  <small>/&nbsp;Pengiriman</small>
				  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> 
					<a href="<?php echo site_url(); ?>member/viewpoorder">Lihat Detail...</a>
                  </div>
                </div>
              </div>
            </div>
 </div>
