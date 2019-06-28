
<div id="order">
<a href="<?php echo base_url(); ?>admin/receivable/receivable/detail_receivable" class="close-order" title="Close"><i class="material-icons">cancel</i></a>
     <div class="windoworder">
			<br>			
			<br>
<div class="row">
    <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Input Data namapabrik</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
								<form class="form-horizontal" method="post" action="<?php echo base_url(). 'dashboard/create_produk'; ?>">
									<fieldset>

									<!-- Form Name -->

									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">Tanggal Kirim</label>  
										<div class="col-md-10">
										<input id="tanggalkirim" name="tanggalkirim" type="date"  class="form-control" >
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">Nama Pabrik</label>  
										<div class="col-md-10">
										<input id="namapabrik" name="namapabrik" type="text" placeholder="Nama Pabrik" class="form-control" >
										</div>
									</div>

                  <!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">Nopol</label>  
										<div class="col-md-10">
										<input id="nopol" name="nopol" type="text" placeholder="Nomor Polisi" class="form-control" >
										</div>
									</div>

                   <!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">No.SJ</label>  
										<div class="col-md-10">
										<input id="nosj" name="nosj" type="text" placeholder="No.SJ" class="form-control" >
										</div>
									</div>

									 <!-- Text input-->
									 <div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">Tonase SP</label>  
										<div class="col-md-10">
										<input id="tonasesp" name="tonasesp" type="text" placeholder="Tonase SP" class="form-control" >
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">Tonase Pabrik</label>  
										<div class="col-md-10">
										<input id="tonasepabrik" name="tonasepabrik" type="text" placeholder="Tonase Pabrik" class="form-control" >
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">Susut</label>  
										<div class="col-md-10">
										<input id="susut" name="susut" type="number" placeholder="Susut" class="form-control" >
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">Komposisi</label>  
										<div class="col-md-10">
										<input id="komposisi" name="komposisi" type="text" placeholder="Komposisi" class="form-control" >
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">Harga</label>  
										<div class="col-md-10">
										<input id="harga" name="harga" type="number" placeholder="Harga" class="form-control" >
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">Tanggal Invoice</label>  
										<div class="col-md-10">
										<input id="tanggalinvoice" name="tanggalinvoice" type="date" placeholder="Tanggal Invoice" class="form-control" >
										</div>
									</div>
										
									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">Nomor Invoice</label>  
										<div class="col-md-10">
										<input id="nomorinvoice" name="nomorinvoice" type="date" placeholder="Nomor Invoice" class="form-control" >
										</div>
									</div>

                  <!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">Total(Rp)</label>  
										<div class="col-md-10">
										<input id="totalrp" name="totalrp" type="text" placeholder="Total(Rp)" class="form-control" >
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">Jatuh Tempo</label>  
										<div class="col-md-10">
										<input id="jatuhtempo" name="jatuhtempo" type="date" placeholder="Jatuh Tempo" class="form-control" >
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">Bank</label>  
										<div class="col-md-10">
										<input id="bank" name="bank" type="text" placeholder="Bank" class="form-control" >
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="tanggalkirim">Pelunasan</label>  
										<div class="col-md-10">
										<input id="pelunasan" name="pelunasan" type="text" placeholder="Pelunasan" class="form-control" >
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group"> 
										<div class="col-md-10">
										<input id="simpan" name="simpan" type="submit" class="btn btn-primary" value="Simpan" >
										</div>
									</div>

									</fieldset>
									</form>
                </div>
              </div>
            </div>
        </div>
      </div>
   </div>
	 <div class="col-md-3"></div>
</div>