<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register Almindo</title>

    <!-- Font Icon -->
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/login-form/images/icons/favicon.ico"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/reg_form/fonts/material-icon/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/reg_form/vendor/nouislider/nouislider.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- JS-->
	<script src="<?php echo base_url(); ?>assets/reg_form/vendor/jquery/jquery.min.js"></script>
	 <!-- Main css -->
	<script src="<?php echo base_url() ?>/assets/assets/js/core/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/reg_form/css/style.css">
</head>
<body style="overflow-x: hidden;overflow-y: hidden; ">

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img style="height:850px" src="<?php echo base_url(); ?>assets/reg_form/images/form-img3.jpg" alt="">
                    <div class="signup-img-content">
                        <img class="img-brands" alt="PT. Almindo Jaya Abadi" src="<?php echo base_url() ?>\assets\images/almindo.png">
                        <h2>Register Now </h2>
                        <p>for Open Order !</p>
                        <div style="margin-top: 23px;">
                        <label for="company_owner">
                            <span class="txt1">
                                You have an account?
                             </span>
                             <a href="<?php echo base_url();?>index.php/login" class="txt2">
                                 Signin
                             </a>
                         </label>
                        </div>
                    </div>
                </div>
                <div class="signup-form">
				<span style="color: red"><?=$this->session->flashdata('notif')?></span>
                    <form role="form" action="<?php echo base_url().'index.php/register/prospective_member/save';?>" method="post" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="company_name" class="required">Company Name</label>
                                    <input type="text" name="company_name" id="company_name" placeholder="ex : qwertyuiop.1234B" required="required" />
									<span class="text-danger" id="see_name"></span>
                                </div>
                                <div class="form-input">
                                    <label for="pic" class="required">Personal In Charge</label>
                                    <input type="text" name="pic" id="pic" placeholder="ex : qwertyuiop.1234B"required="required"/>
                                </div>
                                <div class="form-input">
                                    <label for="bank" class="required">Name of Bank</label>
                                    <input type="text" name="bank" id="bank" placeholder="ex : qwertyuiop.1234B" required="required"/>
                                </div>
								<div class="form-input">
                                    <label for="branch_bank" class="required">Branch Of Bank</label>
                                    <input type="text" name="branch_bank" id="branch_bank" placeholder="ex : qwertyuiop.1234B"required="required" />
                                </div>	
                                <div class="form-input">
                                    <label for="account_Number" class="required">Account Number Of Bank</label>
                                    <input type="number" name="account_number" id="account_number" placeholder="ex : 1234567890" required="required"/>
									<span id="see_account_number"></span>
                                </div>
								<div class="form-input">
                                    <label for="address" class="required">Company Address</label>
                                    <input type="text" name="address" id="address" placeholder="ex : qwertyuiop.1234B"required="required" >
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="form-input">
                                    <label for="company_owner" class="required">Company Owner</label>
                                    <input type="text" name="company_owner" id="company_owner" placeholder="ex : qwertyuiop.1234B" required="required"/>
                                </div>
                                <div class="form-input">
                                    <label for="no_pic" class="required">Phone Number Personal In Charge</label>
                                    <input type="number" name="no_pic" id="no_pic" placeholder="ex : 1234567890" required="required"/>
									<span id="see_no_pic"></span>
                                </div>
                                <div class="form-input">
                                    <label for="company_phone_number" class="required">Company Phone Number</label>
                                    <input type="number" name="company_phone_number" id="company_phone_number" placeholder="ex : 1234567890" required="required" />
									<span id="see_company_phone_number"></span>
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="email" name="email" id="email" placeholder="ex : qwertyuiop1234B@qweewe.xxx" required="required"/>
									<span id="see_email"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
	<div id="accept">
              <div class="window">
                <a href="<?php echo base_url() ?>admin/prospective_member_view" class="close-button" title="Close">&times;</a>
                      <table class="tab-member-register">
                        <thead>
                              <th>Data Telah Berhasil Di Simpan...</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <p Style="color:black">Password Akan Di kirim kan Lewat email, Setelah Data Di verifikasi...</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
              </form>
            </div>
          </div>
    <!-- JS -->
	<script type="text/javascript">
	function launch_toast() {
		var x = document.getElementById("accept")
		x.className = "show";
		setTimeout(function(){ x.className = x.className.replace("show", ""); }, 50000);
	}
	
	 $(document).ready(function(){
	  $('#company_name').change(function(){
	   var company_name = $('#company_name').val();
	   if(company_name != ''){
		$.ajax({
		 url: "<?php echo base_url(); ?>register/validasi_form/cek_name",
		 method: "POST",
		 data: {company_name:company_name},
		 success: function(data){
		  $('#see_name').html(data);
		 }
		});
   }
  });
 });
 
 $(document).ready(function(){
	  $('#no_pic').change(function(){
	   var no_pic = $('#no_pic').val();
	   if(no_pic != ''){
		$.ajax({
		 url: "<?php echo base_url(); ?>register/validasi_form/nopic",
		 method: "POST",
		 data: {no_pic:no_pic},
		 success: function(data){
		  $('#see_no_pic').html(data);
		 }
		});
   }
  });
 });
 
 $(document).ready(function(){
	  $('#account_number').change(function(){
	   var account_number = $('#account_number').val();
	   if(account_number != ''){
		$.ajax({
		 url: "<?php echo base_url(); ?>register/validasi_form/accountnumber",
		 method: "POST",
		 data: {account_number:account_number},
		 success: function(data){
		  $('#see_account_number').html(data);
		 }
		});
   }
  });
 });
 
 $(document).ready(function(){
	  $('#company_phone_number').change(function(){
	   var company_phone_number = $('#company_phone_number').val();
	   if(company_phone_number){
		$.ajax({
		 url: "<?php echo base_url(); ?>register/validasi_form/companyphonenumber",
		 method: "POST",
		 data: {company_phone_number:company_phone_number},
		 success: function(data){
		  $('#see_company_phone_number').html(data);
		 }
		});
   }
  });
 });
 
 $(document).ready(function(){
	  $('#email').change(function(){
	   var email = $('#email').val();
	   if(email){
		$.ajax({
		 url: "<?php echo base_url(); ?>register/validasi_form/email",
		 method: "POST",
		 data: {email:email},
		 success: function(data){
		  $('#see_email').html(data);
		 }
		});
   }
  });
 });
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/reg_form/js/main.js"></script>
</body>
</html>