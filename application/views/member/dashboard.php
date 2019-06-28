
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>/assets/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/popup.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/progress.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/datepicker.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/assets/css/datatable.css" rel="stylesheet" />
  <script type="text/javascript">
  var otomatis = setInterval(
  function ()
  {
  $('#watching_count_pengiriman_today').load('<?php echo site_url() ?>member/pengiriman_hari_ini').fadeIn("slow");
  }, 1000)
  </script>
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
            <a class="nav-link" href="<?php echo base_url(); ?>member/dashboard">
              <i class="material-icons">dashboard</i>
              <p>User dashboard</p>
            </a>
          </li>
          <li>
			<ul class="collapsible">
					<li class="nav-item ">
				  <div class="collapsible-header"><i class="material-icons" style="color:green">&nbsp;&nbsp;&nbsp;person_pin</i>&nbsp;&nbsp;&nbsp;Profile</div>
				  <div class="collapsible-body">
						<a class="nav-link" href="<?php echo base_url(); ?>member/editprofile"> <i class="material-icons" style="color:green">person</i><p>Edit Profile</p></a>
				  </div>
				</li>
			  </ul>
          </li>
		  <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>member/createorder">
              <i class="material-icons" style="color:red">add_shopping_cart</i>
              <p>Create Order</p>
            </a>
          </li>
		  <li>
			<ul class="collapsible">
				<li class="nav-item ">
				  <div class="collapsible-header"><i class="material-icons"style="color:blue">&nbsp;&nbsp;&nbsp;speaker_notes</i>&nbsp;&nbsp;&nbsp;Manage Order</div>
				  <div class="collapsible-body">
						<a class="nav-link" href="<?php echo base_url(); ?>member/viewpoorder"> <i class="material-icons"style="color:blue">remove_red_eye</i><p>View Order</p></a>
						<a class="nav-link" href="<?php echo base_url(); ?>member/order_history"> <i class="material-icons" style="color:blue">access_time</i><p>History Order</p></a>
				  </div>
				</li>
			  </ul>
          </li>
		  <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>user.php">
              <i class="material-icons"style="color:purple">monetization_on</i>
              <p>My Outstanding</p>
            </a>
          </li>
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
  <script>
  function launch_toast() {
    var x = document.getElementById("toast")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 1000);
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>/assets/assets/demo/demo.js"></script>
</body>

</html>