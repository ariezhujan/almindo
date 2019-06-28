
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Payment Client</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="responsive-table">
                    <table id="example" class="table table-hover">
                      <thead class="text-primary">
                        <th>COMPANY NAME</th>
                        <th>PO</th>
                        <th>TYPE CHARCOAL</th>
                        <th>AMMOUNT /KG</th>
                        <th>ORDER IN</th>
						<th>DELIVERY DATE</th>
                        <th>PAYMENT</th>
                        <th>MORE</th>
                      </thead>
                      <tbody>
					  <?php foreach($payment as $su){ ?>
                        <tr class="centered">
                          <td><?php echo $su->company_name ?></td>
                          <td><?php echo $su->po ?></td>
                          <td> <?php echo $su->caloriesme ?>&nbsp;/&nbsp;<?php echo $su->sizing ?></td>
                          <td><?php echo $su->qtygoods ?></td>
                          <td><?php echo $su->tanggal_order ?></td>
						  <td><?php echo $su->delivery_date ?></td>
                          <td><?php if($su->paid_status == 1) { ?><i class='fa fa-check-circle text-success' aria-hidden='true'></i>&nbsp;PAID <?php }else{ echo"not paid yet";}?> </td>
                          <td>
						  <a href="<?php echo base_url() ?>staff/payment_client/set_payment?no_order=<?php echo $su->no_order ?>&id=<?php echo $su->id ?>&po=<?php echo $su->po ?>&company_name=<?php echo $su->company_name ?>&paid_status=<?php echo $su->paid_status ?>" class="btn btn-primary" data-toggle="tooltip" title="Change Status"><i class="fa fa-pencil fa-lg text-default"></i>&nbsp;Rubah Status
						  </td>
                        </tr>
					  <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>