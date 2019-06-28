
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Order Client</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="responsive-table">
                    <table id="example" class="table table-hover">
                      <thead class="text-primary">
                        <th>COMPANY NAME</th>
                        <th>PO</th>
                        <th>ORDER IN</th>
                        <th>MORE</th>
                      </thead>
                      <tbody>
                        <?php foreach($order as $su){ ?>
                        <tr class="centered">
                          <td><?php echo $su->company_name ?></td>
                          <td><?php echo $su->po ?></td>
                          <td><?php echo $su->tanggal_order ?></td>
                          <td>
							  <a href="<?php echo base_url() ?>admin/order/order_client/index1?id=<?php echo $su->id ?>&po=<?php echo $su->po ?>&calories=<?php echo $su->calories ?>&size=<?php echo $su->size ?>" class="btn btn-primary">Detail Order</a>
						  </td>
                        </tr>
                        <?php ; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>