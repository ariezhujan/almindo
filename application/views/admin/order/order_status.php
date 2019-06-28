
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Order Status Client</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="responsive-table">
                    <table  id="example" class="table table-hover">
                      <thead class="text-primary">
                        <th>COMPANY NAME</th>
                        <th>PO</th>
                        <th>TYPES OF GOODS</th>
                        <th>TOTAL AMOUNT / .KG</th>
                        <th>ORDER IN</th>
                        <th>DELIVERY DATE</th>
						<th>SHIPPING ADDRESS </th>
						<th>PAYMENT </th>
						<th>DELIVERED </th>
                      </thead>
                      <tbody>
                        <?php foreach($order as $su){ ?>
                        <tr class="centered">
                          <td><?php echo $su->company_name ?></td>
                          <td><?php echo $su->po ?></td>
                          <td><?php echo $su->caloriesme ?>&nbsp;/&nbsp;<?php echo $su->sizing ?></td>
                          <td><?php echo $su->qtygoods ?></td>
                          <td><?php echo $su->tanggal_order ?></td>
                          <td><?php echo $su->delivery_date ?></td>
						  <td><?php echo $su->tujuan ?></td>
						  <td><?php if($su->paid_status == 1) { ?><i class='fa fa-check-circle fa-1x text-success' aria-hidden='true'></i>&nbsp;PAID <?php }else{ echo"not paid yet";}?></td>
						  <td><?php if($su->delivery_status == 99) { ?><i class='fa fa-check-circle fa-1x text-success' aria-hidden='true'></i>&nbsp;DELIVERED <?php }else{ echo"Progress";}?></td>
                        </tr>
						<?php ; } ?>
                      </tbody>
                    </table>
              </div>
              </div>
			  </div>
            </div>
</div>