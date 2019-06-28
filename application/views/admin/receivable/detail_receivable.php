<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/handsontable@latest/dist/handsontable.full.min.css">
<div id="order">
<?php 
$paid_status = $this->input->get('paid_status');
?>
<a href="<?php echo base_url() ?>admin/receivable/receivable" class="close-order" title="Close"><i class="material-icons">cancel</i></a>
     <div class="windoworder">
			<br>			
			<br>
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Nama Perusahaan	</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="responsive-table">
                    <table id="example" class="table table-hover" width="100%">
                      <thead class=" text-primary">
                        <th>No</th>
						<th>Tgl Kirim</th>
						<th>Nama Pabrik</th>
						<th>Nopol</th>
						<th>No. Sj</th>
						<th>Tonase SP</th>
						<th>Tonase Pabrik</th>
						<th>Susut</th>
						<th>Komposisi</th>
						<th>Harga</th>
						<th>tgl inv</th>
						<th>No. Inv</th>
						<th>Total (Rp)</th>
						<th>Jatuh Tempo</th>
						<th>BANK</th>
						<th>Pelunasan</th>
						<th>MORE</th>
                      </thead>
                      <tbody>
                        <?php //foreach($client as $su){ ?>
                        <tr style="word-wrap: break-word">
                          <td>1<?php //echo $su->company_name ?></td>
						  <td>3/1/2019<?php //echo $su->bank ?></td>
						  <td>Dupantex<?php //echo $su->branch_bank ?></td>
						  <td>h 1350 mf<?php //echo $su->account_number ?></td>
						  <td>d793</td>
						  <td>27240</td>
						  <td>27200</td>
						  <td>40</td>
						  <td>s+10 rom 2+3 med</td>
						  <td>990</td>
						  <td>3/14/2019</td>
						  <td>340</td>
						  <td>26,928,000</td>
						  <td></td>
						  <td></td>
						  <td></td>
						  <td>
							<a href="<?php echo base_url() ?>admin/receivable/receivable/input_detail_receivable?id=<?php //echo $su->id ?>&company_name=<?php //echo $su->company_name ?>" class="fa fa-plus-square fa-lg text-primary" aria-hidden="true" title="Tambah Data Data"></a>
							&nbsp;&nbsp;&nbsp;
							<a href="<?php echo base_url() ?>admin/receivable/receivable/input_detail_receivable?id=<?php //echo $su->id ?>&company_name=<?php //echo $su->company_name ?>" class="fa fa-pencil fa-lg text-danger" aria-hidden="true" title="Edit Data"></a>
						  </td>
                        </tr>
                        <?php //;} ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
</div>
</div>
</div>