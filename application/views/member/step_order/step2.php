	<div class="row"> 
	<div class="col-lg-12 col-md-12">
	<div class="card">           
	<div class="card-header card-header-tabs card-header-primary">
	<div class="nav-tabs-navigation">
	<div class="nav-tabs-wrapper"> 
	<span class="nav-tabs-title"><h4>Request Step2</h4></span>  
	</div>                  
	</div>               
	</div>				
	<div class="tab-pane" id="step2">					
	<div class="row">						
	<div class="col-lg-12 col-md-12" style="padding-top:20px;padding-left:50px">	
	<table>							
	<tbody>	
	<?php foreach($order as $su){ ?>		
	<tr><td><h6>Total quantity </h6></td><td><h6><?php echo $su->qtygoods ?> .kg<h6></td></tr>	
	<tr><td><h6>Purcahse Order &nbsp;</h6></td><td><h6><?php echo $su->po ?></h6></td></tr>			
	<?php ;} ?>							
	</tbody>				
	</table>				
	</div>					
	</div>				
	<hr>					
	<?php 					 
	for($x = 0; $x < $this->session->userdata('qtydelivery'); $x++){ ?>	
	<form action="<?php echo base_url() ?>member/createorder/save2" method="post">	
	<input type="hidden"  value="<?php echo $this->session->userdata('qtydelivery');?>" name="qtydelivery">	
	<input type="hidden"  value="<?php echo $this->session->userdata('ses_id');?>" name="id[]">			
	<input type="hidden"  value="<?php echo $this->session->userdata('po');?>" name="po[]">				
	<div class='row'>						
	<div class='col-lg-3 col-md-12 col-sm-12 '>					
	<div class='form-check' style='width:200px'>
	<input class='form-control datepicker' type='text' name="delivery_date[]" placeholder='Delivery date' required='required'>	
	</div>						
	</div>						
	<div class='col-lg-3 col-md-12 col-sm-12'>	
	<div class='form-check' style='width:200px'>          
	<input class='form-control' type='number' placeholder='Delivery Quantity .kg' name="qtypart[]">	
	</div>						
	</div>					
	<div class='col-lg-3 col-md-12 col-sm-12'>	
	<div class='form-check'>            
	<label class='form-check-label' style='width:200px'>		
	<a href="<?php echo base_url() ?>member/createorder/del_tabel?po=<?php echo $this->session->userdata('po') ?>&qtydelivery=<?php echo $this->session->userdata('qtydelivery') - 1 ?>" rel='tooltip' title='Delete Delivery'>	
	<i class='material-icons' style='font-size: 25px;color:red'>cancel</i></a>					
	</label>                    
	</div>					
	</div>				
	</div>				
	<hr>				
	<?php ;} ?>		
	<div class='row'>					
	<div class='col-lg-6 col-md-12 col-sm-12'>	
	</div>					
	<div class='col-lg-3 col-md-12 col-sm-12'>	
	<div class='form-check'>          
	<label class='form-check-label' style='width:200px'>    
	<a href="<?php echo base_url() ?>member/createorder/del_tabel?po=<?php echo $this->session->userdata('po') ?>&qtydelivery=<?php echo $this->session->userdata('qtydelivery') + 1 ?>" rel='tooltip' title='Add Delivry'>			
	<i class='material-icons' style='font-size: 30px'>add_box</i></a>							
	</label>               
	</div>					
	</div>					
	</div>				
	<div class='row'>	
	<div class='col-lg-3 col-md-12 col-sm-12'>	
	<div class='form-check'>           
	<label class='form-check-label' style='width:200px'>      
	<button type='submit' rel='tooltip' title='Save' class='btn btn-primary'>Send</button>	
	</label>        
	</div>			
	</div>			
	</div>			
	</form>         
	</div>          
	</div>          
    </div>          
	</div> 			
	