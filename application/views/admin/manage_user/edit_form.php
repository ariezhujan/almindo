
<div id="order">
<a href="<?php echo site_url();?>admin/manage_user/akses_staff" class="close-order" title="Close"><i class="material-icons">cancel</i></a>
     <div class="windoworder">
		 <div class="card">
		  <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title"><h5>CHANGE <?php if($this->input->get('divisi') == 2){echo"STOCK PILE";}else{echo"FINANCE";} ?>  AKSES</h5><h3><?php echo $this->input->get('nama') ?></h3></span>
                    </div>
                  </div>
                </div>
            <div class="card-body">
                <form action="<?php echo site_url() ?>admin/manage_user/add_akses_staff/update_akses" method="post">
				<input type="hidden" value="<?php echo $this->input->get('nik') ?>" name="nik">
					<br>	
					<div class="row">	
						<div class="col-lg-3 col-md-3 col-sm-12">
							<label>   							 
								<span>Profile<hr></span>		
							</label> 
							<div class="switch">
							<?php foreach($staff as $su){?>
							<?php if($su->profile == 1){?>
								<label>
								  <input value="1" name="profile" type="checkbox" checked>
								  <span class="lever"></span>
								  View Profile 
								</label>
							<?php }else{?>
							<label>
								  <input value="1" name="profile" type="checkbox">
								  <span class="lever"></span>
								  View Profile 
								</label>
							<?php }}?>
							</div>		
						</div>			
					</div>
					<hr>
					<div class="row">						
						<div class="col-lg-3 col-md-3 col-sm-12">
							<label>   							 
								<span>Payment<hr></span>		
							</label> 
						<div class="switch">
							<?php foreach($staff as $su){?>
							<?php if($su->payment == 1){?>
								<label>
								  <input value="1" name="payment" type="checkbox" checked>
								  <span class="lever"></span>
								  Payment&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</label>
							<?php }else{ ?>
								<label>
								  <input value="1" name="payment" type="checkbox" >
								  <span class="lever"></span>
								  Payment&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</label>
							<?php }} ?>
							</div>	
						</div>						
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<label>   							 
								<span>Receivable<hr></span>		
							</label>
						<div class="switch">
							<?php foreach($staff as $su){?>
							<?php if($su->receivable == 1){?>
								<label>
								  <input value="1" name="receivable" type="checkbox" checked>
								  <span class="lever"></span>
								  Receivable
								</label>
							<?php }else{ ?>
							<label>
								  <input value="1" name="receivable" type="checkbox">
								  <span class="lever"></span>
								  Receivable
								</label>
							<?php }}?>
							</div>	
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12">
						</div>
					</div>				
					<hr>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<label>   							 
								<span>Pricing<hr></span>		
							</label>
						<div class="switch">
							<?php foreach($staff as $su){?>
							<?php if($su->pricing == 1){?>
								<label>
								  <input value="1" name="pricing" type="checkbox" checked>
								  <span class="lever"></span>
								  Set Pricing
								</label>
							<?php }else{ ?>
							<label>
								  <input value="1" name="pricing" type="checkbox">
								  <span class="lever"></span>
								  Set Pricing
								</label>
							<?php }}?>
							</div>	
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12">
						</div>
					</div>				
					<hr>	
					<div class="row">	
						<div class="col-lg-3 col-md-3 col-sm-12">
							<label>   							 
								<span>Data Client<hr></span>		
							</label>
							<div class="switch">
							<?php foreach($staff as $su){?>
							<?php if($su->client == 1){?>
								<label>
								  <input value="1" name="client" type="checkbox" checked>
								  <span class="lever"></span>
								  View Client
								</label>
							<?php }else{ ?>
							<label>
								  <input value="1" name="client" type="checkbox">
								  <span class="lever"></span>
								  View Client
								</label>
							<?php }}?>
							</div>		
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12">
							<p style="margin-top:17px">&nbsp;</p>
							<div class="switch">
							<?php foreach($staff as $su){?>
							<?php if($su->req_new_client == 1){?>
								<label>
								  <input value="1" name="req_new_client" type="checkbox" checked>
								  <span class="lever"></span>
								  Request Client Baru
								</label>
							<?php }else{ ?>
							<label>
								  <input value="1" name="req_new_client" type="checkbox">
								  <span class="lever"></span>
								  Request Client Baru
								</label>
							<?php }}?>
							</div>		
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12">
							<p style="margin-top:17px">&nbsp;</p>
							<div class="switch">
							<?php foreach($staff as $su){?>
							<?php if($su->log_dec_client == 1){?>
								<label>
								  <input value="1" name="log_dec_client" type="checkbox" checked>
								  <span class="lever"></span>
								  Log Decline Cline
								</label>
							<?php }else{ ?>
							<label>
								  <input value="1" name="log_dec_client" type="checkbox">
								  <span class="lever"></span>
								  Log Decline Cline
								</label>
							<?php }}?>
							</div>		
						</div>
					</div>	
					<hr>	
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
						<label>   							 
							<span>Manage Order<hr></span>		
						</label>
						<div class="switch">
							<?php foreach($staff as $su){?>
							<?php if($su->statusorder == 1){?>
								<label>
								  <input value="1" name="statusorder" type="checkbox" checked>
								  <span class="lever"></span>
								  Status Order
								</label> 
							<?php }else{ ?>
							<label>
								  <input value="1" name="statusorder" type="checkbox">
								  <span class="lever"></span>
								  Status Order
								</label> 
							<?php }} ?>
							</div>		
						</div>						
						<div class="col-lg-3 col-md-3 col-sm-12">
						<p style="margin-top:17px">&nbsp;</p>
						<div class="switch">
							<div class="switch">
							<?php foreach($staff as $su){?>
							<?php if($su->vieworder == 1){?>
								<label>
								  <input value="1" name="vieworder" type="checkbox" checked>
								  <span class="lever"></span>
								  View Order
								</label>
							<?php }else{?>
								<label>
								  <input value="1" name="vieworder" type="checkbox">
								  <span class="lever"></span>
								  View Order
								</label>
							<?php }} ?>
							</div>		
						</div>	
						<div class="col-lg-3 col-md-3 col-sm-12">
						</div>
					</div>				
				</div>				
				<hr>
				<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
						<label>   							 
							<span>Stock Pile<hr></span>		
						</label>
						<div class="switch">
							<?php foreach($staff as $su){?>
							<?php if($su->barang_masuk_stockpile == 1){?>
								<label>
								  <input value="1" name="barang_masuk_stockpile" type="checkbox" checked>
								  <span class="lever"></span>
								  Barang Masuk
								</label> 
							<?php }else{ ?>
							<label>
								  <input value="1" name="barang_masuk_stockpile" type="checkbox">
								  <span class="lever"></span>
								  Barang Masuk
								</label> 
							<?php }} ?>
							</div>		
						</div>						
						<div class="col-lg-3 col-md-3 col-sm-12">
						<p style="margin-top:17px">&nbsp;</p>
						<div class="switch">
							<div class="switch">
							<?php foreach($staff as $su){?>
							<?php if($su->barang_keluar_stockpile == 1){?>
								<label>
								  <input value="1" name="barang_keluar_stockpile" type="checkbox" checked>
								  <span class="lever"></span>
								  Barang Keluar
								</label>
							<?php }else{?>
								<label>
								  <input value="1" name="barang_keluar_stockpile" type="checkbox">
								  <span class="lever"></span>
								  Barang Keluar
								</label>
							<?php }} ?>
							</div>		
						</div>	
						<div class="col-lg-3 col-md-3 col-sm-12">
						</div>
					</div>				
				</div>				
				<hr>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<label>   							 
								<span>Log History<hr></span>		
							</label>
						<div class="switch">
							<?php foreach($staff as $su){?>
							<?php if($su->history == 1){?>
								<label>
								  <input value="1" name="history" type="checkbox" checked>
								  <span class="lever"></span>
								  History
								</label>
							<?php }else{ ?>
								<label>
								  <input value="1" name="history" type="checkbox">
								  <span class="lever"></span>
								  History
								</label>
							<?php }}?>
							</div>	
						</div>
					</div>				
					<hr>
            </div>
			<div class="card-header">
			<button type="submit" class="btn btn-primary">Change</button>
			</div>
			</form>
        </div>
		</div>
		</div>