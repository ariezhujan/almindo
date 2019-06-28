<div id="order">
<a href="<?php echo base_url() ?>admin/stockphile/barang_keluar/index" class="close-order" title="Close"><i class="material-icons">cancel</i></a>
 <div class="windoworder">
<div class="row">			
	<div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:-40px">
        <div class="card">
        <div class="card-body">
		<div class="row">
		<?php 
		   foreach($tampil as $su){?>
           <img src="<?php echo base_url().'assets/upload/stockphile/barang_keluar/'.$su->surat_jalan ;?>" width="100%" height="100%">
		   <?php } ?>
		</div>	
		</div>	
		</div>	
</div>	
</div>	
</div>	
</div>	