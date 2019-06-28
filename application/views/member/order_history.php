
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">History order</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="responsive-table">
                    <table id="example" class="table table-hover">
                      <thead class="text-primary">
                        <th>PO</th>
                        <th>PARTIAL AMOUNT / .KG</th>
                        <th>START ORDER</th>
                        <th>DELIVERY DATE</th>
                        <th>DELIVERED</th>
                        <th>PAID</th>
                      </thead>
                      <tbody>
                        <?php foreach($order as $su){ ?>
                        <tr class="centered">
                          <td><?php echo $su->po ?></td>
                          <td><?php echo $su->qtypart ?></td>
                          <td><?php echo $su->tanggal_order ?></td>
                          <td><?php echo $su->delivery_date?></td>
                          <td><?php if($su->delivery_status == 99) { ?><i class='fa fa-check-circle fa-2x text-success' aria-hidden='true'> <?php }else{ echo"Progress";}?> </i></td>
                          <td><?php if($su->paid_status == 1) { ?><i class='fa fa-check-circle fa-2x text-success' aria-hidden='true'> <?php }else{ echo"Not Paid Yet";}?> </i></td>
                        </tr>
                        <?php ; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>