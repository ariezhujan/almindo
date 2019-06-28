
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
  <script src="<?php echo base_url() ?>/assets/assets/js/core/jquery.min.js"></script>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>/assets/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/popup.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/progress.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/datepicker.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/datatable.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/switch.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url() ?>/assets/assets/img/sidebar-1.jpg">
      <div class="logo">
      <img class="img-brands" alt="PT. Almindo Jaya Abadi" src="<?php echo base_url() ?>/assets/images/almindo.png">
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav nav-tabs-navigation">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url(); ?>staff/dashboard">
              <i class="material-icons">dashboard</i>
              <p><?php echo $this->session->userdata('ses_divisi') ?></p>
            </a>
          </li>
		  <?php foreach($akses as $su){ ?>
		  <?php if($su->profile == 1){?>
		  <li class="nav-item ">
			<a class="nav-link" href="<?php echo site_url(); ?>staff/editprofile">
			<i class="material-icons" style="color:green">person</i>
			<p>Profile</p></a>
		  </li>
		  <?php }}?>
		  <?php foreach($akses as $su){ ?>
		  <?php if($su->client == 1){?>
		  <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>staff/client">
			<i class="material-icons"style="color:red">person_pin</i>
			<p>Client</p></a>
          </li>
		  <?php }}?>
		  <?php foreach($akses as $su){ ?>
		  <?php if($su->req_new_client == 1){?>
		  <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>staff/Request_client_baru">
			<i class="material-icons"style="color:red">person_pin</i>
			<p>Request Client Baru</p></a>
          </li>
		  <?php }}?>
		  <?php foreach($akses as $su){ ?>
		  <?php if($su->log_dec_client == 1){?>
		  <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>staff/Client_decline_view">
			<i class="material-icons"style="color:red">person_pin</i>
			<p>Log_Decline Client</p></a>
          </li>
		  <?php }}?>
		  <?php foreach($akses as $su){ ?>
		  <?php if($su->vieworder == 1){?>
		  <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>staff/Order_client">
			<i class="material-icons"style="color:blue">remove_red_eye</i>
			<p>View Order</p></a>
          </li>
		  <?php }}?>
		  <?php foreach($akses as $su){ ?>
		  <?php if($su->statusorder == 1){?>
		  <li class="nav-item ">
		   <a class="nav-link" href="<?php echo base_url(); ?>staff/order_status"> 
		   <i class="material-icons" style="color:blue">remove_red_eye</i>
		   <p>Status Order</p></a>
          </li>
		  <?php }}?>
		  <?php foreach($akses as $su){ ?>
		  <?php if($su->pricing == 1){?>
		  <li class="nav-item ">
		   <a class="nav-link" href="<?php echo base_url(); ?>staff/Charcoalpricing"> 
		   <i class="material-icons" style="color:magenta">access_time</i>
		   <p>Pricing</p></a>
          </li>
		  <?php }}?>
		  <?php foreach($akses as $su){ ?>
		  <?php if($su->payment == 1){?>
		  <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url(); ?>staff/payment_client"> 
			<i class="material-icons"style="color:brown">offline_pin</i>
			<p>Payment Client</p></a>
          </li>
		  <?php }}?>
		  <?php foreach($akses as $su){ ?>
		  <?php if($su->receivable == 1){?>
		  <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url(); ?>staff/receivable"> 
			<i class="material-icons"style="color:magenta">attach_money</i>
			<p>Account Receivable</p></a>
          </li>
		  <?php }}?>
		  <?php foreach($akses as $su){ ?>
		  <?php if($su->barang_masuk_stockpile == 1){?>
		  <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url(); ?>staff/Barang_masuk"> 
			<i class="material-icons"style="color:#3366FF">attach_money</i>
			<p>Barang Masuk Stockpile</p></a>
          </li>
		  <?php }}?>
		  <?php foreach($akses as $su){ ?>
		  <?php if($su->barang_keluar_stockpile == 1){?>
		  <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url(); ?>staff/Barang_keluar"> 
			<i class="material-icons"style="color:#CC0000">attach_money</i>
			<p>Barang Keluar Stockpile</p></a>
          </li>
		  <?php }}?>
		   <?php foreach($akses as $su){ ?>
		  <?php if($su->history == 1){?>
		  <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url(); ?>staff/dashboard"> 
			<i class="material-icons"style="color:#CC0000">attach_money</i>
			<p>Aktivitas Staff</p></a>
          </li>
		  <?php }}?>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Welcome <?php echo $this->session->userdata('ses_nama');?></a>
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
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url() ?>login/logout">Log out</a>
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
  $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
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

</script>
 <!--   Core JS Files   -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>/assets/assets/demo/demo.js"></script>
</body>

</html>