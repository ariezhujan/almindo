	<div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title"><h4>Input Staff Access</h4></span>
                    </div>
                  </div>
                </div>
				<br>
				<br>
				<span style="color:red"><?php echo $this->session->flashdata("notif"); ?></span>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="step1">
					<form action="<?php echo site_url() ?>admin/manage_user/add_akses_staff/save" method="post">
					<div class="row">	
						<div class="col-lg-3 col-md-3 col-sm-12">
							<label>   							 
							<span>NIK</span>		
							</label>   
							<input type="number" class="form-control" name="nik" required="required">
						</div>
						<div class="col-lg-1 col-md-1 col-sm-12"></div>
						<div class="col-lg-3 col-md-3 col-sm-12">
							<label>   							 
							<span>DEPARTEMENT</span>		
							</label>  
							<select name="divisi" class="form-control" required="required">
							<option> </option>
							<option value="Finance">Finance</option>
							<option value="Stock Pile">Stock Pile</option>
							</select>
						</div>	
					</div>
					<br>
					<br>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">		
							<label>   							 
							<span>NAME</span>		
							</label>   
							<input type="text" class="form-control" name="nama" required="required">				
						</div>
						<div class="col-lg-1 col-md-1 col-sm-12"></div>
						<div class="col-lg-3 col-md-3 col-sm-12">		
							<label>   							 
							<span>EMAIL</span>		
							</label>   
							<input type="text" class="form-control" name="email" required="required">				
						</div>	
					</div>
					<br>
					<br>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">		
							<label>   							 
							<span>USERNAME</span>		
							</label>   
							<input type="text" class="form-control" name="username" required="required">				
						</div>
						<div class="col-lg-1 col-md-1 col-sm-12"></div>
						<div class="col-lg-3 col-md-3 col-sm-12">		
							<label>   							 
							<span>PASSWORD</span>		
							</label>   
							<input type="text" class="form-control" name="password" required="required">				
						</div>
					</div>
					<br><br>
					<hr>
					<br>		
					<div class="row">
					<label>   							 
						<span>SET ROLE AKSES</span>		
					</label>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="switch">
								<label>
								  <input value="1" name="profile" type="checkbox">
								  <span class="lever"></span>
								  Profile 
								</label>
							</div>		
						</div>						
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="switch">
								<label>
								  <input value="1" name="client" type="checkbox">
								  <span class="lever"></span>
								  Client
								</label>
							</div>		
						</div>			
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="switch">
								<label>
								  <input value="1" name="vieworder" type="checkbox">
								  <span class="lever"></span>
								  Order
								</label>
							</div>	
						</div>						
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="switch">
								<label>
								  <input value="1" name="historyorder" type="checkbox">
								  <span class="lever"></span>
								  History
								</label>
							</div>	
					    </div>
						<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="switch">
								<label>
								  <input value="1" name="payment" type="checkbox">
								  <span class="lever"></span>
								  Payment
								</label>
							</div>	
					    </div>
						<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="switch">
								<label>
								  <input value="1" name="pricing" type="checkbox">
								  <span class="lever"></span>
								  Pricing
								</label>
							</div>	
					    </div>	
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="switch">
								<label>
								  <input value="1" name="receivable" type="checkbox">
								  <span class="lever"></span>
								  Receivable 
								</label>
							</div>		
						</div>						
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="switch">
								<label>
								  <input value="1" name="req_new_client" type="checkbox">
								  <span class="lever"></span>
								  Req new client
								</label>
							</div>		
						</div>			
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="switch">
								<label>
								  <input value="1" name="log_dec_client" type="checkbox">
								  <span class="lever"></span>
								  Log dec client
								</label>
							</div>	
						</div>						
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="switch">
								<label>
								  <input value="1" name="barang_masuk_stockpile" type="checkbox">
								  <span class="lever"></span>
								  Barang masuk stockpile
								</label>
							</div>	
					    </div>
						<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="switch">
								<label>
								  <input value="1" name="barang_keluar_stockpile" type="checkbox">
								  <span class="lever"></span>
								  Barang keluar stockpile
								</label>
							</div>	
					    </div>
						<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="switch">
								<label>
								  <input value="1" name="history" type="checkbox">
								  <span class="lever"></span>
								  Aktivitas Pegawai
								</label>
							</div>	
					    </div>
					</div>
						<br>
					<div class="row">	
					<div class="col-lg-12 col-md-12 col-sm-12">		
						<div class="form-check">              
						<label class="form-check-label" style="float:right">   
						<button class="btn btn-primary" type="submit">Save</button>	
						</label>                         
						</div>					
					</div>					
					</div>
					 </form>
				 </div>
				 
                    </div>
                </div>
            </div>
        </div>
    </div>

