
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Client Data</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="responsive-table">
                    <table id="example" class="table table-hover">
                      <thead class=" text-primary">
                        <th>COMPANY NAME</th>
						<th>COMPANY OWNER</th>
						<th>COMPANY PHONE</th>
						<th>COMPANY ADDRESS</th>
						<th>PIC</th>
						<th>PHONE PIC</th>
						<th>BANK</th>
						<th>BRANCH BANK</th>
						<th>ACCOUNT NUMBER OF BANK</th>
						<th>EMAIL</th>
						<th>DOJ</th>
                      </thead>
                      <tbody>
                        <?php foreach($client as $su){ ?>
                        <tr style="word-wrap: break-word">
                          <td><?php echo $su->company_name ?></td>
						  <td><?php echo $su->company_owner ?></td>
						  <td><?php echo $su->company_phone_number ?></td>
						  <td><?php echo $su->address ?></td>
						  <td><?php echo $su->pic ?></td>
						  <td><?php echo $su->no_pic ?></td>
						  <td><?php echo $su->bank ?></td>
						  <td><?php echo $su->branch_bank ?></td>
						  <td><?php echo $su->account_number ?></td>
						  <td><?php echo $su->email ?></td>
						  <td><?php echo $su->doj ?></td>
                        </tr>
                        <?php ; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>