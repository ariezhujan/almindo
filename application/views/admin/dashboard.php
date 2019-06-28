
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>/assets/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Almindo
  </title>
  <script src="<?php echo base_url() ?>assets/assets/js/core/jquery.min.js"></script>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- CSS Files -->
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>/assets/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/popup.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/input_field.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/progress.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/datepicker.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/datatable.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/switch.css" rel="stylesheet" />
  <script type="text/javascript">
  var otomatis = setInterval(
  function ()
  {
  $('#watching_request').load('<?php echo site_url() ?>admin/redirect/popup_req_member').fadeIn("slow");
  $('#watching_count').load('<?php echo site_url() ?>admin/redirect/hitung_prospective_member').fadeIn("slow");
  $('#watching_count_client').load('<?php echo site_url() ?>admin/redirect/hitung_client').fadeIn("slow");
  $('#watching_count_staff').load('<?php echo site_url() ?>admin/redirect/hitung_staff').fadeIn("slow");
  $('#barang_masuk').load('<?php echo site_url() ?>admin/redirect/barang_masuk').fadeIn("slow");
  $('#barang_keluar').load('<?php echo site_url() ?>admin/redirect/barang_keluar').fadeIn("slow");
  $('#watching_count_pengiriman_today').load('<?php echo site_url() ?>admin/redirect/pengiriman_hari_ini').fadeIn("slow");
  }, 1000)
  </script>
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url() ?>/assets/assets/img/sidebar-1.jpg">
      <div class="logo">
      <img class="img-brands" alt="PT. Almindo Jaya Abadi" src="<?php echo base_url() ?>\assets\images/almindo.png">
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="<?php echo site_url(); ?>admin/dashboard">
              <i class="material-icons">dashboard</i>
              <p>Administrator</p>
            </a>
          </li>
          <li>
			<ul class="collapsible">
				<li class="nav-item ">
						<a class="nav-link" href="<?php echo site_url(); ?>admin/editprofile"> <i class="material-icons" style="color:green">person</i><p>Profile</p></a>
				</li>
			  </ul>
			<ul class="collapsible">
				<li class="nav-item ">
				  <div class="collapsible-header"><i class="material-icons" style="color:red">&nbsp;&nbsp;&nbsp;group</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Client<i style="font-size:15px" class="fas fa-angle-down"></i></div>
				  <div class="collapsible-body">
						<a class="nav-link" href="<?php echo site_url(); ?>admin/member_view"> <i class="material-icons"style="color:red">person_pin</i><p>Client</p></a>
						<a class="nav-link" href="<?php echo site_url(); ?>admin/prospective_member_view"> <i class="material-icons" style="color:red">redeem</i><p>Request New Client</p></a>
						<a class="nav-link" href="<?php echo site_url(); ?>admin/member_decline_view"> <i class="material-icons" style="color:red">sync_problem</i><p>Log. decline Client</p></a>
				  </div>
				</li>
			  </ul>
        <ul class="collapsible">
				<li class="nav-item ">
						<a class="nav-link" href="<?php echo site_url(); ?>admin/pricing/charcoalpricing"> <i class="material-icons text-primary">style</i><p>Pricing</p></a>
				</li>
			  </ul>
			<ul class="collapsible">
				<li class="nav-item ">
				  <div class="collapsible-header"><i class="material-icons"style="color:blue">&nbsp;&nbsp;&nbsp;speaker_notes</i>&nbsp;&nbsp;&nbsp;&nbsp; Manage Order<i style="font-size:15px" class="fas fa-angle-down"></i></div>
				  <div class="collapsible-body">
						<a class="nav-link" href="<?php echo site_url(); ?>admin/order/order_client"> <i class="material-icons"style="color:blue">remove_red_eye</i><p>View Order</p></a>
						<a class="nav-link" href="<?php echo site_url(); ?>admin/order/order_status"> <i class="material-icons" style="color:blue">access_time</i><p>Status Order</p></a>
				  </div>
				</li>
			  </ul>
			<ul class="collapsible">
				<li class="nav-item ">
						<a class="nav-link" href="<?php echo site_url(); ?>admin/payment/payment_client"> <i class="material-icons"style="color:brown">monetization_on</i><p>Payment Client</p></a>
				</li>
			  </ul>
        <ul class="collapsible">
				<li class="nav-item ">
				  <div class="collapsible-header"><i class="material-icons"style="color:#00ff99">&nbsp;&nbsp;&nbsp;local_convenience_store</i>&nbsp;&nbsp;&nbsp;&nbsp;Receivable<i style="font-size:15px" class="fas fa-angle-down"></i></div>
				  <div class="collapsible-body">
						<a class="nav-link" href="<?php echo site_url(); ?>admin/receivable/receivable"> <i class="material-icons"style="color:#00ff99">remove_red_eye</i><p>Input Receivable</p></a
				  </div>
				</li>
			  </ul>
        <ul class="collapsible">
				<li class="nav-item ">
				  <div class="collapsible-header"><i class="material-icons"style="color:chocolate">&nbsp;&nbsp;&nbsp;store</i>&nbsp;&nbsp;&nbsp;&nbsp;Stock Phile<i style="font-size:15px" class="fas fa-angle-down"></i></div>
				  <div class="collapsible-body">
						<a class="nav-link" href="<?php echo site_url(); ?>admin/stockphile/barang_masuk"> <i class="material-icons"style="color:chocolate">remove_red_eye</i><p>Barang Masuk</p></a>
						<a class="nav-link" href="<?php echo site_url(); ?>admin/stockphile/barang_keluar"> <i class="material-icons" style="color:chocolate">access_time</i><p>Barang Keluar</p></a>
				  </div>
				</li>
			  </ul>
			<ul class="collapsible">
				<li class="nav-item ">
				  <div class="collapsible-header"><i class="material-icons"style="color:purple">&nbsp;&nbsp;&nbsp;build</i>&nbsp;&nbsp;&nbsp;&nbsp;Staff Aksess<i style="font-size:15px" class="fas fa-angle-down"></i></div>
				  <div class="collapsible-body">
						<a class="nav-link" href="<?php echo site_url(); ?>admin/manage_user/add_akses_staff"> <i class="material-icons"style="color:purple">business</i><p>add New</p></a>
						<a class="nav-link" href="<?php echo site_url(); ?>admin/manage_user/akses_staff"> <i class="material-icons" style="color:purple">store</i><p>Akses Staff</p></a>
				  </div>
				</li>
			  </ul>
        <ul class="collapsible">
				<li class="nav-item ">
						<a class="nav-link" href="<?php echo site_url(); ?>admin/payment/payment_client"> <i class="material-icons"style="color:brown">monetization_on</i><p>Aktivitas Pegawai</p></a>
				</li>
			  </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="<?php echo site_url(); ?>admin/dashboard""><?php echo $this->session->userdata('ses_nama');?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
			   <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                   <div id="watching_count"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                 <div id="watching_request"></div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo site_url() ?>login/logout">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <!--Start Body-->
      <div class="content">
        <div class="container-fluid">
         <?php $this->load->view($content); ?>
        </div>
      </div>
      <!--End Body-->

      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Almindo Jaya Abadi
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function(){
     // Format mata uang.
  $( ".uang" ).mask('000.000.000', {reverse: true});
})
  function launch_toast() {
    var x = document.getElementById("toast")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
	}
	$(document).ready(function(){
    $('.datepicker').datepicker();
  });
    $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  $(document).ready(function() {
    $('#example').DataTable( {
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    } );
} );
jQuery(document).ready( function () {
$("#append").click( function() {
        $(".inc").append('<div class="controls"><div id="hapus" class="row"><div class="col-lg-1 col-md-1 col-sm-12"></div><input type="hidden" name="id[]" value="<?php echo $this->input->get('id'); ?>"><input type="hidden" name="company_name[]" value="<?php echo $this->input->get('company_name'); ?>"><div class="col-lg-2 col-md-2 col-sm-12"><select class="form-control" name="calories[]" required="required"><option disabled selected>Select Calories</option><option value="1"> HIGH</option><option value="2"> MEDIUM</option><option value="3"> LOW</option></select></div><div class="col-lg-2 col-md-2 col-sm-12"><select class="form-control" name="size[]" required="required"><option disabled selected>Select Size</option><option value="1"> FINE</option><option value="2"> ROM</option><option value="3"> ASALAN</option><option value="4"> NUT</option><option value="5"> LAMPIE</option></select></div><div class="col-lg-2 col-md-2 col-sm-12"><input type="text" type="width:10px" class="uang form-control" name="pricing[]" placeholder="Pricing(Rp)" required="required"></div><div class="col-lg-2 col-md-2 col-sm-12"><a href="" onclick="myFunction1()" class="remove_this" rel="tooltip" title="Delete Input"><i class="material-icons" style="font-size: 25px;color:red">cancel</i></a></div><div class="col-md-12"><hr></div></div></div>');
        return false;
    });

function myFunction1() {
  var x = document.getElementById("hapus");
  if (x.length > 0) {
    x.remove(x);
  }
}
});
</script>
  <!--   Core JS Files   -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>/assets/assets/demo/demo.js"></script>
</body>
</html>