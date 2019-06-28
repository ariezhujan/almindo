
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Stock Phile Barang Masuk</h4>
                  <?php echo $this->session->flashdata('notif') ?>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-hover">
					<a href="<?php echo site_url() ?>admin/stockphile/barang_masuk/index1" class="btn btn-sm btn-primary"><i class="fa fa-plus-square fa-lg text-default"></i>&nbsp;&nbsp;Input Data</a>
                      <thead class=" text-primary">
                        <th>No.Purchsase</th>
                        <th>No.Polisi</th>
                        <th>Surat Jalan</th>
                        <th>Calories</th>
                        <th>Size</th>
                        <th>Total Tonase(kg)</th>
                        <th>Tanggal Masuk</th>
                        <th>Asal Barang</th>
                      </thead>
                      <tbody>
					  <?php 
						foreach($masuk as $su){?> 
                        <tr style="word-wrap: break-word">
                          <td><?php echo $su->po ?></td>
                          <td><?php echo $su->nopol ?></td>
                          <td><?php echo $su->surat_jalan ?>&nbsp;&nbsp;<a href="<?php echo site_url() ?>admin/stockphile/barang_masuk/tampil_gambar?po=<?php echo $su->po ?>&nama=<?php echo $su->surat_jalan ?>" title="Lihat"><i class="fa fa-images fa-lg text-default"></i>&nbsp;&nbsp;</a></td>
                          <td><?php echo $su->calories ?></td>
                          <td><?php echo $su->size ?></td>
                          <td><?php echo $su->tonase ?></td>
                          <td><?php echo $su->tanggal_masuk ?></td>
                          <td><?php echo $su->asalbarang ?></td>
                        </tr>
                      </tbody>
						<?php } ?>
                    </table>
                </div>
              </div>
            </div>
</div>
<div id="toast"><div id="img"><img src="<?php echo base_url() ?>assets/images/like.png" nosend="1" border="0" width="100" height="100" alt="almindo" title="almindo"></div><div id="desc">Perubahan data sukses...</div></div>