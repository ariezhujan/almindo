
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Order List</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="responsive-table">
                    <table id="example" class="table table-hover">
                      <thead class="text-primary">
                        <th>PO</th>
                        <th>TOTAL AMOUNT / .KG</th>
                        <th>START ORDER</th>
                        <th>MORE</th>
                      </thead>
                      <tbody>
                        <?php foreach($order as $su){ ?>
                        <tr class="centered">
                          <td><?php echo $su->po ?></td>
                          <td><?php echo $su->qtygoods ?></td>
                          <td><?php echo $su->tanggal_order ?></td>
                          <td><a href="<?php echo base_url() ?>member/vieworder?po=<?php echo $su->po ?>&calories=<?php echo $su->calories ?>&size=<?php echo $su->size ?>" class="btn btn-primary">DETAIL</a> </td>
                        </tr>
                        <?php ; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>