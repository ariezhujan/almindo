<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Jumlah Client</p>
                  <h3 class="card-title"><span id="watching_count_client"></span>
                    <small>/&nbsp;Client</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-default">person</i>
                    <a href="<?php echo site_url(); ?>admin/member_view">Lihat Detail...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Jumlah Staff</p>
                  <h3 class="card-title"><span id="watching_count_staff"></span>
                    <small>/&nbsp;Staff</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">person</i>
					<a href="<?php echo site_url(); ?>admin/manage_user/akses_staff">Lihat Detail...</a>
                  </div>
                </div>
              </div>
            </div>
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
					<a href="<?php echo site_url(); ?>admin/order/order_status">Lihat Detail...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-10 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-truck"></i>
                  </div>
				  <span class="row">
					  <span class="col-lg-5 col-md-6 col-sm-6">
					   <p class="card-category">Jumlah Barang/Charcoal Masuk Stock Pile<br>
						  Bulan, <?php
							$tgl=date('M - Y');
							echo $tgl;
						  ?>
						  </p>
						  <h3 class="card-title"><span id="barang_masuk"></span>
						  <small>/&nbsp;Kedatangan</small>
						  </h3>
							  <span class="stats">
								<a href="<?php echo site_url(); ?>admin/stockphile/barang_masuk"><span class="material-icons" style="color:default">update</span>Lihat Detail...</a>
							  </span>
					  </span>
					  <span class="col-lg-2 col-md-2 col-sm-2"></span>
					  <span class="col-lg-5 col-md-6 col-sm-6">
					   <p class="card-category">Jumlah Barang/Charcoal Keluar Stock Pile<br>
						  Bulan, <?php
							$tgl=date('M - Y');
							echo $tgl;
						  ?>
						  </p>
						  <h3 class="card-title"><span id="barang_keluar"></span>
						  <small>/&nbsp;Pengiriman</small>
						  </h3>
							 <span class="stats">
								<a href="<?php echo site_url(); ?>admin/stockphile/barang_keluar"><span class="material-icons" style="color:default">update</span>Lihat Detail...</a>
							  </span>
					  </span>
				  </span>
                </div>
              </div>
            </div>
          </div>