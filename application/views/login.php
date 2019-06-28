<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/Login-form/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login-form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login-form/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login-form/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login-form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login-form/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login-form/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login-form/css/util.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Login-form/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100 ">
			<span class="wrap-login100 p-t-20 p-b-20">
				<form class="login100-form validate-form" action="<?php echo base_url().'login/auth'?>" method="post">
					<span class="login100-form-avatar">
						<img src="<?php echo base_url();?>assets/Login-form/images/logoalmindo.png" alt="AVATAR">
					</span>
					<div class="container-login100-form-btn">
						<p style="color: red"><?=$this->session->flashdata('msg')?></p>
					</div>
					<div class="wrap-input100 validate-input m-t-65 m-b-35" data-validate = "Masukan email yang valid">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email Company"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-65 m-b-35" data-validate="Masukan Password ">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" value="Sign In" class="login100-form-btn">
					</div>
			
					<ul class="login-more">
						<li>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="<?php echo base_url();?>register/prospective_member" class="txt2">
								Sign up
							</a>
						</li>
					</ul>
				</form>
			</span>
		</div>
	</div>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/Login-form/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/Login-form/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/Login-form/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>assets/Login-form/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/Login-form/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/Login-form/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets/login-form/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/Login-form/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/Login-form/js/main.js"></script>
</body>
</html>