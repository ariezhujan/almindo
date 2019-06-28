
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Client Data</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="responsive-table">
                    <table id="example" class="table table-hover" width="100%">
                      <thead class=" text-primary">
                        <th>COMPANY NAME</th>
						<th>BANK</th>
						<th>BRANCH BANK</th>
						<th>ACCOUNT NUMBER OF BANK</th>
						<th>INPUT</th>
                      </thead>
                      <tbody>
                        <?php foreach($client as $su){ ?>
                        <tr style="word-wrap: break-word">
                          <td><?php echo $su->company_name ?></td>
						  <td><?php echo $su->bank ?></td>
						  <td><?php echo $su->branch_bank ?></td>
						  <td><?php echo $su->account_number ?></td>
						  <td>
						   <a href="<?php echo base_url() ?>staff/receivable/detail_receivable?id=<?php echo $su->id ?>&company_name=<?php echo $su->company_name ?>" class="btn btn-primary" data-toggle="tooltip" title="Input Data"><i class="fa fa-pencil fa-lg text-default"></i>&nbsp;Input Data</a>
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