<div id="order">
<?php 
$id = $this->input->get('id');
$company_name = $this->input->get('company_name');
?>
<a href="<?php echo base_url() ?>staff/barang_masuk/index" class="close-order" title="Close"><i class="material-icons">cancel</i></a>
 <div class="windoworder_stockphile">
			<br>			
			<br>
<div class="row">			
	<div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:-40px">
        <div class="card">
        <div class="card-body">
        <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title"><h4>Input Barang Masuk</span>
                    </div>
                  </div>
                </div>
				<br>
				<br>
				<span style="color:red"><?php echo $this->session->flashdata("notif"); ?></span>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="step1">
					<?php echo form_open_multipart('admin/stockphile/Barang_masuk/upload_image');?>
					<div class="row">	
						<div class="col-lg-4 col-md-4 col-sm-12">
							<label>   							 
							<span>No Purchase Order</span>		
							</label>   
							<input type="text" class="form-control" name="po" id="po" required="required">
							<span id="username_result"></span>
						</div>	
					</div>
                    <br>
                    <br>
					<div class="row">	
						<div class="col-lg-4 col-md-4 col-sm-12">
							<label>   							 
							<span>Nopol Armada Transportasi</span>		
							</label>   
							<input type="text" class="form-control" name="nopol" required="required">
						</div>	
					</div>
                    <br>
                    <br>
                    <div class="row">	
						<div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                            <label><span>Uplaod Surat Jalan</span></label>
                            <div class="file-field input-field">
                                <div class="btn btn-success">
                                    <span>File</span>
                                    <input type="file" name="gambar">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate form-control" name="surat_jalan" type="text" placeholder="Upload one files">
                                </div>
                            </div>
                            </div>
                        </div>
					</div>	
					<br>
					<br>
					<div class="row">	
                   <div class="col-lg-12 col-md-12 col-sm-12">
                    <label><span>Charcoal Calories</span></label>
                    </div>
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="form-check">            
							<label class="form-check-label">   
							<input class="form-check-input" type="radio" value="High" name="calories" required="required">
							<span class="form-check-sign">    
							<span class="check"></span>             
							</span>								 
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;High</span>		
							</label>       
							</div>		
						</div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
							<div class="form-check">            
							<label class="form-check-label">   
							<input class="form-check-input" type="radio" value="Medium" name="calories" required="required">
							<span class="form-check-sign">    
							<span class="check"></span>             
							</span>								 
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medium</span>		
							</label>       
							</div>	
						</div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
							<div class="form-check">            
							<label class="form-check-label">   
							<input class="form-check-input" type="radio" value="Low" name="calories" required="required">
							<span class="form-check-sign">    
							<span class="check"></span>             
							</span>								 
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Low</span>		
							</label>       
							</div>	
						</div>
					</div>
					<br><br>
					<div class="row">	
                   <div class="col-lg-12 col-md-12 col-sm-12">
                    <label><span>Charcoal Size</span></label>
                    </div>
						<div class="col-lg-2 col-md-2 col-sm-12">
							<div class="form-check">            
							<label class="form-check-label">   
							<input class="form-check-input" type="radio" value="Fine" name="size" required="required">
							<span class="form-check-sign">    
							<span class="check"></span>             
							</span>								 
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fine</span>		
							</label>       
							</div>		
						</div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
							<div class="form-check">            
							<label class="form-check-label">   
							<input class="form-check-input" type="radio" value="Rom" name="size" required="required">
							<span class="form-check-sign">    
							<span class="check"></span>             
							</span>								 
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rom</span>		
							</label>       
							</div>	
						</div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
							<div class="form-check">            
							<label class="form-check-label">   
							<input class="form-check-input" type="radio" value="Asalan" name="size" required="required">
							<span class="form-check-sign">    
							<span class="check"></span>             
							</span>								 
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asalan</span>		
							</label>       
							</div>	
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12">
							<div class="form-check">            
							<label class="form-check-label">   
							<input class="form-check-input" type="radio" value="Nut" name="size" required="required">
							<span class="form-check-sign">    
							<span class="check"></span>             
							</span>								 
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nut</span>		
							</label>       
							</div>	
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12">
							<div class="form-check">            
							<label class="form-check-label">   
							<input class="form-check-input" type="radio" value="Lampie" name="size" required="required">
							<span class="form-check-sign">    
							<span class="check"></span>             
							</span>								 
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampie</span>		
							</label>       
							</div>	
						</div>
					</div>
					<br><br>
					 <div class="row">	
					 <div class="col-lg-12 col-md-12 col-sm-12">
						<label><span>Asal Barang</span></label>
                    </div> 
					<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="form-check">            
							<label class="form-check-label">   
							<input class="form-check-input" onclick="showElem()" type="radio" name="asalbarang">
							<span class="form-check-sign">    
							<span class="check"></span>             
							</span>								 
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lainya</span>							
							</label>       
							</div>	
						</div>
						<br>
						<br>
							<input type="text" id="my" class="form-control" name="asalbarang">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="form-check">            
							<label class="form-check-label">   
							<input class="form-check-input" type="radio" value="Tongkang" name="asalbarang" onclick="hideElem()">
							<span class="form-check-sign">    
							<span class="check"></span>             
							</span>								 
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tongkang</span>		
							</label>       
							</div>	
						</div>
					</div>
                    <br><br>
                    <div class="row">	
						<div class="col-lg-4 col-md-4 col-sm-12">
							<label>   							 
							<span>Total Tonase(kg)</span>		
							</label>   
							<input type="text" class="form-control" name="tonase" required="required">
						</div>	
					</div>
                    <br><br>
                    <div class="row">	
						<div class="col-lg-4 col-md-4 col-sm-12">
							<label>   							 
							<span>Tanggal Masuk</span>		
							</label>   
                            <input class='form-control datepicker' type='text' name="tanggal_masuk" placeholder='Tanggal Kedatangan' required='required'>
						</div>	
					</div>
					<hr>
                    <br><br>
					<div class="row">	
					<div class="col-lg-12 col-md-12 col-sm-12">		
						<div class="form-check">              
						<label class="form-check-label" style="float:right">   
						<button class="btn btn-primary" type="submit">Save</button>	
						</label>                         
						</div>					
					</div>					
					</div>
					<?php echo form_close();?>
				 </div>
				 
                    </div>
                </div>
            </div>
        </div>
    </div>
   
        </div>
        </div> 
    </div>
</div>	
</div>	
</div>	
<script type="text/javascript">
 $(document).ready(function(){
  $('#po').change(function(){
   var po = $('#po').val();
   if(po != ''){
    $.ajax({
     url: "<?php echo base_url(); ?>admin/stockphile/barang_masuk/checkpo",
     method: "POST",
     data: {po:po},
     success: function(data){
      $('#username_result').html(data);
     }
    });
   }
  });
 });
 
 document.getElementById("my").style.visibility = "hidden"; 
  function hideElem() {
  document.getElementById("my").style.visibility = "hidden"; 
  }

  function showElem() {
  document.getElementById("my").style.visibility = "visible"; 
  }
</script>