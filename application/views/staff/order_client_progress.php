<div id="order">
<?php foreach($order as $su){ ?>
<a href="<?php echo base_url() ?>staff/order_client/index1?id=<?php echo $su->id ?>&po=<?php echo $su->po ?>&size=<?php echo $su->size ?>&calories=<?php echo $su->calories ?>" class="close-order" title="Close"><i class="material-icons">cancel</i></a>
<?php } ?>
     <div class="windoworder">
		  <?php foreach($order as $su){ ?>
		  <div class="card">
            <div class="card-body">
                <div class="card-title">
				  <h6>Company Name. <span class="text-primary"><?php echo $su->company_name ?></span></h6> 
				  <h6>Order In. <span class="text-primary"><?php echo $su->date_request ?></span> </h6>
                  <h6>Purchase No. <span class="text-primary"><?php echo $su->po ?></span></h6>
				  <hr>
                </div>
				<div class="row" style="margin-top:60px">
				<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="container-progress">
				  <div class="progress">
					<div style= "width:<?php echo $su->delivery_status ?>%" class="percent"></div>
					  </div>
					<div id="steps" class="steps">
						<div class="step" id="0"><i class="material-icons" style="margin-left: -5px;margin-top: -6px;font-size: 30px;" >verified_user</i>Confirmed</div>
						<div class="step" id="1"><i class="material-icons" style="margin-left: -5px;margin-top: -6px;font-size: 30px;">watch_later</i>Progress</div>
						<div class="step" id="2"><i class="material-icons" style="margin-left: -5px;margin-top: -9px;font-size: 35px;">local_shipping</i>Delivery</div>
						<div class="step" id="3"><i class="material-icons" style="margin-left: -5px;margin-top: -9px;font-size: 32px;">thumb_up</i>Delivered</div>
					</div>
			    </div>
			    </div>
			    </div>
                  <div class="row" style="margin-top:80px">	
					<div class="col-lg-12 col-md-12 col-sm-12">	 
					  <div class="responsive-table striped">
						<table class="table">
							<thead class="text-primary">
								<th>CALORIES :</th>
								<th>SIZE :</th>
								<th>PARTIAL AMOUNT / .KG : :</th>
								<th>DELIVERY DATE : :</th>
							</thead>
							<tbody>
								<tr>
									<td><?php echo $su->caloriesme ?></td>
									<td><?php echo $su->sizing ?></td>
									<td><?php echo $su->qtypart ?></td>
									<td class="text-danger"><b><?php echo $su->delivery_date ?></b></td>
								</tr>
							</tbody>
						</table>				
					  </div>
					  <div class="responsive-table">
						<table class="table">
							<thead class="text-primary">
								<th>SHIPPING ADDRESS : :</th>
							</thead>
							<tbody>
								<tr>
									<td><p><?php echo $su->tujuan ?></p></td>
								</tr>
							</tbody>
						</table>	
					  </div>
                  </div>
              </div>
            </div>
			<div class="card-header">
			<a href="<?php echo base_url() ?>staff/order_client_progress/set_progress?no=<?php echo $su->no_order ?>&id=<?php echo $su->id ?>&po=<?php echo $su->po ?>&status=<?php echo $su->delivery_status ?>&company_name=<?php echo $su->company_name ?>&calories=<?php echo $su->calories ?>&size=<?php echo $su->size ?>" class="btn btn-primary">Change Status Delivery</a>
			</div>
            </div>
		   <?php ;} ?>
		   
		</div>
		</div>