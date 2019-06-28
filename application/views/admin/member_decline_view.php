
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Log. Decline Client</h4>
                  <p class="card-category"><?php echo $this->session->flashdata('notif') ?></p>
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
						<th>DOR</th>
						<th>MORE</th>
                      </thead>
                      <tbody>
                        <?php foreach($prospective_member as $su){ ?>
                        <tr>
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
						  <td><?php echo $su->dor ?></td>
						  <td>
              <a href="<?php echo base_url() ?>admin/accept_dec?id=<?php echo $su->id ?>&company_name=<?php echo $su->company_name ?>&company_owner=<?php echo $su->company_owner ?>&company_phone_number=<?php echo $su->company_phone_number ?>&address=<?php echo $su->address ?>&pic=<?php echo $su->pic ?>&no_pic=<?php echo $su->no_pic ?>&branch_bank=<?php echo $su->branch_bank ?>&bank=<?php echo $su->bank ?>&account_number=<?php echo $su->account_number ?>&email=<?php echo $su->email ?>&dor=<?php echo $su->dor ?>" class="btn btn-sm btn-primary"><i class="fa fa-cog fa-lg text-default"></i>&nbsp;Rubah Status</a>
              </td>              
                        </tr>
                        <?php ; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div id="toast"><div id="img"><img src="<?php echo base_url() ?>assets/images/like.png" nosend="1" border="0" width="100" height="100" alt="almindo" title="almindo"></div><div id="desc">Perubahan data sukses...</div></div>
</div>