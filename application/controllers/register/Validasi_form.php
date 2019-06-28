
		 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi_form extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('register/Validasiform');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
	public function cek_name()
		 {
			  if($this->Validasiform->c_name($_POST['company_name'])){
			   echo '<span style="color:red"><i class="fa fa-times" aria-hidden="true">
			   </i> This company_name is already Used</span>';
			  }
			  else {
				echo '<span style="color:green"><i class="fa fa-check-circle-o" aria-hidden="true"></i> company_name is available</span>';
			  }
		 }
    
	public function nopic()
		 {
			  if($this->Validasiform->nopic($_POST['no_pic'])){
			   echo '<span style="color:red"><i class="fa fa-times" aria-hidden="true">
			   </i> This no_pic is already Used</span>';
			  }
			  else {
				echo '<span style="color:green"><i class="fa fa-check-circle-o" aria-hidden="true"></i> no_pic is available</span>';
			  }
		 }
		 
	public function accountnumber()
		 {
			  if($this->Validasiform->accountnumber($_POST['account_number'])){
			   echo '<span style="color:red"><i class="fa fa-times" aria-hidden="true">
			   </i> This account number is already Used</span>';
			  }
			  else {
				echo '<span style="color:green"><i class="fa fa-check-circle-o" aria-hidden="true"></i> account number is available</span>';
			  }
		 }
		 
	public function companyphonenumber()
		 {
			  if($this->Validasiform->companyphonenumber($_POST['company_phone_number'])){
			   echo '<span style="color:red"><i class="fa fa-times" aria-hidden="true">
			   </i> This company phone number is already Used</span>';
			  }
			  else {
				echo '<span style="color:green"><i class="fa fa-check-circle-o" aria-hidden="true"></i> company phone number is available</span>';
			  }
		 }
		 
	public function email()
		 {
			  if($this->Validasiform->email($_POST['email'])){
			   echo '<span style="color:red"><i class="fa fa-times" aria-hidden="true">
			   </i> This company email is already Used</span>';
			  }
			  else {
				echo '<span style="color:green"><i class="fa fa-check-circle-o" aria-hidden="true"></i> company email is available</span>';
			  }
		 }
	
}
