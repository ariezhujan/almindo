
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Client Data</h4>
                  <?php echo $this->session->flashdata('notif') ?>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-hover">
                      <thead class=" text-primary">
                        <th>COMPANY NAME</th>
                        <th>COMPANY OWNER</th>
                        <th>MORE</th>
                      </thead>
                      <tbody>
                        <?php foreach($prospective_member as $su){ ?>
                        <tr style="word-wrap: break-word">
                          <td><?php echo $su->company_name ?></td>
                          <td><?php echo $su->company_owner ?></td>
                          <td>
                            <a href="<?php echo site_url() ?>staff/charcoalpricing/index_price?id=<?php echo $su->id ?>&company_name=<?php echo $su->company_name ?>" class="btn btn-sm btn-primary"><i class="fa fa-cog fa-lg text-default"></i>&nbsp;Set Pricing</a>
                            <!--<a href="<?php echo site_url() ?>admin/pricing/charcoalpricing?id=<?php echo $su->id ?>&company_name=<?php echo $su->company_name ?>" class="btn btn-sm btn-primary">PRICING</a>-->
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