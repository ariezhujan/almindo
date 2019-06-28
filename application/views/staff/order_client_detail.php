<div id="order">
<?php 
$id = $this->input->get('id');
$company_name = $this->input->get('company_name');
?>
<a href="<?php echo base_url() ?>staff/Order_client" class="close-order" title="Close"><i class="material-icons">cancel</i></a>
     <div class="windoworder">
			<br>			
			<br>
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="card">
			  <div id="cetak1">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Order Detail Client</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="responsive-table">
                    <table  class="table table-hover">
                      <thead class="text-primary">
                        <th>COMPANY NAME</th>
                        <th>PO</th>
                        <th>TYPES OF GOODS</th>
                        <th>TOTAL AMOUNT / .KG</th>
                        <th>PRICING</th>
                        <th>ORDER IN</th>
                      </thead>
                      <tbody>
                        <?php foreach($order as $su){ ?>
                        <tr class="centered">
                          <td><?php echo $su->company_name ?></td>
                          <td><?php echo $su->po ?></td>
                          <td><?php echo $su->caloriesme ?>&nbsp;/&nbsp;<?php echo $su->sizing ?></td>
                          <td><?php echo $su->qtygoods ?></td>
                          <td>Rp&nbsp;<?php echo $su->pricing; ?></td>
                          <td><?php echo $su->tanggal_order ?></td>
                        </tr>
                      </tbody>
                    </table>
					<table class="table table-hover">
			    		<thead class="text-primary">
							<th>SHIPPING ADDRESS :</th>
					    </thead>
						<tbody>
							<tr>
								<td><?php echo $su->tujuan ?></td>
							</tr>
						</tbody>
				    </table>
				<?php ; } ?>
              </div>
              </div>
			  </div>
			   <div class="card-header">
			  <a href="<?php echo base_url() ?>staff/order_client_progress?id=<?php echo $su->id ?>&po=<?php echo $su->po ?>&calories=<?php echo $su->calories ?>&size=<?php echo $su->size ?>" class="btn btn-primary">DELIVERY DETAIL</a>
			  <button onclick="cetak('cetak1')" class="btn btn-primary">PRINT</button>
			   </div>
            </div>
</div>
  </div>
</div>
<script>
function cetak(el) {
  var restorepage = document.body.innerHTML;
		var cetak = document.getElementById(el).innerHTML;
		document.body.innerHTML = cetak;
		window.print();
		document.body.innerHTML = restorepage;
}
</script>
