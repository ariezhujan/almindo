	<div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title"><h4>Request Step1</h4></span>
					  <span><?php echo $this->session->flashdata("notif"); ?> </span>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="step1">
					<form action="<?php echo base_url() ?>member/createorder/save1" method="post">
					<input type="hidden"  value="<?php echo $this->session->userdata('ses_id');?>" name="id">	
					<div class="row">				
					<div class="col-lg-12 col-md-12 col-sm-12">	
					<h4>Purchase No.</h4>					
					</div>					
					</div>					
					<div class="row">		
					<div class="col-lg-12 col-md-12 col-sm-12">	
					<div class="form-check" style="width:200px">     
					<input class="form-control" type="text" title="Input Purchase Order" placeholder="Input Purchase order No." name="po" id="po" required="required">
					<span id="username_result"></span>
					</div>					
					</div>					
					</div>					
					<br>                   
					<br>                   
					<div class="row">		
					<div class="col-lg-12 col-md-12 col-sm-12">	
					<h4>Calories</h4>					
					</div>				
					</div>				
					<div class="row">	
					<div class="col-lg-2 col-md-4 col-sm-12">		
					<div class="form-check">            
					<label class="form-check-label">   
					<input class="form-check-input" type="radio" value="1" name="calories" required="required">
					<span class="form-check-sign">    
					<span class="check"></span>             
					</span>								 
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;High</span>		
					</label>       
					</div>			
					</div>			
					<div class="col-lg-2 col-md-4 col-sm-12">		
					<div class="form-check">            
					<label class="form-check-label">    
					<input class="form-check-input" type="radio" value="2" name="calories" required="required">
					<span class="form-check-sign">                     
					<span class="check"></span>                                
					</span>							
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medium</span>		
					</label>                     
					</div>						
					</div>						
					<div class="col-lg-8 col-md-4 col-sm-12">	
					<div class="form-check">         
					<label class="form-check-label">        
					<input class="form-check-input" type="radio" value="3" name="calories" required="required">    
					<span class="form-check-sign">                         
					<span class="check"></span>                            
					</span>                             
					</span>								
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Low</span>	
					</label>                  
					</div>						
					</div>				
					</div>				
					<br>				
					<br>				
					<div class="row">	
					<div class="col-lg-12 col-md-12 col-sm-12">
					<h4>Size</h4>						
					</div>				
					</div>				
					<div class="row">
					<div class="col-lg-2 col-md-3 col-sm-12">		
					<div class="form-check">             
					<label class="form-check-label">     
					<input class="form-check-input" type="radio" value="1" name="size" required="required">  
					<span class="form-check-sign">          
					<span class="check"></span>             
					</span>							
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fine</span>		
					</label>                     
					</div>					
					</div>					
					<div class="col-lg-2 col-md-3 col-sm-12">		
					<div class="form-check">          
					<label class="form-check-label">  
					<input class="form-check-input" type="radio" value="2" name="size" required="required">    
					<span class="form-check-sign">                          
					<span class="check"></span>                            
					</span>							
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rom</span>	
					</label>                    
					</div>					
					</div>					
					<div class="col-lg-2 col-md-3 col-sm-12">	
					<div class="form-check">         
					<label class="form-check-label"> 
					<input class="form-check-input" type="radio" value="3" name="size" required="required">    
					<span class="form-check-sign">                
                    <span class="check"></span>                   
					</span>                    
					</span>						
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asalan</span>		
					</label>                          
					</div>				
					</div>			
					<div class="col-lg-2 col-md-3 col-sm-12">			
					<div class="form-check">             
					<label class="form-check-label">    
					<input class="form-check-input" type="radio" value="4" name="size" required="required">             
					<span class="form-check-sign">                         
					<span class="check"></span>               
					</span>                         
					</span>							
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nut</span>	
					</label>                         
					</div>					
					</div>					
					<div class="col-lg-2 col-md-3 col-sm-12">	
					<div class="form-check">        
					<label class="form-check-label">
					<input class="form-check-input" type="radio" value="5" name="size" required="required">  
					<span class="form-check-sign">                    
					<span class="check"></span>           
					</span>                               
					</span>								
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampie</span>	
					</label>                           
					</div>			
					</div>			
					</div>			
					<br>			
					<br>			
					<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">	
					<h4>Shipping address</h4>			
					</div>				
					</div>            
					<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">	
					<div class="form-check">           
					<textarea class="form-control"  placeholder="Destination Delivery Address" name="tujuan" required="required"></textarea>       
					</div>			
					</div>				
					</div>				
					<br>				
					<br>				
					<div class="row">	
					<div class="col-lg-12 col-md-12 col-sm-12">
					<h4>Quantity &amp; Delivery</h4>		
					</div>					
					</div>                
					<div class="row">	
					<div class="col-lg-3 col-md-12 col-sm-12">	
					<div class="form-check" style="width:200px">  
					<input class="form-control" type="number" placeholder="weight of goods/.kg" name="qtygoods" required="required">
					</div>				
					</div>				
					<div class="col-lg-9 col-md-12 col-sm-12">		
					<div class="form-check"  style="width:200px">
					<!--<input class="form-control" type="number" placeholder="How many delivery time " name="qtydelivery" required="required">	-->
					<select class="form-control" name="qtydelivery">
					<option disabled selected>Delivery time</option>
					<?php for($x = 0 ; $x <= 24 ; $x++) { ?>
						<option value="<?php echo $x ?>">&nbsp;<?php echo $x ?> &nbsp;&times;&nbsp; delivery</option>
					<?php } ?>
					</select>
					</div>			
					</div>			
					</div>			
					<div class="row">	
					<div class="col-lg-12 col-md-12 col-sm-12">		
					<div class="form-check">              
					<label class="form-check-label" style="float:right">   
					<button class="btn btn-primary" type="submit">NEXT</button>	
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


<script type="text/javascript">
 $(document).ready(function(){
  $('#po').change(function(){
   var po = $('#po').val();
   if(po != ''){
    $.ajax({
     url: "<?php echo base_url(); ?>member/createorder/checkpo",
     method: "POST",
     data: {po:po},
     success: function(data){
      $('#username_result').html(data);
     }
    });
   }
  });
 });
</script>