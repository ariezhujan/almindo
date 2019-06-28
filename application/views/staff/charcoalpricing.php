
<div id="order">
<a href="<?php echo base_url() ?>staff/charcoalpricing" class="close-order" title="Close"><i class="material-icons">cancel</i></a>
     <div class="windoworder">
			<br>			
			<br>			
			
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Charcoal Price</h4>
                  <p class="card-category"><?php echo $this->input->get('company_name'); ?></p>
                </div>
                <div class="card-body">
                  <div class="responsive-table">
                    <table id="example" class="table table-hover">
                      <thead class=" text-primary">
                        <th>CALORIES</th>
						<th>SIZE</th>
						<th>PRICE(Rp)</th>
                        <th>MORE</th>
                      </thead>
                      <tbody>
                        <?php foreach($pricing as $su){ ?>
                        <tr style="word-wrap: break-word">
                          <td><?php echo $su->caloriesme?></td>
                          <td><?php echo $su->sizing?></td>
                          <td><?php echo $su->pricing?></td>
                          <td>
						  <a href="<?php echo site_url() ?>staff/charcoalpricing/index3?no=<?php echo $su->no?>&id=<?php echo $su->id ?>&company_name=<?php echo $su->company_name ?>&calories=<?php echo $su->caloriesme ?>&size=<?php echo $su->sizing ?>&pricing=<?php echo $su->pricing ?>" class="btn btn-sm btn-primary">EDIT PRICING</a>
						  <?php ; } ?>
						  <?php
						  $id = $this->input->get('id');
						  $company_name = $this->input->get('company_name');
						  if(!$pricing){ 
						  ?>
                            <a href="<?php echo site_url() ?>staff/charcoalpricing/index1?id=<?php echo $id; ?>&company_name=<?php echo $company_name; ?>" class="btn btn-sm btn-primary">MAKE NEW PRICING</a>
						  <?php ;} ?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
			
     </div>
</div>
		